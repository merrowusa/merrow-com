-- Localize threading diagram URLs to use local /images/ paths
-- Affects: threading_diagrams table (img_url column)

UPDATE threading_diagrams
SET img_url = CONCAT('/images/threadingdiagrams/large/', image)
WHERE image IS NOT NULL
  AND image != '';
