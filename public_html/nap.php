<?php ob_start("ob_gzhandler");$scrub = $_GET['lang'];$nifty = $_COOKIE["lang"];if ( $scrub!=null) {$lang = $_GET['lang']; }elseif ($scrub = null) {$lang = '$nifty'; }if ( $scrub!=null) {setcookie("lang", "$scrub", time()+3600);} else { } include ("ip_lang_database.php"); $ap = $_GET['app']; include ('widget_sql.php');$murray1 = mysql_query("SELECT * FROM application_categories WHERE  app_key='$ap'")or die(mysql_error());$nate1 = mysql_fetch_array($murray1);?>
<!DOCTYPE html><html lang="en">
<head>
<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<meta name="google-site-verification" content="_9qSOieZ5-cE2EMjUTKZyl8EFWckcJct_jFdb9XhTkY" />
<title><? echo  $nate1['app_category_seo_title']; ?> </title> 
<link rel="icon" href="/favicon.ico" type="image/x-icon" />
<style type="text/css" media="all"></style>
<? include ('widget_new_styles.php'); ?>
<meta name="y_key" content="b0241928e572e190">
<meta name="description" content="<? echo  $nate1['app_category_seo_description']; ?>" /> 
<meta name="keywords" content="<? echo  $nate1['app_category_seo_keywords']; ?>" /> 
<meta name="Author" content="Merrow">
<meta name="Category" content="products,sewing machines">

<? include ("widget_js.php"); ?>
<? include ('widget_analytics.php'); ?>
</head>
<body>
<!-- ##################
menu
################## -->
  <a name="top"></a>
   		 <div class="container_16">	
   
   <!-- NEW MENU -->
<?  include ("header_test.php") ?> 
   <!--END MENU -->
 
 <!-- KEEP THIS DIV TAG --> </div> <!--  SPECIAL TO APPS !!! END THE CONTAINER 16 IT IS A BAD BAD ANIMAL HERE... MOOOOOOO -->

	<div class="center_bloc">
		 <div class="body_doc">
	 		 <div class="man" id="fat"></div>
 		  		<div class="clear"></div><div id="container">
		<div id="main">
			<div id="content" class="grid3cola">
<script type="text/javascript">
<!--
// this tells jquery to run the function below once the DOM is read
$(document).ready(function() {

// choose text for the show/hide link
var showText="MORE";
var hideText="HIDE";

// append show/hide links to the element directly preceding the element with a class of "toggle"
$(".toggle").prev().append(' (<a href="#" class="toggleLink">'+showText+'</a>)');

// hide all of the elements with a class of 'toggle'
$('.toggle').hide();

// capture clicks on the toggle links
$('a.toggleLink').click(function() {

// change the link depending on whether the element is shown or hidden
if ($(this).html()==showText) {
$(this).html(hideText);
}
else {
$(this).html(showText);
}

// toggle the display
$(this).parent().next('.toggle').toggle('slow');

// return false so any link destination is not followed
return false;

});
});

//-->
</script>
<div class="container_12">	
<div class="c_grid_5" id="head">
<div class="top_stitches">Merrow Stitches for
</div>
<? if (strlen($nate1['app_category_name']) < '22') { ?>
<div class="app_name"><? echo $nate1['app_category_name']; ?></div>
<? } else { ?>
<div class="app_name" id="longstring"><? echo $nate1['app_category_name']; ?></div>
<? } ?>
<div class="app_subtext">APPLICATIONS</div>

	<div class="youaddthis"> 
	<!--<script src="http://www.stumbleupon.com/hostedbadge.php?s=1"></script> -->
		 <div class="addthis_toolbox addthis_default_style "> 
			<a href="http://www.addthis.com/bookmark.php?v=250&amp;username=merrow" class="addthis_button_compact">Share</a> 
			<span class="addthis_separator">|</span> 
			<a class="addthis_button_preferred_1"></a> 
			<a class="addthis_button_preferred_2"></a> 
			<a class="addthis_button_reddit"></a> 
			<a class="addthis_button_email">   Send to a friend</a> 
		</div> 
		<script type="text/javascript">var addthis_config = {"data_track_clickback":true};</script> 
		<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=merrow"></script>
	</div>
<!-- AddThis Button END --> 
</div>
<div class="c_grid_6" id="tail">
<div class="menu_text"> 
<h2>Choose your Specific <? echo $nate1['app_category_short_name']; ?> Application</h2>
	<div class="c_grid_4">
			<ul>
			<? $result = mysql_query("SELECT `app_nav_title`, `d_key` FROM application_pages WHERE  app_key='$ap' AND `d_key` != 'MASTER' AND `publish`='yes' ORDER BY `layout_order` LIMIT 0, 3")
			or die(mysql_error());
			$i=0;
			while($nate = mysql_fetch_array( $result )) { 
			foreach($nate AS $key => $value) { $nate[$key] = stripslashes($value);
			} 
			?><li><a href="#<? echo $nate['d_key']; ?>"><? echo  $nate['app_nav_title']; ?></a></li><? } ?>
		</ul></div><div class="c_grid_4">
		<ul>
			<? $result = mysql_query("SELECT `app_nav_title`, `d_key` FROM  application_pages WHERE  app_key='$ap' AND `d_key` != 'MASTER' AND `publish`='yes'ORDER BY `layout_order` LIMIT 3, 3")
	      or die(mysql_error());
	      $i=0;
	      while($nate = mysql_fetch_array( $result )) { 
	      foreach($nate AS $key => $value) { $nate[$key] = stripslashes($value);
	      } 
	      ?><li><a href="#<? echo $nate['d_key']; ?>"><? echo  $nate['app_nav_title']; ?></a></li><? } ?>
		</ul></div><div class="c_grid_4">
		<ul>
			<? $result = mysql_query("SELECT `app_nav_title`, `d_key` FROM application_pages WHERE  app_key='$ap' AND `d_key` != 'MASTER' AND `publish`='yes' ORDER BY `layout_order` LIMIT 6, 3")
			or die(mysql_error());
			$i=0;
			while($nate = mysql_fetch_array( $result )) { 
			foreach($nate AS $key => $value) { $nate[$key] = stripslashes($value);
			} 
			?><li><a href="#<? echo $nate['d_key']; ?>"><? echo  $nate['app_nav_title']; ?></a></li> <? } ?>
		</ul>
			</div></div>
			<a href="/widget_compare.php?&app=<?echo $ap; ?>&iframe=true&width=1100&height=600" class="compare" rel="prettyPhoto[iframes]">Compare all</a></div>
		<div class="clear"></div>
	<!-- START BUILDING APP BOXES -->
		 		
	<? $result = mysql_query("SELECT * FROM application_pages WHERE  app_key='$ap' AND `d_key` != 'MASTER' AND `publish`='yes' ORDER BY `layout_order`")
or die(mysql_error());
$i=0;
while($nate = mysql_fetch_array( $result )) { 
($i%2 == 0) ? $bgcolor = "arrowbox" : $bgcolor = "arrowbox_dark";
($i%2 == 0) ? $app_dif = "app_each1" : $app_dif = "app_each" ;
foreach($nate AS $key => $value) { $nate[$key] = stripslashes($value);
} 
?>
<!-- start app box c_grid -->
	      <a name="<? echo $nate['d_key']; ?>"></a>
			<div class="clear"></div> 
				<div class="<?echo $app_dif; ?>">
				<div class="roundedcornr_box_315854">
				   <div class="roundedcornr_top_315854"><div></div></div>
				      <div class="roundedcornr_content_315854">
					<div class="c_grid_5"> 
						<div id="app_pic"><img src="http://merrow-media.s3.amazonaws.com/applications/<? echo  $nate['d_key']; ?>_main_400x360.jpg" width="400" height="360" />
						</div>
					</div>
				   <!-- START CENTER COLUMN -->	
					<div class="c_grid_3"> 
						<div id="labels">
						  <div class="more_toggle">More Information</div>
						  <!-- START INSET POPUP -->
						  	<div class="toggle">
							  	<div class="c_grid_3">
								  	<img src="http://merrow-media.s3.amazonaws.com/applications/<? echo  $nate['d_key']; ?>_callout_115x115.jpg" width="115" height="115" /></div>
							  	<div class="c_grid_8">
								  	<div class="toggle_header"><? echo  $nate['popup_title']; ?></div>
								  	<div class="toggle_sub"> <? echo  $nate['popup_subtitle']; ?></div></div>
							  	<div class="clear"></div> 
							  	<div class="c_grid_6"><p><? echo  $nate['popup_1stcolumn']; ?></p></div>
								<div class="c_grid_6"><p><? echo  $nate['popup_2ndcolumn']; ?></p></div>
						  		<div class="clear"></div><div class="c_grid_6"><a href="<? echo  $nate['machine_url']; ?>"<img src="http://applicationpages.s3.amazonaws.com/screenshots/buy.png"/></a>
							  	</div></div>
						   <!-- END INSET POPUP -->
							<div class="stitch_pic">
							<a href="http://merrow-media.s3.amazonaws.com/applications/<? echo  $nate['d_key']; ?>_stitch_highres1.jpg"  rel="prettyPhoto[pp_gal_<? echo $nate['d_key']; ?>]" title="<? echo $nate['app_right_title']; ?>">
							<img src="http://merrow-media.s3.amazonaws.com/applications/<? echo  $nate['d_key']; ?>_stitch_260x170.png" width="260" height="170" /></a>
							</div><div class="left_machine_label">
							<?$style = $nate['style_key']; $murray1 = mysql_query("SELECT `page_key` FROM machine_pages WHERE style_key='$style'")or die(mysql_error());$keri = mysql_fetch_array($murray1);
							if ($keri['page_key'] == '70') { ?> <a href="/Overlock_Sewing_Machines/Continuous_Processing/<? } 
							elseif ($keri['page_key'] == 'EMBLEM') { ?> <a href="/Sergers_and_Overlock_Sewing_Machines/Emblem_Edging/<? } 
							elseif ($keri['page_key'] == '18') { ?> <a href="/Crochet/<? } 
							else { ?> <a href="/Sergers_and_Overlock_Sewing_Machines/<? }  ?><? echo  $nate['style_key']; echo "\">"; ?><img src="http://merrow-media.s3.amazonaws.com/applications/<? echo  $nate['d_key']; ?>_machine_260x170.png" width="260" height="170" /></a>
							</div></div></div>
				<!-- START 3RD COLUMN -->
				<div class="c_grid_3" id="<? echo $bgcolor; ?>">
					<div class="toggle_sub"><? echo  $nate['app_right_title']; ?>
					</div><p> <? echo  $nate['app_right_p']; ?></p>
						<ul> 
							<li>SPEED: <? echo  $nate['machine_speed']; ?> </li>
							<li>STITCH WIDTH: <? echo  $nate['stitch_width']; ?> </li>
							<li>MATERIAL: <? echo  $nate['fabric_material']; ?> </li>
						</ul>
                </div> 
				<div class="clear"></div> 
			  </div>
			   <div class="roundedcornr_bottom_315854"><div></div></div>
			</div>
			</div>
			<? $i++; ?>
		<? if ($i == '1') { } else { ?>
		<a href="#top"><p>Back to the top</p></a>
		<? } ?>
	<!-- end app box c_grid --> 
<div class="hidden_pics">
<a href="http://merrow-media.s3.amazonaws.com/applications/<? echo  $nate['d_key']; ?>_stitch_highres2.jpg"  rel="prettyPhoto[pp_gal_<? echo $nate['d_key']; ?>]" title="<? echo $nate['app_right_title']; ?>"></a>
</div>
<? } ?>
</div>

<div class="clear"></div>
</div> <!-- end wrapper -->
</div></div></div></div>
<script type="text/javascript" charset="utf-8">
		$(document).ready(function(){
			$("a[rel^='prettyPhoto']").prettyPhoto();
		});
</script>
<script src="http://applicationpages.s3.amazonaws.com/scripts/jquery.prettyPhoto.js" type="text/javascript"/></script>

<!--FOOTER-->
<? include 'widget_feet.php' ?>
<!--END FOOTER-->
</body></html>



