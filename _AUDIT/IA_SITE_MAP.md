# Merrow.com Information Architecture

> **Created:** 2026-01-20
> **Purpose:** Navigation structure and URL hierarchy
> **Reference:** Companion to PAGE_INVENTORY.md

---

## Site Map (Tree View)

```
merrow.com/
│
├── / (Homepage)
│   └── Featured machines, categories, CTAs
│
├── /fashion-sewing (Category Landing)
│   ├── Hero + intro copy
│   ├── Machines list (links to machine pages)
│   ├── Applications grid
│   └── Customer logos
│
├── /technical-sewing (Category Landing)
│   ├── Hero + intro copy
│   ├── Machines list (links to machine pages)
│   ├── Applications grid
│   └── Customer logos
│
├── /end-to-end-seaming (Category Landing)
│   ├── Hero + intro copy
│   ├── Machines list (links to machine pages)
│   ├── Applications grid
│   └── Customer logos
│
├── /machines (Listing)
│   └── All machines with filters
│
├── /Sergers_and_Overlock_Sewing_Machines/
│   └── [code]/ (Machine Detail)
│       ├── Specs
│       ├── Features
│       ├── Applications
│       └── Related machines
│
├── /sewing/applications/
│   ├── / (Listing)
│   └── [app]/ (Application Detail)
│       ├── Description
│       └── Recommended machines
│
├── /customer-stories/
│   ├── / (Listing)
│   └── /featured/[s]/ (Story Detail)
│
├── /support/
│   ├── / (Hub)
│   └── /class/[c]/key/[k]/ (Article)
│
├── /parts/
│   └── [cp]/[mmc_code]/ (Parts Detail)
│
├── /stitch-lab (Lead Gen / Contact)
│
├── /overlock-history (Static)
│
├── /agentmap.html → /dealers (Dealer Locator)
│
├── /about.html → /about (About)
│
└── /not-found (404)
```

---

## Navigation Structure

### Primary Nav (Header)

| Label | URL | Mega-Menu? | Notes |
|-------|-----|------------|-------|
| **Sewing Machines** | — | YES | Opens mega-menu |
| **Applications** | — | YES | Opens mega-menu |
| **Resources** | — | NO | Dropdown |
| **About** | `/about` | NO | Direct link |
| **Contact** | `/stitch-lab` | NO | Direct link |

### Mega-Menu: Sewing Machines

```
┌─────────────────────────────────────────────────────────────────┐
│ SEWING MACHINES                                                 │
├─────────────────┬─────────────────┬─────────────────────────────┤
│ Fashion Sewing  │ Technical Sewing│ End-to-End Seaming          │
│ ─────────────── │ ──────────────  │ ─────────────────           │
│ • Machine 1     │ • Machine A     │ • Machine X                 │
│ • Machine 2     │ • Machine B     │ • Machine Y                 │
│ • Machine 3     │ • Machine C     │ • Machine Z                 │
│ • View All →    │ • View All →    │ • View All →                │
├─────────────────┴─────────────────┴─────────────────────────────┤
│ [CTA: Find the Right Machine →]                                 │
└─────────────────────────────────────────────────────────────────┘
```

**Data Source:** `getMachinesByCategory()` for each category

### Mega-Menu: Applications

```
┌─────────────────────────────────────────────────────────────────┐
│ APPLICATIONS                                                    │
├─────────────────────────────────────────────────────────────────┤
│ Emblems & Badges  │ Textiles          │ Medical & Technical     │
│ ─────────────────  │ ────────          │ ────────────────        │
│ • Emblem finishing │ • Carpet binding  │ • Filter media          │
│ • Badge edging     │ • Towel hemming   │ • Surgical drapes       │
│ • Patch creation   │ • Blanket binding │ • Automotive interiors  │
├─────────────────────────────────────────────────────────────────┤
│ [CTA: See All Applications →]                                   │
└─────────────────────────────────────────────────────────────────┘
```

**Data Source:** `getApplicationCategories()` with `getApplicationsByCategory()`

### Footer Navigation

| Column 1: Products | Column 2: Resources | Column 3: Company |
|--------------------|---------------------|-------------------|
| Fashion Sewing | Support | About Merrow |
| Technical Sewing | Parts | Contact Us |
| End-to-End Seaming | Dealer Locator | Careers |
| All Machines | Overlock History | Press |

---

## URL Conventions

### Canonical Patterns

| Content Type | URL Pattern | Example |
|--------------|-------------|---------|
| Category landing | `/{category-slug}` | `/technical-sewing` |
| Machine detail | `/Sergers_and_Overlock_Sewing_Machines/{styleKey}` | `/Sergers_and_Overlock_Sewing_Machines/MG-3D` |
| Application | `/sewing/applications/{appKey}` | `/sewing/applications/emblems` |
| Support article | `/support/class/{c}/key/{k}` | `/support/class/threading/key/setup` |
| Parts | `/parts/{cp}/{mmc_code}` | `/parts/needles/N-001` |

### Legacy URL Handling

| Legacy Pattern | Action | Implementation |
|----------------|--------|----------------|
| `*.php` | 301 redirect | `next.config.js` redirects |
| `ncp1.php?a=X` | 301 redirect | Map `a` param to category |
| `{model}.php` | 301 redirect | Map to `/Sergers.../` pattern |
| `*.html` | 301 or keep | Evaluate case by case |

---

## Breadcrumb Trails

| Page | Breadcrumb |
|------|------------|
| Homepage | — |
| Category | Home > {Category} |
| Machine | Home > {Category} > {Machine} |
| Application | Home > Applications > {Application} |
| Support Article | Home > Support > {Category} > {Article} |
| Parts | Home > Parts > {Part} |
| Customer Story | Home > Customer Stories > {Story} |

---

## Internal Linking Strategy

### From Category Pages

| Link Type | Target | Purpose |
|-----------|--------|---------|
| Machine list items | Machine detail | Primary conversion path |
| Application grid items | Application detail | Discover use cases |
| CTA buttons | Stitch Lab / Dealers | Lead capture |

### From Machine Pages

| Link Type | Target | Purpose |
|-----------|--------|---------|
| Applications section | Application detail | Cross-sell |
| Related machines | Other machine details | Upsell |
| Parts reference | Parts page | Support |
| Get Quote CTA | Stitch Lab | Lead capture |

### From Application Pages

| Link Type | Target | Purpose |
|-----------|--------|---------|
| Recommended machines | Machine detail | Purchase path |
| Related applications | Other applications | Discovery |
| Contact CTA | Stitch Lab | Lead capture |

---

## Schema.org Mapping

| Page Type | Schema Type | Key Properties |
|-----------|-------------|----------------|
| Homepage | Organization | name, logo, contactPoint |
| Machine Detail | Product | name, image, description, brand, offers |
| Category | ItemList | itemListElement (products) |
| Application | Article | headline, author, datePublished |
| Customer Story | Article | headline, author, datePublished |
| Support | HowTo or FAQPage | step/question-answer |
| Dealer Map | LocalBusiness[] | address, geo, telephone |

---

## Mobile Navigation

```
┌────────────────────────────────┐
│ ☰ Menu          🔍  ✉️        │
├────────────────────────────────┤
│ When hamburger tapped:         │
│                                │
│ Sewing Machines        ▶       │
│ Applications           ▶       │
│ Resources              ▶       │
│ About                          │
│ Contact                        │
│ Dealer Locator                 │
└────────────────────────────────┘
```

---

## Search Behavior

| Query Type | Expected Results | Priority |
|------------|------------------|----------|
| Machine model | Machine detail page | 1 |
| Application term | Application page | 2 |
| Generic "overlock" | Category pages | 3 |
| Support question | Support articles | 4 |
| Part number | Parts page | 5 |

**Implementation:** Google Custom Search (placeholder in Header)

---

## Notes

- **Legacy compatibility** is critical — 180 years of indexed URLs
- **Mega-menus** require live database queries (currently stubbed)
- **Mobile-first** — majority of traffic
- **Schema markup** essential for search appearance

---

*This document defines how users navigate the site. Sync with PAGE_INVENTORY.md for implementation status.*
