<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Tutorial: Handling User-Uploaded Images (demo) | Ennui Design</title>
    <style type="text/css">
      body {
        text-align:center;
        background:url('../img/ennui_2.0.1_bg.jpg') top center repeat-y;
        font:85%/1.25em 'Century Gothic',sans-serif;
      }
      h2 {
        background-color:#CFCFCF;
        border:1px solid #CFCFCF;
        padding:10px;
        margin:0px auto;
        width:510px;
      }
      div.img_uploader {
        text-align:left;
        margin:0px auto;
        margin-bottom:30px;
        padding:10px;
        width:510px;
        border:1px solid #CFCFCF;
      }
        div.img_uploader label {
          float:left;
          width:200px;
          text-align:right;
          font-weight:bold;
          margin:5px 10px 5px 0;
        }
        div.img_uploader input {
          margin:5px 0 5px 210px;
          display:block;
        }
      div.img_disp_cont {
       width:510px;
       margin:0px auto;
       padding:10px;
        border:1px solid #CFCFCF;
      }
        div.img_disp {
          margin:10px 0 5px 0;
        }
    </style>
  </head>
  <body>

<?php
  mysql_connect("localhost", "merrowco_mailman", "7679") or die(mysql_error());
mysql_select_db("merrowco_cephei") or die(mysql_error()); 

  require '_class/img_ctrl.php';

  $img = new img_ctrl();
  echo $img->display_admin(500,360);
  
  echo $img->display_public(3);
?>

  </body>
</html>