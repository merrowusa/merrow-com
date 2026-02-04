<?php ob_start("ob_gzhandler");
$scrub = $_GET['lang'];
$nifty = $_COOKIE["lang"];
if ( $scrub!=null) {$lang = $_GET['lang']; }elseif ($scrub = null) {$lang = '$nifty'; }
if ( $scrub!=null) {setcookie("lang", "$scrub", time()+3600);} else { } include ("ip_lang_database.php");
$ap = $_GET['app'];

mysql_connect("localhost", "merrowco_renter", "7679") or die(mysql_error());
mysql_select_db("merrowco_inventory") or die(mysql_error());

?>