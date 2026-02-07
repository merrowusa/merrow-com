# Redesign Handoff Contract

Date: 2026-02-07  
Purpose: Freeze functional behavior before visual redesign work.

## Non-Negotiable Global Rules

1. Preserve legacy URL structure and existing route availability.
2. Preserve header/footer structure and behavior; visual polish is allowed, structural removals are not.
3. Keep all data access through `packages/data-layer/` query functions.
4. Keep support/contact/parts route parameters backward-compatible.
5. Do not start search reimplementation in this phase (explicitly deferred).

## Route Behavior Contract

| Surface | Required route behavior | Required params/query | Data dependencies |
| --- | --- | --- | --- |
| Home | `/` renders legacy marketing shell and links to major surfaces | none | mixed static + route links |
| Machine detail | `/machines/[code]` and legacy category machine routes must render machine page features | `code`/`cp` | `queries/machines.ts`, `queries/applications.ts` |
| Applications index | `/sewing/applications` lists applications and compare entry points | none | `queries/applications.ts` |
| Application detail | `/sewing/applications/[app]` supports anchored sections and compare behavior | `app` | `queries/applications.ts`, related machine data |
| Customer stories | `/customer-stories` and `/customer-stories/featured/[s]` continue to resolve and render story content | `s` | customer story data queries |
| Support hub/detail | `/support`, `/support/class/[c]/key/[k]`, `/support/class/key/mediakeyword/[mk]`, `/support/diagram/[diagram]/showthemapicture/[show]` | `c`, `k`, `mk`, `diagram`, `show` | `queries/support.ts` |
| Parts hub/detail | `/parts`, `/parts/[cp]/[mmc_code]` stay functional | `cp`, `mmc_code` | `queries/parts.ts`, `queries/machines.ts` |
| Contact base | `/contact_general.html` supports legacy query forms | `key`, `label`, `product` (query) | `app/contact_general/_lib/context.ts` + `/api/submissions` |
| Contact legacy paths | `/contact_general/key/[k]`, `/contact_general/label/[label]/key/[k]` | `k`, `label`, optional `product` query | same as above |
| Legacy PHP contact entry | `/contact_general.php?...` redirects to supported contact routes | query-mapped redirects in `next.config.ts` | redirect rules only |
| Marketing widget | `/widget_marketing_material.php` remains available with HTTPS embed | none | static links + remote assets |

## Functional Invariants By Surface

### Header/Footer
- Keep navigation link targets stable.
- Keep top promo and header container present on all major pages.

### Support/Parts
- Keep shared content/data modules as source of truth:
  - `app/support/_data/*`
  - `app/parts/_data/*`
- Keep shared legacy layout primitives:
  - `app/support/_components/LegacySupportPrimitives.tsx`

### Contact
- Keep context resolver behavior for legacy keys:
  - `success`, `badcaptcha`, `missedafield`, `samples`, `learnsupport`, `agents`, `buy`
- Keep submission endpoint contract:
  - `POST /api/submissions` with supported `type` values and honeypot behavior.

### Visual Regression Baseline
- Use parity smoke artifacts from `reports/parity-smoke-2026-02-07.md` as current baseline.
- Known failing smoke surface before redesign: parts hub parity.

## Out-of-Scope During Redesign Prep

1. New search architecture or indexing changes.
2. Rehosting every long-tail legacy asset path not required by active routes.
3. Legacy tracking script recreation.
