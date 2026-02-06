#!/usr/bin/env python3
"""
Download ALL images from the merrowmachine Flickr account.
Enumerates all photosets, downloads all images, and fetches tags.

Usage:
  export FLICKR_API_KEY=your_key_here
  python3 download_flickr_sets.py

Flickr account: merrowmachine (userId: 25997048@N06)
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


def get_all_photosets():
    """Fetch ALL photosets for the user account."""
    all_sets = []
    page = 1
    per_page = 500  # max allowed

    while True:
        data = flickr_api_call(
            "flickr.photosets.getList",
            user_id=USER_ID,
            per_page=per_page,
            page=page
        )

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
                "description": s.get("description", {}).get("_content", ""),
                "photos": s.get("photos", 0),
            })

        # Check if there are more pages
        total_pages = int(photosets.get("pages", 1))
        if page >= total_pages:
            break
        page += 1
        time.sleep(0.3)

    return all_sets


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


def download_image(url, dest_path):
    """Download an image to the specified path."""
    try:
        urllib.request.urlretrieve(url, dest_path)
        return True
    except Exception as e:
        print(f"    Failed to download {url}: {e}")
        return False


def get_best_url(photo):
    """Get the best available URL for a photo (prefer original, then large, then medium)."""
    for key in ["url_o", "url_l", "url_m"]:
        if key in photo:
            return photo[key]
    return None


def main():
    if not FLICKR_API_KEY:
        print("ERROR: FLICKR_API_KEY environment variable not set.")
        print("")
        print("To get an API key:")
        print("1. Go to https://www.flickr.com/services/apps/create/")
        print("2. Create a non-commercial app")
        print("3. Copy the API Key")
        print("4. Run: export FLICKR_API_KEY=your_key_here")
        sys.exit(1)

    print(f"Flickr FULL Account Migration")
    print(f"==============================")
    print(f"User: merrowmachine ({USER_ID})")
    print(f"Output directory: {OUTPUT_DIR}")
    print("")

    # First, discover ALL photosets
    print("Discovering all photosets...")
    all_sets = get_all_photosets()
    print(f"Found {len(all_sets)} photosets in account")
    print("")

    # Show summary of what we're about to download
    total_expected = sum(s["photos"] for s in all_sets)
    print(f"Total images expected: ~{total_expected}")
    print("")

    # Ensure output directory exists
    OUTPUT_DIR.mkdir(parents=True, exist_ok=True)

    manifest = {
        "account": {
            "user_id": USER_ID,
            "username": "merrowmachine",
            "total_sets": len(all_sets),
            "total_images_expected": total_expected,
        },
        "sets": {}
    }
    total_images = 0
    total_downloaded = 0

    for i, set_info in enumerate(all_sets, 1):
        set_id = set_info["id"]
        set_title = set_info["title"]
        print(f"[{i}/{len(all_sets)}] Processing: {set_title[:50]} ({set_id})...")

        photos = get_photoset_photos(set_id)

        if not photos:
            print(f"  No photos found or error occurred")
            manifest["sets"][set_id] = {
                "title": set_title,
                "description": set_info.get("description", ""),
                "images": [],
            }
            continue

        print(f"  Found {len(photos)} photos")
        total_images += len(photos)

        # Create set directory
        set_dir = OUTPUT_DIR / set_id
        set_dir.mkdir(exist_ok=True)

        set_data = {
            "title": set_title,
            "description": set_info.get("description", ""),
            "images": [],
        }

        for photo in photos:
            url = get_best_url(photo)
            if not url:
                continue

            # Determine filename
            ext = url.split(".")[-1].split("?")[0]
            filename = f"{photo['id']}.{ext}"
            dest_path = set_dir / filename

            # Get tags from the photo listing (basic tags)
            basic_tags = photo.get("tags", "").split() if photo.get("tags") else []

            # Get detailed photo info including full tags
            photo_info = get_photo_info(photo["id"])

            # Extract full tag data
            tags = []
            if photo_info and "tags" in photo_info:
                tag_list = photo_info["tags"].get("tag", [])
                tags = [t.get("raw", t.get("_content", "")) for t in tag_list]
            elif basic_tags:
                tags = basic_tags

            # Get title and description
            title = photo.get("title", "")
            if photo_info:
                title = photo_info.get("title", {}).get("_content", title)

            image_data = {
                "filename": filename,
                "id": photo["id"],
                "title": title,
                "tags": tags,
            }

            # Download if not exists
            if not dest_path.exists():
                if download_image(url, dest_path):
                    total_downloaded += 1
                    print(f"    Downloaded {filename} ({len(tags)} tags)")
                else:
                    continue
            else:
                print(f"    Exists {filename} ({len(tags)} tags)")

            set_data["images"].append(image_data)

            # Rate limiting
            time.sleep(0.3)

        manifest["sets"][set_id] = set_data
        print(f"  Processed {len(set_data['images'])} images")

    # Update manifest with final counts
    manifest["account"]["total_images_actual"] = total_images
    manifest["account"]["total_downloaded"] = total_downloaded

    # Save manifest
    with open(MANIFEST_FILE, "w") as f:
        json.dump(manifest, f, indent=2)

    print("")
    print("==============================")
    print(f"Complete!")
    print(f"Total photosets: {len(all_sets)}")
    print(f"Total images found: {total_images}")
    print(f"Images downloaded: {total_downloaded}")
    print(f"Manifest saved: {MANIFEST_FILE}")

    # Summary of tags
    all_tags = set()
    for set_data in manifest["sets"].values():
        if isinstance(set_data, dict) and "images" in set_data:
            for img in set_data["images"]:
                all_tags.update(img.get("tags", []))
    print(f"Unique tags found: {len(all_tags)}")


if __name__ == "__main__":
    main()
