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




<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title>Merrow, designers of the Stitch</title>
	
	<meta name="Author" content="Merrow, Inc.">
	<meta name="Category" content="products,sewingmachines">
	<meta name="Description" content="Merrow: the worlds best sewing machines.">
	<meta name="Keywords" content="merrow,charlie merrow,merrow machines,sewing machines,sergers,merrow stitch,merrow stitching">
	<meta name="viewport" content="width=1024">
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">


	<link rel="stylesheet" href="http://css.imerrow.com/css_major/base_vimeo.css" type="text/css" charset="utf-8">
	<!--<link rel="stylesheet" href="http://css.imerrow.com/nav.css" type="text/css" charset="utf-8"> -->
	<!-- <link rel="stylesheet" href="http://css.imerrow.com/ac_quicktime.css"  type="text/css" charset="utf-8"> -->
	<link rel="stylesheet" href="http://css.imerrow.com/css_major/index_vimeo.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/whole_vimeo.css" type="text/css" charset="utf-8">
      <link rel="stylesheet" href="http://css.imerrow.com/css_major/intranet.css" type="text/css" charset="utf-8">
          <link rel="stylesheet" href="http://css.imerrow.com/css_major/services_cleanup.css" type="text/css" charset="utf-8">
      
      <style>
	  div.goog-ws-top.goog-ws-clear {
	visibility: hidden;
	position: absolute;
}
.goog-ws-sidebar-gadget,
.goog-ws-sidebar-textgadget {
 color: #484848;
  font-family: arial;
  margin: 0 0 6px;
}
</style>
    
</head>

<body>

<!-- ##################  
	 menu
	 ################## -->	
<? include ("widget_main_google_menu.php"); ?>


<!-- ##################  
	 div classes for page do not edit
	 ################## -->	

<div id="container">
		<div id="main">
			<div id="content" class="grid3cola">
				
 <!-- ################## -->

              
 <!-- ################## 
 	begin ONE COLUMN PAGE
	 ################## -->	
     				
              
<!-- ##################  
	 center column widgets
	 ################## -->	 
		
  
          
                 
					
             		<iframe src="http://merrow.com/widget_opentaps.php" height="6500px" width="1124" scrolling="no" id="mammy" name="mammy" frameborder="0"> can you read this? </iframe>
                   
				
 
             
 <!-- ################## 
	 ################## -->	
     					
        
  <!-- ################## 
	END CENTER AND ONLY COLUMN
 ##################  
	 FOOTER
	 ################## -->	
<div class="footer contain">
	<hr />

	
			
	<p>Copyright &copy; 2009 Merrow Inc. All Rights Reserved. Designated trademarks and brands are the property of their respective owners.</p>
	
</div><!-- }}} footer -->
			</div> <!-- /content -->
		</div> <!-- /container -->

	</div> <!-- /main -->

   <? include ('widget_analytics.php'); ?>
	</body>
    </html>