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
	<title>Merrow, designers of the Stitch</title>
	
	<meta name="Author" content="Merrow, Inc.">
	<meta name="Category" content="products,sewingmachines">
	<meta name="Description" content="Merrow: the worlds best sewing machines.">
	<meta name="Keywords" content="merrow,charlie merrow,merrow machines,sewing machines,sergers,merrow stitch,merrow stitching">
	<meta name="viewport" content="width=1024">
	<meta name='robots' content='index,follow' />

     <link rel="stylesheet" href="http://css.imerrow.com/css_major/whole_vimeo.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/base_vimeo.css" type="text/css" charset="utf-8">
 	<link rel="stylesheet" href="http://css.imerrow.com/css_major/wide_main.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/why_buy.css" type="text/css" charset="utf-8">
</head>

<body>

<? include ('widget_main_menu.php') ?> 

<a name="top"></a>
<div id="wrap">
  <div id="content">
    <div id="header">
      
    <div id="main"><img src="http://images.imerrow.com/images/banners/sendfabric550X156.gif" width="550" height="156" alt="" />
      <div class="divide"></div>
            <div id="onlinefaqblock">
        <ul class="onlinefaqlinks">

<li><a href="#What-is-a-Merrow-Stitch">What is a Merrow Stitch?</a></li>
<li><a href="#How-many-stitch-variations-does-Merrow-offer">How many stitch variations does Merrow offer?</a></li>
<li><a href="#What-distinguishes-a-Merrow-stitch">What distinguishes a Merrow Stitch?</a></li>
<li><a href="#Why-use-the-Merrow-stitch">Why use the Merrow stitch?</a></li>
<li><a href="#How-do-I-advertise-stitching">How do I advertise stitching?</a></li>
<li><a href="#What-support-does-Merrow-offer-to-customers">What support does Merrow offer to customers?</a></li>
<li><a href="#Can-customers-leave-feedback-and-reviews">Can customers offer feedback and reviews?</a></li>
<li><a href="#How-do-I-purchase-Merrow-sewing-machines">How do I purchase Merrow sewing machines?</a></li>
     </ul>
      </div>
      <div class="clear"></div>
      <div class="divide"></div>


<a name="What-is-a-Merrow-Stitch"></a>
<h2>Q: What is a Merrow Stitch?</h2>
<p><strong>A:</strong> Every stitch sewn by a Merrow Machine is a Merrow Stitch.</p><p><a href="#top">Back to top</a></p>
<a name="How-many-stitch-variations-does-Merrow-offer"></a>
<h2>Q: How many stitch variations does Merrow offer?</h2>
<p><strong>A:</strong> Merrow offers thousands of stitch variations and stitch types, ranging from decorative and delicate to thick and structural.  Each machine makes one unique stitch type and the stitch can be modified to alter stitch width and stitch frequency.</p><p><a href="#top">Back to top</a></p>



<a name="What-distinguishes-a-Merrow-stitch"></a>
<h2>Q: What distinguishes a Merrow stitch?</h2>
<p><strong>A:</strong> Merrow machines use cam-driven technology which results in a higher level of precision and a stitch excellence than competitive machines. Merrow stitches are consistent, durable, and recognized for their beauty.  Merrow is one of the oldest, most trusted names in the industry. </p><p><a href="#top">Back to top</a></p>


<a name="Why-use-the-Merrow-stitch"></a>
<h2>Q: Why use the Merrow stitch?</h2>
<p><strong>A:</strong> Because you can sell more product for more money.  Customers will choose to buy a garment with brand name stitching because they will be buying a better product.  The Merrow brand is known throughout the sewing world for quality, reliability and beauty.</p><p><a href="#top">Back to top</a></p>


<a name="How-do-I-advertise-stitching"></a>
<h2>Q: How do I advertise stitching?</h2>
<p><strong>A:</strong> Use your imagination. The world is framed by stitching and a Merrow stitch will add value to your product.  Let customers know that they should choose your product because it has stitch quality that competitive products do not.  Merrow will provide marketing material and worldwide brand recognition.</p><p><a href="#top">Back to top</a></p>
<a name="What-support-does-Merrow-offer-to-customers"></a>
<h2>Q: What support does Merrow offer to customers?</h2>
<p><strong>A:</strong> We offer online video tutorials, detailed descriptions of how to set-up and thread your machine, step-by-step sewing instructions, and trained customer service technicians available by phone.  Merrow agents are located throughout the world and are able to provide local service. The Merrow warehouse is stocked with thousands of unique spare parts available for next day delivery, and our repair department will diagnose and fix any problems that arise.  Merrow is dedicated to customer support</p><p><a href="#top">Back to top</a></p>
<a name="Can-customers-leave-feedback-and-reviews">"></a>
<h2>Q: Can customers leave feedback and reviews?</h2>
<p><strong>A:</strong> Yes.  Our community site allows an online forum for customer feedback.  We encourage all customers to review and discuss our products.p><p><a href="#top">Back to top</a></p>

<a name="How-do-I-purchase-Merrow-sewing-machines">"></a>
<h2>Q: How do I purchase Merrow machines?</h2>
<p><strong>A:</strong> All Merrow machines can be purchased through the online store at merrow.com. Please contact Merrow directly with any questions.</p><p><a href="#top">Back to top</a></p>



  


</div>
    <!-- END main content -->
    <div id="sub">
      <div id="navback">
        <div id="leftnav">
	  <h2><a href="/index.html"><? echo $tongue['stitchstore_heading']; ?></a></h2>
                 <ul>

            <li><a href="./fp_stitchstore_benefits.php"> <? echo $tongue['stitchstore_menu1']; ?> </a></li>
            <li><a href="./fp_stitchstore_production.php"><? echo $tongue['stitchstore_menu2']; ?></a></li>
            <li><a href="./fp_stitchstore_why.php"><? echo $tongue['stitchstore_menu3']; ?></a></li>
            <li><a href="./fp_stitchstore_pricing.php"><? echo $tongue['stitchstore_menu4']; ?></a></li>
            <li><a href="./fp_stitchstore_faq.php"class="active"><? echo $tongue['stitchstore_menu5']; ?></a></li>
			<li><a href="http://en.wikipedia.org/wiki/Overlock" target="_blank">Wikipedia</a></li>            
          </ul>

	  
          <h2><? echo $tongue['stitchstore_heading1']; ?></h2>
          <ul id="subnav">
   
         <li><a href="http://merrow.com/cephei/sable/fp_dynamicstore.php"><? echo $tongue['stitchstore_menu6']; ?></a></li>
            <li><a href="http://merrow.ning.com"><? echo $tongue['stitchstore_menu7']; ?></a></li>
            <li><a href="http://merrow.com/cephei/sable/fp_agentlogin.php"><? echo $tongue['stitchstore_menu8']; ?></a></li>
            <li><a href="http://merrow.com/cephei/sable/fp_ebay.php"><? echo $tongue['stitchstore_menu9']; ?></a></li>

          </ul>
        </div>
      </div>

    </div>
    <!-- END sub -->
    <div id="footer">
      <p class="trialinfo">* the Merrow Stitch is trademarked and protected by Copyright, for legal information pls. contact elvincoolidge@merrow.com</p>

      <div id="sitemap">
        <ul id="sitemap_top">
            <li><a href="./fp_stitchstore_benefits.php"> <? echo $tongue['stitchstore_menu1']; ?> </a></li>
            <li><a href="./fp_stitchstore_production.php"><? echo $tongue['stitchstore_menu2']; ?></a></li>
            <li><a href="./fp_stitchstore_why.php"><? echo $tongue['stitchstore_menu3']; ?></a></li>
            <li><a href="./fp_stitchstore_pricing.php"><? echo $tongue['stitchstore_menu4']; ?></a></li>
            <li><a href="./fp_stitchstore_faq.php"class="active"><? echo $tongue['stitchstore_menu5']; ?></a></li>
        </ul>
        <ul id="sitemap_mid">
       <li><a href="http://merrow.com/cephei/sable/fp_dynamicstore.php"><? echo $tongue['stitchstore_menu6']; ?></a></li>
            <li><a href="http://merrow.ning.com"><? echo $tongue['stitchstore_menu7']; ?></a></li>
            <li><a href="http://merrow.com/cephei/sable/fp_agentlogin.php"><? echo $tongue['stitchstore_menu8']; ?></a></li>
            <li><a href="http://merrow.com/cephei/sable/fp_ebay.php"><? echo $tongue['stitchstore_menu9']; ?></a></li>
        </ul>
      
      

      </div>
      <div class="copyrightinfo"></div>
    </div>
    <!-- END footer -->
  </div>
  <!-- END content -->
</div>

<div id="bottommost">
       <ul id="terms">

        <li><a href="/WebStore-Privacy-Notice/">Privacy</a></li>
        <li>|</li>
        <li><a href="/WebStore-Terms-of-Use/">Terms of Use</a></li>
       </ul>
</div>
   <? include ('widget_analytics.php'); ?>
	</body>
    </html>