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


<? $storecode = $_GET['asap']; ?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title>Merrow Agent Login</title>
	
	<meta name="Author" content="Merrow, Inc.">
	<meta name="Category" content="products,sewingmachines">
	<meta name="Description" content="Merrow: the worlds best sewing machines.">
	<meta name="Keywords" content="merrow,charlie merrow,merrow machines,sewing machines,sergers,merrow stitch,merrow stitching">
	<meta name="viewport" content="width=1024">
	<meta name='robots' content='noindex,nofollow' />


	<link rel="stylesheet" href="http://css.imerrow.com/css_major/base_vimeo.css" type="text/css" charset="utf-8">
	<!--<link rel="stylesheet" href="http://css.imerrow.com/nav.css" type="text/css" charset="utf-8"> -->
	<!-- <link rel="stylesheet" href="http://css.imerrow.com/ac_quicktime.css"  type="text/css" charset="utf-8"> -->
	<link rel="stylesheet" href="http://css.imerrow.com/css_major/index_vimeo.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/whole_vimeo.css" type="text/css" charset="utf-8">
</head>

<body>

<!-- ##################  
	 menu
	 ################## -->	
<? include ("widget_main_menu.php"); ?>


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
					
                    <? if ($storecode=='2231020293383445') { ?>
                    
                    Please choose:<a href="http://merrow.com/cephei/sable/fp_dynamicstore.php?party_id=<? echo $_GET['party_id']; ?>&choice=<? echo $_GET['choice'];?>&store=65533122844756220294&key=configuration"> edit your store</a> or login to Merrow's <a href="http://merrow.com/cephei/sable/fp_agentlogin.php?asap=9931020293383445">order entry system</a> <? } else { ?> 
                    
                  
                 
					
             		<iframe src="https://65.96.199.153:8443/distributor/control/login" height="700" width="980px" scrolling="auto" frameborder="0"/>
				
  <? } ?>
             
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

	
			
	<p>Copyright &copy; 2008 Merrow Inc. All Rights Reserved. Designated trademarks and brands are the property of their respective owners.</p>
	
</div><!-- }}} footer -->
			</div> <!-- /content -->
		</div> <!-- /container -->

	</div> <!-- /main -->

   <? include ('widget_analytics.php'); ?>
	</body>
    </html>