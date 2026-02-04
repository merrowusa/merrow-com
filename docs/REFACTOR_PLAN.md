# merrow.com Refactor Plan

**Status:** IMPLEMENTED (January 20, 2026)
**Implementation Log:** See `REFACTOR_IMPLEMENTATION_LOG.md`

---

## Overview

Rebuild merrow.com from legacy PHP to Next.js 16 + React 19 + Tailwind v4, preserving all SEO URLs.

**Current State:** Homepage ~60% complete, 1 machine route working, database connected via Drizzle ORM.

**Target:** Full site rebuild covering 62 machines, 76 applications, 159+ dealers, 5 customer stories.

---

## Phase 1: Foundation (Infrastructure)

### 1.1 Drizzle Schema Generation
Create typed schema from legacy MySQL tables.

**Files to create:**
```
packages/data-layer/schema/
  machine-pages.ts      # 62 records - machine detail pages
  agents.ts             # 159 records - dealers
  application-pages.ts  # 76 records - use cases
  application-categories.ts # 15 records
  customer-stories.ts   # 5 records
  index.ts              # barrel export
```

### 1.2 Query Layer
Typed query functions for each entity.

**Files to create:**
```
packages/data-layer/queries/
  machines.ts           # getMachinePageByStyleKey, getMachinesByCategory
  agents.ts             # getAllAgents, getAgentsByCountry
  applications.ts       # getApplicationByKey, getApplicationsByCategory
  customer-stories.ts   # getStoryByKey, getPublishedStories
```

### 1.3 UI Component Extraction
Extract reusable components from homepage.

**Files to create in `packages/ui/`:**
- `FullBleed.tsx` - full-width band wrapper
- `MerrowButton.tsx` - dark CTA button
- `MachineCard.tsx` - machine listing card
- `FeatureCard.tsx` - callout card

---

## Phase 2: Machine Pages (Highest Priority)

### 2.1 Legacy URL Routes
Preserve all SEO-critical URL patterns.

**Files to create:**
```
apps/merrow.com/app/
  Overlock_Sewing_Machines/Continuous_Processing/[cp]/page.tsx
  Sergers_and_Overlock_Sewing_Machines/Emblem_Edging/[cp]/page.tsx
  crochet-sewing-machines/[cp]/page.tsx
  70class/cp/[cp]/page.tsx
```

### 2.2 Shared Machine Page Component
Single implementation used by all routes.

**File:** `apps/merrow.com/app/_components/MachinePage.tsx`

Displays:
- Hero image from S3
- Machine name + header
- Specs grid (speed, stitch width, needle, etc.)
- Overview, How, Why, Where sections (RichText)
- YouTube videos if available
- Related applications
- Contact CTA

### 2.3 Static Generation
Add `generateStaticParams` for all 62 machines.
Add `generateMetadata` using `seo_title`, `seo_description` from DB.

---

## Phase 3: Category Landing Pages

**Files to create:**
```
apps/merrow.com/app/
  fashion-sewing/page.tsx       # fashion_key machines
  technical-sewing/page.tsx     # technical_key machines
  end-to-end-seaming/page.tsx   # e2e_key machines
```

Each page:
- Hero with category description
- Grid of machines in category
- Featured customer story
- Applications list

---

## Phase 4: Applications & Stories

### 4.1 Application Pages
```
apps/merrow.com/app/
  sewing/applications/[app]/page.tsx   # 76 application pages
  sewing/applications/page.tsx         # index
```

### 4.2 Customer Stories
```
apps/merrow.com/app/
  customer-stories/featured/[s]/page.tsx   # 5 stories
  customer-stories/page.tsx                # index
```

---

## Phase 5: Agent/Dealer Map

**File:** `apps/merrow.com/app/agentmap.html/page.tsx`

(Note: `.html` in path preserves legacy URL)

- Interactive map with 159 dealer pins
- Search/filter by country
- Agent contact cards

---

## Phase 6: Support & Parts

```
apps/merrow.com/app/
  support/class/[c]/key/[k]/page.tsx
  parts/[cp]/[mmc_code]/page.tsx
```

---

## Phase 7: Static Pages

```
apps/merrow.com/app/
  overlock-history/page.tsx    # Company history
  about.html/page.tsx          # About page
```

---

## Phase 8: Polish & Launch

- Global header/footer components
- 404 page
- Sitemap generation (`next-sitemap`)
- robots.txt
- Redirects in `next.config.js`
- Core Web Vitals optimization

---

## Critical Files Reference

| Purpose | Path |
|---------|------|
| Homepage (pattern) | `apps/merrow.com/app/page.tsx` |
| Existing machine route | `apps/merrow.com/app/Sergers_and_Overlock_Sewing_Machines/[cp]/page.tsx` |
| UI components | `packages/ui/index.tsx` |
| DB connection | `packages/data-layer/db.ts`, `dynamic-db.ts` |
| Design language | `docs/MERROW_DESIGN_LANGUAGE_v1.md` |
| Tailwind config | `apps/merrow.com/tailwind.config.ts` |
| Legacy URLs | `MERROW WEBSITE - OLD_2009_BUILD/.../public_html/.htaccess` |

---

## Rendering Strategy

| Page Type | Strategy | Rationale |
|-----------|----------|-----------|
| Homepage | Static (ISR 1h) | High traffic |
| Machine Pages | Static (ISR 24h) | 62 pages, stable content |
| Category Pages | Static (ISR 24h) | Stable content |
| Applications | Static (ISR 24h) | 76 pages, stable |
| Customer Stories | Static (ISR 24h) | 5 pages |
| Agent Map | Server | Dynamic search |
| Support/Parts | Server | May need real-time |

---

## Verification

1. **Run locally:** `cd apps/merrow.com && npm run dev`
2. **Test legacy URLs:** Verify all .htaccess patterns return 200
3. **Check database:** Ensure all 62 machines render
4. **Build:** `npm run build` succeeds
5. **Lighthouse:** Score > 90 on all metrics
