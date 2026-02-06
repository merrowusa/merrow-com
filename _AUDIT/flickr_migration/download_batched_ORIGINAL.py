#!/usr/bin/env python3
"""
Batched Flickr download - downloads in chunks with cooldown periods.
Avoids sustained rate limiting by spreading requests across time.

Usage:
  export FLICKR_API_KEY=f3fbe36344ba7a3bb39041f359bc1a84
  nohup python3 download_batched.py > flickr_batched.log 2>&1 &

Strategy:
  - Download 50 images
  - Cooldown for 30 minutes
  - Repeat until done

Expected total time: ~8 hours for remaining ~8000 images
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

# Batching config
BATCH_SIZE = 50  # Images per batch
COOLDOWN_MINUTES = 30  # Minutes between batches
DELAY_BETWEEN_DOWNLOADS = 2.0  # Seconds between downloads within a batch
DELAY_BETWEEN_API_CALLS = 1.0  # Seconds between API calls

# Use url_l (large) instead of url_o (original) - faster, less rate limiting
PREFERRED_SIZES = ["url_l", "url_m", "url_o"]


def log(msg):
    print(f"[{datetime.now().strftime('%H:%M:%S')}] {msg}")
    sys.stdout.flush()


def flickr_api_call(method, **params):
    params["api_key"] = FLICKR_API_KEY
    params["format"] = "json"
    params["nojsoncallback"] = "1"
    query = "&".join(f"{k}={v}" for k, v in params.items())
    url = f"https://api.flickr.com/services/rest/?method={method}&{query}"

    for attempt in range(3):
        try:
            with urllib.request.urlopen(url, timeout=30) as response:
                data = json.loads(response.read().decode())
                if data.get("stat") == "ok":
                    return data
        except Exception as e:
            if attempt < 2:
                time.sleep(5)
    return None


def download_image(url, dest_path):
    for attempt in range(3):
        try:
            urllib.request.urlretrieve(url, dest_path)
            return True
        except Exception as e:
            if "429" in str(e):
                return False  # Rate limited - stop this batch
            if attempt < 2:
                time.sleep(2)
    return False


def get_best_url(photo):
    for key in PREFERRED_SIZES:
        if key in photo:
            return photo[key]
    return None


def get_all_photosets():
    all_sets = []
    page = 1
    while True:
        data = flickr_api_call("flickr.photosets.getList", user_id=USER_ID, per_page=500, page=page)
        time.sleep(DELAY_BETWEEN_API_CALLS)
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
            })
        if page >= int(photosets.get("pages", 1)):
            break
        page += 1
    return all_sets


def get_photoset_photos(photoset_id):
    data = flickr_api_call(
        "flickr.photosets.getPhotos",
        photoset_id=photoset_id,
        user_id=USER_ID,
        extras="url_o,url_l,url_m,tags"
    )
    time.sleep(DELAY_BETWEEN_API_CALLS)
    if data:
        return data.get("photoset", {}).get("photo", [])
    return []


def get_photo_info(photo_id):
    data = flickr_api_call("flickr.photos.getInfo", photo_id=photo_id)
    time.sleep(DELAY_BETWEEN_API_CALLS)
    if data:
        return data.get("photo", {})
    return {}


def load_progress():
    if PROGRESS_FILE.exists():
        with open(PROGRESS_FILE) as f:
            return json.load(f)
    return {"completed_sets": [], "downloaded": 0, "failed": 0, "last_set_index": 0}


def save_progress(progress):
    with open(PROGRESS_FILE, "w") as f:
        json.dump(progress, f)


def load_manifest():
    if MANIFEST_FILE.exists():
        with open(MANIFEST_FILE) as f:
            return json.load(f)
    return {"sets": {}}


def save_manifest(manifest):
    with open(MANIFEST_FILE, "w") as f:
        json.dump(manifest, f, indent=2)


def main():
    if not FLICKR_API_KEY:
        log("ERROR: FLICKR_API_KEY not set")
        sys.exit(1)

    log("=== Flickr Batched Download ===")
    log(f"Batch size: {BATCH_SIZE} images")
    log(f"Cooldown: {COOLDOWN_MINUTES} minutes between batches")

    OUTPUT_DIR.mkdir(parents=True, exist_ok=True)

    progress = load_progress()
    manifest = load_manifest()
    if "sets" not in manifest:
        manifest["sets"] = {}

    all_sets = get_all_photosets()
    log(f"Found {len(all_sets)} photosets")

    total_downloaded = progress.get("downloaded", 0)
    total_failed = progress.get("failed", 0)
    batch_count = 0

    while True:
        batch_downloaded = 0
        rate_limited = False

        for set_idx, set_info in enumerate(all_sets):
            if rate_limited:
                break

            set_id = set_info["id"]
            set_dir = OUTPUT_DIR / set_id

            # Get existing files
            existing = set()
            if set_dir.exists():
                for f in set_dir.iterdir():
                    if f.suffix.lower() in [".jpg", ".jpeg", ".png", ".gif"]:
                        existing.add(f.stem)

            photos = get_photoset_photos(set_id)
            needed = [p for p in photos if p["id"] not in existing]

            if not needed:
                continue

            set_dir.mkdir(exist_ok=True)
            set_data = manifest["sets"].get(set_id, {"title": set_info["title"], "images": []})
            existing_ids = {img["id"] for img in set_data.get("images", [])}

            for photo in needed:
                if batch_downloaded >= BATCH_SIZE:
                    break

                url = get_best_url(photo)
                if not url:
                    continue

                ext = url.split(".")[-1].split("?")[0][:4]
                filename = f"{photo['id']}.{ext}"
                dest_path = set_dir / filename

                # Get tags
                photo_info = get_photo_info(photo["id"])
                tags = []
                if photo_info and "tags" in photo_info:
                    tags = [t.get("raw", t.get("_content", "")) for t in photo_info["tags"].get("tag", [])]
                title = photo_info.get("title", {}).get("_content", "") if photo_info else ""

                if download_image(url, dest_path):
                    batch_downloaded += 1
                    total_downloaded += 1

                    if photo["id"] not in existing_ids:
                        set_data["images"].append({
                            "filename": filename,
                            "id": photo["id"],
                            "title": title,
                            "tags": tags,
                        })

                    if batch_downloaded % 10 == 0:
                        log(f"  Batch progress: {batch_downloaded}/{BATCH_SIZE}")
                else:
                    rate_limited = True
                    log(f"  Rate limited after {batch_downloaded} downloads")
                    break

                time.sleep(DELAY_BETWEEN_DOWNLOADS)

            manifest["sets"][set_id] = set_data

            if batch_downloaded >= BATCH_SIZE:
                break

        # Save progress after each batch
        progress["downloaded"] = total_downloaded
        progress["failed"] = total_failed
        save_progress(progress)
        save_manifest(manifest)

        batch_count += 1
        log(f"Batch {batch_count} complete: {batch_downloaded} downloaded (total: {total_downloaded})")

        if batch_downloaded == 0:
            log("No more images to download!")
            break

        # Cooldown
        log(f"Cooling down for {COOLDOWN_MINUTES} minutes...")
        time.sleep(COOLDOWN_MINUTES * 60)
        log("Resuming...")

    log("")
    log("=== COMPLETE ===")
    log(f"Total downloaded: {total_downloaded}")


if __name__ == "__main__":
    main()
