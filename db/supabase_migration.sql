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
