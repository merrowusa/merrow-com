# Codex Task: Asset URL Localization

## Objective

Rewrite ALL asset URLs to local paths. We ARE going to track down every missing file — set up the directory structure and rewrites now, files will be dropped in later.

---

## Step 1: Create Local Directory Structure

Create these directories under `apps/merrow.com/public/`:

```
public/images/
  products/
    large/          ← product photos (was nebula/inventory/large_inventory/)
    medium/         ← product photos (was nebula/inventory/medium_inventory/)
    thumb/          ← product photos (was nebula/inventory/tiny_inventory/)
  drawings/
    large/          ← parts diagrams (was nebula/inventory/pdurl_large/)
    medium/         ← parts diagrams (was nebula/inventory/pdurl_medium/)
    thumb/          ← parts diagrams (was nebula/inventory/pdurl_tiny/)
  technical/        ← support diagrams (was images.imerrow.com/images/ + cephei/sable/)
  parts-manual/     ← scanned manuals (was STORAGE/merrow-Parts-Manual/PD*/)
  store/            ← store product photos (was nebula/images/store/new_jpgs/)
  machines/         ← machine type icons (was nebula/images/machines/)
```

Add a `.gitkeep` in each empty directory so git tracks them.

---

## Step 2: Copy Found Assets (237 files)

Copy from the legacy site at `../../merrow/merrow-com/public_html/` (relative to repo root).

### Parts Manual Drawings → `public/images/parts-manual/`

Read `_AUDIT/asset_audit/URL_ASSET_MAP_FOUND.csv` for exact source paths. The found files are in:
- `STORAGE/merrow-Parts-Manual/PD*/` — parts manual page scans
- Preserve the `PD*` subdirectory grouping (e.g., `PD18A/`, `PDMG3U/`, `PD72/`)

```
Legacy: STORAGE/merrow-Parts-Manual/PD18A/PD18A-1-diagram.jpg
   To:  public/images/parts-manual/PD18A/PD18A-1-diagram.jpg
```

### Technical Diagrams → `public/images/technical/`

```
Legacy: cephei/sable/images/bs-cutter.gif
   To:  public/images/technical/bs-cutter.gif

Legacy: cephei/sable/images/backviewsmall.gif
   To:  public/images/technical/backviewsmall.gif
```

Copy all 26 files from `cephei/sable/images/` that appear in the FOUND map.

---

## Step 3: Rewrite Code URLs

### File: `apps/merrow.com/app/parts/[cp]/[mmc_code]/page.tsx`

**Line 78-82** — Main product image:
```tsx
// FROM:
const mainImage =
  record.imgurlLarge ||
  (record.msmcId
    ? `https://images.imerrow.com/images/products/large/${record.msmcId}.jpg`
    : "");

// TO:
const mainImage =
  record.imgurlLarge ||
  (record.msmcId
    ? `/images/products/large/${record.msmcId}.jpg`
    : "");
```

**Line 84-88** — Thumbnails:
```tsx
// FROM:
const thumbnails = record.msmcId
  ? Array.from({ length: 4 }).map((_, index) =>
      `https://images.imerrow.com/images/products/thumb/${record.msmcId}_t${index + 1}.jpg`
    )
  : [];

// TO:
const thumbnails = record.msmcId
  ? Array.from({ length: 4 }).map((_, index) =>
      `/images/products/thumb/${record.msmcId}_t${index + 1}.jpg`
    )
  : [];
```

### File: `apps/merrow.com/app/support/class/key/mediakeyword/[mk]/page.tsx`

**Lines 31-36** — `resolveLegacyUrl()` — change to serve locally:
```tsx
// FROM:
function resolveLegacyUrl(value: string | undefined) {
  if (!value) return "";
  if (value.startsWith("http://") || value.startsWith("https://")) return value;
  const trimmed = value.replace(/^\//, "");
  return `https://www.merrow.com/${trimmed}`;
}

// TO:
function resolveLegacyUrl(value: string | undefined) {
  if (!value) return "";
  if (value.startsWith("http://") || value.startsWith("https://")) return value;
  if (value.startsWith("/")) return value;
  return `/${value}`;
}
```

### File: `apps/merrow.com/app/support/_components/SupportDocsPanel.tsx`

**Line 25** — Threading diagram link URL:
```tsx
// FROM:
href: `/support/diagram/${encodeURIComponent(diagram.image)}/showthemapicture/ohyeah`,

// TO:
href: `/support/diagram/${encodeURIComponent(diagram.image)}`,
```

**Lines 54-77** — Parts books and instruction manual links. These are legacy Flickr-based photosets served via `agent_book.php`. They are NOT image assets — they are page links to documentation viewers. Leave the `www.merrow.com` URLs for now. Add a TODO comment:
```tsx
// TODO: These link to legacy agent_book.php Flickr viewers.
// Replace with local PDF/image gallery when content is migrated.
```

### File: `apps/merrow.com/app/support/page.tsx`

**Line 40** — Video link:
```tsx
// FROM:
"For video support please go <a href=\"https://www.merrow.com/video.html\">here</a>."

// TO:
"For video support please go <a href=\"https://www.youtube.com/@MerrowSewingMachine\">here</a>."
```
(The video.html page just embedded YouTube — link directly to the channel.)

### Files with S3 URLs — DO NOT TOUCH:
- `MachinePage.tsx` (`merrow-media.s3.amazonaws.com`)
- `end-to-end-seaming/page.tsx`
- `technical-sewing/page.tsx`
- `overlock-history/page.tsx`
- `ThumbnailGallery.tsx`
- `ApplicationsStrip.tsx`

---

## Step 4: Database URL Migration

Create file: `db/migrations/20260205_localize_asset_urls.sql`

### Product images (asin table)

```sql
-- Rewrite product image URLs from imerrow.com CDN to local paths
-- large_inventory → /images/products/large/
UPDATE asin
SET imgurl_large = REPLACE(imgurl_large,
  'http://imerrow.com/nebula/inventory/large_inventory/',
  '/images/products/large/')
WHERE imgurl_large LIKE 'http://imerrow.com/nebula/inventory/large_inventory/%';

-- medium_inventory → /images/products/medium/
UPDATE asin
SET imgurl_medium = REPLACE(imgurl_medium,
  'http://imerrow.com/nebula/inventory/medium_inventory/',
  '/images/products/medium/')
WHERE imgurl_medium LIKE 'http://imerrow.com/nebula/inventory/medium_inventory/%';

-- tiny_inventory → /images/products/thumb/
UPDATE asin
SET imgurl_tiny = REPLACE(imgurl_tiny,
  'http://imerrow.com/nebula/inventory/tiny_inventory/',
  '/images/products/thumb/')
WHERE imgurl_tiny LIKE 'http://imerrow.com/nebula/inventory/tiny_inventory/%';
```

### Parts drawings (pd_ref table)

```sql
-- Parts drawings: pdurl_large → /images/drawings/large/
UPDATE pd_ref
SET pdurl_large = REPLACE(pdurl_large,
  'http://imerrow.com/nebula/inventory/pdurl_large/',
  '/images/drawings/large/')
WHERE pdurl_large LIKE 'http://imerrow.com/nebula/inventory/pdurl_large/%';

-- pdurl_medium → /images/drawings/medium/
UPDATE pd_ref
SET pdurl_medium = REPLACE(pdurl_medium,
  'http://imerrow.com/nebula/inventory/pdurl_medium/',
  '/images/drawings/medium/')
WHERE pdurl_medium LIKE 'http://imerrow.com/nebula/inventory/pdurl_medium/%';

-- pdurl_tiny → /images/drawings/thumb/
UPDATE pd_ref
SET pdurl_tiny = REPLACE(pdurl_tiny,
  'http://imerrow.com/nebula/inventory/pdurl_tiny/',
  '/images/drawings/thumb/')
WHERE pdurl_tiny LIKE 'http://imerrow.com/nebula/inventory/pdurl_tiny/%';
```

### Technical images (images.imerrow.com)

```sql
-- Technical support images → /images/technical/
UPDATE asin
SET setup_url = REPLACE(setup_url,
  'http://images.imerrow.com/images/',
  '/images/technical/')
WHERE setup_url LIKE 'http://images.imerrow.com/images/%';

UPDATE asin
SET trouble_url = REPLACE(trouble_url,
  'http://images.imerrow.com/images/',
  '/images/technical/')
WHERE trouble_url LIKE 'http://images.imerrow.com/images/%';
```

### Page link URLs — rewrite to new routes

```sql
-- Old parts.php links → new /parts/ routes
-- These have format: http://merrow.com/parts.php?cp=XXX&mmc_code=YYY
-- Handled by code at runtime, not a simple REPLACE.
-- Leave store_url as-is for now — the code should parse and route.

-- Old store.merrow.com links → mark as deprecated
-- UPDATE asin SET amzn_url = NULL WHERE amzn_url LIKE 'http://store.merrow.com/%';
-- (Uncomment when ready to drop old store links)
```

### DO NOT touch:
- S3 URLs (`merrow-media.s3.amazonaws.com`, `marketing-downloads.s3.amazonaws.com`)
- YouTube URLs
- External URLs

---

## Step 5: Update seed data file

After creating the migration, also update `db/supabase_data.sql` so future fresh deploys use local paths. Apply the same REPLACE logic to the INSERT statements.

---

## Step 6: Clean up Codex's previous bad work

If these exist, remove them:
- `apps/merrow.com/public/legacy/` — wrong directory structure from prior run
- `db/migrations/20260205_rewrite_asset_urls.sql` — had wrong file mappings

---

## URL → Local Path Cheat Sheet

| Old URL Pattern | New Local Path |
|----------------|----------------|
| `imerrow.com/nebula/inventory/large_inventory/{X}.jpg` | `/images/products/large/{X}.jpg` |
| `imerrow.com/nebula/inventory/medium_inventory/{X}.jpg` | `/images/products/medium/{X}.jpg` |
| `imerrow.com/nebula/inventory/tiny_inventory/{X}.jpg` | `/images/products/thumb/{X}.jpg` |
| `imerrow.com/nebula/inventory/pdurl_large/{X}.jpg` | `/images/drawings/large/{X}.jpg` |
| `imerrow.com/nebula/inventory/pdurl_medium/{X}.jpg` | `/images/drawings/medium/{X}.jpg` |
| `imerrow.com/nebula/inventory/pdurl_tiny/{X}.jpg` | `/images/drawings/thumb/{X}.jpg` |
| `images.imerrow.com/images/{X}` | `/images/technical/{X}` |
| `images.imerrow.com/images/products/large/{X}.jpg` | `/images/products/large/{X}.jpg` |
| `images.imerrow.com/images/products/thumb/{X}.jpg` | `/images/products/thumb/{X}.jpg` |
| `imerrow.com/nebula/images/store/new_jpgs/{X}` | `/images/store/{X}` |
| `imerrow.com/nebula/images/machines/{X}` | `/images/machines/{X}` |

## Commits

1. `asset: create local image directory structure + copy 237 found files`
2. `fix: rewrite asset URLs to local paths in code`
3. `migration: localize database asset URLs from imerrow.com to /images/`
