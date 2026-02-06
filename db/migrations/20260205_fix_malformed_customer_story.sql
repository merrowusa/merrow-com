-- Remove malformed customer story slug that breaks routing
DELETE FROM customer_stories
WHERE app_key = '0http:/www.merrow.com/a.php';
