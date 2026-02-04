# Merrow.com Refactor Implementation Log

**Date:** January 20, 2026
**Status:** Phase 1-8 Complete
**Next Steps:** Testing, verification, deployment

---

## What Was Built

This document captures the complete implementation of the merrow.com refactor from legacy PHP to Next.js 16 + React 19 + Tailwind v4.

---

## Phase 1: Foundation (Infrastructure)

### 1.1 Drizzle Schema Files
**Location:** `packages/data-layer/schema/`

| File | Table | Records | Purpose |
|------|-------|---------|---------|
| `machine-pages.ts` | `machine_pages` | 62 | Machine detail pages |
| `agents.ts` | `agents` | 159 | Dealers/distributors |
| `application-pages.ts` | `application_pages` | 76 | Use case pages |
| `application-categories.ts` | `application_categories` | 15 | App groupings |
| `customer-stories.ts` | `customer_stories` | 5 | Success stories |
| `index.ts` | - | - | Barrel export |

**Also updated:** `packages/data-layer/schema.ts` to re-export from new schema directory.

### 1.2 Query Layer
**Location:** `packages/data-layer/queries/`

| File | Key Functions |
|------|---------------|
| `machines.ts` | `getMachinePageByStyleKey`, `getAllPublishedMachines`, `getMachinesByCategory`, `getAllMachineStyleKeys`, `getMachinesByClassKey` |
| `agents.ts` | `getAllAgents`, `getAgentsForMap`, `getAgentsByCountry`, `searchAgentsByName`, `getAllAgentCountries` |
| `applications.ts` | `getApplicationByKey`, `getAllPublishedApplications`, `getApplicationsByCategory`, `getAllApplicationKeys`, `getAllApplicationCategories` |
| `customer-stories.ts` | `getStoryByKey`, `getPublishedStories`, `getAllStoryKeys` |
| `index.ts` | Barrel export |

### 1.3 UI Components
**Location:** `packages/ui/index.tsx`

Added components:
- `FullBleed` - Full-width band wrapper (breaks out of centered layout)
- `MerrowButton` - Dark CTA button with hover state
- `MachineCard` - Card for machine listings
- `FeatureCard` - Callout card with image/text (grey band style)
- `ArticleBlock` - Content block with title + RichText
- `YouTubeEmbed` - Video embed component

Existing components (unchanged):
- `PageHeader` - Page title with eyebrow/subtitle
- `SpecGrid` - Specifications grid
- `RichText` - HTML content renderer

---

## Phase 2: Machine Pages

### 2.1 Shared Machine Page Component
**Location:** `apps/merrow.com/app/_components/MachinePage.tsx`

Features:
- Hero section with machine image from S3
- PageHeader with machine name + header
- SpecGrid with 13 specifications
- 4 ArticleBlocks (Overview, How, Why, Where)
- YouTube videos section (if available)
- Related applications section
- Contact CTA footer

Exports:
- `MachinePageContent` - Main component
- `generateMachineMetadata` - SEO metadata generator

### 2.2 Legacy URL Routes
**Location:** `apps/merrow.com/app/`

| Route Directory | Legacy URL Pattern |
|-----------------|-------------------|
| `Sergers_and_Overlock_Sewing_Machines/[cp]/` | `/Sergers_and_Overlock_Sewing_Machines/{cp}` |
| `Overlock_Sewing_Machines/Continuous_Processing/[cp]/` | `/Overlock_Sewing_Machines/Continuous_Processing/{cp}` |
| `Sergers_and_Overlock_Sewing_Machines/Emblem_Edging/[cp]/` | `/Sergers_and_Overlock_Sewing_Machines/Emblem_Edging/{cp}` |
| `crochet-sewing-machines/[cp]/` | `/crochet-sewing-machines/{cp}` |
| `70class/cp/[cp]/` | `/70class/cp/{cp}` |

All routes:
- Use shared `MachinePageContent` component
- Have `generateStaticParams` for all 62 machines
- Have `generateMetadata` for SEO
- Use ISR with 24-hour revalidation

---

## Phase 3: Category Landing Pages

**Location:** `apps/merrow.com/app/`

| Route | Purpose |
|-------|---------|
| `fashion-sewing/page.tsx` | Fashion machines (fashion_key) |
| `technical-sewing/page.tsx` | Technical machines (technical_key) |
| `end-to-end-seaming/page.tsx` | E2E machines (e2e_key) |

Each page has:
- Hero section with category description
- Grid of machines from that category
- Applications section
- Contact CTA

---

## Phase 4: Applications & Customer Stories

### Applications
**Location:** `apps/merrow.com/app/sewing/applications/`

| Route | Purpose |
|-------|---------|
| `page.tsx` | Index listing all 76 applications by category |
| `[app]/page.tsx` | Individual application detail pages |

### Customer Stories
**Location:** `apps/merrow.com/app/customer-stories/`

| Route | Purpose |
|-------|---------|
| `page.tsx` | Index listing all 5 stories |
| `featured/[s]/page.tsx` | Individual story pages |

---

## Phase 5: Agent/Dealer Map

**Location:** `apps/merrow.com/app/agentmap.html/page.tsx`

Note: The `.html` in the path preserves the legacy URL `/agentmap.html`

Features:
- Stats bar (159 agents, 60+ countries, 177+ years)
- Agents grouped by country
- Agent cards with contact info, address, Google Maps link
- Country quick-jump navigation
- Server-rendered (dynamic) for real-time data

---

## Phase 6: Support & Parts

**Location:** `apps/merrow.com/app/`

| Route | Purpose |
|-------|---------|
| `support/page.tsx` | Support landing page |
| `support/class/[c]/key/[k]/page.tsx` | Machine-specific support |
| `parts/[cp]/[mmc_code]/page.tsx` | Parts lookup |

Both dynamic routes are server-rendered for real-time data.

---

## Phase 7: Static Pages

**Location:** `apps/merrow.com/app/`

| Route | Purpose |
|-------|---------|
| `overlock-history/page.tsx` | 177-year company history timeline |
| `about.html/page.tsx` | About/mission page |

---

## Phase 8: Polish & Configuration

### Global Components
**Location:** `apps/merrow.com/app/_components/`

| File | Purpose |
|------|---------|
| `Header.tsx` | Site header with logo + navigation |
| `Footer.tsx` | Site footer (matches homepage footer) |
| `index.ts` | Barrel export |

### 404 Page
**Location:** `apps/merrow.com/app/not-found.tsx`

Custom 404 with helpful navigation links.

### Sitemap
**Location:** `apps/merrow.com/app/sitemap.ts`

Dynamic sitemap that includes:
- Static pages (home, categories, etc.)
- All 62 machine pages
- All 76 application pages
- All 5 customer story pages

### Robots.txt
**Location:** `apps/merrow.com/public/robots.txt`

Standard robots.txt with sitemap reference.

### Next.js Config
**Location:** `apps/merrow.com/next.config.ts`

Added:
- `reactStrictMode: true`
- S3 image remote patterns
- Legacy PHP redirects (mg_1.php, ncp1.php, etc.)
- Cache headers

---

## File Tree Summary

```
apps/merrow.com/app/
├── _components/
│   ├── Header.tsx
│   ├── Footer.tsx
│   ├── MachinePage.tsx
│   └── index.ts
├── 70class/cp/[cp]/page.tsx
├── Overlock_Sewing_Machines/Continuous_Processing/[cp]/page.tsx
├── Sergers_and_Overlock_Sewing_Machines/
│   ├── [cp]/page.tsx
│   └── Emblem_Edging/[cp]/page.tsx
├── about.html/page.tsx
├── agentmap.html/page.tsx
├── crochet-sewing-machines/[cp]/page.tsx
├── customer-stories/
│   ├── page.tsx
│   └── featured/[s]/page.tsx
├── end-to-end-seaming/page.tsx
├── fashion-sewing/page.tsx
├── overlock-history/page.tsx
├── parts/[cp]/[mmc_code]/page.tsx
├── sewing/applications/
│   ├── page.tsx
│   └── [app]/page.tsx
├── support/
│   ├── page.tsx
│   └── class/[c]/key/[k]/page.tsx
├── technical-sewing/page.tsx
├── not-found.tsx
├── sitemap.ts
├── layout.tsx (existing)
├── page.tsx (existing - homepage)
└── globals.css (existing)

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
├── schema.ts (updated)
├── db.ts (existing)
└── dynamic-db.ts (existing)

packages/ui/
└── index.tsx (updated with new components)
```

---

## What Was NOT Changed

- `apps/merrow.com/app/page.tsx` - Homepage (already complete)
- `apps/merrow.com/app/layout.tsx` - Root layout
- `apps/merrow.com/app/globals.css` - Global styles
- `apps/merrow.com/tailwind.config.ts` - Tailwind config
- `packages/data-layer/db.ts` - Main DB connection
- `packages/data-layer/dynamic-db.ts` - Dynamic DB connection
- `apps/merrow.com/app/api/healthcheck/` - API healthcheck
- `apps/merrow.com/app/machines/` - Debug machine routes

---

## Verification Checklist

Before deploying, verify:

1. [ ] **Database connection works**
   ```bash
   cd apps/merrow.com && npm run dev
   # Visit http://localhost:3000/api/healthcheck
   ```

2. [ ] **Legacy URLs resolve**
   - `/Sergers_and_Overlock_Sewing_Machines/mb4dfo`
   - `/fashion-sewing`
   - `/sewing/applications`
   - `/agentmap.html`

3. [ ] **Static generation works**
   ```bash
   npm run build
   ```

4. [ ] **All 62 machines render**
   - Check `/fashion-sewing` shows machines
   - Check individual machine pages load

5. [ ] **Sitemap generates**
   - Visit `/sitemap.xml` after build

6. [ ] **404 page works**
   - Visit `/nonexistent-page`

---

## Known Issues / TODO

1. **Header/Footer not in layout** - The Header and Footer components were created but not added to `layout.tsx`. The homepage uses its own full-bleed design. Decide if global header/footer should wrap all pages or only interior pages.

2. **Image optimization** - Machine images reference S3 URLs but may not exist for all machines. The MachinePage component has an `onError` handler to hide missing images.

3. **Support/Parts pages** - These are placeholder templates. The actual data fetching for `support/class/[c]/key/[k]` and `parts/[cp]/[mmc_code]` needs to be implemented once the source tables are identified.

4. **Email forms** - Newsletter signup and contact forms are HTML-only. Backend handlers need to be implemented.

---

## Architecture Reference

See also:
- `CANON/projects/merrow-com/ARCHITECTURE.md` - Full architecture map
- `docs/MERROW_DESIGN_LANGUAGE_v1.md` - Design system spec
- `db/mysql_schema_only.sql` - Full database schema

---

## Contact

This implementation was completed on January 20, 2026.
