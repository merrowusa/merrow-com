<link rel="stylesheet" href="http://css.imerrow.com/css_major/added_parts.css" type="text/css" charset="utf-8">
<link href="http://css.imerrow.com/css_major/menu.css" rel="stylesheet" type="text/css" />



<?php
//Gets the referer URL from our amazon page and calls it MDK
$mdk = 'B001AVR0QU'; 
// to TEST this page for CSS changes etc... comment out the line above (temporarily) and uncomment the line below
//$mdk = 'B0019QE30C';?>

<? 

// IF ANYTHING ISN"T WORKING FIRST USE THIS :::       echo $mdk;
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
$setnumber = $juju['media_setnumber'];
$rail = $juju['equipment_type'];
 $rail_setnumber = $juju['rail_setnumber'];

// we are creating an IF THEN scenario where -- well, see above _____ TO TEST FOR ERRORS UNCOMMENT THESE VARIABLES echo $fufu; echo $setnumber; echo $rail; echo $rail_setnumber; 

if ($fufu == '2') {

?>

<div class="machinemenu">

<?php 


if ($rail=='rail') {

include('widget_sub_railmenu.php'); } else {

include('widget_sub_machinemenu.php'); }

?>



<? if ($setnumber==null) { ?>

<object width="500" height="400" align="middle"><param name="FlashVars" VALUE="ids=<? echo $juju['media_keyword']; ?>&names=<? echo $juju['media_keyword']; ?>&userName=merrowmachine&userId=25997048@N06&titles=on&source=keyword&titles=on&displayNotes=on&thumbAutoHide=off&imageSize=medium&vAlign=mid&displayZoom=off&vertOffset=0&initialScale=off&bgAlpha=80"></param><param name="PictoBrowser" value="http://www.db798.com/pictobrowser.swf"></param><param name="scale" value="noscale"></param><param name="bgcolor" value="#DDDDDD"></param><embed src="http://www.db798.com/pictobrowser.swf" FlashVars="ids=<? echo $juju['media_keyword']; ?>&names=<? echo $juju['media_keyword']; ?>&userName=merrowmachine&userId=25997048@N06&titles=on&source=keyword&titles=on&displayNotes=on&thumbAutoHide=off&imageSize=medium&vAlign=mid&displayZoom=off&vertOffset=0&initialScale=off&bgAlpha=80" loop="false" scale="noscale" bgcolor="#DDDDDD" width="500" height="430" name="PictoBrowser" align="middle"></embed></object>

<? } elseif ($rail_setnumber!=null) { ?> 

<object width="900" height="440" align="middle"><param name="FlashVars" VALUE="ids=<? echo $rail_setnumber; ?>&names=pugi_rail&userName=merrowmachine&userId=25997048@N06&titles=on&source=sets&titles=off&displayNotes=off&thumbAutoHide=off&imageSize=original&vAlign=top&displayZoom=on&vertOffset=0&initialScale=off&bgAlpha=80"></param><param name="PictoBrowser" value="http://www.db798.com/pictobrowser.swf"></param><param name="scale" value="noscale"></param><param name="bgcolor" value="#DDDDDD"></param><embed src="http://www.db798.com/pictobrowser.swf" FlashVars="ids=<? echo $rail_setnumber; ?>&names=pugi_rail&userName=merrowmachine&userId=25997048@N06&titles=on&source=sets&titles=off&displayNotes=off&thumbAutoHide=off&imageSize=original&vAlign=top&displayZoom=on&vertOffset=0&initialScale=off&bgAlpha=80" loop="false" scale="noscale" bgcolor="#DDDDDD" width="900" height="440" name="PictoBrowser" align="middle"></embed></object>


</div>


<? } elseif ($setnumber!=null) { ?> 

<object width="900" height="440" align="middle"><param name="FlashVars" VALUE="ids=<? echo $setnumber; ?>&names=<? echo $setname; ?>&userName=merrowmachine&userId=25997048@N06&titles=on&source=sets&titles=on&displayNotes=on&thumbAutoHide=off&imageSize=medium&vAlign=mid&displayZoom=on&vertOffset=0&initialScale=on&bgAlpha=80"></param><param name="PictoBrowser" value="http://www.db798.com/pictobrowser.swf"></param><param name="scale" value="noscale"></param><param name="bgcolor" value="#DDDDDD"></param><embed src="http://www.db798.com/pictobrowser.swf" FlashVars="ids=<? echo $setnumber; ?>&names=<? echo $setname; ?>&userName=merrowmachine&userId=25997048@N06&titles=on&source=sets&titles=on&displayNotes=on&thumbAutoHide=off&imageSize=medium&vAlign=mid&displayZoom=on&vertOffset=0&initialScale=on&bgAlpha=80" loop="false" scale="noscale" bgcolor="#DDDDDD" width="900" height="440" name="PictoBrowser" align="middle"></embed></object>

</div>

<? } ?>

<?





//if fufu says it is a part then we will call the inventory table and get first the images of the assemblies that we often refer to as PD references 
} elseif($fufu == '3'){ ?>

<? include('widget_sub_partsmenu.php');
    
	


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
//then get rowing which we'll use to lis the first image if it doesn't work USE ::: echo $mumu;
       $rowing = mysql_fetch_array( $result); 
	$mumu = $rowing['pd'];
	
	
	
	
	
	if ($rowing['pd']=null) { echo 'we do not have assembly drawings for the'.$juju['msmc_id']; } else {
	
	?>
 <div class="parts_drawings"> </div>

   <table>      
 <?php
 //underneath the pictures we want to show the associated parts this starts with an invrotry call 
#



// Get all the data from the "example" table using mumu as a variable PLEASE note that the tables used are the asin talbe AND the joinpd table!!!!
$result = mysql_query("
SELECT distinct *
FROM joinpd,asin
WHERE asin.asin_id = joinpd.asin_id
AND joinpd.pd = '$mumu'
 
  ")
 

?>



	
	
	<?php
  
    // keeps getting the next row until there are no more to get and is formatted with the css identical to the product catalog
   while($row = mysql_fetch_array( $result )) {  ?>
  
 <table border="0" cellpadding="0" cellspacing="10" width="100%"><tr><td class="layout3_yomama"><a href="<? echo $row['amzn_url']; ?>" target="_blank" class="r_u"><img alt="i am not a picture" border="0" height="75"  src="<? echo $row['imgurl_tiny']; ?>" title="" ></a></td>
<td class="layout3Name_saywhat" id="title" width="100%"><h3><a class="r_I" <a href="<? echo $row['amzn_url']; ?>" target="_blank"><br />
<? echo $row['bullet_point_2']; ?> also called <? echo $row['mmc_id']; ?></a></h3><br><table border="0" cellpadding="2" cellspacing="0" class="near_savings"><tr><td align="left" class="our-crazy_label">
								Our Price:
							</td><td align="left" class="flour"><? echo $row['mrsp'];?></td></tr></table></td></tr>
 
    <?  echo "</td><td></div>"; 
   echo "</td><td>"; 
   echo "</td></tr>";
                
      } 
         echo "</table> ";
		 
		 } ?>
         
	
	         
  
  <?

} elseif($fufu == '4') {

 
 $amzn = $juju['show_what'];
 
 
      include('widget_sub_lilmap.php');  } 
 

 elseif($fufu == '5') {
 
 
 $amzn = $juju['show_what'];
 
 
      include('widget_sub_lilstitch.php');  
	  
	  
	  
	  } elseif($fufu == '6') {

 $amzn = $juju['show_what'];
 
 
      include('widget_lilneedles.php');  
 

	   } elseif($fufu == '17'){ 

 
 $amzn = $juju['show_what'];
 

      include('widget_sub_lilthreadapps.php');  
 

	  
	 } else { ?>
 
  <div class="needhelp"> for more information about this and other products please call 800.431.6677 or<a href="mailto: info@merrow.com"> send an email</a> to us </div>
 
 
<? } ?>



</table>







