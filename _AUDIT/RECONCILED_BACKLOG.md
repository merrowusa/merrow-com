# Merrow.com — Reconciled Backlog

> **Created:** 2026-02-03
> **Sources:** `SURFACE_MAP.md`, `ARCHITECTURE.md`, `REFACTOR_AUDIT.md`, `docs/LEGACY_INTENT_AUDIT.md`
> **Purpose:** Single, reconciled backlog with priorities and sequencing

---

## Reconciliation Summary (Key Deltas)

- `SURFACE_MAP.md` marks several surfaces as **RINSE’d**; visual parity for header/footer/home/fashion is still incomplete and blocking parity gates.
- `SURFACE_MAP.md` marks `/machines` and `/sewing` as **Pending**, but refactor pages exist and contain content. Status should be “Implemented, needs parity/QA.”
- `REFACTOR_AUDIT.md` flags critical TODOs still present in production code (header mega-menu data, parts, support, homepage branded-stitch form).
- `docs/LEGACY_INTENT_AUDIT.md` confirms machine detail pages are missing multiple legacy functions (thumbnails, applications grid, stitches gallery, marketing downloads, class-specific blocks).

---

## Phase Labels + Visual Criticality (Current Rule)

- `P1_PARITY_VISUAL_CRITICAL`: Header, Footer, Home, Machine pages, Application pages
- `P1_PARITY_FUNCTIONAL`: All other parity surfaces (functional/content/SEO/route parity required; visual refinement deferred to Phase 2 unless explicitly approved)

Use these labels on every task to avoid phase mixing.

---

## P0 — This Week (Blocking)

| Item | Description | Source | Owner (Role) | Status |
| --- | --- | --- | --- | --- |
| [P1_PARITY_VISUAL_CRITICAL] Header parity (visual) | Match legacy header height/spacing, search bar styling, and nav structure. | SURFACE_MAP, REFACTOR_AUDIT | Web/Parity | NOT STARTED |
| [P1_PARITY_VISUAL_CRITICAL] Footer parity (visual) | Ensure brand bar + Agent/Blog/Community block is identical to legacy across all pages. | SURFACE_MAP, LEGACY_INTENT_AUDIT | Web/Parity | IN PROGRESS |
| [P1_PARITY_VISUAL_CRITICAL] Home page parity | Match legacy layout/spacing for hero, grey promos, logo strip. | SURFACE_MAP | Web/Parity | IN PROGRESS |
| [P1_PARITY_FUNCTIONAL] Fashion page parity | Match legacy `ncp1.php?a=f` functionality/content and maintain route/SEO parity; visual refinement can defer to Phase 2 unless promoted. | SURFACE_MAP, LEGACY_INTENT_AUDIT | Web/Parity | IN PROGRESS |
| [P1_PARITY_FUNCTIONAL] Header mega-menu data | Wire DB-driven menu data for machine/app lists. | REFACTOR_AUDIT | Data/DB | NOT STARTED |
| [P1_PARITY_FUNCTIONAL] Support detail data | Implement `/support/class/[c]/key/[k]` data binding. | REFACTOR_AUDIT | Data/DB | NOT STARTED |
| [P1_PARITY_FUNCTIONAL] Parts detail data | Implement `/parts/[cp]/[mmc_code]` data binding. | REFACTOR_AUDIT | Data/DB | NOT STARTED |
| [P1_PARITY_FUNCTIONAL] Missing S3 images | Add images or fallback for `mg2dr`, `mg3dr`, `mgbc`, `70d3b2ls2`. | REFACTOR_AUDIT | Ops/Assets | NOT STARTED |

---

## P1 — This Month (Core Functionality)

| Item | Description | Source | Owner (Role) | Status |
| --- | --- | --- | --- | --- |
| [P1_PARITY_VISUAL_CRITICAL] Machine detail parity | Restore thumbnails, applications grid, stitches gallery, marketing downloads, and class-specific blocks. | LEGACY_INTENT_AUDIT | Web/Data | NOT STARTED |
| [P1_PARITY_VISUAL_CRITICAL] Application detail parity | Rebuild anchor nav + image tiles; restore “Compare all” behavior. | LEGACY_INTENT_AUDIT | Web/Data | NOT STARTED |
| [P1_PARITY_FUNCTIONAL] Customer story parity | Restore legacy functionality/content and route/SEO parity; visual redesign quality can defer to Phase 2 unless promoted. | LEGACY_INTENT_AUDIT | Web/Content | NOT STARTED |
| [P1_PARITY_FUNCTIONAL] Support hub parity | Match legacy manual/parts lists and support IA. | ARCHITECTURE, LEGACY_INTENT_AUDIT | Web/Data | NOT STARTED |
| [P1_PARITY_FUNCTIONAL] Parts hub parity | Upgrade `/parts` to reflect legacy lookup pathways. | LEGACY_INTENT_AUDIT | Web/Data | NOT STARTED |

---

## P2 — This Quarter (Completion + Cleanup)

| Item | Description | Source | Owner (Role) | Status |
| --- | --- | --- | --- | --- |
| Search implementation | Replace stub with functioning search (CSE or internal). | REFACTOR_AUDIT | Web | NOT STARTED |
| Branded Stitch form | Implement branded-stitch inquiry form endpoint. | REFACTOR_AUDIT | Web/API | NOT STARTED |
| Widget migration map | Map remaining legacy widgets to refactor components. | ARCHITECTURE | Web | NOT STARTED |
| External dependency review | Decide keep/remove for legacy CDNs/APIs. | REFACTOR_AUDIT | Ops | NOT STARTED |

---

## P3 — Optional / Out-of-Scope (Explicit)

| Item | Description | Source | Owner (Role) | Status |
| --- | --- | --- | --- | --- |
| Stitch gallery | Legacy `stitch.php` surfaces; not yet mapped. | SURFACE_MAP | TBD | OUT OF SCOPE |
| Store | Legacy `dynamicstore.php` surfaces; not yet mapped. | ARCHITECTURE | TBD | OUT OF SCOPE |

---

## Sequencing Notes

- **P0 must be complete** before any large-scale redesign.
- P1 depends on P0 header/footer parity and DB access stability.
- P2 should only begin once P1 machine + application parity is green.
