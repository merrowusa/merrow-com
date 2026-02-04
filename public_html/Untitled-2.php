<?php

$scrub = $_GET['lang'];  
$nifty = $_COOKIE["lang"];
$key = $_GET['key'];


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
	<meta name="Description" content="the worlds best sewing machines.">

	<meta name="Keywords" content="merrow,charlie,merrow machines">
	<meta name="viewport" content="width=1024">

<link rel="stylesheet" href="http://css.imerrow.com/css_major/base_vimeo.css" type="text/css" charset="utf-8">
	<!--<link rel="stylesheet" href="http://css.imerrow.com/nav.css" type="text/css" charset="utf-8"> -->
	<link rel="stylesheet" href="http://css.imerrow.com/ac_quicktime.css"  type="text/css" charset="utf-8">
	<link rel="stylesheet" href="http://css.imerrow.com/css_major/index_vimeo.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/whole_vimeo.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/contact_general.css" type="text/css" charset="utf-8">

</head>





<!-- ##################  
	 menu
	 ################## -->	

		<? include ("widget_main_menu.php") ?>





<!-- ##################  
//	 div classes for page do not edit
//	 ################## -->	

<div id="container">
		<div id="main">
			<div id="content" class="grid3cola">
				
 <!-- ################## 
//	 ################## -->	        
               
<!-- ##################  
//	 left column widgets
//	 ################## -->					
                
				
			
            		
                    
					
				
              
 <!-- ################## 
	// ################## -->	
				
              <div class="column">
<!-- ##################  
	// center column widgets
	// ################## -->	 
					
                    
                    <? include ("widget_reporting.php") ?>
					
             		
				
  
             
 <!-- ################## 
//	 ################## -->	
     			</div> <!-- /column -->				
                <div class="column last sidebar">
  <!-- ##################  
//	 right column widgets
//	 ################## -->	 	
    			
					 
					
				
  <!-- ################## 
//	 ################## -->	               
                </div> <!-- /colum.last -->
    
  <!-- ##################  
//	 FOOTER
//	 ################## -->	

<div class="footer contain">
	<hr />

	
			
	<p>Copyright &copy; 2009 Merrow Inc. All Rights Reserved. Designated trademarks and brands are the property of their respective owners.</p>
	
</div><!-- }}} footer -->
			