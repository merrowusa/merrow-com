#!/usr/bin/env python3
"""
Clean Flickr download — two phases, no mixing.

Phase 1: Download original images only. Skip if already have original.
Phase 2: Pull metadata only for photos missing metadata.

Usage:
  export FLICKR_API_KEY=f3fbe36344ba7a3bb39041f359bc1a84
  nohup python3 download_clean.py > flickr_clean.log 2>&1 &
"""

import os
import sys
import json
import time
import urllib.request
from pathlib import Path
from datetime import datetime

API_KEY = os.environ.get("FLICKR_API_KEY", "")
USER_ID = "25997048@N06"
OUTPUT_DIR = Path(__file__).parent.parent.parent / "apps/merrow.com/public/images/stitch-samples"
MANIFEST_FILE = Path(__file__).parent / "flickr_manifest_final.json"
PROGRESS_FILE = Path(__file__).parent / "download_clean_progress.json"

BATCH_SIZE = 100
COOLDOWN_MINUTES_IMAGES = 1   # HEAD checks are lightweight
COOLDOWN_MINUTES_META = 1     # API calls need more breathing room
DELAY_BETWEEN_DOWNLOADS = 1.0
DELAY_BETWEEN_API_CALLS = 0.5


def log(msg):
    print(f"[{datetime.now().strftime('%H:%M:%S')}] {msg}")
    sys.stdout.flush()


def flickr_api(method, **params):
    params["api_key"] = API_KEY
    params["format"] = "json"
    params["nojsoncallback"] = "1"
    query = "&".join(f"{k}={v}" for k, v in params.items())
    url = f"https://api.flickr.com/services/rest/?method={method}&{query}"
    for attempt in range(3):
        try:
            with urllib.request.urlopen(url, timeout=30) as r:
                data = json.loads(r.read().decode())
                if data.get("stat") in ("ok", "fail"):
                    return data
        except Exception:
            if attempt < 2:
                time.sleep(5)
    return None


def download_file(url, dest):
    for attempt in range(3):
        try:
            urllib.request.urlretrieve(url, dest)
            return True
        except Exception as e:
            if "429" in str(e):
                return False
            if attempt < 2:
                time.sleep(2)
    return False


def get_remote_size(url):
    """HEAD request to get Content-Length of remote file."""
    try:
        req = urllib.request.Request(url, method="HEAD")
        with urllib.request.urlopen(req, timeout=10) as resp:
            return int(resp.headers.get("Content-Length", 0))
    except Exception:
        return 0


def get_full_metadata(photo_id):
    """All metadata Flickr has: info, exif, sizes."""
    meta = {}
    data = flickr_api("flickr.photos.getInfo", photo_id=photo_id)
    time.sleep(DELAY_BETWEEN_API_CALLS)
    meta["info"] = data.get("photo", {}) if data else {}

    data = flickr_api("flickr.photos.getExif", photo_id=photo_id)
    time.sleep(DELAY_BETWEEN_API_CALLS)
    meta["exif"] = data.get("photo", {}).get("exif", []) if data and data.get("stat") == "ok" else []

    data = flickr_api("flickr.photos.getSizes", photo_id=photo_id)
    time.sleep(DELAY_BETWEEN_API_CALLS)
    meta["sizes"] = data.get("sizes", {}).get("size", []) if data and data.get("stat") == "ok" else []

    return meta


def save_progress(progress):
    with open(PROGRESS_FILE, "w") as f:
        json.dump(progress, f)


def save_manifest(manifest):
    with open(MANIFEST_FILE, "w") as f:
        json.dump(manifest, f)


def main():
    if not API_KEY:
        log("ERROR: FLICKR_API_KEY not set")
        sys.exit(1)

    OUTPUT_DIR.mkdir(parents=True, exist_ok=True)

    manifest = json.load(open(MANIFEST_FILE)) if MANIFEST_FILE.exists() else {}
    photo_list = manifest.get("photo_list", {})
    if not photo_list:
        log("ERROR: No photo_list in manifest. Run download_final.py Phase 1 first.")
        sys.exit(1)

    progress = json.load(open(PROGRESS_FILE)) if PROGRESS_FILE.exists() else {}
    photo_ids = sorted(photo_list.keys())
    total = len(photo_ids)

    # ════════════════════════════════════════════════════════
    # PHASE 1: Download original images
    # ════════════════════════════════════════════════════════

    if not progress.get("images_done"):
        images_completed = set(progress.get("images_completed", []))
        images_downloaded = progress.get("images_downloaded", 0)
        images_skipped = progress.get("images_skipped", 0)

        log(f"=== PHASE 1: Download originals ===")
        log(f"  {total} photos, {len(images_completed)} already checked, {total - len(images_completed)} remaining")

        batch_count = 0
        while True:
            batch_done = 0
            rate_limited = False

            for photo_id in photo_ids:
                if photo_id in images_completed:
                    continue
                if batch_done >= BATCH_SIZE:
                    break
                if rate_limited:
                    break

                photo = photo_list[photo_id]
                url_o = photo.get("url_o")
                if not url_o:
                    images_completed.add(photo_id)
                    continue

                ext = url_o.split(".")[-1].split("?")[0][:4]
                filename = f"{photo_id}.{ext}"
                dest_path = OUTPUT_DIR / filename

                if dest_path.exists():
                    # Check if existing file is the original
                    disk_size = dest_path.stat().st_size
                    remote_size = get_remote_size(url_o)
                    if remote_size > 0 and disk_size >= remote_size:
                        # Already have the original
                        images_skipped += 1
                        images_completed.add(photo_id)
                        batch_done += 1
                        if batch_done % 10 == 0:
                            log(f"  Progress: {batch_done}/{BATCH_SIZE} (total checked: {len(images_completed)}/{total}, downloaded: {images_downloaded}, skipped: {images_skipped})")
                        continue
                    # Smaller file — overwrite with original
                    log(f"  UPGRADE {photo_id}: disk={disk_size} < remote={remote_size}")

                # Download the original
                if not download_file(url_o, dest_path):
                    rate_limited = True
                    log(f"  RATE LIMITED at {batch_done} in batch")
                    break
                images_downloaded += 1
                time.sleep(DELAY_BETWEEN_DOWNLOADS)

                images_completed.add(photo_id)
                batch_done += 1
                if batch_done % 10 == 0:
                    log(f"  Progress: {batch_done}/{BATCH_SIZE} (total checked: {len(images_completed)}/{total}, downloaded: {images_downloaded}, skipped: {images_skipped})")

            # Save after each batch
            progress["images_completed"] = list(images_completed)
            progress["images_downloaded"] = images_downloaded
            progress["images_skipped"] = images_skipped
            save_progress(progress)

            batch_count += 1
            log(f"Batch {batch_count}: {batch_done} checked (downloaded: {images_downloaded}, skipped: {images_skipped}, total: {len(images_completed)}/{total})")

            if batch_done == 0 or len(images_completed) >= total:
                progress["images_done"] = True
                save_progress(progress)
                log(f"=== PHASE 1 COMPLETE: {images_downloaded} downloaded, {images_skipped} already had original ===")
                break

            log(f"Cooldown {COOLDOWN_MINUTES_IMAGES} min...")
            time.sleep(COOLDOWN_MINUTES_IMAGES * 60)

    # ════════════════════════════════════════════════════════
    # PHASE 2: Pull metadata for photos missing it
    # ════════════════════════════════════════════════════════

    photos_with_meta = set(manifest.get("photos", {}).keys())
    missing_meta = [pid for pid in photo_ids if pid not in photos_with_meta]
    meta_completed = set(progress.get("meta_completed", []))
    missing_meta = [pid for pid in missing_meta if pid not in meta_completed]

    if not missing_meta:
        log("=== PHASE 2: All metadata already complete ===")
    else:
        log(f"=== PHASE 2: Pull metadata for {len(missing_meta)} photos ===")
        photo_album_map = manifest.get("photo_album_map", {})
        albums = manifest.get("albums", {})

        if "photos" not in manifest:
            manifest["photos"] = {}

        batch_count = 0
        idx = 0
        while idx < len(missing_meta):
            batch_done = 0
            batch_start = idx

            while idx < len(missing_meta) and batch_done < BATCH_SIZE:
                photo_id = missing_meta[idx]
                photo = photo_list[photo_id]

                meta = get_full_metadata(photo_id)
                info = meta.get("info", {})
                tags_raw = info.get("tags", {}).get("tag", [])
                tags = [t.get("raw", t.get("_content", "")) for t in tags_raw]

                url_o = photo.get("url_o", "")
                ext = url_o.split(".")[-1].split("?")[0][:4] if url_o else "jpg"

                manifest["photos"][photo_id] = {
                    "id": photo_id,
                    "filename": f"{photo_id}.{ext}",
                    "downloaded_size": "url_o",
                    "downloaded_url": url_o,
                    "title": info.get("title", {}).get("_content", ""),
                    "description": info.get("description", {}).get("_content", ""),
                    "tags": tags,
                    "dates": info.get("dates", {}),
                    "location": info.get("location", {}),
                    "views": info.get("views", "0"),
                    "license": info.get("license", ""),
                    "original_format": info.get("originalformat", ""),
                    "media": info.get("media", ""),
                    "albums": [
                        {"id": aid, "title": albums.get(aid, {}).get("title", "")}
                        for aid in photo_album_map.get(photo_id, [])
                    ],
                    "exif": meta.get("exif", []),
                    "all_sizes": meta.get("sizes", []),
                    "full_info": info,
                }

                meta_completed.add(photo_id)
                batch_done += 1
                idx += 1
                if batch_done % 10 == 0:
                    log(f"  Meta progress: {batch_done}/{BATCH_SIZE} (total: {len(meta_completed)}/{len(missing_meta) + len(meta_completed)})")

            # Save after each batch
            progress["meta_completed"] = list(meta_completed)
            save_progress(progress)
            save_manifest(manifest)

            batch_count += 1
            log(f"Meta batch {batch_count}: {batch_done} done (total: {idx}/{len(missing_meta)})")

            if idx < len(missing_meta):
                log(f"Cooldown {COOLDOWN_MINUTES_META} min...")
                time.sleep(COOLDOWN_MINUTES_META * 60)

    log("=== ALL DONE ===")
    log(f"  Total photos: {total}")
    log(f"  Photos with metadata: {len(manifest.get('photos', {}))}")
    log(f"  Images on disk: {len(list(OUTPUT_DIR.glob('*.*')))}")


if __name__ == "__main__":
    main()
