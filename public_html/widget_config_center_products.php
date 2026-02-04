<? include ('widget_sub_configheader.php'); 


$opts['fdd']['id'] = array(
  'name'     => 'ID',
  'select'   => 'T',
  'options'  => 'AVCPDR', // auto increment
  'maxlen'   => 3,
  'default'  => '0',
  'sort'     => true
);


$opts['fdd']['custom_center_product5_name'] = array(
  'name'     => 'Product 1 name',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['custom_center_product5_description'] = array(
  'name'     => 'Product 1 description',
  'select'   => 'T',
  'maxlen'   => 600,
  'sort'     => true
);
$opts['fdd']['custom_center_product5_price'] = array(
  'name'     => 'Product 1 price',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['custom_center_product6_name'] = array(
  'name'     => 'Product 2 name',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['custom_center_product6_description'] = array(
  'name'     => 'Product 2 description',
  'select'   => 'T',
  'maxlen'   => 600,
  'sort'     => true
);
$opts['fdd']['custom_center_product6_price'] = array(
  'name'     => 'Product 2 price',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['custom_center_product7_name'] = array(
  'name'     => 'Product 3 name',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['custom_center_product7_description'] = array(
  'name'     => 'Product 3 description',
  'select'   => 'T',
  'maxlen'   => 600,
  'sort'     => true
);
$opts['fdd']['custom_center_product7_price'] = array(
  'name'     => 'Product 3 price',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['custom_center_product8_name'] = array(
  'name'     => 'Product 4 name',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['custom_center_product8_description'] = array(
  'name'     => 'Product 4 description',
  'select'   => 'T',
  'maxlen'   => 600,
  'sort'     => true
);
$opts['fdd']['custom_center_product8_price'] = array(
  'name'     => 'Product 4 price',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);


$opts['fdd']['custom_center_product9_name'] = array(
  'name'     => 'Product 1 name',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['custom_center_product9_description'] = array(
  'name'     => 'Product 1 description',
  'select'   => 'T',
  'maxlen'   => 600,
  'sort'     => true
);
$opts['fdd']['custom_center_product9_price'] = array(
  'name'     => 'Product 1 price',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['custom_center_product10_name'] = array(
  'name'     => 'Product 2 name',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['custom_center_product10_description'] = array(
  'name'     => 'Product 2 description',
  'select'   => 'T',
  'maxlen'   => 600,
  'sort'     => true
);
$opts['fdd']['custom_center_product10_price'] = array(
  'name'     => 'Product 2 price',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['custom_center_product11_name'] = array(
  'name'     => 'Product 3 name',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['custom_center_product11_description'] = array(
  'name'     => 'Product 3 description',
  'select'   => 'T',
  'maxlen'   => 600,
  'sort'     => true
);
$opts['fdd']['custom_center_product11_price'] = array(
  'name'     => 'Product 3 price',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['custom_center_product12_name'] = array(
  'name'     => 'Product 4 name',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['custom_center_product12_description'] = array(
  'name'     => 'Product 4 description',
  'select'   => 'T',
  'maxlen'   => 600,
  'sort'     => true
);
$opts['fdd']['custom_center_product12_price'] = array(
  'name'     => 'Product 4 price',
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