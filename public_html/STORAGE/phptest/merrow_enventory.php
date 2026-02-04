<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<link href="http://imerrow.com/webportal/css/menu.css" rel="stylesheet" type="text/css" />
<link href="http://imerrow.com/webportal/css/hoverbox/hoverbox.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="http://imerrow.com/webportal/css/productpage/added_parts.css" type="text/css" charset="utf-8">

 <link rel="stylesheet" href="http://imerrow.com/webportal/css/lightbox.css" type="text/css" media="screen" />
<script type="text/javascript" src="http://imerrow.com/webportal/scripts/lightbox.js"></script>


<script>

function resizeIframe(iframeID) {
if(self==parent) return false; /* Checks that page is in iframe. */
else if(document.getElementById&&document.all) /* Sniffs for IE5+.*/

var FramePageHeight = framePage.scrollHeight + 10; /* framePage
is the ID of the framed page's BODY tag. The added 10 pixels prevent an
unnecessary scrollbar. */

parent.document.getElementById(iframeID).style.height=FramePageHeight;
/* "iframeID" is the ID of the inline frame in the parent page. */
} 
</script>


</head>




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

//defining fufu as a machine ID for the product allows us to determine wherther or not the part in question gets a machine menu or a partsbook and list of parts where 2 is the descriminator and fufu is random//

$fufu = $juju['show_what'];


// we are creating an IF THEN scenario where -- well, see above

if ($fufu == 2) {

?>

<?php 

include('machinemenu.php'); 

?>



<object width="500" height="400" align="middle"><param name="FlashVars" VALUE="ids=<? $juju['media_keyword']; ?>&names=<? $juju['media_keyword']; ?>&userName=merrowmachine&userId=25997048@N06&titles=on&source=keyword&titles=on&displayNotes=on&thumbAutoHide=off&imageSize=medium&vAlign=mid&displayZoom=off&vertOffset=0&initialScale=off&bgAlpha=80"></param><param name="PictoBrowser" value="http://www.db798.com/pictobrowser.swf"></param><param name="scale" value="noscale"></param><param name="bgcolor" value="#DDDDDD"></param><embed src="http://www.db798.com/pictobrowser.swf" FlashVars="ids=<? $juju['media_keyword']; ?>&names=<? $juju['media_keyword']; ?>&userName=merrowmachine&userId=25997048@N06&titles=on&source=keyword&titles=on&displayNotes=on&thumbAutoHide=off&imageSize=medium&vAlign=mid&displayZoom=off&vertOffset=0&initialScale=off&bgAlpha=80" loop="false" scale="noscale" bgcolor="#DDDDDD" width="500" height="430" name="PictoBrowser" align="middle"></embed></object>


<?

//if fufu says it is a part then we will call the inventory table and get first the images of the assemblies that we often refer to as PD references 
} elseif ($fufu == 3) { 

#
mysql_select_db("merrowco_inventory") or die(mysql_error());


// Get all the unique records from two tables (specified in the FROM. and then grab everything tagged with the asin ID from the page above
$result = mysql_query("
SELECT distinct *
FROM joinpd,pd_ref
WHERE joinpd.pd = pd_ref.pd
AND joinpd.asin_id = '$mdk'
GROUP BY pd_img
 
  ")
 
or die(mysql_error()); ?>


<?
//then get rowing which we'll use to lis the first image
       $rowing = mysql_fetch_array( $result); 
	$mumu = $rowing['pd'];
	echo $mumu;
	  ?>


  <div class="pd_img"><a href="<? echo $rowing['pdurl_large'];?>" rel="lightbox" title="MERROW ASSEMBLY"><img src="<? echo $rowing['pdurl_medium'];?>" /></a> </div>  

 <h3>other assemblies for this part</h3>
<?
//then get a rower which we'll use to call the rest of the images
       while($rower = mysql_fetch_array( $result )) { 
	  ?>
       
      
<ul class="hoverbox">
<li>
<a href="<? echo $rower['pdurl_large'];?>" rel="lightbox" title="MERROW ASSEMBLY"><img src="<? echo $rower['pdurl_tiny'];?>" alt="merrow assemblies" /><img src="<? echo $rower['pdurl_medium'];?>" alt="often your part will be included in a number of different assemblies" class="preview" /></a>
</li>  
</ul>
</div>

<?


}


?>


   <table>      
 <?php
 //underneath the pictures we want to show the associated parts this starts with an invrotry call 
#


#
mysql_select_db("merrowco_inventory") or die(mysql_error());


// Get all the data from the "example" table using mumu as a variable
$result = mysql_query("
SELECT distinct *
FROM joinpd,asin
WHERE asin.asin_id = joinpd.asin_id
AND joinpd.pd = '$mumu'
 
  ")
 

?>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
	
	
	<?php
  
    // keeps getting the next row until there are no more to get and is formatted with the css identical to the product catalog
   while($row = mysql_fetch_array( $result )) {  ?>
  
 <table border="0" cellpadding="0" cellspacing="10" width="100%"><tr><td class="layout3"><a href="<? echo $row['amzn_url']; ?>" target="_blank" class="r"><img alt="W.P. Supp. -70" border="0" height="75"  src="<? echo $row['imgurl_tiny']; ?>" title="" width="75"></a></td>
<td class="layout3 layout3Name" id="title" width="100%"><h3><a class="r" <a href="<? echo $row['amzn_url']; ?>" target="_blank"><br />
<? echo $row['description']; ?></a></h3><br><table border="0" cellpadding="2" cellspacing="0" class="savings"><tr><td align="left" class="our-label">
								Our Price:
							</td><td align="left" class="our"><? echo $row['price_list'];?></td></tr></table></td></tr>
 
    <?  echo "</td><td></div>"; 
   echo "</td><td>"; 
   echo "</td></tr>";
                
      } 
         echo "</table> ";

} else {
 echo "for available assembly information please call merrow at 800.431.6677";
}


?> 


</table>
</table>






