<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
<link rel="stylesheet" href="http://merrow.com/cephei/css/css_major/added_parts.css" type="text/css" charset="utf-8">
<link href="http://merrow.com/cephei/css/css_major/menu.css" rel="stylesheet" type="text/css" />
    </head>

<?php

$munt = $_GET['mediakeyword']; 


// then we connect to the database as renter and access table: inventory 
#
mysql_connect("localhost", "merrowco_renter", "7679") or die(mysql_error());

#
mysql_select_db("merrowco_inventory") or die(mysql_error());


// Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT * FROM asin WHERE media_keyword='$munt'")
or die(mysql_error());
?>


<?
// then define juju as the result array
 $juju = mysql_fetch_array($result); 


?>



<?php 

$rail = $_GET['rail'];


if ($rail=='yes') {

include('widget_sub_railmenu.php'); } else {

include('widget_sub_machinemenu.php'); }

?>
<? if ($juju['equipment_type']!='rail') { ?>
<div class="video_title">
Please note that until November 15th videos will NOT be necessarily of the <? echo $juju['msmc_id']; ?>
</div>

<? } ?>

<? echo $juju['embed_video']; ?>