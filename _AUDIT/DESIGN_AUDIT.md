# Design Audit — merrow.com Refactor

> Generated: 2026-02-05
> Purpose: Support Header/Footer + Backstop design pass

---

## Current Design Tokens (tailwind.config.ts)

### Colors
| Token | Value | Usage |
|-------|-------|-------|
| `merrow-heroBg` | #f4f4f4 | Hero band background |
| `merrow-midBg` | #d7d7d7 | Mid-grey band |
| `merrow-greyBoxBg` | #e4e4e4 | Callout boxes |
| `merrow-border` | #cfcfcf | Borders |
| `merrow-footerBg` | #1f1f1f | Footer background |
| `merrow-footerBoxBg` | #2a2a2a | Footer inner boxes |
| `merrow-navBar` | #52524f | Nav bar background |
| `merrow-textMain` | #222222 | Primary text |
| `merrow-textSub` | #444444 | Secondary text |
| `merrow-textMuted` | #666666 | Muted/label text |
| `merrow-red` | (TBD) | Brand accent |

### Typography
| Token | Size/Leading | Usage |
|-------|--------------|-------|
| `merrow-headline` | 40px/44px | Page headlines |
| `merrow-subhead` | 28px/32px | Subheadings |
| `merrow-byeline` | 24px/28px | Byelines |
| `merrow-h1` | 30px/34px | Home H1 |
| `merrow-body` | 14px/20px | Body text |
| `merrow-small` | 12px/16px | Small text |

### Fonts
- **Headlines:** Century Gothic, Helvetica Neue, Arial
- **Body:** Verdana, Arial

### Layout
- **Max width:** 980px (legacy default)
- **Homepage:** 1020px (Figma)

---

## Component Inventory

### Machine Pages
| Component | File | Status |
|-----------|------|--------|
| MachinePage | `app/_components/MachinePage.tsx` | Core template |
| MachineImage | `app/_components/MachineImage.tsx` | S3 image display |
| ThumbnailGallery | `machines/_components/ThumbnailGallery.tsx` | Thumb strip |
| StitchGallery | `machines/_components/StitchGallery.tsx` | ✅ Updated v2.0 |
| ApplicationsStrip | `machines/_components/ApplicationsStrip.tsx` | App links |
| MarketingDownloads | `machines/_components/MarketingDownloads.tsx` | PDF downloads |

### UI Package
| Component | Path | Usage |
|-----------|------|-------|
| MerrowButton | `packages/ui` | CTAs |
| PageHeader | `packages/ui` | Page headers |
| SpecGrid | `packages/ui` | Spec tables |
| ArticleBlock | `packages/ui` | Content blocks |
| YouTubeEmbed | `packages/ui` | Video embeds |
| FullBleed | `packages/ui` | Full-width sections |

---

## Header/Footer Scope

### Header Elements
- [ ] Logo
- [ ] Navigation menu
- [ ] Search (if present)
- [ ] Contact CTA
- [ ] Mobile hamburger

### Footer Elements
- [ ] Logo
- [ ] Navigation links
- [ ] Contact info
- [ ] Social links
- [ ] Legal/copyright

---

## Backstop Configuration

### Recommended Viewports
```js
viewports: [
  { label: "mobile", width: 375, height: 812 },
  { label: "tablet", width: 768, height: 1024 },
  { label: "desktop", width: 1280, height: 800 },
]
```

### Critical Pages for Baseline
1. `/` — Homepage
2. `/machines` — Machine listing
3. `/machines/mg3u` — Machine detail
4. `/sewing/applications` — Applications listing
5. `/support` — Support page
6. `/contact_general.html` — Contact

---

## Design Pass Checklist

### Phase 1: Header/Footer
- [ ] Set up Backstop with baseline screenshots
- [ ] Create Header component with all tokens
- [ ] Create Footer component with all tokens
- [ ] Capture reference screenshots
- [ ] Test responsive breakpoints

### Phase 2: Page Templates
- [ ] Machine page layout
- [ ] Application page layout
- [ ] Support page layout
- [ ] Listing page layout

### Phase 3: Components
- [ ] Buttons
- [ ] Cards
- [ ] Forms
- [ ] Navigation

---

*This audit supports the design refactor. Update as design decisions are made.*
