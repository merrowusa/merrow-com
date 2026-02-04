<? include ('widget_sub_configheader.php'); 


$opts['fdd']['id'] = array(
  'name'     => 'ID',
  'select'   => 'T',
  'options'  => 'AVCPDR', // auto increment
  'maxlen'   => 3,
  'default'  => '0',
  'sort'     => true
);



$opts['fdd']['merrow_catalog1']['values']['table']  = 'catalog_match'; 
$opts['fdd']['merrow_catalog1']['values']['column'] = 'second_name'; 
$opts['fdd']['merrow_catalog1']['values']['description'] = 'name'; // optional
$opts['fdd']['merrow_catalog1']['name'] = 'CATALOG ONE';

$opts['fdd']['merrow_catalog2']['values']['table']  = 'catalog_match'; 
$opts['fdd']['merrow_catalog2']['values']['column'] = 'second_name'; 
$opts['fdd']['merrow_catalog2']['values']['description'] = 'name'; // optional
$opts['fdd']['merrow_catalog2']['name'] = 'CATALOG TWO';

$opts['fdd']['merrow_catalog3']['values']['table']  = 'catalog_match'; 
$opts['fdd']['merrow_catalog3']['values']['column'] = 'second_name'; 
$opts['fdd']['merrow_catalog3']['values']['description'] = 'name'; // optional
$opts['fdd']['merrow_catalog3']['name'] = 'CATALOG THREE';



// Now important call to phpMyEdit
require_once 'phpMyEdit.class.php';
new phpMyEdit($opts);

?>

 <div class="exit_button"><input type="submit" id="Exit" value="&nbsp;&nbsp;Close Window&nbsp;&nbsp;" onClick="history.go()" /></div>


</body>
</html>