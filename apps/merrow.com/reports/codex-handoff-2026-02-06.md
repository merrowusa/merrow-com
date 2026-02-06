# Codex Handoff — 2026-02-06

## Workspace
- Worktree: `/Users/charliemerrow/LOCAL_AI_DATA_LAKE/_STATION_LABS/dev/_worktrees/CODEX_REFACTOR_0_1_0001`
- Branch: `codex/refactor/0.1/0001`
- HEAD: `dfb553f8ed541556b0334e870f058dfc766abb74`
- Last commit: `dfb553f fix(homepage): tighten desktop legacy parity surfaces`

## What Was Completed
- Homepage desktop parity was tightened and committed.
- Commit includes homepage/header/footer/top promo/global CSS parity work.
- User instruction captured for comparisons:
  - Ignore left social tags.
  - Ignore top ActiveSeam/intro bar.
  - Ignore chat popup.

## Current Dirty State (Not Committed Intentionally)
- Flickr migration files under `_AUDIT/flickr_migration/*`
- Untracked image migrations under `apps/merrow.com/public/images/*`
- Untracked `apps/merrow.com/backstop_data/`
- Untracked `apps/merrow.com/public/legacy/`
- Untracked `apps/merrow.com/app/_components/LegacyCufon.tsx`

## Next Valuable Surface
- Move to machine/application parity surfaces in order, starting with machine detail parity (P1 #6 from backlog):
  - Machine detail thumbnails
  - Stitches gallery area
  - Applications grid
  - Downloads block

## Restart Commands
1. `cd /Users/charliemerrow/LOCAL_AI_DATA_LAKE/_STATION_LABS/dev/_worktrees/CODEX_REFACTOR_0_1_0001/apps/merrow.com`
2. `npm run dev`
3. In another shell:
4. `REFACTOR_PREVIEW_URL=http://localhost:3000 npm run backstop:parity:info:test`

## Resume Note
- Do **not** commit `backstop_data/` or image migration directories.
- Continue from commit `dfb553f` and leave Flickr migration work untouched.
