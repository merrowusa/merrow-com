# Client-Side Behavior Spec (Legacy)

Behavioral audit of JS/CSS interactions and layout patterns across legacy public pages. This is a behavior spec, not a code audit. Sources include the JS/CSS files and PHP widgets listed in the task.

**Interaction Inventory**
| Interaction | Page(s) | Trigger | Behavior | JS Source |
|---|---|---|---|---|
| Mega-menu dropdown (5-column) | Header (most public pages) | Hover/click on top nav items with `.drop` | Expands a multi-column dropdown panel (`.dropdown_5columns`) showing machine/app lists; stays open while hovered, closes on mouseout | CSS-driven in header markup; no dedicated JS found in `site.js` or `SDNMenu.js` |
| Support left-nav accordion | Support/parts pages with SDN menu | Click top-level menu title | Expands/collapses nested menu sections; optional hover mode and delay; remembers last open sections via cookie | `cephei/scripts/SDNMenu.js` + `cephei/css/sdnm_36.css` |
| SDN menu state persistence | Support/parts pages | Page load | Reads cookie for menu state and restores open/closed sections | `cephei/scripts/SDNMenu.js` (cookie read/write) |
| Home hero swap | Home page | Timed on page load | `#center_front_1` fades out after ~2s; `#center_front_2` fades in after ~6.3s | `site.js` + `js_min.js` (doTimeout) |
| Branded content toggle | Stitch pages / branded content sections | Click `#brand.learn_submain` | Fades out `.main_content`, fades in `.branded_content`, toggles `.active` class, shows `.close_brand`; close reverses | `site.js` |
| “Available titles” overlay | Pages with `#availableTitles` | Click `div#fat.man` | Slides `#availableTitles` down/up; `.fat_boy` or `p.close` closes | `site.js` |
| Stitch selector jump menus | Stitch pages (marketplace) | `select` change | Navigates browser to selected stitch/machine URL | `widget_stitchselector.php` (MM_jumpMenu) |
| PictoBrowser stitch gallery | Stitch pages (`stitch.php`, `stitchHD.php`) | Page load and query params | Embeds Flash gallery from Flickr sets/keywords; shows “Now Viewing” and HD/low-res toggle links | `widget_stitches_center.php` (Flash embed) |
| PrettyPhoto lightbox (images/video/iframes) | Machine/app/compare pages; customer stories; support popups | Click any `a[rel^='prettyPhoto']` | Opens overlay with image/video/iframe; arrows and keyboard nav; gallery thumbs; supports YouTube/Vimeo/QuickTime/Flash/iframe/inline | `prettyphoto.js` |
| “Compare all” modal | Application pages | Click “Compare all” | Opens `/widget_compare.php?...&iframe=true&width=1100&height=600` in prettyPhoto iframe modal | `prettyphoto.js` + `a.php`/`nap.php` |
| Thickbox modal | Various pages (parts/tools/rail) | Click `a.thickbox` | Opens overlay modal for image/iframe/inline content with close button | `cephei/scripts/thickbox.js` + `cephei/css/thickbox.css` |
| Lightwindow media modal | MG/70-class pages | Click `.lightwindow` links | Opens modal overlay for video/media (m4v/mov) with gallery navigation; size via `params` | `lightwindow_all_min.js` (Prototype/Scriptaculous) |
| Drawer/accordion UI | Announcements + any `ul.drawers` | Click drawer handle | Slides drawer content open/close (BlindDown/BlindUp), one-open-at-a-time behavior | `cephei/scripts/drawers.js` |
| FrontRow QuickTime rotator | Announcements / media pages | Click/hover on section triggers | Updates QuickTime player URL or swaps static content; highlights active trigger | `cephei/scripts/frontrow_redux.js` + `browserdetect.js` |
| iPhone FrontRow fallback | Announcements / media pages on iPhone | Click trigger | Replaces display panel with mobile-friendly movie embed, no QuickTime controller | `frontrow_redux.js` |
| Google CSE search box | Header/search pages | Input + submit | Loads Google Custom Search UI into `#cse-search-form` and submits query | `header_test.php` (Google JSAPI CSE) |
| Agent map (GPS Visualizer) | Agent map widgets | Page load | Renders Google Maps v2 map with markers and list; marker info windows | `widget_sub_agent_map.php` / `widget_customagent_map.php` + `mapfunctions.js` |
| Dealer locator map (search) | `widget_sub_lilmap.php` | Page load and “Search Locations” | Geocodes address, fetches XML markers, builds sidebar list; clicking list opens marker info window | `widget_sub_lilmap.php` (GDownloadUrl + XML) |
| Link click analytics | Site-wide | Mousedown on tracked links | Sends Adobe SiteCatalyst tracking events with prop values | `cephei/scripts/tracking.js` |

Note: `pat.js` contains Patagonia e-commerce product page behavior (size/color selection and product-focus redirects) but no references were found in Merrow PHP templates, so no user-facing behavior is attributable on the public Merrow site.

**Layout Patterns**
- Fixed-width container + float grid: `#container` width `980px`, `#content` padded; `.column` floats; `.grid2col`, `.grid3col`, `.grid3cola`, `.grid4col` set percentage columns. Source: `base_vimeo.css`.
- Home page 3-column rail: `.grid3cola` with `582px` center and `184px` side rails; `#showcase`, `#gallery`, `#latest` use fixed heights and background slices. Source: `index_vimeo.css`.
- Header/search bar layout: `logobar` + `srchBox` with absolute-positioned search button; top nav uses background-image slices for tabs. Source: `whole_vimeo.css`.
- External CSS loads (global styles): `https://css.imerrow.com/css_major/widget_new_css_rev75442112.php` and IE-specific `https://merrow-media.s3.amazonaws.com/general-http/ie7.css` are injected via `widget_new_styles.php`.
- Support/stitching layouts: `ul.nav` top ribbon + dropdown submenus; left nav accordions in `.sdnm_flat`. Source: `stitching_styles_default.css`, `sdnm_36.css`.
- Parts/support utility layout: form-heavy, absolute/relative positioned elements; wide blocks with `700px+` widths for calculators/rails. Source: `added_parts.css`, `contact_general.css`.
- Alternate wide layout: `#content` width `930px`, left offset; tabbed promo panels with background sprites. Source: `wide_main.css`.

**Typography System**
- Base font: `body` uses `12px/18px "Lucida Grande", Arial, Verdana, sans-serif` in core layouts (`base_vimeo.css`).
- Cufon font replacement: Century Gothic is applied to `h1`, `h2`, `h4`, `.ncp_headline`, `.ncp_byeline`, `.box_headline`, `.box_subline`, `.sub_head`, and specific footer nav selectors. Source: `widget_js.php`, `ufon-yui.js`, `century.js`.
- Typical headline sizes from CSS: `#main h1` ~24px, `#main h2` ~16px (base), plus numerous page-specific overrides (e.g., `index_vimeo.css` uses 12–13px for boxes, `services_cleanup.css` uses 36px for service titles).
- Cufon replaces text with VML/canvas; hover hit area is preserved when enabled by Cufon options.

**Image/Media Patterns**
- Primary image CDN: `https://merrow-media.s3.amazonaws.com/` (product pages, application images, video thumbnails). Common patterns: `product-pages/{style_key}_thumb{1..4}.jpg` + `_thumb{1..4}x.jpg` (lightbox full size), `applications/{d_key}_stitch_highres{1..2}.jpg` (prettyPhoto).
- Legacy image CDN: `http://images.imerrow.com/` (nav sprites, box caps, menu backgrounds, SDN icons).
- Service assets: `http://merrowservices.s3.amazonaws.com/` (misc CSS/images).
- Lightbox gallery patterns: prettyPhoto for images/YouTube/Vimeo/QuickTime/Flash/iframe (`prettyphoto.js`); Thickbox for images/iframes/inline (`thickbox.js`); Lightwindow for media overlays with custom size params (`lightwindow_all_min.js`).
- PictoBrowser (Flash) Flickr galleries for stitch samples: `http://www.db798.com/pictobrowser.swf` with `userName=merrowmachine`, `userId=25997048@N06` and `ids`/`names`/`source=sets|keyword`. Two modes: low-res (smaller embed, `imageSize=original` with `initialScale=on`) and high-res (larger embed, `initialScale=off`).

**Form Behavior**
- Stitch selector menus are pure navigation forms: `select` + `onchange` redirect to new URL (no validation).
- Dealer locator form: address input + radius select + “Search Locations” button; geocodes and fetches XML; errors show alerts or inline “No results found” message.
- Contact/lead forms (general/agent): submit via full-page POST to `widget_sub_datamover.php` (no AJAX). reCAPTCHA v1 is embedded on some forms (RecaptchaOptions `theme: 'white'`). Some pages include hidden `captcha=no` to bypass. Source: `widget_general_form.php`, `contact_general.css`.
- No client-side validation logic found beyond optional reCAPTCHA challenge and basic required fields enforced server-side.

**Map Integration**
- Google Maps API v2 is used throughout map widgets (`maps.google.com/maps?v=2`).
- Agent maps (`widget_sub_agent_map.php`, `widget_customagent_map.php`) are powered by GPS Visualizer JS (`maps.gpsvisualizer.com/google_maps/functions.js`), with marker lists, draggable legend, and built-in driving directions in info windows.
- Dealer locator map (`widget_sub_lilmap.php`) uses Google JSAPI v2, client geolocation (`google.loader.ClientLocation`), and `phpsqlsearch_genxml.php` XML feed with params `lat`, `lng`, `radius`.
- Sidebar list items highlight on hover and trigger marker info window on click.
- If no results, map recenters to a US-wide view (`40, -100` at zoom 4) and displays a “no results” message.

**Third-Party Widgets**
| Widget | Purpose | Keep/Drop | Replacement |
|---|---|---|---|
| Zendesk snippet | Support chat/help widget (key `56f7da7a-a857-4bfc-ac8f-4b04e6168beb`) | TBD | Modern Zendesk widget or alternative |
| SumoMe | Email capture/marketing overlays (data-sumo-site-id `0c7f7113515f5c2201c536e1f6ad3872f366b52a43b61ef33433403118c5c80b`) | TBD | Native capture or Mailchimp |
| Facebook Pixel | Marketing analytics (`fbq('init','461997664250513')`) | TBD | Meta Pixel (modern) |
| Adobe SiteCatalyst (`s_gi`) | Link/page analytics tracking (prop/events from `tracking.js`) | TBD | GA4 or existing analytics stack |
| Google CSE | Site search UI (`#cse-search-form` via Google JSAPI) | TBD | Native search / Algolia |
| Google Maps v2 | Dealer/agent maps (API key `ABQIAAAADizr7-TCJzgpJyUo_GBo-RS__Kf-IlIVJkgAx4Cxw4mlXnWodBQy-vGGOuTVBFC-o6N8AIw9NfBVvw`) | Replace | Google Maps v3 or Mapbox |
| GPS Visualizer | Map overlays + marker list (`maps.gpsvisualizer.com/google_maps/functions.js`) | Replace | Custom map UI |
| Cufon | Font replacement (Century Gothic), selectors set in `Cufon.replace(...)` | Drop | CSS `@font-face` |
| PictoBrowser (Flash) | Flickr stitch galleries (`userName=merrowmachine`, `userId=25997048@N06`) | Drop | Modern gallery component |
| prettyPhoto | Lightbox (images/iframes/video), initialized by `$("a[rel^='prettyPhoto']").prettyPhoto()` | Replace | Modern lightbox |
| Thickbox | Legacy modal, `a.thickbox` targets | Replace | Modern modal |
| Lightwindow | Media lightbox for `.lightwindow` links | Replace | Modern modal/video player |

**AJAX / Dynamic Data Loading**
- Dealer locator uses `GDownloadUrl` to fetch XML markers from `phpsqlsearch_genxml.php` with `lat/lng/radius` and rebuilds map + sidebar (`widget_sub_lilmap.php`).
- GPS Visualizer loads its JS helper from `maps.gpsvisualizer.com` and builds markers client-side (`widget_sub_agent_map.php`).
- prettyPhoto and lightwindow load remote images/iframes/media on demand when opened.
- `p_and_s.js` bundles Prototype + Scriptaculous + Ajax utilities; no explicit per-page calls identified in this audit, but it enables Ajax.Request/Updater patterns on pages that include it.

**Cookie / Session Behavior**
- SDNMenu stores open/closed state in a cookie keyed by menu ID (30-day expiry). Source: `SDNMenu.js`.
- Analytics/marketing scripts (Zendesk/SumoMe/Facebook Pixel/Adobe) likely set their own cookies (third-party behavior).

**Browser Compatibility Hacks**
- IE6/IE7 PNG fixes via `behavior:url(http://merrow.com/cephei/scripts/iepngfix.htc)` in CSS (DROP).
- VML fallback for Cufon on IE (`ufon-yui.js`) (DROP).
- `* html` and IE-specific CSS hacks in `thickbox.css` and other stylesheets (DROP).
- QuickTime plugin detection and iPhone detection in `browserdetect.js` (DROP/replace with modern video).
- Google Maps v2 API usage (deprecated) (DROP/replace).
