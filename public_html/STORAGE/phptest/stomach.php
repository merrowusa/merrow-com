<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled WHJHAT</title>
<link href="http://imerrow.com/webportal/css/menu.css" rel="stylesheet" type="text/css" />
<link href="http://imerrow.com/webportal/css/hoverbox/hoverbox.css" rel="stylesheet" type="text/css" />
</head>


<?php
//Gets the referer URL
$mdk = substr(getenv("HTTP_REFERER"), -14, 10);

echo $mdk;
?>



        <?php
#
mysql_connect("localhost", "merrowco_renter", "7679") or die(mysql_error());

#
mysql_select_db("merrowco_inventory") or die(mysql_error());


// Get all the data from the "asin" table
$result = mysql_query("SELECT * FROM asin WHERE asin_id='B0018ZMU3Q'")
or die(mysql_error());
?>

<? $juju = mysql_fetch_array($result); 

$fufu = $juju['id'];


//the point of fufu is to determine wherther or not the part in question gets a menu or a partsbook and list of parts where 2 is the descriminator and fufu is random//
if ($fufu == 2) {

?>
<div id="menu_group">
<div class="indentmenu">
  <ul>
 <li><a href="http://imerrow.com/webportal/testpages/stitchend.php?stitch=<? echo $juju['stitchsample_url']; ?> " target="_self">Stitch Samples</a></li>
 <li><a href="<? echo $juju['partsbook_url']; ?>" target="_self">Parts Book</a></li>
 <li><a href="http://imerrow.com/webportal/machines/ebay/ebay.html" target="_self">Pre-Owned</a></li>
<li><a href="<? echo $juju['techmanuals_url']; ?>" target="_self">Instructions &amp; Downloads</a></li>
    <li><a href="<? echo $juju['ninggroup_url']; ?>" target="_blank">User Group</a></li>
     <li><a href="http://imerrow.com/video/catalog/videoend.php?vk="<? echo $juju['video_keyword']; ?>" " target="_self">Video</a></li>
  </ul>
  <br style="clear: left" />
<?
} else {


#
mysql_select_db("merrowco_inventory") or die(mysql_error());


// Get all the data from the "example" table
$result = mysql_query("
SELECT distinct *
FROM joinpd,pd_ref
WHERE joinpd.pd = pd_ref.pd
AND joinpd.asin_id = 'B0019QE5M8'
GROUP BY pd_img
 
  ")
 
or die(mysql_error()); ?>


<?
       $rowing = mysql_fetch_array( $result); 
	  ?>
           
      <img name="" src="  <? echo $rowing['pd_img'];?>" width="32" height="32" alt="" /> <br /> 
        
        WHOOOOAHH<br /><br />


<?
       while($rower = mysql_fetch_array( $result )) { 
	  ?>
    <h1>Hoverbox Image Gallery</h1>
<ul class="hoverbox">
<li>
<a href="#"><img src="<? echo $rower['pd_img'];}?>" alt="description" /><img src="img/photo01.jpg" alt="description" class="preview" /></a>
</li>       
         <br /> 
            

            
            
        
            
      <table>      
            
       
       
       
       
             <br />

       
       
       
       
       
       
       
            
            
<br />
        <?php
#


#
mysql_select_db("merrowco_inventory") or die(mysql_error());


// Get all the data from the "example" table
$result = mysql_query("
SELECT *
FROM joinpd,asin
WHERE asin.asin_id = joinpd.asin_id
AND joinpd.pd = 'pd1'
 
  ")
 

?>

     

	
	
	<?php
  
    // keeps getting the next row until there are no more to get
   while($row = mysql_fetch_array( $result )) {  ?>
  
 <table border="0" cellpadding="0" cellspacing="10" width="100%"><tr><td class="layout3"><a href="<? echo $row['asin_id']; ?>" target="_blank" class="r"><img alt="W.P. Supp. -70" border="0" height="75"  src="<? echo $row['imgurl_tiny']; ?>" title="" width="75"></a></td>
<td class="layout3 layout3Name" id="title" width="100%"><h3><a class="r" <a href="<? echo $row['ot_id']; ?>" target="_blank"><br />
<? echo $row['description']; ?></a></h3><br><table border="0" cellpadding="2" cellspacing="0" class="savings"><tr><td align="left" class="our-label">
								Our Price:
							</td><td align="left" class="our"><? echo $row['price_list'];?></td></tr></table></td></tr>
 
    <?  echo "</td><td></div>"; 
   echo "</td><td>"; 
   echo "</td></tr>";
                
      } 
         echo "</table> ";

}

?> 








</div>
</div>


