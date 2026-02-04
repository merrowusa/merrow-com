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
// for example: thispage.php?word=abracadabra 

$mval = $_GET['class']; 
$noodle = $_GET['key'];
$mkw = $_GET['mediakeyword']; 
$diagram = $_GET['diagram']; 
$showthemapicture =$_GET['showthemapicture'];

?> 
<?

// Get all the data from the "asin" table which is where our product info is kept
$result2 = mysql_query("SELECT distinct * FROM technical WHERE class='$mval'")
or die(mysql_error());
?>


<?
// then define juju as the result array
 $juju = mysql_fetch_array($result2); ?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title> <? if ($mval!='key') { ?>Merrow Sewing Machines <? echo $juju['class']; ?> technical information <? } elseif ($mval = 'key') { ?>




<?
// Get all the data from the "asin" table which is where our product info is kept
$result1 = mysql_query("SELECT distinct * FROM asin WHERE media_keyword='$mkw'")
or die(mysql_error());
// then define juju as the result array
 $huhu = mysql_fetch_array($result1); 
?>

The Merrow Sewing Machine <? echo $huhu['msmc_id']; ?> interactive Parts Book <? } else { ?> Support pages for Merrow Sewing Machines <? } ?></title>
	
	<meta name="Author" content="Merrow, Inc.">
	<meta name="Category" content="products,sewingmachines">
	<meta name="Description" content="Merrow: the worlds best sewing machines.">
	<meta name="Keywords" content="merrow,charlie merrow,merrow machines,sewing machines,sergers,merrow stitch,merrow stitching">
	<meta name="viewport" content="width=1024">
	


	<link rel="stylesheet" href="http://css.imerrow.com/css_major/thickbox.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="http://css.imerrow.com/css_major/base_vimeo.css" type="text/css" charset="utf-8">
	<link rel="stylesheet" href="http://css.imerrow.com/css_major/index_vimeo.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/whole_vimeo.css" type="text/css" charset="utf-8"> 

    <link rel="stylesheet" type="text/css" href="http://css.imerrow.com/css_major/sdnm_36.css" media="screen">
    <style type="text/css" media="all"> @import "http://merrowservices.s3.amazonaws.com/css/services_cleanup.css";
    </style>

<!--[if lt IE 7]>
<script src="http://merrow.com/cephei/scripts/ie7-standard-p.js" type="text/javascript"></script>
<script src="http://merrow.com/cephei/scripts/ie7-css2-selectors.js" type="text/javascript"></script>
<script src="http://merrow.com/cephei/scripts/ie7-recalc.js" type="text/javascript"></script>
<script>var IE7Loaded = true;</script> 
<![endif]-->

     
        


<script type="text/javascript" src="http://merrow.com/cephei/scripts/jquery.js"></script>
<script type="text/javascript" src="http://merrow.com/cephei/scripts/thickbox.js"></script>

     <script language="javascript" type="text/javascript" src="http://merrow.com/cephei/scripts/SDNMenu.js">
       
        
       /***********************************************
		* Slashdot Menu script- By DimX
		* Submitted to Dynamic Drive DHTML code library: http://www.dynamicdrive.com
		* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
		***********************************************/
		/***********************************************
		* May 2007 Modified by Ictinus for nested submenus and wrapping menu items.
		* Sep 2007 Modified by Ictinus Implemented menu as an object and more stuff.
		***********************************************
		* See http://dean.edwards.name/IE7/ information on the IE7 scripts
		***********************************************/
         </script>




       
<script language="JavaScript" type="text/javascript">
var mymenu1 = new SDNMenu();

function doInits() {

	// init sdnmenu
	mymenu1.remember = true;
	mymenu1.bOnMouseOver = false;
	mymenu1.loadDefaultStates ([0,1,0,0,0,0,0,0,0,0,0,0,0,0,0]);
	//mymenu1.bypixels = -1; //default -1
	mymenu1.collapse_lastmenu = true;
	mymenu1.init('sdmenu');
	mymenu1.titles[0].style.borderTop = "0"; // this for browsers that don't do CSS2 'X + Y' selector
	mymenu1.menu.style.display = "block";
}
</script>

</head>

<Body onLoad="doInits();">


<!---
#################  
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
                
				
			
            		<? include ("widget_sd_menu.php") ?>
                    
					
				
                
              
 <!-- ################## 
	 ################## -->	
     			</div> <!-- /column.first -->				
                <div class="column">
<!-- ##################  
	 center column widgets
	 ################## -->	 
					
                    
                    <? include ("widget_technical.php") ?>
					
             		
				
  
             
 <!-- ################## 
	 ################## -->	
     			</div> <!-- /column -->				
                <div class="column last sidebar">
  <!-- ##################  
	 right column widgets
	 ################## -->	
     
    	
    			
					<? include ("widget_partsbooklist.php") ?>
					
				
  <!-- ################## 
	 ################## -->	               
                </div> <!-- /colum.last -->
    
  <!-- ##################  
	 FOOTER
	 ################## -->	
 <? include ('widget_footer.php'); ?>
			</div> <!-- /content -->
		</div> <!-- /container -->

</div> <!-- /main -->

   <? include ('widget_analytics.php'); ?>
	</body>
    </html>