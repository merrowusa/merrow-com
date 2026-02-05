-- Merrow.com Database Migration for Supabase
-- Migrated from MySQL (merrowco_inventory) to PostgreSQL
-- Run this in Supabase SQL Editor

-- ============================================
-- Table: machine_pages (62 records)
-- ============================================
CREATE TABLE IF NOT EXISTS machine_pages (
  id SERIAL PRIMARY KEY,
  pkey INTEGER NOT NULL,
  class_key VARCHAR(50) NOT NULL DEFAULT '',
  fashion_key VARCHAR(4) NOT NULL DEFAULT '',
  technical_key VARCHAR(4) NOT NULL DEFAULT '',
  e2e_key VARCHAR(4) NOT NULL DEFAULT '',
  code VARCHAR(15) NOT NULL DEFAULT '',
  ot_id INTEGER NOT NULL DEFAULT 0,
  publish VARCHAR(3) NOT NULL DEFAULT 'no',
  style VARCHAR(30) NOT NULL DEFAULT '',
  header VARCHAR(215) NOT NULL DEFAULT '',
  description TEXT NOT NULL DEFAULT '',
  style_key VARCHAR(25) NOT NULL DEFAULT '',
  page_key VARCHAR(20) NOT NULL DEFAULT '',
  mrsp VARCHAR(10) NOT NULL DEFAULT '',
  speed VARCHAR(10) NOT NULL DEFAULT '',
  stitch_range VARCHAR(30) NOT NULL DEFAULT '',
  stitch_width VARCHAR(40) NOT NULL DEFAULT '',
  seam_type VARCHAR(10) NOT NULL DEFAULT '',
  feeds VARCHAR(50) NOT NULL DEFAULT '',
  cutter VARCHAR(50) NOT NULL DEFAULT '',
  threads VARCHAR(50) NOT NULL DEFAULT '',
  needles VARCHAR(50) NOT NULL DEFAULT '',
  number_of_thumbs VARCHAR(2) NOT NULL DEFAULT '',
  number_of_videos VARCHAR(2) NOT NULL DEFAULT '',
  video_tagline1 VARCHAR(215) NOT NULL DEFAULT '',
  video_tagline2 VARCHAR(215) NOT NULL DEFAULT '',
  youtube1 VARCHAR(100) NOT NULL DEFAULT '',
  youtube2 VARCHAR(100) NOT NULL DEFAULT '',
  overview TEXT NOT NULL DEFAULT '',
  how TEXT NOT NULL DEFAULT '',
  why TEXT NOT NULL DEFAULT '',
  "where" TEXT NOT NULL DEFAULT '',
  primary_app VARCHAR(200) NOT NULL DEFAULT '',
  secondary_app VARCHAR(200) NOT NULL DEFAULT '',
  complete_app_list TEXT NOT NULL DEFAULT '',
  flickr_set VARCHAR(25) NOT NULL DEFAULT '',
  contact_stitch VARCHAR(215) NOT NULL DEFAULT '',
  needle_standard VARCHAR(215) NOT NULL DEFAULT '',
  needle_range VARCHAR(215) NOT NULL DEFAULT '',
  needle_plate VARCHAR(215) NOT NULL DEFAULT '',
  eccentrics VARCHAR(215) NOT NULL DEFAULT '',
  upper_looper VARCHAR(215) NOT NULL DEFAULT '',
  lower_looper VARCHAR(215) NOT NULL DEFAULT '',
  stitch_type VARCHAR(215) NOT NULL DEFAULT '',
  height VARCHAR(10) NOT NULL DEFAULT '',
  width VARCHAR(10) NOT NULL DEFAULT '',
  length VARCHAR(10) NOT NULL DEFAULT '',
  weight VARCHAR(20) NOT NULL DEFAULT '',
  env VARCHAR(100) NOT NULL DEFAULT '',
  noise VARCHAR(10) NOT NULL DEFAULT '',
  heat VARCHAR(10) NOT NULL DEFAULT '',
  installation VARCHAR(215) NOT NULL DEFAULT '',
  motor_spec VARCHAR(215) NOT NULL DEFAULT '',
  fabrics VARCHAR(215) NOT NULL DEFAULT '',
  shipping_size VARCHAR(40) NOT NULL DEFAULT '',
  shipping_weight VARCHAR(10) NOT NULL DEFAULT '',
  seo_title TEXT NOT NULL DEFAULT '',
  seo_keywords TEXT NOT NULL DEFAULT '',
  seo_search_description TEXT NOT NULL DEFAULT '',
  seo_search_keywords TEXT NOT NULL DEFAULT '',
  seo_search_title TEXT NOT NULL DEFAULT '',
  seo_brand TEXT NOT NULL DEFAULT '',
  marketing_url1 VARCHAR(100) NOT NULL DEFAULT '',
  marketing_url2 VARCHAR(100) NOT NULL DEFAULT '',
  marketing_url3 VARCHAR(100) NOT NULL DEFAULT '',
  marketing_url4 VARCHAR(100) NOT NULL DEFAULT '',
  marketing_url5 VARCHAR(100) NOT NULL DEFAULT '',
  marketing_icon1 VARCHAR(100) NOT NULL DEFAULT '',
  marketing_icon2 VARCHAR(100) NOT NULL DEFAULT '',
  marketing_icon3 VARCHAR(100) NOT NULL DEFAULT '',
  marketing_icon4 VARCHAR(100) NOT NULL DEFAULT '',
  marketing_icon5 VARCHAR(100) NOT NULL DEFAULT '',
  marketing_tagline1 VARCHAR(100) NOT NULL DEFAULT '',
  marketing_tagline2 VARCHAR(100) NOT NULL DEFAULT '',
  marketing_tagline3 VARCHAR(100) NOT NULL DEFAULT '',
  marketing_tagline4 VARCHAR(100) NOT NULL DEFAULT '',
  marketing_tagline5 VARCHAR(100) NOT NULL DEFAULT '',
  price INTEGER NOT NULL DEFAULT 0
);

-- ============================================
-- Table: agents (159 records)
-- ============================================
CREATE TABLE IF NOT EXISTS agents (
  id SERIAL PRIMARY KEY,
  store CHAR(3) NOT NULL DEFAULT '',
  store_db_name VARCHAR(30) NOT NULL DEFAULT '',
  show_map VARCHAR(5) NOT NULL DEFAULT '',
  party_id VARCHAR(200) NOT NULL DEFAULT '',
  account_name VARCHAR(200) NOT NULL DEFAULT '',
  name VARCHAR(200) NOT NULL DEFAULT '',
  address VARCHAR(200) NOT NULL DEFAULT '',
  city VARCHAR(200) NOT NULL DEFAULT '',
  state VARCHAR(200) NOT NULL DEFAULT '',
  zip VARCHAR(200) NOT NULL DEFAULT '',
  country VARCHAR(200) NOT NULL DEFAULT '',
  email VARCHAR(200) NOT NULL DEFAULT '',
  phone VARCHAR(40) NOT NULL DEFAULT '',
  fax VARCHAR(40) NOT NULL DEFAULT '',
  latitude VARCHAR(30) NOT NULL DEFAULT '',
  longitude VARCHAR(30) NOT NULL DEFAULT '',
  full_address VARCHAR(200) NOT NULL DEFAULT '',
  content_key1 VARCHAR(200) NOT NULL DEFAULT '',
  content_key2 VARCHAR(200) NOT NULL DEFAULT '',
  color VARCHAR(200) NOT NULL DEFAULT '',
  icon VARCHAR(200) NOT NULL DEFAULT '',
  short_notes TEXT NOT NULL DEFAULT '',
  years CHAR(3) NOT NULL DEFAULT ''
);

-- ============================================
-- Table: application_categories (15 records)
-- ============================================
CREATE TABLE IF NOT EXISTS application_categories (
  id SERIAL PRIMARY KEY,
  app_key INTEGER NOT NULL DEFAULT 0,
  app_category_name VARCHAR(200) NOT NULL DEFAULT '',
  app_category_short_name VARCHAR(50) NOT NULL DEFAULT '',
  app_category_url_name VARCHAR(200) NOT NULL DEFAULT '',
  app_category_seo_title VARCHAR(300) NOT NULL DEFAULT '',
  app_category_seo_description VARCHAR(300) NOT NULL DEFAULT '',
  app_category_seo_keywords VARCHAR(300) NOT NULL DEFAULT ''
);

-- ============================================
-- Table: application_pages (76 records)
-- ============================================
CREATE TABLE IF NOT EXISTS application_pages (
  id SERIAL PRIMARY KEY,
  app_key INTEGER NOT NULL DEFAULT 0,
  d_key VARCHAR(50) NOT NULL DEFAULT '',
  style_key VARCHAR(30) NOT NULL DEFAULT '',
  page_key VARCHAR(20) NOT NULL DEFAULT '',
  app_title VARCHAR(100) NOT NULL DEFAULT '',
  app_menu_title VARCHAR(100) NOT NULL DEFAULT '',
  layout_order INTEGER NOT NULL DEFAULT 0,
  seo_title VARCHAR(200) NOT NULL DEFAULT '',
  seo_description TEXT NOT NULL DEFAULT '',
  seo_keywords TEXT NOT NULL DEFAULT '',
  popup_title VARCHAR(50) NOT NULL DEFAULT '',
  popup_subtitle VARCHAR(200) NOT NULL DEFAULT '',
  popup_1stcolumn TEXT NOT NULL DEFAULT '',
  popup_2ndcolumn TEXT NOT NULL DEFAULT '',
  machine_url VARCHAR(200) NOT NULL DEFAULT '',
  app_nav_title VARCHAR(150) NOT NULL DEFAULT '',
  app_right_title VARCHAR(300) NOT NULL DEFAULT '',
  app_right_p VARCHAR(300) NOT NULL DEFAULT '',
  stitch_width VARCHAR(25) NOT NULL DEFAULT '',
  machine_speed VARCHAR(10) NOT NULL DEFAULT '',
  fabric_material VARCHAR(100) NOT NULL DEFAULT '',
  thread_number INTEGER NOT NULL DEFAULT 0,
  thread_material VARCHAR(100) NOT NULL DEFAULT '',
  machine_model VARCHAR(20) NOT NULL DEFAULT '',
  machine_price VARCHAR(20) NOT NULL DEFAULT '',
  publish VARCHAR(3) NOT NULL DEFAULT 'no'
);

-- ============================================
-- Table: customer_stories (5 records)
-- ============================================
CREATE TABLE IF NOT EXISTS customer_stories (
  id SERIAL PRIMARY KEY,
  app_key VARCHAR(30) NOT NULL DEFAULT '',
  quote TEXT NOT NULL DEFAULT '',
  quote_author VARCHAR(40) NOT NULL DEFAULT '',
  p1 TEXT NOT NULL DEFAULT '',
  p2 TEXT NOT NULL DEFAULT '',
  p3 TEXT NOT NULL DEFAULT '',
  p4 TEXT NOT NULL DEFAULT '',
  p1_title VARCHAR(100) NOT NULL DEFAULT '',
  p2_title VARCHAR(100) NOT NULL DEFAULT '',
  p3_title VARCHAR(100) NOT NULL DEFAULT '',
  p4_title VARCHAR(100) NOT NULL DEFAULT '',
  app_title VARCHAR(50) NOT NULL DEFAULT '',
  app_copy VARCHAR(200) NOT NULL DEFAULT '',
  machine_title VARCHAR(50) NOT NULL DEFAULT '',
  machine_copy VARCHAR(200) NOT NULL DEFAULT '',
  stitch_title VARCHAR(50) NOT NULL DEFAULT '',
  stitch_copy VARCHAR(100) NOT NULL DEFAULT '',
  app_link VARCHAR(200) NOT NULL DEFAULT '',
  machine_link VARCHAR(200) NOT NULL DEFAULT '',
  stitch_link VARCHAR(200) NOT NULL DEFAULT '',
  customer_link VARCHAR(300) NOT NULL DEFAULT '',
  publish VARCHAR(3) NOT NULL DEFAULT 'no'
);

-- Create indexes for common queries
CREATE INDEX IF NOT EXISTS idx_machine_pages_style_key ON machine_pages(style_key);
CREATE INDEX IF NOT EXISTS idx_machine_pages_publish ON machine_pages(publish);
CREATE INDEX IF NOT EXISTS idx_machine_pages_class_key ON machine_pages(class_key);
CREATE INDEX IF NOT EXISTS idx_agents_country ON agents(country);
CREATE INDEX IF NOT EXISTS idx_agents_show_map ON agents(show_map);
CREATE INDEX IF NOT EXISTS idx_application_pages_app_key ON application_pages(app_key);
CREATE INDEX IF NOT EXISTS idx_application_pages_publish ON application_pages(publish);
CREATE INDEX IF NOT EXISTS idx_customer_stories_app_key ON customer_stories(app_key);
CREATE INDEX IF NOT EXISTS idx_customer_stories_publish ON customer_stories(publish);

-- ============================================
-- P0 Tables (Support + Parts)
-- ============================================

-- Table: technical (4 records)
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

-- Table: threading_diagrams (50 records)
CREATE TABLE IF NOT EXISTS threading_diagrams (
  id CHAR(3) PRIMARY KEY,
  name VARCHAR(20) NOT NULL DEFAULT '',
  image VARCHAR(100) NOT NULL DEFAULT '',
  img_url VARCHAR(100) NOT NULL DEFAULT ''
);

-- Table: asin (2810 records)
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

-- Table: joinpd (3648 records)
CREATE TABLE IF NOT EXISTS joinpd (
  pd VARCHAR(100) NOT NULL DEFAULT '',
  asin_id VARCHAR(10) NOT NULL DEFAULT '',
  PRIMARY KEY (pd, asin_id)
);

-- Table: pd_ref (243 records)
-- NOTE: `desc` is reserved in PostgreSQL, renamed to `description`.
CREATE TABLE IF NOT EXISTS pd_ref (
  pd VARCHAR(100) NOT NULL DEFAULT '',
  description VARCHAR(100) NOT NULL DEFAULT '',
  pd_img VARCHAR(200) NOT NULL DEFAULT '',
  pdurl_large VARCHAR(200) NOT NULL DEFAULT '',
  pdurl_medium VARCHAR(200) NOT NULL DEFAULT '',
  pdurl_tiny VARCHAR(200) NOT NULL DEFAULT ''
);

-- Indexes for P0 tables
CREATE INDEX IF NOT EXISTS idx_technical_class ON technical (class);
CREATE INDEX IF NOT EXISTS idx_asin_ot_id ON asin (ot_id);
CREATE INDEX IF NOT EXISTS idx_asin_mmc_id ON asin (mmc_id);
CREATE INDEX IF NOT EXISTS idx_asin_media_keyword ON asin (media_keyword);
CREATE INDEX IF NOT EXISTS idx_joinpd_asin_id ON joinpd (asin_id);
CREATE INDEX IF NOT EXISTS idx_joinpd_pd ON joinpd (pd);
CREATE INDEX IF NOT EXISTS idx_pd_ref_pd ON pd_ref (pd);

-- ============================================
-- P1 Tables (Contact/SEO)
-- ============================================

-- Table: machine_categories (5 records)
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

-- Table: seo_site_headers (7 records)
CREATE TABLE IF NOT EXISTS seo_site_headers (
  id SERIAL PRIMARY KEY,
  page_key VARCHAR(20) NOT NULL DEFAULT '',
  title TEXT NOT NULL DEFAULT '',
  description TEXT NOT NULL DEFAULT '',
  keywords TEXT NOT NULL DEFAULT ''
);

-- Table: samples (170 records)
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

-- Table: avail_models (84 records)
CREATE TABLE IF NOT EXISTS avail_models (
  id SERIAL PRIMARY KEY,
  model_c VARCHAR(30) NOT NULL DEFAULT '',
  model VARCHAR(30) NOT NULL DEFAULT ''
);
