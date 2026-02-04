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
    <script type="text/javascript">
<!--
function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}
//-->
    </script>
</head>

<body>

<? include ('widget_main_menu.php') ?> 

<a name="top"></a>
<div id="wrap">
  <div id="content">
    <div id="header">
      
    <div id="main"><img src="http://images.imerrow.com/images/banners/sendfabric550X156.jpg" width="550" height="156" alt="Send Us your fabric" />
      <div class="divide"></div>
         <div class="content contain">
		<div class="mainCol contain">
		
		
		<div class="lrgMid">
				<div class="lrgBtm">
					<div class="lrgTop">
						<h1><? echo $tongue['stitchstore_prod_body1']; ?></h1>
						
						<div class="imgTxt coins">
							<h2><? echo $tongue['stitchstore_prod_body2']; ?></h2>
							<p><? echo $tongue['stitchstore_prod_body3']; ?></p>	

							<h2><? echo $tongue['stitchstore_prod_body4']; ?></h2>

							<p><? echo $tongue['stitchstore_prod_body5']; ?></p>	
						</div><!-- }}} imgTxt -->
						
						<div class="imgTxt">
							<div class="greyMain">
								<div class="greyTop">
									<div class="greyBtm" 
                                      
										<h2><? echo $tongue['stitchstore_prod_body6']; ?> </h2>

										<p class="formItems"><label for="program" class="access"><? echo $tongue['stitchstore_prod_body7']; ?> </label>
										
                                   
                      
                                 
                                        <form action="/contact_general.php?mature=mature" method="post"> 
                                       
                                      
                                       <select size="1" name="country">
											<option value="the crab Nebula">Select Country</option>
											<option value="the United States">US</option>
											<option value="Australia">AU</option>
											<option value="Belgium">BE</option>

											<option value="India">IN</option>
											<option value="Canada">CA</option>
											<option value="Singapore">SG</option>
											<option value="Hong Kong">HK</option>
											<option value="France">FR</option>
											<option value="Italy">IT</option>

											<option value="Spain">ES</option>
											<option value="the United Kingdom">UK</option>
											<option value="Germany">DE</option>
											
										</select>
                                            <input type="submit" name="gumpy" value="Find Production">
										
									</form> 
							  </div><!-- }}} greyBtm -->
						  </div><!-- }}} greyTop -->
					  </div><!-- }}} greyMain -->
				  </div><!-- }}} imgTxt -->
			  </div><!-- }}} lrgTop -->
			</div><!-- }}} lrgBtm -->
		   </div><!-- }}} lrgMid -->
        </div>
      </div>
            
  

</div>
    <!-- END main content -->
    <div id="sub">
      <div id="navback">
        <div id="leftnav">
	  <h2><a href=""><? echo $tongue['stitchstore_heading']; ?></a></h2>
                 <ul>

            <li><a href="/benefits.html"> <? echo $tongue['stitchstore_menu1']; ?> </a></li>
            <li><a href="/production.html"class="active"><? echo $tongue['stitchstore_menu2']; ?></a></li>
            <li><a href="/why.html"><? echo $tongue['stitchstore_menu3']; ?></a></li>
            <li><a href="/pricing.html"><? echo $tongue['stitchstore_menu4']; ?></a></li>
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
            <li><a href="/production.html"class="active"><? echo $tongue['stitchstore_menu2']; ?></a></li>
            <li><a href="/why.html"><? echo $tongue['stitchstore_menu3']; ?></a></li>
            <li><a href="/pricing.html"><? echo $tongue['stitchstore_menu4']; ?></a></li>
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