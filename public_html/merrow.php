<?php

ob_start("ob_gzhandler");

?>

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
	<title>MERROW&reg; SEWING MACHINE Co.- Manufacturer of Industrial Sewing Machines, Sergers and Overlock Sewing Machines since 1838</title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/thickbox.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/base_vimeo.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/ac_quicktime.css"  type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/index_vimeo.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/whole_vimeo.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://merrowservices.s3.amazonaws.com/css/services_cleanup.css" type="text/css" charset="utf-8">
    

	
	<meta name="Author" content="Merrow, Inc.">
	<meta name="Category" content="products,sewing machines">
	<meta name="Description" content="Merrow Brand Sewing Machines, manufactured by the Merrow Machine Co. since 1838. Merrow manufactures industrial sewing machines, sergers and overlock sewing machines. 180 years ago we invented the overlock stitch, since then we've been building the worlds best sewing machines. We invented the shell stitch, the crochet stitch, the scalloped edge and the purl stitch. In 2010 our sewing machines and sergers are the most precise, most carefully machined (and best looking) in the industry. Our Sample Room will design a stitch with you, and then produce sewing machines for your production. With more than 300,000 Merrow Machines used worldwide our success speaks for itself. Send us your fabric, create a stitch with Merrow! .">
	<meta name="Keywords" content="industrial sewing machine, serger, sergers, Merrowing Machines, hosiery machines, overlock machines, overlock machine, overlock sergers, overlock sergermerrow,charlie merrow,merrow machines,sewing machines,sergers,merrow stitch,overlock sewing, overlock, merrow stitching">
	<meta name="viewport" content="width=1024">
	<META name="y_key" content="b0241928e572e190">  
	<meta name="google-site-verification" content="_9qSOieZ5-cE2EMjUTKZyl8EFWckcJct_jFdb9XhTkY" />
	<meta name='robots' content='index,follow' />
    
  	

</head>





<!-- ##################  
	 menu
	 ################## -->	

		<? include ("widget_main_google_menu.php") ?>


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
					
                   
                    <? include ("widget_cp_center.php") ?>
					
             
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
<!-- LOAD JS LAST -->
<script type="text/javascript" src="http://merrow.com/cephei/scripts/jquery.js"></script>
<script type="text/javascript" src="http://merrow.com/cephei/scripts/thickbox.js"></script>

<!-- Google Code for Merrow Customers Remarketing List -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1071301069;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "666666";
var google_conversion_label = "owXICLmj7AEQzYPr_gM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/1071301069/?label=owXICLmj7AEQzYPr_gM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<!-- END JS LOAD -->

	</body>
    </html>
