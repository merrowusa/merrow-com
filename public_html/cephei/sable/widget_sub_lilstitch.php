<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="http://merrow.com/cephei/css/css_major/added_parts.css" type="text/css" charset="utf-8">
<link href="http://merrow.com/cephei/css/css_major/menu.css" rel="stylesheet" type="text/css" />
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


?>

<?php 
$rail = $_GET['rail'];


if ($rail=='yes') {

include('widget_sub_railmenu.php'); } else {

include('widget_sub_machinemenu.php'); }

?>




<? if ($setnumber==null) { ?>

<object width="500" height="400" align="middle"><param name="FlashVars" VALUE="ids=<? echo $juju['media_keyword']; ?>&names=<? echo $juju['media_keyword']; ?>&userName=merrowmachine&userId=25997048@N06&titles=on&source=keyword&titles=on&displayNotes=on&thumbAutoHide=off&imageSize=medium&vAlign=mid&displayZoom=off&vertOffset=0&initialScale=off&bgAlpha=80"></param><param name="PictoBrowser" value="http://www.db798.com/pictobrowser.swf"></param><param name="scale" value="noscale"></param><param name="bgcolor" value="#DDDDDD"></param><embed src="http://www.db798.com/pictobrowser.swf" FlashVars="ids=<? echo $juju['media_keyword']; ?>&names=<? echo $juju['media_keyword']; ?>&userName=merrowmachine&userId=25997048@N06&titles=on&source=keyword&titles=on&displayNotes=on&thumbAutoHide=off&imageSize=medium&vAlign=mid&displayZoom=off&vertOffset=0&initialScale=off&bgAlpha=80" loop="false" scale="noscale" bgcolor="#DDDDDD" width="500" height="430" name="PictoBrowser" align="middle"></embed></object>


<? } elseif ($setnumber!=null) { ?> 

<object width="748" height="440" align="middle"><param name="FlashVars" VALUE="ids=<? echo $setnumber; ?>&names=<? echo $setname; ?>&userName=merrowmachine&userId=25997048@N06&titles=on&source=sets&titles=on&displayNotes=on&thumbAutoHide=off&imageSize=medium&vAlign=mid&displayZoom=on&vertOffset=0&initialScale=on&bgAlpha=80"></param><param name="PictoBrowser" value="http://www.db798.com/pictobrowser.swf"></param><param name="scale" value="noscale"></param><param name="bgcolor" value="#DDDDDD"></param><embed src="http://www.db798.com/pictobrowser.swf" FlashVars="ids=<? echo $setnumber; ?>&names=<? echo $setname; ?>&userName=merrowmachine&userId=25997048@N06&titles=on&source=sets&titles=on&displayNotes=on&thumbAutoHide=off&imageSize=medium&vAlign=mid&displayZoom=on&vertOffset=0&initialScale=on&bgAlpha=80" loop="false" scale="noscale" bgcolor="#DDDDDD" width="748" height="440" name="PictoBrowser" align="middle"></embed></object>

</div>

<? } ?>