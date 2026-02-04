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

$nipples = $_GET['sewing_table_style'];
$machine = $nate['style'];
$style_key = $nate['style_key']; ?>

<!DOCTYPE html><html lang="en">
<head>
<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<meta name="google-site-verification" content="_9qSOieZ5-cE2EMjUTKZyl8EFWckcJct_jFdb9XhTkY" />
<title>Merrow Helmsman Sewing Table</title> 
<link rel="icon" href="/favicon.ico" type="image/x-icon" />
 <style type="text/css" media="all">@import "http://css.imerrow.com/css_major/960.css";</style>
<? include ('widget_new_styles.php'); ?>
<meta name="y_key" content="b0241928e572e190">
<meta name="description" content="The Compact Sewing Table from Merrow introduces a colorful, portable and remarkably sturdy option for prosumers, casual consumers, and the industrial customer" /> 
<meta name="keywords" content="<? echo  $nate['seo_keywords']; ?>" /> 
<meta name="Author" content="Merrow">
<meta name="Category" content="products,sewing machines">

<meta property="og:type" content="product.item">
<meta property="og:title" content="Compact Sewing Table">
<meta property="og:url" content="http://www.merrow.com/compact-professional-sewing-table">
<meta property="og:image" content="http://merrow-media.s3.amazonaws.com/general-http/2011_live/helmsman_main_01.jpg">
<meta property="og:image" content="http://www.merrow.com/compact-professional-sewing-table#">
<meta property="product:condition" content="new">
<meta property="product:availability" content="in stock">
<meta property="product:price:amount" content="279.99">
<meta property="product:price:currency" content="USD">
<meta property="product:retailer_item_id" content="70-HELMS-1">

<meta name="twitter:card" content="product">
<meta name="twitter:site" content="@merrowmachine">
<meta name="twitter:title" content="Merrow Compact Sewing Table">
<meta name="twitter:description" content="The MERROW HELMSMAN TABLE is designed to be the most efficient, reliable, and portable table for all sewing solutions. It accommodates all standard motors as well as air motors, and can be configured">
<meta name="twitter:image" content="http://merrow-media.s3.amazonaws.com/general-http/2011_live/helmsman_main_01.jpg">
<meta name="twitter:label1" content="Price">
<meta name="twitter:data1" content="279.99">
<meta name="twitter:label2" content="Color">
<meta name="twitter:data2" content="White">


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
<div id="top">
<div id="main" class="c_grid_9">
<div class="title_d3B"> <span class="title_d3b"> MERROW HELMSMAN SEWING TABLE</font></span><span class="bar_d3b"> | </span><span class="headline_d3b"> 

<? if ($nipples == '') { ?> 
without Motor
<? } elseif ($nipples == 'am') { ?>
with Servo Motor
<? } elseif ($nipples == 'cm') { ?>
With 1/2 Horsepower Clutch Motor
<? } ?>

 </span></div>
<a href="http://merrow-media.s3.amazonaws.com/general-http/2011_live/helmsman_main_01.jpg" rel="prettyPhoto[pp_gal1]"><img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/helmsman_main_01.jpg"  width="500" height="625" alt="Helmsman thumbnail 1"/></a>
</div> <!-- end main -->
<div id="sidebar" class="products">
<div class="widget">
<div class="cp_title">Menu</div>
<div class="line_b"> </div>
<div class="menu_list">
<ul>
<!-- <a href="#buy"><li>Where to Buy</li></a> -->

<a href="#advantages"><li>Advantages</li></a>
<a href="#included"><li>Included Components</li></a>
</ul>
</div>
<div class="menu_list">
<ul>
<a href="http://merrow-media.s3.amazonaws.com/general-http/2011_live/helmsman_highres_03.jpg" rel="prettyPhoto[pp_gal1]"><li>Alternate Views</li></a>
<a href="#downloads"><li>Downloads</li></a>
<a href="http://merrow.com/contact_general.html"><li>Contact Us</li></a>
</ul>
</div><strong></strong>
</div>
<div class="clear"></div>
<div class="widget">
<div class="cp_title">Description</div>
<div class="line_b"> </div>
<p class="p">
<? if ($nipples == '') { ?> 
  The MERROW HELMSMAN TABLE is designed to be the most efficient, reliable, and portable table for all sewing solutions. It accommodates all standard motors as well as air motors, and can be configured for wet environments.  
<? } elseif ($nipples == 'am') { ?>
  The MERROW HELMSMAN TABLE is designed to be the most efficient, reliable, and portable table for all sewing solutions. It accommodates all standard motors as well as air motors, and can be configured for wet environments.  
<? } elseif ($nipples == 'cm') { ?>
  The MERROW HELMSMAN TABLE is designed to be the most efficient, reliable, and portable table for all sewing solutions. It accommodates all standard motors as well as air motors, and can be configured for wet environments. 
<? } ?>
</p>
<a href="#advantages">Read More</a>    
</div> <!-- end widget -->
<!--[if lte IE 9]>
<div class="widget">
-->
<div class="clear"></div>
<div class="widget">
<div class="cp_title">Colors</div>
<div class="line_b"> </div>

<div class="cpss">
<div class="float">
  <a href="https://merrow-media.s3.amazonaws.com/general-http/2011_live/helmsman/merrow-table-colors-large.png" rel="prettyPhoto[pp_gal1]">
<img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/helmsman/merrow-table-colors.png" width="400" height="230"
alt="Sewing Table Colors" /></a>
</div>
</div>

</div> 


</div></div>
<!-- <div class="middle">
<div class="left">
<a name="included"></a>
<div class="cp_title">Included Components</div>
<div class="line_b"> </div>
<div class="cpss">
<? if ($nipples == '') { ?> 
<ul>
<li>-Table (Frame, Castors, Table Top, Treadle, Treadle Rod,

and Assembly Hardware)</li>

<li>-Belt Guard </li>


</ul>
<? } elseif ($nipples == 'am') { ?>
<ul>
<li>-Table (Frame, Castors, Table Top, Treadle, Treadle Rod,

and Assembly Hardware)</li>

<li>-1.7HP 4-Vane Rotary Air Motor.  36lbs/in of Torque and

Max Speed of 4000RPM.  Maximum Air Consumption of

78 cfm</li>

<li>- Air Motor Pedal, Hoses,and Mounting Hardware</li>

<li>- V-Belt and Belt Guard </li>

</ul>
<? } elseif ($nipples == 'cm') { ?>
<ul> 
<li>-Table (Frame, Castors, Table Top, Treadle, Treadle Rod,

and Assembly Hardware)</li>

<li>-1725 RPM, 60 Hz, 1/2 HP, 110 or 220 Volt, 1 or 3 Phase

Servo Motor</li>

<li>- V-Belt</li>

<li>- Belt Guard</li>  
</ul>
<? } ?>
 
</div></div> -->
<br>
<br>
<br>
<div class="left">
<div class="cp_title">Alternate Views</div>
<div class="line_b"> </div>
<div class="applications">
<a href="http://merrow-media.s3.amazonaws.com/general-http/2011_live/helmsman<? echo $nipples; ?>_highres_02.jpg" rel="prettyPhoto[pp_gal1]"><img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/helmsman_thumb_01.jpg"  width="115" height="170" alt="Helmsman thumbnail 2"/></a>


</div>
</div>
</div>

<!-- end widget -->

<!-- end widget -->

<div class="clear"></div>
<!-- start bottom section -->
<div class="container_12">
<div class="clear"></div>

<!-- START OVERVIEW AND DETAILS  CONTENT   -->
<a name="advantages"></a>
<div class="clear"></div>
<div class="cp_title">The Advantage of the MERROW HELMSMAN TABLE </div>
<div class="line_b"> </div>
<div class="ol_rules"> 
<p><? if ($nipples == '') { ?> 
The MERROW HELMSMAN TABLE is the latest portable sewing solution, designed to be easy to assemble, lightweight, and durable. It is the narrowest table on the market, featuring a frame that is adjustable in height and seated atop locking wheels. It's design makes it both ergonomically friendly and also highly transportable, as it can be adjusted for any location or environment. Additionally, it can be used with an air, clutch, or servo motor. The MERROW HELMSMAN TABLE is an easy way to increase productivity though greater machine mobility and table customization. Additional configurations for wet environments available.  

 
<? } elseif ($nipples == 'am') { ?>
The MERROW HELMSMAN TABLE is the latest portable sewing solution, designed to be easy to assemble, lightweight, and durable. It is the narrowest table on the market, featuring a frame that is adjustable in height and seated atop locking wheels. It's design makes it both ergonomically friendly and also highly transportable, as it can be adjusted for any location or environment. Additionally, it can be used with an air, clutch, or servo motor. The MERROW HELMSMAN TABLE is an easy way to increase productivity though greater machine mobility and table customization. Additional configurations for wet environments available.  
<? } elseif ($nipples == 'cm') { ?>
The MERROW HELMSMAN TABLE is the latest portable sewing solution, designed to be easy to assemble, lightweight, and durable. It is the narrowest table on the market, featuring a frame that is adjustable in height and seated atop locking wheels. It's design makes it both ergonomically friendly and also highly transportable, as it can be adjusted for any location or environment. Additionally, it can be used with an air, clutch, or servo motor. The MERROW HELMSMAN TABLE is an easy way to increase productivity though greater machine mobility and table customization. Additional configurations for wet environments available. 
<? } ?></p>
</div>
<div class="clear"></div>
<a name="downloads"></a>
<div class="cp_title">Downloads</div>
<div class="line_b"> </div>
<div class="ol_rules"> 
<a href="https://merrow-media.s3.amazonaws.com/general-http/2011_live/Helmsman-Assembly.pdf">Instruction &amp; Assembly</a><br><br>
<a href="https://merrow-media.s3.amazonaws.com/general-http/2011_live/Helmsman-Sewing-Table-Linecard.pdf">Promotional Line Card</a>
</div>


<!-- UNCOMMENT THIS TO ADD ALTERNATIVE VIEWS -->


<div class="cp_title">Available Color Configurations</div>
<div class="line_b"> </div>
<div class="ol_rules"> 
<a href="#"><img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/helmsman/black-sewing-table-merrow.png" /></a>
<a href="#"><img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/helmsman/red-sewing-table-merrow.png" /></a>
<a href="#"><img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/helmsman/green-sewing-table-merrow.png" /></a>
<a href="#"><img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/helmsman/orange-sewing-table-merrow.png" /></a>
<a href="#"><img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/helmsman/yellow-sewing-table-merrow.png" /></a>
<a href="#"><img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/helmsman/blue-sewing-table-merrow.png" /></a></div>
<a href="#ss"></a>
<div class="cp_title">Dimensions</div>
<div class="line_b"> </div>
<div class="ol_rules"> 
<a href="https://merrow-media.s3.amazonaws.com/general-http/2011_live/helmsman-diagram-hires.png" rel="prettyPhoto[pp_gal1]">
<img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/helmsman_dimensions_01.png" width="400" height="200"
alt=" <? echo $machine ?> Stitch 1" /></a>
</div>


<!--

<div class="clear"></div>
<a name="buy"></a>
<div class="cp_title">Where to Buy</div>
<div class="line_b"> </div>
<div class="buy_rules"> 
<a href=""<img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/raven_logo_01.png" />
<img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/raven_logo_02.png" />
<img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/raven_logo_03.png" />
<div class="clear"></div>
<div class="center_block">
<img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/raven_logo_04.png" />
<img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/raven_logo_05.png" />
</div>
<div class="clear"></div>
<img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/raven_logo_06.png" />
<img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/raven_logo_07.png" />
<img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/raven_logo_08.png" />

</div>
-->

<div class="clear"></div>


<!-- INSERT THE MARKETING MATERIAL 

<? if ($nate['marketing_url1'] != null) { ?>
<br>
<div class="clear"></div>
<a name="downloads"></a>
<div class="cp_title">Marketing Downloads for the Raven Table </div>
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
<? } ?>-->

<!--END MARKETING MATERIAL -->
<div class="clear"></div>
<div itemscope itemtype="http://schema.org/Product">
    <span itemprop="brand">Merrow</span> - 
    <span itemprop="name">Merrow Helmsman Compact Sewing Table</span><br>
    <img itemprop="image" src="https://images-na.ssl-images-amazon.com/images/I/71A7YPwAHCL._SL1500_.jpg"><br>
    <span itemprop="description">The MERROW HELMSMAN TABLE is designed to be the most efficient, reliable, and portable table for all sewing solutions. It accommodates all standard motors as well as air motors, and can be configured for wet environments.</span><br>
    Product number: <span itemprop="productID" content="upc:018227658713"></span><br>
    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
        <span itemprop="priceCurrency" content="USD"></span>
        Price: <span itemprop="price">279.99</span><br>
        Condition: <span itemprop="itemCondition" content="new">new</span>
    </div>
    <div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
           Average Rating: <span itemprop="ratingValue">4.6</span><br>
           Votes: <span itemprop="ratingCount">18</span><br>
           Reviews: <span itemprop="reviewCount">18</span>
       </div>
</div>


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





