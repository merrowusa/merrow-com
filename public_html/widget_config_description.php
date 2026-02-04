<? include ('widget_sub_configheader.php'); 


$opts['fdd']['id'] = array(
  'name'     => 'ID',
  'select'   => 'T',
  'options'  => 'AVCPDR', // auto increment
  'maxlen'   => 3,
  'default'  => '0',
  'sort'     => true
);


$opts['fdd']['company_sells'] = array(
  'name'     => 'Description of what you sell',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['company_about'] = array(
  'name'     => 'About us (20 words about your company)',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['company_territory'] = array(
  'name'     => 'Where do you sell and support equipment',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);




// Now important call to phpMyEdit
require_once 'phpMyEdit.class.php';
new phpMyEdit($opts);

?>



</body>
</html>