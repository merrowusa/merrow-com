# CODEX_LOG

This log is appended by Codex for each session/task in this worktree.

---

## 2026-02-06

### Summary
- Began homepage parity work to match legacy `index.php` structure.
- Rewrote `apps/merrow.com/app/page.tsx` to mirror legacy DOM blocks (`background_gradient`, `main_content`, `main_image`, `main_middle_container`, etc.).
- Added legacy-style CSS rules scoped to `.home-page` in `apps/merrow.com/app/globals.css` (hero layout, three machine tiles, learn buttons, grey callout band, branded content form layout).

### Files Touched
- `apps/merrow.com/app/page.tsx`
- `apps/merrow.com/app/globals.css`

### Commands Run (high-level)
- `rg` searches in `_LEGACY_REFERENCE/public_html` to locate legacy markup.
- Inspected legacy `index.php` and current `app/page.tsx`.
- Verified local hero/box image sizes with `python3` + PIL.

### Notes
- Legacy home CSS definitions were not found in local `.css` files; custom parity CSS added in `globals.css` based on legacy markup and existing assets.
- No assets were added to git (per instructions).

