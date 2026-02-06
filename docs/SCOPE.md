# Merrow Refactor Program Scope

Status: Active
Owner: Refactor Team
Primary repository: `CODEX_REFACTOR_0_1_0001`

## Purpose
This document defines what work is in scope now, what is explicitly deferred, and the criteria to move between phases.

Program objective:
1. Recreate the legacy Merrow site and functionality in Next.js + Tailwind with parity-first discipline.
2. Run a major design and UX improvement pass after parity is complete.
3. Extend the site with net-new capabilities after design/UX phase decisions are complete.

## Scope Model

### Phase 1: Parity Refactor (Current)
Goal: Reproduce legacy behavior, route coverage, and visual output with modern stack implementation.

Parity-critical visual surface set (P1 blocking):
- Header
- Footer
- Home page
- Machine pages
- Application pages

All other Phase 1 surfaces default to functional/content/SEO/route parity.
Visual redesign-quality matching for non-critical surfaces is deferred to Phase 2 unless explicitly approved as a scope exception.

In scope:
- Legacy route and redirect preservation.
- Legacy functionality parity for machines, applications, support, parts, forms, and content surfaces defined in audit docs.
- Data parity through `packages/data-layer` and Supabase REST (`supabase-js`).
- Visual parity for the parity-critical surface set listed above.
- Production-safe hardening needed to pass build and quality gates.

Out of scope:
- New visual language or redesign decisions.
- New feature concepts not required for parity.
- Information architecture changes beyond parity needs.

Phase 1 exit criteria:
- `npm run build` passes with no errors.
- Required gates pass (`routes`, `links`, `seo`, `redirects`, `dom`, `data`, nav-cache policy).
- Strict visual parity blockers resolved for parity-critical surfaces (header/footer/home/machines/applications) per agreed Backstop criteria.
- No regression in existing working routes.

### Phase 2: Design + Functional Interpretation
Goal: Improve usability, impact, and visual quality while preserving business-critical route/SEO continuity.

In scope:
- Full design system pass and updated visual direction.
- Workflow and interaction redesign where legacy behavior is weak.
- Function reinterpretation where it improves clarity and user outcomes.
- Accessibility and UX improvements across key journeys.

Out of scope:
- Unbounded feature expansion unrelated to UX/design goals.
- Architectural rewrites not justified by Phase 2 requirements.

Phase 2 exit criteria:
- Approved design direction and design system documented.
- Updated UX flows shipped for priority journeys.
- SEO/route continuity maintained where required.
- Regression suite and acceptance criteria for redesigned surfaces pass.

### Phase 3: Expansion
Goal: Add net-new capabilities beyond legacy parity and design modernization.

In scope:
- New product features and tools not present in legacy site.
- New content modules, integrations, and advanced workflows.
- Strategic IA expansion and platform capabilities.

Out of scope:
- Work that belongs to unresolved Phase 1 or Phase 2 defects.

Phase 3 exit criteria:
- Feature-level requirements and success metrics met.
- Operational and support readiness completed.
- Incremental releases validated against agreed KPIs.

## Decision Rules (To Avoid Scope Drift)
For every task, assign exactly one phase tag: `P1_PARITY`, `P2_DESIGN`, or `P3_EXPANSION`.

Use this rule:
- If required to match legacy behavior/visuals/routes, it is Phase 1.
- If it changes visual language or interaction model to improve UX, it is Phase 2.
- If it introduces capability not required by legacy parity, it is Phase 3.

Phase 1 visual rule:
- Visual parity is mandatory only for the parity-critical surface set.
- Non-critical surfaces in Phase 1 must pass functional/content/SEO parity and may remain visually interim.

When a task spans phases:
- Split it into separate tickets by phase.
- Ship the minimal Phase 1 slice first.
- Defer the improvement/expansion slice to the later phase backlog.

## Program Guardrails
- No redesign decisions are allowed in Phase 1 except parity corrections.
- No Phase 3 feature work starts before Phase 2 kickoff approval.
- Experimental work (for example `/v3`) must remain isolated from parity acceptance gates.
- Audit docs remain the source of truth for parity intent and surface coverage.

## Change Control
A scope exception requires a written note with:
- Requested phase override.
- Reason and business impact.
- Risk to current phase milestones.
- Explicit approval before implementation.

## Backlog Hygiene Requirements
Each backlog item must include:
- Phase tag.
- In-scope statement.
- Out-of-scope statement.
- Acceptance tests.
- Dependencies and blockers.

If phase is unclear, stop and classify before implementation.
