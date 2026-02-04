<?php
 include 'widget_sql.php';
$cp = $_GET['cp'];
$murray = mysql_query("SELECT * FROM asin WHERE ot_id='$cp'")
or die(mysql_error());
$nate = mysql_fetch_array($murray); 
 if ($nate['mmc_id'] == '') { header( 'Location: http://www.merrow.com/404' ) ;

 } else { 

$machine = $nate['product_name'];
$style_key = $nate['msmc_id']; ?>

 
<? $scrub = $_GET['lang'];
$nifty = $_COOKIE["lang"];
 $audience = $_GET['audience'];
 
if ( $scrub!=null) {
$lang = $_GET['lang']; }
elseif ($scrub = null) {
$lang = '$nifty'; }
if ( $scrub!=null) {
setcookie("lang", "$scrub", time()+3600);
} else { } ?>
<?php include ("ip_lang_database.php") ?>
<? 
  
   if ($audience != 'private') {
   $audience ='public'; } else {  $audience = $_GET['audience']; }
 ?>





<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title><? echo $machine; ?>  <? echo  $nate['header']; ?> </title>
<link rel="icon" href="/favicon.ico" type="image/x-icon" />
<style type="text/css" media="all"> @import "http://css.imerrow.com/css_major/base_vimeo.css"; @import "http://merrowservices.s3.amazonaws.com/2010_fp_images/css/960.css"; @import "http://merrowservices.s3.amazonaws.com/2010_fp_images/css/style_a.css"; @import "http://css.imerrow.com/css_major/thickbox.css"; @import "http://css.imerrow.com/css_major/whole_vimeo.css"; @import "http://merrowservices.s3.amazonaws.com/css/services_cleanup.css"; @import "http://hydestore.com/skin/frontend/silver/hydestore/lightwindow/lightwindow.css";
</style>
<meta name="Author" content="Merrow Sewing Machine Co.">
<meta name="Category" content="products, sewingmachines">
<meta name="Description" content="<? echo "The " .$machine; echo $nate['header']; echo  ". ".$nate['description']; ?> ">
<meta name="Keywords" content="<? echo $machine; echo $nate['header']; ?>, sewing machine parts">
<meta name="viewport" content="width=1024">
<meta name="y_key" content="b0241928e572e190">
<meta name="google-site-verification" content="_9qSOieZ5-cE2EMjUTKZyl8EFWckcJct_jFdb9XhTkY" />
<meta name='robots' content='index,follow' />
<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->

</head>
<body>
<!-- ##################
menu
################## -->
<?  include "widget_main_google_menu.php" ?>
<!-- ##################
end menu
################## -->
<div id="wrapper" class="container_12">
<header id="header" class="grid_12">
</header> <!-- end header -->
<div id="content_a">
<!-- Show a "Please Upgrade" box to both IE7 and IE6 users (Edit to IE 6 if you just want to show it to IE6 users) - jQuery will load the content from js/ie.html into the div -->

<!--[if lte IE 7]>
<div class="ie grid_7"></div>
<![endif]-->
<!--[if lte IE 8]>

<style>
div.lil_lc_container_b {

float: left;
padding-bottom: 10px;
width: 989px;
height: 300px;
}
</style>
<![endif]-->




<div id="main" class="grid_7 alpha">
<div class="title_d3B"> <span class="title_d3b"> <? echo $machine ?></font></span><span class="bar_d3b">  </span><span class="headline_d3b"> <? echo  $nate['header']; ?> </span></div>
<a href="#"><img src="<? echo  $nate['imgurl_large']; ?>" width="500" height="" alt=" <? echo $machine ?> Image" class="thumbnail alignleft" /></a>
<div class="clear"></div>

<div class="kiddy_container_thumbs">
<div class="float">
<? if ( $nate['number_of_thumbs'] >= 1) { ?>
<a href="http://decorativeedging.s3.amazonaws.com/productpages/<? echo  $style_key; ?>_thumb1.m4v" class="lightwindow page-options" params="lightwindow_width=540,lightwindow_height=420" >
<img src="http://decorativeedging.s3.amazonaws.com/productpages/<? echo  $style_key; ?>_thumb1.jpg" width="100" height="100" alt="thumb 1" /></a>

<? } ?>
<? if ( $nate['number_of_thumbs'] >= 2) { ?>
<a href="http://decorativeedging.s3.amazonaws.com/productpages/<? echo  $style_key; ?>_thumb2.m4v" class="lightwindow page-options" params="lightwindow_width=540,lightwindow_height=420" >
<img src="http://decorativeedging.s3.amazonaws.com/productpages/<? echo  $style_key; ?>_thumb2.jpg" width="100" height="100" alt="thumb 2" /></a>

<? } ?>
<? if ( $nate['number_of_thumbs'] >= 3) { ?>
<a href="http://decorativeedging.s3.amazonaws.com/productpages/<? echo  $style_key; ?>_thumb3.m4v" class="lightwindow page-options" params="lightwindow_width=540,lightwindow_height=420" >
<img src="http://decorativeedging.s3.amazonaws.com/productpages/<? echo  $style_key; ?>_thumb3.jpg" width="100" height="100" alt="thumb 3" /></a>

<? } ?>
<? if ( $nate['number_of_thumbs'] >= 4) { ?>
<a href="http://decorativeedging.s3.amazonaws.com/productpages/<? echo  $style_key; ?>_thumb4.m4v" class="lightwindow page-options" params="lightwindow_width=540,lightwindow_height=420" >
<img src="http://decorativeedging.s3.amazonaws.com/productpages/<? echo  $style_key; ?>_thumb4.jpg" width="100" height="100" alt="thumb 4" /></a>
<? } ?>

</div>
<div class="clear"></div>
<div class="float">
<div>
<b class="infobox">
<b class="infobox1"><b></b></b>
<b class="infobox2"><b></b></b>
<b class="infobox3"></b>
<b class="infobox4"></b>
<b class="infobox5"></b></b>
<div class="infoboxfg">
<!-- content goes here -->
<table width="511px">
<tbody>
<tr class="headline">
<td></td> <td></td>
</tr>
<tr class="first">
<td>LENGTH</td>
<td><? echo  $nate['display_length']; ?> MM</td>
</tr>
<tr class="second">
<td>WIDTH</td>
<td><? echo  $nate['display_width']; ?> MM</td>
</tr>
<tr class="first">
<td>HEIGHT</td>
<td><? echo  $nate['display_height']; ?> MM</td>
</tr>

</tbody>
</table>
<!-- END infobox content -->
</div>
<b class="infobox">
<b class="infobox5"></b>
<b class="infobox4"></b>
<b class="infobox3"></b>
<b class="infobox2"><b></b></b>
<b class="infobox1"><b></b></b></b>
</div>
</div>
<!-- end post 2 -->
</div>
</div> <!-- end main -->
<div id="sidebar" class="grid_4 omega">
<aside class="widget">
<p class="cp_title">Price</p>
<div class="line_b"> </div>

<div class="video">
<? if ( $audience == 'public') { echo 'Please Contact your Merrow Agent for Pricing'; } else { ?>
<span><p class="cp_title"><? echo  $nate['mrsp']; ?> </p></span>  </a> <? } ?>
</div>


</aside>
<div class="clear"></div>

<aside class="widget">
<p class="cp_title">Description</p>

<div class="line_b"> </div>

<p class="cp_p"><? echo  $nate['description']; ?></p>
<!--
<li>For SEWING wide rolls of material on RAILWAYS</li>
<li>Designed for high speed end-to-end seaming</li>
<li>For STRAIGHT, SQUARE Seams</li>
<br>-->
<a href="#wingnuts">Read More</a>      <a id="contact" href="http://merrow.com/contact_general.php?label=<? echo  $nate['contact_stitch']; ?>&amp;key=samples" target="_blank">Contact Us</a>
</aside> <!-- end widget -->

<!-- end widget -->
</div>
<div class="clear"></div>
<!-- start bottom section -->
<div class="container_12">
<div class="clear"></div>



<div class="clear"></div>

<!-- INSERT THE MERROW ADVANTAGE -->
<? include 'widget_merrow_advantage.php' ?>
<!-- END MERROW ADVANTAGE -->
</div>
<!-- end content -->
<div class="clear"></div>
<!--FOOTER-->
<? include 'widget_footer.php' ?>
<!--END FOOTER-->
<!-- START ANALYTICS CONTENT   -->
<? include ('widget_analytics.php'); ?>
<!-- END ANALYTICS CONTENT   -->
<div class="clear"></div>
</div> <!-- end wrapper -->
<script type="text/javascript" src="http://merrow.com/cephei/scripts/lightwindow_all_min.js"></script> 


</div></div></div></body></html>
<? } ?>



