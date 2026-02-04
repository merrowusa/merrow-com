<?php

$scrub = $_GET['lang'];  
$nifty = $_COOKIE["lang"];


if ( $scrub!=null) { 
$lang = $_GET['lang']; }
elseif ($scrub = null) {
$lang = '$nifty'; }
  

if ( $scrub!=null) { 
setcookie("lang", "$scrub", time()+3600);


} else { } ?>


<?php include ("ip_lang_database.php") ?>

 <?php 



$noire = $_GET['stitch']; 
$label = $_GET['label'];
$oneup = strtoupper($noire);
$setnumber = $_GET['setnum']; 
$setnumber1 = $_GET['setnum1']; 
$setname = $_GET['setnam'];
$res = $_GET['resolution'];
$marketplace= $_GET['marketplace'];
$store= $_GET['store'];



if ($label == '1453627189') { $blue='the Merrow Purl Stitch'; }
if ($label == '153627189') { $blue='the Emblem Edge by Merrow'; }
if ($label == '145362719') { $blue='the Merrow Shell stitch (both small and large)'; }
if ($label == '145362789') { $blue='the Merrow Blanket stitch'; }
if ($label == '145362189') { $blue='End to End seaming by Merrow'; }
if ($label == '145367189') { $blue='the Merrow Purl Stitch'; }
if ($label == '145327189') { $blue='general Crochet Stitches by Merrow'; }
if ($label == '145627189') { $blue='samples of the Netting Stitching by Merrow'; }
if ($label == '143627189') { $blue='General Overlock stitches by Merrow'; }
if ($label == '43627189') { $blue='Hosiery stitch samples by Merrow'; }



   
 // then we connect to the database as renter and access table: inventory 
 #
 mysql_connect("localhost", "merrowco_renter", "7679") or die(mysql_error());
 
 #
 mysql_select_db("merrowco_inventory") or die(mysql_error());
 
 
 
  // Get all the data from the "asin" table which is where our product info is kept
 	$result = mysql_query("SELECT imgstoreurl, msmc_id, amzn_url,mmc_id, include_amazon FROM asin WHERE mmc_id='$noire'")
 		or die(mysql_error());
 		 $juju = mysql_fetch_array($result); ?> 
 
  
  


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title>Overlock Sewing Machine (Serger) Stitch Samples for the Merrow <?  echo  $oneup; ?></title>
	
	<meta name="Author" content="Merrow, Inc.">
	<meta name="Category" content="products,sewingmachines">
	<meta name="Description" content="Overlock Sewing Machine (Serger) Stitch Samples for the Merrow <?  echo  $oneup; ?>">
	<meta name="Keywords" content="Overlock Sewing Samples, Sewing Sample Room, Stitch Browser,merrow,charlie merrow,merrow machines,sewing machines,sergers,merrow stitch,merrow stitching">
	<meta name="viewport" content="width=1024">
	<meta name='robots' content='index,follow' />




	<link rel="stylesheet" href="http://css.imerrow.com/css_major/base_vimeo.css" type="text/css" charset="utf-8">
	<!--<link rel="stylesheet" href="http://css.imerrow.com/nav.css" type="text/css" charset="utf-8"> -->
	<!-- <link rel="stylesheet" href="http://css.imerrow.com/ac_quicktime.css"  type="text/css" charset="utf-8"> -->
	<link rel="stylesheet" href="http://css.imerrow.com/css_major/index_vimeo.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/whole_vimeo.css" type="text/css" charset="utf-8">
     <link rel="stylesheet" href="http://merrowservices.s3.amazonaws.com/css/services_cleanup.css" type="text/css" charset="utf-8">

	
</head>


<!-- ##################  
	 menu
	 ################## -->	


<? include ("widget_main_google_menu.php") ?>


<!-- ##################  
	 div classes for page do not edit
	 ################## -->	

<div id="container">
		<div id="main">
			<div id="content" class="grid3cola">
				
 <!-- ################## 
	 ################## -->	        
               <div class="column first sidebar">
<!-- ##################  
	 left column widgets
	 ################## -->					
                
				
			
            		<? include ("widget_leftmainmenu_cp.php") ?>
                    
					
				
                
              
 <!-- ################## 
	 ################## -->	
     			</div> <!-- /column.first -->				
                <div class="column">
<!-- ##################  
	 center column widgets
	 ################## -->	 
					
                    
                    <? include ("widget_stitches_center.php") ?>
					
             		
				
  
             
 <!-- ################## 
	 ################## -->	
     			</div> <!-- /column -->				
                <div class="column last sidebar">
  <!-- ##################  
	 right column widgets
	 ################## -->	 	
    			
					<? include ("widget_stitchselector.php") ?>
					
				
  <!-- ################## 
	 ################## -->	               
                </div> <!-- /colum.last -->
    
  <!-- ##################  
	 FOOTER
	 ################## -->	

 			</div> <!-- /content -->
		</div> <!-- /container -->

	</div> <!-- /main -->
	<? include ('widget_feet.php'); ?>
       <? include ('widget_analytics.php'); ?>
	</body>
    </html>