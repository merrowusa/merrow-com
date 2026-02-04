
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

<!--JS TOP-->
<? include ("widget_js.php"); ?>
<? include ('widget_analytics.php'); ?>
</head>
<? include ("site.js"); ?>
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
	<div class="c_grid_5">
			<ul>
			<? $result = mysql_query("SELECT `app_nav_title`, `d_key` FROM application_pages WHERE  app_key='$ap' AND `d_key` != 'MASTER' AND `publish`='yes' ORDER BY `layout_order` LIMIT 0, 3")
			or die(mysql_error());
			$i=0;
			while($nate = mysql_fetch_array( $result )) { 
			foreach($nate AS $key => $value) { $nate[$key] = stripslashes($value);
			} 
			?><li><a href="#<? echo $nate['d_key']; ?>"><? echo  $nate['app_nav_title']; ?></a></li><? } ?>
		</ul></div><div class="c_grid_5">
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
			<div class="compare"><a href="/widget_compare.php?&app=<?echo $ap; ?>&iframe=true&width=1100&height=600" class="compare" rel="prettyPhoto[iframes]">Compare all</a></div>
			</div>
		<div class="clear"></div>
	<!-- START BUILDING APP BOXES -->



<!--<div class="center_bloc">
		 <div class="body_doc">
	 		 <div class="man" id="fat"></div>
 		  		<div class="clear"></div>




<div class="content_a">
<h1>Merrow Sewing Machine Agents</h1>
<p>Merrow sells and services all products through a network of sales agents around the world. With 165 agents in 65 countries we are confident that you will find local support. Please feel free to call us directly for product information and stitch samples
</p>
<iframe src="https://mapsengine.google.com/map/u/0/embed?mid=zsVw84sSuJyo.kI-ry6XL3e2w" width="960" height="800"></iframe>
</div></div></div>-->
