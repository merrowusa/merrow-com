# Merrow.com Page Inventory

> **Created:** 2026-01-20
> **Purpose:** Single source of truth for shipping pages
> **Status Key:** Pending → Building → RINSE'd → Verified → Live

---

## Overview

| Metric | Count |
|--------|-------|
| **Total Routes** | 20+ |
| **Verified (Gates 1&2)** | 0 |
| **RINSE'd (code complete)** | 7 |
| **Pending** | 13+ |
| **Live (legacy)** | All (PHP) |

---

## Global Components

| Route | Page Type | Owner | Status | Data Deps | Copy Deps | Image Deps | Redirect? | SEO | Schema | Verify | Notes |
|-------|-----------|-------|--------|-----------|-----------|------------|-----------|-----|--------|--------|-------|
| `app/layout.tsx` | Layout | claude | RINSE'd | None | Header/Footer copy | Logo | N/A | N/A | N/A | `verify_page.py app/layout.tsx` | Shell wrapper, TopPromoBar |
| `app/_components/Header.tsx` | Component | claude | RINSE'd | mega-menu queries (DEFERRED) | Nav labels | Logo, search icon | N/A | N/A | N/A | `verify_page.py app/_components/Header.tsx` | Google Custom Search placeholder |
| `app/_components/Footer.tsx` | Component | claude | RINSE'd | None | Contact info, links | Logo, social icons | N/A | N/A | N/A | `verify_page.py app/_components/Footer.tsx` | 3 columns + bottom bar |

---

## Core Pages

| Route | Page Type | Owner | Status | Data Deps | Copy Deps | Image Deps | Redirect? | SEO | Schema | Verify | Notes |
|-------|-----------|-------|--------|-----------|-----------|------------|-----------|-----|--------|--------|-------|
| `/` | Homepage | claude | RINSE'd | Featured machines query | Hero tagline, value props | Hero image, machine thumbnails | No | Title, desc, OG | Organization | `verify_page.py app/page.tsx` | Entry point, featured content |
| `/machines` | Listing | — | Pending | All machines query | Category intros | Machine thumbnails | No | Title, desc | ItemList | — | Filter/sort TBD |
| `/agentmap.html` | Tool | — | Pending | Agent/dealer API or static | Instructions | Map embed | Yes → `/dealers` | Title, desc | LocalBusiness[] | — | Interactive dealer map |
| `/about.html` | Static | — | Pending | None | Company history, team | Team photos, facility | Yes → `/about` | Title, desc | Organization | — | Legacy .html redirect |
| `not-found.tsx` | 404 | — | Pending | None | Error message | — | N/A | noindex | — | — | Custom 404 page |

---

## Category Landing Pages

| Route | Page Type | Owner | Status | Data Deps | Copy Deps | Image Deps | Redirect? | SEO | Schema | Verify | Notes |
|-------|-----------|-------|--------|-----------|-----------|------------|-----------|-----|--------|--------|-------|
| `/fashion-sewing` | Category | claude | RINSE'd | `getMachinesByCategory('fashion')`, `getCategoriesWithItems([...])` | Hero copy, app descriptions | Hero, customer logos | No | Title, desc | Product[] | `verify_page.py app/fashion-sewing/page.tsx` | Legacy `ncp1.php?a=f` |
| `/technical-sewing` | Category | claude | RINSE'd | `getMachinesByCategory('technical')`, `getCategoriesWithItems([...])` | Hero copy, app descriptions | Hero, customer logos | No | Title, desc | Product[] | `verify_page.py app/technical-sewing/page.tsx` | Legacy `ncp1.php?a=t`, v3.1 |
| `/end-to-end-seaming` | Category | claude | RINSE'd | `getMachinesByCategory('end-to-end')`, `getCategoriesWithItems([...])` | Hero copy, app descriptions | Hero, customer logos | No | Title, desc | Product[] | `verify_page.py app/end-to-end-seaming/page.tsx` | Legacy `ncp1.php?a=e` |

---

## Machine Pages

| Route | Page Type | Owner | Status | Data Deps | Copy Deps | Image Deps | Redirect? | SEO | Schema | Verify | Notes |
|-------|-----------|-------|--------|-----------|-----------|------------|-----------|-----|--------|--------|-------|
| `/Sergers_and_Overlock_Sewing_Machines/[code]` | Detail | — | Pending | `getMachineByStyleKey(code)` | Specs, features, applications | Machine images (multi-angle) | Legacy URLs must work | Title, desc per machine | Product | — | Template component needed |
| `/machines/[code]` | Detail (alt) | — | Pending | Same | Same | Same | Redirect to canonical | Same | Same | — | Modern URL pattern |

---

## Application Pages

| Route | Page Type | Owner | Status | Data Deps | Copy Deps | Image Deps | Redirect? | SEO | Schema | Verify | Notes |
|-------|-----------|-------|--------|-----------|-----------|------------|-----------|-----|--------|--------|-------|
| `/sewing/applications` | Listing | — | Pending | All application categories | Category intros | App icons | No | Title, desc | ItemList | — | Overview of all applications |
| `/sewing/applications/[app]` | Detail | — | Pending | `getApplicationByKey(app)` | Application description, machines | App images, machine thumbnails | No | Title, desc per app | Article | — | Deep dive per application |

---

## Customer Stories

| Route | Page Type | Owner | Status | Data Deps | Copy Deps | Image Deps | Redirect? | SEO | Schema | Verify | Notes |
|-------|-----------|-------|--------|-----------|-----------|------------|-----------|-----|--------|--------|-------|
| `/customer-stories` | Listing | — | Pending | All customer stories | Story summaries | Story thumbnails | No | Title, desc | ItemList | — | Success stories overview |
| `/customer-stories/featured/[s]` | Detail | — | Pending | `getCustomerStory(s)` | Full story content | Story images, logos | Story thumbnails | No | Title, desc per story | Article | — | Individual case study |

---

## Support & Parts

| Route | Page Type | Owner | Status | Data Deps | Copy Deps | Image Deps | Redirect? | SEO | Schema | Verify | Notes |
|-------|-----------|-------|--------|-----------|-----------|------------|-----------|-----|--------|--------|-------|
| `/support` | Hub | — | Pending | Support categories | Category descriptions | — | No | Title, desc | FAQPage | — | Support landing |
| `/support/class/[c]/key/[k]` | Detail | — | Pending | Support article by class+key | Article content | Diagrams if any | No | Title, desc | HowTo | — | Individual support article |
| `/parts/[cp]/[mmc_code]` | Detail | — | Pending | Parts query by class+code | Part specs | Part images | No | Title, desc | Product | — | Parts catalog page |

---

## Static Content

| Route | Page Type | Owner | Status | Data Deps | Copy Deps | Image Deps | Redirect? | SEO | Schema | Verify | Notes |
|-------|-----------|-------|--------|-----------|-----------|------------|-----------|-----|--------|--------|-------|
| `/overlock-history` | Static | — | Pending | None | Historical content | Historical photos | No | Title, desc | Article | — | 180-year company history |
| `/stitch-lab` | Lead Gen | — | Pending | None | CTA copy | Lab photos | No | Title, desc | Organization | — | Contact/consultation page |

---

## Redirects Required

| Legacy URL Pattern | New URL | Type | Priority |
|--------------------|---------|------|----------|
| `*.php` → any direct access | 404 or redirect | 301 | HIGH |
| `/agentmap.html` | `/dealers` or keep | TBD | MEDIUM |
| `/about.html` | `/about` | 301 | MEDIUM |
| `/ncp1.php?a=f` | `/fashion-sewing` | 301 | HIGH |
| `/ncp1.php?a=t` | `/technical-sewing` | 301 | HIGH |
| `/ncp1.php?a=e` | `/end-to-end-seaming` | 301 | HIGH |
| `/70d3b2.php`, `/model_x.php`, etc. | `/Sergers_and_Overlock_Sewing_Machines/[code]` | 301 | HIGH |

---

## Verification Queue

**Next pages to verify (Gates 1 & 2):**

```bash
# Run these in order
cd "/Users/charliemerrow/LOCAL_AI_DATA_LAKE/_STATION_LABS/dev/web/MERROW WEBSITE - NEW_REFACTOR/new_merrow_web"

# Global components
python tools/verify_page.py apps/merrow.com/app/layout.tsx --skip-tokens
python tools/verify_page.py apps/merrow.com/app/_components/Header.tsx --skip-tokens
python tools/verify_page.py apps/merrow.com/app/_components/Footer.tsx --skip-tokens

# Core pages
python tools/verify_page.py apps/merrow.com/app/page.tsx --skip-tokens

# Category pages
python tools/verify_page.py apps/merrow.com/app/fashion-sewing/page.tsx --skip-tokens
python tools/verify_page.py apps/merrow.com/app/technical-sewing/page.tsx --skip-tokens
python tools/verify_page.py apps/merrow.com/app/end-to-end-seaming/page.tsx --skip-tokens
```

---

## Dependencies Summary

### Data Layer (Drizzle + MySQL)

| Query | Used By | Status |
|-------|---------|--------|
| `getMachinesByCategory(cat)` | Category pages | Implemented |
| `getCategoriesWithItems(keys)` | Category pages | Implemented |
| `getMachineByStyleKey(key)` | Machine detail | TBD |
| `getAllMachines()` | Machines listing | TBD |
| `getApplicationByKey(key)` | Application detail | TBD |
| `getCustomerStory(slug)` | Story detail | TBD |
| `getSupportArticle(class, key)` | Support detail | TBD |
| `getPartsByCode(cp, mmc)` | Parts detail | TBD |

### Image Assets (S3)

| Asset Type | Location | Status |
|------------|----------|--------|
| Hero images | `merrow-media.s3.amazonaws.com/general-http/` | Using |
| Customer logos | `merrow-media.s3.amazonaws.com/customer-logos/` | Using |
| Machine images | `merrow-media.s3.amazonaws.com/machines/` | TBD |
| Application icons | `merrow-media.s3.amazonaws.com/applications/` | Using |

### Copy Dependencies

| Content | Source | Status |
|---------|--------|--------|
| Hero taglines | Legacy PHP / Charlie | In code |
| Product descriptions | Database `machine_pages` | TBD |
| Application descriptions | Database `application_pages` | TBD |
| Company history | Static content | TBD |

---

## Notes

- **Verification is MANDATORY** before any page is marked complete
- **Gate 3 (tokens) is DEFERRED** until all 20 pages pass Gates 1 & 2
- **Redirects are CRITICAL** for SEO — legacy URLs must not 404
- **Schema markup** improves search appearance — prioritize Product, Organization

---

*This inventory is the shipping checklist. Update status as pages progress.*
