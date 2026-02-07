# Merrow Refactor Functionality Freeze Matrix

Date: 2026-02-07  
Scope: BUILD parity freeze for functionality portability and redesign readiness

## Mission Criteria

1. Preserve legacy URL behavior and core feature intent.
2. Port required functionality to the Next.js app.
3. Isolate data/content from presentation so a redesign can swap UI with lower regression risk.

## Surface Status Matrix

| Surface | Legacy source | Next.js surface | Functionality status | Notes |
| --- | --- | --- | --- | --- |
| Header/Nav | `header_test.php` | `app/_components/Header.tsx`, `packages/data-layer/types/header-nav.ts` | PARTIAL | Route links and nav structure are in place; parity styling work remains separate. |
| Footer | `widget_feet.php` | `app/_components/Footer.tsx` | PARTIAL | Core links and contact content are present; pixel parity tracked separately. |
| Home | `index.php` | `app/page.tsx` | PARTIAL | Core sections are implemented; visual parity still iterative. |
| Category pages | `ncp1.php?a=*` | `app/fashion-sewing/page.tsx`, `app/technical-sewing/page.tsx`, `app/end-to-end-seaming/page.tsx` | COMPLETE (functional) | Data-driven machine/application wiring is present; ongoing parity tuning is visual. |
| Machine detail | `mg_1.php` | `app/_components/MachinePage.tsx`, `app/machines/[code]/page.tsx` and legacy wrappers | COMPLETE (functional) | Thumbnails, videos, stitches, applications and marketing blocks are wired. |
| Applications index/detail | `applications.php`, `a.php` | `app/sewing/applications/page.tsx`, `app/sewing/applications/[app]/page.tsx` | COMPLETE (functional) | Compare and detail navigation logic in place; design parity can iterate. |
| Customer stories | `ncs1.php` | `app/customer-stories/page.tsx`, `app/customer-stories/featured/[s]/page.tsx` | COMPLETE (functional) | Story route/data paths are wired; remaining work is visual refinement. |
| Support hub/detail | `support.php` | `app/support/page.tsx`, `app/support/class/[c]/key/[k]/page.tsx`, `app/support/class/key/mediakeyword/[mk]/page.tsx` | COMPLETE (functional) | Dynamic support content + docs/menus are wired; support redesign intentionally pending. |
| Parts hub/detail | `parts.php` | `app/parts/page.tsx`, `app/parts/[cp]/[mmc_code]/page.tsx` | COMPLETE (functional) | Dynamic part detail and machine fallback behavior are wired. |
| Contact | `contact_general.php`, `.htaccess` contact rewrites | `app/contact_general.html/page.tsx`, `app/contact_general/key/[k]/page.tsx`, `app/contact_general/label/[label]/key/[k]/page.tsx`, `next.config.ts` redirects | COMPLETE (functional) | Legacy `key`/`label` flows now resolve via both query and path patterns. |
| Widget: marketing materials | `widget_marketing_material.php` | `app/widget_marketing_material.php/page.tsx` | COMPLETE (functional) | Embed URL normalized to HTTPS to avoid mixed-content failures. |
| Agent map | `agentmap.php` | `app/agentmap.html/page.tsx` | COMPLETE (functional) | Map route and support links are present. |
| About/History | `about.php`, `nhp1.php` | `app/about.html/page.tsx`, `app/overlock-history/page.tsx` | COMPLETE (functional) | Narrative content routes are ported. |
| Search | legacy search flows | `app/search1.php/page.tsx` | DEFERRED BY DECISION | Search redesign/replacement intentionally deferred for upcoming redesign phase. |

## 2026-02-07 Freeze Actions Completed

1. Added legacy contact route compatibility:
   - `/contact_general/key/[k]`
   - `/contact_general/label/[label]/key/[k]`
   - `/contact_general.html?key=...&label=...`
2. Added redirect support for legacy `contact_general.php` query forms in `next.config.ts`.
3. Added contextual contact behavior keyed by legacy parameters (`success`, `samples`, `agents`, `learnsupport`, `buy`, error states).
4. Upgraded marketing widget iframe source to HTTPS to prevent mixed-content blocking.

## Redesign Readiness Notes

1. Support and parts now have shared content/config layers under:
   - `app/support/_data/*`
   - `app/parts/_data/*`
2. Shared legacy support/parts primitives now exist in:
   - `app/support/_components/LegacySupportPrimitives.tsx`
3. Contact surface now has reusable context resolver:
   - `app/contact_general/_lib/context.ts`

These separations lower risk for a future design pass because UI composition can be swapped while keeping route/data behavior stable.

## Remaining Functional Risks To Track

1. Legacy long-tail asset URLs outside primary routes are not fully mirrored (many are intentionally out of scope or redirect candidates).
2. Some behavior parity in edge legacy widgets is approximated rather than fully rehosting every historical PHP fragment.
3. Search remains intentionally deferred and should not block redesign prep.
