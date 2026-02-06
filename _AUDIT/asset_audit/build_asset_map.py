#!/usr/bin/env python3
"""
Build asset map: extract all image URLs from database, find in backup, pick largest version.
"""

import os
import re
from pathlib import Path
from collections import defaultdict

# Paths
DB_FILE = "/Users/charliemerrow/LOCAL_AI_DATA_LAKE/_STATION_LABS/dev/_worktrees/CODEX_REFACTOR_0_1_0001/db/supabase_data.sql"
BACKUP_ROOT = "/Users/charliemerrow/LOCAL_AI_DATA_LAKE/_STATION_LABS/dev/merrow/imerrow-backup"
OUTPUT_FILE = "/Users/charliemerrow/LOCAL_AI_DATA_LAKE/_STATION_LABS/dev/_worktrees/CODEX_REFACTOR_0_1_0001/_AUDIT/asset_audit/MASTER_ASSET_MAP.csv"

# Extract URLs from database
print("Extracting URLs from database...")
with open(DB_FILE, 'r', encoding='utf-8', errors='ignore') as f:
    content = f.read()

# Find all imerrow URLs
url_pattern = r'http://imerrow\.com/([^"\'`,\)\s]+\.(?:jpg|gif|png|jpeg))'
urls = re.findall(url_pattern, content, re.IGNORECASE)
unique_paths = sorted(set(urls))
print(f"Found {len(unique_paths)} unique imerrow image paths")

# Build index of all files in backup
print("Indexing backup files...")
backup_files = {}  # filename.lower() -> list of (full_path, size)
for root, dirs, files in os.walk(BACKUP_ROOT):
    for f in files:
        if f.lower().endswith(('.jpg', '.gif', '.png', '.jpeg')):
            full_path = os.path.join(root, f)
            size = os.path.getsize(full_path)
            key = f.lower()
            if key not in backup_files:
                backup_files[key] = []
            backup_files[key].append((full_path, size))

print(f"Indexed {len(backup_files)} unique filenames in backup")

# Match URLs to backup files, pick largest
print("Building asset map...")
results = []
found = 0
missing = 0

for url_path in unique_paths:
    full_url = f"http://imerrow.com/{url_path}"
    filename = os.path.basename(url_path).lower()

    if filename in backup_files:
        # Pick largest file
        candidates = backup_files[filename]
        best = max(candidates, key=lambda x: x[1])
        results.append((full_url, "FOUND", best[0], best[1]))
        found += 1
    else:
        results.append((full_url, "MISSING", "", 0))
        missing += 1

print(f"Found: {found}, Missing: {missing}")

# Write output
os.makedirs(os.path.dirname(OUTPUT_FILE), exist_ok=True)
with open(OUTPUT_FILE, 'w') as f:
    f.write("url|status|local_path|size_bytes\n")
    for row in results:
        f.write(f"{row[0]}|{row[1]}|{row[2]}|{row[3]}\n")

print(f"Wrote {OUTPUT_FILE}")

# Also write just the found files for easy copying
found_file = OUTPUT_FILE.replace(".csv", "_FOUND.txt")
with open(found_file, 'w') as f:
    for row in results:
        if row[1] == "FOUND":
            f.write(f"{row[2]}\n")
print(f"Wrote {found_file}")

# Summary by directory
print("\n=== Summary by URL path ===")
by_dir = defaultdict(lambda: {"found": 0, "missing": 0})
for row in results:
    url_dir = "/".join(row[0].split("/")[3:-1])  # e.g., nebula/inventory/large_inventory
    if row[1] == "FOUND":
        by_dir[url_dir]["found"] += 1
    else:
        by_dir[url_dir]["missing"] += 1

for d in sorted(by_dir.keys()):
    stats = by_dir[d]
    print(f"  {d}: {stats['found']} found, {stats['missing']} missing")
