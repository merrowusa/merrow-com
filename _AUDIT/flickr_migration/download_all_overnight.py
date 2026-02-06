#!/usr/bin/env python3
"""
Download ALL remaining Flickr images with aggressive rate limiting.
Designed to run overnight without hitting 429 errors.

Usage:
  export FLICKR_API_KEY=f3fbe36344ba7a3bb39041f359bc1a84
  nohup python3 download_all_overnight.py > flickr_download.log 2>&1 &

Expected runtime: ~4-6 hours for remaining ~8000 images
"""

import os
import sys
import json
import time
import urllib.request
from pathlib import Path
from datetime import datetime

# Configuration
FLICKR_API_KEY = os.environ.get("FLICKR_API_KEY", "")
USER_ID = "25997048@N06"
OUTPUT_DIR = Path(__file__).parent.parent.parent / "apps/merrow.com/public/images/stitch-samples"
MANIFEST_FILE = Path(__file__).parent / "flickr_manifest.json"
PROGRESS_FILE = Path(__file__).parent / "download_progress.json"

# Conservative rate limiting to avoid 429s
API_DELAY = 1.0  # 1 second between API calls
DOWNLOAD_DELAY = 2.0  # 2 seconds between image downloads
BACKOFF_MULTIPLIER = 2.0
MAX_BACKOFF = 300  # 5 minutes max


def log(msg):
    print(f"[{datetime.now().isoformat()}] {msg}")
    sys.stdout.flush()


def flickr_api_call(method, retries=3, **params):
    """Make a Flickr API call with retry logic."""
    params["api_key"] = FLICKR_API_KEY
    params["format"] = "json"
    params["nojsoncallback"] = "1"

    query = "&".join(f"{k}={v}" for k, v in params.items())
    url = f"https://api.flickr.com/services/rest/?method={method}&{query}"

    delay = API_DELAY
    for attempt in range(retries):
        try:
            with urllib.request.urlopen(url, timeout=30) as response:
                data = json.loads(response.read().decode())
                if data.get("stat") == "ok":
                    return data
                else:
                    log(f"  API error: {data.get('message', 'Unknown')}")
                    return None
        except Exception as e:
            if "429" in str(e):
                delay = min(delay * BACKOFF_MULTIPLIER, MAX_BACKOFF)
                log(f"  Rate limited, backing off {delay}s...")
                time.sleep(delay)
            else:
                log(f"  API error: {e}")
                if attempt < retries - 1:
                    time.sleep(delay)
    return None


def download_image(url, dest_path, retries=5):
    """Download an image with exponential backoff."""
    delay = DOWNLOAD_DELAY
    for attempt in range(retries):
        try:
            urllib.request.urlretrieve(url, dest_path)
            return True
        except Exception as e:
            if "429" in str(e):
                delay = min(delay * BACKOFF_MULTIPLIER, MAX_BACKOFF)
                log(f"    Rate limited on download, waiting {delay}s...")
                time.sleep(delay)
            else:
                log(f"    Download error: {e}")
                return False
    return False


def get_all_photosets():
    """Fetch ALL photosets for the user."""
    all_sets = []
    page = 1
    while True:
        data = flickr_api_call(
            "flickr.photosets.getList",
            user_id=USER_ID,
            per_page=500,
            page=page
        )
        time.sleep(API_DELAY)

        if not data:
            break

        photosets = data.get("photosets", {})
        sets = photosets.get("photoset", [])
        if not sets:
            break

        for s in sets:
            all_sets.append({
                "id": s.get("id"),
                "title": s.get("title", {}).get("_content", ""),
                "photos": int(s.get("photos", 0)),
            })

        if page >= int(photosets.get("pages", 1)):
            break
        page += 1

    return all_sets


def get_photoset_photos(photoset_id):
    """Fetch all photo info from a photoset."""
    data = flickr_api_call(
        "flickr.photosets.getPhotos",
        photoset_id=photoset_id,
        user_id=USER_ID,
        extras="url_o,url_l,url_m,url_s,tags"
    )
    time.sleep(API_DELAY)
    if data:
        return data.get("photoset", {}).get("photo", [])
    return []


def get_photo_info(photo_id):
    """Fetch detailed photo info including tags."""
    data = flickr_api_call("flickr.photos.getInfo", photo_id=photo_id)
    time.sleep(API_DELAY)
    if data:
        return data.get("photo", {})
    return {}


def get_best_url(photo):
    for key in ["url_o", "url_l", "url_m"]:
        if key in photo:
            return photo[key]
    return None


def save_progress(progress):
    with open(PROGRESS_FILE, "w") as f:
        json.dump(progress, f, indent=2)


def load_progress():
    if PROGRESS_FILE.exists():
        with open(PROGRESS_FILE) as f:
            return json.load(f)
    return {"completed_sets": [], "downloaded": 0, "failed": 0}


def main():
    if not FLICKR_API_KEY:
        log("ERROR: FLICKR_API_KEY not set")
        sys.exit(1)

    log("=== Flickr Full Download (Overnight Mode) ===")
    log(f"Output: {OUTPUT_DIR}")

    # Load existing manifest and progress
    manifest = {}
    if MANIFEST_FILE.exists():
        with open(MANIFEST_FILE) as f:
            manifest = json.load(f)
    if "sets" not in manifest:
        manifest["sets"] = {}

    progress = load_progress()
    completed_sets = set(progress.get("completed_sets", []))

    OUTPUT_DIR.mkdir(parents=True, exist_ok=True)

    # Get all photosets
    log("Discovering photosets...")
    all_sets = get_all_photosets()
    log(f"Found {len(all_sets)} photosets")

    total_expected = sum(s["photos"] for s in all_sets)
    log(f"Total images expected: {total_expected}")

    downloaded = progress.get("downloaded", 0)
    failed = progress.get("failed", 0)

    for i, set_info in enumerate(all_sets, 1):
        set_id = set_info["id"]
        set_title = set_info["title"][:40]

        if set_id in completed_sets:
            log(f"[{i}/{len(all_sets)}] Skipping {set_title} (completed)")
            continue

        log(f"[{i}/{len(all_sets)}] Processing: {set_title}...")

        set_dir = OUTPUT_DIR / set_id
        set_dir.mkdir(exist_ok=True)

        photos = get_photoset_photos(set_id)
        if not photos:
            log(f"  No photos")
            completed_sets.add(set_id)
            continue

        # Check what's already downloaded
        existing = set()
        for f in set_dir.iterdir():
            if f.suffix in [".jpg", ".png", ".gif"]:
                existing.add(f.stem)

        needed = [p for p in photos if p["id"] not in existing]
        log(f"  {len(photos)} photos, need {len(needed)}")

        set_data = manifest["sets"].get(set_id, {
            "title": set_info["title"],
            "images": []
        })
        existing_ids = {img["id"] for img in set_data.get("images", [])}

        for photo in needed:
            url = get_best_url(photo)
            if not url:
                continue

            ext = url.split(".")[-1].split("?")[0]
            filename = f"{photo['id']}.{ext}"
            dest_path = set_dir / filename

            # Get tags
            photo_info = get_photo_info(photo["id"])
            tags = []
            if photo_info and "tags" in photo_info:
                tag_list = photo_info["tags"].get("tag", [])
                tags = [t.get("raw", t.get("_content", "")) for t in tag_list]

            title = photo_info.get("title", {}).get("_content", "") if photo_info else ""

            if download_image(url, dest_path):
                downloaded += 1
                if photo["id"] not in existing_ids:
                    set_data["images"].append({
                        "filename": filename,
                        "id": photo["id"],
                        "title": title,
                        "tags": tags,
                    })
                if downloaded % 50 == 0:
                    log(f"    Progress: {downloaded} downloaded, {failed} failed")
            else:
                failed += 1

            time.sleep(DOWNLOAD_DELAY)

        manifest["sets"][set_id] = set_data
        completed_sets.add(set_id)

        # Save progress periodically
        progress = {
            "completed_sets": list(completed_sets),
            "downloaded": downloaded,
            "failed": failed,
        }
        save_progress(progress)

        # Save manifest periodically
        with open(MANIFEST_FILE, "w") as f:
            json.dump(manifest, f, indent=2)

    log("")
    log("=== COMPLETE ===")
    log(f"Downloaded: {downloaded}")
    log(f"Failed: {failed}")
    log(f"Manifest saved: {MANIFEST_FILE}")


if __name__ == "__main__":
    main()
