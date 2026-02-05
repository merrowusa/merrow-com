# Merrow.com Design Deltas

> **Created:** 2026-01-20
> **Purpose:** Capture parity deltas and approved improvements during refactor
> **Status:** Active — parity-first (home + category template)

---

## How to Use This Document

During parity passes, log deltas here. Apply changes only if they improve parity or deliver a **substantive advantage** with documented rationale.

### Parity Charter (2026-02-03)

| Item | Decision |
|------|----------|
| **Parity targets** | Homepage + Category Template (Fashion Sewing baseline) |
| **Allowed deltas** | Accessibility fixes, bug fixes, responsive refinements |
| **Substantive improvements** | Allowed when clearly justified and logged here |
| **Redesign** | Deferred unless a substantive advantage is documented |

### Delta Format

```markdown
### [Component/Page Name]

**Current:** [What exists now]
**Issue:** [What feels dated or could improve]
**Proposed:** [Specific improvement]
**Impact:** Low / Medium / High
**Effort:** Low / Medium / High
**Substantive Advantage:** Yes/No + rationale (if Yes)
**Reference:** [Optional: URL to inspiration]
```

---

## Global: Color Palette

### Background Grays
**Current:** Multiple similar grays (`#f4f4f4`, `#d7d7d7`, `#e4e4e4`, `#f1f1f1`)
**Issue:** Muddy, low-contrast, feels dated (2010s flat design)
**Proposed:** Reduce to 3 grays with more intentional contrast steps
**Impact:** High
**Effort:** Low (token change)
**Reference:** —

### Footer Dark
**Current:** `#1f1f1f` / `#2a2a2a`
**Issue:** Pure dark gray feels heavy
**Proposed:** Consider warm dark (`#1a1a1a` with slight warmth) or brand-tinted dark
**Impact:** Medium
**Effort:** Low
**Reference:** —

### Link Color
**Current:** `#1a4f8a` (dark blue)
**Issue:** Functional but unremarkable
**Proposed:** Keep for accessibility, but ensure hover state is contemporary (underline animation vs color shift)
**Impact:** Low
**Effort:** Low
**Reference:** —

---

## Global: Typography

### Font Stack
**Current:** System UI (browser default sans)
**Issue:** Generic, no brand personality
**Proposed:** Consider Inter, Source Sans Pro, or Roboto for slightly more refined feel while staying clean
**Impact:** Medium
**Effort:** Medium (font loading, testing)
**Reference:** —

### Type Scale
**Current:** Arbitrary sizes (10px, 11px, 12px, 13px, 14px, 18px, 20px, 30px)
**Issue:** No consistent scale, hard to maintain
**Proposed:** Map to Tailwind's scale or establish 4-step modular scale
**Impact:** Medium
**Effort:** Medium
**Reference:** —

### Line Heights
**Current:** Tight (`1.2`, `1.4`)
**Issue:** Feels cramped, especially on longer copy
**Proposed:** Increase to `1.5` for body, `1.3` for headings
**Impact:** Medium
**Effort:** Low
**Reference:** —

---

## Global: Spacing

### Section Padding
**Current:** Variable, often tight
**Issue:** Sections feel cramped, not enough breathing room
**Proposed:** Establish consistent section padding (e.g., `py-16` / `py-24`)
**Impact:** High
**Effort:** Low
**Reference:** —

### Content Width
**Current:** Hard `960px`
**Issue:** Narrow on modern screens, feels dated
**Proposed:** 
- Option A: `max-w-5xl` (1024px) — minimal change
- Option B: `max-w-6xl` (1152px) — more contemporary
- Option C: Responsive max-width (wider on large screens)
**Impact:** High
**Effort:** Medium (layout adjustments)
**Reference:** —

---

## Global: Borders & Shadows

### Borders
**Current:** 1px solid `#cfcfcf` everywhere
**Issue:** Visible borders feel dated (2015-era)
**Proposed:** 
- Reduce border usage
- Use subtle shadows for separation instead
- Where borders needed, make them lighter or use opacity
**Impact:** High
**Effort:** Medium
**Reference:** —

### Shadows
**Current:** None
**Issue:** Flat design without depth cues
**Proposed:** Add subtle shadows for cards/boxes:
- `shadow-sm` for subtle elevation
- `shadow` for interactive elements
**Impact:** Medium
**Effort:** Low
**Reference:** —

---

## Global: Interactions

### Hover States
**Current:** [NEEDS AUDIT]
**Issue:** —
**Proposed:** Ensure all interactive elements have:
- Smooth transition (`transition-colors duration-200`)
- Clear hover indication
- Focus states for accessibility
**Impact:** Medium
**Effort:** Medium
**Reference:** —

### Buttons
**Current:** [NEEDS AUDIT]
**Issue:** —
**Proposed:** Consistent button styles:
- Primary: Brand blue, white text
- Secondary: Outlined
- Subtle hover animations
**Impact:** Medium
**Effort:** Medium
**Reference:** —

---

## Page-Specific Deltas

### Header

| Observation | Current | Proposed | Priority |
|-------------|---------|----------|----------|
| — | — | — | — |

### Footer

| Observation | Current | Proposed | Priority |
|-------------|---------|----------|----------|
| — | — | — | — |

### Homepage

| Observation | Current | Proposed | Priority |
|-------------|---------|----------|----------|
| Container width | Home hero uses `max-w-merrow-1020` | Align to legacy 980px container or document why 1020px is required | High |
| Hero animation parity | Fashion hero uses fade-out/fade-in overlay animation | Verify legacy behavior; remove if not present | Medium |
| Hero headline copy | "Modern Overlock. The Iconic Merrow Sewing Machine" | Confirm exact legacy copy; adjust if mismatch | High |

### Category Pages

| Observation | Current | Proposed | Priority |
|-------------|---------|----------|----------|
| Redesign toggle | Floating "Try Bold Design →" button fixed bottom-right | Remove for parity pass (move to redesign track only) | High |
| CTA section | Dark CTA block ("Need help choosing the right machine?") | Verify legacy presence; remove if not present | High |
| Customer logos | Logos appear in "Customers" box | Confirm permissions + legacy presence; remove if unverifiable | High |
| Header spacing | Category hero uses larger spacing (`py-8`, `gap-8`) | Verify vs legacy; tighten if needed | Medium |

### Parity Updates (2026-02-03)

Homepage: Hero order and animation now match legacy (Fashion left, Technical center animation, End-to-End right). Headline copy aligned to legacy casing. Learn-more bars updated to match legacy styling. Heritage year updated to 172 years to match legacy.

Category pages: Removed redesign toggle and dark CTA sections. Replaced customer logo grids with single legacy customer image blocks. Reordered hero layouts (Fashion and End-to-End text-left, image-right; Technical image-left, text-right). Copy aligned to legacy ncp1.php. Applications headers simplified to legacy-style text headings.

### Machine Detail

| Observation | Current | Proposed | Priority |
|-------------|---------|----------|----------|
| — | — | — | — |

---

## Reference Sites (Inspiration)

| Site | What's Good | Apply To |
|------|-------------|----------|
| — | — | — |

*Add contemporary B2B/manufacturing sites that handle similar challenges well*

---

## Priority Matrix

After collecting all deltas, sort by impact/effort:

| Priority | Criteria | Action |
|----------|----------|--------|
| **P0** | High Impact, Low Effort | Apply in v2 tokens |
| **P1** | High Impact, Medium Effort | Apply in v2 tokens |
| **P2** | Medium Impact, Low Effort | Apply in v2 tokens |
| **P3** | Medium Impact, Medium Effort | Evaluate ROI |
| **Defer** | Low Impact or High Effort | Future consideration |

---

## Implementation Plan

**Phase 1: Token-Only Changes (v2)**
- [ ] Updated color palette
- [ ] Refined type scale
- [ ] Consistent spacing
- [ ] Subtle shadows
- [ ] Reduced borders

**Phase 2: Component Updates**
- [ ] Button styles
- [ ] Hover states
- [ ] Card treatments

**Phase 3: Layout Evolution**
- [ ] Content width
- [ ] Section rhythm
- [ ] Responsive refinements

---

## Approval Gate

Before applying any delta:
1. Document in this file
2. Create before/after comparison (screenshot or Figma)
3. Get Charlie's approval
4. Apply via v2 token layer

**No unilateral design changes.**

---

*This document grows during RINSE. Review weekly with Charlie.*
