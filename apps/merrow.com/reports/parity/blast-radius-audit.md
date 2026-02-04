# Blast Radius Audit — Tailwind Container Width Change

> **Generated:** 2026-02-02
> **Task:** STEP 2, Task D
> **Status:** REMEDIATED

---

## Issue Identified

The STEP 1 work initially changed `max-w-merrow` from `980px` to `1020px` to match Figma specs for the homepage.

### Problem

`max-w-merrow` is used across **72+ locations** in the codebase, affecting nearly every page:

```
grep -r "max-w-merrow" --include="*.tsx" | wc -l
72
```

### Affected Files (Sample)

| File | Usages | Risk |
|------|--------|------|
| `app/page.tsx` | 3 | HIGH — homepage, intentional change |
| `app/_components/Header.tsx` | 1 | HIGH — homepage, intentional change |
| `app/_components/Footer.tsx` | 1 | HIGH — homepage, intentional change |
| `app/technical-sewing/page.tsx` | 2+ | UNINTENDED — product pages |
| `app/fashion-sewing/page.tsx` | 2+ | UNINTENDED — product pages |
| `app/parts/[...slug]/page.tsx` | 2+ | UNINTENDED — parts catalog |
| `app/machines/[slug]/page.tsx` | 2+ | UNINTENDED — machine detail |
| ~60+ other pages | varies | UNINTENDED |

---

## Resolution Applied

Created **isolated container class** for homepage-only use:

### tailwind.config.ts Changes

```typescript
maxWidth: {
  merrow: "980px",            // global content column (legacy default - DO NOT CHANGE)
  "merrow-1020": "1020px",    // homepage-specific container per Figma (HEADER/HERO/FOOTER)
},
```

### Files Updated to Use `max-w-merrow-1020`

| File | Change |
|------|--------|
| `app/_components/Header.tsx` | `max-w-merrow` → `max-w-merrow-1020` |
| `app/_components/Footer.tsx` | `max-w-merrow` → `max-w-merrow-1020` |
| `app/page.tsx` | All 3 occurrences updated |

### Files NOT Changed (Preserved at 980px)

All other pages remain at `max-w-merrow` (980px) — no blast radius.

---

## Verification

### Before Fix

Changing `max-w-merrow` globally would have:
- Widened all product pages by 40px
- Potentially broken layout on 72+ pages
- Caused unknown visual regressions

### After Fix

- Homepage uses `max-w-merrow-1020` (1020px) per Figma
- All other pages use `max-w-merrow` (980px) unchanged
- Zero blast radius to non-homepage pages

---

## Recommendation

**DO NOT modify `maxWidth.merrow` in tailwind.config.ts.**

If future pages need 1020px width:
1. Use `max-w-merrow-1020` explicitly
2. Or create page-specific container class
3. Never change the global default

---

*Audit complete. No further action required.*
