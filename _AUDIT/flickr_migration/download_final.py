#!/usr/bin/env python3
"""
Final Flickr migration — download EVERYTHING before account closure.

One image per unique photo. Original resolution. All metadata. Album assignments.

Usage:
  export FLICKR_API_KEY=f3fbe36344ba7a3bb39041f359bc1a84
  nohup python3 download_final.py > flickr_final.log 2>&1 &
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
PROGRESS_FILE = Path(__file__).parent / "download_final_progress.json"

BATCH_SIZE = 100
COOLDOWN_MINUTES = 5
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
                if data.get("stat") == "ok":
                    return data
                if data.get("stat") == "fail":
                    return data  # return failures too so we can handle them
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


# ── Step 1: Get ALL unique photo IDs from the account ──

def get_all_photos():
    """Get every photo in the account with url_o info."""
    all_photos = {}
    page = 1
    while True:
        data = flickr_api(
            "flickr.people.getPhotos",
            user_id=USER_ID,
            extras="url_o,url_l,url_m,original_format,tags,date_taken,machine_tags,o_dims",
            per_page=500,
            page=page,
        )
        time.sleep(DELAY_BETWEEN_API_CALLS)
        if not data:
            break
        photos = data.get("photos", {})
        for p in photos.get("photo", []):
            all_photos[p["id"]] = p
        total_pages = int(photos.get("pages", 1))
        log(f"  Fetched page {page}/{total_pages} — {len(all_photos)} unique photos so far")
        if page >= total_pages:
            break
        page += 1
    return all_photos


# ── Step 2: Get ALL albums ──

def get_all_albums():
    """Get every album with title and description."""
    albums = {}
    page = 1
    while True:
        data = flickr_api("flickr.photosets.getList", user_id=USER_ID, per_page=500, page=page)
        time.sleep(DELAY_BETWEEN_API_CALLS)
        if not data:
            break
        photosets = data.get("photosets", {})
        for s in photosets.get("photoset", []):
            albums[s["id"]] = {
                "id": s["id"],
                "title": s.get("title", {}).get("_content", ""),
                "description": s.get("description", {}).get("_content", ""),
                "photos": int(s.get("photos", 0)),
                "videos": int(s.get("videos", 0)),
            }
        if page >= int(photosets.get("pages", 1)):
            break
        page += 1
    return albums


# ── Step 3: Build photo→album mapping ──

def build_album_mapping(albums):
    """For each album, get its photo list. Returns {photo_id: [album_ids]}."""
    photo_albums = {}
    for i, (album_id, album) in enumerate(albums.items()):
        data = flickr_api(
            "flickr.photosets.getPhotos",
            photoset_id=album_id,
            user_id=USER_ID,
            per_page=500,
        )
        time.sleep(DELAY_BETWEEN_API_CALLS)
        if data:
            for p in data.get("photoset", {}).get("photo", []):
                photo_albums.setdefault(p["id"], []).append(album_id)
        if (i + 1) % 20 == 0:
            log(f"  Mapped {i+1}/{len(albums)} albums")
    return photo_albums


# ── Step 4: Get full metadata for one photo ──

def get_full_metadata(photo_id):
    """All metadata Flickr has: info, exif, contexts, sizes."""
    meta = {}

    # getInfo — title, description, tags, dates, location, license, views
    data = flickr_api("flickr.photos.getInfo", photo_id=photo_id)
    time.sleep(DELAY_BETWEEN_API_CALLS)
    meta["info"] = data.get("photo", {}) if data else {}

    # getExif — camera, lens, settings
    data = flickr_api("flickr.photos.getExif", photo_id=photo_id)
    time.sleep(DELAY_BETWEEN_API_CALLS)
    if data and data.get("stat") == "ok":
        meta["exif"] = data.get("photo", {}).get("exif", [])
    else:
        meta["exif"] = []

    # getSizes — all available resolution URLs
    data = flickr_api("flickr.photos.getSizes", photo_id=photo_id)
    time.sleep(DELAY_BETWEEN_API_CALLS)
    if data and data.get("stat") == "ok":
        meta["sizes"] = data.get("sizes", {}).get("size", [])
    else:
        meta["sizes"] = []

    return meta


# ── Main ──

def main():
    if not API_KEY:
        log("ERROR: FLICKR_API_KEY not set")
        sys.exit(1)

    OUTPUT_DIR.mkdir(parents=True, exist_ok=True)

    # Load progress
    progress = {}
    if PROGRESS_FILE.exists():
        with open(PROGRESS_FILE) as f:
            progress = json.load(f)

    # Load manifest
    manifest = {"albums": {}, "photos": {}}
    if MANIFEST_FILE.exists():
        with open(MANIFEST_FILE) as f:
            manifest = json.load(f)

    # ── Phase 1: Index ──
    if not manifest.get("albums"):
        log("=== Phase 1a: Fetching all albums ===")
        manifest["albums"] = get_all_albums()
        log(f"  Found {len(manifest['albums'])} albums")
        with open(MANIFEST_FILE, "w") as f:
            json.dump(manifest, f, indent=2)

    if not progress.get("album_mapping_done"):
        log("=== Phase 1b: Building photo→album mapping ===")
        photo_albums = build_album_mapping(manifest["albums"])
        manifest["photo_album_map"] = photo_albums
        progress["album_mapping_done"] = True
        with open(MANIFEST_FILE, "w") as f:
            json.dump(manifest, f, indent=2)
        with open(PROGRESS_FILE, "w") as f:
            json.dump(progress, f)
        log(f"  Mapped {len(photo_albums)} photos to albums")

    if not progress.get("photo_list_done"):
        log("=== Phase 1c: Fetching all unique photos ===")
        all_photos = get_all_photos()
        manifest["photo_list"] = {pid: p for pid, p in all_photos.items()}
        progress["photo_list_done"] = True
        with open(MANIFEST_FILE, "w") as f:
            json.dump(manifest, f, indent=2)
        with open(PROGRESS_FILE, "w") as f:
            json.dump(progress, f)
        log(f"  Found {len(all_photos)} unique photos")

    # ── Phase 2: Download + metadata ──
    log("=== Phase 2: Download originals + full metadata ===")

    photo_list = manifest.get("photo_list", {})
    photo_album_map = manifest.get("photo_album_map", {})
    completed = set(progress.get("completed_photos", []))
    downloaded_count = len(completed)
    failed_count = progress.get("failed", 0)

    photo_ids = sorted(photo_list.keys())
    total = len(photo_ids)
    log(f"  {total} unique photos, {len(completed)} already done, {total - len(completed)} remaining")

    batch_count = 0

    while True:
        batch_downloaded = 0
        rate_limited = False

        for photo_id in photo_ids:
            if photo_id in completed:
                continue
            if batch_downloaded >= BATCH_SIZE:
                break
            if rate_limited:
                break

            photo = photo_list[photo_id]

            # Determine best URL (original first)
            url = photo.get("url_o") or photo.get("url_l") or photo.get("url_m")
            if not url:
                log(f"  SKIP {photo_id} — no URL available")
                completed.add(photo_id)
                continue

            size_key = "url_o" if photo.get("url_o") else ("url_l" if photo.get("url_l") else "url_m")
            ext = url.split(".")[-1].split("?")[0][:4]
            filename = f"{photo_id}.{ext}"
            dest_path = OUTPUT_DIR / filename

            # Download image (skip if already exists at same or larger size)
            need_download = True
            if dest_path.exists():
                existing_size = dest_path.stat().st_size
                # If we already have it and it's url_o, skip download
                if size_key == "url_o" and existing_size > 1000:
                    need_download = False
                # If we have it but at lower res, re-download
                elif size_key != "url_o":
                    need_download = False  # no better version available

            if need_download:
                if not download_file(url, dest_path):
                    rate_limited = True
                    log(f"  RATE LIMITED at {batch_downloaded} downloads")
                    break
                time.sleep(DELAY_BETWEEN_DOWNLOADS)

            # Get full metadata
            meta = get_full_metadata(photo_id)

            # Extract structured fields
            info = meta.get("info", {})
            tags_raw = info.get("tags", {}).get("tag", [])
            tags = [t.get("raw", t.get("_content", "")) for t in tags_raw]

            # Build complete record
            manifest["photos"][photo_id] = {
                "id": photo_id,
                "filename": filename,
                "downloaded_size": size_key,
                "downloaded_url": url,
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
                    {"id": aid, "title": manifest["albums"].get(aid, {}).get("title", "")}
                    for aid in photo_album_map.get(photo_id, [])
                ],
                "exif": meta.get("exif", []),
                "all_sizes": meta.get("sizes", []),
                "full_info": info,
            }

            completed.add(photo_id)
            batch_downloaded += 1
            downloaded_count += 1

            if batch_downloaded % 10 == 0:
                log(f"  Progress: {batch_downloaded}/{BATCH_SIZE} (total: {downloaded_count}/{total})")

        # Save after each batch
        progress["completed_photos"] = list(completed)
        progress["failed"] = failed_count
        with open(PROGRESS_FILE, "w") as f:
            json.dump(progress, f)
        with open(MANIFEST_FILE, "w") as f:
            json.dump(manifest, f)

        batch_count += 1
        log(f"Batch {batch_count}: {batch_downloaded} processed (total: {downloaded_count}/{total})")

        if batch_downloaded == 0:
            log("=== ALL DONE ===")
            log(f"Total photos: {total}")
            log(f"Downloaded: {downloaded_count}")
            log(f"Failed: {failed_count}")
            break

        log(f"Cooldown {COOLDOWN_MINUTES} min...")
        time.sleep(COOLDOWN_MINUTES * 60)


if __name__ == "__main__":
    main()
