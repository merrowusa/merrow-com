-- Localize legacy imerrow.com asset URLs to /images paths
-- Date: 2026-02-05

-- Products (inventory images)
UPDATE "asin" SET "imgurl_large" = REPLACE(REPLACE(REPLACE("imgurl_large",
  'http://imerrow.com/nebula/inventory/large_inventory/', '/images/products/large/'),
  'http://imerrow.com/nebula/inventory/medium_inventory/', '/images/products/medium/'),
  'http://imerrow.com/nebula/inventory/tiny_inventory/', '/images/products/thumb/')
WHERE "imgurl_large" LIKE '%http://imerrow.com/nebula/inventory/%';

UPDATE "asin" SET "imgurl_medium" = REPLACE(REPLACE(REPLACE("imgurl_medium",
  'http://imerrow.com/nebula/inventory/large_inventory/', '/images/products/large/'),
  'http://imerrow.com/nebula/inventory/medium_inventory/', '/images/products/medium/'),
  'http://imerrow.com/nebula/inventory/tiny_inventory/', '/images/products/thumb/')
WHERE "imgurl_medium" LIKE '%http://imerrow.com/nebula/inventory/%';

UPDATE "asin" SET "imgurl_tiny" = REPLACE(REPLACE(REPLACE("imgurl_tiny",
  'http://imerrow.com/nebula/inventory/large_inventory/', '/images/products/large/'),
  'http://imerrow.com/nebula/inventory/medium_inventory/', '/images/products/medium/'),
  'http://imerrow.com/nebula/inventory/tiny_inventory/', '/images/products/thumb/')
WHERE "imgurl_tiny" LIKE '%http://imerrow.com/nebula/inventory/%';

UPDATE "asin" SET "main_image_url" = REPLACE(REPLACE(REPLACE("main_image_url",
  'http://imerrow.com/nebula/inventory/large_inventory/', '/images/products/large/'),
  'http://imerrow.com/nebula/inventory/medium_inventory/', '/images/products/medium/'),
  'http://imerrow.com/nebula/inventory/tiny_inventory/', '/images/products/thumb/')
WHERE "main_image_url" LIKE '%http://imerrow.com/nebula/inventory/%';

UPDATE "asin" SET "swatch_image_url" = REPLACE(REPLACE(REPLACE("swatch_image_url",
  'http://imerrow.com/nebula/inventory/large_inventory/', '/images/products/large/'),
  'http://imerrow.com/nebula/inventory/medium_inventory/', '/images/products/medium/'),
  'http://imerrow.com/nebula/inventory/tiny_inventory/', '/images/products/thumb/')
WHERE "swatch_image_url" LIKE '%http://imerrow.com/nebula/inventory/%';

UPDATE "asin" SET "other_img1" = REPLACE(REPLACE(REPLACE("other_img1",
  'http://imerrow.com/nebula/inventory/large_inventory/', '/images/products/large/'),
  'http://imerrow.com/nebula/inventory/medium_inventory/', '/images/products/medium/'),
  'http://imerrow.com/nebula/inventory/tiny_inventory/', '/images/products/thumb/')
WHERE "other_img1" LIKE '%http://imerrow.com/nebula/inventory/%';

UPDATE "asin" SET "other_img2" = REPLACE(REPLACE(REPLACE("other_img2",
  'http://imerrow.com/nebula/inventory/large_inventory/', '/images/products/large/'),
  'http://imerrow.com/nebula/inventory/medium_inventory/', '/images/products/medium/'),
  'http://imerrow.com/nebula/inventory/tiny_inventory/', '/images/products/thumb/')
WHERE "other_img2" LIKE '%http://imerrow.com/nebula/inventory/%';

UPDATE "asin" SET "other_img3" = REPLACE(REPLACE(REPLACE("other_img3",
  'http://imerrow.com/nebula/inventory/large_inventory/', '/images/products/large/'),
  'http://imerrow.com/nebula/inventory/medium_inventory/', '/images/products/medium/'),
  'http://imerrow.com/nebula/inventory/tiny_inventory/', '/images/products/thumb/')
WHERE "other_img3" LIKE '%http://imerrow.com/nebula/inventory/%';

UPDATE "asin" SET "other_img4" = REPLACE(REPLACE(REPLACE("other_img4",
  'http://imerrow.com/nebula/inventory/large_inventory/', '/images/products/large/'),
  'http://imerrow.com/nebula/inventory/medium_inventory/', '/images/products/medium/'),
  'http://imerrow.com/nebula/inventory/tiny_inventory/', '/images/products/thumb/')
WHERE "other_img4" LIKE '%http://imerrow.com/nebula/inventory/%';

UPDATE "asin" SET "other_img5" = REPLACE(REPLACE(REPLACE("other_img5",
  'http://imerrow.com/nebula/inventory/large_inventory/', '/images/products/large/'),
  'http://imerrow.com/nebula/inventory/medium_inventory/', '/images/products/medium/'),
  'http://imerrow.com/nebula/inventory/tiny_inventory/', '/images/products/thumb/')
WHERE "other_img5" LIKE '%http://imerrow.com/nebula/inventory/%';

UPDATE "asin" SET "other_img6" = REPLACE(REPLACE(REPLACE("other_img6",
  'http://imerrow.com/nebula/inventory/large_inventory/', '/images/products/large/'),
  'http://imerrow.com/nebula/inventory/medium_inventory/', '/images/products/medium/'),
  'http://imerrow.com/nebula/inventory/tiny_inventory/', '/images/products/thumb/')
WHERE "other_img6" LIKE '%http://imerrow.com/nebula/inventory/%';

UPDATE "asin" SET "other_img7" = REPLACE(REPLACE(REPLACE("other_img7",
  'http://imerrow.com/nebula/inventory/large_inventory/', '/images/products/large/'),
  'http://imerrow.com/nebula/inventory/medium_inventory/', '/images/products/medium/'),
  'http://imerrow.com/nebula/inventory/tiny_inventory/', '/images/products/thumb/')
WHERE "other_img7" LIKE '%http://imerrow.com/nebula/inventory/%';

UPDATE "asin" SET "other_img8" = REPLACE(REPLACE(REPLACE("other_img8",
  'http://imerrow.com/nebula/inventory/large_inventory/', '/images/products/large/'),
  'http://imerrow.com/nebula/inventory/medium_inventory/', '/images/products/medium/'),
  'http://imerrow.com/nebula/inventory/tiny_inventory/', '/images/products/thumb/')
WHERE "other_img8" LIKE '%http://imerrow.com/nebula/inventory/%';

-- Drawings (parts diagrams)
UPDATE "asin" SET "pdurl_large" = REPLACE("pdurl_large",
  'http://imerrow.com/nebula/inventory/pdurl_large/', '/images/drawings/large/')
WHERE "pdurl_large" LIKE '%http://imerrow.com/nebula/inventory/pdurl_large/%';

UPDATE "asin" SET "pdurl_medium" = REPLACE("pdurl_medium",
  'http://imerrow.com/nebula/inventory/pdurl_medium/', '/images/drawings/medium/')
WHERE "pdurl_medium" LIKE '%http://imerrow.com/nebula/inventory/pdurl_medium/%';

UPDATE "pd_ref" SET "pdurl_large" = REPLACE("pdurl_large",
  'http://imerrow.com/nebula/inventory/pdurl_large/', '/images/drawings/large/')
WHERE "pdurl_large" LIKE '%http://imerrow.com/nebula/inventory/pdurl_large/%';

UPDATE "pd_ref" SET "pdurl_medium" = REPLACE("pdurl_medium",
  'http://imerrow.com/nebula/inventory/pdurl_medium/', '/images/drawings/medium/')
WHERE "pdurl_medium" LIKE '%http://imerrow.com/nebula/inventory/pdurl_medium/%';

UPDATE "pd_ref" SET "pdurl_tiny" = REPLACE("pdurl_tiny",
  'http://imerrow.com/nebula/inventory/pdurl_tiny/', '/images/drawings/thumb/')
WHERE "pdurl_tiny" LIKE '%http://imerrow.com/nebula/inventory/pdurl_tiny/%';

-- Store + machine icons
UPDATE "asin" SET "imgstoreurl" = REPLACE("imgstoreurl",
  'http://imerrow.com/nebula/images/store/new_jpgs/', '/images/store/')
WHERE "imgstoreurl" LIKE '%http://imerrow.com/nebula/images/store/new_jpgs/%';

UPDATE "asin" SET "imgstoreurl" = REPLACE("imgstoreurl",
  'http://imerrow.com/nebula/images/machines/', '/images/machines/')
WHERE "imgstoreurl" LIKE '%http://imerrow.com/nebula/images/machines/%';
