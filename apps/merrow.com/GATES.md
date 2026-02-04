# GATES.md
## Quality Gates for merrow.com

> **Last Updated:** 2026-02-01

---

## Gate Commands

| Gate | Command | What It Checks |
|------|---------|----------------|
| routes | `npm run gate:routes` | All Next.js routes have valid page.tsx files |
| links | `npm run gate:links` | Internal links point to valid routes |
| seo | `npm run gate:seo` | All pages have metadata (title 30-60 chars, description 50-160 chars) |
| redirects | `npm run gate:redirects` | Redirect CSV is valid, targets are valid routes |
| data | `npm run gate:data` | Supabase connection works, required tables exist with expected row counts |
| all | `npm run gate:all` | Run all gates in sequence |

---

## Environment Variables

### Required for gate:data

| Variable | Description | Format |
|----------|-------------|--------|
| `MERROW_SUPABASE_URL` | Merrow.com Supabase project URL | `https://qyvpzhimzxmlvapzbtyo.supabase.co` |
| `MERROW_SUPABASE_ANON_KEY` | Public/anon key | `sb_publishable_*` |
| `MERROW_SUPABASE_SERVICE_ROLE_KEY` | Service role key (for CI) | `sb_secret_*` |

### Naming Convention

- `MERROW_*` — Merrow.com Supabase project (ref: qyvpzhimzxmlvapzbtyo)
- `CANON_*` — CANON/AI-OS Supabase project (ref: fturxengromlzelexsfm)

This prevents cross-project credential mixups. The gate:data script validates that the key's project ref matches the URL.

---

## Sourcing .env.local

The `.env.local` file is gitignored. To source it for npm scripts:

```bash
set -a && source .env.local && set +a && npm run gate:data
```

Or run all gates:

```bash
set -a && source .env.local && set +a && npm run gate:all
```

---

## Visual Regression (BackstopJS)

### Capture Baseline

```bash
# Start dev server first
npm run dev

# In another terminal:
npm run backstop:reference
```

### Run Test

```bash
npm run backstop:test
```

### Baseline Rules

1. Capture baseline against stable local dev server
2. Review all captured screenshots before committing
3. Don't enshrine noise (add ignores for flaky elements first)
4. Re-capture after intentional visual changes

---

## CI Integration

For CI pipelines, set environment variables as secrets and run:

```bash
npm run gate:all
npm run backstop:test
```

Exit codes:
- `0` = All gates pass
- `1` = One or more gates fail

---

## Gate Script Locations

All gate scripts are in `scripts/`:

```
scripts/
├── gate-data.ts      # Supabase connection + table row counts
├── gate-links.ts     # Internal link validation
├── gate-redirects.ts # Redirect CSV validation
├── gate-routes.ts    # Route/page.tsx validation
└── gate-seo.ts       # SEO metadata validation
```

---

*This file documents the quality gate system for merrow.com.*
