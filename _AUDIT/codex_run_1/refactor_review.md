# Gate 2 Refactor Review

Date: 2026-02-04

## Summary
- Legacy map rebuilt from 2009 snapshot; parity matrix updated with OK/REDIRECTED/MISSING/WRONG.
- Current refactor covers core marketing pages, machine routes, applications, stories, support, and parts routes, but legacy feature parity is incomplete.

## Coverage by Area

### Support
- Legacy: `support.php` + `support/class/...` + `support/diagram/...` + `support/class/.../mediakeyword/...`
- Refactor: routes exist for `/support`, `/support/class/[c]/key/[k]`, `/support/diagram/[diagram]/showthemapicture/[show]`, `/support/class/key/mediakeyword/[mk]`
- Gaps: require legacy query parameter handling (`class`, `key`, `mediakeyword`), diagram list sourcing, and complete parts book lists.

### Contact
- Legacy: `contact_general.php` with `label` + `key` parameters and form handlers in `/form_folder/`
- Refactor: `/contact_general.html` route exists, unified submission endpoint `/api/submissions`
- Gaps: legacy `contact_general/label/[label]/key/[k]` and `contact_general/key/[k]` must map into current form with parameter handling.

### Product / Machine Pages
- Legacy: `mg_1.php` (machine detail), `mg_2.php` (compact table), class-specific widgets, gallery, stitches, downloads, applications grid.
- Refactor: `/Sergers_and_Overlock_Sewing_Machines/[cp]`, `/Overlock_Sewing_Machines/Continuous_Processing/[cp]`, `/70class/cp/[cp]`, `/crochet-sewing-machines/[cp]`
- Gaps: thumbnails gallery, stitches gallery, applications grid, marketing downloads, and class-specific blocks (70-class variations, rail widgets).

### Applications
- Legacy: `a.php`, `applications.php`, `merrow_stitching.php` with anchors and “compare all” behavior.
- Refactor: `/sewing/applications` and `/sewing/applications/[app]`
- Gaps: anchored sections, application image tiles, compare modal parity, legacy route aliases.

### Stitch Samples / Galleries
- Legacy: `stitch.php`, `stitchHD.php`, and `/stitch/marketplace/...` rewrites
- Refactor: no stitch sample route exists
- Gaps: must decide whether to rehost stitch samples or redirect to legacy assets/endpoints.

### Parts / Manuals
- Legacy: `parts.php` with `cp` and `mmc_code` plus `/agent_book/kiwifruit/...` for manuals/parts books
- Refactor: `/parts` and `/parts/[cp]/[mmc_code]` exist but are placeholders
- Gaps: DB binding for parts, parts book list, and manual access parity.

## Risk Notes
- Redirect parity is incomplete for many legacy endpoints (especially stitch galleries, manuals, and static HTML in legacy).
- Applications and stitch sample parity are likely SEO and customer-support sensitive.

## Immediate Gate 3 Targets
1. Support: complete parameter handling and manuals/parts books listing.
2. Contact: map label/key routes into current form and preserve legacy intent.
3. Product: restore machine detail sections (stitches, applications, downloads, class widgets).
4. Applications + Stitch: implement stitch sample pages or canonical redirects.