# Codex Handoff — 2026-02-08

## Workspace
- TASK_TYPE: BUILD
- Worktree: `/Users/charliemerrow/LOCAL_AI_DATA_LAKE/_STATION_LABS/dev/_worktrees/CODEX_REFACTOR_0_1_0001`
- Branch: `codex/refactor/0.1/0001`
- HEAD: `6d282bd`

## Session Goal (What We Optimized For)
- Keep the refactor mission on-track:
  - Port/lock functional behavior to the Next.js app.
  - Move legacy media off Flickr and towards R2-backed URLs.
  - Keep the codebase “redesign ready” by isolating behavior/data from presentation.
- Explicitly *not* implementing a new search architecture yet (deferred decision).

## Commits Made / Landed Since The Last Handoff Doc (2026-02-07)
- `a7a5117` `feat(stitch): rebuild stitch browser on R2 + add smoke gate`
- `f192177` `feat(agent-book): add internal viewer + migrate links + smoke gate`
- `8b8d7d6` `fix(assets): redirect legacy asset paths to R2`
- `b713ad2` `fix(seo): add metadata for agent-book routes + tune stitch description`
- `03446ec` `chore(marketing): remove flickr link from materials page`
- `8ebaa12` `fix(header): route search to google site query`
- `b0d36f1` `refactor(parts): canonicalize detail urls + add ecom data hooks`
- `4911c70` `refactor(parts): add hub lookup + safer media thumbs`
- `3a1df11` `fix(assets): add fallback img candidates for machine media`
- `6d282bd` `chore(assets): add unicorn placeholder for missing machine images`

## What Was Completed (Concrete Deliverables)

### 1) Stitch Browser Rebuilt (No Flickr Dependency)
- Source of truth metadata:
  - `_AUDIT/flickr_migration/flickr_manifest_final.json`
- R2 base:
  - `https://pub-8a8d2bb929a64db2b053e893f4dcb4d0.r2.dev/stitch-samples/{filename}`
- New API + UI surfaces:
  - `apps/merrow.com/app/stitch.html/_components/StitchBrowserClient.tsx`
  - `apps/merrow.com/app/api/stitch-samples/route.ts`
  - `apps/merrow.com/app/api/stitch-samples/[setId]/route.ts`
  - `apps/merrow.com/lib/stitch-samples.ts`
- Smoke gate:
  - `apps/merrow.com/scripts/gate-stitch-smoke.ts`
  - `apps/merrow.com/package.json` (`gate:stitch`)

### 2) Agent Book Viewer Rebuilt (No Flickr Dependency)
- Internal viewer routes:
  - `apps/merrow.com/app/agent_book.php/page.tsx`
  - `apps/merrow.com/app/cephei/sable/fp_agent_book.php/page.tsx`
  - `apps/merrow.com/app/widget_agent_book.php/page.tsx`
- Album/manifest logic:
  - `apps/merrow.com/lib/flickr-albums.ts`
- Smoke gate:
  - `apps/merrow.com/scripts/gate-agent-book-smoke.ts`
  - `apps/merrow.com/package.json` (`gate:agent-book`)
- SEO metadata fixed for these routes in `b713ad2`.

### 3) R2 Asset Redirects For Legacy Paths
- Added Next redirects so old-ish paths resolve to R2:
  - `/images/*`
  - `/stitch-samples/*`
  - `/applications/*`
- File:
  - `apps/merrow.com/next.config.ts` (commit `8b8d7d6`)

### 4) Header Search: “Do Not Block” Behavior (Search Deferred)
- Header search submits to Google using `site:merrow.com {query}` instead of a non-existent internal search route.
- File:
  - `apps/merrow.com/app/_components/Header.tsx` (commit `8ebaa12`)

### 5) Parts Surface Cleanup (Lightweight, Ecom-Friendly)
Legacy behavior reminder:
- Legacy `.htaccess` rewrite: `parts/(.*)/(.*)` -> `parts.php?cp=$1&mmc_code=$2`
- Legacy DB shape: `asin.ot_id` (cp), `asin.msmc_id`/`asin.mmc_id` (mmc_code)

Refactor improvements:
- Canonicalize detail URL code to `msmcId` (fallback `mmcId`) for backbone stability:
  - `apps/merrow.com/app/parts/[cp]/[mmc_code]/page.tsx` (`b0d36f1`)
- Added `data-*` hooks on detail layout for future ecommerce wiring:
  - `data-ot-id`, `data-asin-id`, `data-mmc-id`, `data-msmc-id`, `data-product-name`
- Added `/parts` lookup form and corrected hub machine links to stay within legacy-style parts URLs:
  - `apps/merrow.com/app/parts/_components/PartsLookupForm.tsx`
  - `apps/merrow.com/app/parts/page.tsx`
- Safer media thumbs:
  - Now respects `asin.number_of_thumbs` and tries multiple candidate paths
  - Added `numberOfThumbs` to `AsinRecord` mapping:
    - `packages/data-layer/queries/support.ts`
    - `packages/data-layer/queries/parts.ts`

### 6) “Missing Machine Image” Policy: Unicorn Placeholder + Candidate Fallback
- Added a generic `FallbackImg` helper to try multiple candidate URLs before giving up:
  - `apps/merrow.com/app/_components/FallbackImg.tsx`
- Machine detail now tries multiple base paths + casing + file extensions, then falls back to a placeholder:
  - `apps/merrow.com/app/_components/MachinePage.tsx`
- Placeholder asset:
  - `apps/merrow.com/public/images/placeholders/unicorn.svg`
  - Note: `apps/merrow.com/public/images/*` is gitignored in this repo; this file was added using `git add -f`.
- Thumbnail gallery now uses the same placeholder policy:
  - `apps/merrow.com/app/machines/_components/ThumbnailGallery.tsx`
- `MachineImage.tsx` no longer “hides” broken images; it falls back to the unicorn:
  - `apps/merrow.com/app/_components/MachineImage.tsx`

## Key Decisions / Constraints (Explicit)
- Search: intentionally deferred. Do not start a new internal search architecture in this phase.
- Support: expected to be redesigned later; current goal is functional portability and route stability, not perfect parity.
- Parts: likely to be replaced/connected to an ecommerce backbone later; keep today’s work limited to:
  - stable canonicalization
  - stable route behavior
  - stable DOM hooks
  - non-broken media rendering

## QA / Verification Notes
- `npm run build` PASS (requires running outside the Codex sandbox in this environment due to Turbopack “Operation not permitted” when it tries to spawn/bind ports).
- Existing parity/smoke docs to reference:
  - `apps/merrow.com/reports/functionality-freeze-matrix-2026-02-07.md`
  - `apps/merrow.com/reports/parity-smoke-2026-02-07.md` (Parts smoke was failing on 2026-02-07)
  - `apps/merrow.com/reports/redesign-handoff-contract-2026-02-07.md`

## Where We Left Off (Current State)
- Functional “freeze” posture is in place (search deferred); stitch + agent book are migrated off Flickr.
- Parts surface is cleaned up and more future-proof for an ecommerce backend.
- Machine images no longer hard-fail due to missing R2 product-page assets: they fall back to unicorn placeholder.

## Known Issues / Risks
- Local dev server from this Codex runtime was unstable (processes exited, and localhost connectivity checks failed intermittently). Recommended: run the dev server from your own terminal session.
- Asset completeness on R2 is still a potential “paper cut”: many paths exist historically (`product-pages/`, `productpages/`, etc.). We added fallback candidates + placeholders rather than forcing an upload in this phase.

## Resume Commands (Recommended)
1. Start dev server in your own terminal:
   - `cd apps/merrow.com && npm run dev -- --port 3000 --hostname 127.0.0.1`
2. If port conflicts with other tooling (Backstop/Lighthouse), pick another port:
   - `npm run dev -- --port 3001 --hostname 127.0.0.1`
3. Confirm stitch browser:
   - `http://localhost:3000/stitch.html`
4. Confirm agent book:
   - `http://localhost:3000/agent_book.php`

## Next Steps (Pragmatic)
1. Decide whether to upload/repair `product-pages/*` media in R2 (to remove placeholder usage) or keep placeholders until redesign.
2. If parity work is still desired before redesign:
   - Header/footer pixel parity gates (if still tracked as blockers).
   - Parts hub Backstop parity smoke (historically failing).
3. If ecommerce work is imminent:
   - Confirm canonical ID strategy (`ot_id` + `msmc_id`/`mmc_id`) and lock it as a contract for the new backend.

