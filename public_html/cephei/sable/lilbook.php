<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>
 <link rel="stylesheet" href="http://merrow.com/cephei/css/lightbox.css" type="text/css" media="screen" />
<script type="text/javascript" src="http://merrow.com/cephei/scripts/lightbox.js"></script>

<link href="http://merrow.com/cephei/css/menu.css" rel="stylesheet" type="text/css" />
<link href="http://merrow.com/cephei/css/hoverbox/hoverbox.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="http://merrow.com/cephei/css/productpage/added_parts.css" type="text/css" charset="utf-8">
 <?php 
// for example: thispage.php?word=abracadabra 

$val = $_GET['keyword']; 
$cunt = $_GET['mediakeyword']; 


?>
<?


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





<?php 

include($juju['book_page']); 

?>







</body>
</html>
