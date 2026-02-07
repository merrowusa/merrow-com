# Codex Handoff — 2026-02-07

## Workspace
- Worktree: `/Users/charliemerrow/LOCAL_AI_DATA_LAKE/_STATION_LABS/dev/_worktrees/CODEX_REFACTOR_0_1_0001`
- Branch: `codex/refactor/0.1/0001`
- HEAD: `d922b89`

## Commits Made This Session
- `437a4a5` `fix(build): align njp searchParams typing with Next 16`
- `d922b89` `refactor(customer-stories): align index surface to legacy desktop layout`

## What Was Completed
- Surface 1 (customer stories index) was refactored from modern card UI to legacy desktop layout shell:
  - File: `apps/merrow.com/app/customer-stories/page.tsx`
  - Uses legacy story cards (`csrw`, `csb`, `csam`) with S3 hero assets and quote copy fallback.
- Build blocker unrelated to surface work was fixed:
  - File: `apps/merrow.com/app/njp.php/page.tsx`
  - Updated `searchParams` typing to Next 16 Promise-based page props.

## QA Run Results
- `npm run build -- --webpack` from `apps/merrow.com`: PASS
  - Static generation completed; routes emitted normally.
- Customer story parity gate:
  - `npx backstop reference --config=backstop.customer-story.parity.json`: PASS
  - `npx backstop test --config=backstop.customer-story.parity.json`: PASS (2/2 desktop viewports)
- Machine parity check (mg3u) using local temp config:
  - `npx backstop reference --config=backstop.machine.parity.json`: PASS
  - `npx backstop test --config=backstop.machine.parity.json`: PASS (2/2 desktop viewports)

## Surface Queue Status
- Surface 1: `customer-stories` index: DONE and committed.
- Surface 2: machine detail parity hardening: QA gate checked and PASS for mg3u baseline; no additional code change was required in this step.
- Surface 3: homepage parity: STARTED but interrupted before `backstop test` execution for `backstop.homepage-parity.json`.

## Important Local-Only Files (Do Not Commit)
- `apps/merrow.com/backstop.machine.parity.json` (temp local QA config)
- `apps/merrow.com/backstop.application-index.parity.json`
- `apps/merrow.com/backstop.application.parity.json`
- `apps/merrow.com/backstop.customer-story.parity.json`
- `apps/merrow.com/backstop.support.parity.json`
- Any `apps/merrow.com/backstop_data/*` artifacts (images/reports)

## Resume Commands
1. `cd /Users/charliemerrow/LOCAL_AI_DATA_LAKE/_STATION_LABS/dev/_worktrees/CODEX_REFACTOR_0_1_0001/apps/merrow.com`
2. `npm run dev`
3. `npx backstop reference --config=backstop.homepage-parity.json`
4. `npx backstop test --config=backstop.homepage-parity.json`
5. If homepage gate passes and no code edits are made, proceed to next backlog surface.

## Dirty State To Leave Untouched
- `_AUDIT/flickr_migration/*` modified/untracked files.
- `apps/merrow.com/.gitignore` modified.
- `apps/merrow.com/app/_components/LegacyCufon.tsx` untracked.
- `apps/merrow.com/public/legacy/` untracked.
