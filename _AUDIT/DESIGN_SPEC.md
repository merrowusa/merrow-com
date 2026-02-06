# Header/Footer Design Specification
## Extracted from Legacy www.merrow.com

> **Extracted:** 2026-02-06
> **Source:** https://www.merrow.com (computed styles via Puppeteer)
> **Purpose:** Exact CSS targets for header/footer parity

---

## COLOR PALETTE (Hex Values)

| Token | RGB | Hex | Usage |
|-------|-----|-----|-------|
| `--merrow-nav-bar` | rgb(82, 82, 79) | `#52524f` | Navigation bar background |
| `--merrow-nav-border` | rgb(116, 118, 118) | `#747676` | Nav bar top border |
| `--merrow-menu-text` | rgb(127, 5, 5) | `#7f0505` | Menu link color (maroon) |
| `--merrow-footer-bg` | rgb(49, 49, 49) | `#313131` | Footer background |
| `--merrow-footer-border` | rgb(54, 54, 49) | `#363631` | Footer top border |
| `--merrow-footer-link` | rgb(128, 128, 128) | `#808080` | Footer link color |

---

## HEADER SPECIFICATION

### Overall Container (`.new_menu`)
```css
.new_menu {
  width: 980px;
  height: 142px;
  margin: 0 auto;           /* Centered on page */
  padding-left: 40px;
  background: transparent;
  font-family: "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;
  font-size: 14px;
}
```

### Navigation Bar (`.new_menu_bottom`)
```css
.new_menu_bottom {
  width: 980px;
  height: 34px;
  background-color: #52524f;
  border-top: 1px solid #747676;
  padding: 0;
  margin: 0;
}
```

### Logo Image
```css
.new_menu img {
  width: 341px;
  height: 68px;
}
```

### Menu Items (`.new_menu a`)
```css
.new_menu a {
  color: #7f0505;
  font-family: "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;
  font-size: 14px;
  font-weight: 400;
  text-transform: none;
  text-decoration: none;
}
```

---

## FOOTER SPECIFICATION

### Outer Container (`.footer`)
```css
.footer {
  width: 100%;              /* Full viewport */
  background-color: #313131;
  border-top: 1px solid #363631;
  font-family: "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;
  font-size: 14px;
}
```

### Inner Container (`.footer_container`)
```css
.footer_container {
  width: 980px;
  margin: 0 auto;           /* Centered */
  padding: 15px 0 0 50px;
  min-height: 140px;
}
```

### Footer Links (`.footer a`)
```css
.footer a {
  color: #808080;
  font-family: Arial, Helvetica, Geneva, sans-serif;
  font-size: 15px;
  font-weight: 400;
  text-decoration: none;
}
```

---

## LAYOUT DIMENSIONS

### Header
| Element | Width | Height | Notes |
|---------|-------|--------|-------|
| Total container | 1020px | 142px | Content area |
| Nav bar | 980px | 35px | With 1px border |
| Logo | 341px | 68px | |

### Footer
| Element | Width | Height | Notes |
|---------|-------|--------|-------|
| Outer (full-width) | 100% | ~156px | Background spans viewport |
| Inner (centered) | 980px | auto | Content area |
| Padding | 15px top, 50px left | - | |

---

## TYPOGRAPHY STACK

**Header/Body:**
```css
font-family: "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;
```

**Footer Links:**
```css
font-family: Arial, Helvetica, Geneva, sans-serif;
```

---

## TAILWIND TOKEN MAPPING

Add to `tailwind.config.ts`:

```typescript
colors: {
  merrow: {
    navBar: '#52524f',
    navBorder: '#747676',
    menuText: '#7f0505',
    footerBg: '#313131',
    footerBorder: '#363631',
    footerLink: '#808080',
  }
}
```

---

## IMPLEMENTATION CHECKLIST

### Header
- [ ] Container: 980px width, centered, 142px height
- [ ] Nav bar: #52524f background, 34px height
- [ ] Nav bar border: 1px top #747676
- [ ] Logo: 341×68px
- [ ] Menu links: #7f0505, 14px, Helvetica Neue
- [ ] Padding-left: 40px on main container

### Footer
- [ ] Full-width background: #313131
- [ ] Border-top: 1px #363631
- [ ] Inner container: 980px centered
- [ ] Padding: 15px top, 50px left
- [ ] Links: #808080, 15px, Arial

---

## BACKSTOP PARITY TARGETS

After implementing these specs, Backstop should show:
- Header: < 3% mismatch
- Footer: < 3% mismatch
- Dimensions: matching or very close

*This spec provides the exact CSS values Backstop expects. Not "pass/fail" but the actual target.*
