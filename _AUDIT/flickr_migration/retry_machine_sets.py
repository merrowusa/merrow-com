#!/usr/bin/env python3
"""
Retry downloading the original 50 machine-referenced Flickr sets.
Uses slower rate limiting to avoid 429 errors.

Usage:
  export FLICKR_API_KEY=your_key_here
  python3 retry_machine_sets.py
"""

import os
import sys
import json
import time
import urllib.request
from pathlib import Path

# Configuration
FLICKR_API_KEY = os.environ.get("FLICKR_API_KEY", "")
USER_ID = "25997048@N06"
OUTPUT_DIR = Path(__file__).parent.parent.parent / "apps/merrow.com/public/images/stitch-samples"
MANIFEST_FILE = Path(__file__).parent / "flickr_manifest.json"

# Original 50 sets from machine_pages (these are the priority)
MACHINE_SETS = [
    "72157606889366838", "72157606892621481", "72157606892968601", "72157606893059633",
    "72157606893157487", "72157607111896150", "72157607112012678", "72157607121363196",
    "72157607121822414", "72157607121828806", "72157607121841610", "72157607121904804",
    "72157607121991216", "72157607122912878", "72157607122990794", "72157607123302208",
    "72157607123349362", "72157607123353524", "72157607123380786", "72157607123405796",
    "72157607123412620", "72157607123596120", "72157607126307273", "72157607126442279",
    "72157607127089639", "72157607127097671", "72157607127138819", "72157607127162875",
    "72157607127204419", "72157607127295219", "72157607127364375", "72157607127479491",
    "72157607127609185", "72157607127664909", "72157607127670437", "72157607128035095",
    "72157607128082965", "72157607128145131", "72157607128230555", "72157607128277893",
    "72157607128334341", "72157607128534375", "72157607128597227", "72157607128676629",
    "72157607128725475", "72157607128791959", "72157607128808437", "72157627455556498",
    "72157629836062890", "72157629961695498",
]

# Slower rate limiting
API_DELAY = 0.5  # seconds between API calls
DOWNLOAD_DELAY = 1.0  # seconds between image downloads


def flickr_api_call(method, **params):
    """Make a Flickr API call."""
    params["api_key"] = FLICKR_API_KEY
    params["format"] = "json"
    params["nojsoncallback"] = "1"

    query = "&".join(f"{k}={v}" for k, v in params.items())
    url = f"https://api.flickr.com/services/rest/?method={method}&{query}"

    try:
        with urllib.request.urlopen(url, timeout=30) as response:
            data = json.loads(response.read().decode())
            if data.get("stat") == "ok":
                return data
            else:
                print(f"  API error: {data.get('message', 'Unknown error')}")
                return None
    except Exception as e:
        print(f"  Error: {e}")
        return None


def get_photoset_photos(photoset_id):
    """Fetch all photo info from a Flickr photoset."""
    data = flickr_api_call(
        "flickr.photosets.getPhotos",
        photoset_id=photoset_id,
        user_id=USER_ID,
        extras="url_o,url_l,url_m,url_s,tags"
    )
    if data:
        return data.get("photoset", {}).get("photo", [])
    return []


def get_photo_info(photo_id):
    """Fetch detailed info for a photo including full tag data."""
    data = flickr_api_call("flickr.photos.getInfo", photo_id=photo_id)
    if data:
        return data.get("photo", {})
    return {}


def download_image(url, dest_path, retries=3):
    """Download an image with retry logic."""
    for attempt in range(retries):
        try:
            urllib.request.urlretrieve(url, dest_path)
            return True
        except Exception as e:
            if "429" in str(e):
                wait_time = (attempt + 1) * 30  # 30s, 60s, 90s
                print(f"    Rate limited, waiting {wait_time}s...")
                time.sleep(wait_time)
            else:
                print(f"    Failed to download: {e}")
                return False
    return False


def get_best_url(photo):
    """Get the best available URL for a photo."""
    for key in ["url_o", "url_l", "url_m"]:
        if key in photo:
            return photo[key]
    return None


def main():
    if not FLICKR_API_KEY:
        print("ERROR: FLICKR_API_KEY environment variable not set.")
        sys.exit(1)

    print("Flickr Machine Sets Retry")
    print("=========================")
    print(f"Sets to check: {len(MACHINE_SETS)}")
    print(f"Output directory: {OUTPUT_DIR}")
    print("")

    # Load existing manifest
    manifest = {}
    if MANIFEST_FILE.exists():
        with open(MANIFEST_FILE) as f:
            manifest = json.load(f)

    if "sets" not in manifest:
        manifest["sets"] = {}

    OUTPUT_DIR.mkdir(parents=True, exist_ok=True)

    total_downloaded = 0
    total_skipped = 0

    for i, set_id in enumerate(MACHINE_SETS, 1):
        set_dir = OUTPUT_DIR / set_id
        existing_count = len(list(set_dir.glob("*.jpg"))) + len(list(set_dir.glob("*.png"))) if set_dir.exists() else 0

        print(f"[{i}/{len(MACHINE_SETS)}] Set {set_id} (existing: {existing_count})...")

        photos = get_photoset_photos(set_id)
        time.sleep(API_DELAY)

        if not photos:
            print(f"  No photos found")
            continue

        needed = [p for p in photos if not (set_dir / f"{p['id']}.jpg").exists()
                  and not (set_dir / f"{p['id']}.png").exists()]

        if not needed:
            print(f"  All {len(photos)} photos already downloaded")
            total_skipped += len(photos)
            continue

        print(f"  Found {len(photos)} photos, need {len(needed)}")
        set_dir.mkdir(exist_ok=True)

        set_data = manifest["sets"].get(set_id, {"title": "", "images": []})
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
            time.sleep(API_DELAY)

            tags = []
            if photo_info and "tags" in photo_info:
                tag_list = photo_info["tags"].get("tag", [])
                tags = [t.get("raw", t.get("_content", "")) for t in tag_list]

            title = photo.get("title", "")
            if photo_info:
                title = photo_info.get("title", {}).get("_content", title)

            if download_image(url, dest_path):
                total_downloaded += 1
                print(f"    Downloaded {filename} ({len(tags)} tags)")

                if photo["id"] not in existing_ids:
                    set_data["images"].append({
                        "filename": filename,
                        "id": photo["id"],
                        "title": title,
                        "tags": tags,
                    })

            time.sleep(DOWNLOAD_DELAY)

        manifest["sets"][set_id] = set_data

    # Save updated manifest
    with open(MANIFEST_FILE, "w") as f:
        json.dump(manifest, f, indent=2)

    print("")
    print("=========================")
    print(f"Complete!")
    print(f"Images downloaded: {total_downloaded}")
    print(f"Images skipped (existing): {total_skipped}")
    print(f"Manifest updated: {MANIFEST_FILE}")


if __name__ == "__main__":
    main()
