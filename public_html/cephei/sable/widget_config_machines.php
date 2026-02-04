<? include ('widget_sub_configheader.php'); 


$opts['fdd']['id'] = array(
  'name'     => 'ID',
  'select'   => 'T',
  'options'  => 'AVCPDR', // auto increment
  'maxlen'   => 3,
  'default'  => '0',
  'sort'     => true
);



$opts['fdd']['machine1']['values']['db']     = 'merrowco_inventory'; // optional
$opts['fdd']['machine1']['values']['table']  = 'asin'; 
$opts['fdd']['machine1']['values']['column'] = 'ot_id'; 
$opts['fdd']['machine1']['values']['description'] = 'msmc_id'; // optional
$opts['fdd']['machine1']['values']['filters'] = '1 IN (product_menu1)'; // optional WHERE clause
$opts['fdd']['machine1']['name'] = 'Machine 1';

$opts['fdd']['machine2']['values']['table']  = 'asin'; 
$opts['fdd']['machine2']['values']['column'] = 'ot_id'; 
$opts['fdd']['machine2']['values']['description'] = 'msmc_id'; // optional
$opts['fdd']['machine2']['values']['filters'] = '1 IN (product_menu1)'; // optional WHERE clause
$opts['fdd']['machine2']['name'] = 'Machine 2';

$opts['fdd']['machine3']['values']['table']  = 'asin'; 
$opts['fdd']['machine3']['values']['column'] = 'ot_id'; 
$opts['fdd']['machine3']['values']['description'] = 'msmc_id'; // optional
$opts['fdd']['machine3']['values']['filters'] = '1 IN (product_menu1)'; // optional WHERE clause
$opts['fdd']['machine3']['name'] = 'Machine 3';

$opts['fdd']['machine4']['values']['table']  = 'asin'; 
$opts['fdd']['machine4']['values']['column'] = 'ot_id'; 
$opts['fdd']['machine4']['values']['description'] = 'msmc_id'; // optional
$opts['fdd']['machine4']['values']['filters'] = '1 IN (product_menu1)'; // optional WHERE clause
$opts['fdd']['machine4']['name'] = 'Machine 4';

$opts['fdd']['machine5']['values']['table']  = 'asin'; 
$opts['fdd']['machine5']['values']['column'] = 'ot_id'; 
$opts['fdd']['machine5']['values']['description'] = 'msmc_id'; // optional
$opts['fdd']['machine5']['values']['filters'] = '1 IN (product_menu1)'; // optional WHERE clause
$opts['fdd']['machine5']['name'] = 'Machine 5';

$opts['fdd']['machine6']['values']['table']  = 'asin'; 
$opts['fdd']['machine6']['values']['column'] = 'ot_id'; 
$opts['fdd']['machine6']['values']['description'] = 'msmc_id'; // optional
$opts['fdd']['machine6']['values']['filters'] = '1 IN (product_menu1)'; // optional WHERE clause
$opts['fdd']['machine6']['name'] = 'Machine 6';




// Now important call to phpMyEdit
require_once 'phpMyEdit.class.php';
new phpMyEdit($opts);

?>




</body>
</html>