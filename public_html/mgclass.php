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
<? $cp = $_GET['cp']; ?>
<? include 'widget_sql.php' ?>

<? $murray = mysql_query("SELECT * FROM machine_pages WHERE style_key='$cp'")
or die(mysql_error());
$nate = mysql_fetch_array($murray);

if ($nate['style_key'] != $cp) {
$murray = mysql_query("SELECT * FROM machine_pages WHERE style_key='m3u'")
or die(mysql_error());
$nate = mysql_fetch_array($murray);

} elseif ($cp == NULL  ) {
$murray = mysql_query("SELECT * FROM machine_pages WHERE style_key='m3u'")
or die(mysql_error());
$nate = mysql_fetch_array($murray);
} 

$machine = $nate['style'];
$style_key = $nate['style_key']; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Merrow <? echo $machine; ?>  <? echo  $nate['header']; ?> </title>
<link rel="icon" href="/favicon.ico" type="image/x-icon" />
<style type="text/css" media="all">@import "http://merrowservices.s3.amazonaws.com/2010_fp_images/css/960.css"; @import "http://merrowservices.s3.amazonaws.com/2010_fp_images/css/style_a.css"; @import "http://css.imerrow.com/css_major/thickbox.css"; @import "http://css.imerrow.com/css_major/whole_vimeo.css"; @import "http://merrowservices.s3.amazonaws.com/css/services_cleanup.css"; @import "http://hydestore.com/skin/frontend/silver/hydestore/lightwindow/lightwindow.css";
</style>
<meta name="Author" content="Merrow Sewing Machine Co.">
<meta name="Category" content="products, sewingmachines">
<meta name="Description" content="THE MERROW <? echo $machine; echo $nate['header']; ?> ">
<meta name="Keywords" content="merrow,<? echo $machine; ?>AP, seaming, railway, fusing, heat seal, sewing, continuous processing, butted seaming, sewing piece goods, fabric joining,merrow machines,sewing machines,sergers,merrow stitch,overlock sewing, overlock, merrow stitching">
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
<? include ("widget_main_menu.php") ?>
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
<div class="title_d3B"> <span class="title_d3b"> <? echo $machine ?></font></span><span class="bar_d3b"> | </span><span class="headline_d3b"> <? echo  $nate['header']; ?> </span></div>
<a href="#"><img src="http://decorativeedging.s3.amazonaws.com/productpages/<? echo  $style_key; ?>_main.jpg" width="500" height="417" alt=" <? echo $machine ?> Image" class="thumbnail alignleft" /></a>
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
<td>OPERATING SPEED</td>
<td><? echo  $nate['speed']; ?> RPM</td>
</tr>
<tr class="second">
<td>STITCH WIDTH</td>
<td><? echo  $nate['stitch_width']; ?></td>
</tr>
<tr class="first">
<td>STITCH RANGE</td>
<td><? echo  $nate['stitch_range']; ?></td>
</tr>
<tr class="second">
<td>STANDARD NEEDLE</td>
<td><a href="http://store.merrow.com/Merrow-Needle-8SD/M/B0019QRA4S.htm"> <? echo  $nate['needle_standard']; ?> </a></td>
</tr>
<tr class="first">
<td>MERROW NEEDLE RANGE</td>
<td><a href="http://store.merrow.com/category/10239030961/1/Sewing-Machine-Needles.htm"><? echo  $nate['needle_range']; ?> </a></td>
</tr>
<tr class="second">
<td>FEDERAL STITCH TYPE</td>
<td><? echo  $nate['stitch_type']; ?></td>
</tr>
<!--<tr class="first">
<td>NEEDLE PLATE</td>
<td><? echo  $nate['needle_plate']; ?></td>
</tr>-->
<tr class="first">
<td>MOTOR REQUIRED*</td>
<td><? echo  $nate['motor_spec']; ?></td>
</tr>
<tr class="second">
<td>NUMBER OF THREADS</td>
<td><? echo  $nate['threads']; ?></td>
</tr>
<!--<tr class="first">
<td>CUTTERS</td>
<td><? echo  $nate['cutters']; ?></td>
</tr>-->

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
<p class="cp_title">Video</p>
<div class="line_b"> </div>

<div class="video">
<a href="http://decorativeedging.s3.amazonaws.com/productpages/<? echo  $style_key; ?>_video1.m4v" class="lightwindow page-options" params="lightwindow_width=720,lightwindow_height=560" >
<img src="http://decorativeedging.s3.amazonaws.com/productpages/<? echo  $style_key; ?>_video1.jpg"  width="138" height="100" alt="Video 1" />
<span><? echo  $nate['video_tagline1']; ?></span>  </a>
</div>

<? if ( $nate['number_of_videos'] == 1) { ?>

<div class="video">
<a href="http://decorativeedging.s3.amazonaws.com/productpages/70d3b2_video2.m4v" class="lightwindow page-options" params="lightwindow_width=720,lightwindow_height=560" >
<img src="http://decorativeedging.s3.amazonaws.com/productpages/70d3b2_video2.jpg"  width="138" height="100" alt="Video 1" />
<span>View a profile of the 70 Class Line of Sewing Machines from Merrow</span>  </a>
</div>

<? } ?>
<? if ( $nate['number_of_videos'] >= 2) { ?>

<div class="video">
<a href="http://decorativeedging.s3.amazonaws.com/productpages/<? echo  $style_key; ?>_video2.m4v" class="lightwindow page-options" params="lightwindow_width=720,lightwindow_height=560" >
<img src="http://decorativeedging.s3.amazonaws.com/productpages/<? echo  $style_key; ?>_video2.jpg"   width="138" height="100" alt="Video 2" />
<span> <? echo  $nate['video_tagline2']; ?> </span> </a>
</div>

<? } ?>

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
<a href="#wingnuts">Read More</a>      <a id="contact" href="http://merrow.com/contact_general.php?label=<? echo  $nate['contact_stitch']; ?>&amp;key=samples">Contact Us</a>
</aside> <!-- end widget -->

<!--[if lte IE 8]>
<div class="widget">
-->
<div class="clear"></div>
<aside class="widget">

<p class="cp_title">Stitch Samples</p>
<div class="line_b"> </div>
<a href="#ss"></a>

<? if ($machine == '70-D3B-2 HP') { ?>

<div class="cpss">
<div class="float">
  <a href="#ss">

<img src="http://decorativeedging.s3.amazonaws.com/productpages/<? echo  $style_key; ?>_stitch1.jpg" height="" alt=" <? echo $machine ?> Stitch 1" />
</a>
</div>
</div>

<? } else { ?>

<div class="cpss">
<div class="float">
  <a href="#ss">
<img src="http://decorativeedging.s3.amazonaws.com/productpages/<? echo  $style_key; ?>_stitch1.jpg"
alt=" <? echo $machine ?> Stitch 1" /></a>
</div>
<div class="float">

  <a href="#ss"><img src="http://decorativeedging.s3.amazonaws.com/productpages/<? echo  $style_key; ?>_stitch2.jpg"
alt=" <? echo $machine ?> Stitch 2" /></a>

</div>
</div>
<? } ?>


</aside> 

<!-- end widget -->
<!--[if lte IE 8]>
</div>
-->
<!-- end widget -->
</div>
<div class="clear"></div>
<!-- start bottom section -->
<div class="container_12">
<div class="clear"></div>

<!-- START OVERVIEW AND DETAILS  CONTENT   -->
<a name="wingnuts"></a>
<div class="clear"></div>
<div class="cp_title">The Advantage of the <? echo $machine; ?> </div>
<div class="line_b"> </div>
<div class="ol_rules"> 
<p><? echo $nate['overview']; ?></p>

<? if ($cp == 'm3u') { }elseif ($cp == 'm3urefkit') { } else { ?>

<br clear="all"/><br clear="all"/>
<div class="headline">WHY it's better</div>
<p><? echo $nate['why']; ?></p>
<br clear="all"/>
<div class="headline">HOW it's better</div>
<p><? echo $nate['how']; ?></p>
<br clear="all"/>
<div class="headline">WHERE it's used</div>
<p> <? echo $nate['where']; ?> </p>
<br clear="all"/>

<? } ?>
</div>


<div class="clear"></div>
<!--   START SECTION FOR SS CONTENT	-->
<a name="ss"></a>
<div style="width:100%;border-top: 1px dashed #999999;margin:18px 0;height:1px;overflow:hidden"></div><div class="headline"><? echo $machine; ?> Stitches</div>
<object width="900" height="440" align="middle"><param name="FlashVars" VALUE="ids=<? echo  $nate['flickr_set']; ?>&names=&userName=merrowmachine&userId=25997048@N06&titles=on&source=sets&titles=on&displayNotes=on&thumbAutoHide=off&imageSize=medium&vAlign=mid&displayZoom=on&vertOffset=0&initialScale=on&bgAlpha=80"></param><param name="PictoBrowser" value="http://www.db798.com/pictobrowser.swf"></param><param name="scale" value="noscale"></param><param name="bgcolor" value="#DDDDDD"></param><embed src="http://www.db798.com/pictobrowser.swf" FlashVars="ids=<? echo  $nate['flickr_set']; ?>&names=&userName=merrowmachine&userId=25997048@N06&titles=on&source=sets&titles=on&displayNotes=on&thumbAutoHide=off&imageSize=medium&vAlign=mid&displayZoom=on&vertOffset=0&initialScale=on&bgAlpha=80" loop="false" scale="noscale" bgcolor="#DDDDDD" width="900" height="440" name="PictoBrowser" align="middle"></embed></object>
<!--  END SECTION FOR SS CONTENT	-->



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



