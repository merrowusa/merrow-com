# STEP 1 Element Mapping
## Figma → DOM Selector/File

> Created: 2026-02-02
> Scope: Homepage header + above-fold hero + footer

---

## HEADER_1920 (Figma node 2:1258)

| Figma Element | DOM Selector | File | Spec Applied |
|---------------|--------------|------|--------------|
| TOP SPLASH (black bar) | `[data-testid="top-promo-bar"]` | `_components/TopPromoBar.tsx` | bg #000, h 16px, text white + cyan link #66CCFF |
| Main header container | `header.new_menu` | `_components/Header.tsx:121` | bg white, max-w 1020px, border-b #cfcfcf |
| Logo | `header img[alt*="logo"]` | `_components/Header.tsx:127-133` | 341x68px, src `/images/merrowlogo_03.png` |
| 1838 badge | `header img[alt="Since 1838"]` | `_components/Header.tsx:198-202` | h 28px, src `/images/1838.png` |
| Nav bar | `nav[aria-label="Main navigation"]` | `_components/Header.tsx:207` | bg #52524F, border-t 1px #747676, radius 5px (tl,tr,bl), h 34px |
| Support/Contact links | `nav[aria-label="Secondary navigation"] a` | `_components/Header.tsx:137-156` | text #808080, hover #1a4f8a |

---

## HERO_1920 (Figma node 2:1257)

| Figma Element | DOM Selector | File | Spec Applied |
|---------------|--------------|------|--------------|
| Hero band | `section.bg-gradient-to-b` | `page.tsx:71` | bg gradient white→#EDEDED, container 1020px |
| H1 headline | `main h1` | `page.tsx:76-80` | font-headline 32px, text-center |
| Hero 3-up grid | `.grid.md\\:grid-cols-3` | `page.tsx:84` | 3 cols, gap-x-10 |
| Left card (Technical) | `a[href="/technical-sewing"]` | `page.tsx:86-109` | img 320x370, src `/images/hero/h_02.gif.png` |
| Center card (Fashion) | `a[href="/fashion-sewing"]` | `page.tsx:112-152` | img 320x370, fade animation, src `/images/hero/h_01.gif.png` + overlay h_04 |
| Right card (End-to-End) | `a[href="/end-to-end-seaming"]` | `page.tsx:155-178` | img 320x370, src `/images/hero/h_03.gif.png` |
| Learn More buttons | `.inline-flex.bg-\\[\\#3f3f3f\\]` | `page.tsx:105-107` etc | bg #3f3f3f, text 11px white |
| Description text | `.text-center.text-\\[11px\\]` | `page.tsx:183-188` | 11px, max-w 820px, text #444 |
| Grey boxes (Heritage/Branded) | `.rounded-\\[9px\\].bg-\\[\\#a9a9a9\\]` | `page.tsx:260,292` | radius 9px, shadow 0 1px 0 #373731 + 0 -1px 0 #0e0d0b, bg #a9a9a9 |
| Heritage image | `img[alt*="heritage"]` | `page.tsx:263` | src `/images/hero/h_05.gif.png` |
| Branded image | `img[alt*="branded"]` | `page.tsx:295` | src `/images/hero/h_06.gif.png` |
| Logo strip bar | `section.bg-\\[\\#3a3a3a\\]` | `page.tsx:328` | bg #3a3a3a, inner white panel |
| Logo strip image | `img[alt*="Partner"]` | `page.tsx:329` | src `/images/ft_10.gif` |

---

## FOOTER_1920 (Figma node 2:1256)

| Figma Element | DOM Selector | File | Spec Applied |
|---------------|--------------|------|--------------|
| Footer band | `footer#footer` | `_components/Footer.tsx:17` | bg #313131, border-t 1px #363631, container 1020px |
| Feature boxes grid | `.grid.md\\:grid-cols-3` | `_components/Footer.tsx:21` | 3 cols gap-4 |
| Agent Locator box | `div:has(a[href="/agentmap.html"])` | `_components/Footer.tsx:23-42` | border #3f3f3f, bg #1f1f1f |
| World map image | `img[alt="World Map"]` | `_components/Footer.tsx:31` | src `/images/ft_11.gif` |
| Blog box | `div:has(a[href*="blog.merrow"])` | `_components/Footer.tsx:50-68` | border #3f3f3f, bg #1f1f1f |
| Community box | `div:has(a[href*="facebook"])` | `_components/Footer.tsx:71-90` | border #3f3f3f, bg #1f1f1f |
| Contact section | `.text-\\[12px\\]:has(a[href*="tel:"])` | `_components/Footer.tsx:96-122` | text #d7d7d7, links #9fc7ff |
| About section | `.text-\\[12px\\]:has(a[href="/about"])` | `_components/Footer.tsx:125-149` | text #d7d7d7, links #9fc7ff |
| Follow section | `.text-\\[12px\\]:has(a[href*="linkedin"])` | `_components/Footer.tsx:152-169` | text #d7d7d7, links #9fc7ff |
| Newsletter form | `form[action*="mailchimp"]` | `_components/Footer.tsx:176-204` | MailChimp integration |
| Copyright | `.text-\\[11px\\].text-\\[\\#bdbdbd\\]` | `_components/Footer.tsx:209-220` | 11px, text #bdbdbd |

---

## Files Modified in STEP 1

| File | Changes |
|------|---------|
| `tailwind.config.ts` | Updated max-w-merrow to 1020px, added max-w-merrow-content 980px |
| `_components/TopPromoBar.tsx` | v1.0→v2.0: Added cyan link color #66CCFF, testid |
| `_components/Header.tsx` | v3.0→v3.1: Version comment updated with Figma node ref |
| `_components/Footer.tsx` | v3.1→v3.2: Added border-t #363631, version comment |
| `page.tsx` | v2.5→v3.0: Version comment updated with Figma specs |

---

## Assets Verified (per STEP 0 manifest)

All assets load from local `/images/` paths:

| Asset | Path | Used In |
|-------|------|---------|
| Main logo | `/images/merrowlogo_03.png` | Header.tsx |
| 1838 badge | `/images/1838.png` | Header.tsx |
| h_01 (Fashion base) | `/images/hero/h_01.gif.png` | page.tsx |
| h_02 (Technical) | `/images/hero/h_02.gif.png` | page.tsx |
| h_03 (End-to-End) | `/images/hero/h_03.gif.png` | page.tsx |
| h_04 (Fashion overlay) | `/images/hero/h_04.gif.png` | page.tsx |
| h_05 (Heritage) | `/images/hero/h_05.gif.png` | page.tsx |
| h_06 (Branded) | `/images/hero/h_06.gif.png` | page.tsx |
| ft_10 (Logo bar) | `/images/ft_10.gif` | page.tsx |
| ft_11 (World map) | `/images/ft_11.gif` | Footer.tsx |

---

*All changes are attributable to Figma spec items. No "tweaking by eye."*
