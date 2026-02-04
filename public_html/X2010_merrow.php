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
	<title>Merrow® Sewing Machines -- the Stitch Matters</title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
	
	<meta name="Author" content="Merrow, Inc.">
	<meta name="Category" content="products,sewingmachines">
	<meta name="Description" content="The International Merrow Homepage: an American Sewing Machine Company since 1838. Merrow has a great selection of overlock machines for you from 1 thread to 4 thread sewing machines. ">
	<meta name="Keywords" content="merrow,charlie merrow,merrow machines,sewing machines,sergers,merrow stitch,overlock sewing, overlock, merrow stitching">
	<meta name="viewport" content="width=1024">
        <META name="y_key" content="b0241928e572e190">  
        <meta name="google-site-verification" content="_9qSOieZ5-cE2EMjUTKZyl8EFWckcJct_jFdb9XhTkY" />
	<meta name='robots' content='index,follow' />
    
  
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/thickbox.css" type="text/css" charset="utf-8">
<link rel="stylesheet" href="http://css.imerrow.com/css_major/base_vimeo.css" type="text/css" charset="utf-8">
	<link rel="stylesheet" href="http://css.imerrow.com/css_major/ac_quicktime.css"  type="text/css" charset="utf-8">
	<link rel="stylesheet" href="http://css.imerrow.com/css_major/index_vimeo.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/whole_vimeo.css" type="text/css" charset="utf-8">
      <link rel="stylesheet" href="http://merrowservices.s3.amazonaws.com/css/services_cleanup.css" type="text/css" charset="utf-8">

 <script type="text/javascript" src="http://merrow.com/cephei/scripts/jquery.js"></script>
<script type="text/javascript" src="http://merrow.com/cephei/scripts/thickbox.js"></script>



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
               <div class="column first sidebar">
<!-- ##################  
//	 left column widgets
//	 ################## -->					
                
				
			
            		<? include ("widget_leftmainmenu_cp.php") ?>
                    
					
				
              
 <!-- ################## 
	// ################## -->	
		  </div> <!-- /column.first -->				
              <div class="column">
<!-- ##################  
	// center column widgets
	// ################## -->	 
					
                    
                    <? include ("widget_center_cp.php") ?>
					
             		
				
  
             
 <!-- ################## 
//	 ################## -->	
     			</div> <!-- /column -->				
  <!--           <div class="column last sidebar"> -->
  <!-- ##################  
//	 right column widgets
//	 ################## -->	 	
    			
			
					
				
  <!-- ################## 
//	 ################## -->	               
 <!--     </div>  /colum.last -->
   
  <!-- ##################  
//	 FOOTER
//	 ################## -->	

<div class="footer contain">
	<hr />

	
			
	<p>Copyright &copy; 2010 Merrow Inc. All Rights Reserved. Designated trademarks and brands are the property of their respective owners. </p>
	
</div><!-- }}} footer -->
			
               <? include ('widget_analytics.php'); ?>
	</body>
    </html>
