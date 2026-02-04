<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   


<?php
//Gets the referer URL from our amazon page and calls it MDK
$mdk = substr(getenv("HTTP_REFERER"), -14, 10);

echo $mdk;
?>

  <?php
// then we connect to the database as renter and access table: inventory 
#
mysql_connect("localhost", "merrowco_renter", "7679") or die(mysql_error());

#
mysql_select_db("merrowco_inventory") or die(mysql_error());


// Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT * FROM asin WHERE asin_id='$mdk'")
or die(mysql_error());
?>


<?
// then define juju as the result array
 $juju = mysql_fetch_array($result); 


?>


<?php 

include('machinemenu.php'); 

?>



<object width="500" height="400" align="middle"><param name="FlashVars" VALUE="ids=<? $juju['media_keyword']; ?>&names=<? $juju['media_keyword']; ?>&userName=merrowmachine&userId=25997048@N06&titles=on&source=keyword&titles=on&displayNotes=on&thumbAutoHide=off&imageSize=medium&vAlign=mid&displayZoom=off&vertOffset=0&initialScale=off&bgAlpha=80"></param><param name="PictoBrowser" value="http://www.db798.com/pictobrowser.swf"></param><param name="scale" value="noscale"></param><param name="bgcolor" value="#DDDDDD"></param><embed src="http://www.db798.com/pictobrowser.swf" FlashVars="ids=<? $juju['media_keyword']; ?>&names=<? $juju['media_keyword']; ?>&userName=merrowmachine&userId=25997048@N06&titles=on&source=keyword&titles=on&displayNotes=on&thumbAutoHide=off&imageSize=medium&vAlign=mid&displayZoom=off&vertOffset=0&initialScale=off&bgAlpha=80" loop="false" scale="noscale" bgcolor="#DDDDDD" width="500" height="430" name="PictoBrowser" align="middle"></embed></object>


