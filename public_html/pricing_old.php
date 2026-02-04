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
	<title>Merrow Pricing</title>
	
	<meta name="Author" content="Merrow, Inc.">
	<meta name="Category" content="products,sewingmachines">
	<meta name="Description" content="Merrow: the worlds best sewing machines.">
	<meta name="Keywords" content="merrow,charlie merrow,merrow machines,sewing machines,sergers,merrow stitch,merrow stitching">
	<meta name="viewport" content="width=1024">
	<meta name='robots' content='index,follow' />
    
     <link rel="stylesheet" href="http://css.imerrow.com/css_major/whole_vimeo.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/base_vimeo.css" type="text/css" charset="utf-8">
 	<link rel="stylesheet" href="http://css.imerrow.com/css_major/wide_main.css" type="text/css" charset="utf-8">
</head>

<body>

<? include ('widget_main_menu.php') ?> 

<a name="top"></a>
<div id="wrap">
  <div id="content">
    <div id="header">
      
    <div id="main"><img src="http://images.imerrow.com/images/banners/sendfabric550X156.jpg" width="550" height="156" alt="Send Us your fabric" />
      <div class="divide"></div>
   <div id="alt_area" class="lrgMid" style="display: ">

				<div class="lrgBtmShade">
					<div class="lrgGreenTop contain">

				<!-- here come the optional Alt areas for each country: these are all OFF by default, and 
				     ONE is displayed if there is a parameter to do so  -->
                     <div class="lrgTop">
						<h1><? echo $tongue['stitchstore_pric_body12']; ?></h1>

						<div id="alt_us" >					
							<h2 class="access"><? echo $tongue['stitchstore_pric_body1']; ?></h2>
							<p class="commission"><? echo $tongue['stitchstore_pric_body2']; ?></span><? echo $tongue['stitchstore_pric_body3']; ?> <span><? echo $tongue['stitchstore_pric_body4']; ?></span></p>

							<ul class="commissionList">
								<li><span><? echo $tongue['stitchstore_pric_body5']; ?></span> <? echo $tongue['stitchstore_pric_body6']; ?></li>
								<li><span><? echo $tongue['stitchstore_pric_body7']; ?></span> <? echo $tongue['stitchstore_pric_body8']; ?></li>
								<li><span><? echo $tongue['stitchstore_pric_body9']; ?></span> <? echo $tongue['stitchstore_pric_body10']; ?></li>

							</ul>
							<p class="view"><a href="/dynamicstore.php"><? echo $tongue['stitchstore_pric_body11']; ?></a></p>
						</div>
                        	</div>

					</div><!-- }}} lrgGreenTop -->
				</div><!-- }}} lrgBtmShade -->
  
  </div>


</div>
    <!-- END main content -->
    <div id="sub">
      <div id="navback">
        <div id="leftnav">
	  <h2><a href=""><? echo $tongue['stitchstore_heading']; ?></a></h2>
                <ul>

            <li><a href="/benefits.html"> <? echo $tongue['stitchstore_menu1']; ?> </a></li>
            <li><a href="/production.html"><? echo $tongue['stitchstore_menu2']; ?></a></li>
            <li><a href="/why.html"><? echo $tongue['stitchstore_menu3']; ?></a></li>
            <li><a href="/pricing.html"class="active"><? echo $tongue['stitchstore_menu4']; ?></a></li>
            <li><a href="/faq.html"><? echo $tongue['stitchstore_menu5']; ?></a></li>
			<li><a href="http://en.wikipedia.org/wiki/Overlock" target="_blank">Wikipedia</a></li>            
          </ul>

	  
          <h2><? echo $tongue['stitchstore_heading1']; ?></h2>
          <ul id="subnav">
   
         <li><a href="/dynamicstore.html"><? echo $tongue['stitchstore_menu6']; ?></a></li>
            <li><a href="http://merrow.ning.com"><? echo $tongue['stitchstore_menu7']; ?></a></li>
            <li><a href="/agentlogin.html"><? echo $tongue['stitchstore_menu8']; ?></a></li>
            <li><a href="/ebay.html"><? echo $tongue['stitchstore_menu9']; ?></a></li>

          </ul>
        </div>
      </div>

    </div>
    <!-- END sub -->
    <div id="footer">
      <p class="trialinfo">* the Merrow Stitch is trademarked and protected by Copyright, for legal information pls. contact elvincoolidge@merrow.com</p>

      <div id="sitemap">
        <ul id="sitemap_top">
            <li><a href="/benefits.html"> <? echo $tongue['stitchstore_menu1']; ?> </a></li>
            <li><a href="/production.html"><? echo $tongue['stitchstore_menu2']; ?></a></li>
            <li><a href="/why.html"><? echo $tongue['stitchstore_menu3']; ?></a></li>
            <li><a href="/pricing.html"class="active"><? echo $tongue['stitchstore_menu4']; ?></a></li>
            <li><a href="/faq.html"><? echo $tongue['stitchstore_menu5']; ?></a></li>
        </ul>
        <ul id="sitemap_mid">
       <li><a href="/dynamicstore.html"><? echo $tongue['stitchstore_menu6']; ?></a></li>
            <li><a href="http://merrow.ning.com"><? echo $tongue['stitchstore_menu7']; ?></a></li>
            <li><a href="/agentlogin.html"><? echo $tongue['stitchstore_menu8']; ?></a></li>
            <li><a href="/ebay.html"><? echo $tongue['stitchstore_menu9']; ?></a></li>
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
