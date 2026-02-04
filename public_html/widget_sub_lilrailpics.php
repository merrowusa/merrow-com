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


?>

<?php 
$rail = $_GET['rail'];


if ($rail=='yes') {

include('widget_sub_railmenu.php'); } else {

include('widget_sub_machinemenu.php'); }

?>

<? if ($rail_setnumber=='1') { ?>

<script src="http://pipes.yahoo.com/js/imagebadge.js">{"pipe_id":"cf72477a7c8d4d6c410104212a7eb918","_btype":"image"}</script>

<? } if ($rail_setnumber==null) { ?>

<object width="900" height="400" align="middle"><param name="FlashVars" VALUE="ids=<? echo $juju['media_keyword']; ?>&names=<? echo $juju['media_keyword']; ?>&userName=merrowmachine&userId=25997048@N06&titles=on&source=keyword&titles=on&displayNotes=on&thumbAutoHide=off&imageSize=medium&vAlign=mid&displayZoom=off&vertOffset=0&initialScale=off&bgAlpha=80"></param><param name="PictoBrowser" value="http://www.db798.com/pictobrowser.swf"></param><param name="scale" value="noscale"></param><param name="bgcolor" value="#DDDDDD"></param><embed src="http://www.db798.com/pictobrowser.swf" FlashVars="ids=<? echo $juju['media_keyword']; ?>&names=<? echo $juju['media_keyword']; ?>&userName=merrowmachine&userId=25997048@N06&titles=on&source=keyword&titles=on&displayNotes=on&thumbAutoHide=off&imageSize=medium&vAlign=mid&displayZoom=off&vertOffset=0&initialScale=off&bgAlpha=80" loop="false" scale="noscale" bgcolor="#DDDDDD" width="500" height="430" name="PictoBrowser" align="middle"></embed></object>


<? } elseif ($rail_setnumber!=null) { ?> 

<object width="900" height="440" align="middle"><param name="FlashVars" VALUE="ids=<? echo $rail_setnumber; ?>&names=pugi_rail&userName=merrowmachine&userId=25997048@N06&titles=on&source=sets&titles=off&displayNotes=off&thumbAutoHide=off&imageSize=original&vAlign=top&displayZoom=on&vertOffset=0&initialScale=off&bgAlpha=80"></param><param name="PictoBrowser" value="http://www.db798.com/pictobrowser.swf"></param><param name="scale" value="noscale"></param><param name="bgcolor" value="#DDDDDD"></param><embed src="http://www.db798.com/pictobrowser.swf" FlashVars="ids=<? echo $rail_setnumber; ?>&names=pugi_rail&userName=merrowmachine&userId=25997048@N06&titles=on&source=sets&titles=off&displayNotes=off&thumbAutoHide=off&imageSize=original&vAlign=top&displayZoom=on&vertOffset=0&initialScale=off&bgAlpha=80" loop="false" scale="noscale" bgcolor="#DDDDDD" width="900" height="440" name="PictoBrowser" align="middle"></embed></object>


</div>

<? } ?>