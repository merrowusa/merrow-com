<?php

$scrub = $_GET['lang'];  
$nifty = $_COOKIE["lang"];
$app = $_GET['app']; 

// there are three varables above this line EDIT THIS IF THAT CHANGES (scrub, nifty, app)

if ( $scrub!=null) { 
$lang = $_GET['lang']; }
elseif ($scrub = null) {
$lang = '$nifty'; }
  

if ( $scrub!=null) { 
setcookie("lang", "$scrub", time()+3600);


} else { } ?>


<?php include ("ip_lang_database.php") ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>the Sewing Video Pages for Merrow</title>
	
	<meta name="Author" content="Merrow, Inc.">
	<meta name="Category" content="products,sewingmachines">
	<meta name="Description" content="Merrow: the worlds best sewing machines.">
	<meta name="Keywords" content="merrow,charlie merrow,merrow machines,sewing machines,sergers,merrow stitch,merrow stitching">
	<meta name="viewport" content="width=1024">
	<meta name='robots' content='index,follow' />

	
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/base_vimeo.css" type="text/css" charset="utf-8">
	<link rel="stylesheet" href="http://css.imerrow.com/css_major/index_vimeo.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/whole_vimeo.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/imagegallery_vimeo.css" type="text/css" charset="utf-8">
 	<link rel="stylesheet" href="http://css.imerrow.com/css_major/new_player_vimeo.css" type="text/css" charset="utf-8">
	
		
		
<script type="text/javascript" src="http://merrow.com/cephei/scripts/yahoo-dom-event.js" ></script>
<script type="text/javascript" src="http://merrow.com/cephei/scripts/animation-min.js" ></script>
<script type="text/javascript" src="http://merrow.com/cephei/scripts/dragdrop-min.js" ></script>
<script src = "http://merrow.com/cephei/scripts/slider-min.js" ></script>  

<script src="http://merrow.com/cephei/scripts/wave.js" type="text/javascript"></script>

<script type="text/javascript" src="http://merrow.com/cephei/sable/youtube.php?q=" ></script>
	

</head>

<body class="centerAlign">

<div id="pageWrap" class="contain">
	
<!-- ##################  
	 HEADER 
	 ################## -->	
	
	<? include ("widget_main_menu.php"); ?>


    
<!-- ##################  
	VIDEO CONTENT
	 ################## -->	


<? include ("widget_videoplayer.php"); ?>
    
    
    
<!-- ##################  
	 FOOTER
	 ################## -->	

<div class="footer contain">
	<hr />

	<h2 class="access">Footer</h2>
			
	<p>Copyright &copy; 2008 Merrow Inc. All Rights Reserved. Designated trademarks and brands are the property of their respective owners.</p>
	
</div><!-- }}} footer -->


</div><!-- }}} pageWrap -->

   <? include ('widget_analytics.php'); ?>
	</body>
    </html>