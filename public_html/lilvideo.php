<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <link href="http://css.imerrow.com/menu.css" rel="stylesheet" type="text/css" />
<link href="http://css.imerrow.com/hoverbox/hoverbox.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="http://css.imerrow.com/productpage/added_parts.css" type="text/css" charset="utf-8">


<?php

$cunt = $_GET['mediakeyword']; 


// then we connect to the database as renter and access table: inventory 
#
mysql_connect("localhost", "merrowco_renter", "7679") or die(mysql_error());

#
mysql_select_db("merrowco_inventory") or die(mysql_error());


// Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT * FROM asin WHERE media_keyword='$cunt'")
or die(mysql_error());
?>


<?
// then define juju as the result array
 $juju = mysql_fetch_array($result); 


?>



<?php 

include('machinemenu.php'); 

?>


<? echo $juju['embed_video']; ?>