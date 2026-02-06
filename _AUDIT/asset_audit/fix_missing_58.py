#!/usr/bin/env python3
"""
Fix the 58 missing files by copying with DB-expected names.
Maps actual filenames to what the DB expects.
"""

import os
import shutil

BACKUP_ROOT = "/Users/charliemerrow/LOCAL_AI_DATA_LAKE/_STATION_LABS/dev/merrow/imerrow-backup"
OUTPUT_ROOT = "/Users/charliemerrow/LOCAL_AI_DATA_LAKE/_STATION_LABS/dev/_worktrees/CODEX_REFACTOR_0_1_0001/apps/merrow.com/public/images"

# Manual mappings for the 58 missing files
# Format: (db_expected_name, actual_filename_pattern, dest_subdir)
MAPPINGS = [
    # PD diagram files: underscore -> dash
    ("PD3_diagram.jpg", "PD3-diagram.jpg", "drawings"),
    ("PD5_diagram.jpg", "Pd5-diagram.jpg", "drawings"),
    ("PD6_diagram.jpg", "Pd6-diagram.jpg", "drawings"),
    ("PD7_diagram.jpg", "Pd7-diagram.jpg", "drawings"),
    ("PD8_diagram.jpg", "Pd8-diagram.jpg", "drawings"),

    # PDMG3U files: underscore -> dash, case difference
    ("PDMG3U_01.gif", "pdmg3u-01.gif", "drawings"),
    ("PDMG3U_02.gif", "pdmg3u-02.gif", "drawings"),
    ("PDMG3U_03.gif", "pdmg3u-03.gif", "drawings"),
    ("PDMG3U_04.gif", "pdmg3u-04.gif", "drawings"),
    ("PDMG3U_05.gif", "pdmg3u-05.gif", "drawings"),
    ("PDMG3U_06.gif", "pdmg3u-06.gif", "drawings"),
    ("PDMG3U_08.gif", "pdmg3u-08.gif", "drawings"),
    ("PDMG3U_09.gif", "pdmg3u-09.gif", "drawings"),
    ("PDMG3U_10.gif", "pdmg3u-10.gif", "drawings"),
    ("PDMG3U_11.gif", "pdmg3u-11.gif", "drawings"),
    ("PDMG3U_12.gif", "pdmg3u-12.gif", "drawings"),

    # PDMG3U jpg versions (medium/tiny sizes)
    ("PDMG3U_01.jpg", "pdmg3u-01.gif", "drawings"),  # gif source, save as jpg name
    ("PDMG3U_02.jpg", "pdmg3u-02.gif", "drawings"),
    ("PDMG3U_03.jpg", "pdmg3u-03.gif", "drawings"),
    ("PDMG3U_04.jpg", "pdmg3u-04.gif", "drawings"),
    ("PDMG3U_05.jpg", "pdmg3u-05.gif", "drawings"),
    ("PDMG3U_06.jpg", "pdmg3u-06.gif", "drawings"),
    ("PDMG3U_08.jpg", "pdmg3u-08.gif", "drawings"),
    ("PDMG3U_09.jpg", "pdmg3u-09.gif", "drawings"),
    ("PDMG3U_10.jpg", "pdmg3u-10.gif", "drawings"),
    ("PDMG3U_11.jpg", "pdmg3u-11.gif", "drawings"),
    ("PDMG3U_12.jpg", "pdmg3u-12.gif", "drawings"),

    # pd22fj_07 -> split into 07a and 07b, use 07a as primary
    ("pd22fj_07.gif", "pd22fj_07a.gif", "drawings"),
    ("pd22fj_07.jpg", "pd22fj_07a.jpg", "drawings"),

    # pdmgnr_12 -> split into top/bottom, use top as primary
    ("pdmgnr_12.jpg", "pdmgnr_12_top.jpg", "drawings"),
    ("pdmgnr_12.gif", "pdmgnr_12_top.gif", "drawings"),
]

# Build index of all files in backup
print("Indexing backup files...")
file_index = {}  # filename.lower() -> full_path
for root, dirs, files in os.walk(BACKUP_ROOT):
    for f in files:
        key = f.lower()
        full_path = os.path.join(root, f)
        # Prefer larger files
        if key not in file_index:
            file_index[key] = full_path
        else:
            if os.path.getsize(full_path) > os.path.getsize(file_index[key]):
                file_index[key] = full_path

print(f"Indexed {len(file_index)} files")

# Process mappings
copied = 0
not_found = 0

for db_name, actual_name, dest_subdir in MAPPINGS:
    actual_key = actual_name.lower()

    if actual_key not in file_index:
        print(f"NOT FOUND: {actual_name}")
        not_found += 1
        continue

    src_path = file_index[actual_key]

    # Put in large/ subdir (largest version)
    dest_dir = os.path.join(OUTPUT_ROOT, dest_subdir, "large")
    os.makedirs(dest_dir, exist_ok=True)
    dest_path = os.path.join(dest_dir, db_name)

    if os.path.exists(dest_path):
        print(f"SKIP (exists): {db_name}")
        continue

    shutil.copy2(src_path, dest_path)
    print(f"COPIED: {actual_name} -> {db_name}")
    copied += 1

print(f"\n=== Summary ===")
print(f"Copied: {copied}")
print(f"Not found: {not_found}")
