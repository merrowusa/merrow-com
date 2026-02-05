# Legacy Site — Home, Stories, Contact, Stitch, Announcements (Read-Only)

**Scope:** Legacy public-facing pages not covered in the support or machines specs, based on files in `_LEGACY_REFERENCE/public_html/` and routing from `.htaccess`.

## Scope + Files Audited

Core pages
- `_LEGACY_REFERENCE/public_html/index.php`
- `_LEGACY_REFERENCE/public_html/ncs1.php`
- `_LEGACY_REFERENCE/public_html/contact.php`
- `_LEGACY_REFERENCE/public_html/contact_general.php`
- `_LEGACY_REFERENCE/public_html/agentmap.php`
- `_LEGACY_REFERENCE/public_html/stitch.php`
- `_LEGACY_REFERENCE/public_html/merrow_stitching.php`
- `_LEGACY_REFERENCE/public_html/announcements.php`

Widgets and shared includes
- `_LEGACY_REFERENCE/public_html/widget_cms_customer_stories.php`
- `_LEGACY_REFERENCE/public_html/forma.php`
- `_LEGACY_REFERENCE/public_html/widget_general_form.php`
- `_LEGACY_REFERENCE/public_html/widget_sub_agent_map.php`
- `_LEGACY_REFERENCE/public_html/widget_customagent_map.php`
- `_LEGACY_REFERENCE/public_html/widget_agent_map.php`
- `_LEGACY_REFERENCE/public_html/widget_agentmap_config.php`
- `_LEGACY_REFERENCE/public_html/widget_config_contactinfo.php`
- `_LEGACY_REFERENCE/public_html/widget_side_contactbar.php`
- `_LEGACY_REFERENCE/public_html/widget_config_home_agent_store.php`
- `_LEGACY_REFERENCE/public_html/widget_leftmainmenu_cp.php`
- `_LEGACY_REFERENCE/public_html/widget_leftmainmenu.php`
- `_LEGACY_REFERENCE/public_html/widget_stitches_center.php`
- `_LEGACY_REFERENCE/public_html/widget_stitchselector.php`
- `_LEGACY_REFERENCE/public_html/widget_announcements.php`

Routing (from `.htaccess`)
- `customer-stories/featured/{s}` → `ncs1.php?s=$1`
- `stitch/marketplace/{m}/stitch/{s}/label/{l}/setnum/{sn}/setnum1/{sn1}/setnam/{snm}/resolution/{r}/` → `stitch.php?marketplace=$1&stitch=$2&label=$3&setnum=$4&setnum1=$5&setnam=$6&resolution=$7`
- `stitch/marketplace/{m}/stitch/{s}/` → `stitch.php?marketplace=$1&stitch=$2`
- `merrow_stitching/app/{app}/version/{v}/` → `merrow_stitching.php?app=$1&version=$2`
- `merrow_stitching/app/{app}/` → `merrow_stitching.php?app=$1`
- `announcements/ebay/{ebay}/` → `announcements.php?ebay=$1`
- `announcements/party_id/{id}/drawers4/{d}/` → `announcements.php?party_id=$1&drawers4=$2`
- `contact_general/label/{label}/key/{key}/` → `contact_general.php?label=$1&key=$2`
- `contact_general/key/{key}/` → `contact_general.php?key=$1`
- `^distributors/$` → 301 redirect to `agentmap.html`
- `^applications.htm$` → 301 redirect to `merrow_stitching/app/mainpage/version/first/`

## Primary Databases Referenced

- `merrowco_inventory` (customer stories, stitches, agent lists)
- `merrowco_cephei` (contact info config)
- `merrowco_cephei` and `merrowco_inventory` via `ip_lang_database.php` (language + agent context, see SUPPORT spec)

## Core Pages

### 1) `index.php` — Home Page

**Route/URL triggers**
- Direct: `/index.php`
- `/index.html` via `.html → .php` rewrite

**Query params consumed**
- `branded` → if `branded=complete`, show branded stitch lead form and hide main hero

**DB queries**
- `SELECT * FROM seo_site_headers WHERE page_key='index'` via `widget_new_metadata.php`

**Includes/widgets**
- `widget_new_sql_genpageload.php`
- `widget_new_metadata.php` (see MACHINES spec)
- `widget_new_styles.php` (see MACHINES spec)
- `widget_js.php` (see MACHINES spec)
- `site.js` (see MACHINES spec)
- `header_test.php` (see MACHINES spec)
- `widget_analytics.php` (see MACHINES spec)
- `widget_feet.php` (see MACHINES spec)
- `widget_footer_js.php` (empty, see MACHINES spec)

**Rendered output**
- Hero section with three category tiles linking to `/technical-sewing`, `/fashion-sewing`, `/end-to-end-seaming`
- Branded Stitch overlay content with email capture form posting to `widget_sub_datamover.php`
- Grey promo boxes: “Merrow Heritage” (links to `/overlock-history`) and “Merrow Branded Stitch” (toggles branded section)
- Logo strip linking to customer story `csrw`
- Footer CTAs: Agent locator (`/agentmap.html`), Blog (`https://blog.merrow.com`), Community (`facebook.com/MerrowSewingMachineCo`)

**Edge cases / quirks**
- `branded=complete` shows thank-you state and hides main hero
- Branded form posts to `widget_sub_datamover.php` which is not included in scope

### 2) `ncs1.php` — Customer Story Detail

**Route/URL triggers**
- Direct: `/ncs1.php?s={story_key}`
- Rewrite: `/customer-stories/featured/{s}` → `ncs1.php?s=$1`

**Query params consumed**
- `s` → `$page_id` for meta and `$bateman` for DB lookup

**DB queries**
- `SELECT * FROM customer_stories WHERE app_key='$s' AND publish='yes'`
- Meta via `widget_new_metadata.php` using `$page_id = $s`

**Includes/widgets**
- `widget_new_sql_genpageload.php`
- `widget_new_metadata.php` (see MACHINES spec)
- `widget_new_styles.php` (see MACHINES spec)
- `widget_js.php` (see MACHINES spec)
- `site.js` (see MACHINES spec)
- `header_test.php` (see MACHINES spec)
- `widget_analytics.php` (see MACHINES spec)
- `widget_feet.php` (see MACHINES spec)

**Rendered output**
- Story nav tabs with three hardcoded story keys
- `csrw` (Fashion & Design)
- `csb` (Technical Seaming)
- `csam` (End-to-End Joining)
- Story hero and splash images from `merrow-media.s3.amazonaws.com/general-http/2011_live/{app_key}_*.gif`
- Quote and author, 4 copy blocks, and three “Application / Machine / Stitch” tiles
- Links in tiles come from DB (`app_link`, `machine_link`, `stitch_link`)

**Edge cases / quirks**
- If `s` does not exist or `publish != 'yes'`, page renders with missing DB data and broken images
- Stitch link uses `rel="prettyPhoto"` but no prettyPhoto script is included

### 3) `contact.php` — Legacy Contact Page

**Route/URL triggers**
- Direct: `/contact.php`

**Query params consumed**
- `lang` → language cookie handling

**DB queries**
- None in this file

**Includes/widgets**
- `ip_lang_database.php` (see SUPPORT spec)
- `widget_main_menu.php` (see MACHINES spec)
- `forma.php` (contact form system)
- `widget_analytics.php` (see MACHINES spec)

**Rendered output**
- 3-column layout with center column containing the `forma.php` contact form

**Edge cases / quirks**
- Language cookie logic uses `elseif ($scrub = null)` and `$lang = '$nifty'` (literal string)

### 4) `contact_general.php` — Primary Contact Page

**Route/URL triggers**
- Direct: `/contact_general.php`
- Rewrites
- `/contact_general/key/{key}` → `contact_general.php?key=$1`
- `/contact_general/label/{label}/key/{key}` → `contact_general.php?label=$1&key=$2`

**Query params consumed**
- `key` → varies messaging and validation state in form
- `label` → used to preselect sample model
- `lang` → language cookie handling

**DB queries**
- In `widget_general_form.php`
- `SELECT * FROM samples WHERE label='$label'`
- `SELECT * FROM agents WHERE party_id='$agent'` when `key=agents`
- `SELECT * FROM avail_models WHERE model_c='$new_name'`

**Includes/widgets**
- `ip_lang_database.php` (see SUPPORT spec)
- `widget_main_google_menu.php` (see SUPPORT spec)
- `widget_general_form.php`
- `widget_feet.php` (see MACHINES spec)
- `widget_analytics.php` (see MACHINES spec)

**Rendered output**
- Contact form with conditional copy and fields based on `key`, `promo`, `mature`, `location`
- Uses reCAPTCHA and posts to `widget_sub_datamover.php`
- Includes Autopilot tracking snippet

**Edge cases / quirks**
- Language cookie logic uses `elseif ($scrub = null)` and `$lang = '$nifty'` (literal string)
- `key` values handled: `success`, `learnsupport`, `agents`, `buy`, `samples`, `missedafield`, `badcaptcha`
- `key` and `label` are not validated; missing values produce empty copy

### 5) `agentmap.php` — Agent Map Page

**Route/URL triggers**
- Direct: `/agentmap.php`
- `^distributors/$` redirects to `agentmap.html` (HTML rewrite not in this file)

**Query params consumed**
- `lang` → language cookie handling
- `app` → used to query `application_categories` but not rendered

**DB queries**
- `SELECT * FROM application_categories WHERE app_key='$app'` (result unused)

**Includes/widgets**
- `ip_lang_database.php` (see SUPPORT spec)
- `widget_sql.php` (DB connect, see SUPPORT spec)
- `widget_new_styles.php` (see MACHINES spec)
- `widget_js.php` (see MACHINES spec)
- `site.js` (see MACHINES spec)
- `header_test.php` (see MACHINES spec)
- `widget_analytics.php` (see MACHINES spec)
- `widget_feet.php` (see MACHINES spec)

**Rendered output**
- Static intro copy and a Google Maps Engine iframe embed
- Share widget via AddThis
- Map iframe: `https://mapsengine.google.com/map/u/0/embed?mid=zsVw84sSuJyo.kI-ry6XL3e2w`

**Edge cases / quirks**
- `application_categories` lookup appears vestigial

### 6) `stitch.php` — Stitch Browser

**Route/URL triggers**
- Direct: `/stitch.php?marketplace={m}&stitch={s}`
- Rewrite: `/stitch/marketplace/{m}/stitch/{s}/` → `stitch.php?marketplace=$1&stitch=$2`
- Rewrite: `/stitch/marketplace/{m}/stitch/{s}/label/{l}/setnum/{sn}/setnum1/{sn1}/setnam/{snm}/resolution/{r}/` → `stitch.php?...`

**Query params consumed**
- `stitch` → `$noire` → `asin.mmc_id`
- `label` → numeric label that maps to a descriptive phrase in `$blue`
- `setnum`, `setnum1`, `setnam`, `resolution` → used by `widget_stitches_center.php`
- `marketplace` → used by `widget_stitchselector.php`
- `store` → set but unused

**DB queries**
- `SELECT imgstoreurl, msmc_id, amzn_url, mmc_id, include_amazon FROM asin WHERE mmc_id='$noire'`

**Includes/widgets**
- `ip_lang_database.php` (see SUPPORT spec)
- `widget_main_google_menu.php` (see SUPPORT spec)
- `widget_leftmainmenu_cp.php`
- `widget_stitches_center.php`
- `widget_stitchselector.php`
- `widget_feet.php` (see MACHINES spec)
- `widget_analytics.php` (see MACHINES spec)

**Rendered output**
- 3-column stitch browser
- Left: dashboard links and translate/share toggles
- Center: PictoBrowser stitch gallery and optional Amazon buy button
- Right: selector menus for stitch sets, machines, and parts books

**Edge cases / quirks**
- Language cookie logic uses `elseif ($scrub = null)` and `$lang = '$nifty'` (literal string)
- Label mapping uses hardcoded label values like `1453627189` and `153627189`

### 7) `merrow_stitching.php` — Applications Landing

**Route/URL triggers**
- Direct: `/merrow_stitching.php?app={app}`
- Rewrite: `/merrow_stitching/app/{app}/` → `merrow_stitching.php?app=$1`
- Rewrite: `/merrow_stitching/app/{app}/version/{v}/` → `merrow_stitching.php?app=$1&version=$2`

**Query params consumed**
- `app` → determines which view renders
- `version` → ignored in file
- `lang` → language cookie handling

**DB queries**
- None

**Includes/widgets**
- `ip_lang_database.php` (see SUPPORT spec)
- `widget_main_google_menu.php` (see SUPPORT spec)

**Rendered output**
- Four variants based on `app`
- `app=decorative` → “Merrow Decorative Stitching” landing with search link to `/applications/app/decorative`
- `app=finishing` → “Textile Finishing” landing with search link to `/applications/app/finishing`
- `app=seaming` → “Merrowing” landing with search link to `/applications/app/seaming`
- Default (any other value, including `mainpage`) → “Merrow(ing) Applications” hub linking to the three application types
- Each variant includes static sidebars with glossary and useful links

**Edge cases / quirks**
- `version` parameter is ignored
- Language cookie logic uses `elseif ($scrub = null)` and `$lang = '$nifty'` (literal string)

### 8) `announcements.php` — Announcements Hub

**Route/URL triggers**
- Direct: `/announcements.php`
- Rewrites
- `/announcements/ebay/{ebay}` → `announcements.php?ebay=$1`
- `/announcements/party_id/{id}/drawers4/{d}` → `announcements.php?party_id=$1&drawers4=$2`

**Query params consumed**
- `drawers4` → selects which announcement body to render
- `ebay` → shows eBay announcement content
- `party_id` → not used in this file, may be used by `ip_lang_database.php`

**DB queries**
- None in this file

**Includes/widgets**
- `ip_lang_database.php` (see SUPPORT spec)
- `widget_main_google_menu.php` (see SUPPORT spec)
- `widget_leftmainmenu.php`
- `widget_announcements.php`
- `widget_stitchselector.php`
- `widget_analytics.php` (see MACHINES spec)

**Rendered output**
- 3-column layout with left menu, center announcements, right stitch selector
- Includes legacy JS bundle for sliding drawers and tracking

**Edge cases / quirks**
- Uses `drawers4` values `a`, `b`, `c`, `d`, `e` in `widget_announcements.php`
- `drawers4` comparisons use bare constants (`a`, `b`, etc), which resolve to strings with PHP notices

## Widgets (Behavioral Detail)

### `widget_cms_customer_stories.php`

**Triggered by**
- Direct access (admin)

**Params**
- `lang` cookie handling
- `logoff` clears session

**DB queries**
- Auth: `SELECT * FROM login_auth WHERE useremail='$name'`
- phpMyEdit on `customer_stories`

**Rendered output**
- Admin grid for story fields: `app_key`, `publish`, quote, paragraph titles and bodies, and application/machine/stitch blocks

**Edge cases / quirks**
- Requires `exp_user` session and `login_auth.merrow` flag
- Language cookie bug identical to other pages

### `forma.php`

**Triggered by**
- Included by `contact.php`

**Params**
- None (relies on files in `form_folder/` or `/sable/`)

**DB queries**
- None in this file

**Rendered output**
- Loads a third-party form system (Green-Beast contact form)
- Attempts to locate `functions.php`, CSS theme, and `form.php` in multiple relative paths
- Displays IP address and inferred country from `functions.php`
- Loads `form.php` from form package

**Edge cases / quirks**
- Prints installation error messages if files are missing
- Reads error log from `form_folder/files/error-log.txt` when present

### `widget_general_form.php`

**Triggered by**
- Included by `contact_general.php`

**Params**
- `key`, `label`, `agent`, `mature`, `promo`, `location`

**DB queries**
- `SELECT * FROM samples WHERE label='$label'`
- `SELECT * FROM agents WHERE party_id='$agent'` when `key=agents`
- `SELECT * FROM avail_models WHERE model_c='$new_name'`

**Rendered output**
- Contact form posting to `widget_sub_datamover.php`
- Hidden inputs include `party_id`, `production_country`, and `interested_machine`
- Conditional headers and copy by `key` and `promo`
- Optional promo banner for `promo=72classpromo` with location-specific image
- Shows reCAPTCHA and validation messages based on `key` values

**Edge cases / quirks**
- `party_id` is read from `$agents['party_id']`, which depends on prior context
- Uses deprecated `ereg_replace` to normalize model string
- `thefour` is referenced but never defined

### `widget_sub_agent_map.php`

**Triggered by**
- Included by agent store pages (not in scope) and expects `$val` to be set

**Params**
- `$val` party ID (from parent)

**DB queries**
- `SELECT * FROM agents WHERE party_id='$val'`

**Rendered output**
- GPS Visualizer map using Google Maps API v2
- Centers on agent lat/lng and adds marker with name, address, email

**Edge cases / quirks**
- Uses deprecated Google Maps v2 API
- `$val` must be set by parent page, otherwise query is invalid

### `widget_customagent_map.php`

**Triggered by**
- Included by agent store pages (not in scope) and expects `$val` to be set

**Params**
- `$val` party ID (from parent)

**DB queries**
- Same as `widget_sub_agent_map.php`

**Rendered output**
- Identical to `widget_sub_agent_map.php`

### `widget_agent_map.php`

**Triggered by**
- Used in `cephei/sable/fp_agentmap.php` (not in scope)

**Params**
- Expects `$ap` and `$nate1` from parent

**DB queries**
- `SELECT app_nav_title, d_key FROM application_pages WHERE app_key='$ap' AND d_key != 'MASTER' AND publish='yes' ORDER BY layout_order LIMIT 0,3`
- Same query with `LIMIT 3,3` and `LIMIT 6,3`

**Rendered output**
- Renders application navigation header, not a map

**Edge cases / quirks**
- File appears incomplete and contains a large commented-out map block

### `widget_agentmap_config.php`

**Triggered by**
- Direct access (admin configuration)

**Params**
- None

**DB queries**
- phpMyEdit on `markers` table in `merrowco_inventory`

**Rendered output**
- Admin grid for marker fields including `lat`, `lng`, `address`, `name`, `phone`, `party_id`, `status`, and sales metrics

### `widget_config_contactinfo.php`

**Triggered by**
- Direct access (admin configuration)

**Params**
- `dbname` from cookie to select the table in `merrowco_cephei`

**DB queries**
- phpMyEdit on a table defined by cookie

**Rendered output**
- Admin grid for contact fields `name`, `email`, `phone`, `fax`

**Edge cases / quirks**
- Table name is taken from cookie without validation

### `widget_side_contactbar.php`

**Triggered by**
- Used as a sidebar component in legacy pages

**Params**
- Uses `$tongue` localization strings

**DB queries**
- None

**Rendered output**
- Contact bar with links to blog, contact page, and a contact info page

### `widget_config_home_agent_store.php`

**Triggered by**
- Direct access (admin configuration)

**Params**
- None

**DB queries**
- None

**Rendered output**
- Static configuration hub with thickbox links to other config pages

### `widget_leftmainmenu_cp.php`

**Triggered by**
- Included by `stitch.php`

**Params**
- `translate=3112` enables Google Translate widget
- `social=3112` enables AddThis share block

**DB queries**
- None

**Rendered output**
- Dashboard menu for store, stitch samples, video, and other utilities

### `widget_leftmainmenu.php`

**Triggered by**
- Included by `announcements.php`

**Params**
- Uses `$tongue` localization strings

**DB queries**
- None

**Rendered output**
- Dashboard menu and links to app hub, stitch samples, and blog

### `widget_stitches_center.php`

**Triggered by**
- Included by `stitch.php`

**Params**
- `stitch`, `label`, `setnum`, `setnum1`, `setnam`, `resolution`, `marketplace`

**DB queries**
- `SELECT imgstoreurl, msmc_id, amzn_url, mmc_id, include_amazon FROM asin WHERE mmc_id='$noire'`

**Rendered output**
- PictoBrowser Flash embed using Flickr user `merrowmachine` and set IDs
- Displays Amazon buy button when `include_amazon=1`
- Resolution toggles between high and low and links to `stitchHD.php` or `stitch.php`

**Edge cases / quirks**
- Uses Flash-based PictoBrowser and db798.com SWF
- `setname1` is referenced in a link but not defined in `stitch.php`

### `widget_stitchselector.php`

**Triggered by**
- Included by `stitch.php` and `announcements.php`

**Params**
- `marketplace` determines which option list to show

**DB queries**
- None

**Rendered output**
- Long hardcoded `<select>` lists linking to stitch routes by set and machine
- Includes parts book links via `/agent_book/...`

**Edge cases / quirks**
- Contains a special case for `$_SERVER["REQUEST_URI"] == '/nebula/sable/ebay.php'`

### `widget_announcements.php`

**Triggered by**
- Included by `announcements.php`

**Params**
- `drawers4` values `a|b|c|d|e`
- `ebay` value `a`

**DB queries**
- None

**Rendered output**
- Injects announcement copy and images from `$tongue` localization entries

## DB Dependency Table

| DB | Table | Columns Referenced | Used By | Notes |
| --- | --- | --- | --- | --- |
| merrowco_inventory | seo_site_headers | `page_key`, `title`, `description`, `keywords` | `index.php`, `ncs1.php` | Loaded via `widget_new_metadata.php` |
| merrowco_inventory | customer_stories | `app_key`, `publish`, `quote`, `quote_author`, `p1_title`, `p1`, `p2_title`, `p2`, `p3_title`, `p3`, `p4_title`, `p4`, `app_title`, `app_link`, `app_copy`, `machine_title`, `machine_link`, `machine_copy`, `stitch_title`, `stitch_link`, `stitch_copy` | `ncs1.php`, `widget_cms_customer_stories.php` | Images depend on `app_key` string |
| merrowco_inventory | samples | `label`, `model`, `whyunique` | `widget_general_form.php` | Used to prefill sample request text |
| merrowco_inventory | agents | `party_id`, `city`, `state`, `name`, `account_name`, `full_address`, `email`, `latitude`, `longitude` | `widget_general_form.php`, `widget_sub_agent_map.php`, `widget_customagent_map.php` | Agent lookup and map markers |
| merrowco_inventory | avail_models | `model_c`, `model` | `widget_general_form.php` | Controls “View more Stitch Pictures” link |
| merrowco_inventory | asin | `mmc_id`, `imgstoreurl`, `msmc_id`, `amzn_url`, `include_amazon` | `stitch.php`, `widget_stitches_center.php` | Stitch browser + buy button |
| merrowco_inventory | application_categories | `app_key` | `agentmap.php` | Query result unused in this file |
| merrowco_inventory | application_pages | `app_nav_title`, `d_key`, `app_key`, `publish`, `layout_order` | `widget_agent_map.php` | Used for app navigation in agent map widget |
| merrowco_inventory | markers | `id`, `name`, `name1`, `address`, `phone`, `email`, `lat`, `lng`, `party_id`, `status`, `sell_service`, `biz`, `revenue`, `machine_number`, `qualified_status`, `last_sale`, `date_updated`, `merrowcsr`, `email_status`, `big_ad` | `widget_agentmap_config.php` | Admin-only marker config |
| merrowco_inventory | login_auth | `useremail`, `merrow` | `widget_cms_customer_stories.php` | Admin gate |
| merrowco_cephei | {cookie dbname} | `id`, `name`, `email`, `phone`, `fax` | `widget_config_contactinfo.php` | Table name from cookie |

## Parameter Matrix

| URL | Params | Behavior |
| --- | --- | --- |
| `/` or `/index.html` | `branded=complete` | Shows branded stitch lead form and hides main hero |
| `/customer-stories/featured/{s}` | `s` | Renders customer story by `customer_stories.app_key` |
| `/contact_general/key/{key}` | `key` | Changes contact form messaging and validation state |
| `/contact_general/label/{label}/key/{key}` | `label`, `key` | Preselects sample model and form copy |
| `/agentmap.html` | none | Loads `agentmap.php` (HTML rewrite) with map iframe |
| `/stitch/marketplace/{m}/stitch/{s}/` | `marketplace`, `stitch` | Loads stitch browser with machine keyword search |
| `/stitch/marketplace/{m}/stitch/{s}/label/{l}/setnum/{sn}/setnum1/{sn1}/setnam/{snm}/resolution/{r}/` | multiple | Loads stitch browser with PictoBrowser set IDs and resolution |
| `/merrow_stitching/app/{app}/version/{v}/` | `app`, `version` | Renders app-specific stitching landing; `version` ignored |
| `/announcements/party_id/{id}/drawers4/{d}/` | `party_id`, `drawers4` | Renders announcement drawer `a|b|c|d|e` |
| `/announcements/ebay/{ebay}/` | `ebay` | Renders eBay announcement block |
| `/distributors/` | none | 301 to `agentmap.html` |
| `/applications.htm` | none | 301 to `merrow_stitching/app/mainpage/version/first/` |

## External Dependencies

- `merrow-media.s3.amazonaws.com` (home images, customer story assets)
- `merrowservices.s3.amazonaws.com` (legacy CSS)
- `css.imerrow.com` (legacy CSS)
- `images.imerrow.com` (icons, promotions)
- `blog.merrow.com` (blog)
- `merrowing.com` (community)
- `store.merrow.com` (store links)
- `db798.com` (PictoBrowser Flash)
- `flickr.com` via PictoBrowser `userId=25997048@N06` and `userName=merrowmachine`
- `mapsengine.google.com` (agent map iframe)
- `maps.google.com` (Google Maps v2 API, GPS Visualizer)
- `maps.gpsvisualizer.com` (GPS Visualizer functions)
- `s7.addthis.com` (AddThis share widget)
- `google.com/translate_a/element.js` (Google Translate, optional)
- `api.autopilothq.com` (Autopilot tracking in contact form)
- `www.google.com/jsapi` (Google Custom Search in header_test)
- `merrow.com/cephei/scripts/*` (announcements JS)
- `recaptcha.net` via `recaptchalib.php` (reCAPTCHA v1 integration)

## Data Enumeration Needed

- All `customer_stories.app_key` values and published status
- Mapping of `customer_stories.app_key` to story image assets on S3
- All `samples.label` values and corresponding `model` and `whyunique`
- All `agents.party_id` values and map coordinates
- All `avail_models.model_c` values
- All `asin.mmc_id` values used in stitch browser
- All `markers` rows used by agent map admin

## Acceptance Criteria (Testable)

1. GET `/index.php` should render the hero with three category tiles and the grey promo boxes.
2. GET `/index.php?branded=complete` should hide the main hero and show the branded stitch form with thank-you state.
3. GET `/customer-stories/featured/csrw` should render the Fashion & Design customer story and images keyed by `csrw`.
4. GET `/customer-stories/featured/csb` should render the Technical Seaming customer story and set the nav tab active.
5. GET `/customer-stories/featured/csam` should render the End-to-End Joining customer story.
6. GET `/contact_general/key/samples` should show the “Interested in the Merrow {model}?” form copy when `label` is present.
7. GET `/contact_general/label/70d3b2/key/samples` should prefill sample model info via `samples` lookup.
8. GET `/agentmap.html` should render the map iframe and “Merrow Agents Worldwide” header text.
9. GET `/stitch/marketplace/general/stitch/70d3b2` should render PictoBrowser results for keyword `70d3b2`.
10. GET `/stitch/marketplace/general/stitch/front_emblem/label/153627189/setnum/72157606892621481/setnum1/72157607326462165/setnam/emblem/resolution/low/` should render the low-res PictoBrowser set and show the matching label copy.
11. GET `/merrow_stitching/app/decorative/` should render the Decorative Stitching landing view.
12. GET `/announcements/party_id/123/drawers4/a/` should render the drawer A announcement block from `$tongue`.

## Scope Exclusions

- `widget_sub_datamover.php` form handler used by home and contact forms
- Legacy STORE and dynamic store pages under `/dynamicstore/`
- Ticketing under `STORAGE/` (explicitly out of scope)
- Any pages not listed in the “Files to audit” section

