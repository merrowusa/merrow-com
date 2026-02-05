# Legacy Remaining Pages — Functional Audit (Read-Only)

**Scope:** All remaining public-facing legacy PHP pages not covered by `_AUDIT/SUPPORT_FUNCTIONAL_SPEC.md`, `_AUDIT/MACHINES_FUNCTIONAL_SPEC.md`, or `_AUDIT/SITE_FUNCTIONAL_SPEC.md`. This document is the permanent baseline for legacy behavior.

## Scope + Files Audited

Core pages
- `_LEGACY_REFERENCE/public_html/model_x.php`
- `_LEGACY_REFERENCE/public_html/buttseam.php`
- `_LEGACY_REFERENCE/public_html/applications.php`
- `_LEGACY_REFERENCE/public_html/youtube.php`
- `_LEGACY_REFERENCE/public_html/finishing.php`
- `_LEGACY_REFERENCE/public_html/customers.php`
- `_LEGACY_REFERENCE/public_html/activeseam.php`
- `_LEGACY_REFERENCE/public_html/nhp1.php`
- `_LEGACY_REFERENCE/public_html/sewing_machine_age.php`
- `_LEGACY_REFERENCE/public_html/nfp1.php`
- `_LEGACY_REFERENCE/public_html/njp.php`
- `_LEGACY_REFERENCE/public_html/apps.php`
- `_LEGACY_REFERENCE/public_html/needle_configurator.php`
- `_LEGACY_REFERENCE/public_html/merrow.php`
- `_LEGACY_REFERENCE/public_html/stitchHD.php`
- `_LEGACY_REFERENCE/public_html/thread.php`
- `_LEGACY_REFERENCE/public_html/sr_needles.php`
- `_LEGACY_REFERENCE/public_html/videoHD.php`
- `_LEGACY_REFERENCE/public_html/agent_choice.php`
- `_LEGACY_REFERENCE/public_html/about.php`
- `_LEGACY_REFERENCE/public_html/history.php`
- `_LEGACY_REFERENCE/public_html/the70project.php`
- `_LEGACY_REFERENCE/public_html/talk.php`
- `_LEGACY_REFERENCE/public_html/merrow404.php`
- `_LEGACY_REFERENCE/public_html/video.php`
- `_LEGACY_REFERENCE/public_html/search.php`
- `_LEGACY_REFERENCE/public_html/search1.php`
- `_LEGACY_REFERENCE/public_html/store.php`
- `_LEGACY_REFERENCE/public_html/line_card.php`
- `_LEGACY_REFERENCE/public_html/email_signup.php`

API/data endpoints
- `_LEGACY_REFERENCE/public_html/phpsqlsearch_genxml.php`
- `_LEGACY_REFERENCE/public_html/widget_sub_datamover.php`
- `_LEGACY_REFERENCE/public_html/widget_merrow_agent_login.php`

Agent/internal pages (documented, flagged INTERNAL)
- `_LEGACY_REFERENCE/public_html/merrow_wholesale.php`
- `_LEGACY_REFERENCE/public_html/merrow_enventory.php`
- `_LEGACY_REFERENCE/public_html/merrow_reporting.php`
- `_LEGACY_REFERENCE/public_html/market_analysis.php`
- `_LEGACY_REFERENCE/public_html/global_analysis.php`
- `_LEGACY_REFERENCE/public_html/global_plants.php` (brief audit only)
- `_LEGACY_REFERENCE/public_html/textile_plants.php` (brief audit only)

Widgets and shared includes (new or required by pages above)
- `_LEGACY_REFERENCE/public_html/widget_static_store.php`
- `_LEGACY_REFERENCE/public_html/widget_cp_center.php`
- `_LEGACY_REFERENCE/public_html/widget_needles.php`
- `_LEGACY_REFERENCE/public_html/widget_stitches_centerHD.php`
- `_LEGACY_REFERENCE/public_html/widget_videoplayer.php`
- `_LEGACY_REFERENCE/public_html/widget_videoplayerHD.php`
- `_LEGACY_REFERENCE/public_html/widget_history.php`
- `_LEGACY_REFERENCE/public_html/widget_olde.php`
- `_LEGACY_REFERENCE/public_html/widget_agent_lowebandwidth_info.php`
- `_LEGACY_REFERENCE/public_html/widget_reporting.php`
- `_LEGACY_REFERENCE/public_html/widget_specialdatabase_form.php`
- `_LEGACY_REFERENCE/public_html/widget_globaldatabase_form.php`
- `_LEGACY_REFERENCE/public_html/widget_wholesale.php`
- `_LEGACY_REFERENCE/public_html/machinemenu.php`

Routing
- `_LEGACY_REFERENCE/public_html/.htaccess` (routes noted in spec and Dead Routes section)

DB connection files (already documented in `_AUDIT/SUPPORT_FUNCTIONAL_SPEC.md`)
- `Connections/merrowco.php`, `widget_sql.php`, `ip_lang_database.php`

## Primary Databases Referenced

- `merrowco_inventory` (agents, parts, jobs, agent tools, reporting, map data)
- `merrowso_hydedata` (search index)
- `merrowco_mailman` (MySQL user for inserts into `merrowco_inventory.customer_forms`)

## Core Pages

### 1) `model_x.php` — Model X marketing page

**Route/URL triggers**
- Direct: `/model_x.php`

**Query params consumed**
- None

**DB queries**
- None

**Includes/widgets**
- None

**Rendered output**
- Large static marketing page using external CSS/JS (hydestore lightwindow, merrowservices styles)
- Top nav links to Blog, About, Community, Contact

**Edge cases / quirks**
- Entirely static; no server-side logic

### 2) `buttseam.php` — Butt seam page (commented out)

**Route/URL triggers**
- Direct: `/buttseam.php`

**Query params consumed**
- None

**DB queries**
- None

**Includes/widgets**
- None

**Rendered output**
- File begins with `<!--` and never closes the HTML comment in the file; effectively renders blank in HTML output

**Edge cases / quirks**
- Likely dead or disabled page

### 3) `applications.php` — Legacy application configurator (Exhibit)

**Route/URL triggers**
- Direct: `/applications.php?app={decorative|finishing|seaming}`
- Rewrite: `/applications/app/{app}` → `applications.php?app=$1`

**Query params consumed**
- `app` → `$drhorrible` → selects Exhibit JSON source
- `party_id`, `stitch` accepted but unused
- `lang` → cookie handling via `ip_lang_database.php`

**DB queries**
- None

**Includes/widgets**
- `ip_lang_database.php`
- `widget_main_google_menu.php` (see SUPPORT spec)
- `widget_analytics.php` (see MACHINES spec)

**Rendered output**
- Simile Exhibit UI with facets and search
- Different Exhibit data sources based on `app`
- Thickbox-enabled image previews

**Edge cases / quirks**
- If `app` missing or not matched, no Exhibit data source is loaded (empty results)
- `seaming` loads the same data as `decorative` (`decseam.js`)

### 4) `youtube.php` — YouTube playlist JS (legacy)

**Route/URL triggers**
- Direct: `/youtube.php` (loaded as a script by `video.php`)

**Query params consumed**
- `q` is referenced in `video.php` but not in this file

**DB queries**
- None

**Includes/widgets**
- None

**Rendered output**
- JavaScript-only response (wrapped in HTML comment markers)
- Uses YouTube GData API JSON-in-script to populate a playlist for user `merrowmachine`

**Edge cases / quirks**
- Legacy YouTube API endpoints; not HTML-rendered

### 5) `finishing.php` — Application listing by IP agent

**Route/URL triggers**
- Direct: `/finishing.php?app={decorative|finishing|seaming}`

**Query params consumed**
- `app` → `$drhorrible` → selects Exhibit JSON source
- `party_id` → `$wammo` → overrides IP-derived agent selection
- `lang` → cookie handling

**DB queries**
- `SELECT * FROM agents WHERE party_id='$val'`

**Includes/widgets**
- `ip_files/countries.php` + `ip_files/{first_octet}.php` for IP→country mapping
- Conditional: `widget_main_menu.php` or `widget_int_main_menu.php` (see SUPPORT spec)
- `widget_leftmainmenu.php` (see SUPPORT spec)
- `widget_analytics.php` (see MACHINES spec)

**Rendered output**
- Exhibit-based application list with facets/search
- Agent context driven by IP/country mapping or `party_id`

**Edge cases / quirks**
- Uses exhaustive country→party_id map; default `767911` for US/unknown
- Always loads Exhibit data; if `app` missing it defaults to `fin_apps.js`

### 6) `customers.php` — Customer list (Exhibit)

**Route/URL triggers**
- Direct: `/customers.php`

**Query params consumed**
- `lang` cookie handling
- `party_id`, `stitch`, `moneymaker` accepted but unused

**DB queries**
- None

**Includes/widgets**
- `ip_lang_database.php`

**Rendered output**
- Exhibit UI driven by Google Spreadsheet JSONP data
- Thickbox-enabled images

**Edge cases / quirks**
- `if ($IPaddress='65.96.199.154')` uses assignment, so condition always true and page always renders

### 7) `activeseam.php` — ActiveSeam landing (branded stitch toggle)

**Route/URL triggers**
- Direct: `/activeseam.php`

**Query params consumed**
- `branded=complete` → show branded stitch form completion state

**DB queries**
- None

**Includes/widgets**
- `widget_new_sql_genpageload.php`, `widget_new_metadata.php`, `widget_new_styles.php`, `widget_js.php`, `site.js` (see MACHINES spec)
- `header_test.php`, `widget_feet.php`, `widget_footer_js.php` (see MACHINES spec)
- `widget_analytics.php`

**Rendered output**
- Marketing hero with three category tiles
- Branded stitch form posts to `widget_sub_datamover.php` with `source=nbp`
- Additional grey promo boxes and footer tiles

**Edge cases / quirks**
- `branded=complete` hides main content and shows thank-you state

### 8) `nhp1.php` — Overlock history landing

**Route/URL triggers**
- Direct: `/nhp1.php`
- Rewrite: `/overlock-history` → `nhp1.php`

**Query params consumed**
- `s` → `$page_id` (via `widget_new_sql_genpageload.php`)

**DB queries**
- Via `widget_new_sql_genpageload.php` (see MACHINES spec)

**Includes/widgets**
- `widget_new_sql_genpageload.php`, `widget_new_metadata.php`, `widget_new_styles.php`, `widget_js.php`, `site.js`
- `header_test.php`, `widget_feet.php`, `widget_analytics.php`

**Rendered output**
- Static history/brand content with image tiles and link CTAs

**Edge cases / quirks**
- Content is static; page_id is set but not used directly in file

### 9) `sewing_machine_age.php` — Machine age lookup page

**Route/URL triggers**
- Direct: `/sewing_machine_age.php`

**Query params consumed**
- `q` → serial number (handled inside `widget_olde.php`)
- `branded=complete` → branded stitch completion state

**DB queries**
- None

**Includes/widgets**
- `widget_olde.php` (serial number range logic)
- `widget_new_sql_genpageload.php`, `widget_new_metadata.php`, `widget_new_styles.php`, `widget_js.php`, `site.js`
- `header_test.php`, `widget_feet.php`, `widget_footer_js.php`, `widget_analytics.php`

**Rendered output**
- Serial number form and age range output
- Branded stitch form and promo tiles (shared with other marketing landings)

**Edge cases / quirks**
- Form posts to `search1.php` (not `search.php`)
- Special cases for names like “Rob Merrow” or “Mary” return easter-egg content

### 10) `nfp1.php` — Machine categories + branded stitch landing

**Route/URL triggers**
- Direct: `/nfp1.php`

**Query params consumed**
- None

**DB queries**
- Via `widget_new_sql_genpageload.php` (see MACHINES spec)

**Includes/widgets**
- `widget_new_sql_genpageload.php`, `widget_new_metadata.php`, `widget_new_styles.php`, `widget_js.php`, `site.js`
- `header_test.php`, `widget_feet.php`, `widget_analytics.php`

**Rendered output**
- Three category tiles (fashion/technical/end-to-end) linking to `ncp1.php?a=`
- Branded stitch form (posts to `widget_sub_datamover.php` with `source=nbp`)
- Grey promo boxes, logo strip, agent map/blog/community tiles

**Edge cases / quirks**
- Branded stitch form always visible; return link uses JS behavior

### 11) `njp.php` — Jobs / careers page

**Route/URL triggers**
- Direct: `/njp.php?j=jobs` (expects `j` to match `jobs.app_key`)

**Query params consumed**
- `j` → `$bateman` → jobs.app_key
- `p` → selects which position detail view to show (`p=1|2|3`)
- `s` → `$page_id` via `widget_new_sql_genpageload.php`

**DB queries**
- `SELECT * FROM jobs WHERE jobs.app_key = '$bateman' AND publish = 'yes'`

**Includes/widgets**
- `widget_new_sql_genpageload.php`, `widget_new_metadata.php`, `widget_new_styles.php`, `widget_js.php`, `site.js`
- `header_test.php`, `widget_feet.php`, `widget_analytics.php`

**Rendered output**
- Jobs landing with hero image, quotes, and job cards
- `p=1|2|3` shows detail view with “Apply” mailto links

**Edge cases / quirks**
- If `j` missing or invalid, `$cumbutter` is null and page renders with empty fields

### 12) `apps.php` — Application selector (legacy)

**Route/URL triggers**
- Direct: `/apps.php`

**Query params consumed**
- `lang` cookie handling

**DB queries**
- None

**Includes/widgets**
- `ip_lang_database.php`
- `widget_main_google_menu.php` (see SUPPORT spec)
- `widget_leftmainmenu.php` (see SUPPORT spec)
- `widget_footer.php`, `widget_analytics.php` (see MACHINES spec)

**Rendered output**
- Three image tiles linking to `merrow_stitching.php?app=decorative|finishing|seaming`

**Edge cases / quirks**
- Static page; no data dependency

### 13) `needle_configurator.php` — Needle selection tool

**Route/URL triggers**
- Direct: `/needle_configurator.php`

**Query params consumed**
- `lang` cookie handling

**DB queries**
- None (data comes from Google Spreadsheet JSONP)

**Includes/widgets**
- `ip_lang_database.php`
- `widget_main_google_menu.php` (see SUPPORT spec)
- `widget_needles.php`

**Rendered output**
- Exhibit-based filter UI for needles using spreadsheet data
- Thickbox image previews; buy/more buttons depend on agent cookie (`$val`)

**Edge cases / quirks**
- Data source is external; page renders empty if spreadsheet is unavailable

### 14) `merrow.php` — Legacy home/landing page

**Route/URL triggers**
- Direct: `/merrow.php`

**Query params consumed**
- `lang` cookie handling

**DB queries**
- None

**Includes/widgets**
- `ip_lang_database.php`
- `widget_main_google_menu.php` (see SUPPORT spec)
- `widget_leftmainmenu_cp.php` (see SITE spec)
- `widget_cp_center.php`
- `widget_analytics.php` (see MACHINES spec)

**Rendered output**
- Static marketing tiles and links for machines, needles, services
- Includes CPC-style left menu (from SITE spec)

**Edge cases / quirks**
- No dynamic data; relies on external image assets

### 15) `stitchHD.php` — HD stitch gallery

**Route/URL triggers**
- Direct: `/stitchHD.php` (legacy counterpart to `stitch.php`)

**Query params consumed**
- `stitch`, `label`, `setnum`, `setnum1`, `setnam`, `resolution`, `marketplace`, `store` (handled by `widget_stitches_centerHD.php`)
- `lang` cookie handling

**DB queries**
- Via `widget_stitches_centerHD.php` (see widget section)

**Includes/widgets**
- `ip_lang_database.php`
- `widget_main_google_menu.php` (see SUPPORT spec)
- `widget_stitches_centerHD.php`
- `widget_analytics.php` (see MACHINES spec)

**Rendered output**
- PictoBrowser HD/SD stitch viewer with optional buy button

**Edge cases / quirks**
- Uses Flash-based PictoBrowser; no fallback

### 16) `thread.php` — Thread information page

**Route/URL triggers**
- Direct: `/thread.php`

**Query params consumed**
- `lang` cookie handling

**DB queries**
- None

**Includes/widgets**
- `ip_lang_database.php`
- `widget_footer.php`, `widget_analytics.php` (see MACHINES spec)

**Rendered output**
- Static thread information content

**Edge cases / quirks**
- No navigation menu include in file

### 17) `sr_needles.php` — Exhibit demo for needles

**Route/URL triggers**
- Direct: `/sr_needles.php`

**Query params consumed**
- None

**DB queries**
- None

**Includes/widgets**
- None

**Rendered output**
- Exhibit UI driven by local JSON (`../scripts/needles.js`, `../scripts/m_needle.js`)

**Edge cases / quirks**
- Standalone HTML without global nav or styles

### 18) `videoHD.php` — Vimeo HD video gallery

**Route/URL triggers**
- Direct: `/videoHD.php`

**Query params consumed**
- `lang` cookie handling

**DB queries**
- None

**Includes/widgets**
- `ip_lang_database.php`
- `widget_main_google_menu.php` (see SUPPORT spec)
- `widget_videoplayerHD.php`
- `widget_footer.php`, `widget_analytics.php` (see MACHINES spec)

**Rendered output**
- Embedded Vimeo Hubnut channel (Flash)

**Edge cases / quirks**
- Flash-only embed

### 19) `agent_choice.php` — Agent selection / low bandwidth contact

**Route/URL triggers**
- Direct: `/agent_choice.php?party_id={id}`
- Rewrite: `/agent_choice/party_id/{id}` → `agent_choice.php?party_id=$1`

**Query params consumed**
- `party_id` → selects agent; sets `dbname` and `tmpagent` cookies
- `choice` → sets bandwidth cookie
- `key` → controls message state for agent contact form
- `lang` cookie handling

**DB queries**
- `SELECT * FROM agents WHERE party_id=$party_id`

**Includes/widgets**
- `ip_lang_database.php`
- `widget_main_google_menu.php` (see SUPPORT spec)
- `widget_leftmainmenu.php` (see SUPPORT spec)
- `widget_agent_lowebandwidth_info.php`
- `widget_analytics.php` (see MACHINES spec)

**Rendered output**
- Agent-specific contact or store-choice UI
- Recaptcha-protected contact form posts to `widget_sub_datamover.php`

**Edge cases / quirks**
- If `party_id` invalid, cookie logic still runs but widget may show “fiddling with the URL” message

### 20) `about.php` — About page (legacy)

**Route/URL triggers**
- Direct: `/about.php`
- Redirects: `/aboutmerrow/engineer.htm`, `/aboutmerrow/history.htm`, `/WebStore-Privacy-Notice/`, `/WebStore-Terms-of-Use/` → `about.html` (not this PHP file)

**Query params consumed**
- `lang` cookie handling

**DB queries**
- None

**Includes/widgets**
- `ip_lang_database.php`
- `widget_main_google_menu.php` (see SUPPORT spec)
- `widget_history.php`
- `widget_footer.php`, `widget_analytics.php` (see MACHINES spec)

**Rendered output**
- Static “About Merrow” copy with image gallery (thickbox)

**Edge cases / quirks**
- Same content widget used by `history.php`

### 21) `history.php` — History page (legacy)

**Route/URL triggers**
- Direct: `/history.php`

**Query params consumed**
- `lang` cookie handling

**DB queries**
- None

**Includes/widgets**
- `ip_lang_database.php`
- `widget_main_menu.php` (see MACHINES spec)
- `widget_history.php`
- `widget_footer.php`, `widget_analytics.php` (see MACHINES spec)

**Rendered output**
- Same static history/management content as `about.php`

**Edge cases / quirks**
- Two different menu widgets used across about/history

### 22) `the70project.php` — KML output for map

**Route/URL triggers**
- Direct: `/the70project.php`

**Query params consumed**
- None

**DB queries**
- `SELECT id,name,lat,lng FROM textile_plants WHERE 1`

**Includes/widgets**
- `phpsqlajax_dbinfo.php`

**Rendered output**
- KML document with placemarks for textile plants

**Edge cases / quirks**
- Uses `$row['address']` and `$row['type']` but they are not selected in query

### 23) `talk.php` — Legacy talk page

**Route/URL triggers**
- Direct: `/talk.php`

**Query params consumed**
- `lang` cookie handling

**DB queries**
- None

**Includes/widgets**
- `ip_lang_database.php`
- `widget_main_menu.php` (see MACHINES spec)
- `widget_leftmainmenu.php` (see SUPPORT spec)
- `widget_stitchselector.php` (see SITE spec)
- `widget_analytics.php` (see MACHINES spec)

**Rendered output**
- Menu + stitch selector UI in center column

**Edge cases / quirks**
- No page-specific content beyond stitch selector

### 24) `merrow404.php` — Legacy 404 page

**Route/URL triggers**
- Direct: `/merrow404.php`

**Query params consumed**
- `lang` cookie handling

**DB queries**
- None

**Includes/widgets**
- `ip_lang_database.php`
- `widget_main_google_menu.php` (see SUPPORT spec)
- `widget_general_form.php` (see SITE spec)
- `widget_feet.php`, `widget_analytics.php` (see MACHINES spec)

**Rendered output**
- Error page with general contact form

**Edge cases / quirks**
- No dedicated 404 status handling in file

### 25) `video.php` — YouTube video gallery

**Route/URL triggers**
- Direct: `/video.php`

**Query params consumed**
- `lang` cookie handling

**DB queries**
- None

**Includes/widgets**
- `ip_lang_database.php`
- `widget_main_menu.php` (see MACHINES spec)
- `widget_videoplayer.php`
- `widget_analytics.php` (see MACHINES spec)

**Rendered output**
- YouTube SWF player with playlist and category quick links
- Loads `/youtube.php` as script for playlist data

**Edge cases / quirks**
- Flash-only YouTube player; depends on legacy API

### 26) `search.php` — Legacy search (Amazon SKU)

**Route/URL triggers**
- Direct: `/search.php?q={query}`

**Query params consumed**
- `q` → search term
- `s` → pagination offset (referenced but never read from GET)

**DB queries**
- `SELECT seller-sku FROM amazon_inventory_dupes WHERE asin1 LIKE "%$trimmed%" ORDER BY seller-sku LIMIT $s,$limit`

**Includes/widgets**
- None

**Rendered output**
- Plain list of matching seller SKUs
- Fallback link to Google search if no results

**Edge cases / quirks**
- `$s` is undefined, so pagination offset may be empty
- Echo text says “Your serial number” even though it’s a search

### 27) `search1.php` — Machine age lookup (standalone)

**Route/URL triggers**
- Direct: `/search1.php?q={serial}`

**Query params consumed**
- `q` → serial number

**DB queries**
- None

**Includes/widgets**
- None

**Rendered output**
- Same serial number range logic as `widget_olde.php`

**Edge cases / quirks**
- Duplicates age logic used by `sewing_machine_age.php`

### 28) `store.php` — Store landing page

**Route/URL triggers**
- Direct: `/store.php`

**Query params consumed**
- None

**DB queries**
- None

**Includes/widgets**
- `widget_main_google_menu.php` (see SUPPORT spec)
- `widget_static_store.php`
- `widget_footer.php`, `widget_analytics.php` (see MACHINES spec)

**Rendered output**
- Static product tiles and store links (store.merrow.com)

**Edge cases / quirks**
- No dynamic data; hardcoded product rows

### 29) `line_card.php` — Static line card

**Route/URL triggers**
- Direct: `/line_card.php`

**Query params consumed**
- None

**DB queries**
- None

**Includes/widgets**
- None

**Rendered output**
- Static line card layout with placeholder text and S3 images

**Edge cases / quirks**
- Appears to be a stub (placeholder values like “asdas”)

### 30) `email_signup.php` — Mailchimp signup embed

**Route/URL triggers**
- Direct: `/email_signup.php`

**Query params consumed**
- None

**DB queries**
- None

**Includes/widgets**
- None

**Rendered output**
- Mailchimp embed form with AJAX validation and JSONP submit

**Edge cases / quirks**
- External JS dependencies; no fallback

### 31) `merrow_wholesale.php` — Internal wholesale hub

**Route/URL triggers**
- Direct: `/merrow_wholesale.php`

**Query params consumed**
- None

**DB queries**
- Via `widget_wholesale.php`

**Includes/widgets**
- `widget_wholesale.php`

**Rendered output**
- Internal dashboard with links to pricing and analysis tools

**Edge cases / quirks**
- `NOINDEX, NOFOLLOW` meta; requires login via `widget_merrow_agent_login.php`

### 32) `merrow_enventory.php` — Internal inventory/parts view

**Route/URL triggers**
- Direct: `/merrow_enventory.php`

**Query params consumed**
- None (reads ASIN from `HTTP_REFERER` substring)

**DB queries**
- `SELECT * FROM asin WHERE asin_id='$mdk'`
- `SELECT DISTINCT msmc_id FROM asin WHERE asin.asin_id='$mdk'`
- `SELECT DISTINCT * FROM joinpd,pd_ref WHERE joinpd.pd = pd_ref.pd AND joinpd.asin_id='$mdk' GROUP BY pd_img`
- `SELECT DISTINCT * FROM joinpd,asin WHERE asin.asin_id = joinpd.asin_id AND joinpd.pd='$mumu'`

**Includes/widgets**
- `machinemenu.php`

**Rendered output**
- If `asin.show_what == 2`: machine menu + PictoBrowser stitch gallery
- If `asin.show_what == 3`: assembly diagrams (lightbox) + parts list with Amazon links
- Else: prints a support phone message

**Edge cases / quirks**
- Depends on `HTTP_REFERER` containing ASIN in last 14 characters; fails if referer missing
- Uses first row from diagram query for primary image and reuses result set for “other assemblies”

### 33) `merrow_reporting.php` — Internal reporting UI

**Route/URL triggers**
- Direct: `/merrow_reporting.php`

**Query params consumed**
- `logoff`, `lang` (session handling in widget)

**DB queries**
- Via `widget_reporting.php`

**Includes/widgets**
- `widget_reporting.php`

**Rendered output**
- phpMyEdit UI for `customer_forms`

**Edge cases / quirks**
- Requires active session with `exp_user` and `login_auth` `merrow` flag

### 34) `market_analysis.php` — Internal agent market analysis

**Route/URL triggers**
- Direct: `/market_analysis.php`

**Query params consumed**
- `logoff`, `lang`, `planet`, `prices`, `991212`, `key` (handled in widget)

**DB queries**
- `SELECT * FROM customer_forms WHERE customer_service_agent='not-assigned'`
- `SELECT * FROM login_auth_agent WHERE useremail='$name'`

**Includes/widgets**
- `ip_lang_database.php`
- `widget_specialdatabase_form.php`

**Rendered output**
- Internal login-gated form and prompts

**Edge cases / quirks**
- Redirects to `widget_merrow_agent_login.php` if session missing/expired

### 35) `global_analysis.php` — Internal global analysis

**Route/URL triggers**
- Direct: `/global_analysis.php`

**Query params consumed**
- `logoff`, `lang`, `planet`, `prices`, `991212`, `key` (handled in widget)

**DB queries**
- `SELECT * FROM customer_forms WHERE customer_service_agent='not-assigned'`
- `SELECT * FROM login_auth_global WHERE useremail='$name'`

**Includes/widgets**
- `ip_lang_database.php`
- `widget_globaldatabase_form.php`

**Rendered output**
- Internal login-gated global analysis form

**Edge cases / quirks**
- Redirects to `widget_merrow_agent_login.php` if session missing/expired

### 36) `global_plants.php` — Internal plant data tool (brief)

**Route/URL triggers**
- Direct: `/global_plants.php`

**Query params consumed**
- Obfuscated params `8787`, `33950019334xxlmmnot`, `908234klsdfzwe38hna9f7s` to construct `merid` cookie
- `frommap` toggles welcome/scoreboard section

**DB queries**
- `SELECT * FROM agent_word WHERE agent_id='$whole'` (or cookie)
- `SELECT * FROM agent_revenue WHERE party_id='$banana'`

**Includes/widgets**
- None

**Rendered output**
- Internal dashboard-like page with revenue scoreboard and calendar scripts

**Edge cases / quirks**
- Depends on obscure GET params or cookies for access

### 37) `textile_plants.php` — Internal plant data tool (brief)

**Route/URL triggers**
- Direct: `/textile_plants.php`

**Query params consumed**
- Same obfuscated params and cookies as `global_plants.php`

**DB queries**
- Same as `global_plants.php`

**Includes/widgets**
- None

**Rendered output**
- Internal dashboard; provides “View Map” link to `test_maps_1.php`

**Edge cases / quirks**
- Same cookie-based access pattern as `global_plants.php`

## Widgets (Behavioral Detail)

Widgets already documented in other specs (reference only)
- `widget_main_google_menu.php` → See `_AUDIT/SUPPORT_FUNCTIONAL_SPEC.md`
- `widget_main_menu.php` → See `_AUDIT/MACHINES_FUNCTIONAL_SPEC.md`
- `widget_leftmainmenu.php` → See `_AUDIT/SUPPORT_FUNCTIONAL_SPEC.md`
- `widget_leftmainmenu_cp.php` → See `_AUDIT/SITE_FUNCTIONAL_SPEC.md`
- `widget_stitchselector.php` → See `_AUDIT/SITE_FUNCTIONAL_SPEC.md`
- `widget_stitches_center.php` → See `_AUDIT/SITE_FUNCTIONAL_SPEC.md`
- `widget_footer.php`, `widget_feet.php`, `widget_footer_js.php`, `widget_analytics.php` → See `_AUDIT/MACHINES_FUNCTIONAL_SPEC.md`

### `widget_static_store.php`

**Triggered by**
- `store.php`

**Params**
- None

**DB queries**
- None

**Rendered output**
- Full static store-style layout with hardcoded product tiles and banners
- Links to `store.merrow.com` categories and `merrow.com` product pages

**Edge cases / quirks**
- Includes a stray `</head><body>` tag in widget markup (assumes it is the only body content)

### `widget_cp_center.php`

**Triggered by**
- `merrow.php`

**Params**
- None

**DB queries**
- None

**Rendered output**
- Marketing image tiles and a large static text block with deep links to stitches and applications

**Edge cases / quirks**
- Hardcoded links to `/a.php?app=5513` etc

### `widget_needles.php`

**Triggered by**
- `needle_configurator.php`

**Params**
- Uses `$val` from `ip_lang_database.php` (agent id) to choose buy/more buttons

**DB queries**
- None (Exhibit data loaded from Google Spreadsheet in parent page)

**Rendered output**
- Exhibit facets (size, metric, linear, point, coating)
- Thumbnail grid with thickbox image previews
- “Buy now” image for `val=767911`, otherwise “More” link to `caturl`

**Edge cases / quirks**
- Relies on external spreadsheet data; page renders empty on failure

### `widget_stitches_centerHD.php`

**Triggered by**
- `stitchHD.php`

**Params**
- `stitch`, `label`, `setnum`, `setnum1`, `setnam`, `resolution`, `marketplace`

**DB queries**
- `SELECT imgstoreurl, msmc_id, amzn_url, mmc_id, include_amazon FROM asin WHERE mmc_id='$stitch'`

**Rendered output**
- PictoBrowser embed
- HD mode uses `setnum`, SD mode uses `setnum1`
- If `label` matches known codes, shows descriptive label text
- Buy button shown when `include_amazon=1` and `val=767911`

**Edge cases / quirks**
- Query uses `$stitch` which is undefined in this file; should be `$noire` from `$_GET['stitch']`
- Default set uses hardcoded `whystitch` set id

### `widget_videoplayer.php`

**Triggered by**
- `video.php`

**Params**
- None

**DB queries**
- None

**Rendered output**
- YouTube SWFObject player with playlist and category quick links
- Search field calls JS `makeRequest` to load new playlist via `/youtube.php`

**Edge cases / quirks**
- Flash-only player; depends on legacy YouTube API

### `widget_videoplayerHD.php`

**Triggered by**
- `videoHD.php`

**Params**
- None

**DB queries**
- None

**Rendered output**
- Vimeo Hubnut Flash embed (user `user681101`, channel id `16829`)

**Edge cases / quirks**
- Flash-only embed

### `widget_history.php`

**Triggered by**
- `about.php`, `history.php`

**Params**
- None

**DB queries**
- None

**Rendered output**
- Long-form static “About Merrow” copy
- Thickbox gallery of history images
- Links to blog, Facebook, and mailto

**Edge cases / quirks**
- Purely static content

### `widget_olde.php`

**Triggered by**
- `sewing_machine_age.php`

**Params**
- `q` → serial number

**DB queries**
- None

**Rendered output**
- Serial number form and age-range text
- Easter-egg messages for specific names

**Edge cases / quirks**
- Range logic is hardcoded and duplicated in `search1.php`

### `widget_agent_lowebandwidth_info.php`

**Triggered by**
- `agent_choice.php`

**Params**
- `key` → controls state (`badcaptcha`, `missingfields`, `thankyou`)

**DB queries**
- `SELECT * FROM agents WHERE party_id='$val'`

**Rendered output**
- If agent has store: offers high/low bandwidth store links
- Else: displays contact form with reCAPTCHA posting to `widget_sub_datamover.php`

**Edge cases / quirks**
- If agent has no `account_name`, shows “fiddling with the URL” message

### `widget_reporting.php`

**Triggered by**
- `merrow_reporting.php`

**Params**
- `logoff` and session state via `exp_user`

**DB queries**
- `SELECT * FROM login_auth WHERE useremail='$name'`
- phpMyEdit operates on `customer_forms`

**Rendered output**
- phpMyEdit CRUD UI for `customer_forms`
- Fields include status, CSR assignment, urgency, name, email, message, dates, referral, production details, machine interest, CSR notes

**Edge cases / quirks**
- Redirects to `widget_merrow_login.php` if session missing/expired
- Denies access unless `login_auth.merrow` is set

### `widget_specialdatabase_form.php`

**Triggered by**
- `market_analysis.php`

**Params**
- `key`, `mature`, `planet`, `prices`, `991212`, `product`

**DB queries**
- `SELECT * FROM avail_models WHERE model_c='$new_name'`

**Rendered output**
- Large form with hidden fields and conditional headings
- Optional link to stitch gallery if model exists

**Edge cases / quirks**
- Uses `ereg_replace` (deprecated)
- Depends on external `$agents` and `$planner` variables set in parent scope

### `widget_globaldatabase_form.php`

**Triggered by**
- `global_analysis.php`

**Params**
- Same as `widget_specialdatabase_form.php`

**DB queries**
- `SELECT * FROM avail_models WHERE model_c='$new_name'`

**Rendered output**
- Same structure as specialdatabase form but global copy

**Edge cases / quirks**
- Depends on external `$agents` and `$planner` variables set in parent scope

### `widget_wholesale.php`

**Triggered by**
- `merrow_wholesale.php`

**Params**
- Session-based auth; `logoff` supported

**DB queries**
- `SELECT * FROM customer_forms WHERE customer_service_agent='not-assigned'`
- `SELECT * FROM login_auth_agent WHERE username='$name'`

**Rendered output**
- Internal dashboard with links to pricing and market analysis tools

**Edge cases / quirks**
- Redirects to `widget_merrow_agent_login.php` if session missing/expired

### `widget_merrow_agent_login.php`

**Triggered by**
- Direct access or redirects from internal pages

**Params**
- None

**DB queries**
- None (JS-driven login)

**Rendered output**
- Login container populated by `merrow_agent_login.js`

**Edge cases / quirks**
- No visible form without JS

### `machinemenu.php`

**Triggered by**
- `merrow_enventory.php`

**Params**
- Uses `$juju['media_keyword']` from parent query

**DB queries**
- None

**Rendered output**
- Mini menu linking to stitch samples, video, specs, and parts book

**Edge cases / quirks**
- Depends on `$juju` from parent scope

## API Endpoints

### `phpsqlsearch_genxml.php`

**URL**
- `/phpsqlsearch_genxml.php?lat={lat}&lng={lng}&radius={radius}`

**DB queries**
- `SELECT address, name, lat, lng, (distance calc) AS distance FROM markers HAVING distance < radius ORDER BY distance LIMIT 0,20`

**Output format**
- XML `<markers><marker ... /></markers>` with attributes `name`, `address`, `lat`, `lng`, `distance`

### `widget_sub_datamover.php`

**URL**
- `/widget_sub_datamover.php` (POST only)

**DB queries**
- `INSERT INTO customer_forms VALUES (NULL, name, email, message, time, date, language, ipaddress, browser, referer, party_id, application, urgency, sell, MG, M, A, 60, 70, 72, 18, 22, production_country, production_purpose, production_need, 'not-assigned', csr_note, 'open', interested_machine, refd, refa, NULL)`

**Output format**
- HTTP redirect to:
- `contact_general.php?key=missedafield` if email missing
- `contact_general.php?key=badcaptcha` if reCAPTCHA fails
- `contact_general.php?key=success` by default
- `HTTP_REFERER?form=complete` when `source=nfp`
- `HTTP_REFERER?branded=complete` when `source=nbp`

### `widget_merrow_agent_login.php`

**URL**
- `/widget_merrow_agent_login.php`

**DB queries**
- None

**Output format**
- HTML with JS-driven login form

### `the70project.php`

**URL**
- `/the70project.php`

**DB queries**
- `SELECT id,name,lat,lng FROM textile_plants WHERE 1`

**Output format**
- KML document with placemarks

## DB Dependency Table

| DB | Table | Columns Referenced | Used By | Notes |
|---|---|---|---|---|
| `merrowco_inventory` | `agents` | `party_id`, `store_db_name`, `store`, `account_name`, `city`, `state`, `name` | `finishing.php`, `agent_choice.php`, `widget_agent_lowebandwidth_info.php` | Agent lookup and store availability. |
| `merrowco_inventory` | `jobs` | `app_key`, `publish`, `quote`, `quote_author`, `p1_title`, `p1`, `p1_desc`, `p2_title`, `p2`, `p2_desc`, `p3_title`, `p3`, `p3_desc`, `p4_title`, `p4`, `app_title`, `app_link`, `app_copy`, `machine_title`, `machine_link`, `machine_copy`, `stitch_title`, `stitch_link`, `stitch_copy` | `njp.php` | Careers content. |
| `merrowco_inventory` | `asin` | `asin_id`, `show_what`, `media_keyword`, `msmc_id`, `amzn_url`, `imgurl_tiny`, `bullet_point_2`, `mrsp`, `mmc_id`, `imgstoreurl`, `include_amazon` | `merrow_enventory.php`, `widget_stitches_centerHD.php` | Parts metadata and stitch media. |
| `merrowco_inventory` | `joinpd` | `pd`, `asin_id` | `merrow_enventory.php` | Join between parts and diagrams. |
| `merrowco_inventory` | `pd_ref` | `pd`, `pd_img`, `pdurl_large`, `pdurl_medium`, `pdurl_tiny` | `merrow_enventory.php` | Diagram images. |
| `merrowco_inventory` | `markers` | `address`, `name`, `lat`, `lng` | `phpsqlsearch_genxml.php` | Dealer locator XML feed. |
| `merrowco_inventory` | `textile_plants` | `id`, `name`, `lat`, `lng`, `address`, `type` | `the70project.php` | KML feed for 70 project. |
| `merrowco_inventory` | `avail_models` | `model_c`, `model`, `whyunique` | `widget_specialdatabase_form.php`, `widget_globaldatabase_form.php` | Used to link to stitch gallery. |
| `merrowco_inventory` | `customer_forms` | `id`, `name`, `email`, `message`, `time`, `date`, `language`, `ipaddress`, `browser`, `referer`, `party_id`, `application`, `urgency`, `sell`, `MERMG`, `MERM`, `MERA`, `MER60`, `MER70`, `MER72`, `MER18`, `MER22`, `production_country`, `production_purpose`, `production_need`, `customer_service_agent`, `csr_note`, `status`, `interested_machine`, `refd`, `refa`, `datetest3`, `requested_party` | `widget_sub_datamover.php`, `widget_reporting.php`, `market_analysis.php`, `global_analysis.php`, `widget_wholesale.php` | Internal contact and tracking. |
| `merrowco_inventory` | `login_auth_agent` | `useremail`, `username`, `merrow`, `name` | `market_analysis.php`, `widget_wholesale.php` | Agent auth. |
| `merrowco_inventory` | `login_auth_global` | `useremail`, `merrow` | `global_analysis.php` | Global auth. |
| `merrowco_inventory` | `login_auth` | `useremail`, `merrow` | `widget_reporting.php` | Reporting auth. |
| `merrowco_inventory` | `agent_word` | `agent_id`, `table`, `party_id`, `name` | `global_plants.php`, `textile_plants.php` | Internal agent lookup. |
| `merrowco_inventory` | `agent_revenue` | `party_id`, `2008`, `2009` | `global_plants.php`, `textile_plants.php` | Internal revenue scoreboard. |
| `merrowso_hydedata` | `amazon_inventory_dupes` | `seller-sku`, `asin1` | `search.php` | Legacy SKU lookup. |

## Parameter Matrix

| URL | Params | Behavior |
|---|---|---|
| `/applications/app/{app}` | `app=decorative|finishing|seaming` | Loads Exhibit data (`decseam.js` or `finishing.js`); shows facets + results. |
| `/finishing.php` | `app`, `party_id`, `lang` | Selects Exhibit dataset; chooses agent by IP or `party_id`. |
| `/apps.php` | none | Static selector linking to `merrow_stitching.php?app=...`. |
| `/needle_configurator.php` | `lang` | Exhibit needle selector driven by Google Spreadsheet. |
| `/stitchHD.php` | `stitch`, `label`, `setnum`, `setnum1`, `setnam`, `resolution`, `marketplace` | HD/SD PictoBrowser viewer; optional Amazon buy button. |
| `/video.php` | none | YouTube SWF player; playlist loaded via `/youtube.php`. |
| `/videoHD.php` | none | Vimeo Hubnut channel embed. |
| `/agent_choice/party_id/{id}` | `party_id`, `choice`, `key`, `lang` | Sets cookies; shows agent store choice or contact form. |
| `/sewing_machine_age.php` | `q`, `branded` | Serial number age ranges; branded completion state if `branded=complete`. |
| `/search1.php` | `q` | Same serial-number range logic as `widget_olde.php`. |
| `/search.php` | `q`, `s` | Searches `amazon_inventory_dupes` by `asin1` and lists seller SKUs. |
| `/the70project.php` | none | Returns KML of textile plants. |
| `/phpsqlsearch_genxml.php` | `lat`, `lng`, `radius` | Returns XML of nearby markers. |
| `/merrow_enventory.php` | none (referer-based) | Loads parts or machine media based on ASIN in referer. |
| `/market_analysis.php` | `logoff`, `planet`, `prices`, `991212`, `key` | Login-gated internal form. |
| `/global_analysis.php` | `logoff`, `planet`, `prices`, `991212`, `key` | Login-gated internal form. |
| `/overlock-history` | none | Rewrites to `nhp1.php`. |
| `/agent_choice/party_id/{id}` | `party_id` | Rewrites to `agent_choice.php?party_id=$1`. |
| `/aboutmerrow/engineer.htm` | none | Redirects to `about.html`. |
| `/aboutmerrow/history.htm` | none | Redirects to `about.html`. |
| `/WebStore-Privacy-Notice/` | none | Redirects to `about.html`. |
| `/WebStore-Terms-of-Use/` | none | Redirects to `about.html`. |

## External Dependencies

- `images.imerrow.com` and `imerrow.com` image hosts, used across history/gallery, store tiles, stitch images, and buy buttons
- `merrow-media.s3.amazonaws.com` and `merrowservices.s3.amazonaws.com` for images and CSS
- `hydestore.com` for Lightwindow/Flowplayer assets (model_x, buttseam)
- `static.simile.mit.edu/exhibit` for Exhibit UI (applications, customers, needles)
- `spreadsheets.google.com` JSONP feeds (customers, needles)
- YouTube GData API (`gdata.youtube.com`) and SWF player (`youtube.com/apiplayerbeta`)
- Vimeo Hubnut embed (`vimeo.com/hubnut`) for HD videos
- PictoBrowser Flash (`db798.com/pictobrowser.swf`) and Flickr user `merrowmachine` (`userId=25997048@N06`)
- `store.merrow.com` and `catalog.merrow.com` for store/catalog links
- `merrow.com/cephei/scripts/*` for legacy JS (jquery, thickbox, menu scripts)
- Mailchimp embed (`merrow.us1.list-manage.com` + `downloads.mailchimp.com`)
- Google reCAPTCHA (`recaptchalib.php` + Google API) for agent contact forms

## Data Enumeration Needed

- All distinct `agents.party_id`, `agents.store_db_name`, `agents.store`, `agents.account_name` for agent routing and store behaviors
- All `jobs.app_key` values for valid `/njp.php?j=` views
- All `asin.asin_id`, `asin.show_what`, `asin.media_keyword`, `asin.mmc_id` values for inventory and stitch viewers
- All `joinpd.pd` and `pd_ref` rows to map assemblies to parts in `merrow_enventory.php`
- Full `markers` table for map marker feed testing
- Full `textile_plants` table for KML output testing
- All `avail_models.model_c` values used in special/global database forms
- Enumeration of `customer_forms.status` and `customer_service_agent` for reporting UI

## Acceptance Criteria (Testable)

1. `GET /applications/app/decorative` loads Exhibit data from `decseam.js` and shows facets + results.
2. `GET /applications/app/finishing` loads Exhibit data from `finishing.js` and shows facets + results.
3. `GET /overlock-history` renders the `nhp1.php` history landing page.
4. `GET /needle_configurator.php` renders needle facets and thumbnail grid with thickbox images.
5. `GET /stitchHD.php?resolution=high&setnum=72157607080597749&setnam=whystitch` renders the HD PictoBrowser embed.
6. `GET /agent_choice/party_id/767911` sets cookies and displays agent contact/store options.
7. `GET /sewing_machine_age.php?q=120000` returns “manufactured between 1951 and 1952”.
8. `GET /search.php?q=B0019QE30C` returns a list of seller SKUs or a Google fallback if none exist.
9. `GET /phpsqlsearch_genxml.php?lat=40.7&lng=-73.9&radius=50` returns XML with `<marker>` nodes and distance attributes.
10. `GET /the70project.php` returns valid KML with placemarks.
11. `GET /market_analysis.php` without a valid session redirects to `widget_merrow_agent_login.php`.
12. `GET /merrow_enventory.php` with a referer containing a valid ASIN renders either PictoBrowser or parts diagrams based on `asin.show_what`.

## Dead Routes

- `/dynamicstore/store/{id}` → `dynamicstore.php` (file missing)
- `/fp_support/class/{c}/key/{k}/party_id/{p}` → `fp_support.php` (file missing)

## Triage Classification

| File | Classification | Notes |
|---|---|---|
| `model_x.php` | PUBLIC-LEGACY | Static marketing page. |
| `buttseam.php` | DEAD | Entire page commented out. |
| `applications.php` | PUBLIC-LEGACY | Legacy Exhibit configurator. |
| `youtube.php` | API | JS asset for YouTube playlist. |
| `finishing.php` | PUBLIC-LEGACY | Exhibit app list with IP→agent mapping. |
| `customers.php` | PUBLIC-LEGACY | Exhibit + spreadsheet; intended IP gating is broken. |
| `activeseam.php` | PUBLIC-LEGACY | Marketing landing. |
| `nhp1.php` | PUBLIC-ACTIVE | Overlock history page. |
| `sewing_machine_age.php` | PUBLIC-LEGACY | Serial number age tool. |
| `nfp1.php` | PUBLIC-LEGACY | Alternative machines landing. |
| `njp.php` | PUBLIC-LEGACY | Jobs page. |
| `apps.php` | PUBLIC-LEGACY | Application selector. |
| `needle_configurator.php` | PUBLIC-LEGACY | Needle selection tool. |
| `merrow.php` | PUBLIC-LEGACY | Legacy home/landing. |
| `stitchHD.php` | PUBLIC-LEGACY | Flash stitch gallery. |
| `thread.php` | PUBLIC-LEGACY | Static thread page. |
| `sr_needles.php` | PUBLIC-LEGACY | Exhibit demo page. |
| `videoHD.php` | PUBLIC-LEGACY | Vimeo HD gallery. |
| `agent_choice.php` | INTERNAL | Noindex; agent/store workflow. |
| `about.php` | PUBLIC-ACTIVE | About page. |
| `history.php` | PUBLIC-ACTIVE | History page. |
| `the70project.php` | API | KML data output. |
| `talk.php` | PUBLIC-LEGACY | Legacy stitch selector page. |
| `merrow404.php` | PUBLIC-ACTIVE | 404 page. |
| `video.php` | PUBLIC-LEGACY | YouTube gallery (Flash). |
| `search.php` | PUBLIC-LEGACY | Legacy search utility. |
| `search1.php` | PUBLIC-LEGACY | Duplicate serial-number tool. |
| `store.php` | PUBLIC-LEGACY | Static store landing. |
| `line_card.php` | PUBLIC-LEGACY | Placeholder product card. |
| `email_signup.php` | PUBLIC-LEGACY | Mailchimp embed. |
| `phpsqlsearch_genxml.php` | API | Map marker XML feed. |
| `widget_sub_datamover.php` | API | Contact form handler. |
| `widget_merrow_agent_login.php` | INTERNAL | Agent login page. |
| `merrow_wholesale.php` | INTERNAL | Internal wholesale hub. |
| `merrow_enventory.php` | INTERNAL | Internal inventory/parts view. |
| `merrow_reporting.php` | INTERNAL | Internal reporting UI. |
| `market_analysis.php` | INTERNAL | Internal analysis tool. |
| `global_analysis.php` | INTERNAL | Internal analysis tool. |
| `global_plants.php` | INTERNAL | Internal data tool. |
| `textile_plants.php` | INTERNAL | Internal data tool. |

## Scope Exclusions

- `pd_*.php`, `70d3b2*.php`, `mkt_*.php`, `depricated_*.php`, `test*.php`, `X2010_*.php`
- `translate.php` (translation system infrastructure)
- Auth class files (`*.class.php`, `*.config.php`, `*.lang.php`, `*.post.php`)
- `phpMyEdit*.php` library files
- `STORAGE/` legacy ticketing system
