

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
		<title>Merrow, designers of the Stitch -- Chat Pages</title>
	
	<meta name="Author" content="Merrow, Inc.">
	<meta name="Category" content="products,sewingmachines">
	<meta name="Description" content="Merrow: the worlds best sewing machines.">
	<meta name="Keywords" content="merrow,charlie merrow,merrow machines,sewing machines,sergers,merrow stitch,merrow stitching">
	<meta name="viewport" content="width=1024">
	<meta name='robots' content='index,follow' />



	<link rel="stylesheet" href="http://css.imerrow.com/css_major/base_vimeo.css" type="text/css" charset="utf-8">
	<!--<link rel="stylesheet" href="http://css.imerrow.com/nav.css" type="text/css" charset="utf-8"> -->
	<link rel="stylesheet" href="http://css.imerrow.com/css_major/ac_quicktime.css"  type="text/css" charset="utf-8">
	<link rel="stylesheet" href="http://css.imerrow.com/css_major/index_vimeo.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/whole_vimeo.css" type="text/css" charset="utf-8">

	
</head>



<body>

<!-- ##################  
	 menu
	 ################## -->	
<?  include ("widget_main_menu.php"); ?>


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
                
				
			
            		<? include ("widget_leftmainmenu.php") ?>
                    
					
				
                
              
 <!-- ################## 
	 ################## -->	
     			</div> <!-- /column.first -->				
                <div class="column">
<!-- ##################  
	 center column widgets
	 ################## -->	 
					
                    
                 
					
             		<iframe width=550 height=500 marginwidth=0 marginheight=0 scrolling=no style='border: 1px solid #819dd4' frameborder=0 src='http://t8r1a.info/$r?s=0&t=h&w=550&h=500&c=abbcc2&b=Merrow'> </iframe>
				
  
             
 <!-- ################## 
	 ################## -->	
     			</div> <!-- /column -->				
                <div class="column last sidebar">
  <!-- ##################  
	 right column widgets
	 ################## -->	 	
    			
					<? include ("widget_side_contactbar.php") ?>
				
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