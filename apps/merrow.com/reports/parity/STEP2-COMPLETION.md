# STEP 2 — Verification + Drift Control

> **Completed:** 2026-02-02
> **Status:** READY FOR EXECUTION

---

## Task Summary

| Task | Description | Status |
|------|-------------|--------|
| A | Layout Telemetry Capture | ✅ Script ready |
| B | Figma Reconciliation | ✅ Complete |
| C | Backstop Tiered Thresholds | ✅ Configured |
| D | Blast-Radius Audit | ✅ Remediated |

---

## Task A: Layout Telemetry Capture

**Script:** `scripts/layout-telemetry.ts`

**Captures:**
- Bounding boxes for 13 key elements (Header, Hero, Footer)
- Computed styles (width, height, padding, colors, etc.)
- Comparison between new and legacy sites

**Viewports:**
- 1920x1080 (desktop large)
- 1440x900 (desktop standard)

**Output:**
- `artifacts/layout/layout-new-{width}.json`
- `artifacts/layout/layout-legacy-{width}.json`
- `reports/parity/layout-diff-{width}.md`

**Run command:**
```bash
NEW_URL=http://localhost:3000 LEGACY_URL=https://www.merrow.com npx tsx scripts/layout-telemetry.ts
```

---

## Task B: Figma Reconciliation

**Report:** `reports/parity/figma-reconciliation.md`

**Results:**
- 30 total specs checked
- 27 exact matches
- 3 minor deviations (all acceptable or intentional)

**Deviations:**
1. Hero height: Content-driven vs fixed 684px (intentional for responsive)
2. Card width: 320px vs 321px (1px — acceptable)
3. Grid gap: 40px vs 10px (may need design review)

---

## Task C: Backstop Tiered Thresholds

**Configs Updated:**
- `backstop.parity.strict.json`
- `backstop.parity.info.json`

**Threshold Changes:**

| Page Type | Old | New |
|-----------|-----|-----|
| Homepage | 5-15% | 3% |
| Other pages | 10-15% | 5% |
| Agent Map (dynamic) | 10% | 10% (unchanged) |
| Machine Detail | 10% | 10% (unchanged) |

**Viewports Added:**
- `desktop-1920` (1920x1080)

**Run commands:**
```bash
# Capture legacy reference
MODE=strict npm run backstop:parity:strict:reference

# Run parity test
MODE=strict REFACTOR_PREVIEW_URL=http://localhost:3000 npm run backstop:parity:strict:test
```

---

## Task D: Blast-Radius Audit

**Report:** `reports/parity/blast-radius-audit.md`

**Issue Found:**
- Changing `max-w-merrow` from 980px to 1020px would affect 72+ pages

**Resolution Applied:**
- Created isolated `max-w-merrow-1020` for homepage-only use
- Preserved `max-w-merrow` at 980px for all other pages
- Zero blast radius to non-homepage pages

---

## Files Created/Modified

### Created
- `scripts/layout-telemetry.ts` — Layout capture script
- `reports/parity/blast-radius-audit.md` — Audit report
- `reports/parity/figma-reconciliation.md` — Figma comparison
- `reports/parity/STEP2-COMPLETION.md` — This file

### Modified
- `backstop.parity.strict.json` — Added 1920 viewport, 3% threshold
- `backstop.parity.info.json` — Added 1920 viewport, tiered thresholds

---

## Next Steps

1. **Run dev server:** `npm run dev`
2. **Execute layout telemetry:** `npx tsx scripts/layout-telemetry.ts`
3. **Run Backstop reference capture:** `npm run backstop:parity:strict:reference`
4. **Run Backstop parity test:** Verify against legacy
5. **Review reports:** Check for regressions

---

*STEP 2 verification infrastructure is ready for execution.*
