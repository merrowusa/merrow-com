<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="http://css.imerrow.com/css_major/added_parts.css" type="text/css" charset="utf-8">
<link href="http://css.imerrow.com/css_major/menu.css" rel="stylesheet" type="text/css" />
</head>
   
 <?php 
// for example: thispage.php?word=abracadabra 

$val = $_GET['keyword']; 


if ($_GET['mediakeyword'] != null) {
$munt = $_GET['mediakeyword']; } 
elseif ($_GET['amzn'] != null) {
$hunt = $_GET['amzn']; } else {
$hunt = substr(getenv("HTTP_REFERER"), -14, 10); }



if ($munt != null) {



?>
<?





// then we connect to the database as renter and access table: inventory 
#
mysql_connect("localhost", "merrowco_renter", "7679") or die(mysql_error());

#
mysql_select_db("merrowco_inventory") or die(mysql_error());


// Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT * FROM asin WHERE media_keyword='$munt'")
or die(mysql_error());


}

else 

{ 

// then we connect to the database as renter and access table: inventory 
#
mysql_connect("localhost", "merrowco_renter", "7679") or die(mysql_error());

#
mysql_select_db("merrowco_inventory") or die(mysql_error());


// Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT * FROM asin WHERE asin_id='$hunt'")
or die(mysql_error());
?>

<? }  ?>

<?


// then define juju as the result array
 $juju = mysql_fetch_array($result); 
 $setnumber = $juju['media_setnumber'];


?>

<?php



$rail = $_GET['rail'];
$parts = $_GET['parts'];



if ($rail=='yes') {

include('widget_sub_railmenu.php'); }

 elseif ($parts=='yes') {

include('widget_sub_partsmenu.php'); }

 elseif ($juju['show_what']=='4') {

include('widget_sub_partsmenu.php'); }

 elseif ($juju['show_what']=='5') {

include('widget_sub_refmenu.php'); }

 elseif ($juju['show_what']=='6') {

include('widget_sub_partsmenu2ndchoice.php'); }

 elseif ($keepmap != null) {

include('widget_sub_machinemenu.php'); }

?>



<div class="instructions_header">


<? if ($rail=='yes') { } else { ?>
<a href="<? echo $juju['setup_url']; ?>" target="_blank">Setup & Instructions</a><br />

<a href="<? echo $juju['trouble_url']; ?>" target="_blank">Troubleshooting</a><br />
<? } ?>
</div>
<div class="body_text">

<? if ($_GET['mediakeyword']='thread') { echo $juju['long_desc']; ?><br /><br /> <? } else { ?>

DESCRIPTION<br /><br />

<? echo $juju['long_desc']; ?><br /><br />

SPECS 
<br />
Speed: <? echo $juju['spec_speed']; ?>
<br />
Number of threads: <? echo $juju['spec_numthreads']; ?><br />
Needle Thread: <? echo $juju['spec_thread']; ?><br />
Looper Thread: <? echo $juju['spec_looperthread']; ?><br />
<br />
<br />Standard Loopers: <? echo $juju['spec_loopers']; ?>
<br />
<br />Standard Needle: <? echo $juju['spec_standardneedle']; ?>
<br />Needle Range: <? echo $juju['spec_needlerange']; ?>
<br />
<br />Standard Eccentrics: <? echo $juju['spec_standardeccentric']; ?>
<br />Eccentric Range: <? echo $juju['spec_eccentricrange']; ?>
<br />
<br />
<br />Standard Seam Width: <? echo $juju['spec_standardseamwidth']; ?>
<br />Seam Width: <? echo $juju['spec_seamwidthrange']; ?>
<br />Seam Type: <? echo $juju['spec_seamtype']; ?>
</div>
<? } ?>
</div>
</html>
</body>
