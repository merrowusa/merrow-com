<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link rel="stylesheet" href="http://css.imerrow.com/css_major/lightbox.css" type="text/css" charset="utf-8">
<link rel="stylesheet" href="http://css.imerrow.com/css_major/added_parts.css" type="text/css" charset="utf-8">
<link href="http://css.imerrow.com/css_major/menu.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="http://merrow.com/cephei/scripts/lightbox.js"></script>

</head>
   
 <?php 
// for example: thispage.php?word=abracadabra 

$val = $_GET['keyword']; 
$munt = $_GET['mediakeyword']; 

//Gets the referer URL from our amazon page and calls it MDK
$mdk = substr(getenv("HTTP_REFERER"), -14, 10); 
// to TEST this page for CSS changes etc... comment out the line above (temprorarily) and uncomment the line below
//$mdk = 'B0019QE30C';




?>
<?

$amzn = $_GET['amzn'];
$section = $_GET['section'];




// then we connect to the database as renter and access table: inventory 
#
mysql_connect("localhost", "merrowco_renter", "7679") or die(mysql_error());

#
mysql_select_db("merrowco_inventory") or die(mysql_error());
 
$rail = $_GET['rail'];
$parts = $_GET['parts'];


if ($rail=='yes') {

include('widget_sub_railmenu.php'); } elseif ($parts=='yes') {

include('widget_sub_partsmenu.php'); } else {

include('widget_sub_machinemenu.php'); }




if ($section == '4') {  ?>

<div class="instructions_header"> 

We are still building a list of assembly drawings for this product

</div>

<? } else { ?>





<?

$result = mysql_query("
SELECT distinct msmc_id
FROM asin
WHERE asin.asin_id = '$amzn'
 
  ")
 or die(mysql_error());

$peace = mysql_fetch_array( $result); 

?>

<div class="instructions" id="loveme">how to use this page: 
    <div id="statement"> First: the diagrams of possible <? echo $peace['msmc_id']; ?> assemblies are displayed -- they expand when clicked on -- <br /><br />
      Second: Underneath these diagrams are the parts referenced in the diagrams -- you can click on them to learn more or buy -- </div> </div>
      
 <?      
// Get all the unique records from two tables (specified in the FROM. and then grab everything tagged with the asin ID from the page above
$result1 = mysql_query("
SELECT distinct *
FROM joinpd,pd_ref
WHERE joinpd.pd = pd_ref.pd
AND joinpd.asin_id = '$amzn'
GROUP BY pd_img
 
  ")
 
or die(mysql_error()); ?>


<?
//then get rowing which we'll use to lis the first image if it doesn't work USE ::: echo $mumu;
       $rowing = mysql_fetch_array( $result1); 
	    $mumu = $rowing['pd'];
	
	
	if ($rowing['pd']=null) { echo 'we do not have assembly drawings for the'.$juju['msmc_id']; } else {
	  ?>


  <div class="pd_img"><a href="<? echo $rowing['pdurl_large'];?>" rel="lightbox" title="MERROW ASSEMBLY"><img src="<? echo $rowing['pdurl_medium'];?>" /></a> </div> 
    <br />
    <br />
    <div class="phonehome">If you need help please call 800.431.6677 </div> 
  
  
  
 
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

<? } } }?>