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
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>About the Merrow Machine Company, our brief history</title>
	
	<meta name="Author" content="Merrow, Inc.">
	<meta name="Category" content="products,sewingmachines">
	<meta name="Description" content="Merrow: the worlds best sewing machines.">
	<meta name="Keywords" content="merrow,charlie merrow,merrow machines,sewing machines,sergers,merrow stitch,merrow stitching">
	<meta name="viewport" content="width=1024">
	<meta name='robots' content='index,follow' />



	
<script type="text/javascript" src="http://merrow.com/cephei/scripts/jquery.js"></script>
<script type="text/javascript" src="http://merrow.com/cephei/scripts/thickbox.js"></script>
	
<link rel="stylesheet" href="http://css.imerrow.com/css_major/thickbox.css" type="text/css" media="screen" />

 <link rel="stylesheet" href="http://css.imerrow.com/css_major/base_vimeo.css" type="text/css" charset="utf-8">
<link rel="stylesheet" href="http://css.imerrow.com/css_major/index_vimeo.css" type="text/css" charset="utf-8">
<link rel="stylesheet" href="http://css.imerrow.com/css_major/whole_vimeo.css" type="text/css" charset="utf-8">
 <link rel="stylesheet" href="http://css.imerrow.com/css_major/about_us.css" type="text/css" charset="utf-8">


<style type="text/css">

div.column {
	width: 980px !important;
	margin-left: 0 !important;
}

</style>	
	
</head>
<!-- ##################  
	 menu
	 ################## -->	

					<? include ("widget_main_menu.php") ?>


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
                
				
			
            		
                    
					
				
                
              
 <!-- ################## 
	 ################## -->	
     			</div> <!-- /column.first -->				
                <div class="column">
<!-- ##################  
	 center column widgets
	 ################## -->	 
					
                    
                    <? include ("widget_history.php") ?>
					
             		
				
  
             
 <!-- ################## 
	 ################## -->	
     			</div> <!-- /column -->				
                <div class="column last sidebar">
  <!-- ##################  
	 right column widgets
	 ################## -->	 	
    			
				
					
				
  <!-- ################## 
	 ################## -->	               
                </div> <!-- /colum.last -->
    
  <!-- ##################  
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