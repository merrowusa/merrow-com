**Data Layer Audit**
Date: 2026-02-05

**Migration Status Matrix**
| Table | MySQL DB | Supabase Migration | Query Functions | Seed Data | Public Route Dependency | Priority |
|---|---|---|---|---|---|---|
| `machine_pages` | `merrowco_inventory` | YES | `getMachinePageByStyleKey`, `getAllPublishedMachines`, `getAllMachines`, `getAllMachineStyleKeys`, `getMachinesByCategory`, `getMachinesByClassKey` | YES (40 rows) | `/machines/[code]`, `/machines`, `/fashion-sewing`, `/technical-sewing`, `/end-to-end`, header nav | P0 |
| `application_pages` | `merrowco_inventory` | YES | `getApplicationByKey`, `getAllPublishedApplications`, `getApplicationsByCategory`, `getAllApplicationKeys`, `getCategoriesWithItems` | YES (72 rows) | `/sewing/applications/[app]`, category pages, header nav | P0 |
| `application_categories` | `merrowco_inventory` | YES | `getAllApplicationCategories`, `getApplicationCategoryByKey`, `getCategoriesWithItems` | YES (15 rows) | `/sewing/applications` categories, header nav | P0 |
| `technical` | `merrowco_inventory` | NO | `getTechnicalByClass` | NO | `/support/class/[c]/key/[k]` | P0 |
| `threading_diagrams` | `merrowco_inventory` | NO | `getThreadingDiagrams`, `getThreadingDiagramByImage` | NO | `/support` threading views, parts book list | P0 |
| `asin` | `merrowco_inventory` | NO | `getAsinByMediaKeyword` | NO | `/parts`, `/support` parts books | P0 |
| `joinpd` | `merrowco_inventory` | NO | none | NO | `/parts` drawings | P0 |
| `pd_ref` | `merrowco_inventory` | NO | none | NO | `/parts` drawings | P0 |
| `machine_categories` | `merrowco_inventory` | NO | none | NO | Header product menu class grouping | P1 |
| `seo_site_headers` | `merrowco_inventory` | NO | none | NO | `/`, category pages SEO | P1 |
| `customer_stories` | `merrowco_inventory` | YES | `getStoryByKey`, `getPublishedStories`, `getAllStories`, `getAllStoryKeys` | YES (5 rows) | `/customer-stories/featured/[s]` | P1 |
| `agents` | `merrowco_inventory` | YES | `getAllAgents`, `getAgentsForMap`, `getAgentsByCountry`, `searchAgentsByName`, `getAgentById`, `getAllAgentCountries` | YES (156 rows) | `/agentmap`, contact pages | P1 |
| `markers` | `merrowco_inventory` | NO | none | NO | `phpsqlsearch_genxml.php` dealer locator feed | P1 |
| `samples` | `merrowco_inventory` | NO | none | NO | Contact/sample request forms | P1 |
| `avail_models` | `merrowco_inventory` | NO | none | NO | Contact/sample request forms | P1 |
| `language` | `merrowco_inventory` | NO | none | NO | Legacy translations | P2 |
| `customer_forms` | `merrowco_inventory` | NO | none | NO | Contact/lead submissions, internal reporting | P2 |
| `login_auth` | `merrowco_inventory` | NO | none | NO | CMS/admin gating | P2 |
| `login_auth_agent` | `merrowco_inventory` | NO | none | NO | Agent-only pricing | P2 |
| `login_auth_global` | `merrowco_inventory` | NO | none | NO | Internal auth | P2 |
| `jobs` | `merrowco_inventory` | NO | none | NO | `/njp.php` careers | P3 |
| `agent_word` | `merrowco_inventory` | NO | none | NO | Internal plant dashboards | P3 |
| `agent_revenue` | `merrowco_inventory` | NO | none | NO | Internal plant dashboards | P3 |
| `textile_plants` | `merrowco_inventory` | NO | none | NO | `/the70project.php` map/KML | P3 |
| `amazon_inventory_dupes` | `merrowso_hydedata` | NO | none | NO | `/search.php` legacy SKU lookup | P3 |

Note: Dynamic `merrowco_cephei` tables driven by cookies are excluded per instruction (admin-only).

**Route-Critical Value Enumeration**
`machine_pages`
- `style_key` values: `18e, 70d3b2, 70d3b2g, 70d3b2rail, 70d3b2hp, 70d3b2ls, 70d3b2cnp, 70y3b2, 72d3b2r, 72d3b2, mg3unarrow, mg2dfs2, m3urefkit, m3u, mg3dge7, mg2u, mg4d45, mg2dnr1, mg3dw2, 70d3b2ls2, mg3uvelcro, mg3q3, mg3uwide, mg3dw7, mg3u, 18a, 17f, mg3d, mg2dnr1micro, mg3dwrl, mg3dw, mg3dwge7, mb4dfo, handheldbuttseamer, 12e, ultralight, 711d2, 711d2cnp, 711d7cnp, mg1dm`
- `class_key` values: `6611, 6612, 6613, 70, 72`
- `ot_id` values: `76791780, 76793414, 76803760, 76793432, 76793427, 76793444, 76793420, 76793458, 76803780, 76803782, 76797631, 2147483647, 76804310, 76797100, 76803964, 76797633, 76797649, 76797494, 76797564, 0, 76797634, 76797620, 76797637, 76797591, 76797629, 76791778, 76791764, 76797514, 76797497, 76797557, 76797561, 76803964, 2147483647, 76793432, 76804632, 76793432, 76803782, 76804717, 76804718, 0`
- publish counts: `yes=31`, `no=9`

`application_pages`
- `d_key` values: `MASTER, wideemblemedge, narrowemblemedge, standardemblemedge, flatemblemedge, velcroemblemedge, denim, fiberglass, cottonduck, vulcanizedrubber, filtermaterial, rolledbuttedseam, wovenfabric, tubularknits, wovengeotextiles, nonfabric, filtermaterial, overedgemilitaryblanket, flatcrochetstitch, rolledcrochetstitch, twothreadcrochet, purl, narrowrolledhem, structuralseam, micropurl, twoneedlestructuralseam, shagfleecemat, fleecehatsandoutfits, fleecelinedjeans, bibsandburpcloths, kevlarglove, nomexflightsuit, wovenblanket, patchesbadgesandinsignias, topofsockshell, ladieshosiery, purltanktop, microfiberslipcover, foldingnapkins, terryclothfacecloth, curtains, advancedprotectivecombatuniform, meshlaundrybag, woolbaselayer, technicalbaselayer, midweightfleece, linen, seatcushionfoam, jerseyknit, chiffonscarf, rolledfiberglassseam, polyesterfleece, tricot, gabardine, vinylleather, laminatedfabric, stretchnylon, nonwovengeotextile, activeseamcomfort, activeseamcomfort, activeseaminfused, activeseamslim, midweightfleece, woolbaselayer, technicalbaselayer, frmattresssock, circularknits, 195gmerinowool, 135gmerinowool, softshell, polartecpowerstretch, polartecpowerdry`
- `app_key` values: `0, 5512, 5513, 5514, 5515, 5516, 5517, 5518, 5519, 5520, 5522, 5523, 5524, 6621`
- publish counts: `yes=60`, `no=11`, blank=1

`application_categories`
- `app_key + app_category_name`: `5512:Emblem Edging; 5513:Joining Woven Material; 5514:Blanket Stitching; 5515:Lingerie; 5516:Baby Garments; 5517:Military Seaming; 5518:Women's Garments; 5519:Home DÃ©cor; 5520:Netting and Mesh; 5522:Athletic Apparel; 0:; 5523:Joining Knit Material; 5524:Joining Non-Wovens; 0:; 6621:ActiveSeam&#153; Flat Overlock`

`agents`
- count by country: `the United States: 85, Canada: 4, Poland: 4, Guatemala: 3, Thailand: 2, Hong Kong: 2, Mexico: 2, France: 2, India: 2, Vietnam: 2, Italy: 2, Spain: 1, Austrailia: 1, Estonia: 1, Belgium: 1, Honduras: 1, Turkey: 1, the United Arab Emirates: 1, Peru: 1, Israel: 1, Sweden: 1, Greece: 1, Pakistan: 1, Japan: 1, Tawain: 1, Russia: 1, Switzerland: 1, Korea: 1, Dominican Republic: 1, Argentina: 1, Netherlands: 1, Nicaragua: 1, Portugal: 1, Lithuania: 1, Mauritius: 1, Ethiopia: 1, Indonesia: 1, Philippines: 1, Malaysia: 1, Bulgaria: 1, Chile: 1, Ecuador: 1, Belarus: 1, Venezuela: 1, Uruguay: 1, Paraguay: 1, Norway: 1, Panama: 1, El Salvador: 1, Romania: 1, Colombia: 1, China: 1, Brazil: 1, Germany: 1, South Africa: 1, Egypt: 1, the United Kingdom: 1`
- `show_map='yes'` count: 155
- `party_id` sample: `10996, 10871, 10863, 10895, 10886, 10822, 10802, 10834, 10824, 10970`

`customer_stories`
- `app_key` values: `csrw, csb1, csam, hce, csb`
- publish counts: `yes=3`, `no=2`

**Missing Table Analysis**
| Table | MySQL Schema | Row Count | Columns Needed for Refactor | Routes Blocked Without It | Migration Complexity |
|---|---|---|---|---|---|
| `technical` | `class` varchar(10), 40+ `longtext` columns like `setup`, `maintenance`, `trouble_*`, `maint_*` | 4 rows (includes header row) | all text columns, accessed via dynamic `key` param | `/support/class/[c]/key/[k]` | SIMPLE |
| `threading_diagrams` | `id` char(3), `name` varchar(20), `image` varchar(100), `img_url` varchar(100) | 50 | all | `/support` threading, parts book list | SIMPLE |
| `asin` | 114 columns, key fields: `id`, `asin_id`, `ot_id`, `mmc_id`, `msmc_id`, `product_name`, `description`, `media_keyword`, `partsbook_url/img/name`, `mrsp`, `display_*`, `include_amazon` plus 80+ catalog fields | 2812 | parts fields + dimensions + media links | `/parts`, `/support` parts books, `stitch.php` | MODERATE |
| `joinpd` | `pd` varchar(100), `asin_id` varchar(10) | 3648 | all | `/parts` drawings | SIMPLE |
| `pd_ref` | `pd` varchar(100), `desc` varchar(100), `pd_img`, `pdurl_large`, `pdurl_medium`, `pdurl_tiny` | 243 | all | `/parts` drawings | SIMPLE |
| `machine_categories` | `id` int, `class_key`, `class_category_name`, `class_category_short_name`, `class_category_url_name`, `class_category_seo_*` | 5 | `class_key` + category names | header product menu | SIMPLE |
| `seo_site_headers` | `id` int auto, `page_key`, `title`, `description`, `keywords` | 7 | all | `/`, category pages, SEO metadata | SIMPLE |
| `samples` | `label`, `reference`, `class`, `whyunique`, `whatmachine`, `merrowsupport`, `inproduction`, `model` | 170 | `label`, `model`, `whyunique` | contact/sample forms | SIMPLE |
| `avail_models` | `id` int auto, `model_c`, `model` | 84 | `model_c`, `model` | contact/sample forms | SIMPLE |
| `markers` | `id` int auto, `party_id`, `name`, `address`, `lat`, `lng`, `phone`, `revenue`, `status`, `sell_service`, `qualified_status`, `merrowcsr`, `email_status`, `big_ad`, `biz`, `machine_number`, `name1` | 2537 | `name`, `address`, `lat`, `lng`, `party_id` | dealer locator XML feed | MODERATE |
| `language` | very wide translation table with `menu_*`, `drawers_*`, `stitch_selector_*` | 3 | `language`, `stitch_selector_2`, `stitch_selector_3` | legacy translations | COMPLEX |
| `customer_forms` | PII-heavy contact form table with ~35 fields + `datetest3` timestamp | 63783 | internal-only | internal reporting/forms | COMPLEX |
| `login_auth` | `id`, `username`, `userpassword`, `useremail`, `merrow`, `name` | 6 | admin auth | CMS/admin | COMPLEX |
| `login_auth_agent` | same as `login_auth` + `md5` | 201 | agent auth | agent pricing | COMPLEX |
| `login_auth_global` | same as `login_auth` + `md5` | 23 | global auth | internal | COMPLEX |
| `jobs` | content page fields similar to customer stories | 3 | all | `/njp.php` | SIMPLE |
| `agent_word` | `id`, `party_id`, `agent_id`, `partner`, `table`, `name`, `welcome`, `country`, `part_table`, `geo_center_lat/lng`, `zoom`, `campaign1` | 34 | internal | internal dashboards | SIMPLE |
| `agent_revenue` | `id`, `party_id`, `2006`, `2007`, `2008`, `2009` | 1 | internal | internal dashboards | SIMPLE |
| `textile_plants` | agent-like map table with address + `lat/lng` + `merrow_customer`, `source`, `short_notes` | 157 | map fields | `/the70project.php` | MODERATE |
| `amazon_inventory_dupes` | not present in `merrowco_inventory` dump | unknown | `seller-sku`, `asin1` | `/search.php` | MODERATE |

**Query Function Gap Analysis**
| Route | Required Data | Existing Query Function | Gap |
|---|---|---|---|
| `/support/class/[c]/key/[k]` | `technical` row + dynamic column by `key` | `getTechnicalByClass(classKey)` | Missing `key` filtering and table migration |
| `/support` (threading view) | `threading_diagrams` list + images | `getThreadingDiagrams()` | Table missing |
| `/support` (parts books) | `asin` by `media_keyword` | `getAsinByMediaKeyword(keyword)` | Table missing |
| `/parts` | `asin` by `ot_id/mmc_id`, `joinpd`, `pd_ref` | none | Missing queries and table migrations |
| `/parts/pricing` | `customer_forms`, `login_auth_global` | none | Missing migrations; internal-only |
| `/agent_book` | `threading_diagrams`, parts books | `getThreadingDiagrams()` | Table missing |
| `/machines/[code]` | `machine_pages` by `style_key` | `getMachinePageByStyleKey(styleKey)` | OK (verify full column coverage in schema) |
| `/machines` index | published machines | `getAllPublishedMachines()` | OK |
| `/fashion-sewing`, `/technical-sewing`, `/end-to-end` | category machines | `getMachinesByCategory(category)` | OK |
| `/sewing/applications/[app]` | application by `d_key` | `getApplicationByKey(dKey)` | OK |
| `/sewing/applications` categories | categories + items | `getCategoriesWithItems(appKeys)` | OK (data present but not complete vs MySQL) |
| `/customer-stories/featured/[s]` | customer story by `app_key` | `getStoryByKey(appKey)` | OK |
| `/` home | `seo_site_headers` + featured stories | `getPublishedStories()` | Missing `seo_site_headers` migration and queries |
| `/agentmap` | agents list, map data | `getAgentsForMap()` | OK for agents; legacy map XML needs `markers` migration |
| `/contact_general` | agents + samples + avail_models | `getAllAgents()` | Missing `samples` and `avail_models` migrations/queries |
| `/stitch` | `asin` for stitch media | none | Missing `asin` migration/queries |
| `/announcements` | no DB | none | OK |
| `/search.php` | `amazon_inventory_dupes` | none | Missing table migration |
| `/phpsqlsearch_genxml.php` | `markers` | none | Missing table migration |
| `/njp.php` | `jobs` | none | Missing table migration |
| `/the70project.php` | `textile_plants` | none | Missing table migration |

**Missing Supabase Migrations to Write**
Table: `technical`
```sql
CREATE TABLE IF NOT EXISTS technical (
  class VARCHAR(10) PRIMARY KEY,
  setup TEXT NOT NULL DEFAULT '',
  setup_needles TEXT NOT NULL DEFAULT '',
  setup_loopers TEXT NOT NULL DEFAULT '',
  setup_threading TEXT NOT NULL DEFAULT '',
  setup_gencutting TEXT NOT NULL DEFAULT '',
  setup_knife TEXT NOT NULL DEFAULT '',
  setup_sharpening TEXT NOT NULL DEFAULT '',
  setup_feeddogs TEXT NOT NULL DEFAULT '',
  setup_presser TEXT NOT NULL DEFAULT '',
  setup_framecap TEXT NOT NULL DEFAULT '',
  maintenance TEXT NOT NULL DEFAULT '',
  trouble_needles TEXT NOT NULL DEFAULT '',
  trouble_feeding TEXT NOT NULL DEFAULT '',
  trouble_stitch TEXT NOT NULL DEFAULT '',
  trouble_oil TEXT NOT NULL DEFAULT '',
  trouble_skippedstitch TEXT NOT NULL DEFAULT '',
  trouble_thread TEXT NOT NULL DEFAULT '',
  trouble_latchhooks TEXT NOT NULL DEFAULT '',
  trouble_loosestitches TEXT NOT NULL DEFAULT '',
  trouble_skippedstitches TEXT NOT NULL DEFAULT '',
  trouble_breakingneedles TEXT NOT NULL DEFAULT '',
  trouble_needleholes TEXT NOT NULL DEFAULT '',
  maint_lubrication TEXT NOT NULL DEFAULT '',
  maint_needles TEXT NOT NULL DEFAULT '',
  maint_needleguard TEXT NOT NULL DEFAULT '',
  maint_needlebar TEXT NOT NULL DEFAULT '',
  maint_castoff TEXT NOT NULL DEFAULT '',
  maint_fixedcastoff TEXT NOT NULL DEFAULT '',
  maint_needlelever TEXT NOT NULL DEFAULT '',
  maint_hook TEXT NOT NULL DEFAULT '',
  maint_hookcarrier TEXT NOT NULL DEFAULT '',
  maint_fingerplate TEXT NOT NULL DEFAULT '',
  maint_spreader TEXT NOT NULL DEFAULT '',
  maint_tensions TEXT NOT NULL DEFAULT '',
  maint_feedALL TEXT NOT NULL DEFAULT '',
  maint_feedPLAIN TEXT NOT NULL DEFAULT '',
  maint_feedSHELL TEXT NOT NULL DEFAULT '',
  maint_threadcarrier TEXT NOT NULL DEFAULT '',
  maint_threading TEXT NOT NULL DEFAULT '',
  maint_fabricguard TEXT NOT NULL DEFAULT ''
);
```
Column mapping notes: direct mapping; no renames.
Seed data: `db/mysql/merrowco_inventory.sql` (4 rows, first row appears to be header labels).

Table: `threading_diagrams`
```sql
CREATE TABLE IF NOT EXISTS threading_diagrams (
  id CHAR(3) PRIMARY KEY,
  name VARCHAR(20) NOT NULL DEFAULT '',
  image VARCHAR(100) NOT NULL DEFAULT '',
  img_url VARCHAR(100) NOT NULL DEFAULT ''
);
```
Column mapping notes: direct mapping.
Seed data: `db/mysql/merrowco_inventory.sql` (50 rows).

Table: `asin`
```sql
CREATE TABLE IF NOT EXISTS asin (
  id TEXT PRIMARY KEY,
  asin_id TEXT NOT NULL DEFAULT '',
  ot_id TEXT NOT NULL DEFAULT '',
  mmc_id TEXT NOT NULL DEFAULT '',
  msmc_id TEXT NOT NULL DEFAULT '',
  product_name TEXT NOT NULL DEFAULT '',
  equipment_type TEXT NOT NULL DEFAULT '',
  brand TEXT NOT NULL DEFAULT '',
  manufacturer TEXT NOT NULL DEFAULT '',
  manufacturer_part_number TEXT NOT NULL DEFAULT '',
  imgurl_large TEXT NOT NULL DEFAULT '',
  imgurl_medium TEXT NOT NULL DEFAULT '',
  imgurl_tiny TEXT NOT NULL DEFAULT '',
  imgstoreurl TEXT NOT NULL DEFAULT '',
  advertisement_line_for_store TEXT NOT NULL DEFAULT '',
  description TEXT NOT NULL DEFAULT '',
  pdurl_large TEXT NOT NULL DEFAULT '',
  pdurl_medium TEXT NOT NULL DEFAULT '',
  pd_id TEXT NOT NULL DEFAULT '',
  amzn_url TEXT NOT NULL DEFAULT '',
  media_keyword TEXT NOT NULL DEFAULT '',
  media_setnumber TEXT NOT NULL DEFAULT '',
  rail_setnumber TEXT NOT NULL DEFAULT '',
  setup_url TEXT NOT NULL DEFAULT '',
  maint_url TEXT NOT NULL DEFAULT '',
  trouble_url TEXT NOT NULL DEFAULT '',
  long_desc TEXT NOT NULL DEFAULT '',
  merchant_catalog_number TEXT NOT NULL DEFAULT '',
  bullet_point_1 TEXT NOT NULL DEFAULT '',
  bullet_point_2 TEXT NOT NULL DEFAULT '',
  bullet_point_3 TEXT NOT NULL DEFAULT '',
  bullet_point_4 TEXT NOT NULL DEFAULT '',
  bullet_point_5 TEXT NOT NULL DEFAULT '',
  spec_speed TEXT NOT NULL DEFAULT '',
  spec_numthread TEXT NOT NULL DEFAULT '',
  spec_needlethread TEXT NOT NULL DEFAULT '',
  spec_loopers TEXT NOT NULL DEFAULT '',
  spec_needlerange TEXT NOT NULL DEFAULT '',
  spec_eccentricrange TEXT NOT NULL DEFAULT '',
  spec_standardeccentric TEXT NOT NULL DEFAULT '',
  spec_seamwidthrange TEXT NOT NULL DEFAULT '',
  spec_standardseamwidth TEXT NOT NULL DEFAULT '',
  spec_seamtype TEXT NOT NULL DEFAULT '',
  spec_standardneedle TEXT NOT NULL DEFAULT '',
  spec_looperthread TEXT NOT NULL DEFAULT '',
  partsbook_url TEXT NOT NULL DEFAULT '',
  partsbook_img TEXT NOT NULL DEFAULT '',
  partsbook_name TEXT NOT NULL DEFAULT '',
  show_what TEXT NOT NULL DEFAULT '',
  embed_video TEXT NOT NULL DEFAULT '',
  book_page TEXT NOT NULL DEFAULT '',
  product_type TEXT NOT NULL DEFAULT '',
  prop_65 TEXT NOT NULL DEFAULT '',
  item_type TEXT NOT NULL DEFAULT '',
  used_for_1 TEXT NOT NULL DEFAULT '',
  used_for_2 TEXT NOT NULL DEFAULT '',
  used_for_3 TEXT NOT NULL DEFAULT '',
  used_for_4 TEXT NOT NULL DEFAULT '',
  used_for_5 TEXT NOT NULL DEFAULT '',
  target_audience_1 TEXT NOT NULL DEFAULT '',
  target_audience_2 TEXT NOT NULL DEFAULT '',
  target_audience_3 TEXT NOT NULL DEFAULT '',
  search_terms_1 TEXT NOT NULL DEFAULT '',
  search_terms_2 TEXT NOT NULL DEFAULT '',
  search_terms_3 TEXT NOT NULL DEFAULT '',
  search_terms_4 TEXT NOT NULL DEFAULT '',
  search_terms_5 TEXT NOT NULL DEFAULT '',
  main_image_url TEXT NOT NULL DEFAULT '',
  swatch_image_url TEXT NOT NULL DEFAULT '',
  other_img1 TEXT NOT NULL DEFAULT '',
  other_img2 TEXT NOT NULL DEFAULT '',
  other_img3 TEXT NOT NULL DEFAULT '',
  other_img4 TEXT NOT NULL DEFAULT '',
  other_img5 TEXT NOT NULL DEFAULT '',
  other_img6 TEXT NOT NULL DEFAULT '',
  other_img7 TEXT NOT NULL DEFAULT '',
  other_img8 TEXT NOT NULL DEFAULT '',
  display_length TEXT NOT NULL DEFAULT '',
  display_length_unit_of_measure TEXT NOT NULL DEFAULT '',
  display_width TEXT NOT NULL DEFAULT '',
  display_width_unit_of_measure TEXT NOT NULL DEFAULT '',
  display_height TEXT NOT NULL DEFAULT '',
  display_height_unit_of_measure TEXT NOT NULL DEFAULT '',
  display_weight TEXT NOT NULL DEFAULT '',
  display_weight_unit_of_measure TEXT NOT NULL DEFAULT '',
  launch_date TEXT NOT NULL DEFAULT '',
  release_date TEXT NOT NULL DEFAULT '',
  mrsp TEXT NOT NULL DEFAULT '',
  item_price TEXT NOT NULL DEFAULT '',
  sales_price TEXT NOT NULL DEFAULT '',
  currency TEXT NOT NULL DEFAULT '',
  sale_start_date TEXT NOT NULL DEFAULT '',
  sale_end_date TEXT NOT NULL DEFAULT '',
  quantity TEXT NOT NULL DEFAULT '',
  leadtime_to_ship TEXT NOT NULL DEFAULT '',
  store_url TEXT NOT NULL DEFAULT '',
  store_main TEXT NOT NULL DEFAULT '',
  store_needles TEXT NOT NULL DEFAULT '',
  store_tools TEXT NOT NULL DEFAULT '',
  store_topsellers TEXT NOT NULL DEFAULT '',
  store_tablesmotors TEXT NOT NULL DEFAULT '',
  store_general TEXT NOT NULL DEFAULT '',
  store_specials TEXT NOT NULL DEFAULT '',
  store_deals TEXT NOT NULL DEFAULT '',
  store_refurbished TEXT NOT NULL DEFAULT '',
  store_3rdparty TEXT NOT NULL DEFAULT '',
  store_bomlist TEXT NOT NULL DEFAULT '',
  include_amazon TEXT NOT NULL DEFAULT '',
  product_menu1 CHAR(2) NOT NULL DEFAULT '',
  product_menu2 CHAR(2) NOT NULL DEFAULT '',
  product_menu3 CHAR(2) NOT NULL DEFAULT '',
  product_menu4 CHAR(2) NOT NULL DEFAULT '',
  product_menu5 CHAR(2) NOT NULL DEFAULT '',
  product_menu6 CHAR(2) NOT NULL DEFAULT ''
);
```
Column mapping notes: `MainImageURL` -> `main_image_url`, `SwatchImageURL` -> `swatch_image_url`, `Other img1..8` -> `other_img1..8`. MySQL columns with case-sensitive collation (`ot_id`, `item_price`) stored as TEXT.
Seed data: `db/mysql/merrowco_inventory.sql` (2812 rows).

Table: `joinpd`
```sql
CREATE TABLE IF NOT EXISTS joinpd (
  pd VARCHAR(100) NOT NULL DEFAULT '',
  asin_id VARCHAR(10) NOT NULL DEFAULT '',
  PRIMARY KEY (pd, asin_id)
);
```
Column mapping notes: direct mapping.
Seed data: `db/mysql/merrowco_inventory.sql` (3648 rows).

Table: `pd_ref`
```sql
CREATE TABLE IF NOT EXISTS pd_ref (
  pd VARCHAR(100) NOT NULL DEFAULT '',
  desc VARCHAR(100) NOT NULL DEFAULT '',
  pd_img VARCHAR(200) NOT NULL DEFAULT '',
  pdurl_large VARCHAR(200) NOT NULL DEFAULT '',
  pdurl_medium VARCHAR(200) NOT NULL DEFAULT '',
  pdurl_tiny VARCHAR(200) NOT NULL DEFAULT ''
);
```
Column mapping notes: direct mapping; consider renaming `desc` to `description` if desired (update queries accordingly).
Seed data: `db/mysql/merrowco_inventory.sql` (243 rows).

Table: `machine_categories`
```sql
CREATE TABLE IF NOT EXISTS machine_categories (
  id INTEGER PRIMARY KEY,
  class_key VARCHAR(30) NOT NULL DEFAULT '',
  class_category_name VARCHAR(200) NOT NULL DEFAULT '',
  class_category_short_name VARCHAR(50) NOT NULL DEFAULT '',
  class_category_url_name VARCHAR(200) NOT NULL DEFAULT '',
  class_category_seo_title VARCHAR(300) NOT NULL DEFAULT '',
  class_category_seo_description VARCHAR(300) NOT NULL DEFAULT '',
  class_category_seo_keywords VARCHAR(300) NOT NULL DEFAULT ''
);
```
Column mapping notes: direct mapping.
Seed data: `db/mysql/merrowco_inventory.sql` (5 rows).

Table: `seo_site_headers`
```sql
CREATE TABLE IF NOT EXISTS seo_site_headers (
  id SERIAL PRIMARY KEY,
  page_key VARCHAR(20) NOT NULL DEFAULT '',
  title TEXT NOT NULL DEFAULT '',
  description TEXT NOT NULL DEFAULT '',
  keywords TEXT NOT NULL DEFAULT ''
);
```
Column mapping notes: direct mapping.
Seed data: `db/mysql/merrowco_inventory.sql` (7 rows).

Table: `samples`
```sql
CREATE TABLE IF NOT EXISTS samples (
  label VARCHAR(15) NOT NULL DEFAULT '',
  reference VARCHAR(20) NOT NULL DEFAULT '',
  class VARCHAR(30) NOT NULL DEFAULT '',
  whyunique TEXT NOT NULL DEFAULT '',
  whatmachine TEXT NOT NULL DEFAULT '',
  merrowsupport TEXT NOT NULL DEFAULT '',
  inproduction TEXT NOT NULL DEFAULT '',
  model VARCHAR(30) NOT NULL DEFAULT ''
);
```
Column mapping notes: direct mapping.
Seed data: `db/mysql/merrowco_inventory.sql` (170 rows).

Table: `avail_models`
```sql
CREATE TABLE IF NOT EXISTS avail_models (
  id SERIAL PRIMARY KEY,
  model_c VARCHAR(30) NOT NULL DEFAULT '',
  model VARCHAR(30) NOT NULL DEFAULT ''
);
```
Column mapping notes: direct mapping.
Seed data: `db/mysql/merrowco_inventory.sql` (84 rows).

Table: `markers`
```sql
CREATE TABLE IF NOT EXISTS markers (
  id SERIAL PRIMARY KEY,
  party_id VARCHAR(10) NOT NULL DEFAULT '',
  name VARCHAR(60) NOT NULL DEFAULT '',
  address VARCHAR(80) NOT NULL DEFAULT '',
  lat VARCHAR(30) NOT NULL DEFAULT '',
  lng VARCHAR(30) NOT NULL DEFAULT '',
  phone VARCHAR(30) NOT NULL DEFAULT '',
  revenue BIGINT NOT NULL DEFAULT 0,
  last_sale VARCHAR(10) NOT NULL DEFAULT '',
  date_updated VARCHAR(10) NOT NULL DEFAULT '',
  email VARCHAR(50) NOT NULL DEFAULT '',
  sell_service VARCHAR(100) NOT NULL DEFAULT '',
  status VARCHAR(100) NOT NULL DEFAULT '',
  qualified_status VARCHAR(200) NOT NULL DEFAULT '',
  merrowcsr VARCHAR(50) NOT NULL DEFAULT '',
  email_status VARCHAR(100) NOT NULL DEFAULT '',
  big_ad VARCHAR(20) NOT NULL DEFAULT '',
  name1 VARCHAR(200) NOT NULL DEFAULT '',
  biz VARCHAR(20) NOT NULL DEFAULT '',
  machine_number VARCHAR(3) NOT NULL DEFAULT ''
);
```
Column mapping notes: direct mapping; consider converting `lat/lng` to numeric after migration.
Seed data: `db/mysql/merrowco_inventory.sql` (2537 rows).

**Verification Script**
Path: `_AUDIT/scripts/verify-data-layer.ts`
Usage:
```bash
MERROW_SUPABASE_URL=https://xxx.supabase.co MERROW_SUPABASE_SERVICE_ROLE_KEY=xxx npx tsx _AUDIT/scripts/verify-data-layer.ts
```
The script:
- Probes all known tables for existence, row count, and a sample row.
- Calls every query function in `packages/data-layer/queries` with sample inputs.
- Outputs a single JSON blob with table and function results.
