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

 
 <div class="needhelp"> for more information about this and other products please call 800.431.6677 or<a href="mailto: info@merrow.com"> send an email</a> to us </div>