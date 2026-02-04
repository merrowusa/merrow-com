<? $page_id = 'index';?>
<? include ('widget_new_sql_genpageload.php'); ?>
<!DOCTYPE html><html lang="en">
<head>
<!--META DATA-->
<? include ('widget_new_metadata.php'); ?>
<!--STYLE SHEETS
ADD THIS WHEN WE GET OUT OF DEV!!!-->
<? /* include ('widget_new_styles.php'); */ ?>
<style>
@import "http://css.imerrow.com/css_major/services_cleanup.css";
@import "http://css.imerrow.com/css_major/style_a.css.css";
@import "http://css.imerrow.com/css_major/prettyPhoto.css";
@import "http://css.imerrow.com/css_major/wireframe.css";
@import "http://css.imerrow.com/css_major/c_grid_960.css";
@import "http://css.imerrow.com/css_major/new_header.css";
</style>

<!--GOOGLE ANALYTICS-->
<? include ('widget_analytics.php'); ?>
</head>
<!--JS TOP-->
<? include ("widget_js.php"); ?>
<? include ("site.js"); ?>

<!-- ##################
DOCUMENT LOAD
################## -->
<body id="daypass">
<a name="top"></a>
		<div class="container_16">
<!-- NEW MENU -->
<? /* include ("header_test.php"); */ ?>

<!--END MENU -->
<div class="background_gradient">
	<div class="center_bloc">
		<div class="body_doc">
	<div class="man" id="fat"></div>
<div class="clear"></div>
<div class="bridge_container">

<!--MAIN PAGE -->
<? if ($_GET['branded']=='complete') {?>
<script>
 $(document).ready(function(){
$("div.main_content").hide();
$("div.branded_content").show();

return false;
});
</script>
<div class="branded_content">
<div class="headline"><h1>THE BRANDED STITCH&reg;</h1><h2>A Revolutionary Industrial Idea</h2></div>
<div class="byline"><h2>Stitching is a mark of Quality</h2><h2>Merrow is Premium Stitching</h2><h2>You can now communicate this to your customers</h2>
<div class="center_text">The Merrow Branded Stitch Tag lets you make more money by advertising to your customer that the product they are buying uses premium stitching. Contact us now to learn how The Merrow Branded Stitch Tag can help promote your product's value</div>
<div class="form_branded"><h3>ENTER YOUR EMAIL ADDRESS TO LEARN MORE</h3></div>
<form action="widget_sub_datamover.php" method="post">
<input name="party_id" type="hidden" value="0007679" />
<input name="source" type="hidden" value="nbp" />
<input name="captcha" type="hidden" value="no" />
<div class="center_box">
<input id="dixie" type="text_box" name="email" name="bronx_box" value="" />
</div>
<div class="center_box">
<div class="thank_you"><h2>THANK YOU!</h2><p class="thanks">We'll be in touch shortly!</p></div>
</div>
</form>
<? if ($_GET['branded']=='complete') {?>
<div class="return_1"><a href="/">Return to Machines</a></div>
<? } else { ?>
<div class="return">Return to Machines</div>
<? } ?>
</div>

</div>
<? } else { ?>
<script>
 $(document).ready(function(){
$("div.main_content").show();
$("div.branded_content").hide();

return false;
});
</script>
<div class="main_content">
<div id="pageContent"> 
<div id="visitorContentWrapper" class="daypass"> <div id="availableTitles"> 
<div id="lab_container">
<div class="bottom_lab">
<div class="c_grid_1 prefix_14 suffix_1"><p class="close">CLOSE</p></div>
<div class="c_grid_5">
<img src="http://merrow-media.s3.amazonaws.com/general-http/g_07.png" />
<p class="lab_text">Your Stitching has value. With Merrow's Stitch Lab you have the power to ensure that it won't be compromised while being sewn. Our stitch Lab will sew off your material the way you need it with the stitch you want on your customized Merrow Machine. Send us a stitch sample and your material: we'll sew it and have it back to you in 14 days.</p></div>
<div class="c_grid_4">
<div id="instruction_first"><div id="number">1.</div><span class="first">Send us your material</span></div>
<div id="instruction"><div id="number">2.</div><span class="first">We'll work with you to create the stitch that brings you value</span></div>
<div id="instruction"><div id="number">3.</div><span class="first">We'll hand build a machine to sew on your material</span></div>                            <div id="instruction_last"><div id="number">4.</div><span class="first">We'll ship your machine sewn off and ready for production</span></div>
</div>
<div class="c_grid_7">
<? if ($_GET['form'] == 'complete') { ?>
<div class="thankyou">
<img id="bars" src="http://merrow-media.s3.amazonaws.com/general-http/g_21.png" />
<img src="http://merrow-media.s3.amazonaws.com/general-http/g_22.png">
<div class="thx_text"><p class="bigred">Thank You for your interest in the merrow stitch lab!</p><div class="bottom_third"><p class="thanks_text">We will get back you promptly regarding your request</p></div>
</div>
</div><?  } else { ?>
<div class="form_container">
<img id="bars" src="http://merrow-media.s3.amazonaws.com/general-http/g_21.png" />
<img src="http://merrow-media.s3.amazonaws.com/general-http/g_09.png" />
<form action="widget_sub_datamover.php" method="post">
<input name="party_id" type="hidden" value="0007679" />
<input name="source" type="hidden" value="nfp" />
<input name="captcha" type="hidden" value="no" />
<input id="virgil" type="text_box" name="email" name="bronx_box" value="enter your email here..." />
<div id="directions">Enter your email address to coordinate shipment of your material to us for <span class="red">FREE</span>.</div>
<div class="submit_l">
<input type="submit" id="hera" value="Send Message" src="http://merrow-media.s3.amazonaws.com/general-http/g_14.png" name="submit"><!-- <input id="hera" type="submit" value="submit" src="http://merrow-media.s3.amazonaws.com/general-http/g_14.png" name="image"  /> -->
</div>
</form>
</div>
<? } ?>
</div>
<div class="clear"></div>
<div class="the_fold"><div class="c_grid_16"><div id="dots"></div></div>
<div class="c_grid_4"><!--<img id="lab_c_logo" src="http://merrow-media.s3.amazonaws.com/general-http/g_18.jpg">--></div>
<div class="c_grid_12"><p class="quote">The ActiveSeam stitch lab is a critical feature of the ActiveSeam program. We test prototypes, support the design of innovative new ActiveSeam stitches, and ensure that all ActiveSeam branded garments are manufactured to the standards defined by Merrow and our parters</p></div>
</div>
</div>
<div class="fat_boy"></div></div>                          </div>
</div>
</div>
<div class="logo_top"><img width="980" height="" src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/asmain_02.jpg"></div>
<!--<div class="headline"><h1>ACTIVESEAM<br></h1></div>-->
<div class="main_image" id="left"><a href="/technical-sewing">
<img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/asmain1.jpg"/></a>
<h2>Brand It!<br></h2>
<p class="machines"></p>
<a href="/technical-sewing"><div class="learn" id="left"></div></a>
</div>
<div class="main_image"id="center"><a href="/fashion-sewing">
<img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/asmain2.jpg" id="center_front_2"/>
<img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/asmain2.jpg" id="center_front_2"/></a>
<!--<h2>Fashion<br>&amp; Design</h2>
<p class="machines">machines</p>-->
<!--<a href="/fashion-sewing"><div class="learn" id="center"></div></a>-->
</div>
<div class="main_image" id="right"><a href="/end-to-end-seaming"><img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/asmain3.jpg" /></a><h2>APPLICATIONS<br></h2><p class="machines"></p><a href="/end-to-end-seaming"><div class="learn" id="right"></div></a></div>
<div class="clear"></div>
<div class="headline"><h1>ACTIVESEAM TECHNOLOGY </div>
</div>

<div class="branded_content">
<div class="headline"><h1>THE BRANDED STITCH&reg;</h1><h2>A Revolutionary Industrial Idea</h2></div>
<div class="byline"><h2>Stitching is a mark of Quality</h2><h2>Merrow is Premium Stitching</h2><h2>You can now communicate this to your customers</h2>
<div class="center_text">The Merrow Branded Stitch Tag lets you make more money by advertising to your customer that the product the are buying uses premium stitching. Contact us now to learn how The Merrow Branded Stitch Tag can help promote your product's value</div>
<div class="form_branded"><h3>ENTER YOUR EMAIL ADDRESS TO LEARN MORE</h3></div>
<form action="widget_sub_datamover.php" method="post">
<input name="party_id" type="hidden" value="0007679" />
<input name="source" type="hidden" value="nbp" />
<input name="captcha" type="hidden" value="no" />
<div class="center_box">
<input id="dixie" type="text_box" name="email" name="bronx_box" value="" />
</div>
<div class="center_box">
<input type="submit" id="aphrodite" value="Send Message" src="http://merrow-media.s3.amazonaws.com/general-http/g_14.png" name="submit"><!-- <input id="hera" type="submit" value="submit" src="http://merrow-media.s3.amazonaws.com/general-http/g_14.png" name="image"  /> -->
</div>
</form>
<div class="return">Return to Machines</div>
</div>


</div>
<? } ?>
</div>
</div>


<div class="main_middle_container">
<div class="box_container">
<div class="grey_boxes" id="left_main"><img id="left" src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/h_05.gif.png"><div class="box_headline">MERROW HERITAGE</div><div class="box_subline">172 years of World Class Sewing</div><p class="main_boxes">Merrow was a founding member of the modern textile industry.  Take a peek at the rich and storied history of Merrow from gunpowder factory, to knitting mill, to manufacturer of the finest hand-built sewing machines.  </p><a href="/overlock-history"><div class="learn_submain" id="history"></div></a></div>
<div class="grey_boxes" id="right_main"><img id="right_neg" src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/h_06.gif.png"><div class="box_headline">THE MERROW BRANDED STITCH&reg;</div><div class="box_subline">Premium Stitching: a Revolutionary Act</div><p class="main_boxes">It means a lot to call a stitch a Merrow. Merrow Sewing Machines incorporate a unique, cam driven technology which achieves more consistent, technically superior stitches. The result is that products stitched on Merrow Machines have better seams, last longer and wear better. Stitching Matters: add the Merrow Stitch Tag to your products today!
</p><div class="learn_submain" id="brand"></div><div class="close_brand"></div></div>
</div>
</div>

<div class="main_southern_container">
<div class="white_boxes" id="logo"><div class="logo_bar"><a href="/ncs1.php?s=csrw"><img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/ft_10.gif" id="logo_bar"/></a></div></div>
<div class="box_container">


<div class="boxes" id="left_main">
<div class="height_container_150">
<div class="f_image" id="b"><a href="/agentmap.html"></a></div>
<div class="ncp_headline" id="footer"><a href="/agentmap.html">AGENT LOCATOR</a></div>
<div class="box_image" id="map"><a href="/agentmap.html"><img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/ft_11.gif" /></a></div>
<div class="special_map_holder"><div class="box_text">Merrow machines are installed the world over and are sold and supported by a network of 156 sales agents spanning 65 countries  Click Here to locate the agent nearest you.</div></div>
</div>
</div>
<div class="boxes" id="center_main">
<div class="height_container_150">
<div class="f_image" id="c"><a href="http://blog.merrow.com"></a></div>
<div class="ncp_headline" id="footer"><a href="http://blog.merrow.com">BLOG</a></div>
<div class="box_image" id="blog"><div class="box_text">Check out the Merrow Blog for updates, special deals, new products, and interesting goings-on.  the Merrow Blog is updated weekly and is a great company resource.  </div></div>
</div>
</div>
<div class="boxes" id="right_main">
<div class="height_container_150">
<div class="f_image" id="d"><a href="http://www.merrowing.com"></a></div>
<a href="http://www.merrowing.com">	<div class="ncp_headline" id="footer">COMMUNITY</a></div>
<a href="http://www.merrowing.com"><div class="box_image" id="community"></div></a>
</div>
</div>
</div>
</div>

<!--END MAIN PAGE -->

<div class="clear"></div>
</div>
</div>


<!-- ##################
FOOTER LOAD
################## -->
<? include ('widget_feet.php'); ?>
<? include ('widget_footer_js.php'); ?>

		
	</body>
</html>