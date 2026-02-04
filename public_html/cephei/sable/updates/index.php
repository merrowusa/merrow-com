<?php
   mysql_connect("localhost", "merrowco_mailman", "7679") or die(mysql_error());
mysql_select_db("merrowco_cephei") or die(mysql_error()); 


  if ( $_GET['action'] == 'img_upload' ) {
    $img = new img_ctrl();
    if ( $img->upload($_FILES,$_POST,true) )
      $header = 'Location: ../img_ctrl_test.php?error=false';
    else
      $header = 'Location: ../img_ctrl_test.php?error=true';

    header($header);
  }

  function __autoload($class_name) {
    require_once '../_class/' . $class_name . '.php';
  }
?> 