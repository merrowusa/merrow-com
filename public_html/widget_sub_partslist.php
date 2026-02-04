<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link rel="stylesheet" href="http://css.imerrow.com/css_major/added_parts.css" type="text/css" charset="utf-8">
<link href="http://css.imerrow.com/css_major/menu.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="http://merrow.com/cephei/scripts/lightbox.js"></script>
</head>
   
<?

$amzn = $_GET['amzn'];

// then we connect to the database as renter and access table: inventory 
#
mysql_connect("localhost", "merrowco_renter", "7679") or die(mysql_error());

#
mysql_select_db("merrowco_inventory") or die(mysql_error());


$rail = $_GET['rail'];
$parts = $_GET['parts'];
$section = $_GET['section'];



if ($rail=='yes') {

include('widget_sub_railmenu.php'); } elseif ($parts=='yes') {

include('widget_sub_partsmenu.php'); } elseif ($juju['show_what'] ='4') {

include('widget_sub_partsmenu.php'); } else {

include('widget_sub_machinemenu.php'); }


if ($section == '4') {  ?>

<div class="instructions_header"> 

We are still building a list of associated parts for this product

</div>

<? } else { ?>

<? 



// Get all the unique records from two tables (specified in the FROM. and then grab everything tagged with the asin ID from the page above
$result = mysql_query("
SELECT distinct *
FROM joinpd,pd_ref
WHERE joinpd.pd = pd_ref.pd
AND joinpd.asin_id = '$amzn'
GROUP BY pd_img")
 
or die(mysql_error()); ?>


<?
//then get rowing which we'll use to lis the first image if it doesn't work USE ::: echo $mumu;
       $rowing = mysql_fetch_array( $result); 
	   $mumu = $rowing['pd'];

	if ($rowing['pd']=null) { echo 'we do not have assembly drawings this part'; } else {
	
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
AND joinpd.pd = '$mumu'") ?>
 
  <?
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
		 
		 } } ?>
         
         
  
  