# Gate 2 Parity Scope Summary

Date: 2026-02-04
Source: `AUDIT/parity_matrix.md`

## Totals
- Total legacy routes/assets scanned: 7,290
- Status: 7,264 MISSING, 17 REDIRECTED, 9 OK

## High-Level Distribution (by top-level prefix, MISSING only)
- `/STORAGE` (3,289)
- `/cephei` (920)
- `/nebula` (387)
- `/merrow-Parts-Manual` (261)
- `/ip_files` (258)
- `/marketing_site_assets` (213)
- `/cgi-docs` (156)
- `/images` (156)
- `/newproducts` (145)
- `/category` (87)
- `/support` (81)
- `/activeseam` (75)
- `/min` (49)
- `/english` (35)
- `/css_major` (34)

## File-Type Distribution (MISSING only)
- `php`: 2,057
- `htm`: 1,752
- `gif`: 1,238
- `jpg`: 1,078
- `(none)`: 362
- `html`: 308
- `css`: 154
- `js`: 149
- `png`: 103
- `pdf`: 13

## Functional Gap Buckets (MISSING only)
Counts are heuristic, based on path patterns.
- Support: 1,463
- Parts/Manuals: 870
- Machines: 661
- Contact: 110
- Applications/Stitch: 116
- Assets (images/css/js/pdf): 1,326
- Legacy tracking/scripts: 13
- Other PHP (uncategorized): 1,565

## Interpretation (for Scope Finalization)
1. **Functional parity likely required**
   - Support, Parts/Manuals, Machines, Contact, Applications/Stitch
   - These align with Gate 2 gaps in `AUDIT/refactor_review.md` and should be treated as true product feature parity or canonical redirects to maintained equivalents.

2. **Legacy asset bulk (likely redirect or archive)**
   - `/STORAGE`, `/cephei`, `/nebula`, `/ip_files`, `/cgi-docs`, `/images`, `/marketing_site_assets`
   - Majority are static assets (gif/jpg/htm) with no direct app-level parity; should be redirected to legacy host or an asset mirror, unless referenced by a current refactor page.

3. **Legacy tracking/scripts (safe to drop/redirect)**
   - RealTracker/ExternalRedirect patterns appear; should not be reimplemented.

## Decisions Needed to Finalize Gate 2 Scope
- **Asset policy:** mirror legacy assets in current app vs. redirect to legacy host.
- **Support/Parts depth:** which manuals/parts books are in-scope to rehost vs. redirect.
- **Stitch samples:** rehost gallery pages or 301 to legacy host.
- **Machine detail media:** whether to reattach legacy gallery/stitch/app assets directly or via redirects.

## Suggested Priority Order (Functional)
1. Support + Parts manuals parity
2. Contact legacy route mapping
3. Machine detail galleries/widgets
4. Applications + Stitch samples
5. Redirect expansion for residual legacy assets
