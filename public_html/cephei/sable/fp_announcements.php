

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
	<title>Current Events at Merrow</title>
	
	<meta name="Author" content="Merrow, Inc.">
	<meta name="Category" content="products,sewingmachines">
	<meta name="Description" content="Merrow: the worlds best sewing machines.">
	<meta name="Keywords" content="merrow,charlie merrow,merrow machines,sewing machines,sergers,merrow stitch,merrow stitching">
	<meta name="viewport" content="width=1024">
	<meta name='robots' content='index,follow' />







     	<script src="http://merrow.com/cephei/scripts/p_and_s.js" type="text/javascript" charset="utf-8"></script>
	<script src="http://merrow.com/cephei/scripts/browserdetect.js" type="text/javascript" charset="utf-8"></script>
	<script src="http://merrow.com/cephei/scripts/flip.js" type="text/javascript" charset="utf-8"></script>
	<script src="http://merrow.com/cephei/scripts/event_mixins.js" type="text/javascript" charset="utf-8"></script>
	<script src="http://merrow.com/cephei/scripts/drawers.js" type="text/javascript" charset="utf-8"></script>
	
	<script src="http://merrow.com/cephei/scripts/frontrow_redux.js" type="text/javascript" charset="utf-8"></script>
	<script src="http://merrow.com/cephei/scripts/tracking.js" type="text/javascript" charset="utf-8"></script>


	
	
	
	<script type="text/javascript" charset="utf-8">
		defaultId = 'a';
		var latestSliders = null;
		var galleryShingles = null;
		Event.observe(window, 'load', function() {
			/* SLIDERS */
			var container = $('latest');
			latestSliders = new AC.SlidingBureau(container);
			var drawers = $$("#latest .drawers>li");
			for (var i = 0; i < drawers.length; i++) {
				var handle = drawers[i].getElementsByClassName('drawer-handle')[0];
				var content = drawers[i].getElementsByClassName('drawer-content')[0];
				var drawer = new AC.SlidingDrawer(content, handle, latestSliders, {
					triggerEvent: 'mouseover', triggerDelay: 120});
				latestSliders.addDrawer(drawer);
				
				var title = 'Window Shade - Merrow - ' + handle.innerHTML;
				var properties = {sprop3: title};
				AC.Tracking.trackLinksWithin(content, function() {return true;} , title, properties);
			}
			var freeDrawers = function(container) {
				return function() {
					if (!AC.Detector.isIEStrict()) {
						container.setStyle({height: 'auto'});
					}
				}
			}
			setTimeout(freeDrawers(container), 1000);
			
			/* SHINGLES */
//			galleryShingles = new AC.ShingleBureau('gallery-shingles');
//			var steps = $('gallery-shingles').getElementsByTagName('li');
//			for (var i = 0; i < steps.length; i++) {
//				var handle = $(steps[i]).getElementsByClassName('handle')[0];
//				var drawer = new AC.ShingleDrawer(steps[i], handle, galleryShingles, {
//					triggerEvent: 'mouseover',
//					triggerDelay: 50});
//				galleryShingles.addDrawer(drawer);
//				
//				var title = 'Shingles - iPhone - ' + handle.getElementsByTagName('strong')[0].innerHTML;
//				var properties = {sprop3: title};
//				AC.Tracking.trackLinksWithin(steps[i], function() {return true;} , title, properties);
				
			
			

		}, false);
		
		
		
	</script>
    
    
	<link rel="stylesheet" href="http://css.imerrow.com/css_major/base_vimeo.css" type="text/css" charset="utf-8">
	<link rel="stylesheet" href="http://css.imerrow.com/css_major/ac_quicktime.css"  type="text/css" charset="utf-8">
	<link rel="stylesheet" href="http://css.imerrow.com/css_major/index_vimeo.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/whole_vimeo.css" type="text/css" charset="utf-8">


</head>


<!-- ************* DO NOT ALTER ANYTHING BELOW THIS LINE ! ************** --->

<!-- ##################  
	// menu
	// ################## -->	

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
                
				
			
            		<? include ("widget_leftmainmenu.php") ?>
                    
					
				
                
              
 <!-- ################## 
	// ################## -->	
     			</div> <!-- /column.first -->				
                <div class="column">
<!-- ##################  
	// center column widgets
	// ################## -->	 
					
                    
                    <? include ("widget_announcements.php") ?>
					
                  
             		
				
  
             
 <!-- ################## 
//	 ################## -->	
     			</div> <!-- /column -->				
                <div class="column last sidebar">
  <!-- ##################  
//	 right column widgets
//	 ################## -->	 	
    			
					<? include ("widget_drawers.php") ?>
					
				
  <!-- ################## 
//	 ################## -->	               
                </div> <!-- /colum.last -->
    
  <!-- ##################  
//	 FOOTER
//	 ################## -->	
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