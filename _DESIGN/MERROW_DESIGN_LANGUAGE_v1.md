# MERROW DESIGN LANGUAGE v1.0

_North Star_: Current live merrow.com homepage.

This is a first-pass extraction of the visual system. It is descriptive, not prescriptive; we will improve it over time.

## Layout

- Main page background: solid white.
- Main content organized into **horizontal bands**:
  - Hero band (light grey).
  - Mid-grey callout band.
  - Branded Stitch band.
  - White logo strip.
  - Dark footer band.
- Main content width:
  - Center column: `960px` wide.
  - Centered with auto left/right margins.
- General rhythm:
  - Hero tiles sit tight under the main heading.
  - Hero band has more vertical breathing room than the other bands.
  - Each band has its own background and internal border language.

## Color

(Values based on current homepage implementation; we will refine them if we find more accurate CSS.)

- `merrow.heroBg` – hero band background: `#f4f4f4`.
- `merrow.midBg` – mid-grey band background: `#d7d7d7`.
- `merrow.greyBoxBg` – grey callout box backgrounds: `#e4e4e4`.
- `merrow.border` – light border color: `#cfcfcf`.
- `merrow.brandedBg` – Branded Stitch band: `#f1f1f1`.
- `merrow.logoStripBorder` – logo strip border: `#cfcfcf`.
- `merrow.footerBg` – footer band background: `#1f1f1f`.
- `merrow.footerBoxBg` – footer inner boxes: `#2a2a2a`.
- `merrow.textMain` – main text: `#222222`.
- `merrow.textSub` – secondary text: `#444444`.
- `merrow.textMuted` – small labels: `#666666`.
- `merrow.link` – primary link color: `#1a4f8a`.

## Typography

- Base font: system UI (browser default sans).
- H1:
  - Used for “Modern Overlock. The Iconic Merrow Sewing Machine”.
  - Approx. `30px` size, `34px` line-height, `font-weight: 600`.
- Subheading (secondary line under H1):
  - Approx. `20px` size, `24px` line-height.
- Section headings (e.g. “THE BRANDED STITCH®”):
  - Approx. `18px` size, `1.2` line-height, `font-weight: 600`.
- Body text:
  - Approx. `12–13px` size, `1.4` line-height.
- Labels / small caps:
  - Approx. `11px` size.
  - Often uppercase with tracking (e.g. section labels, “enter your email…”).

## Patterns

### 1. Hero band

- Full-width band with hero background (`heroBg`).
- Centered 960px column.
- H1 + subheading centered.
- 3 hero tiles:
  - Each tile is a bordered white box.
  - Image block on top (legacy S3 images).
  - Caption block underneath with heading + copy.
  - Caption heading centered, label text small and uppercase.

### 2. Mid-grey band

- Full-width band with `midBg`.
- 960px centered column.
- Two grey boxes:
  - Background `greyBoxBg`, border `border`.
  - Left: Merrow Heritage (small image + text).
  - Right: Branded Stitch (small image + text).

### 3. Branded Stitch band

- Band background `brandedBg`.
- 960px centered column.
- Left side:
  - “THE BRANDED STITCH®” heading.
  - Short subline.
  - 1–2 paragraphs of copy.
- Right side:
  - Small caps label (“Enter your email address to learn more”).
  - Email field and submit button with compact horizontal layout.
  - “THANK YOU! We’ll be in touch shortly.” text.

### 4. Logo strip

- White band with thin border.
- Centered logo image strip (`ft_10.gif`).

### 5. Footer band

- Dark background (`footerBg`).
- 3 feature boxes inside (`footerBoxBg`):
  - Agent Locator.
  - Blog.
  - Community.
- Secondary line with contact info and social links.
- Map image on the right (`ft_11.gif`) with small form under or beside it.

## Design Principles

- **Industrial, not playful.**  
  Clean grid, restrained colors, minimal decoration.

- **Band-based layout.**  
  Horizontal sectioning is a key part of the Merrow home; we keep that structure.

- **Text-first.**  
  Headings and copy carry most of the meaning; imagery is supportive.

- **Incremental improvement.**  
  This v1 language is a starting point. We will:
  - Align other page types to it.
  - Then selectively modernize tokens and primitives rather than redesigning ad hoc.

