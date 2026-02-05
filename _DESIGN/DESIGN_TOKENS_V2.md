# Merrow.com Design Tokens v2

> **Created:** 2026-01-20
> **Purpose:** Contemporary token layer that can be toggled over v1 baseline
> **Status:** DRAFT — Populate from DESIGN_DELTAS.md findings

---

## Architecture

```
tailwind.config.ts
├── v1 (legacy-exact)     ← Current: Matches existing site
└── v2 (contemporary)     ← Future: Modern refinements
```

### Toggle Mechanism

```tsx
// app/layout.tsx
import '@/styles/tokens-v1.css'  // Baseline (default)
// import '@/styles/tokens-v2.css'  // Contemporary (swap when ready)
```

Or via CSS custom properties:

```css
/* tokens-v1.css */
:root {
  --color-bg-hero: #f4f4f4;
  --color-bg-mid: #d7d7d7;
  /* ... v1 values */
}

/* tokens-v2.css */
:root {
  --color-bg-hero: #f8f9fa;
  --color-bg-mid: #e9ecef;
  /* ... v2 values */
}
```

---

## Color Tokens

### v1 (Legacy Exact)

| Token | v1 Value | Usage |
|-------|----------|-------|
| `--color-bg-hero` | `#f4f4f4` | Hero band background |
| `--color-bg-mid` | `#d7d7d7` | Mid-grey band |
| `--color-bg-box` | `#e4e4e4` | Grey callout boxes |
| `--color-bg-branded` | `#f1f1f1` | Branded Stitch band |
| `--color-bg-footer` | `#1f1f1f` | Footer band |
| `--color-bg-footer-box` | `#2a2a2a` | Footer inner boxes |
| `--color-border` | `#cfcfcf` | Light borders |
| `--color-text-main` | `#222222` | Primary text |
| `--color-text-sub` | `#444444` | Secondary text |
| `--color-text-muted` | `#666666` | Muted/label text |
| `--color-link` | `#1a4f8a` | Links |

### v2 (Contemporary)

| Token | v2 Value | Delta |
|-------|----------|-------|
| `--color-bg-hero` | `#f8f9fa` | Cooler, cleaner gray |
| `--color-bg-mid` | `#e9ecef` | Higher contrast step |
| `--color-bg-box` | `#f1f3f4` | Lighter, less muddy |
| `--color-bg-branded` | `#f8f9fa` | Unified with hero |
| `--color-bg-footer` | `#18181b` | Slightly warmer dark |
| `--color-bg-footer-box` | `#27272a` | Zinc-based |
| `--color-border` | `#e5e7eb` | Lighter, more subtle |
| `--color-text-main` | `#18181b` | Zinc-900 for warmth |
| `--color-text-sub` | `#3f3f46` | Zinc-700 |
| `--color-text-muted` | `#71717a` | Zinc-500 |
| `--color-link` | `#1a4f8a` | Keep (good accessibility) |

**Rationale:** v2 uses Tailwind's Zinc scale as a base — warmer than pure gray, more contemporary.

---

## Typography Tokens

### v1 (Legacy Exact)

| Token | v1 Value |
|-------|----------|
| `--font-family` | `system-ui, sans-serif` |
| `--font-size-xs` | `10px` |
| `--font-size-sm` | `11px` |
| `--font-size-base` | `12-13px` |
| `--font-size-lg` | `14px` |
| `--font-size-xl` | `18px` |
| `--font-size-2xl` | `20px` |
| `--font-size-3xl` | `30px` |
| `--line-height-tight` | `1.2` |
| `--line-height-base` | `1.4` |

### v2 (Contemporary)

| Token | v2 Value | Delta |
|-------|----------|-------|
| `--font-family` | `Inter, system-ui, sans-serif` | Optional: refined sans |
| `--font-size-xs` | `0.75rem` (12px) | Slightly larger base |
| `--font-size-sm` | `0.875rem` (14px) | |
| `--font-size-base` | `1rem` (16px) | Modern default |
| `--font-size-lg` | `1.125rem` (18px) | |
| `--font-size-xl` | `1.25rem` (20px) | |
| `--font-size-2xl` | `1.5rem` (24px) | |
| `--font-size-3xl` | `1.875rem` (30px) | |
| `--line-height-tight` | `1.3` | Slightly more room |
| `--line-height-base` | `1.5` | Comfortable reading |

**Rationale:** v2 uses rem-based scale aligned with Tailwind defaults. More readable on modern screens.

---

## Spacing Tokens

### v1 (Legacy Exact)

| Token | v1 Value |
|-------|----------|
| `--max-width` | `960px` |
| `--section-padding` | Variable (tight) |
| `--card-padding` | Variable |

### v2 (Contemporary)

| Token | v2 Value | Delta |
|-------|----------|-------|
| `--max-width` | `1024px` | Slightly wider |
| `--max-width-wide` | `1152px` | For hero sections |
| `--section-padding-y` | `4rem` | Consistent rhythm |
| `--section-padding-y-lg` | `6rem` | Major sections |
| `--card-padding` | `1.5rem` | Consistent cards |

---

## Shadow Tokens

### v1 (Legacy Exact)

| Token | v1 Value |
|-------|----------|
| (none) | Flat design, no shadows |

### v2 (Contemporary)

| Token | v2 Value | Usage |
|-------|----------|-------|
| `--shadow-sm` | `0 1px 2px 0 rgb(0 0 0 / 0.05)` | Subtle elevation |
| `--shadow` | `0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1)` | Cards |
| `--shadow-md` | `0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1)` | Elevated cards |

---

## Border Tokens

### v1 (Legacy Exact)

| Token | v1 Value |
|-------|----------|
| `--border-width` | `1px` |
| `--border-color` | `#cfcfcf` |
| `--border-radius` | `0` (square) |

### v2 (Contemporary)

| Token | v2 Value | Delta |
|-------|----------|-------|
| `--border-width` | `1px` | Same |
| `--border-color` | `#e5e7eb` | Lighter |
| `--border-radius-sm` | `0.25rem` | Subtle rounding |
| `--border-radius` | `0.375rem` | Default |
| `--border-radius-lg` | `0.5rem` | Cards |

---

## Transition Tokens

### v1 (Legacy Exact)

| Token | v1 Value |
|-------|----------|
| (none) | No transitions defined |

### v2 (Contemporary)

| Token | v2 Value | Usage |
|-------|----------|-------|
| `--transition-fast` | `150ms ease` | Micro-interactions |
| `--transition-base` | `200ms ease` | Default |
| `--transition-slow` | `300ms ease` | Major transitions |

---

## Implementation: tailwind.config.ts

```typescript
// apps/merrow.com/tailwind.config.ts

const v1Tokens = {
  colors: {
    merrow: {
      hero: '#f4f4f4',
      mid: '#d7d7d7',
      box: '#e4e4e4',
      branded: '#f1f1f1',
      border: '#cfcfcf',
      footer: '#1f1f1f',
      'footer-box': '#2a2a2a',
      text: {
        main: '#222222',
        sub: '#444444',
        muted: '#666666',
      },
      link: '#1a4f8a',
    },
  },
  maxWidth: {
    legacy: '960px',
  },
};

const v2Tokens = {
  colors: {
    merrow: {
      hero: '#f8f9fa',
      mid: '#e9ecef',
      box: '#f1f3f4',
      branded: '#f8f9fa',
      border: '#e5e7eb',
      footer: '#18181b',
      'footer-box': '#27272a',
      text: {
        main: '#18181b',
        sub: '#3f3f46',
        muted: '#71717a',
      },
      link: '#1a4f8a',
    },
  },
  maxWidth: {
    legacy: '1024px',
  },
  borderRadius: {
    'merrow-sm': '0.25rem',
    'merrow': '0.375rem',
    'merrow-lg': '0.5rem',
  },
  boxShadow: {
    'merrow-sm': '0 1px 2px 0 rgb(0 0 0 / 0.05)',
    'merrow': '0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1)',
    'merrow-md': '0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1)',
  },
};

// Toggle: Use v1Tokens for baseline, v2Tokens when approved
const activeTokens = v1Tokens; // Switch to v2Tokens after approval

export default {
  theme: {
    extend: {
      ...activeTokens,
      fontFamily: {
        sans: ['Inter', 'system-ui', 'sans-serif'],
      },
    },
  },
};
```

---

## Migration Checklist

### Phase 1: Setup (Before any v2 changes)
- [ ] Create `tokens-v1.css` with legacy exact values
- [ ] Create `tokens-v2.css` with contemporary values
- [ ] Update `tailwind.config.ts` with token objects
- [ ] Test toggle mechanism (v1 → v2 → v1)

### Phase 2: Side-by-Side Preview
- [ ] Deploy baseline (v1) to production URL
- [ ] Deploy v2 to preview URL
- [ ] Generate comparison screenshots
- [ ] Review with Charlie

### Phase 3: Approval & Deploy
- [ ] Charlie approves v2 changes
- [ ] Swap import from v1 to v2
- [ ] Deploy to production
- [ ] Monitor for issues

---

## Rollback Plan

If v2 causes issues:

1. Revert import in `layout.tsx`:
   ```tsx
   import '@/styles/tokens-v1.css'  // Rollback
   // import '@/styles/tokens-v2.css'
   ```
2. Redeploy
3. Document issue in DESIGN_DELTAS.md

---

*This document defines the token evolution. Populate from DESIGN_DELTAS.md findings.*
