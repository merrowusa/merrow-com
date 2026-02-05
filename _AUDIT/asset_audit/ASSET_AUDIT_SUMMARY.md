# Asset Audit Summary
> Generated: 2026-02-05
> Purpose: Reference for Codex asset mapping task

---

## Database URL Inventory (from db/supabase_data.sql)

**Total unique URLs:** 13,153

### By Domain

| Domain | Count | Type | Action |
|--------|-------|------|--------|
| `imerrow.com` | 7,494 | IMAGE ASSETS + page links | Map to local or flag MISSING |
| `merrow.com` | 2,796 | Page links (old PHP routes) | Route mapping to new Next.js routes |
| `store.merrow.com` | 2,693 | Old store product pages | Route mapping or deprecate |
| `02576.merrow.com` | 42 | Old store variant | Route mapping or deprecate |
| `images.imerrow.com` | 26 | IMAGE ASSETS (technical diagrams) | Map to local or flag MISSING |
| `www.merrow.com` | 24 | Page links | Route mapping |
| `www.youtube.com` | 33 | External video embeds | LEAVE AS-IS |
| `marketing-downloads.s3.amazonaws.com` | 30 | S3 hosted assets | LEAVE AS-IS |
| `merrow-media.s3.amazonaws.com` | 4 | S3 hosted assets | LEAVE AS-IS |
| Other external | ~11 | External sites | LEAVE AS-IS |

### imerrow.com URL Path Breakdown (IMAGE ASSETS)

| Path Pattern | Count | Content | Local Equivalent |
|-------------|-------|---------|------------------|
| `nebula/inventory/large_inventory/*.jpg` | 2,298 | Product images (large) | **MISSING** — not found locally |
| `nebula/inventory/medium_inventory/*.jpg` | 2,244 | Product images (medium) | **MISSING** |
| `nebula/inventory/tiny_inventory/*.jpg` | 2,230 | Product images (tiny/thumb) | **MISSING** |
| `nebula/inventory/pdurl_large/*.jpg` | 230 | Parts drawings (large) | **MISSING** |
| `nebula/inventory/pdurl_medium/*.jpg` | 230 | Parts drawings (medium) | **MISSING** |
| `nebula/inventory/pdurl_tiny/*.jpg` | 230 | Parts drawings (tiny) | **MISSING** |
| `nebula/images/store/new_jpgs/*.jpg` | 23 | Store product images | **MISSING** |
| `nebula/images/machines/*.png` | 2 | Machine type icons | **MISSING** |
| `nebula/sable/*` | 6 | Unknown | **MISSING** |
| `images/*` (images.imerrow.com) | 26 | Technical diagrams | **MISSING** |

**Total unique IMAGE ASSET URLs from imerrow.com: ~7,519**
**Total confirmed MISSING locally: ALL of them**

### Page Link URLs (NOT image assets — need route mapping)

| Pattern | Count | Old Route | New Route |
|---------|-------|-----------|-----------|
| `merrow.com/parts.php?...` | ~500 | PHP parts lookup | `/parts/[cp]/[mmc_code]` |
| `store.merrow.com/category/...` | 2,693 | Old store categories | Deprecate or redirect |
| `02576.merrow.com/Merrow-.../M/...` | 42 | Old product pages | `/machines/[style]` or `/parts/...` |
| `merrow.com/sewing/...` | ~24 | Legacy PHP routes | Various new routes |

---

## Code URL Inventory (from apps/merrow.com/**/*.tsx,*.ts)

**Total URLs in code:** 107

### Domains in Code

| Domain | Count | Action |
|--------|-------|--------|
| `www.merrow.com` | 35 | Map to internal routes or flag |
| `merrow-media.s3.amazonaws.com` | 28 | LEAVE AS-IS (S3) |
| `localhost:3000` | 10 | Dev only — ignore |
| `merrowedge.com` | 5 | External — LEAVE AS-IS |
| `images.imerrow.com` | 3 | Map to local or flag MISSING |
| Social media / external | ~26 | LEAVE AS-IS |

### Code URLs Needing Action

1. **`images.imerrow.com/images/products/{large|thumb}/`** — in `parts/[cp]/[mmc_code]/page.tsx` lines 81, 86
   - Dynamically constructed: `https://images.imerrow.com/images/products/large/${msmcId}.jpg`
   - Dynamically constructed: `https://images.imerrow.com/images/products/thumb/${msmcId}_t{1-4}.jpg`

2. **`www.merrow.com/agent_book/kiwifruit/...`** — in `SupportDocsPanel.tsx` lines 54-77
   - 11 hardcoded URLs to legacy parts books / instruction manuals
   - These are Flickr set embeds via legacy PHP

3. **`www.merrow.com/video.html`** — in `support/page.tsx` line 40
   - Link to legacy video page

4. **`resolveLegacyUrl()`** — in `mediakeyword/[mk]/page.tsx` line 33-36
   - Prepends `https://www.merrow.com/` to relative paths from DB

---

## Physical Asset Inventory

### Worktree: `apps/merrow.com/public/` — 75 files
- `images/hero/h_01-06.gif.png` — Home page hero images
- `images/fashion-strip-*.png` — Fashion strip composites
- `images/home-*.png` — Home page sections
- `images/icon-*.png` — Navigation icons
- `images/merrowlogo_03.png` — Logo
- `images/ft_10.gif`, `ft_10.png`, `ft_11.gif` — Footer images
- `images/1838.png` — History image
- SVGs: `file.svg`, `globe.svg`, `next.svg`, `vercel.svg`, `window.svg`
- `robots.txt`

### Legacy Site: `merrow-com/public_html/` — 5,006 files (597 MB)
- `images/` — 2,000+ files (primary site imagery)
- `STORAGE/images/` — 1,500+ archived files
- `STORAGE/merrow machine-Images/` — 500+ equipment photos
- `flags/` — 250+ country flag GIFs
- `newproducts/img/` — Product photos
- `roto_images/` — Carousel slides
- Stitch samples, marketing assets, etc.

**NOTE: `nebula/`, `inventory/`, `large_inventory/`, `pdurl_*/` directories DO NOT EXIST anywhere locally.**

---

## Key Facts

1. **imerrow.com = merrow.com** — same site, different domain
2. **S3 assets** — leave as-is for now (user instruction)
3. **YouTube/external** — leave as-is
4. **Product images** (~7,500 URLs) — served from imerrow.com CDN, NOT stored locally
5. **Parts drawings** (~690 URLs) — same, served from CDN
6. **Legacy site has 5,006 files** but organized differently than the CDN paths
