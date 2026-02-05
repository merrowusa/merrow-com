# Merrow.com Surface Map
## Comprehensive Developer Reference for Refactor Project

> **Created:** 2026-01-29
> **Purpose:** Complete mapping of surfaces to files, database, and components
> **Status:** AUTHORITATIVE — Use this as the primary reference for refactor work

---

## Executive Summary

This document maps every **user-facing surface** on merrow.com to its:
- Legacy PHP file(s)
- Legacy URL patterns (from `.htaccess`)
- New Next.js route
- Database tables
- Widget/component dependencies
- CSS dependencies
- Implementation status

**What is a "surface"?** A distinct page type or template that renders unique content. Dynamic routes (like `/machines/[code]`) count as one surface even though they serve 62 machines.

---

## Quick Reference: All Surfaces

| # | Surface | Legacy PHP | New Route | Status |
|---|---------|------------|-----------|--------|
| 1 | Homepage | `index.php` | `/` | RINSE'd |
| 2 | Fashion Sewing | `ncp1.php?a=f` | `/fashion-sewing` | RINSE'd |
| 3 | Technical Sewing | `ncp1.php?a=t` | `/technical-sewing` | RINSE'd |
| 4 | End-to-End Seaming | `ncp1.php?a=e` | `/end-to-end-seaming` | RINSE'd |
| 5 | Machine Detail | `mg_1.php?cp={style}` | `/Sergers_and_Overlock.../[cp]` | Pending |
| 6 | Machines Listing | N/A (new) | `/machines` | Pending |
| 7 | Applications Listing | `applications.php` | `/sewing/applications` | Pending |
| 8 | Application Detail | `a.php?app={app}` | `/sewing/applications/[app]` | Pending |
| 9 | Customer Stories Listing | N/A (new) | `/customer-stories` | Pending |
| 10 | Customer Story Detail | `ncs1.php?s={s}` | `/customer-stories/featured/[s]` | Pending |
| 11 | Support Hub | `support.php` | `/support` | Pending |
| 12 | Support Article | `support.php?class={c}&key={k}` | `/support/class/[c]/key/[k]` | Pending |
| 13 | Parts Lookup | `parts.php?cp={cp}&mmc_code={code}` | `/parts/[cp]/[mmc_code]` | Pending |
| 14 | Agent/Dealer Map | `agentmap.php` | `/agentmap.html` | Pending |
| 15 | About | `about.html` (static) | `/about.html` | Pending |
| 16 | Overlock History | `nhp1.php` | `/overlock-history` | Pending |
| 17 | Stitch Samples | `stitch.php` | TBD | Out of Scope |
| 18 | Store | `dynamicstore.php` | TBD | Out of Scope |
| 19 | 404 | `merrow404.php` | `/not-found.tsx` | Pending |

---

## Surface Details

### 1. Homepage

| Property | Value |
|----------|-------|
| **Legacy PHP** | `index.php` |
| **Legacy URL** | `/` |
| **New Route** | `apps/merrow.com/app/page.tsx` |
| **Status** | RINSE'd |

**Database Tables:**
| Table | Purpose | Query |
|-------|---------|-------|
| `seo_site_headers` | SEO metadata | `WHERE page_id='index'` |
| `machine_pages` | Featured machines | For category tiles |

**Legacy Widgets Used:**
```
widget_new_sql_genpageload.php  → DB connection setup
widget_new_metadata.php         → <meta> tags
widget_new_styles.php           → CSS includes
widget_analytics.php            → Google Analytics
widget_js.php                   → JavaScript includes
header_test.php                 → Site header/navigation
widget_feet.php                 → Site footer
widget_footer_js.php            → Footer JavaScript
```

**CSS Dependencies:**
```
http://css.imerrow.com/css_major/960.css
public_html/marketing_site_assets/assets/css/style.css
public_html/marketing_site_assets/assets/css/app.css
public_html/marketing_site_assets/assets/css/responsive.css
```

**New Components:**
- `Header.tsx` → Replaces `header_test.php`
- `Footer.tsx` → Replaces `widget_feet.php`
- Layout shell with TopPromoBar

---

### 2-4. Category Landing Pages (Fashion/Technical/End-to-End)

| Property | Fashion | Technical | End-to-End |
|----------|---------|-----------|------------|
| **Legacy PHP** | `ncp1.php?a=f` | `ncp1.php?a=t` | `ncp1.php?a=e` |
| **Legacy URL** | `/fashion-sewing` | `/technical-sewing` | `/end-to-end-seaming` |
| **New Route** | `app/fashion-sewing/page.tsx` | `app/technical-sewing/page.tsx` | `app/end-to-end-seaming/page.tsx` |
| **Status** | RINSE'd | RINSE'd | RINSE'd |

**Database Tables:**
| Table | Purpose | Query |
|-------|---------|-------|
| `machine_pages` | Machines in category | `WHERE fashion_key=1` / `technical_key=1` / `e2e_key=1` |
| `machine_categories` | Category metadata | Category descriptions |
| `application_pages` | Related applications | Grid display |

**Legacy Widgets Used:**
```
widget_new_sql_genpageload.php
widget_new_metadata.php
widget_new_styles.php
widget_analytics.php
header_test.php
widget_leftmainmenu.php         → Left sidebar navigation
widget_feet.php
widget_footer_js.php
```

**New Queries:**
```typescript
getMachinesByCategory('fashion' | 'technical' | 'end-to-end')
getCategoriesWithItems([...keys])
```

---

### 5. Machine Detail Page

| Property | Value |
|----------|-------|
| **Legacy PHP** | `mg_1.php` |
| **Legacy URLs** | See URL Variants table below |
| **New Routes** | 5 route directories (see below) |
| **Status** | Pending |
| **Record Count** | 62 machines |

**URL Variants (from .htaccess):**
| Pattern | Rewrite Target |
|---------|----------------|
| `/Sergers_and_Overlock_Sewing_Machines/{cp}` | `mg_1.php?cp=$1` |
| `/Sergers_and_Overlock_Sewing_Machines/Emblem_Edging/{cp}` | `mg_1.php?cp=$1` |
| `/Overlock_Sewing_Machines/Continuous_Processing/{cp}` | `mg_1.php?cp=$1` |
| `/crochet-sewing-machines/{cp}` | `mg_1.php?cp=$1` |
| `/70class/cp/{cp}` | `mg_1.php?cp=$1` |

**New Route Directories:**
```
app/Sergers_and_Overlock_Sewing_Machines/[cp]/page.tsx
app/Sergers_and_Overlock_Sewing_Machines/Emblem_Edging/[cp]/page.tsx
app/Overlock_Sewing_Machines/Continuous_Processing/[cp]/page.tsx
app/crochet-sewing-machines/[cp]/page.tsx
app/70class/cp/[cp]/page.tsx
```

**Database Tables:**
| Table | Purpose | Key Column |
|-------|---------|------------|
| `machine_pages` | Machine content | `style_key` |
| `machines` | Specs data | `code` |
| `application_pages` | Related apps | FK |
| `threading_diagrams` | Support media | FK |

**Key Columns in `machine_pages`:**
```sql
style_key         -- URL slug (e.g., 'mg3u', '70d3b2')
style             -- Display name
seo_title         -- <title> tag
description       -- Meta description
seo_keywords      -- Meta keywords
fashion_key       -- Boolean: in fashion category
technical_key     -- Boolean: in technical category
e2e_key           -- Boolean: in end-to-end category
header            -- Page header text
intro_how         -- "How" section content
intro_why         -- "Why" section content
intro_where       -- "Where" section content
intro_overview    -- Overview content
youtube_1-5       -- Video embed IDs
```

**Legacy Widgets Used:**
```
widget_sql.php                  → DB connection
widget_new_styles.php           → CSS
widget_js.php                   → JavaScript
header_test.php                 → Header
widget_cp_center.php            → Machine specs display
widget_techspecs.php            → Technical specifications
widget_videoplayer.php          → Video embeds
widget_sub_threading.php        → Threading diagrams
widget_recommended_accessories.php → Accessories
widget_feet.php                 → Footer
```

**New Component:**
```typescript
// apps/merrow.com/app/_components/MachinePage.tsx
MachinePageContent    // Shared component for all 5 route variants
generateMachineMetadata  // SEO metadata generator
```

**Image Assets (S3):**
```
merrow-media.s3.amazonaws.com/product-pages/{style_key}_main.jpg
merrow-media.s3.amazonaws.com/product-pages/{style_key}_thumb1.jpg
merrow-media.s3.amazonaws.com/product-pages/{style_key}_thumb2.jpg
merrow-media.s3.amazonaws.com/product-pages/{style_key}_thumb3.jpg
merrow-media.s3.amazonaws.com/product-pages/{style_key}_thumb4.jpg
```

---

### 6. Machines Listing

| Property | Value |
|----------|-------|
| **Legacy PHP** | N/A (new page) |
| **New Route** | `app/machines/page.tsx` |
| **Status** | Pending |

**Database Tables:**
| Table | Purpose |
|-------|---------|
| `machine_pages` | All machines |

**New Query:**
```typescript
getAllPublishedMachines()
```

---

### 7-8. Applications

| Property | Listing | Detail |
|----------|---------|--------|
| **Legacy PHP** | `applications.php` | `a.php?app={app}` |
| **Legacy URL** | `/sewing/applications/` | `/sewing/applications/{app}` |
| **New Route** | `app/sewing/applications/page.tsx` | `app/sewing/applications/[app]/page.tsx` |
| **Status** | Pending | Pending |
| **Record Count** | — | 76 applications |

**Database Tables:**
| Table | Purpose | Records |
|-------|---------|---------|
| `application_pages` | Application content | 76 |
| `application_categories` | Category groupings | 15 |

**Key Columns in `application_pages`:**
```sql
app_key           -- URL slug
app_name          -- Display name
app_description   -- Content
category_id       -- FK to application_categories
published         -- Boolean
```

**Legacy Widgets Used:**
```
widget_cms_applications.php
widget_cms_cat_applications.php
widget_enterprise_applicationdb.php
```

**New Queries:**
```typescript
getAllPublishedApplications()
getApplicationsByCategory(categoryId)
getApplicationByKey(appKey)
getAllApplicationCategories()
```

---

### 9-10. Customer Stories

| Property | Listing | Detail |
|----------|---------|--------|
| **Legacy PHP** | N/A (new) | `ncs1.php?s={s}` |
| **Legacy URL** | — | `/customer-stories/featured/{s}` |
| **New Route** | `app/customer-stories/page.tsx` | `app/customer-stories/featured/[s]/page.tsx` |
| **Status** | Pending | Pending |
| **Record Count** | — | 5 stories |

**Database Tables:**
| Table | Purpose | Records |
|-------|---------|---------|
| `customer_stories` | Story content | 5 |

**Key Columns:**
```sql
story_key         -- URL slug
title             -- Headline
summary           -- Short description
content           -- Full story HTML
company_name      -- Customer name
logo_url          -- Company logo
published         -- Boolean
```

**Legacy Widgets Used:**
```
widget_cms_customer_stories.php
```

---

### 11-12. Support Pages

| Property | Hub | Article |
|----------|-----|---------|
| **Legacy PHP** | `support.php` | `support.php?class={c}&key={k}` |
| **Legacy URL** | `/support` | `/support/class/{c}/key/{k}` |
| **New Route** | `app/support/page.tsx` | `app/support/class/[c]/key/[k]/page.tsx` |
| **Status** | Pending | Pending |

**Database Tables:**
| Table | Purpose |
|-------|---------|
| `threading_diagrams` | Threading guides |
| `technical` | Technical documentation |

**Legacy Widgets Used:**
```
widget_technical.php
widget_sub_threading.php
widget_servicecenter.php
```

---

### 13. Parts Lookup

| Property | Value |
|----------|-------|
| **Legacy PHP** | `parts.php` |
| **Legacy URL** | `/parts/{cp}/{mmc_code}` |
| **New Route** | `app/parts/[cp]/[mmc_code]/page.tsx` |
| **Status** | Pending |

**Database Tables:**
| Table | Purpose |
|-------|---------|
| `PRODUCT` | Product master |
| `PRODUCT_PRICE` | Pricing |
| `pricing_list` | Price lists |

**Legacy Widgets Used:**
```
widget_partspricing.php
widget_partsbooklist.php
widget_sub_partslist.php
widget_sub_partsmenu.php
widget_sub_partsdrawings.php
```

---

### 14. Agent/Dealer Map

| Property | Value |
|----------|-------|
| **Legacy PHP** | `agentmap.php` |
| **Legacy URL** | `/agentmap.html` |
| **New Route** | `app/agentmap.html/page.tsx` |
| **Status** | Pending |
| **Record Count** | 159 agents, 60+ countries |

**Database Tables:**
| Table | Purpose | Records |
|-------|---------|---------|
| `agents` | Dealer records | 159 |
| `markers` / `markers1` / `markers2` | Map coordinates | — |

**Key Columns in `agents`:**
```sql
company_name
address
city
country
phone
email
lat / lng         -- Coordinates
```

**Legacy Widgets Used:**
```
widget_agent_map.php
widget_agentmap_config.php
widget_sub_agent_map.php
widget_lilmap.php
```

**New Query:**
```typescript
getAgentsForMap()
getAgentsByCountry(country)
getAllAgentCountries()
```

---

### 15. About Page

| Property | Value |
|----------|-------|
| **Legacy File** | `about.html` (static) |
| **Legacy URL** | `/about.html` |
| **New Route** | `app/about.html/page.tsx` |
| **Status** | Pending |

**Content:** Static — company history, mission, team.

---

### 16. Overlock History

| Property | Value |
|----------|-------|
| **Legacy PHP** | `nhp1.php` |
| **Legacy URL** | `/overlock-history` |
| **New Route** | `app/overlock-history/page.tsx` |
| **Status** | Pending |

**Content:** Static — 177-year company history timeline.

**Legacy Widgets Used:**
```
widget_history.php
```

---

### 17-18. Out of Scope Surfaces

| Surface | Legacy PHP | Reason |
|---------|------------|--------|
| Stitch Samples | `stitch.php` | Complex interactive tool, Phase 2+ |
| Dynamic Store | `dynamicstore.php` | E-commerce, separate project |
| Agent Dashboard | `agent_dashboard.php` | Internal tool |
| CMS Tools | `widget_cms_*.php` | Admin tools |

---

## Global Components

### Header

| Property | Value |
|----------|-------|
| **Legacy PHP** | `header_test.php` |
| **New Component** | `app/_components/Header.tsx` |
| **Status** | RINSE'd |

**Features:**
- Logo
- Primary navigation (Sewing Machines, Applications, Resources, About, Contact)
- Mega-menu for Sewing Machines (3 categories)
- Mega-menu for Applications
- Mobile hamburger menu
- Google Custom Search (placeholder)

**Data Dependencies:**
- Mega-menu machine lists: `getMachinesByCategory()` (DEFERRED - currently stubbed)
- Mega-menu applications: `getApplicationCategories()` (DEFERRED - currently stubbed)

---

### Footer

| Property | Value |
|----------|-------|
| **Legacy PHP** | `widget_feet.php` |
| **New Component** | `app/_components/Footer.tsx` |
| **Status** | RINSE'd |

**Features:**
- 3-column layout (Products, Resources, Company)
- Contact info (phone, email, address)
- Social media links
- Newsletter signup (form only, no backend)
- Copyright + legal links

---

### Layout Shell

| Property | Value |
|----------|-------|
| **Legacy PHP** | Pattern in all pages |
| **New Component** | `app/layout.tsx` |
| **Status** | RINSE'd |

**Features:**
- TopPromoBar (gold promotional banner)
- Header
- Main content slot
- Footer
- Font loading (Inter)
- Global CSS

---

## Database Reference

### Primary Database: `merrowco_inventory`

**Core Content Tables:**
| Table | Records | Primary Key | Purpose |
|-------|---------|-------------|---------|
| `machine_pages` | 62 | `style_key` | Machine detail content |
| `machines` | 37 | `pkey` | Machine specs |
| `application_pages` | 76 | `app_key` | Application content |
| `application_categories` | 15 | `pkey` | App groupings |
| `customer_stories` | 5 | `story_key` | Case studies |
| `agents` | 159 | `pkey` | Dealers/distributors |

**Support Tables:**
| Table | Purpose |
|-------|---------|
| `threading_diagrams` | Machine threading guides |
| `technical` | Technical docs |
| `faqs` | FAQ content |

**SEO Tables:**
| Table | Purpose |
|-------|---------|
| `seo_site_headers` | Page-level metadata |

**Product/Parts Tables:**
| Table | Purpose |
|-------|---------|
| `PRODUCT` | Product master |
| `PRODUCT_PRICE` | Pricing |
| `pricing_list` | Price lists |

**Geographic Tables:**
| Table | Purpose |
|-------|---------|
| `markers`, `markers1`, `markers2` | Map coordinates |
| `textile_plants_*` | Factory locations (20+ tables by country) |

---

## Widget → Component Mapping

| Legacy Widget | New Component | Notes |
|---------------|---------------|-------|
| `header_test.php` | `Header.tsx` | ✅ Implemented |
| `widget_feet.php` | `Footer.tsx` | ✅ Implemented |
| `widget_new_metadata.php` | `generateMetadata()` | Next.js built-in |
| `widget_new_styles.php` | `globals.css` + Tailwind | — |
| `widget_analytics.php` | Next.js Analytics | TBD |
| `widget_js.php` | Next.js bundling | Automatic |
| `widget_videoplayer.php` | `YouTubeEmbed.tsx` | ✅ In UI package |
| `widget_techspecs.php` | `SpecGrid.tsx` | ✅ In UI package |
| `widget_cp_center.php` | `MachinePageContent.tsx` | ✅ Implemented |
| `widget_agent_map.php` | `AgentMap.tsx` | TBD |
| `widget_leftmainmenu.php` | Sidebar navigation | TBD |

---

## CSS Architecture

### Legacy CSS Sources

| Source | Location | Purpose |
|--------|----------|---------|
| 960 Grid | `http://css.imerrow.com/css_major/960.css` | Layout grid |
| Main styles | `marketing_site_assets/assets/css/style.css` | Primary styles |
| App styles | `marketing_site_assets/assets/css/app.css` | Application styles |
| Responsive | `marketing_site_assets/assets/css/responsive.css` | Mobile |
| Page-specific | `marketing_site_assets/assets/css/pages/*.css` | Per-page styles |
| Themes | `marketing_site_assets/assets/css/themes/*.css` | Color themes |

### New CSS Architecture

| Source | Purpose |
|--------|---------|
| `globals.css` | Base styles, CSS variables |
| Tailwind CSS v4 | Utility classes |
| Component styles | Colocated with components |

### Design Tokens

See `docs/MERROW_DESIGN_LANGUAGE_v1.md` for:
- Color palette
- Typography scale
- Spacing system
- Component patterns

---

## Image Assets

### S3 Buckets

| Bucket | Purpose | URL Pattern |
|--------|---------|-------------|
| `merrow-media` | Product images | `merrow-media.s3.amazonaws.com/product-pages/{style_key}_*.jpg` |
| `merrow-media` | General images | `merrow-media.s3.amazonaws.com/general-http/*` |
| `merrowservices` | CSS/assets | `merrowservices.s3.amazonaws.com/css/*` |

### Image Patterns

| Asset Type | Pattern |
|------------|---------|
| Machine main | `{style_key}_main.jpg` |
| Machine thumbs | `{style_key}_thumb1.jpg` through `_thumb4.jpg` |
| Machine large thumbs | `{style_key}_thumb1x.jpg` through `_thumb4x.jpg` |
| Customer logos | `customer-logos/{company}.png` |
| Application icons | `applications/{app_key}.png` |

---

## URL Redirect Map

**Critical for SEO — all legacy URLs must resolve.**

### Automatic Redirects (in `next.config.ts`)

| Legacy Pattern | New URL | Type |
|----------------|---------|------|
| `mg_1.php?cp={cp}` | `/Sergers_and_Overlock_Sewing_Machines/{cp}` | 301 |
| `ncp1.php?a=f` | `/fashion-sewing` | 301 |
| `ncp1.php?a=t` | `/technical-sewing` | 301 |
| `ncp1.php?a=e` | `/end-to-end-seaming` | 301 |
| `a.php?app={app}` | `/sewing/applications/{app}` | 301 |
| `ncs1.php?s={s}` | `/customer-stories/featured/{s}` | 301 |
| `nhp1.php` | `/overlock-history` | 301 |

### Model-Specific Redirects

| Legacy URL | New URL |
|------------|---------|
| `/70d3b2.php` | `/Overlock_Sewing_Machines/Continuous_Processing/70d3b2` |
| `/70d3b2_hp.php` | `/Overlock_Sewing_Machines/Continuous_Processing/70d3b2hp` |
| `/70d3b2_g.php` | `/Overlock_Sewing_Machines/Continuous_Processing/70d3b2g` |
| ... (50+ machine-specific redirects) | ... |

---

## Implementation Checklist

### Per-Surface Checklist

For each surface, complete:

- [ ] **Route created** — `app/{route}/page.tsx` exists
- [ ] **Data layer** — Drizzle schema + query functions
- [ ] **Component** — React component built
- [ ] **Styles** — Tailwind classes applied
- [ ] **SEO** — `generateMetadata()` implemented
- [ ] **Images** — S3 URLs working, fallbacks for missing
- [ ] **Mobile** — Responsive design verified
- [ ] **Legacy URLs** — Redirects configured
- [ ] **RINSE'd** — Code quality verified
- [ ] **Verified** — Gates 1 & 2 pass

### Verification Commands

```bash
cd "/Users/charliemerrow/LOCAL_AI_DATA_LAKE/_STATION_LABS/dev/web/MERROW WEBSITE - NEW_REFACTOR/new_merrow_web"

# Verify a specific page
python tools/verify_page.py apps/merrow.com/app/{route}/page.tsx --skip-tokens

# Build check
cd apps/merrow.com && npm run build

# Local dev
cd apps/merrow.com && npm run dev
```

---

## File Tree Reference

### Next.js App Structure

```
apps/merrow.com/app/
├── _components/
│   ├── Header.tsx              ← Site header
│   ├── Footer.tsx              ← Site footer
│   ├── MachinePage.tsx         ← Shared machine detail component
│   └── index.ts
├── page.tsx                    ← Homepage
├── layout.tsx                  ← Root layout
├── globals.css                 ← Global styles
├── not-found.tsx               ← 404 page
├── sitemap.ts                  ← Dynamic sitemap
│
├── fashion-sewing/page.tsx
├── technical-sewing/page.tsx
├── end-to-end-seaming/page.tsx
│
├── Sergers_and_Overlock_Sewing_Machines/
│   ├── [cp]/page.tsx
│   └── Emblem_Edging/[cp]/page.tsx
├── Overlock_Sewing_Machines/Continuous_Processing/[cp]/page.tsx
├── crochet-sewing-machines/[cp]/page.tsx
├── 70class/cp/[cp]/page.tsx
├── machines/
│   ├── page.tsx                ← Listing
│   └── [code]/page.tsx         ← Modern URL variant
│
├── sewing/applications/
│   ├── page.tsx                ← Listing
│   └── [app]/page.tsx          ← Detail
│
├── customer-stories/
│   ├── page.tsx                ← Listing
│   └── featured/[s]/page.tsx   ← Detail
│
├── support/
│   ├── page.tsx                ← Hub
│   └── class/[c]/key/[k]/page.tsx ← Article
│
├── parts/[cp]/[mmc_code]/page.tsx
├── agentmap.html/page.tsx
├── about.html/page.tsx
└── overlock-history/page.tsx
```

### Data Layer Structure

```
packages/data-layer/
├── schema/
│   ├── machine-pages.ts
│   ├── agents.ts
│   ├── application-pages.ts
│   ├── application-categories.ts
│   ├── customer-stories.ts
│   └── index.ts
├── queries/
│   ├── machines.ts
│   ├── agents.ts
│   ├── applications.ts
│   ├── customer-stories.ts
│   └── index.ts
├── db.ts                       ← MySQL connection
└── dynamic-db.ts               ← Dynamic connection
```

### Legacy PHP Structure (Reference)

```
public_html/
├── index.php                   ← Homepage
├── mg_1.php                    ← Machine detail
├── ncp1.php                    ← Category pages
├── a.php                       ← Application detail
├── applications.php            ← Applications listing
├── ncs1.php                    ← Customer story detail
├── support.php                 ← Support pages
├── parts.php                   ← Parts lookup
├── agentmap.php                ← Dealer map
├── nhp1.php                    ← History page
├── stitch.php                  ← Stitch samples (out of scope)
├── dynamicstore.php            ← Store (out of scope)
│
├── header_test.php             ← Site header
├── widget_feet.php             ← Site footer
├── widget_*.php                ← 140+ widget files
│
└── marketing_site_assets/
    └── assets/css/             ← Stylesheets
```

---

## Contact & Ownership

| Role | Owner |
|------|-------|
| **Project Owner** | Charlie Merrow |
| **Domain Principal** | `merrow-com` agent |
| **Detail Tracker** | `projects/merrow-com/STATUS.md` |
| **Codebase** | `_STATION_LABS/dev/web/MERROW WEBSITE - NEW_REFACTOR/new_merrow_web/` |

---

*This is the authoritative surface map for the merrow.com refactor. Update as surfaces are completed.*
