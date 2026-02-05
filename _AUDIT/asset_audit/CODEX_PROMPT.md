# Codex Task: Systematic Asset URL Audit + Mapping

## Objective

Create a comprehensive URL → local asset map for the entire merrow.com refactored codebase. Then — and ONLY then — rewrite URLs where a confirmed local asset exists.

**DO NOT rewrite any URL until the mapping is complete and verified.**

---

## Context

- **Worktree:** This repo at `apps/merrow.com/`
- **Legacy site:** `../../merrow/merrow-com/public_html/` (relative to repo root — absolute: `/Users/charliemerrow/LOCAL_AI_DATA_LAKE/_STATION_LABS/dev/merrow/merrow-com/public_html/`)
- **imerrow.com = merrow.com** — these are the same site
- **S3 assets (merrow-media.s3.amazonaws.com, marketing-downloads.s3.amazonaws.com)** — LEAVE ALONE, do not touch
- **YouTube, social media, external sites** — LEAVE ALONE
- **Reference files in `_AUDIT/asset_audit/`:**
  - `db_urls_all.txt` — 13,153 unique URLs extracted from database seed data
  - `legacy_site_assets.txt` — 5,006 image files from legacy PHP site
  - `worktree_public_assets.txt` — 75 files in current `public/` directory
  - `ASSET_AUDIT_SUMMARY.md` — Full breakdown by domain and path pattern

---

## Step 1: Extract ALL URLs from Code

Scan every `.ts` and `.tsx` file in `apps/merrow.com/` for URLs. For each URL found, record:

```
file_path:line_number | url | domain | type
```

Where `type` is one of:
- `IMAGE_ASSET` — points to an image file (.jpg, .png, .gif, .svg, .webp)
- `PAGE_LINK` — points to an old page route (e.g., merrow.com/parts.php)
- `S3_ASSET` — S3-hosted file (LEAVE ALONE)
- `EXTERNAL` — external site (LEAVE ALONE)
- `DEV_ONLY` — localhost or dev URL (ignore)
- `DYNAMIC` — URL constructed from variables at runtime

Write output to: `_AUDIT/asset_audit/code_urls.csv`

---

## Step 2: Categorize ALL Database URLs

Read `_AUDIT/asset_audit/db_urls_all.txt`. For each URL, categorize:

```
url | domain | path_pattern | type | table.column (if determinable)
```

The key path patterns from `imerrow.com` are:
- `nebula/inventory/large_inventory/*.jpg` → IMAGE_ASSET (product image, large)
- `nebula/inventory/medium_inventory/*.jpg` → IMAGE_ASSET (product image, medium)
- `nebula/inventory/tiny_inventory/*.jpg` → IMAGE_ASSET (product image, tiny)
- `nebula/inventory/pdurl_large/*.jpg` → IMAGE_ASSET (parts drawing, large)
- `nebula/inventory/pdurl_medium/*.jpg` → IMAGE_ASSET (parts drawing, medium)
- `nebula/inventory/pdurl_tiny/*.jpg` → IMAGE_ASSET (parts drawing, tiny)
- `nebula/images/store/new_jpgs/*.jpg` → IMAGE_ASSET (store product image)
- `nebula/images/machines/*.png` → IMAGE_ASSET (machine icon)
- `nebula/sable/*` → IMAGE_ASSET (unknown)
- Everything at `images.imerrow.com/images/*` → IMAGE_ASSET (technical diagram)
- `store.merrow.com/category/*` → PAGE_LINK (old store page)
- `merrow.com/parts.php*` → PAGE_LINK (old parts lookup)
- `02576.merrow.com/Merrow-*` → PAGE_LINK (old product page)
- S3 URLs → S3_ASSET
- YouTube → EXTERNAL

Write output to: `_AUDIT/asset_audit/db_urls_categorized.csv`

---

## Step 3: Physical Asset Inventory

Create a complete inventory of physical image/media files in these locations:

### 3a. Worktree public assets
Scan `apps/merrow.com/public/` recursively. Record every file with relative path.

### 3b. Legacy site assets
Scan the legacy site directory at the path shown in the reference file `legacy_site_assets.txt`. For each file, record the path relative to `public_html/`.

### 3c. Cross-reference with STORAGE directories
The legacy site has `STORAGE/` subdirectories with machine images, stitch samples, etc. Record these separately — they may contain assets referenced by the database.

Write output to: `_AUDIT/asset_audit/physical_assets.csv`

Format:
```
location | relative_path | filename | extension | size_bytes
```

Where `location` is `WORKTREE` or `LEGACY`.

---

## Step 4: Build the URL → Local Asset Map

For EVERY IMAGE_ASSET URL (from Steps 1 and 2), attempt to find a matching local file:

### Matching Rules (try in order):

1. **Exact filename match** — Extract filename from URL, search for it in both worktree and legacy assets
2. **Product code match** — Extract product/part code from URL path, search for files containing that code
3. **Legacy path reconstruction** — Strip domain, check if the path exists relative to legacy `public_html/`
4. **Fuzzy filename match** — Normalize the filename (lowercase, strip suffixes like `_t1`, `_diagram`), search

### Output Format

Write to: `_AUDIT/asset_audit/URL_ASSET_MAP.csv`

```
url | type | match_status | local_path | match_method | notes
```

Where:
- `match_status`: `FOUND`, `MISSING`, `AMBIGUOUS`
- `local_path`: relative path from repo root (for FOUND), empty for MISSING
- `match_method`: `exact`, `code_match`, `legacy_path`, `fuzzy`, or empty
- `notes`: any relevant context

---

## Step 5: Generate Reports

### 5a. MISSING Assets Report

Write to: `_AUDIT/asset_audit/MISSING_ASSETS.md`

Group by pattern:
- How many product images (large/medium/tiny) are missing?
- How many parts drawings are missing?
- How many technical diagrams are missing?
- For each group: sample URLs, expected filenames

### 5b. FOUND Assets Report

Write to: `_AUDIT/asset_audit/FOUND_ASSETS.md`

For each matched asset:
- URL → local path
- Whether it needs to be copied to `public/` or can stay in legacy
- Recommended new path in `public/`

### 5c. Page Link Route Map

Write to: `_AUDIT/asset_audit/ROUTE_MAP.md`

Map old page URLs to new Next.js routes:
- `merrow.com/parts.php?cp=XXX&mmc_code=YYY` → `/parts/XXX/YYY`
- `store.merrow.com/category/...` → deprecated or redirect plan
- `02576.merrow.com/Merrow-.../M/...` → `/machines/[style]` (if applicable)
- `www.merrow.com/agent_book/...` → `/support/...` or keep as legacy link
- `www.merrow.com/video.html` → new video page route or external link

---

## Step 6: Rewrite URLs (ONLY for FOUND assets)

**CRITICAL: Only proceed with rewrites AFTER the map is complete.**

For each URL with `match_status = FOUND`:

1. If the asset is in worktree `public/`: rewrite URL to relative path (e.g., `/images/...`)
2. If the asset is in legacy site only: FIRST copy it to an appropriate location in `public/`, THEN rewrite
3. For dynamically constructed URLs (in code): update the base URL constant/function

**DO NOT rewrite URLs where `match_status = MISSING` or `AMBIGUOUS`.** Leave those as-is and flag them in the report.

For database URLs: create a SQL migration file at `db/migrations/` that updates the URLs. Do NOT modify `db/supabase_data.sql` directly.

For code URLs: edit the source files directly.

---

## Files to Read First

Before starting, read these files for context:

1. `_AUDIT/asset_audit/ASSET_AUDIT_SUMMARY.md` — Full audit breakdown
2. `_AUDIT/asset_audit/db_urls_all.txt` — All database URLs (13K lines)
3. `_AUDIT/asset_audit/legacy_site_assets.txt` — Legacy physical files (5K lines)
4. `_AUDIT/asset_audit/worktree_public_assets.txt` — Current public assets (75 lines)
5. `apps/merrow.com/app/parts/[cp]/[mmc_code]/page.tsx` — Dynamic image URL construction
6. `apps/merrow.com/app/support/_components/SupportDocsPanel.tsx` — Hardcoded legacy URLs

---

## Constraints

- **DO NOT** modify S3 URLs (merrow-media, marketing-downloads)
- **DO NOT** modify YouTube, social media, or external URLs
- **DO NOT** assume a local file exists — verify by reading the directory/file
- **DO NOT** rewrite URLs until the full map is built and verified
- **DO NOT** modify `db/supabase_data.sql` — create migration files for DB URL changes
- **DO** create a single commit with the mapping files (Steps 1-5) BEFORE any rewrites
- **DO** create a separate commit for the URL rewrites (Step 6)

## Commit Messages

1. `audit: comprehensive URL → asset map for merrow.com refactor`
2. `fix: rewrite verified asset URLs to local paths`
