# Merrow.com Architecture

**Version:** 1.0
**Last Updated:** January 20, 2026

---

## Overview

Merrow.com is a Next.js 16 application built as a monorepo, refactored from legacy PHP. It serves as the primary web presence for the Merrow Sewing Machine Company.

---

## Tech Stack

| Layer | Technology |
|-------|------------|
| Framework | Next.js 16.0.8 (App Router) |
| React | React 19.2.1 |
| Styling | Tailwind CSS v4 |
| Database | MySQL (legacy merrowco_* databases) |
| ORM | Drizzle ORM |
| Deployment | TBD |

---

## Monorepo Structure

```
new_merrow_web/
├── apps/
│   └── merrow.com/          # Main Next.js application
├── packages/
│   ├── data-layer/          # Database schemas & queries
│   ├── ui/                  # Shared React components
│   ├── config/              # Shared configuration
│   └── integrations/        # Third-party integrations
├── db/                      # SQL dumps and schema files
├── docs/                    # Documentation
└── public_html/             # Legacy PHP files (reference only)
```

---

## Application Structure

```
apps/merrow.com/
├── app/                     # Next.js App Router
│   ├── _components/         # Shared page components
│   │   ├── MachinePage.tsx  # Machine detail template
│   │   ├── Header.tsx       # Global header
│   │   └── Footer.tsx       # Global footer
│   ├── api/                 # API routes
│   ├── [route directories]  # Page routes (see below)
│   ├── layout.tsx           # Root layout
│   ├── page.tsx             # Homepage
│   ├── not-found.tsx        # 404 page
│   ├── sitemap.ts           # Dynamic sitemap
│   └── globals.css          # Global styles
├── public/                  # Static assets
│   └── robots.txt
├── next.config.ts           # Next.js configuration
├── tailwind.config.ts       # Tailwind configuration
└── package.json
```

---

## Data Layer

### Database Connections

Two connection pools in `packages/data-layer/`:

| File | Database | Purpose |
|------|----------|---------|
| `db.ts` | `merrowco_merrow` | Main application data |
| `dynamic-db.ts` | `merrowco_inventory` | Machine pages, agents, applications |

### Schema Files

Located in `packages/data-layer/schema/`:

| Schema | Table | Records | Key Fields |
|--------|-------|---------|------------|
| `machine-pages.ts` | `machine_pages` | 62 | `style_key`, `class_key`, `fashion_key`, `technical_key`, `e2e_key` |
| `agents.ts` | `agents` | 159 | `country`, `latitude`, `longitude`, `show_map` |
| `application-pages.ts` | `application_pages` | 76 | `d_key`, `app_key`, `publish` |
| `application-categories.ts` | `application_categories` | 15 | `app_key`, `app_category_name` |
| `customer-stories.ts` | `customer_stories` | 5 | `app_key`, `publish` |

### Query Functions

Located in `packages/data-layer/queries/`:

```typescript
// machines.ts
getMachinePageByStyleKey(styleKey: string)
getAllPublishedMachines()
getMachinesByCategory(category: "fashion" | "technical" | "e2e")
getAllMachineStyleKeys()

// agents.ts
getAllAgents()
getAgentsForMap()
getAgentsByCountry(country: string)
getAllAgentCountries()

// applications.ts
getApplicationByKey(dKey: string)
getAllPublishedApplications()
getApplicationsByCategory(appKey: number)
getAllApplicationKeys()

// customer-stories.ts
getStoryByKey(appKey: string)
getPublishedStories()
getAllStoryKeys()
```

---

## Routing Architecture

### URL Preservation Strategy

Legacy PHP URLs are preserved using Next.js directory-based routing:

| Legacy URL | Next.js Route |
|------------|---------------|
| `/Sergers_and_Overlock_Sewing_Machines/{cp}` | `app/Sergers_and_Overlock_Sewing_Machines/[cp]/page.tsx` |
| `/agentmap.html` | `app/agentmap.html/page.tsx` |
| `/about.html` | `app/about.html/page.tsx` |

### Route Categories

| Category | Routes | Rendering |
|----------|--------|-----------|
| **Machine Pages** | 5 route patterns × 62 machines | Static (ISR 24h) |
| **Category Pages** | `/fashion-sewing`, `/technical-sewing`, `/end-to-end-seaming` | Static (ISR 24h) |
| **Application Pages** | `/sewing/applications`, `/sewing/applications/[app]` | Static (ISR 24h) |
| **Story Pages** | `/customer-stories`, `/customer-stories/featured/[s]` | Static (ISR 24h) |
| **Agent Map** | `/agentmap.html` | Server (dynamic) |
| **Support/Parts** | `/support/*`, `/parts/*` | Server (dynamic) |
| **Static Pages** | `/overlock-history`, `/about.html` | Static |

---

## Component Architecture

### UI Package (`packages/ui/`)

Shared components used across routes:

| Component | Purpose |
|-----------|---------|
| `PageHeader` | Page title with eyebrow and subtitle |
| `SpecGrid` | Specifications grid (filters empty values) |
| `RichText` | HTML content renderer with prose styling |
| `FullBleed` | Full-width band wrapper |
| `MerrowButton` | Dark CTA button |
| `MachineCard` | Machine listing card for grids |
| `FeatureCard` | Callout card with image |
| `ArticleBlock` | Content section with title |
| `YouTubeEmbed` | Video embed |

### App Components (`app/_components/`)

Page-specific components:

| Component | Purpose |
|-----------|---------|
| `MachinePage` | Shared machine detail template |
| `Header` | Global site header |
| `Footer` | Global site footer |

---

## Design System

See `docs/MERROW_DESIGN_LANGUAGE_v1.md` for full specification.

### Key Design Tokens (Tailwind)

```typescript
// tailwind.config.ts
colors: {
  merrow: {
    heroBg: "#f4f4f4",
    midBg: "#d7d7d7",
    greyBoxBg: "#e4e4e4",
    border: "#cfcfcf",
    footerBg: "#1f1f1f",
    textMain: "#222222",
    textSub: "#444444",
    textMuted: "#666666",
    link: "#1a4f8a",
  },
},
maxWidth: {
  merrow: "960px",  // Center column width
},
```

### Layout Pattern

- Full-width bands with centered 960px content
- Each band owns its own background
- `FullBleed` component breaks out of centered layout

---

## Static Generation

### generateStaticParams

All machine, application, and story routes use `generateStaticParams` to pre-render pages at build time:

```typescript
export async function generateStaticParams() {
  const keys = await getAllMachineStyleKeys();
  return keys.map((cp) => ({ cp }));
}
```

### ISR (Incremental Static Regeneration)

```typescript
export const revalidate = 86400; // 24 hours
```

### Dynamic Routes

Agent map, support, and parts pages use server rendering:

```typescript
export const dynamic = "force-dynamic";
```

---

## SEO Configuration

### Sitemap

`app/sitemap.ts` generates a dynamic sitemap including:
- Static pages
- All 62 machine pages
- All 76 application pages
- All 5 customer story pages

### Metadata

Each route exports `generateMetadata` for dynamic SEO:

```typescript
export async function generateMetadata({ params }): Promise<Metadata> {
  const machine = await getMachinePageByStyleKey(params.cp);
  return {
    title: machine.seoTitle,
    description: machine.seoSearchDescription,
  };
}
```

### Redirects

Legacy PHP URLs redirected in `next.config.ts`:

```typescript
redirects: [
  { source: "/mg_1.php", destination: "/Sergers_and_Overlock_Sewing_Machines/:cp", ... },
  { source: "/ncp1.php", destination: "/fashion-sewing", has: [{ key: "a", value: "f" }], ... },
]
```

---

## External Services

### S3 (Media Storage)

- Base URL: `https://merrow-media.s3.amazonaws.com`
- Machine images: `/machines/{styleKey}/main.png`
- General assets: `/general-http/2011_live/`

### External Links

- Blog: `https://blog.merrow.com`
- Training: `https://merrowedge.com/pages/training-support`
- Facebook: `https://www.facebook.com/MerrowSewingMachineCo`

---

## Environment Variables

```bash
# Database
MERROW_DB_HOST=127.0.0.1
MERROW_DB_PORT=3306
MERROW_DB_USER=root
MERROW_DB_PASSWORD=
MERROW_DB_NAME=merrowco_merrow
MERROW_DYNAMIC_DB_NAME=merrowco_inventory
```

---

## Documentation Index

| Document | Purpose |
|----------|---------|
| `REFACTOR_STATUS.md` | Quick status overview |
| `docs/REFACTOR_PLAN.md` | Original implementation plan |
| `docs/REFACTOR_IMPLEMENTATION_LOG.md` | Detailed implementation log |
| `docs/ARCHITECTURE.md` | This file - system architecture |
| `docs/MERROW_DESIGN_LANGUAGE_v1.md` | Design system specification |
