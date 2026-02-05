# Legacy Machines & Applications — Functional Audit (Read-Only)

**Scope:** Legacy machine detail pages, category pages, application pages, and their dependent widgets, based on files in `_LEGACY_REFERENCE/public_html/` and routing from `.htaccess`.

## Scope + Files Audited

Core pages
- `_LEGACY_REFERENCE/public_html/mg_1.php`
- `_LEGACY_REFERENCE/public_html/mg_2.php`
- `_LEGACY_REFERENCE/public_html/ncp1.php`
- `_LEGACY_REFERENCE/public_html/a.php`
- `_LEGACY_REFERENCE/public_html/nap.php`
- `_LEGACY_REFERENCE/public_html/nmp.php`
- `_LEGACY_REFERENCE/public_html/nfp.php`
- `_LEGACY_REFERENCE/public_html/70class.php`
- `_LEGACY_REFERENCE/public_html/mgclass.php`
- `_LEGACY_REFERENCE/public_html/machine_prices.php`

Widgets and shared includes
- `_LEGACY_REFERENCE/public_html/widget_cms_machines.php`
- `_LEGACY_REFERENCE/public_html/widget_cms_applications.php`
- `_LEGACY_REFERENCE/public_html/widget_cms_cat_applications.php`
- `_LEGACY_REFERENCE/public_html/widget_compare.php`
- `_LEGACY_REFERENCE/public_html/widget_sub_productmenu_us.php`
- `_LEGACY_REFERENCE/public_html/widget_new_sql_genpageload.php`
- `_LEGACY_REFERENCE/public_html/widget_new_metadata.php`
- `_LEGACY_REFERENCE/public_html/widget_new_styles.php`
- `_LEGACY_REFERENCE/public_html/widget_js.php`
- `_LEGACY_REFERENCE/public_html/site.js`
- `_LEGACY_REFERENCE/public_html/header_test.php`
- `_LEGACY_REFERENCE/public_html/widget_cp_70nav.php`
- `_LEGACY_REFERENCE/public_html/widget_cp_railbrands.php`
- `_LEGACY_REFERENCE/public_html/widget_merrow_portable_advantage.php`
- `_LEGACY_REFERENCE/public_html/widget_merrow_overlock_advantage.php`
- `_LEGACY_REFERENCE/public_html/widget_main_menu.php`
- `_LEGACY_REFERENCE/public_html/widget_feet.php`
- `_LEGACY_REFERENCE/public_html/widget_footer_js.php`
- `_LEGACY_REFERENCE/public_html/widget_footer.php`
- `_LEGACY_REFERENCE/public_html/widget_analytics.php`

Routing
- `_LEGACY_REFERENCE/public_html/.htaccess` (lines 59-136)

DB connection files
- `Connections/merrowco.php`, `widget_sql.php`, `ip_lang_database.php` (already documented in `_AUDIT/SUPPORT_FUNCTIONAL_SPEC.md`)

## Primary Databases Referenced

- `merrowco_inventory` (primary public data for machines and applications)
- `merrowco_cephei` (language/agent support via `ip_lang_database.php`, documented in `_AUDIT/SUPPORT_FUNCTIONAL_SPEC.md`)
- `merrowco_dynamicpages` (defined in `Connections/merrowco.php`, not used by files in scope)

## Core Pages

### 1) `mg_1.php` — Machine Detail (primary)

**Route/URL triggers**
- Direct: `/mg_1.php?cp={style_key}`
- Rewrites: `/Overlock_Sewing_Machines/Continuous_Processing/{style_key}` → `mg_1.php?cp=$1`
- Rewrites: `/Sergers_and_Overlock_Sewing_Machines/Emblem_Edging/{style_key}` → `mg_1.php?cp=$1`
- Rewrites: `/Sergers_and_Overlock_Sewing_Machines/{style_key}` → `mg_1.php?cp=$1`
- Rewrites: `/crochet-sewing-machines/{style_key}` → `mg_1.php?cp=$1`
- Rewrites: `/70class/cp/{style_key}` → `mg_1.php?cp=$1`

**Query params consumed**
- `cp` → `$cp` → `machine_pages.style_key` lookup
- `lang` → `$scrub` → language cookie handling

**DB queries**
- `SELECT * FROM machine_pages WHERE style_key='$cp'`
- Fallbacks on missing or mismatched `style_key`
- `SELECT * FROM machine_pages WHERE style_key='mg3u'`
- Applications for this machine
- `SELECT * FROM application_pages WHERE style_key='$style_key' AND publish='yes' ORDER BY layout_order`

**Includes/widgets**
- `ip_lang_database.php`, `widget_sql.php`
- `widget_new_styles.php`, `widget_js.php`, `widget_analytics.php`, `site.js`
- `header_test.php`
- Conditional: `widget_cp_70nav.php`, `widget_cp_railbrands.php`
- Conditional: `widget_merrow_advantage.php` or `widget_merrow_portable_advantage.php` or `widget_merrow_overlock_advantage.php`
- `widget_feet.php`, `widget_footer_js.php`

**Rendered output**
- Hero: machine name and header, main image from `merrow-media.s3.amazonaws.com/product-pages/{style_key}_main.jpg`
- Thumbnail gallery based on `number_of_thumbs` (0-4) with `thumb{n}` and `thumb{n}x` images and `rel=prettyPhoto`
- Specs table: speed, stitch width/range, needle info, stitch type, motor, threads
- Video section
- If `number_of_videos` is `null` or `0`, shows placeholder “coming soon” thumbnail
- If `number_of_videos` is `1`, uses `youtube1`, `video_tagline1`
- If `number_of_videos` >= 2, shows two videos using `youtube1/2`
- Description block with `description` and links
- Contact link uses `contact_stitch` to build `/contact_general.php?label={contact_stitch}&key=samples`
- Applications strip when `application_pages` exists, image tiles linking to `/sewing/applications/{app_key}/#{d_key}`
- Advantage section using `overview`, `why`, `how`, `where`
- Special-case blocks
- `70-D3B-2` adds “Fabrics & Processes”, 70-variation nav, and cp graphic
- `70-D3B-2 RAIL` adds rail brands + iframe `/widget_cp_enventory.php` and skips stitch gallery
- Other machines show PictoBrowser stitch gallery for Flickr set `flickr_set`
- Marketing downloads block if `marketing_url1` is present; up to 5 icon + tagline + URL entries

**Edge cases / quirks**
- Language cookie logic uses `elseif ($scrub = null)` and `$lang = '$nifty'` (literal string), likely broken
- If `cp` missing or not found, falls back to `style_key='mg3u'`
- Application tile markup contains `<<` before `img` tag, producing invalid HTML
- If `cp` is `m3u` or `m3urefkit`, “why/how/where” block is skipped
- Uses `rel=prettyPhoto` but no prettyPhoto script is included on this page

### 2) `mg_2.php` — Compact Sewing Table Detail

**Route/URL triggers**
- Direct: `/mg_2.php?cp=70d3b2&sewing_table_style={am|cm|empty}`
- Rewrite: `/compact-professional-sewing-table` → `mg_2.php?cp=70d3b2`

**Query params consumed**
- `cp` → `$cp` → `machine_pages.style_key` lookup for `seo_keywords`
- `sewing_table_style` → `$nipples` → adjusts headings and copy
- `lang` → `$scrub` → language cookie handling

**DB queries**
- `SELECT * FROM machine_pages WHERE style_key='$cp'`
- Fallbacks: `SELECT * FROM machine_pages WHERE style_key='mg3u'`

**Includes/widgets**
- `ip_lang_database.php`, `widget_sql.php`
- `widget_new_styles.php`, `widget_js.php`, `widget_analytics.php`, `site.js`
- `header_test.php`
- `widget_feet.php`, `widget_footer_js.php`

**Rendered output**
- Static product page for “Merrow Helmsman Sewing Table” with OG/Twitter product meta
- Heading suffix depends on `sewing_table_style`
- `''` → “without Motor”
- `am` → “with Servo Motor”
- `cm` → “With 1/2 Horsepower Clutch Motor”
- Menu anchors: Advantages, Included Components, Alternate Views, Downloads, Contact Us
- Alternate view image uses `helmsman{sewing_table_style}_highres_02.jpg`
- Downloads list two PDFs on `merrow-media.s3.amazonaws.com`

**Edge cases / quirks**
- Language cookie logic same as `mg_1.php`
- `sewing_table_style` is used in file names without validation
- Included Components section is commented out in HTML

### 3) `ncp1.php` — Category Page (fashion, technical, end-to-end)

**Route/URL triggers**
- Direct: `/ncp1.php?a={f|t|e}`
- Rewrites
- `/fashion-sewing` → `ncp1.php?a=f`
- `/technical-sewing` → `ncp1.php?a=t`
- `/end-to-end-seaming` → `ncp1.php?a=e`

**Query params consumed**
- `a` → `$page_id` selection and variant rendering
- `lang` → handled via `widget_new_sql_genpageload.php`

**DB queries**
- Page metadata
- `SELECT * FROM seo_site_headers WHERE page_key='$page_id'`
- Machine lists
- `SELECT * FROM machine_pages WHERE e2e_key != '' AND publish='yes' ORDER BY e2e_key LIMIT 0,5`
- `SELECT * FROM machine_pages WHERE e2e_key != '' AND publish='yes' ORDER BY e2e_key LIMIT 5,5`
- `SELECT * FROM machine_pages WHERE e2e_key != '' AND publish='yes' ORDER BY e2e_key LIMIT 10,5`
- `SELECT * FROM machine_pages WHERE fashion_key != '' AND publish='yes' ORDER BY fashion_key LIMIT 0,5`
- `SELECT * FROM machine_pages WHERE fashion_key != '' AND publish='yes' ORDER BY fashion_key LIMIT 5,5`
- `SELECT * FROM machine_pages WHERE fashion_key != '' AND publish='yes' ORDER BY fashion_key LIMIT 10,5`
- `SELECT * FROM machine_pages WHERE technical_key != '' AND publish='yes' ORDER BY technical_key LIMIT 0,5`
- `SELECT * FROM machine_pages WHERE technical_key != '' AND publish='yes' ORDER BY technical_key LIMIT 5,5`
- `SELECT * FROM machine_pages WHERE technical_key != '' AND publish='yes' ORDER BY technical_key LIMIT 10,5`
- Application lists (fashion, technical, end-to-end)
- `SELECT * FROM application_categories, application_pages WHERE application_categories.app_key = application_pages.app_key AND publish='yes' AND application_pages.app_key = {app1} ORDER BY layout_order`

**Includes/widgets**
- `widget_new_sql_genpageload.php`
- `widget_new_metadata.php`
- `widget_new_styles.php`
- `widget_js.php`, `widget_analytics.php`, `site.js`
- `header_test.php`
- `widget_feet.php`

**Rendered output**
- Variant-specific top copy and hero images
- Featured customer story tiles per variant
- Machine lists split into columns
- End-to-end machines link to `/Overlock_Sewing_Machines/Continuous_Processing/{style_key}`
- Fashion and technical machines link to `/Sergers_and_Overlock_Sewing_Machines/{style_key}`
- Applications lists per variant using app keys
- Fashion: `5515`, `5516`, `5518`, `5522`, `5521`, `5525`
- Technical: `5514`, `5517`, `5519`, `5512`
- End-to-end: `5523`, `5513`, `5524`
- Social embeds: StumbleUpon badge and Facebook Like iframe
- Links to `/ncs1.php?s=csam|csrw|csb` for featured customer stories

**Edge cases / quirks**
- Machine list anchors append `#{$app_list['d_key']}` but `$app_list` is undefined in the machine loop
- If `a` is missing or not `e|f|t`, no `page_id` is set and most page sections are skipped

### 4) `a.php` — Application Detail (primary)

**Route/URL triggers**
- Direct: `/a.php?app={app_key}`
- Rewrite: `/sewing/applications/{app_key}` → `a.php?app=$1`

**Query params consumed**
- `app` → `$ap` → `application_categories.app_key` and `application_pages.app_key`
- `lang` → `$scrub` → language cookie handling

**DB queries**
- `SELECT * FROM application_categories WHERE app_key='$ap'`
- `SELECT app_nav_title, d_key FROM application_pages WHERE app_key='$ap' AND d_key != 'MASTER' AND publish='yes' ORDER BY layout_order LIMIT 0,3`
- Same query with `LIMIT 3,3` and `LIMIT 6,3`
- `SELECT * FROM application_pages WHERE app_key='$ap' AND d_key != 'MASTER' AND publish='yes' ORDER BY layout_order`
- Per app box: `SELECT page_key FROM machine_pages WHERE style_key='$style'`

**Includes/widgets**
- `ip_lang_database.php`, `widget_sql.php`
- `widget_new_styles.php`, `widget_js.php`, `widget_analytics.php`, `site.js`
- `header_test.php`
- `widget_feet.php`

**Rendered output**
- Meta tags from `application_categories` fields
- Page header with category name and “Applications” label
- AddThis share widget
- Anchor nav built from `app_nav_title` and `d_key` in 3 columns
- “Compare all” launches `/widget_compare.php?app={app_key}&iframe=true&width=1100&height=600` with `prettyPhoto[iframes]`
- Application cards
- Main application image from `merrow-media.s3.amazonaws.com/applications/{d_key}_main_400x360.jpg`
- “More Information” toggle with popup content and callout image
- Stitch image preview and hidden high-res stitch image
- Machine image linking to machine page determined by `machine_pages.page_key`
- `70` → `/Overlock_Sewing_Machines/Continuous_Processing/{style_key}`
- `EMBLEM` → `/Sergers_and_Overlock_Sewing_Machines/Emblem_Edging/{style_key}`
- `18` → `/Crochet/{style_key}`
- Else → `/Sergers_and_Overlock_Sewing_Machines/{style_key}`

**Edge cases / quirks**
- Language cookie logic uses `elseif ($scrub = null)` and `$lang = '$nifty'` (literal string)
- `machine_url` is used in a “buy” link but is not present in CMS field list
- HTML error: `<a href="..."<img ...>` missing `>`
- prettyPhoto JS is not included on this page

### 5) `nap.php` — Application Detail (alternate layout)

**Route/URL triggers**
- Direct: `/nap.php?app={app_key}`

**Query params consumed**
- `app` → `$ap`
- `lang` → `$scrub`

**DB queries**
- Same as `a.php`

**Includes/widgets**
- `ip_lang_database.php`, `widget_sql.php`
- `widget_new_styles.php`, `widget_js.php`, `widget_analytics.php`
- `header_test.php`
- `widget_feet.php`
- Adds `jquery.prettyPhoto.js` from `applicationpages.s3.amazonaws.com`

**Rendered output**
- Same core content as `a.php` but with prettyPhoto script included at page end

**Edge cases / quirks**
- Same `machine_url` HTML error as `a.php`
- `site.js` is not included in this variant

### 6) `nmp.php` — Machine Detail (alternate layout)

**Route/URL triggers**
- Direct: `/nmp.php?cp={style_key}`

**Query params consumed**
- `cp` → `$cp`
- `lang` → `$scrub`

**DB queries**
- Same as `mg_1.php`

**Includes/widgets**
- `ip_lang_database.php`, `widget_sql.php`
- `widget_new_styles.php`, `widget_js.php`, `widget_analytics.php`
- `header_test.php`
- Conditional: `widget_cp_70nav.php`, `widget_cp_railbrands.php`
- Conditional: `widget_merrow_advantage.php` or `widget_merrow_overlock_advantage.php`
- `widget_feet.php`
- Adds `jquery.prettyPhoto.js` from `applicationpages.s3.amazonaws.com`

**Rendered output**
- Same content model as `mg_1.php` with prettyPhoto initialized at page end

**Edge cases / quirks**
- Language cookie logic uses `elseif ($scrub = null)` and `$lang = '$nifty'` (literal string)
- Application image markup likely contains the same `<<` bug as `mg_1.php`

### 7) `nfp.php` — Feature Page (Stitch Lab)

**Route/URL triggers**
- Direct: `/nfp.php?app={app_key}`

**Query params consumed**
- `app` → `$ap`
- `form` → if `form=complete`, sets body id `thankyou`, else `daypass`
- `lang` → `$scrub`

**DB queries**
- `SELECT * FROM application_categories WHERE app_key='$ap'`

**Includes/widgets**
- `ip_lang_database.php`, `widget_sql.php`
- `widget_analytics.php`
- `header_test.php`

**Rendered output**
- Stitch Lab landing content, image tiles, and a long form
- Form posts to `widget_sub_datamover.php` with customer and material fields
- Includes Google Custom Search UI via `header_test.php`

**Edge cases / quirks**
- Language cookie logic uses `elseif ($scrub = null)` and `$lang = '$nifty'` (literal string)
- Form handler is not included in scope and must be audited separately

### 8) `70class.php` — 70 Class Machine Detail (legacy)

**Route/URL triggers**
- Direct: `/70class.php?cp={style_key}`

**Query params consumed**
- `cp` → `$cp`
- `lang` → `$scrub`

**DB queries**
- `SELECT * FROM machine_pages WHERE style_key='$cp'`
- Fallbacks: `SELECT * FROM machine_pages WHERE style_key='70d3b2'`

**Includes/widgets**
- `ip_lang_database.php`, `widget_sql.php`
- `widget_main_google_menu.php` (see `_AUDIT/SUPPORT_FUNCTIONAL_SPEC.md`)
- `widget_cp_70nav.php`, `widget_cp_railbrands.php`
- `widget_merrow_advantage.php` (see `_AUDIT/SUPPORT_FUNCTIONAL_SPEC.md`)
- `widget_footer.php`, `widget_analytics.php`

**Rendered output**
- Machine hero, specs, and media similar to `mg_1.php`
- Uses `continuousprocessing.s3.amazonaws.com` for images
- Includes PictoBrowser (Flickr) stitch gallery for `flickr_set`
- Includes marketing downloads section and advantage copy
- Adds many `search_*` meta tags, including `seo_search_description`, `seo_search_title`, `mrsp`, `ot_id`

**Edge cases / quirks**
- Language cookie logic uses `elseif ($scrub = null)` and `$lang = '$nifty'` (literal string)
- Uses multiple legacy CSS bundles from external domains

### 9) `mgclass.php` — MG Class Machine Detail (legacy)

**Route/URL triggers**
- Direct: `/mgclass.php?cp={style_key}`

**Query params consumed**
- `cp` → `$cp`
- `lang` → `$scrub`

**DB queries**
- `SELECT * FROM machine_pages WHERE style_key='$cp'`
- Fallbacks: `SELECT * FROM machine_pages WHERE style_key='m3u'`

**Includes/widgets**
- `ip_lang_database.php`, `widget_sql.php`
- `widget_main_menu.php`
- `widget_merrow_advantage.php` (see `_AUDIT/SUPPORT_FUNCTIONAL_SPEC.md`)
- `widget_footer.php`, `widget_analytics.php`

**Rendered output**
- Machine hero and specs similar to `70class.php` but themed to MG class
- Uses `decorativeedging.s3.amazonaws.com` assets
- Includes PictoBrowser (Flickr) stitch gallery for `flickr_set`

**Edge cases / quirks**
- Language cookie logic uses `elseif ($scrub = null)` and `$lang = '$nifty'` (literal string)
- Uses legacy CSS bundles and lightwindow CSS

### 10) `machine_prices.php` — Price List (agent-only)

**Route/URL triggers**
- Direct: `/machine_prices.php`

**Query params consumed**
- `m` → if `m=w`, `ot_id` links to internal CRM
- `lang` → `$scrub`

**DB queries**
- Auth check: `SELECT * FROM login_auth_agent WHERE username='$name'`
- `SELECT * FROM machine_pages WHERE publish='yes' AND class_key=70`
- `SELECT * FROM machine_pages WHERE publish='yes' AND class_key=72`
- `SELECT * FROM machine_pages WHERE publish='yes' AND class_key=6611`
- `SELECT * FROM machine_pages WHERE publish='yes' AND class_key=6612`
- `SELECT * FROM machine_pages WHERE publish='yes' AND class_key=6613`

**Includes/widgets**
- `ip_lang_database.php`
- `widget_analytics.php`

**Rendered output**
- Agent-only price list table
- Calculates wholesale and quantity discount prices as `price * 0.8` and `price * 0.7`
- Displays `style`, `description`, `installation`, and `ot_id`
- If `m=w`, `ot_id` is a link to internal CRM on `192.168.2.105`
- Includes Google Translate widget

**Edge cases / quirks**
- Requires session `exp_user` and `login_auth_agent.merrow` flag; otherwise redirects to `widget_merrow_agent_login.php`
- Language cookie logic uses `elseif ($scrub = null)` and `$lang = '$nifty'` (literal string)

## Widgets (Behavioral Detail)

### `widget_cms_machines.php`

**Triggered by**
- Direct access by agents or admins

**Params**
- `lang` cookie handling
- `logoff` clears session

**DB queries**
- Auth: `SELECT * FROM login_auth WHERE useremail='$name'`
- phpMyEdit on `machine_pages`

**Rendered output**
- phpMyEdit admin grid for `machine_pages`
- Field list includes `style`, `ot_id`, `description`, `style_key`, `class_key`, `page_key`, `publish`, `price`, `installation`, media and SEO fields, and marketing assets

**Edge cases / quirks**
- Requires `exp_user` session and `login_auth.merrow` flag
- Language cookie bug identical to other pages

### `widget_cms_applications.php`

**Triggered by**
- Direct access by agents or admins

**Params**
- `lang` cookie handling
- `logoff` clears session

**DB queries**
- Auth: `SELECT * FROM login_auth WHERE useremail='$name'`
- phpMyEdit on `application_pages`

**Rendered output**
- phpMyEdit admin grid for `application_pages`
- Field list includes `app_key`, `d_key`, `style_key`, `layout_order`, `publish`, `popup_*`, `app_*`, and material fields

**Edge cases / quirks**
- Requires `exp_user` session and `login_auth.merrow` flag
- Language cookie bug identical to other pages

### `widget_cms_cat_applications.php`

**Triggered by**
- Direct access by agents or admins

**Params**
- `lang` cookie handling
- `logoff` clears session

**DB queries**
- Auth: `SELECT * FROM login_auth WHERE useremail='$name'`
- phpMyEdit on `application_categories` (field list only includes `id`)

**Rendered output**
- phpMyEdit admin grid with minimal field configuration

**Edge cases / quirks**
- Requires `exp_user` session and `login_auth.merrow` flag

### `widget_compare.php`

**Triggered by**
- `/widget_compare.php?app={app_key}`
- Invoked from `a.php` compare link with `prettyPhoto[iframes]`

**Params**
- `app` → `$ap`

**DB queries**
- Repeated queries by `app_key` and `publish='yes'`
- `SELECT d_key, app_right_title FROM application_pages WHERE app_key='$ap' AND d_key!='MASTER' AND publish='yes' ORDER BY layout_order`
- `SELECT app_nav_title, d_key, app_right_title FROM application_pages WHERE app_key='$ap' AND d_key!='MASTER' AND publish='yes' ORDER BY layout_order`
- `SELECT seo_description FROM application_pages WHERE app_key='$ap' AND d_key!='MASTER' AND publish='yes' ORDER BY layout_order`
- `SELECT stitch_width FROM application_pages WHERE app_key='$ap' AND d_key!='MASTER' AND publish='yes' ORDER BY layout_order`
- `SELECT machine_speed FROM application_pages WHERE app_key='$ap' AND d_key!='MASTER' AND publish='yes' ORDER BY layout_order`
- `SELECT fabric_material FROM application_pages WHERE app_key='$ap' AND d_key!='MASTER' AND publish='yes' ORDER BY layout_order`
- `SELECT thread_number FROM application_pages WHERE app_key='$ap' AND d_key!='MASTER' AND publish='yes' ORDER BY layout_order`
- `SELECT machine_model FROM application_pages WHERE app_key='$ap' AND d_key!='MASTER' AND publish='yes' ORDER BY layout_order`
- `SELECT machine_price FROM application_pages WHERE app_key='$ap' AND d_key!='MASTER' AND publish='yes' ORDER BY layout_order`

**Rendered output**
- Columnar comparison table with stitch image, name, description, width, speed, fabric, threads, machine style, and price

**Edge cases / quirks**
- Includes CSS from `css.imerrow.com`
- No prettyPhoto JS included; assumes parent page provides it

### `widget_sub_productmenu_us.php`

**Triggered by**
- Included from `widget_main_menu.php`

**Params**
- None

**DB queries**
- Machines menu
- `SELECT * FROM machine_categories, machine_pages WHERE machine_categories.class_key = machine_pages.class_key AND publish='yes' AND machine_pages.class_key = {70|72|6611|6612|6613} ORDER BY style`
- Applications menu
- `SELECT * FROM application_categories, application_pages WHERE application_categories.app_key = application_pages.app_key AND publish='yes' AND application_pages.app_key = {5512|5513|5514|5515|5516|5517|5518|5519|5520|5523|5524} ORDER BY layout_order`

**Rendered output**
- Mega menu for Parts, Machines, and Applications
- Parts category list links to `store.merrow.com`
- Machine lists grouped by class
- Application lists grouped by app category with anchors to `d_key`

**Edge cases / quirks**
- Relies on `$tongue['menu_support']` for localization in parent menu

### `widget_new_sql_genpageload.php`

**Triggered by**
- Included from `ncp1.php`

**Params**
- `lang` cookie handling
- `app` stored in `$ap` but unused in this file

**DB queries**
- Establishes DB connection to `merrowco_inventory`

**Rendered output**
- None (side effects only)

**Edge cases / quirks**
- Language cookie bug identical to other pages

### `widget_new_metadata.php`

**Triggered by**
- Included from `ncp1.php`

**Params**
- `$page_id` must be set in the parent page

**DB queries**
- `SELECT * FROM seo_site_headers WHERE page_key='$page_id'`

**Rendered output**
- `<title>` and meta description/keywords
- OpenGraph tags and `fb:admins`

**Edge cases / quirks**
- Hardcoded OG image `mg3u_main.jpg` for all pages

### `widget_new_styles.php`

**Triggered by**
- Included by `mg_1.php`, `mg_2.php`, `ncp1.php`, `a.php`, `nap.php`, `nmp.php`

**Params**
- None

**DB queries**
- None

**Rendered output**
- Imports CSS from `css.imerrow.com` and IE7 fallback from `merrow-media.s3.amazonaws.com`

### `widget_js.php`

**Triggered by**
- Included by most public pages

**Params**
- None

**DB queries**
- None

**Rendered output**
- Includes jQuery 3.7.1 and `merrow.com/cephei/scripts/js_min.js`
- Cufon font replacements
- Zendesk widget, SumoMe, and Facebook Pixel
- Frame-busting script

### `site.js`

**Triggered by**
- Included by `mg_1.php`, `mg_2.php`, `ncp1.php`, `a.php`

**Params**
- `form` → toggles `#availableTitles` slide down when `form=complete`

**DB queries**
- None

**Rendered output**
- jQuery behaviors for stitch lab toggles and front-page fades
- Injects Facebook SDK script

### `header_test.php`

**Triggered by**
- Included by `mg_1.php`, `mg_2.php`, `ncp1.php`, `a.php`, `nap.php`, `nmp.php`, `nfp.php`

**Params**
- None

**DB queries**
- Machines mega menu, repeated queries by class
- `SELECT style_key, style FROM machine_pages WHERE class_key='6612' AND publish='yes' ORDER BY style_key LIMIT 0,4`
- Same for `LIMIT 4,4`, `LIMIT 8,4`, `LIMIT 12,4`, `LIMIT 16,4`
- `SELECT style_key, style FROM machine_pages WHERE class_key='6613' AND publish='yes' ORDER BY style_key LIMIT 0,4`
- `SELECT style_key, style FROM machine_pages WHERE class_key='70' AND publish='yes' ORDER BY style_key LIMIT 0,3`
- Same for `LIMIT 3,3`, `LIMIT 6,3`
- `SELECT style_key, style FROM machine_pages WHERE class_key='72' AND publish='yes' ORDER BY style_key LIMIT 0,4`
- `SELECT style_key, style FROM machine_pages WHERE class_key='6611' AND publish='yes' ORDER BY style_key LIMIT 0,3`
- Same for `LIMIT 3,3`
- Applications mega menu, repeated queries by app key
- `SELECT * FROM application_categories, application_pages WHERE application_categories.app_key = application_pages.app_key AND publish='yes' AND application_pages.app_key = {6621|5514|5516|5512|5519|5515|5517|5518|5520|5523|5513|5524} ORDER BY layout_order`

**Rendered output**
- Top promo bar linking to ActiveSeam
- Logo and right nav links
- Search box tied to Google Custom Search
- Mega menus for machines and applications with dynamic lists

**Edge cases / quirks**
- Assumes DB connection already open in parent include

### `widget_cp_70nav.php`

**Triggered by**
- Included in `mg_1.php`, `nmp.php`, `70class.php`

**Params**
- None

**DB queries**
- None

**Rendered output**
- Static tile list linking to 70-D3B-2 variants with S3-hosted images

### `widget_cp_railbrands.php`

**Triggered by**
- Included in `mg_1.php`, `nmp.php`, `70class.php`

**Params**
- None

**DB queries**
- None

**Rendered output**
- Partner logos and outbound links, plus sales contact note

### `widget_merrow_portable_advantage.php`

**Triggered by**
- Included in `mg_1.php` when `page_key == '20'`

**Params**
- Uses `$machine` from parent page

**DB queries**
- None

**Rendered output**
- Long-form marketing content for portable machines
- Calls to action for sales and support, agent map image

**Edge cases / quirks**
- Typo in `mailto` link: `maito:sales@merrow.com`

### `widget_merrow_overlock_advantage.php`

**Triggered by**
- Included in `mg_1.php` or `nmp.php` when `page_key != '70'` and not portable

**Params**
- Uses `$machine` from parent page

**DB queries**
- None

**Rendered output**
- Long-form marketing content with cam technology section and images
- Sales, support, and service CTAs

**Edge cases / quirks**
- Typo in `mailto` link: `maito:sales@merrow.com`

### `widget_main_menu.php`

**Triggered by**
- Included in `mgclass.php`

**Params**
- `store` and `party_id` affect header logo selection

**DB queries**
- None in this file
- Includes `widget_sub_productmenu_us.php` which performs menu queries

**Rendered output**
- Top nav with links, search box for `store.merrow.com`, Google Translate widget, and color bars

### `widget_feet.php`

**Triggered by**
- Included by most public pages as footer

**Params**
- None

**DB queries**
- None

**Rendered output**
- Footer contact, About links, Facebook Like button, Mailchimp signup form with JS

### `widget_footer_js.php`

**Triggered by**
- Included by `mg_1.php`, `mg_2.php`

**Params**
- None

**DB queries**
- None

**Rendered output**
- Empty file

### `widget_footer.php`

**Triggered by**
- Included by `70class.php`, `mgclass.php`

**Params**
- None

**DB queries**
- None

**Rendered output**
- Footer links, copyright
- Google Custom Search initialization

### `widget_analytics.php`

**Triggered by**
- Included by most public pages

**Params**
- None

**DB queries**
- None

**Rendered output**
- Google Analytics snippet using UA-438042-1

### `widget_main_google_menu.php`

**Triggered by**
- Included in `70class.php`

**Params, DB queries, output**
- See `_AUDIT/SUPPORT_FUNCTIONAL_SPEC.md` (same widget)

### `widget_merrow_advantage.php`

**Triggered by**
- Included in `mg_1.php` when `page_key == '70'` and in `70class.php` and `mgclass.php`

**Params, DB queries, output**
- See `_AUDIT/SUPPORT_FUNCTIONAL_SPEC.md` (same widget)

## DB Dependency Table

| DB | Table | Columns Referenced | Used By | Notes |
| --- | --- | --- | --- | --- |
| merrowco_inventory | machine_pages | `style_key`, `style`, `header`, `description`, `seo_title`, `seo_keywords`, `seo_search_description`, `seo_search_title`, `seo_search_keywords`, `seo_brand`, `page_key`, `class_key`, `publish`, `e2e_key`, `fashion_key`, `technical_key`, `number_of_thumbs`, `number_of_videos`, `speed`, `stitch_width`, `stitch_range`, `needle_standard`, `needle_range`, `stitch_type`, `motor_spec`, `threads`, `youtube1`, `youtube2`, `video_tagline1`, `video_tagline2`, `contact_stitch`, `overview`, `why`, `how`, `where`, `flickr_set`, `marketing_url1`, `marketing_url2`, `marketing_url3`, `marketing_url4`, `marketing_url5`, `marketing_icon1`, `marketing_icon2`, `marketing_icon3`, `marketing_icon4`, `marketing_icon5`, `marketing_tagline1`, `marketing_tagline2`, `marketing_tagline3`, `marketing_tagline4`, `marketing_tagline5`, `price`, `installation`, `ot_id`, `mrsp`, `primary_app`, `secondary_app`, `complete_app_list`, `needle_plate`, `eccentrics`, `upper_looper`, `lower_looper`, `cutter`, `needles` | `mg_1.php`, `mg_2.php`, `nmp.php`, `70class.php`, `mgclass.php`, `ncp1.php`, `machine_prices.php`, `header_test.php`, `widget_sub_productmenu_us.php`, CMS widgets | `mrsp` and `seo_search_*` used only in `70class.php` |
| merrowco_inventory | application_pages | `app_key`, `d_key`, `style_key`, `layout_order`, `publish`, `app_menu_title`, `app_nav_title`, `app_right_title`, `app_right_p`, `popup_title`, `popup_subtitle`, `popup_1stcolumn`, `popup_2ndcolumn`, `seo_description`, `stitch_width`, `machine_speed`, `fabric_material`, `thread_number`, `thread_material`, `machine_model`, `machine_price`, `machine_url` | `a.php`, `nap.php`, `ncp1.php`, `mg_1.php`, `nmp.php`, `widget_compare.php`, `header_test.php`, `widget_sub_productmenu_us.php`, CMS widgets | `machine_url` is referenced in `a.php` and `nap.php` but not in CMS field list |
| merrowco_inventory | application_categories | `app_key`, `app_category_name`, `app_category_short_name`, `app_category_seo_title`, `app_category_seo_description`, `app_category_seo_keywords` | `a.php`, `nap.php`, `nfp.php`, `header_test.php`, `widget_sub_productmenu_us.php`, CMS widgets | `nfp.php` only loads a row but does not render fields |
| merrowco_inventory | machine_categories | `class_key` | `widget_sub_productmenu_us.php`, `header_test.php` | Used for joins; category names are not rendered |
| merrowco_inventory | seo_site_headers | `page_key`, `title`, `description`, `keywords` | `widget_new_metadata.php` | Used by `ncp1.php` only |
| merrowco_inventory | login_auth | `useremail`, `merrow` | `widget_cms_machines.php`, `widget_cms_applications.php`, `widget_cms_cat_applications.php` | Admin gating |
| merrowco_inventory | login_auth_agent | `username`, `merrow` | `machine_prices.php` | Agent-only gating |

## Parameter Matrix

| URL | Params | Behavior |
| --- | --- | --- |
| `/Overlock_Sewing_Machines/Continuous_Processing/{style_key}` | none | Rewrites to `mg_1.php?cp={style_key}` and renders machine detail |
| `/Sergers_and_Overlock_Sewing_Machines/Emblem_Edging/{style_key}` | none | Rewrites to `mg_1.php?cp={style_key}` |
| `/Sergers_and_Overlock_Sewing_Machines/{style_key}` | none | Rewrites to `mg_1.php?cp={style_key}` |
| `/crochet-sewing-machines/{style_key}` | none | Rewrites to `mg_1.php?cp={style_key}` |
| `/70class/cp/{style_key}` | none | Rewrites to `mg_1.php?cp={style_key}` |
| `/compact-professional-sewing-table` | none | Rewrites to `mg_2.php?cp=70d3b2` |
| `/fashion-sewing` | none | Rewrites to `ncp1.php?a=f` |
| `/technical-sewing` | none | Rewrites to `ncp1.php?a=t` |
| `/end-to-end-seaming` | none | Rewrites to `ncp1.php?a=e` |
| `/sewing/applications/{app_key}` | none | Rewrites to `a.php?app={app_key}` |
| `/mg_1.php` | `cp` | Loads `machine_pages` by `style_key`, fallback `mg3u` |
| `/mg_2.php` | `cp`, `sewing_table_style` | Table detail; `sewing_table_style` toggles headline and assets |
| `/ncp1.php` | `a` | Chooses category view and metadata key (`fashion`, `technical`, `end-to-end`) |
| `/a.php` | `app` | Application detail for category `app_key` |
| `/nap.php` | `app` | Alternate application detail (same data) |
| `/nmp.php` | `cp` | Alternate machine detail (same data) |
| `/nfp.php` | `app`, `form` | Feature page; `form=complete` shows thank-you state |
| `/70class.php` | `cp` | Legacy 70 class detail (fallback `70d3b2`) |
| `/mgclass.php` | `cp` | Legacy MG class detail (fallback `m3u`) |
| `/machine_prices.php` | `m` | Agent-only price list; `m=w` links to internal CRM |
| `/widget_compare.php` | `app` | Compare table for `application_pages` by `app_key` |

## External Dependencies

- `merrow-media.s3.amazonaws.com` (machine, application, and general images, PDFs)
- `merrowservices.s3.amazonaws.com` (legacy CSS, images, nav assets)
- `decorativeedging.s3.amazonaws.com` (MG class assets, cam image)
- `continuousprocessing.s3.amazonaws.com` (70 class assets)
- `applicationpages.s3.amazonaws.com` (prettyPhoto script, screenshots)
- `css.imerrow.com` (CSS bundles and grids)
- `images.imerrow.com` (menu images)
- `store.merrow.com` (parts catalog, search form)
- `activeseam.com` (promo links and logo)
- `db798.com` (PictoBrowser Flash and SWFObject for Flickr stitch gallery)
- `flickr.com` via PictoBrowser `userId=25997048@N06` and `userName=merrowmachine` with `ids` from DB
- `s7.addthis.com` and `addthis.com` (share widget)
- `static.zdassets.com` (Zendesk widget)
- `load.sumome.com` (SumoMe)
- `connect.facebook.net` and `facebook.com` (Facebook Pixel and Like button)
- `google.com/jsapi` (Google Custom Search)
- `translate.google.com` (Google Translate widget)
- `ajax.googleapis.com` (jQuery)
- `youtube.com` (video links from `youtube1/2`)
- `hydestore.com` (lightwindow CSS)
- External partners linked in rail brands: `nesipugi.com`, `montimac.it`, `birchbrothers.com`, `schweizer-naehmaschinen.de`
- Internal CRM endpoint used by agents: `https://192.168.2.105:8443` (not public)

## Data Enumeration Needed

- Distinct `machine_pages.style_key` values and their `page_key` and `class_key`
- Distinct `machine_pages.page_key` values to validate routing rules for machine links
- All non-empty `machine_pages.e2e_key`, `fashion_key`, `technical_key` values for category ordering
- All `application_categories.app_key` values and names
- All `application_pages.app_key` values with `publish='yes'`
- All `application_pages.d_key` values with `publish='yes'` and `d_key != 'MASTER'`
- All `application_pages.style_key` values to map application tiles back to machine pages
- All `machine_categories.class_key` values referenced by menus

## Acceptance Criteria (Testable)

1. GET `/Overlock_Sewing_Machines/Continuous_Processing/70d3b2` should render `mg_1.php` with 70-D3B-2 special sections and the 70 nav widget.
2. GET `/compact-professional-sewing-table` should render `mg_2.php` with the Helmsman table page and “without Motor” headline.
3. GET `/mg_2.php?cp=70d3b2&sewing_table_style=am` should render the same page with “with Servo Motor” headline and `helmsmanam_highres_02.jpg` alternate view link.
4. GET `/fashion-sewing` should render the fashion category page with machine list ordered by `fashion_key` and application groups for `5515`, `5516`, `5518`, `5522`, `5521`, `5525`.
5. GET `/technical-sewing` should render the technical category page with machine list ordered by `technical_key` and application groups for `5514`, `5517`, `5519`, `5512`.
6. GET `/end-to-end-seaming` should render the end-to-end page with machine list ordered by `e2e_key` and application groups for `5523`, `5513`, `5524`.
7. GET `/sewing/applications/5512` should render `a.php` with anchor nav entries from `application_pages` where `app_key=5512` and `d_key != 'MASTER'`.
8. GET `/widget_compare.php?app=5512` should render a comparison grid with stitch images and columns for each `d_key` in `application_pages`.
9. GET `/nmp.php?cp=mg3u` should render the machine page with prettyPhoto initialized and applications tiles linked to `/sewing/applications/{app_key}/#{d_key}`.
10. GET `/70class.php?cp=70d3b2` should render the legacy 70 class detail with `continuousprocessing.s3.amazonaws.com/productpages/70d3b2_main.jpg` and PictoBrowser stitches.
11. GET `/mgclass.php?cp=m3u` should render the MG class detail with `decorativeedging.s3.amazonaws.com` assets.
12. GET `/machine_prices.php` without a valid agent session should redirect to `widget_merrow_agent_login.php`.

## Scope Exclusions

- `widget_sub_datamover.php` form handler used by `nfp.php` (not included or audited)
- Storefront pages and checkout flows on `store.merrow.com`
- Internal CRM links for agents (`192.168.2.105`), not public
- Any ticketing system under `STORAGE/` (out of scope for machines/applications)

