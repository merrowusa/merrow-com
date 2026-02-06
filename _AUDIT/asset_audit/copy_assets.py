#!/usr/bin/env python3
"""
Copy all found assets to clean organized directory structure.
Picks largest version of each unique filename.
"""

import os
import shutil
from collections import defaultdict

# Paths
BACKUP_ROOT = "/Users/charliemerrow/LOCAL_AI_DATA_LAKE/_STATION_LABS/dev/merrow/imerrow-backup"
OUTPUT_ROOT = "/Users/charliemerrow/LOCAL_AI_DATA_LAKE/_STATION_LABS/dev/_worktrees/CODEX_REFACTOR_0_1_0001/apps/merrow.com/public/images"

# Build index: filename -> largest file path
print("Indexing all image files in backup...")
file_index = {}  # filename.lower() -> (path, size)

for root, dirs, files in os.walk(BACKUP_ROOT):
    for f in files:
        if f.lower().endswith(('.jpg', '.jpeg', '.gif', '.png')):
            full_path = os.path.join(root, f)
            size = os.path.getsize(full_path)
            key = f.lower()
            if key not in file_index or size > file_index[key][1]:
                file_index[key] = (full_path, size)

print(f"Found {len(file_index)} unique image files")

# Read the master asset map to get URL -> filename mappings
MASTER_MAP = "/Users/charliemerrow/LOCAL_AI_DATA_LAKE/_STATION_LABS/dev/_worktrees/CODEX_REFACTOR_0_1_0001/_AUDIT/asset_audit/MASTER_ASSET_MAP.csv"

# URL path patterns -> output subdirectory
PATH_MAPPING = {
    "nebula/inventory/large_inventory": "products/large",
    "nebula/inventory/medium_inventory": "products/medium",
    "nebula/inventory/tiny_inventory": "products/thumb",
    "nebula/inventory/pdurl_large": "drawings/large",
    "nebula/inventory/pdurl_medium": "drawings/medium",
    "nebula/inventory/pdurl_tiny": "drawings/thumb",
    "nebula/images/store/new_jpgs": "store",
    "nebula/images/machines": "machines",
    "nebula/inventory/rail": "technical",
}

# Track what we copy
copied = 0
skipped = 0
missing = 0
by_dest = defaultdict(int)

print("Copying assets...")

with open(MASTER_MAP, 'r') as f:
    next(f)  # skip header
    for line in f:
        parts = line.strip().split('|')
        if len(parts) < 4:
            continue
        url, status, local_path, size = parts[0], parts[1], parts[2], parts[3]

        if status == "MISSING":
            missing += 1
            continue

        # Determine output directory from URL
        url_path = url.replace("http://imerrow.com/", "")
        url_dir = "/".join(url_path.split("/")[:-1])
        filename = os.path.basename(url_path)

        # Map to output subdirectory
        dest_subdir = None
        for pattern, dest in PATH_MAPPING.items():
            if url_dir == pattern:
                dest_subdir = dest
                break

        if not dest_subdir:
            # Unmapped path - put in misc
            dest_subdir = "misc"

        # Get the largest version of this file
        key = filename.lower()
        if key not in file_index:
            missing += 1
            continue

        src_path = file_index[key][0]
        dest_dir = os.path.join(OUTPUT_ROOT, dest_subdir)
        dest_path = os.path.join(dest_dir, filename)

        # Skip if already exists
        if os.path.exists(dest_path):
            skipped += 1
            continue

        # Create directory and copy
        os.makedirs(dest_dir, exist_ok=True)
        shutil.copy2(src_path, dest_path)
        copied += 1
        by_dest[dest_subdir] += 1

print(f"\n=== Summary ===")
print(f"Copied: {copied}")
print(f"Skipped (already exists): {skipped}")
print(f"Missing: {missing}")
print(f"\nBy destination:")
for dest, count in sorted(by_dest.items()):
    print(f"  {dest}: {count}")

# Calculate total size
total_size = 0
for root, dirs, files in os.walk(OUTPUT_ROOT):
    for f in files:
        total_size += os.path.getsize(os.path.join(root, f))
print(f"\nTotal size: {total_size / 1024 / 1024:.1f} MB")
