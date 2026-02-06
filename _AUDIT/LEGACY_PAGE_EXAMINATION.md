# Legacy Page Examination Findings

## /search1.php

**Legacy file:** `_LEGACY_REFERENCE/public_html/search1.php`
**Purpose:** "How Old is My Merrow" serial/ID lookup. User enters a number and receives a manufacture-year range.
**Data source:** None (pure PHP range checks, no DB).
**Complexity:** Simple static logic + basic form.

**Recommendation:** Implement as a simple form with the same range mapping and copy. No DB required.

---

## /needle_configurator.html

**Legacy file:** `_LEGACY_REFERENCE/public_html/needle_configurator.php` (no `.html` file found)
**Purpose:** Needle selection tool (curved/straight needles), presented via the SIMILE Exhibit framework.
**Data source:** Public Google Spreadsheet JSONP feed referenced via `<link rel="exhibit/data">`.
**Complexity:** Interactive client-side tool (Exhibit JS + Google Sheets data).

**Recommendation:** Implement a modern client-side selector fed from a data file or an API. If parity is required, use a local JSON dataset derived from the spreadsheet; otherwise provide a functional stub and link to contact/support.

---

## /stitch-lab

**Legacy file:** Not found in `_LEGACY_REFERENCE/public_html/`.
**Purpose:** Not present as a standalone page. Only mentions found are comments (e.g. `site.js`) and marketing copy.
**Data source:** N/A.
**Complexity:** Unknown; likely legacy marketing landing or contact pathway.

**Recommendation:** Provide a simple stub page describing Stitch Lab with contact CTA (email/phone) or redirect to a contact form. Confirm desired behavior.

---

## /agentmap.html

**Legacy file:** `_LEGACY_REFERENCE/public_html/agentmap.php` (no `.html` file found)
**Purpose:** Dealer/agent locator page with map and intro content.
**Data source:** Embedded Google Maps Engine iframe: `https://mapsengine.google.com/map/u/0/embed?mid=zsVw84sSuJyo.kI-ry6XL3e2w`.
**Complexity:** Simple embed + static copy.

**Recommendation:** Implement `/agentmap.html` as a route that renders the existing agent map page or a direct iframe embed. No DB required for legacy parity.

---

# Legacy Support `.htm` Pages (Image Popups)

These are standalone HTML files containing a single image and a “Close Window” link. They appear to be used as popup image viewers from support pages.

## /needleplate.htm

**Legacy file:** `_LEGACY_REFERENCE/public_html/needleplate.htm`
**Purpose:** Image popup for needle plate assembly.
**Data source:** Static image `pics/needleplatebig.gif`.
**Complexity:** Simple static page.

**Recommendation:** Serve as a static page or replace with direct image link in support docs.

---

## /lowerlooper.htm

**Legacy file:** `_LEGACY_REFERENCE/public_html/lowerlooper.htm`
**Purpose:** Image popup for lower looper diagrams.
**Data source:** Static image `pics/lowerlooperdiagram.gif`.
**Complexity:** Simple static page.

**Recommendation:** Serve as a static page or replace with direct image link in support docs.

---

## /rearview-lrg.htm

**Legacy file:** `_LEGACY_REFERENCE/public_html/rearview-lrg.htm`
**Purpose:** Image popup for 70 class rear view diagram.
**Data source:** Static image `../images/rearview.gif`.
**Complexity:** Simple static page.

**Recommendation:** Serve as a static page or replace with direct image link in support docs.

---

## /bs-cams-lrg.htm

**Legacy file:** `_LEGACY_REFERENCE/public_html/bs-cams-lrg.htm`
**Purpose:** Image popup for 70 class shafts and cams diagram.
**Data source:** Static image `pics/cams.gif`.
**Complexity:** Simple static page.

**Recommendation:** Serve as a static page or replace with direct image link in support docs.

---

## /bs-cutter-lrg.htm

**Legacy file:** `_LEGACY_REFERENCE/public_html/bs-cutter-lrg.htm`
**Purpose:** Image popup for 70 class cutter diagram.
**Data source:** Static image `pics/bs-cutter-lrg.gif`.
**Complexity:** Simple static page.

**Recommendation:** Serve as a static page or replace with direct image link in support docs.

---

## /bs-feedmech2-lrg.htm

**Legacy file:** `_LEGACY_REFERENCE/public_html/bs-feedmech2-lrg.htm`
**Purpose:** Image popup for 70 class “Y” feed mechanism diagram.
**Data source:** Static image `pics/feedmech2-lrg.gif`.
**Complexity:** Simple static page.

**Recommendation:** Serve as a static page or replace with direct image link in support docs.
