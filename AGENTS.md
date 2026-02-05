# AGENTS.md — Codex Operating Instructions

> **Workspace:** `CODEX_REFACTOR_0_1_0001`
> **Full context:** Read `CODEX.md` for complete project details, design tokens, DB info, and prioritized backlog.

---

## Your Role

You are refactoring merrow.com — the website for the Merrow Group Companies (est. 1838, industrial sewing machines). You are rebuilding a legacy PHP site (2009-era, 374 files) as a modern Next.js 16 application.

**This is a parity refactor, NOT a redesign.** Match the legacy site's functionality and visual appearance.

---

## Before You Start

1. **Read `CODEX.md`** — It has everything: stack, what's built, what's next, design tokens, database, quality gates
2. **Read `_AUDIT/RECONCILED_BACKLOG.md`** — Prioritized work items (P0 → P3)
3. **Read `_AUDIT/codex_run_1/gap_scope.md`** — Summary of what's missing
4. **Check `apps/merrow.com/reports/summary.md`** — Your previous session's gate results

---

## Where Things Are

| What | Where | Notes |
|------|-------|-------|
| **Your working code** | `apps/merrow.com/` | Modify this |
| **Data layer** | `packages/data-layer/` | Supabase queries |
| **Legacy PHP site** | `_LEGACY_REFERENCE/public_html/` | READ-ONLY reference |
| **Audit docs** | `_AUDIT/` | What exists, what's missing |
| **Your previous audit** | `_AUDIT/codex_run_1/` | Your prior analysis |
| **Design reference** | `_DESIGN/` | Tokens, deltas, element mapping |
| **Your previous reports** | `apps/merrow.com/reports/` | Gate results, parity diffs |
| **DB schemas** | `db/` | Migration SQL |
| **Full instructions** | `CODEX.md` | Start here |

---

## Rules (Non-Negotiable)

### 1. Never Modify `_LEGACY_REFERENCE/`
This is a symlink to the original legacy site. It is read-only source of truth.

### 2. Never Assume Operational Facts
This company has unusual systems. Do NOT assume or guess:
- What software/vendors they use
- How integrations work
- Business metrics or processes
- People's roles

If you need a fact not in the codebase or `_AUDIT/` docs, use `[UNKNOWN]` as a placeholder and note what's needed. Do not invent plausible-sounding answers.

### 3. Header and Footer Are Locked
`Header.tsx` and `Footer.tsx` match the legacy site. Do not redesign them. CSS tweaks for exact parity are OK. Structural changes are not.

### 4. Build Must Pass
Run `npm run build` — it must produce 233+ static pages with zero errors.

### 5. Don't Break Existing Routes
Every route that works today must still work after your changes. Adding new routes is fine.

### 6. Database: REST API Only
Use `supabase-js` via the data layer in `packages/data-layer/`. Do NOT attempt direct PostgreSQL connections (IPv6 is blocked).

### 7. Preserve Legacy URL Structure
Routes like `/fashion-sewing`, `/machines/[code]`, `/support/class/[c]/key/[k]` must match legacy URLs exactly. SEO depends on this.

---

## Priority Work (from RECONCILED_BACKLOG.md)

### P0 — Do These First
1. Header/footer visual parity (match legacy height/spacing/nav exactly)
2. Home page parity (hero, grey promos, logo strip)
3. Header mega-menu data (wire DB-driven machine/app lists)
4. Support detail data binding (`/support/class/[c]/key/[k]`)
5. Parts detail data binding (`/parts/[cp]/[mmc_code]`)

### P1 — Then These
6. Machine detail parity (thumbnails, stitches gallery, apps grid, downloads)
7. Application detail parity (anchor nav, image tiles, "Compare all")
8. Customer story parity (hero imagery, promo tiles)

### P2 — If Time
9. Search implementation
10. Contact route parameter handling
11. Widget migration

### P3 — Don't Touch
- Stitch gallery, legacy store, tracking scripts, `/STORAGE` archives

---

## Your Previous Session Results

Your last run passed 8/10 gates:
- Routes, links, SEO, redirects, data, nav-cache, DOM, backstop: all PASS
- **Parity:strict BLOCKED** — Header 12.5% pixel diff (needs CSS work at 10% threshold)
- Footer viewport capture at 15% diff

This means: **header CSS parity is the #1 blocker.** Focus there first.

---

## Design Tokens (Quick Reference)

| Token | Value |
|-------|-------|
| Headline font | Century Gothic, sans-serif |
| Body font | Verdana, 14px |
| Container | 980px max-width |
| Nav bar | `#52524f` |
| Links | `#808080` |
| Headlines | 40px |
| Subheads | 28px |
| Hero bg | `#f4f4f4` |

Full spec: `_DESIGN/MERROW_DESIGN_LANGUAGE_v1.md`

---

## How to Read Legacy PHP Files

Key files in `_LEGACY_REFERENCE/public_html/`:

| Legacy | What It Does | Refactor |
|--------|-------------|----------|
| `index.php` | Homepage | `app/page.tsx` |
| `ncp1.php` | Category page (`?a=f/t/e/c`) | `app/fashion-sewing/page.tsx` etc. |
| `mg_1.php` | Machine detail | `app/machines/[code]/page.tsx` |
| `support.php` | Support hub | `app/support/page.tsx` |
| `parts.php` | Parts lookup | `app/parts/page.tsx` |
| `a.php` | Application detail | `app/sewing/applications/[app]/page.tsx` |
| `.htaccess` | URL rewrites | `next.config.ts` redirects |
| `include/` | Shared PHP (header, footer) | `app/_components/` |
| `widgets/` | 140+ widget files | Partial migration |

PHP patterns: `include("include/header.php")`, `$query = "SELECT..."`, `<?php echo $row['field']; ?>`

---

## Commit Convention

Use clear, scoped commit messages:
```
refactor(support): wire support detail data binding
fix(header): match legacy nav height and spacing
feat(machines): add thumbnail gallery to detail pages
```

---

## Quality Checklist (Before Each Commit)

- [ ] `npm run build` passes (233+ pages)
- [ ] No existing routes broken
- [ ] Header/footer unchanged (unless fixing parity)
- [ ] New data queries use `packages/data-layer/` pattern
- [ ] No hardcoded Supabase URLs or keys
- [ ] No `[UNKNOWN]` placeholders left in rendered output

---

*Start with `CODEX.md` for full context, then `_AUDIT/RECONCILED_BACKLOG.md` for what to work on.*
