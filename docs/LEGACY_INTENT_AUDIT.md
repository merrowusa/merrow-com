# Legacy Intent Audit — Merrow.com

Date: 2026-02-03

## Inputs Reviewed
- Legacy routing: `public_html/.htaccess`
- Legacy templates: `public_html/index.php`, `public_html/ncp1.php`, `public_html/a.php`, `public_html/ncs1.php`, `public_html/mg_1.php`, `public_html/parts.php`, `public_html/support.php`, `public_html/contact_general.php`, `public_html/about.php`, `public_html/agentmap.php`
- Legacy navigation: `public_html/header_test.php` (mega menu and global nav)
- Refactor routes: `apps/merrow.com/app/**/page.tsx`

## Cross-Cutting Legacy Behaviors (Must Preserve or Improve)
- Global nav is data-driven: mega menu queries `machine_pages` by `class_key` and populates multiple columns. Search uses Google CSE. `header_test.php` drives the top banner, logo row, nav row, and stitch-lab ribbon.
- `publish = 'yes'` is the visibility gate for most dynamic content (machines, applications, customer stories).
- Legacy URLs depend on `.htaccess` rewrites, including `/fashion-sewing`, `/technical-sewing`, `/end-to-end-seaming`, `/sewing/applications/[app]`, `/customer-stories/featured/[s]`, `/Overlock_Sewing_Machines/Continuous_Processing/[cp]`, `/Sergers_and_Overlock_Sewing_Machines/[cp]`, `/crochet-sewing-machines/[cp]`, `/parts/[cp]/[mmc_code]`, `/support/class/[c]/key/[k]`, `/contact_general/key/[k]`, `/overlock-history`.
- Several pages rely on legacy S3 assets for imagery and icons.
- Machine detail pages include dense, data-driven sections (specs, thumbnails, video gallery, applications, stitches gallery, marketing downloads). Any redesign must retain these functions.

## Route Inventory and Intent

### Home + Core Landing Pages
| Refactor Route | Legacy Source | Legacy Intent | Data Dependencies | Refactor Status / Gaps |
| --- | --- | --- | --- | --- |
| `/` | `public_html/index.php` | Primary marketing hub: three category hero cards (technical/fashion/end-to-end), two grey promos (heritage + branded stitch), brand logo bar, and footer CTAs (agent locator, blog, community). | None for layout; links to category pages and story `/ncs1.php?s=csrw`. | Implemented but still in parity work. Must visually match legacy for header, hero, grey boxes, logo strip, and footer layout. |
| `/sewing` | Not explicit (implicit in nav/marketing) | Modern marketing portal for the three main category tracks (technical/fashion/end-to-end). | `machine_pages` for category links; no direct legacy equivalent. | Implemented as refactor-only page; keep functional intent (wayfinding). |
| `/machines` | Legacy mega menu + machine list fragments | Catalog view across machine classes (MG, 70 class, crochet, etc.). | `machine_pages` by `class_key`. | Implemented; ensure it reflects current data and routes to machine detail pages. |

### Category Pages (Fashion / Technical / End-to-End)
| Refactor Route | Legacy Source | Legacy Intent | Data Dependencies | Refactor Status / Gaps |
| --- | --- | --- | --- | --- |
| `/fashion-sewing` | `public_html/ncp1.php?a=f` | Hero with fashion copy + CTA; featured story image; machine list (3 columns) filtered by `fashion_key`; applications list with category headings + app icons; customer logos. | `machine_pages` (`fashion_key`), `application_categories`, `application_pages`. | Implemented with data queries. Needs parity tuning on layout/spacing/typography and application list visual styling to match legacy. |
| `/technical-sewing` | `public_html/ncp1.php?a=t` | Same structure as fashion, but copy and data filtered by `technical_key`. | `machine_pages` (`technical_key`), `application_categories`, `application_pages`. | Implemented; confirm applications list and machines list match legacy structure. |
| `/end-to-end-seaming` | `public_html/ncp1.php?a=e` | Same structure as fashion, but copy and data filtered by `e2e_key`. | `machine_pages` (`e2e_key`), `application_categories`, `application_pages`. | Implemented; confirm machines list and specialty sections (if any) match legacy. |

### Machine Detail Pages
| Refactor Route | Legacy Source | Legacy Intent | Data Dependencies | Refactor Status / Gaps |
| --- | --- | --- | --- | --- |
| `/Sergers_and_Overlock_Sewing_Machines/[cp]` | `public_html/mg_1.php?cp=...` | Primary machine detail template: hero image + title/header, multiple thumbs, spec table, video gallery, applications grid (image tiles), overview + why/how/where, stitches gallery, marketing downloads; additional conditional sections for specific machines. | `machine_pages`, `application_pages` (by `style_key`). | Partially implemented. Current refactor omits thumbnails, stitches gallery, applications image grid, marketing downloads, and class-specific blocks. |
| `/Overlock_Sewing_Machines/Continuous_Processing/[cp]` | `public_html/mg_1.php?cp=...` | Same as above + 70-class variations, CP-specific widgets (rail brands, inventory iframe). | `machine_pages`, CP widgets. | Partially implemented; missing CP-specific widgets and variations. |
| `/Sergers_and_Overlock_Sewing_Machines/Emblem_Edging/[cp]` | `public_html/mg_1.php?cp=...` | Same as above (decorative/edging class). | `machine_pages`. | Partially implemented; same gaps as above. |
| `/crochet-sewing-machines/[cp]` | `public_html/mg_1.php?cp=...` | Same as above (crochet class). | `machine_pages`. | Partially implemented; same gaps as above. |
| `/70class/cp/[cp]` | `public_html/mg_1.php?cp=...` | 70-class machine detail with special “variations” content. | `machine_pages` + 70-class widgets. | Partially implemented; missing class-specific sections. |

### Applications
| Refactor Route | Legacy Source | Legacy Intent | Data Dependencies | Refactor Status / Gaps |
| --- | --- | --- | --- | --- |
| `/sewing/applications` | `public_html/applications.php` (legacy list) | Index of all application categories and pages. | `application_categories`, `application_pages`. | Implemented as a new index; functional but not legacy parity. Ensure all published applications render. |
| `/sewing/applications/[app]` | `public_html/a.php?app=...` | Deep application detail page: category header, nav list of sections, multiple application tiles with images, and “Compare all” modal. | `application_categories`, `application_pages`. | Partially implemented. Missing legacy navigation anchors, image tiles, and compare modal behavior. |

### Customer Stories
| Refactor Route | Legacy Source | Legacy Intent | Data Dependencies | Refactor Status / Gaps |
| --- | --- | --- | --- | --- |
| `/customer-stories` | Derived from `public_html/ncs1.php` | Index of customer stories. | `customer_stories`. | Implemented as refactor-only index. Should align to story data completeness. |
| `/customer-stories/featured/[s]` | `public_html/ncs1.php?s=...` | Story layout with hero image, quote, multiple text columns, and three promo tiles (application/machine/stitch). | `customer_stories`. | Partially implemented; currently missing legacy images and promo tiles layout. |

### Support / Contact / Agent / About
| Refactor Route | Legacy Source | Legacy Intent | Data Dependencies | Refactor Status / Gaps |
| --- | --- | --- | --- | --- |
| `/support` | `public_html/support.php` | Technical support hub with menu, manuals, parts book list. | `technical`, `asin` tables. | Implemented as simplified hub; lacks dynamic manuals/parts book list. |
| `/support/class/[c]/key/[k]` | `public_html/support.php?class=...&key=...` | Deep technical support pages for specific class/key. | `technical`, `asin`. | Implemented as refactor page; verify it still accepts legacy parameters and renders meaningful content. |
| `/support/request-quote` | Legacy form widgets | Contact flow for quotes / parts / manuals. | Form submission endpoint. | Implemented; ensure routing and CTA usage across pages. |
| `/contact_general.html` | `public_html/contact_general.php` | General contact form with marketing capture. | Form submission + marketing capture. | Implemented; verify data capture parity or documented changes. |
| `/agentmap.html` | `public_html/agentmap.php` | Global agent locator with embedded map. | External Google map. | Implemented; validate embedded map and CTA copy. |
| `/about.html` | `public_html/about.php` | About/history page with long-form narrative. | `widget_history.php`. | Implemented as refactor page; verify coverage vs legacy timeline. |
| `/overlock-history` | `public_html/nhp1.php` | History/heritage narrative (tied to homepage “Merrow Heritage”). | Static content. | Implemented as refactor page; verify copy parity. |

### Parts
| Refactor Route | Legacy Source | Legacy Intent | Data Dependencies | Refactor Status / Gaps |
| --- | --- | --- | --- | --- |
| `/parts` | `public_html/parts.php` (and related parts pricing) | Parts hub and lookup entry point. | `asin` for parts metadata. | Implemented as lightweight static hub; no dynamic lookup yet. |
| `/parts/[cp]/[mmc_code]` | `public_html/parts.php?cp=...&mmc_code=...` | Detailed parts page with product dims, thumbnails, and purchase context. | `asin`. | Placeholder only. Needs real data binding + asset handling. |

### Experimental / Non-Legacy
| Refactor Route | Legacy Source | Legacy Intent | Data Dependencies | Refactor Status / Gaps |
| --- | --- | --- | --- | --- |
| `/v3` and `/v3/technical-sewing` | None | Experimental redesign sandbox. | `machine_pages`. | Keep isolated from parity gates. |

## Immediate Gap Summary (Functional, Not Visual)
- Machine detail pages lack legacy-only sections: thumbnails gallery, applications image grid, stitches gallery, marketing downloads, and several class-specific blocks (70-class variations, rail content).
- Application detail pages are missing legacy anchor navigation, image tiles per application, and the “Compare all” modal behavior.
- Support + parts deep pages are missing dynamic data binding (manuals, parts book lists, part details).
- Customer story pages are missing legacy hero images and the three promo tiles (application/machine/stitch).

## Recommended Next Actions
- Decide which legacy features are mandatory vs deprecated for machine detail pages; implement the mandatory set before visual redesign.
- Rebuild the application detail page to support anchored sections + media tiles using `application_pages` fields.
- Implement `/parts/[cp]/[mmc_code]` data binding from `asin` and remove placeholders.
- Confirm support manual data sources and map them into the refactor support pages.

