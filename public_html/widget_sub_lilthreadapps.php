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


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="http://css.imerrow.com/css_major/added_parts.css" type="text/css" charset="utf-8">
<link href="http://css.imerrow.com/css_major/menu.css" rel="stylesheet" type="text/css" />
</head>
   
 <?php 
// for example: thispage.php?word=abracadabra 

$val = $_GET['keyword']; 
$munt = $_GET['mediakeyword']; 


?>
<?


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
 $setnumber = $juju['media_setnumber'];
 $rail_setnumber = $juju['rail_setnumber'];



include('widget_sub_threadmenu.php'); 


?>



<script src="http://pipes.yahoo.com/js/imagebadge.js">{"pipe_id":"cf72477a7c8d4d6c410104212a7eb918","_btype":"image"}</script>


</div>

