<? include ('widget_sub_configheader.php'); 



$opts['fdd']['id'] = array(
  'name'     => 'ID',
  'select'   => 'T',
  'options'  => 'AVCPDR', // auto increment
  'maxlen'   => 3,
  'default'  => '0',
  'sort'     => true
);

$opts['fdd']['custom_product1_name'] = array(
  'name'     => 'Product 1 name',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['custom_product1_description'] = array(
  'name'     => 'Product 1 description',
  'select'   => 'T',
  'maxlen'   => 600,
  'sort'     => true
);
$opts['fdd']['custom_product1_price'] = array(
  'name'     => 'Product 1 price',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['custom_product2_name'] = array(
  'name'     => 'Product 2 name',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['custom_product2_description'] = array(
  'name'     => 'Product 2 description',
  'select'   => 'T',
  'maxlen'   => 600,
  'sort'     => true
);
$opts['fdd']['custom_product2_price'] = array(
  'name'     => 'Product 2 price',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['custom_product3_name'] = array(
  'name'     => 'Product 3 name',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['custom_product3_description'] = array(
  'name'     => 'Product 3 description',
  'select'   => 'T',
  'maxlen'   => 600,
  'sort'     => true
);
$opts['fdd']['custom_product3_price'] = array(
  'name'     => 'Product 3 price',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['custom_product4_name'] = array(
  'name'     => 'Product 4 name',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['custom_product4_description'] = array(
  'name'     => 'Product 4 description',
  'select'   => 'T',
  'maxlen'   => 600,
  'sort'     => true
);
$opts['fdd']['custom_product4_price'] = array(
  'name'     => 'Product 4 price',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['custom_product5_name'] = array(
  'name'     => 'Product 5 name',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['custom_product5_description'] = array(
  'name'     => 'Product 5 description',
  'select'   => 'T',
  'maxlen'   => 600,
  'sort'     => true
);
$opts['fdd']['custom_product5_price'] = array(
  'name'     => 'Product 5 price',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['custom_product6_name'] = array(
  'name'     => 'Product 6 name',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['custom_product6_description'] = array(
  'name'     => 'Product 6 description',
  'select'   => 'T',
  'maxlen'   => 600,
  'sort'     => true
);
$opts['fdd']['custom_product6_price'] = array(
  'name'     => 'Product 6 price',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['custom_product7_name'] = array(
  'name'     => 'Product 7 name',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['custom_product7_description'] = array(
  'name'     => 'Product 7 description',
  'select'   => 'T',
  'maxlen'   => 600,
  'sort'     => true
);
$opts['fdd']['custom_product7_price'] = array(
  'name'     => 'Product 7 price',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['custom_product8_name'] = array(
  'name'     => 'Product 8 name',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['custom_product8_description'] = array(
  'name'     => 'Product 8 description',
  'select'   => 'T',
  'maxlen'   => 600,
  'sort'     => true
);
$opts['fdd']['custom_product8_price'] = array(
  'name'     => 'Product 8 price',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);



// Now important call to phpMyEdit
require_once 'phpMyEdit.class.php';
new phpMyEdit($opts);

?>

 <div class="exit_button"><input type="submit" id="Exit" value="&nbsp;&nbsp;Close Window&nbsp;&nbsp;" onclick="self.parent.tb_remove();" /></div>
</body>
</html>