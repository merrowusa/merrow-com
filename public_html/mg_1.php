<?php ob_start("ob_gzhandler");
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
$murray = mysql_query("SELECT * FROM machine_pages WHERE style_key='mg3u'")
or die(mysql_error());
$nate = mysql_fetch_array($murray);

} elseif ($cp == NULL  ) {
$murray = mysql_query("SELECT * FROM machine_pages WHERE style_key='mg3u'")
or die(mysql_error());
$nate = mysql_fetch_array($murray);
} 

$machine = $nate['style'];
$style_key = $nate['style_key']; ?>

<!DOCTYPE html><html lang="en">
<head>
<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<meta name="google-site-verification" content="_9qSOieZ5-cE2EMjUTKZyl8EFWckcJct_jFdb9XhTkY" />
<title><? echo  $nate['seo_title']; ?> </title> 
<link rel="icon" href="/favicon.ico" type="image/x-icon" />
 <style type="text/css" media="all">@import "http://css.imerrow.com/css_major/960.css";</style>
<? include ('widget_new_styles.php'); ?>
<meta name="y_key" content="b0241928e572e190">
<meta name="description" content="<? echo  $nate['description']; ?>" /> 
<meta name="keywords" content="<? echo  $nate['seo_keywords']; ?>" /> 
<meta name="Author" content="Merrow">
<meta name="Category" content="products,sewing machines">

<!--JS TOP-->
<? include ("widget_js.php"); ?>
<!-- START ANALYTICS CONTENT   -->
<? include ('widget_analytics.php'); ?>
<!-- END ANALYTICS CONTENT   -->
</head>
<? include ("site.js"); ?>
<body id="daypass">

  <a name="top"></a>
   		 <div class="container_16">	
   
   <!-- NEW MENU -->
<?  include ("header_test.php") ?> 
   <!--END MENU -->
   

	<div class="center_bloc">
		 <div class="body_doc">
	 		 <div class="man" id="fat"></div>
 		  		<div class="clear"></div>




<div class="content_a">
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
<div id="main" class="c_grid_9">
<div class="title_d3B"> <span class="title_d3b"> <? echo $machine ?></font></span><span class="bar_d3b"> | </span><span class="headline_d3b"> <? echo  $nate['header']; ?> </span></div>
<img src="http://merrow-media.s3.amazonaws.com/product-pages/<? echo  $style_key; ?>_main.jpg" width="500" height="417" alt=" <? echo $machine ?> Image" class="thumbnail alignleft" />
<div class="clear"></div>
<div class="kiddy_container_thumbs">
<div class="float"><? if ( $nate['number_of_thumbs'] >= 1) { ?>

<a href="http://merrow-media.s3.amazonaws.com/product-pages/<? echo  $style_key; ?>_thumb1x.jpg" rel="prettyPhoto[pp_gal1]"><img src="http://merrow-media.s3.amazonaws.com/product-pages/<? echo  $style_key; ?>_thumb1.jpg"  width="100" height="83" alt="<? echo $machine ?> thumbnail 1"/></a>

<? } ?>

<? if ( $nate['number_of_thumbs'] >= 2) { ?>

<a href="http://merrow-media.s3.amazonaws.com/product-pages/<? echo  $style_key; ?>_thumb2x.jpg" rel="prettyPhoto[pp_gal1]"><img src="http://merrow-media.s3.amazonaws.com/product-pages/<? echo  $style_key; ?>_thumb2.jpg"  width="100" height="83" alt="<? echo $machine ?> thumbnail 2"/></a>

<? } ?>

<? if ( $nate['number_of_thumbs'] >= 3) { ?>

<a href="http://merrow-media.s3.amazonaws.com/product-pages/<? echo  $style_key; ?>_thumb3x.jpg" rel="prettyPhoto[pp_gal1]"><img src="http://merrow-media.s3.amazonaws.com/product-pages/<? echo  $style_key; ?>_thumb3.jpg"  width="100" height="83" alt="<? echo $machine ?> thumbnail 3"/></a>

<? } ?>

<? if ( $nate['number_of_thumbs'] >= 4) { ?>

<a href="http://merrow-media.s3.amazonaws.com/product-pages/<? echo  $style_key; ?>_thumb4x.jpg" rel="prettyPhoto[pp_gal1]"><img src="http://merrow-media.s3.amazonaws.com/product-pages/<? echo  $style_key; ?>_thumb4.jpg"  width="100" height="83" alt="<? echo $machine ?> thumbnail 4"/></a>

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
<td> <? echo  $nate['needle_standard']; ?> </a></td>
</tr>
<tr class="first">
<td>MERROW NEEDLE RANGE</td>
<td><a href="http://store.merrow.com/category/10239030961/1/Sewing-Machine-Needles.htm"><? echo  $nate['needle_range']; ?> </a></td>
</tr>
<tr class="second">
<td>FEDERAL STITCH TYPE</td>
<td><? echo  $nate['stitch_type']; ?></td>
</tr>

<tr class="first">
<td>MOTOR REQUIRED*</td>
<td><? echo  $nate['motor_spec']; ?></td>
</tr>
<tr class="second">
<td>NUMBER OF THREADS</td>
<td><? echo  $nate['threads']; ?></td>
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
<div id="sidebar" class="c_grid_7">
<aside class="widget">
<p class="cp_title">Video</p>
<div class="line_b"> </div>
<? if ( $nate['number_of_videos'] == null) { ?>
<div class="video">

<a href="http://www.youtube.com/watch?v=clZFXc2exsI" rel="prettyPhoto" title="the <? echo $machine; ?> Merrow Machine built in Fall River, MA"><img src="http://merrow-media.s3.amazonaws.com/product-pages/comingsoon_video1.jpg"  width="138" height="100" alt="Video 1" />
<span>We're still filming...SET THE CMS... check back soon for a new video</span></a>
</div><strong></strong>
<? } ?>
<? if ( $nate['number_of_videos'] == 0) { ?>
<div class="video">
<a href="http://www.youtube.com/watch?v=clZFXc2exsI" rel="prettyPhoto" title="the <? echo $machine; ?> Merrow Machine built in Fall River, MA"><img src="http://merrow-media.s3.amazonaws.com/product-pages/comingsoon_video1.jpg"  width="138" height="100" alt="Merrow Video 1" />
<span>We're still filming... check back soon for a new video</span></a></div><strong></strong>
<? } ?>
<? if ( $nate['number_of_videos'] == 1) { ?>
<div class="video">
<a href="<? echo  $nate['youtube1']; ?>" rel="prettyPhoto" title="the <? echo $machine; ?> Merrow Machine built in Fall River, MA"><img src="http://merrow-media.s3.amazonaws.com/product-pages/<? echo  $style_key; ?>_video1.jpg"  width="138" height="100" alt="<? echo $machine ?> Video 1" />
<span><? echo  $nate['video_tagline1']; ?></span>  </a>
</div>
<? } ?>
<? if ( $nate['number_of_videos'] >= 2) { ?>
<div class="video">
<a href="<? echo  $nate['youtube1']; ?>" rel="prettyPhoto" title="the <? echo $machine; ?> Merrow Machine built in Fall River, MA"><img src="http://merrow-media.s3.amazonaws.com/product-pages/<? echo  $style_key; ?>_video1.jpg"  width="138" height="100" alt="<? echo $machine ?> Video 1" />
<span><? echo  $nate['video_tagline1']; ?></span>  </a>
</div>
<div class="video">
<a href="<? echo  $nate['youtube2']; ?>" rel="prettyPhoto" title="the <? echo $machine; ?> Merrow Machine built in Fall River, MA"><img src="http://merrow-media.s3.amazonaws.com/product-pages/<? echo  $style_key; ?>_video2.jpg"  width="138" height="100" alt="<? echo $machine ?> Video 1" />
<span><? echo  $nate['video_tagline2']; ?></span>  </a>
</div>
<? } ?>
</aside>
<div class="clear"></div>
<aside class="widget">
<p class="cp_title">Description</p>
<div class="line_b"> </div>
<p class="cp_p"><? echo  $nate['description']; ?></p>
<a href="#wingnuts">Read More</a>      <a id="contact" href="/contact_general.php?label=<? echo  $nate['contact_stitch']; ?>&amp;key=samples">Contact Us </a>
</aside> <!-- end widget -->
<!--[if lte IE 9]>
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
<img src="http://merrow-media.s3.amazonaws.com/product-pages/<? echo  $style_key; ?>_stitch1.jpg" width="339" height="226" alt=" <? echo $machine ?> Stitch 1" /></a></div></div>
<? } else { ?>
<div class="cpss">
<div class="float">
  <a href="#ss">
<img src="http://merrow-media.s3.amazonaws.com/product-pages/<? echo  $style_key; ?>_stitch1.jpg" width="330" height="108"
alt=" <? echo $machine ?> Stitch 1" /></a>
</div>
<div class="float">
<a href="#ss"><img src="http://merrow-media.s3.amazonaws.com/product-pages/<? echo  $style_key; ?>_stitch2.jpg" width="330" height="108"
alt=" <? echo $machine ?> Stitch 2" /></a>

</div>
</div>
<? } ?>
</aside> 
<!-- end widget -->
<!--[if lte IE 9]>
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
<? $murray3 = mysql_query("SELECT * FROM application_pages WHERE style_key='$style_key' AND `publish`='yes'ORDER BY `layout_order` ")
or die(mysql_error());
$nate3 = mysql_fetch_array($murray3); ?>

<? if(empty($nate3)) { } else { ?>
<div class="clear"></div>
<div class="cp_title"><? echo $machine; ?> Applications </div>
<div class="line_b"> </div>
<div class="applications">
<? $murray2 = mysql_query("SELECT * FROM application_pages WHERE style_key='$style_key' AND `publish`='yes'ORDER BY `layout_order` ")
or die(mysql_error());


while($nate2 = mysql_fetch_array( $murray2 )) { 
foreach($nate2 AS $key => $value) { $nate2[$key] = stripslashes($value);
} 
?>
  <a href="/sewing/applications/<?echo $nate2['app_key']; ?>/#<? echo $nate2['d_key']; ?>"><<? echo  "img src=\"http://merrow-media.s3.amazonaws.com/applications/".$nate2['d_key']; ?>_main_400x360.jpg" width="200px"/></a>
<? } ?>
</div>
<br><br>
<? } ?> 
<div class="clear"></div>
<div class="cp_title">The Advantage of the <? echo $machine; ?> </div>
<div class="line_b"> </div>
<div class="ol_rules"> 
<p><? echo $nate['overview']; ?></p>

<? if ($cp == 'm3u') { }elseif ($cp == 'm3urefkit') { } else { ?>

<? if ($machine == '70-D3B-2') { ?>
<img src="http://merrowservices.s3.amazonaws.com/2010_productpage/cpgraphic.png" />
<br clear="all"/><br clear="all"/>
<? } else { ?>

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

<?  }  ?>

<?  } if ($machine == '70-D3B-2') { ?>


<div style="width:100%;border-top: 1px dashed #999999;margin:18px 0;height:1px;overflow:hidden"></div><div class="headline">Fabrics & Processes </div>
<p>the 70-D3B-2 (and variations) will sew: Woven Fabric, Knit Fabric, Terry Towel, Denim, Technical Textiles, and Nonwovens</p>
<p> the 70-D3B-2 (and variations) is used in the following processes: Continuous Bleaching,  Mercerising,  Scouring, Washing, Drying, Pad & Steam Dyeing, Printing, Steaming, Shrinking (Sanforizing), Finishing, Tubular Processing, Slitting & De-twisting, Heat Setting, Napping & Shearing,   Singeing, Calendering </p>
<div style="width:100%;border-top: 1px dashed #999999;margin:18px 0;height:1px;overflow:hidden"></div><div class="headline">The 70-D3B-2 has more than 350 variations, some of the most popular are: </div>
<br />
<!--   SECTION FOR 70 NAV CONTENT	-->
<? include 'widget_cp_70nav.php' ?>
<!--   END SECTION FOR 70 CONTENT	-->	        		 



<? } elseif ($machine == '72-D3B-2') {  ?>
<? } elseif ($machine == '72-D3B-2 R') { ?>
<br clear="all"/>
<div class="headline">The <? echo $machine; ?> is a variation of the <a href="/Overlock_Sewing_Machines/Continuous_Processing/70d3b2">Merrow 72-D3B-2 </div>
<p>learn more about the 72-D3B-2</p></a>
<? } elseif ($nate['page_key'] == '70') { ?>

<br clear="all"/>
<div class="headline">The <? echo $machine; ?> is one of more than 350 variations of the <a href="Overlock_Sewing_Machines/Continuous_Processing/70d3b2">Merrow 70-D3B-2 </div>
<p>learn more about the 70-D3B-2</p></a>

<? } ?>

<? if ($machine == '70-D3B-2 RAIL') { ?>
<a name="battyhudangus_i_sleep_in_a_drawer"></a>
<!-- START OTHER BUTT SEAMING MACHINE CONTENT   -->
<? include 'widget_cp_railbrands.php' ?>
<!-- END OTHER BUTT SEAMING MACHINES CONTENT   -->
        		         		
               <!--   SECTION FOR IFRAME CONTENT	-->
        		 <br clear="all"/><br clear="all"/>
        		     <div style="width:100%;border-top: 1px dashed #999999;margin:18px 0;height:1px;overflow:hidden"></div><br><div class="headline"> 
        		 Semi-Automated Seaming & Continuous Processing</div> 
        		<iframe src="/widget_cp_enventory.php" scrolling="no" frameborder="0" height="500" width="100%" ></iframe> 
               <!--  END SECTION FOR IFRAME CONTENT	-->


<? } else { ?>

</div>
<div class="clear"></div>
<!--   START SECTION FOR SS CONTENT	-->
<a name="ss"></a>
<div style="width:100%;border-top: 1px dashed #999999;margin:18px 0;height:1px;overflow:hidden"></div><div class="headline"><? echo $machine; ?> Stitches</div>

<div id="PictoBrowser101223103104">Get the flash player here: http://www.adobe.com/flashplayer</div><script type="text/javascript" src="http://www.db798.com/pictobrowser/swfobject.js"></script><script type="text/javascript"> var so = new SWFObject("http://www.db798.com/pictobrowser.swf", "PictoBrowser", "900", "440", "8", "#EEEEEE"); 
so.addVariable("source", "sets"); 
so.addVariable("names", ""); 
so.addVariable("userName", "merrowmachine"); 
so.addVariable("userId", "25997048@N06"); 
so.addVariable("ids", "<? echo  $nate['flickr_set']; ?>"); 
so.addVariable("titles", "off"); 
so.addVariable("displayNotes", "on"); 
so.addVariable("thumbAutoHide", "off"); 
so.addVariable("imageSize", "large"); 
so.addVariable("vAlign", "center"); 
so.addVariable("vertOffset", "0"); 
so.addVariable("colorHexVar", "EEEEEE"); 
so.addVariable("initialScale", "no"); 
so.addVariable("bgAlpha", "90"); 
so.write("PictoBrowser101223103104");	</script>
<!--  END SECTION FOR SS CONTENT	-->
<div class="clear"></div>


<!-- INSERT THE MARKETING MATERIAL -->

<? if ($nate['marketing_url1'] != null) { ?>
<br>
<div class="clear"></div>
<div class="cp_title">Marketing Downloads for the <? echo $machine; ?> </div>
<div class="line_b"> </div>

<div class="kiddy_container_thumbs_mkt">
<div class="float">

<? if ($nate['marketing_url1'] != null) { ?>
<div class="video">
<a href="<? echo  $nate['marketing_url1']; ?>" >
<img src="<? echo  $nate['marketing_icon1']; ?>"  width="138" height="100" alt="Icon 1" />
<span><? echo  $nate['marketing_tagline1']; ?></span>  </a>
</div>
<? } ?>
<? if ($nate['marketing_url2'] != null) { ?>
<div class="video">
<a href="<? echo  $nate['marketing_url2']; ?>" >
<img src="<? echo  $nate['marketing_icon2']; ?>"  width="138" height="100" alt="Icon 1" />
<span><? echo  $nate['marketing_tagline2']; ?></span>  </a>
</div>
<? } ?>
<? if ($nate['marketing_url3'] != null) { ?>
<div class="video">
<a href="<? echo  $nate['marketing_url3']; ?>" >
<img src="<? echo  $nate['marketing_icon3']; ?>"  width="138" height="100" alt="Icon 1" />
<span><? echo  $nate['marketing_tagline3']; ?></span>  </a>

</div>
<? } ?>
<? if ($nate['marketing_url4'] != null) { ?>
<div class="video">
<a href="<? echo  $nate['marketing_url4']; ?>" >
<img src="<? echo  $nate['marketing_icon4']; ?>"  width="138" height="100" alt="Icon 1" />
<span><? echo  $nate['marketing_tagline4']; ?></span>  </a>

</div>
<? } ?>
<? if ($nate['marketing_url5'] != null) { ?>
<div class="video">
<a href="<? echo  $nate['marketing_url5']; ?>" >
<img src="<? echo  $nate['marketing_icon5']; ?>"  width="138" height="100" alt="Icon 1" />
<span><? echo  $nate['marketing_tagline5']; ?></span>  </a>
</div>
<? } ?>

</div>
</div>
<? } ?>

<!--END MARKETING MATERIAL -->
<div class="clear"></div>
<!-- INSERT THE MERROW ADVANTAGE -->
<div class="clear"></div>
<br>
<? if ($nate['page_key'] == '70') { include 'widget_merrow_advantage.php'; } elseif ($nate['page_key'] == '20') { include 'widget_merrow_portable_advantage.php'; } else { include 'widget_merrow_overlock_advantage.php'; } ?>
<!-- END MERROW ADVANTAGE -->

<!-- end content -->
<div class="clear"></div>

</div>
 <!-- end wrapper -->
</div></div>

</div>
</div>
</div>
<div class="footer_border"></div> 
</div>
<!--FOOTER-->
<? include ('widget_feet.php'); ?>
<? include ('widget_footer_js.php'); ?>

<!--END FOOTER-->
<div class="clear"></div>
</body></html>

<? } ?>



