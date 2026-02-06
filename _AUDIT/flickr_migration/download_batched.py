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

# Batching config — tuned up from conservative (50/30min/2s)
# Zero 429s in 19 batches = cooldown was overkill
BATCH_SIZE = 200  # Images per batch (was 50)
COOLDOWN_MINUTES = 5  # Minutes between batches (was 30)
DELAY_BETWEEN_DOWNLOADS = 1.0  # Seconds between downloads (was 2.0)
DELAY_BETWEEN_API_CALLS = 0.5  # Seconds between API calls (was 1.0)

# ORIGINALS FIRST — these are permanent assets, Flickr is being closed
PREFERRED_SIZES = ["url_o", "url_l", "url_m"]


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
        extras="url_o,url_l,url_m,tags,description,date_taken,machine_tags,o_dims,original_format"
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


def get_photo_exif(photo_id):
    """Get EXIF/camera data for a photo."""
    data = flickr_api_call("flickr.photos.getExif", photo_id=photo_id)
    time.sleep(DELAY_BETWEEN_API_CALLS)
    if data and data.get("stat") == "ok":
        return data.get("photo", {}).get("exif", [])
    return []


def get_photo_contexts(photo_id):
    """Get all sets/groups this photo belongs to — critical for machine model mapping."""
    data = flickr_api_call("flickr.photos.getAllContexts", photo_id=photo_id)
    time.sleep(DELAY_BETWEEN_API_CALLS)
    if data and data.get("stat") == "ok":
        return {
            "sets": data.get("set", []),
            "pools": data.get("pool", []),
        }
    return {"sets": [], "pools": []}


def get_photo_sizes(photo_id):
    """Get all available size URLs for a photo."""
    data = flickr_api_call("flickr.photos.getSizes", photo_id=photo_id)
    time.sleep(DELAY_BETWEEN_API_CALLS)
    if data and data.get("stat") == "ok":
        return data.get("sizes", {}).get("size", [])
    return []


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

            # Build map of existing files with sizes for upgrade detection
            existing_sizes = {}
            if set_dir.exists():
                for f in set_dir.iterdir():
                    if f.suffix.lower() in [".jpg", ".jpeg", ".png", ".gif"]:
                        existing_sizes[f.stem] = f.stat().st_size

            # A photo is needed if:
            # 1. Not downloaded at all, OR
            # 2. Downloaded but url_o is available and existing file is likely not original
            #    (url_o typically > url_l; if existing < url_o size, re-download)
            needed = []
            for p in photos:
                if p["id"] not in existing_sizes:
                    needed.append(p)
                elif "url_o" in p and existing_sizes.get(p["id"], 0) < int(p.get("width_o", 0)) * 100:
                    # Heuristic: if url_o exists and file seems too small, upgrade it
                    needed.append(p)

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

                # Skip if we already have this file AND it was from url_o
                ext = url.split(".")[-1].split("?")[0][:4]
                filename = f"{photo['id']}.{ext}"
                dest_path = set_dir / filename

                if dest_path.exists() and "url_o" not in photo:
                    # No original available, keep what we have
                    continue

                is_upgrade = dest_path.exists()

                # Get FULL metadata — Flickr is being closed, capture EVERYTHING
                photo_info = get_photo_info(photo["id"])
                tags = []
                if photo_info and "tags" in photo_info:
                    tags = [t.get("raw", t.get("_content", "")) for t in photo_info["tags"].get("tag", [])]
                title = photo_info.get("title", {}).get("_content", "") if photo_info else ""
                description = photo_info.get("description", {}).get("_content", "") if photo_info else ""
                dates = photo_info.get("dates", {}) if photo_info else {}
                views = photo_info.get("views", "0") if photo_info else "0"
                license_id = photo_info.get("license", "") if photo_info else ""
                original_format = photo_info.get("originalformat", "") if photo_info else ""
                media = photo_info.get("media", "") if photo_info else ""
                urls = photo_info.get("urls", {}) if photo_info else {}
                notes = photo_info.get("notes", {}) if photo_info else {}

                # EXIF data (camera, lens, settings)
                exif_data = get_photo_exif(photo["id"])

                # All contexts — which photosets this belongs to (machine model mapping!)
                contexts = get_photo_contexts(photo["id"])

                # All available sizes
                sizes = get_photo_sizes(photo["id"])

                if download_image(url, dest_path):
                    batch_downloaded += 1
                    total_downloaded += 1
                    if is_upgrade:
                        log(f"    UPGRADED {photo['id']} to original")

                    # Store or update full metadata
                    img_entry = {
                        "filename": filename,
                        "id": photo["id"],
                        "title": title,
                        "description": description,
                        "tags": tags,
                        "dates": dates,
                        "views": views,
                        "license": license_id,
                        "original_format": original_format,
                        "media": media,
                        "flickr_urls": urls,
                        "notes": notes,
                        "source_url": url,
                        "size_key": "url_o" if "url_o" in photo else ("url_l" if "url_l" in photo else "url_m"),
                        "exif": exif_data,
                        "contexts": contexts,
                        "all_sizes": sizes,
                        "full_api_response": photo_info,
                    }
                    # Replace existing entry or append
                    replaced = False
                    for i, existing_img in enumerate(set_data.get("images", [])):
                        if existing_img.get("id") == photo["id"]:
                            set_data["images"][i] = img_entry
                            replaced = True
                            break
                    if not replaced:
                        set_data.setdefault("images", []).append(img_entry)

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
