# Legacy Support System — Functional Audit (Read-Only)

**Scope:** Legacy support/parts/manuals surfaces and their dependent widgets, based on files in `_LEGACY_REFERENCE/public_html/` and routing from `.htaccess`.

**Files audited**
- Core pages: `support.php`, `parts.php`, `parts_pricing.php`, `agent_book.php`
- Widgets: `widget_partsbooklist.php`, `widget_technical.php`, `widget_sd_menu.php`, `widget_main_google_menu.php`, `widget_merrow_advantage.php`, `widget_sub_formoreinformation.php`, `widget_sub_lilmap.php`, `widget_sub_partslist.php`, `widget_sub_partsmenu.php`, `widget_sub_partsmenu2ndchoice.php`, `widget_sub_noinfopartsmenu.php`, `widget_sub_partsdrawings.php`, `widget_sub_threading.php`, `widget_config_center_parts.php`, `widget_config_column_parts.php`, `widget_cp_salessupport.php`, `widget_partspricing.php`, `widget_servicecenter.php`, `widget_agent_book.php`
- Threading directory: `threading/` (static HTML + GIFs)
- DB connection: `Connections/merrowco.php`, `widget_sql.php`, `ip_lang_database.php`, `widget_sub_configheader.php`

**Primary databases referenced**
- `merrowco_inventory` (main public support/parts data)
- `merrowco_cephei` (admin/config tables via phpMyEdit)
- `merrowco_dynamicpages` (defined in `Connections/merrowco.php`, not used by files in scope)

---

## Core Pages

### 1) `support.php`

**Route/URL triggers**
- Direct: `/support.php`
- Rewrites (from `.htaccess`): `/support/class/{class}/key/{key}` → `support.php?class=$1&key=$2`; `/support/class/{class}/mediakeyword/{mediakeyword}` → `support.php?class=$1&mediakeyword=$2`; `/support/diagram/{diagram}/showthemapicture/{show}` → `support.php?diagram=$1&showthemapicture=$2`
- Also accessible via `/support.html` (generic `.html → .php` rewrite)

**Query params consumed**
- `class` → `$mval` (technical class)
- `key` → `$noodle` (column name in `technical` table)
- `mediakeyword` → `$mkw` (used to look up parts book in `asin` table)
- `diagram` → `$diagram` (threading image filename)
- `showthemapicture` → `$showthemapicture` (gates diagram rendering)
- `lang` → language cookie handling

**DB queries**
- `SELECT distinct * FROM technical WHERE class='$mval'`
- `SELECT distinct * FROM asin WHERE media_keyword='$mkw'` (only in `<title>` block and for parts-book content in widget)

**Includes/widgets**
- `ip_lang_database.php` (DB connect + language + agent lookup)
- `widget_main_google_menu.php` (top nav)
- `widget_sd_menu.php` (left nav)
- `widget_technical.php` (center content)
- `widget_partsbooklist.php` (right rail documentation list)
- `widget_footer.php`, `widget_analytics.php`

**Rendered output**
- 3-column layout: Left = SD menu; Center = technical content; Right = documentation list.
- `<title>` logic: if `class != 'key'` uses “Merrow Sewing Machines {class} technical information”; if `class == 'key'` uses “The Merrow Sewing Machine {msmc_id} interactive Parts Book”.

**Edge cases / quirks**
- `lang` handling uses `elseif ($scrub = null)` and `$lang = '$nifty'` (string literal) — cookie fallback is likely broken.
- If `class` is empty, `technical` query returns empty → widget outputs default welcome/help text.
- `key` is used as a dynamic column name (`$juju[$noodle]`); invalid keys yield empty content.
- `showthemapicture=ohyeah` + `diagram` triggers threading diagram render in `widget_technical`.

---

### 2) `parts.php`

**Route/URL triggers**
- Direct: `/parts.php?cp={ot_id}`
- Rewrites: `/parts/{cp}/{mmc_code}` → `parts.php?cp=$1&mmc_code=$2` (note: `mmc_code` is ignored in `parts.php`)

**Query params consumed**
- `cp` (required): order code, mapped to `asin.ot_id`
- `audience` (optional): `public` (default) or `private`
- `lang` (optional): language cookie handling

**DB queries**
- `SELECT * FROM asin WHERE ot_id='$cp'`

**Includes/widgets**
- `widget_sql.php` (DB connect)
- `ip_lang_database.php` (language + agent lookup)
- `widget_main_google_menu.php`
- `widget_merrow_advantage.php`
- `widget_footer.php`, `widget_analytics.php`

**Rendered output**
- Product detail page: title (product_name + header), main image, up to 4 video/image thumbs (driven by `number_of_thumbs` and `msmc_id`), specs box (`display_length`, `display_width`, `display_height`), pricing block, description, “Read More” + contact link.

**Edge cases / quirks**
- If `asin.mmc_id` is empty, redirects to `http://www.merrow.com/404`.
- `audience` defaults to `public` unless explicitly `private`.
- Language cookie logic has the same bug as `support.php` (string literal in fallback).

---

### 3) `parts_pricing.php`

**Route/URL triggers**
- Direct: `/parts_pricing.php`

**Query params consumed**
- `logoff` (clears session)
- `lang` (language cookie)

**DB queries**
- `SELECT * FROM customer_forms WHERE customer_service_agent='not-assigned'`
- `SELECT * FROM login_auth_global WHERE useremail='$name'`

**Includes/widgets**
- `ip_lang_database.php`
- `widget_partspricing.php` (phpMyEdit UI on `asin`)
- `widget_analytics.php`

**Rendered output**
- Internal admin pricing page with phpMyEdit table editor.

**Edge cases / quirks**
- If session missing/expired → redirects to `widget_merrow_agent_login.php`.
- If logged in but `login_auth_global.merrow` is empty → shows “not authorized” message.

---

### 4) `agent_book.php`

**Route/URL triggers**
- Direct: `/agent_book.php`
- Rewrites (from `.htaccess`): `/agent_book/kiwifruit/{kiwi}/language/{lang}/type/{type}/setnum/{setnum}/setnam/{setnam}` and `/agent_book/kiwifruit/{kiwi}/language/{lang}/setnum/{setnum}/setnam/{setnam}/type/{type}` map to `agent_book.php?kiwifruit=...&language=...&type=...&setnum=...&setnam=...`.

**Query params consumed**
- `kiwifruit`, `language`, `type`, `setnum`, `setnam` (manual/book metadata)
- `diagram`, `showthemapicture` (threading diagram viewer)
- `stitch` (unused here but read)
- `lang` (language cookie)

**DB queries**
- `SELECT * FROM threading_diagrams WHERE image='$diagram'` (when `showthemapicture=ohyeah`)

**Includes/widgets**
- `ip_lang_database.php` (DB connect + agent lookup + language)
- `widget_main_google_menu.php` **or** `widget_int_main_menu` (selected by `$val` from `ip_lang_database`)
- `widget_leftmainmenu.php`
- `widget_agent_book.php` (main content)
- `widget_partsbooklist.php` (right rail)
- `widget_analytics.php`

**Rendered output**
- 3-column layout: Left = site menu; Center = manual viewer / threading diagram / default prompt; Right = documentation list.

**Edge cases / quirks**
- If `kiwifruit` is empty, shows default “manual_front” image and a generic header.
- If `showthemapicture=ohyeah` but `diagram` not found, diagram header is empty.
- `$val` used to select menu comes from `ip_lang_database` (country/party lookup).

---

## Widgets (Behavioral Detail)

### `widget_partsbooklist.php`

**Triggered by**
- Included in `support.php` and `agent_book.php`.

**Params**
- `marketplace` (if `ebay`, suppresses output)
- Uses `$_SERVER['REQUEST_URI']` (suppresses output if `/nebula/sable/ebay.php`)

**DB queries**
- `SELECT * FROM threading_diagrams` (uses `name`, `img_url`, `image`)

**Rendered output**
- “Merrow Documentation” box with select menus for threading diagrams, parts books, instruction manuals, and butt seam books, plus footer links to `merrow_stitching.php` and `contact_general.php`.

**Edge cases / quirks**
- If `marketplace=ebay` or URI is `/nebula/sable/ebay.php` → widget renders nothing.
- Threading diagram `<option>` value uses `<?$_SERVER['HTTP_REFERER'];?>` (missing `echo`), so the base URL may be empty in practice.

---

### `widget_technical.php`

**Triggered by**
- Included in `support.php` center column.

**Params**
- Uses `class` and `key` (`$mval`, `$noodle`) from parent request.
- Uses `mediakeyword` via `$huhu` (from parent `asin` query) when parts-book flow is active.
- Uses `diagram` + `showthemapicture` for threading diagrams.

**DB queries**
- `SELECT distinct * FROM technical WHERE class='$mval'` (duplicate of parent query).
- `SELECT * FROM threading_diagrams WHERE image='$diagram'` (when `showthemapicture=ohyeah`).

**Includes/widgets**
- `include($huhu['book_page'])` when `mediakeyword` is present (dynamic include from `asin.book_page`).

**Rendered output**
- If `class` present and `class != 'key'`: “you’re viewing: {class} class technical information” + body `technical[$key]`.
- If `mediakeyword` present: “you’re viewing: the {msmc_id} parts book” + included parts-book page.
- If `key=howto|thankyou|error`: special instructional/feedback messages.
- If `showthemapicture=ohyeah`: renders medium diagram image from `images.imerrow.com`.
- If no params: default welcome/support contact message.

**Edge cases / quirks**
- `key` determines the column name used from `technical`; invalid keys render empty.
- `include($huhu['book_page'])` assumes trusted local path stored in DB.

---

### `widget_sd_menu.php`

**Triggered by**
- Included in `support.php` left column.

**Params**
- None.

**DB queries**
- None.

**Rendered output**
- Static SDNMenu navigation for support content with hardcoded links.
- Classes covered: `MG`, `70`, `CROCHET` with “Setup & Maintenance”, “Troubleshooting”, and “Parts Book” sections.
- Uses SEO-friendly support routes and manual downloads (agent_book) plus stitch-sample links.

**Edge cases / quirks**
- Links include `support/class/key/mediakeyword/{code}` to trigger parts-book flow.

---

### `widget_main_google_menu.php`

**Triggered by**
- Included in `support.php` header.

**Params**
- None (relies on DB connection from `ip_lang_database.php`).

**DB queries**
- `SELECT style_key,style FROM machine_pages WHERE class_key = '{mkey}' AND publish='yes' ORDER BY style_key LIMIT ...`
- `SELECT * FROM application_categories, application_pages WHERE application_categories.app_key = application_pages.app_key AND publish='yes' AND application_pages.app_key = {app1} ORDER BY layout_order`

**Rendered output**
- Global header with logo, CSE search container (Google JS API), and multi-column mega-menu listing Sewing Machines (MG, 70, 72, Crochet classes), Sewing Applications (application categories and anchors), plus marketing, customer stories, and utility links.

**Edge cases / quirks**
- Relies on MySQL connection being open in the parent page before inclusion.

---

### `widget_merrow_advantage.php`

**Triggered by**
- Included in `parts.php` below the main product content.

**Params**
- Uses `$machine` from parent (product name).

**DB queries**
- None.

**Rendered output**
- Static marketing content about Merrow advantages and service, including Raven table configuration thumbnails, heritage/durability/versatility sections, and sales/support/service blocks with links into support and agent map.

---

### `widget_sub_partslist.php`

**Triggered by**
- Direct access from part menus: `widget_sub_partslist.php?...`

**Params**
- `amzn` (asin_id)
- `rail`, `parts` (menu selection)
- `section` (if `4`, shows “we are still building” message)

**DB queries**
- `SELECT distinct * FROM joinpd,pd_ref WHERE joinpd.pd = pd_ref.pd AND joinpd.asin_id='$amzn' GROUP BY pd_img`
- `SELECT distinct * FROM joinpd,asin WHERE asin.asin_id = joinpd.asin_id AND joinpd.pd='$mumu'`

**Rendered output**
- Menu include based on `rail`/`parts`/`show_what`, plus assembly drawings and a parts list table (image, name, MMC id, MSRP, Amazon link).

**Edge cases / quirks**
- `if ($juju['show_what'] ='4')` uses assignment, so the condition always evaluates truthy; may force the parts menu.
- `if ($rowing['pd']=null)` is assignment; likely always falsey/truey incorrectly.
- If no drawings, it prints “we do not have assembly drawings this part”.

---

### `widget_sub_partsmenu.php`

**Triggered by**
- Included by parts-related widgets/pages.

**Params**
- `amzn` (asin_id)
- Uses `$juju` context (expects `media_keyword`, `media_setnumber`, `asin_id`, `show_what`)

**DB queries**
- None.

**Rendered output**
- Menu links to `widget_sub_partsdrawings.php`, `widget_sub_partslist.php`, `widget_sub_formoreinformation.php`, and `widget_sub_lilmap.php`.

---

### `widget_sub_partsmenu2ndchoice.php`

**Triggered by**
- Secondary menu option for parts.

**Params**
- `amzn` (asin_id)
- Uses `$juju` context (same as above)

**DB queries**
- None.

**Rendered output**
- Menu links to `widget_lilneedles.php`, `widget_sub_lilstitch.php`, `widget_sub_formoreinformation.php`, and `widget_sub_lilmap.php`.

---

### `widget_sub_formoreinformation.php`

**Triggered by**
- Linked from part menus (description/specs).

**Params**
- `mediakeyword` or `amzn` (asin_id); falls back to referrer-derived ID.
- `rail`, `parts`, `keepmap` (menu selection).

**DB queries**
- `SELECT * FROM asin WHERE media_keyword='$munt'` or `SELECT * FROM asin WHERE asin_id='$hunt'`.

**Includes/widgets**
- Depending on `rail`, `parts`, or `show_what`: `widget_sub_partsmenu.php`, `widget_sub_partsmenu2ndchoice.php`, `widget_sub_refmenu.php`, `widget_sub_machinemenu.php`.

**Rendered output**
- Shows menu and a contact/help prompt (“call 800.431.6677 or email”).

**Edge cases / quirks**
- If neither `mediakeyword` nor `amzn` provided, uses last 10 chars of referrer URL.

---

### `widget_sub_lilmap.php`

**Triggered by**
- Linked from part menus (“Find a Local Agent”).

**Params**
- `mediakeyword` or `amzn` (asin_id); falls back to referrer-derived ID.
- `rail`, `parts`, `keepmap`, `section` (menu selection).

**DB queries**
- `SELECT * FROM asin WHERE media_keyword='$munt'` or `SELECT * FROM asin WHERE asin_id='$hunt'`.
- Indirect: calls `phpsqlsearch_genxml.php` to fetch map markers (server-side DB not shown here).

**Includes/widgets**
- Depending on `rail`, `parts`, or `show_what`: `widget_sub_partsmenu.php`, `widget_sub_partsmenu2ndchoice.php`, `widget_sub_refmenu.php`, `widget_sub_machinemenu.php`.

**Rendered output**
- Google Maps (v2) dealer locator with address/ZIP input, radius dropdown (25/100/200), sidebar results list, and map markers.

**Edge cases / quirks**
- If no results, sidebar shows “no results” message and map recenters to US.

---

### `widget_sub_noinfopartsmenu.php`

**Triggered by**
- “No info” parts menu variant.

**Params**
- `amzn` (asin_id), `section`
- Uses `$juju` context

**DB queries**
- None.

**Rendered output**
- Minimal menu linking to `widget_sub_formoreinformation.php` and `widget_sub_lilmap.php`.

---

### `widget_sub_partsdrawings.php`

**Triggered by**
- Direct link from menus: `widget_sub_partsdrawings.php?...`

**Params**
- `amzn` (asin_id)
- `section` (if `4`, shows “still building list”)
- `rail`, `parts` (menu selection)
- `keyword`, `mediakeyword` are read but not used

**DB queries**
- `SELECT distinct msmc_id FROM asin WHERE asin.asin_id='$amzn'`
- `SELECT distinct * FROM joinpd,pd_ref WHERE joinpd.pd = pd_ref.pd AND joinpd.asin_id='$amzn' GROUP BY pd_img`

**Rendered output**
- Menu include (rail/parts/machine), instructions block using `asin.msmc_id`, main assembly diagram (lightbox), and “other assemblies” thumbnails.

**Edge cases / quirks**
- If no drawings, prints “we do not have assembly drawings for the {msmc_id}”.
- The “other assemblies” loop uses `$result` (msmc_id query) instead of `$result1`; likely renders nothing.

---

### `widget_sub_threading.php`

**Triggered by**
- Thickbox link in `widget_agent_book.php`.

**Params**
- `diagram` (image filename)

**DB queries**
- None.

**Rendered output**
- `<img>` pointing to `http://images.imerrow.com/images/threadingdiagrams/large/{diagram}`.

---

### `widget_config_center_parts.php`

**Triggered by**
- Admin/config usage (not public-facing).

**Params**
- Uses `$_COOKIE['dbname']` via `widget_sub_configheader.php` to pick table.

**DB queries**
- phpMyEdit against `merrowco_cephei.{dbname}`.

**Rendered output**
- Admin editor for `custom_center_product{1-4}_name`, `custom_center_product{1-4}_description`, `custom_center_product{1-4}_price`.

---

### `widget_config_column_parts.php`

**Triggered by**
- Admin/config usage (not public-facing).

**Params**
- Uses `$_COOKIE['dbname']` via `widget_sub_configheader.php` to pick table.

**DB queries**
- phpMyEdit against `merrowco_cephei.{dbname}`.

**Rendered output**
- Admin editor for `custom_product{1-8}_name`, `custom_product{1-8}_description`, `custom_product{1-8}_price`.

---

### `widget_cp_salessupport.php`

**Triggered by**
- Included in sales/support pages.

**Rendered output**
- Static “International Support” block with image links to `/agentmap.html` and `/contact_general.html`.

---

### `widget_partspricing.php`

**Triggered by**
- Included in `parts_pricing.php`.

**DB queries**
- phpMyEdit on `merrowco_inventory.asin`.

**Rendered output**
- Internal pricing editor with sortable/filterable list. Fields shown: `ot_id` (Order Code, links to `/parts.php?cp=$value&audience=private`), `msmc_id`, `product_name`, `brand`, `mrsp`, `mmc_id`.

---

### `widget_servicecenter.php`

**Triggered by**
- Included in service/support pages.

**Rendered output**
- Static image grid linking to `applications/app/decorative/`, `announcements/party_id/767911/drawers4/a`, `www.merrowing.com`, and `stitch.html`.

---

### `widget_agent_book.php`

**Triggered by**
- Included in `agent_book.php`.

**Params**
- `kiwifruit`, `language`, `type`, `setnum`, `setnam` (manual viewer)
- `diagram`, `showthemapicture` (threading diagram)
- `stitch` (read but unused)

**DB queries**
- `SELECT * FROM threading_diagrams WHERE image='$diagram'` (when `showthemapicture=ohyeah`)

**Rendered output**
- Header text determined by `{type} {kiwifruit} {language}` combinations.
- If `diagram` and `showthemapicture=ohyeah`: renders threading diagram + name.
- Else if `kiwifruit` provided: embeds PictoBrowser (Flickr) viewer for `setnum`/`setnam`.
- Else: shows default manual cover image.

---

## Threading Directory (`/threading/`)

**Contents**
- Static `.htm` files that display a single `.gif` threading diagram from the same folder.
- Example file pattern: `thread-no31-style60.htm` → `<img src="no31s60.gif">`, `thread-no78-stylemg3u.htm` → `<img src="no78MG-3U.gif">`.

**Behavior**
- No PHP, no DB. Pure static HTML + image.
- Not directly linked by `support.php` or `agent_book.php`; the support flow uses `threading_diagrams` images hosted at `images.imerrow.com`.

---

## DB Dependency Table

| DB | Table | Columns Referenced | Used By | Notes |
|---|---|---|---|---|
| `merrowco_inventory` | `technical` | `class`, dynamic column via `key` (e.g., `$juju[$noodle]`) | `support.php`, `widget_technical.php` | `key` param determines column read. |
| `merrowco_inventory` | `asin` | `ot_id`, `mmc_id`, `product_name`, `msmc_id`, `header`, `description`, `imgurl_large`, `number_of_thumbs`, `display_length`, `display_width`, `display_height`, `mrsp`, `contact_stitch`, `media_keyword`, `book_page`, `asin_id`, `imgurl_tiny`, `bullet_point_2`, `amzn_url`, `brand` | `parts.php`, `support.php`, `widget_sub_partslist.php`, `widget_sub_partsdrawings.php`, `widget_partspricing.php` | Primary product/parts table. |
| `merrowco_inventory` | `threading_diagrams` | `name`, `img_url`, `image` | `widget_partsbooklist.php`, `widget_agent_book.php`, `widget_technical.php` | Drives diagram list + diagram display. |
| `merrowco_inventory` | `machine_pages` | `style_key`, `style`, `class_key`, `publish` | `widget_main_google_menu.php` | Header mega-menu machines list. |
| `merrowco_inventory` | `application_categories` | `app_key` | `widget_main_google_menu.php` | Joined with application_pages for menu lists. |
| `merrowco_inventory` | `application_pages` | `app_key`, `publish`, `layout_order`, `d_key`, `app_menu_title` | `widget_main_google_menu.php` | Header mega-menu applications list. |
| `merrowco_inventory` | `language` | `language`, `stitch_selector_2`, `stitch_selector_3` | `ip_lang_database.php`, `widget_partsbooklist.php` | Also used by other pages for translations. |
| `merrowco_inventory` | `agents` | `party_id` (plus other columns loaded via `SELECT *`) | `ip_lang_database.php` | `party_id` derived from IP or `party_id` param. |
| `merrowco_inventory` | `joinpd` | `pd`, `asin_id` | `widget_sub_partslist.php`, `widget_sub_partsdrawings.php` | Join table between parts and drawings. |
| `merrowco_inventory` | `pd_ref` | `pd`, `pd_img`, `pdurl_large`, `pdurl_medium`, `pdurl_tiny` | `widget_sub_partslist.php`, `widget_sub_partsdrawings.php` | Diagram metadata. |
| `merrowco_inventory` | `customer_forms` | `customer_service_agent` | `parts_pricing.php` | Internal queue check. |
| `merrowco_inventory` | `login_auth_global` | `useremail`, `merrow` | `parts_pricing.php` | Admin auth gate. |
| `merrowco_cephei` | `{cookie:dbname}` | `custom_center_product{1-4}_*` | `widget_config_center_parts.php` | Admin config, table name from cookie. |
| `merrowco_cephei` | `{cookie:dbname}` | `custom_product{1-8}_*` | `widget_config_column_parts.php` | Admin config, table name from cookie. |
| `merrowco_dynamicpages` | (unknown) | (none in scope) | `Connections/merrowco.php` | Defined but not used by audited files. |

---

## Parameter Matrix (URL → Params → Behavior)

| URL / Route | Params | Behavior |
|---|---|---|
| `/support.php` | `class`, `key`, `mediakeyword`, `diagram`, `showthemapicture`, `lang` | Renders support hub; `class` + `key` pull technical content; `mediakeyword` resolves parts book; `diagram` + `showthemapicture=ohyeah` shows threading diagram. |
| `/support/class/{class}/key/{key}` | `class`, `key` | Loads `technical.class=class` and displays column `key`. |
| `/support/class/{class}/mediakeyword/{mediakeyword}` | `class`, `mediakeyword` | Loads `technical.class=class`; uses `asin.media_keyword` for parts-book data. |
| `/support/diagram/{diagram}/showthemapicture/{show}` | `diagram`, `showthemapicture` | Shows threading diagram in center panel if `showthemapicture=ohyeah`. |
| `/parts.php` | `cp`, `audience`, `lang` | Loads `asin` by `ot_id=cp` and renders parts detail page. |
| `/parts/{cp}/{mmc_code}` | `cp`, `mmc_code` | Same as `/parts.php?cp=...`; `mmc_code` ignored. |
| `/parts_pricing.php` | `logoff`, `lang` | Internal admin pricing table; requires session + auth. |
| `/agent_book.php` | `kiwifruit`, `language`, `type`, `setnum`, `setnam`, `diagram`, `showthemapicture`, `lang` | Manual viewer; if `showthemapicture=ohyeah` shows diagram, else embeds Flickr set or shows default image. |
| `/agent_book/kiwifruit/{kiwi}/language/{lang}/type/{type}/setnum/{setnum}/setnam/{setnam}` | same as above | SEO-friendly route for manuals/parts books. |
| `/agent_book/kiwifruit/{kiwi}/language/{lang}/setnum/{setnum}/setnam/{setnam}/type/{type}` | same as above | Alternate order rewrite. |
| `/widget_sub_partsdrawings.php` | `amzn`, `section`, `rail`, `parts` | Shows assembly drawings for a given `asin_id`. |
| `/widget_sub_partslist.php` | `amzn`, `section`, `rail`, `parts` | Shows parts list for assembly drawings. |
| `/widget_sub_threading.php` | `diagram` | Renders large threading diagram image. |
| `/widget_sub_formoreinformation.php` | `mediakeyword` or `amzn`, `rail`, `parts`, `keepmap` | Shows description/specs menu and contact prompt for the current part. |
| `/widget_sub_lilmap.php` | `mediakeyword` or `amzn`, `rail`, `parts`, `keepmap`, `section` | Dealer locator map using Google Maps + `phpsqlsearch_genxml.php` marker feed. |

---

## External Dependencies

**Threading diagram CDN**
- Host: `images.imerrow.com`.
- URL patterns: `http://images.imerrow.com/images/threadingdiagrams/medium/{diagram}` (used in `widget_technical.php`, `widget_agent_book.php`), `http://images.imerrow.com/images/threadingdiagrams/large/{diagram}` (used in `widget_sub_threading.php`), `http://images.imerrow.com/images/manual_front.png` (default manual image in `widget_agent_book.php`).
- Referenced in support flow: `widget_technical.php`, `widget_agent_book.php`, `widget_sub_threading.php`. No other support files reference this host.

**PictoBrowser / Flickr embed**
- Embed SWF: `http://www.db798.com/pictobrowser.swf`.
- Flickr account: `userName=merrowmachine`, `userId=25997048@N06`.
- Source: `sets` with `ids={setnum}` and `names={setnam}` from URL params.
- Used in `widget_agent_book.php` for manuals/parts books.

**Other external URLs referenced in support files**
- Stylesheets: `http://css.imerrow.com/css_major/...` and `http://css.imerrow.com/...` (base_vimeo, index_vimeo, whole_vimeo, thickbox, sdnm_36, added_parts, menu, hoverbox, lightbox, contact_general).
- JS: `http://merrow.com/cephei/scripts/...` (jquery, thickbox, lightbox, SDNMenu, IE7 scripts, lightwindow).
- Google JS API: `http://www.google.com/jsapi` (CSE in header), `http://www.google.com/jsapi?key=...` (Maps v2 in `widget_sub_lilmap.php`).
- Map markers feed: `phpsqlsearch_genxml.php` (relative endpoint used by `widget_sub_lilmap.php`).
- Media/CDN assets: `http://merrowservices.s3.amazonaws.com/...` (services_cleanup.css, product/support imagery), `http://merrow-media.s3.amazonaws.com/...` (menu graphics, customer stories imagery), `http://decorativeedging.s3.amazonaws.com/...` (parts page video thumbs + pricing UI image), `http://hydestore.com/.../lightwindow.css` (parts page lightwindow styling).
- External links: `http://store.merrow.com/...`, `http://www.merrowing.com`, `http://travels.merrow.com`, `http://blog.merrow.com`, `http://www.youtube.com/user/merrowmachine`.
- Comment/documentation references: `http://www.chazzuka.com/blog`, `http://platon.sk/projects/main_page.php?project_id=5`, `http://www.dynamicdrive.com`, `http://dean.edwards.name/IE7/`.

## Data Enumeration Needed

- All distinct `class` values in `technical` (valid `{class}` values for support routes).
- All column names in `technical` (valid `{key}` values for support content).
- All `ot_id` values in `asin` (valid parts codes for `/parts/{cp}/{mmc_code}` and `/parts.php?cp=...`).
- All rows in `threading_diagrams` (diagram name/image inventory for selector and diagrams).

## Acceptance Criteria (Testable)

1. `GET /support.php` with no params shows the default “welcome to Merrow's technical help guide” message and contact info.
2. `GET /support/class/70/key/setup` displays `technical.class=70` and outputs the `setup` column value.
3. `GET /support/diagram/no78MG-3U.gif/showthemapicture/ohyeah` renders the medium threading diagram image (from `images.imerrow.com`).
4. `GET /parts/70d3b2/ANY` loads `asin.ot_id=70d3b2` and renders product name, header, description, and image.
5. `GET /parts.php?cp=70d3b2&audience=public` shows “Please Contact your Merrow Agent for Pricing”.
6. `GET /parts.php?cp=70d3b2&audience=private` shows `asin.mrsp` as the price.
7. If `asin.mmc_id` is empty for a `cp`, `parts.php` redirects to `http://www.merrow.com/404`.
8. `GET /agent_book/kiwifruit/partsbook/language/english/type/MG/setnum/{id}/setnam/{name}` embeds the Flickr/PictoBrowser viewer for the specified set.
9. `GET /agent_book.php?diagram=no78MG-3U.gif&showthemapicture=ohyeah` shows “Thread Diagram Number: {name}” and the diagram image from `threading_diagrams`.
10. `GET /parts_pricing.php` without a valid `exp_user` session redirects to `widget_merrow_agent_login.php`.

---

## STORAGE/support (Ticketing System) — Scope Decision

**Finding:** The directory `_LEGACY_REFERENCE/public_html/STORAGE/support/` contains a full Support-Logic ticketing system (`index.php`, `admin.php`, `staff.php`, modules, install). There are no references to `/STORAGE/support` in the core support/parts pages, their widgets, or `.htaccess` rewrites.

**Conclusion:** This appears to be internal-only and not part of the public support flow. Marked out-of-scope for parity refactor unless a future requirement explicitly calls for public exposure or redirects into that system.

