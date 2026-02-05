# CODEX.md — Merrow.com Refactor Workspace

> **Workspace:** `CODEX_REFACTOR_0_1_0001`
> **Branch:** `codex/refactor/0.1/0001`
> **Created:** 2026-02-05
> **Goal:** Faithful recreation of legacy merrow.com using modern stack

---

## What This Project Is

merrow.com is the website for the Merrow Group Companies — a 180-year-old sewing machine manufacturing conglomerate (est. 1838). The site showcases industrial sewing machines across multiple categories: fashion sewing, technical sewing, end-to-end seaming, crochet, and overlock/serger machines.

**The refactor goal:** Rebuild the legacy PHP site (2009-era, 374 PHP files, 140+ widgets, MySQL) as a modern Next.js application with identical functionality and visual presentation.

**This is NOT a redesign.** The target is pixel-level parity with the legacy site. Header and footer are locked to legacy appearance. Interior pages must preserve all legacy functionality.

---

## Workspace Layout

```
CODEX_REFACTOR_0_1_0001/
├── CODEX.md                  ← YOU ARE HERE — master instructions
├── _LEGACY_REFERENCE/        ← READ-ONLY — do NOT modify
│   └── public_html/          ← Full legacy PHP site (symlink, 11K files, 1GB)
├── _AUDIT/                   ← Reference docs about what exists and what's missing
│   ├── codex_run_1/          ← Previous Codex session's audit output
│   ├── SURFACE_MAP.md        ← 19 surfaces → files/DB/CSS/status (700+ lines)
│   ├── LEGACY_INTENT_AUDIT.md ← Route-by-route intent + known gaps
│   ├── ARCHITECTURE.md       ← Legacy PHP architecture (374 files, 50 dirs)
│   ├── ROUTES_LEGACY.md      ← .htaccess rewrite rules
│   ├── REFACTOR_AUDIT.md     ← Pre-launch assessment (S3 images, TODOs)
│   ├── PAGE_INVENTORY.md     ← Route-by-route status tracker
│   ├── RECONCILED_BACKLOG.md ← Prioritized work (P0 → P3)
│   └── IA_SITE_MAP.md        ← Information architecture tree
├── _DESIGN/                  ← Visual design reference
│   ├── MERROW_DESIGN_LANGUAGE_v1.md ← Colors, fonts, layout spec
│   ├── DESIGN_DELTAS.md      ← Approved deviations from legacy
│   ├── DESIGN_TOKENS_V2.md   ← Token toggle system (v1 legacy / v2 modern)
│   └── element-mapping.md    ← Figma → DOM selector mapping
├── apps/merrow.com/          ← THE CODE — Next.js 16 app (modify this)
├── packages/data-layer/      ← Supabase queries and client
├── db/                       ← Database schemas (legacy migration SQL)
├── docs/                     ← Existing codebase documentation
└── artifacts/                ← Build artifacts, screenshots
```

### Rules

1. **`_LEGACY_REFERENCE/` is READ-ONLY.** Never modify files in this directory. It is the source of truth for what the old site looked like and how it behaved.
2. **`_AUDIT/` and `_DESIGN/` are reference.** Read them to understand context. You may add new audit docs but don't modify existing ones.
3. **`apps/merrow.com/` is where you work.** All code changes go here.
4. **Build must pass.** Run `npm run build` from the workspace root. It must produce 233+ static pages.
5. **Don't break existing routes.** Every route that works today must still work after your changes.

---

## Stack

| Layer | Technology | Notes |
|-------|------------|-------|
| Framework | Next.js 16 (App Router) | Static generation for all pages |
| UI | React 19 | Server Components by default |
| Styling | Tailwind CSS v4 | Legacy design tokens in `globals.css` |
| Database | Supabase PostgreSQL | REST API via `supabase-js` (NO direct Postgres) |
| Package Manager | npm | Monorepo with `apps/` and `packages/` |
| Deployment | Vercel | Not yet connected |

### Key Files

| File | Purpose |
|------|---------|
| `apps/merrow.com/app/layout.tsx` | Root layout — Header + Footer shell |
| `apps/merrow.com/app/globals.css` | Legacy design tokens (fonts, colors, spacing) |
| `apps/merrow.com/app/_components/Header.tsx` | Site header (LOCKED — match legacy exactly) |
| `apps/merrow.com/app/_components/Footer.tsx` | Site footer with brand bar (LOCKED) |
| `apps/merrow.com/app/_components/HeaderWithData.tsx` | Server component that fetches header data |
| `apps/merrow.com/app/_components/TopPromoBar.tsx` | Promotional banner |
| `packages/data-layer/supabase.ts` | Supabase client (`MERROW_SUPABASE_*` env vars) |
| `packages/data-layer/queries/support.ts` | Support page queries |

---

## Database

| Property | Value |
|----------|-------|
| Provider | Supabase |
| Access | REST API via `supabase-js` only |
| Env Vars | `MERROW_SUPABASE_URL`, `MERROW_SUPABASE_ANON_KEY`, `MERROW_SUPABASE_SERVICE_ROLE_KEY` |

**Key Tables:**
- `machines` — Machine catalog (34 total, 30 published)
- `applications` — 76 applications
- `agents` — 159 dealer/agent records
- `technical` — Support technical content
- `threading_diagrams` — Threading diagram references
- `asin` — Parts/ASIN lookup
- `stitch_samples` — Stitch sample gallery data

**Important:** Use `supabase-js` REST API. Do NOT attempt direct PostgreSQL connections (IPv6 blocked on Vercel and many networks).

---

## Design Tokens (Legacy — V1)

These values MUST be matched exactly for parity:

| Token | Value | Usage |
|-------|-------|-------|
| Headline font | Century Gothic, sans-serif | h1, h2, h3 |
| Body font | Verdana, 14px | Body text |
| Container width | 980px | Max content width |
| Nav bar color | `#52524f` | Grey navigation bar |
| Link color | `#808080` | Default links |
| Headline size | 40px | Category page headlines |
| Subhead size | 28px | Section headers |
| Byeline size | 24px | Subtitles |
| Hero background | `#f4f4f4` | Hero section bg |
| Mid background | `#d7d7d7` | Mid-section bg |

See `_DESIGN/MERROW_DESIGN_LANGUAGE_v1.md` for full spec.

---

## What's Already Built (36 Pages)

These routes exist and have implementations:

### Core Shell
- `/` — Homepage
- `layout.tsx` — Header + Footer (locked)

### Category Pages (parity targets)
- `/fashion-sewing` — Fashion sewing category
- `/technical-sewing` — Technical sewing category
- `/end-to-end-seaming` — End-to-end category
- `/crochet-sewing-machines` — Crochet category
- `/Overlock_Sewing_Machines` — Overlock category
- `/Sergers_and_Overlock_Sewing_Machines` — Sergers category
- `/sewing` — Sewing hub
- `/overlock-history` — History page

### Machine Detail
- `/machines` — Machine listing
- `/machines/[code]` — Individual machine detail
- `/70class` — 70 class overview
- `/70class/cp/[cp]` — 70 class variants
- Various `/Sergers.../[cp]`, `/Overlock.../[cp]`, `/crochet.../[cp]` routes

### Support & Parts
- `/support` — Support hub
- `/support.html` — Legacy support route
- `/support/class/[c]/key/[k]` — Support by class/key
- `/support/class/key/mediakeyword/[mk]` — Media keyword search
- `/support/diagram/[diagram]/showthemapicture/[show]` — Threading diagrams
- `/support/request-quote` — Quote request
- `/parts` — Parts hub
- `/parts/[cp]/[mmc_code]` — Parts by machine

### Other
- `/about.html` — About/history page
- `/agentmap.html` — Agent locator (Leaflet map)
- `/contact_general.html` — Contact form
- `/customer-stories` — Customer stories listing
- `/customer-stories/featured/[s]` — Individual stories
- `/sewing/applications` — Applications listing
- `/sewing/applications/[app]` — Application detail
- `/sitemap.ts` — XML sitemap

---

## What Needs to Be Done (Priority Order)

### P0 — Critical (Blocking Launch)

1. **Header/footer visual parity** — Match legacy height, spacing, search bar, nav structure exactly
2. **Home page parity** — Hero, grey promos, logo strip match legacy layout/spacing
3. **Fashion page parity** — Applications list styling, CTA match `ncp1.php?a=f`
4. **Header mega-menu data** — Wire DB-driven machine/app lists into dropdown menus
5. **Support detail data binding** — `/support/class/[c]/key/[k]` must fetch from Supabase
6. **Parts detail data binding** — `/parts/[cp]/[mmc_code]` must fetch from Supabase
7. **Fix 4 missing S3 images** — `mg2dr`, `mg3dr`, `mgbc`, `70d3b2ls2` (add fallback or placeholder)

### P1 — Core Functionality

8. **Machine detail parity** — Restore: thumbnail gallery, stitches gallery, applications grid, marketing downloads, class-specific blocks (70-class variations, rail widgets)
9. **Application detail parity** — Anchor nav + image tiles, "Compare all" behavior
10. **Customer story parity** — Hero imagery + promo tiles
11. **Support hub parity** — Manual/parts lists, support IA
12. **Parts hub parity** — Reflect legacy lookup pathways

### P2 — Completion

13. **Search** — Replace stub with functioning search
14. **Branded-stitch form** — Form endpoint
15. **Widget migration** — Map remaining legacy widgets to components
16. **Contact routes** — `contact_general/label/[label]/key/[k]` parameter handling

### P3 — Out of Scope (Don't Do)

- Stitch gallery (`stitch.php`) — Not yet decided
- Legacy store (`dynamicstore.php`) — Not in scope
- Legacy tracking scripts — Drop, don't reimplement
- `/STORAGE`, `/cephei`, `/nebula` asset archives — Redirect or ignore

---

## How to Navigate the Legacy Site

The legacy site is in `_LEGACY_REFERENCE/public_html/`. Key files:

| Legacy File | What It Does | Refactor Equivalent |
|-------------|--------------|---------------------|
| `index.php` | Homepage | `app/page.tsx` |
| `ncp1.php` | Category page (param `a=f/t/e/c`) | `app/fashion-sewing/page.tsx` etc. |
| `mg_1.php` | Machine detail (full) | `app/machines/[code]/page.tsx` |
| `mg_2.php` | Machine detail (compact) | (not yet implemented) |
| `support.php` | Support hub | `app/support/page.tsx` |
| `parts.php` | Parts lookup | `app/parts/page.tsx` |
| `a.php` | Application detail | `app/sewing/applications/[app]/page.tsx` |
| `about.php` | About page | `app/about.html/page.tsx` |
| `contact_general.php` | Contact form | `app/contact_general.html/page.tsx` |
| `.htaccess` | URL rewrites | `next.config.ts` redirects |
| `include/` | Shared PHP includes (header, footer, nav) | `app/_components/` |
| `widgets/` | 140+ widget files | Partial migration — see `_AUDIT/ARCHITECTURE.md` |
| `Connections/merrowco.php` | MySQL DB connection | `packages/data-layer/supabase.ts` |

### Reading PHP Files

The legacy PHP files mix HTML, CSS, and PHP. Key patterns:
- `include("include/header.php")` — Shared header
- `$query = "SELECT * FROM machines WHERE ..."` — Direct MySQL queries
- `<?php echo $row['field']; ?>` — Template output
- Widget files in `widgets/` are included via `include("widgets/widget_name.php")`

---

## Quality Gates

Before considering work complete:

1. **Build passes:** `npm run build` from workspace root — must produce 233+ static pages
2. **No broken routes:** Every existing route must still render
3. **Visual parity:** Header and footer must be pixel-identical to legacy
4. **Data binding:** Pages that show DB content must actually fetch and display it
5. **No regressions:** Don't remove functionality that already works

---

## Workspace Versioning

This workspace follows the naming convention:

```
CODEX_REFACTOR_{VERSION}_{ITERATION}

Where:
  VERSION   = 0_1 (bump when workspace structure changes)
  ITERATION = 0001 (increment for each fresh workspace)
```

| Workspace | Branch | Purpose |
|-----------|--------|---------|
| `CODEX_REFACTOR_0_1_0001` | `codex/refactor/0.1/0001` | This workspace |
| `CODEX_REFACTOR_0_1_0002` | `codex/refactor/0.1/0002` | Next fresh start |
| `CODEX_REFACTOR_0_2_0001` | `codex/refactor/0.2/0001` | After workspace spec changes |

**To create the next iteration:**
```bash
cd /path/to/merrow-com  # main repo
git worktree add /path/to/_worktrees/CODEX_REFACTOR_0_1_0002 -b codex/refactor/0.1/0002
# Then copy _AUDIT/, _DESIGN/, CODEX.md, update .gitignore
```

---

## Environment Setup

```bash
cd CODEX_REFACTOR_0_1_0001
npm install

# Required env vars (create .env.local):
MERROW_SUPABASE_URL=https://fturxengromlzelexsfm.supabase.co
MERROW_SUPABASE_ANON_KEY=<get from team>
MERROW_SUPABASE_SERVICE_ROLE_KEY=<get from team>

# Build
npm run build

# Dev server
npm run dev
```

---

## Key Audit Documents (Start Here)

Read these in order to understand the full picture:

1. **`_AUDIT/RECONCILED_BACKLOG.md`** — What to work on, in priority order
2. **`_AUDIT/SURFACE_MAP.md`** — Maps every surface to files/DB/status
3. **`_AUDIT/LEGACY_INTENT_AUDIT.md`** — What each legacy route actually does
4. **`_AUDIT/codex_run_1/gap_scope.md`** — Summary of what's missing (7,264 of 7,290 routes)
5. **`_AUDIT/codex_run_1/refactor_review.md`** — Gate 2 review with specific gaps
6. **`_DESIGN/MERROW_DESIGN_LANGUAGE_v1.md`** — Visual design spec

---

*This file is the entry point for any agent working in this workspace. When in doubt, check `_AUDIT/` for context.*
