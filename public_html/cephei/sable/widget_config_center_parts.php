<? include ('widget_sub_configheader.php'); 


$opts['fdd']['id'] = array(
  'name'     => 'ID',
  'select'   => 'T',
  'options'  => 'AVCPDR', // auto increment
  'maxlen'   => 3,
  'default'  => '0',
  'sort'     => true
);


$opts['fdd']['custom_center_product1_name'] = array(
  'name'     => 'Product 1 name',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['custom_center_product1_description'] = array(
  'name'     => 'Product 1 description',
  'select'   => 'T',
  'maxlen'   => 600,
  'sort'     => true
);
$opts['fdd']['custom_center_product1_price'] = array(
  'name'     => 'Product 1 price',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['custom_center_product2_name'] = array(
  'name'     => 'Product 2 name',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['custom_center_product2_description'] = array(
  'name'     => 'Product 2 description',
  'select'   => 'T',
  'maxlen'   => 600,
  'sort'     => true
);
$opts['fdd']['custom_center_product2_price'] = array(
  'name'     => 'Product 2 price',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['custom_center_product3_name'] = array(
  'name'     => 'Product 3 name',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['custom_center_product3_description'] = array(
  'name'     => 'Product 3 description',
  'select'   => 'T',
  'maxlen'   => 600,
  'sort'     => true
);
$opts['fdd']['custom_center_product3_price'] = array(
  'name'     => 'Product 3 price',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['custom_center_product4_name'] = array(
  'name'     => 'Product 4 name',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['custom_center_product4_description'] = array(
  'name'     => 'Product 4 description',
  'select'   => 'T',
  'maxlen'   => 600,
  'sort'     => true
);
$opts['fdd']['custom_center_product4_price'] = array(
  'name'     => 'Product 4 price',
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