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
	<title>Merrow® Sewing Machine Company - Manufacturer of Overlock Sewing Machines since 1838</title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    
      <!--   <link rel="stylesheet" href="http://css.imerrow.com/css_major/thickbox.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/base_vimeo.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/ac_quicktime.css"  type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/index_vimeo.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/whole_vimeo.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://merrowservices.s3.amazonaws.com/css/services_cleanup.css" type="text/css" charset="utf-8">
 -->
   <script src="http://images.apple.com/global/scripts/lib/prototype.js" type="text/javascript" charset="utf-8"></script> 
   	<script src="http://images.apple.com/global/scripts/lib/scriptaculous.js" type="text/javascript" charset="utf-8"></script> 
   	<script src="http://images.apple.com/global/scripts/browserdetect.js" type="text/javascript" charset="utf-8"></script> 
   	<script src="http://images.apple.com/global/scripts/apple_core.js" type="text/javascript" charset="utf-8"></script> 
   	<script src="http://images.apple.com/global/scripts/search_decorator.js" type="text/javascript" charset="utf-8"></script> 
    
   	
   <script src="http://images.apple.com/global/scripts/lib/event_mixins.js" type="text/javascript" charset="utf-8"></script> 
   <script src="http://images.apple.com/global/scripts/swap_view.js" type="text/javascript" charset="utf-8"></script> 
   <script src="http://images.apple.com/global/scripts/view_master_tracker.js" type="text/javascript" charset="utf-8"></script> 
   <script type="text/javascript"> 
   	if (typeof(tracker) == 'undefined') {
   		tracker = false;
   	}
    
   	Event.onDOMReady(function() {
   		if (!tracker) {
   			tracker = new AC.ViewMaster.Tracker('click');
   		}
   	});
   </script> 
    
    
    
   	<script src="http://images.apple.com/macmini/scripts/configure_tracker.js" type="text/javascript" charset="utf-8"></script> 
   	<script src="http://images.apple.com/macmini/scripts/overview.js" type="text/javascript" charset="utf-8"></script> 
   	<link rel="stylesheet" href="http://images.apple.com/global/styles/base.css" type="text/css" /> 
   	<link rel="stylesheet" href="http://images.apple.com/global/styles/buystrip.css" type="text/css" /> 
   	<link rel="stylesheet" href="http://images.apple.com/macmini/styles/macmini.css" type="text/css" /> 
	
	<meta name="Author" content="Merrow, Inc.">
	<meta name="Category" content="products,sewing machines">
	<meta name="Description" content="The International Merrow Homepage: an American Sewing Machine Company since 1838. Merrow has a wide selection of overlock machines for you from 1 thread to 4 thread sewing machines. ">
	<meta name="Keywords" content="merrow,charlie merrow,merrow machines,sewing machines,sergers,merrow stitch,overlock sewing, overlock, merrow stitching">
	<meta name="viewport" content="width=1024">
	<META name="y_key" content="b0241928e572e190">  
	<meta name="google-site-verification" content="_9qSOieZ5-cE2EMjUTKZyl8EFWckcJct_jFdb9XhTkY" />
	<meta name='robots' content='index,follow' />
    
  	<script type="text/javascript" src="http://merrow.com/cephei/scripts/jquery.js"></script>
	<script type="text/javascript" src="http://merrow.com/cephei/scripts/thickbox.js"></script>

</head>





<!-- ##################  
	 menu
	 ################## -->	

		<? include ("widget_main_menu.php") ?>


<!-- ##################  
//	 div classes for page do not edit
//	 ################## -->	

<div id="productheader"> 
	<h2><a href="/macmini/">Mac mini</a></h2> 
	<ul> 
		<li id="pn-design"><a href="/macmini/design.html">Design</a></li> 
		<li id="pn-features"><a href="/macmini/features.html">Features</a></li> 
		<li id="pn-why"><a href="/macmini/why-mac.html">Why Mac mini?</a></li> 
		<li id="pn-enviro"><a href="/macmini/environment.html">The Environment</a></li> 
		<li id="pn-specs"><a href="/macmini/specs.html">Tech Specs</a></li> 
		<li><a class="buynows" href="http://store.apple.com/us/go/macmini?aid=AIC-NAUS-K2-BUYNOW-MACMINI">Buy Mac mini now.</a></li> 
	</ul> 
</div> 
 
	<div id="main"> 
		<div class="gallery content"> 
			<div id="gallery-hero" class="gallery-view"> 
				<div id="hero-1" class="gallery-content hero1"> 
				<img src="http://images.apple.com/macmini/images/overview_hero1_20100615.png" width="980" height="483" alt="" /> 
					<h1><img src="http://images.apple.com/macmini/images/overview_title_20100615.png" alt="Introducing the new Mac mini. Redesigned in a very big way." width="980" height="104" /></h1> 
				</div> 
			</div> 
			<div class="gallery-triggers"> 
				<h4>View the Mac mini gallery</h4> 
				<ul> 
					<li><a class="hero-trigger hero-section" href="#hero-1"><b></b><div><img src="http://images.apple.com/macmini/images/overview_hero1_thumb_20100615.png" width="61" height="42" alt="" /></div></a></li> 
					<li><a class="hero-trigger hero-section" href="/macmini/includes/overview/hero-2.html#hero-2"><b></b><div><img src="http://images.apple.com/macmini/images/overview_hero2_thumb_20100615.png" width="61" height="42" alt="" /></div></a></li> 
					<li><a class="hero-trigger hero-section" href="/macmini/includes/overview/hero-3.html#hero-3"><b></b><div><img src="http://images.apple.com/macmini/images/overview_hero3_thumb_20100615.png" width="61" height="42" alt="" /></div></a></li> 
					<li><a class="hero-trigger hero-section" href="/macmini/includes/overview/hero-4.html#hero-4"><b></b><div><img src="http://images.apple.com/macmini/images/overview_hero4_thumb_20100615.png" width="61" height="42" alt="" /></div></a></li> 
					<li><a class="hero-trigger hero-section" href="/macmini/includes/overview/hero-5.html#hero-5"><b></b><div><img src="http://images.apple.com/macmini/images/overview_hero5_thumb_20100615.png" width="61" height="42" alt="" /></div></a></li> 
					<li><a class="hero-trigger hero-section" href="/macmini/includes/overview/hero-6.html#hero-6"><b></b><div><img src="http://images.apple.com/macmini/images/overview_hero6_thumb_20100615.png" width="61" height="42" alt="" /></div></a></li> 
					<li><a class="hero-trigger hero-section" href="/macmini/includes/overview/hero-7.html#hero-7"><b></b><div><img src="http://images.apple.com/macmini/images/overview_hero7_thumb_20100615.png" width="61" height="42" alt="" /></div></a></li> 
				</ul> 
			</div> 
		</div><!--/gallery--> 
 
		<ul id="featurettes"> 
			<li class="content grid3col"> 
				<a href="/macmini/design.html" class="column first roundedleft"> 
					<h3>Way more than meets the eye.</h3> 
					<p class="last">A sleek aluminum enclosure hides a powerful, full-size computer. And a removable bottom panel gives you easy access to memory. <em class="more">Learn more</em></p> 
					<img src="http://images.apple.com/macmini/images/overview_routing_speed_20100615.png" width="215" height="153" alt="" /> 
				</a> 
				<a href="/macmini/features.html" class="column"> 
					<h3>2x graphics. 2x fun. </h3> 
					<p class="last">With graphics up to two times faster than ever before, Mac mini brings high performance to everything from 3D games to photos and video. <em class="more">Learn more</em></p> 
					<img src="http://images.apple.com/macmini/images/overview_routing_size_20100615.png" width="205" height="153" alt="" /> 
				</a> 
				<a href="/macmini/environment.html" class="column last roundedright"> 
					<h3>World’s most energy-efficient desktop computer.</h3> 
					<p class="last">Mac mini is even more environmentally friendly. When idle, it uses less than 10 watts — something no other desktop can do. <em class="more">Learn more</em></p> 
					<img src="http://images.apple.com/macmini/images/overview_routing_green_20100615.png" width="224" height="153" alt="" /> 
				</a> 
			</li><!--/grid3col--> 
			<li class="content last"> 
				<a href="/macmini/server/" class="rounded"> 
					<h3>Mac mini with Snow Leopard Server.</h3> 
					<p class="last">This is big for small business: A special version of Mac mini comes with Snow Leopard Server preinstalled. It’s easy to set up and easy to run. <em class="more">Learn more</em></p> 
					<img src="http://images.apple.com/macmini/images/overview_routing_miniserver_20100615.png" width="226" height="153" alt="" /> 
				</a> 
			</li> <!-- /column.last --> 
		</ul><!--/featurettes--> 
	</div><!--/main--> 
 
	<div id="buystrip" class="grid4col"> 
		<div class="column first"> 
			<img src="http://images.apple.com/macmini/images/buystrip_macmini_20100615.png" width="97" height="41" alt="" class="right main" /> 
			<h2><img src="http://images.apple.com/macmini/images/buystrip-macmini-20091020.png" width="117" height="27" alt="Mac mini" /></h2> 
			<p>Starting at $699.</p><a href="/macmini/server/"><img src="http://images.apple.com/macmini/images/buystrip_macminiserver_20100623.png" width="97" height="41" class="right" /> 
			<p>Mac mini with Snow Leopard Server, only $999.</p></a> 
		</div> 
		<div class="column"> 
			<img src="http://images.apple.com/global/elements/buystripmodule/buystrip-icon-retail.gif" width="31" height="33" alt="" class="icon" /> 
			<h3>Apple Retail Store</h3> 
			<p>Get all your questions answered, test-drive a Mac mini, even sign up for Personal Shopping.</p> 
			<p><a href="/retail/" class="more">Find an Apple Retail Store</a></p> 
		</div> 
		<div class="column third"> 
			<img src="http://images.apple.com/global/elements/buystripmodule/buystrip-icon-onlinestore.gif" width="31" height="33" alt="" class="icon" /> 
			<h3>Apple Online Store</h3> 
			<p>Configure your Mac mini exactly the way you want and have it shipped to your door — free.</p> 
			<p><a href="http://store.apple.com/us/go/macmini?aid=AIC-NAUS-K2-CONFIGURE-MACMINI" class="more">Configure your Mac mini</a></p> 
		</div> 
		<div class="column last"> 
			<img src="http://images.apple.com/global/elements/buystripmodule/buystrip-icon-phone.gif" width="31" height="40" alt="" class="icon" /> 
			<h3>1-800-MY-APPLE <span>(1-800-692-7753)</span></h3> 
			<p>Have questions about Mac mini? Just ask. Call to talk with a knowledgeable Apple Specialist.</p> 
		</div> 
		<p id="links">Find a <a href="/buy/" class="more">local authorized reseller</a> Get <a href="http://store.apple.com/1-800-MY-APPLE/WebObjects/AppleStore.woa?routing=eduind&amp;node=home/shop_mac/family/mac_mini&amp;cid=AOS-US-Edu-.com-05042009" class="more">Apple education pricing</a></p> 
	</div><!--/buystrip--> 
 
	<div id="globalfooter"> 
		<div id="breadory"> 
			<ol id="breadcrumbs"> 
				<li class="home"><a href="/">Home</a></li> 
				<li><a href="/mac/">Mac</a></li> 
				<li>Mac mini</li> 
			</ol> 
			<div id="directorynav" class="mac"> 
	<div id="dn-cola" class="column first"> 
		<h3>Considering a Mac</h3> 
		<ul> 
			<li><a href="/why-mac/">Why you&rsquo;ll love a Mac</a></li> 
			<li><a href="/why-mac/compare/">Compare all Macs</a></li> 
			<li><a href="/why-mac/faq/">FAQs</a></li> 
			<li><a href="/why-mac/try-a-mac/">Try a Mac</a></li> 
		</ul> 
		<h3>Find out how</h3> 
		<ul> 
			<li><a href="/findouthow/mac/">Mac Basics</a></li> 
			<li><a href="/findouthow/photos/">Photos</a></li> 
			<li><a href="/findouthow/movies/">Movies</a></li> 
			<li><a href="/findouthow/web/">Web</a></li> 
			<li><a href="/findouthow/music/">Music</a></li> 
			<li><a href="/findouthow/iwork/">iWork</a></li> 
			<li><a href="/findouthow/mobileme/">MobileMe</a></li> 
		</ul> 
	</div> 
	<div id="dn-colb" class="column"> 
		<h3>Macs</h3> 
		<ul> 
			<li><a href="/macpro/">Mac Pro</a></li> 
			<li><a href="/macmini/">Mac mini</a></li> 
			<li><a href="/macbook/">MacBook</a></li> 
			<li><a href="/macbookpro/">MacBook Pro</a></li> 
			<li><a href="/macbookair/">MacBook Air</a></li> 
			<li><a href="/imac/">iMac</a></li> 
		</ul> 
		<h3>Accessories</h3> 
		<ul> 
			<li><a href="/magicmouse/">Magic Mouse</a></li> 
			<li><a href="/magictrackpad/">Magic Trackpad</a></li> 
			<li><a href="/keyboard/">Keyboard</a></li> 
			<li><a href="/displays/">LED Cinema Display</a></li> 
		</ul> 
		</div> 
	<div id="dn-colc" class="column"> 
		<h3>Wi-Fi Base Stations</h3> 
		<ul> 
			<li><a href="/airportexpress/">AirPort Express</a></li> 
			<li><a href="/airportextreme/">AirPort Extreme</a></li> 
			<li><a href="/timecapsule/">Time Capsule</a></li> 
			<li><a href="/wifi/">Which Wi-Fi are you?</a></li> 
		</ul> 
		<h3>Servers</h3> 
		<ul> 
			<li><a href="/server/">Servers Overview</a></li> 
			<li><a href="/xserve/">Xserve</a></li> 
			<li><a href="/xsan/">Xsan</a></li> 
			<li><a href="/server/macosx/">Mac OS X Server</a></li> 
		</ul> 
	</div> 
	<div id="dn-cold" class="column"> 
		<h3>MobileMe</h3> 
		<ul> 
			<li><a href="/mobileme/">Learn more</a></li> 
		</ul> 
		<h3>Mac OS X</h3> 
		<ul> 
			<li><a href="/macosx/">Snow Leopard</a></li> 
			<li><a href="/accessibility/macosx/vision.html">Accessibility</a></li> 
		</ul> 
		
		<h3>Safari</h3> 
		<ul> 
			<li><a href="/safari/">Learn more</a></li> 
		</ul> 
	</div> 
	<div id="dn-cole" class="column"> 
		<h3>Applications</h3> 
		<ul> 
			<li><a href="/ilife/">iLife</a></li> 
			<li><a href="/iwork/">iWork</a></li> 
			<li><a href="/aperture/">Aperture</a></li> 
			<li><a href="/quicktime/">QuickTime</a></li> 
			<li><a href="/finalcutstudio/">Final Cut Studio</a></li> 
			<li><a href="/finalcutserver/">Final Cut Server</a></li> 
			<li><a href="/finalcutexpress/">Final Cut Express</a></li> 
			<li><a href="/logicstudio/">Logic Studio</a></li> 
			<li><a href="/logicexpress/">Logic Express</a></li> 
			<li><a href="/remotedesktop/">Remote Desktop</a></li> 
		</ul> 
	</div> 
	<div id="dn-colf" class="column"> 
		<h3>Developer</h3> 
		<ul> 
			<li><a href="http://developer.apple.com/programs/iphone/">iPhone Program</a></li> 
			<li><a href=" http://developer.apple.com/programs/mac/">Mac Program</a></li> 
			<li><a href="http://developer.apple.com/programs/safari/">Safari Program</a></li>			
		</ul> 
		<h3>Markets</h3> 
		<ul> 
			<li><a href="/pro/">Creative Pro</a></li> 
			<li><a href="/education/">Education</a></li> 
			<li><a href="/science/">Science</a></li> 
			<li><a href="/business/">Business</a></li> 
		</ul> 
	</div> 
	<div id="dn-colg" class="column last"> 
		<h3>Support</h3> 
		<ul> 
			<li><a href="/buy/">Where can I buy a Mac?</a></li> 
			<li><a href="/support/products/">AppleCare</a></li> 
			<li><a href="/support/">Online Support</a></li> 
			<li><a href="http://store.apple.com/us/help/contact">Telephone Sales</a></li> 
			<li><a href="/retail/geniusbar/">Genius Bar</a></li> 
			<li><a href="/retail/workshops/">Workshops</a></li> 
			<li><a href="/retail/onetoone/">One to One</a></li> 
			<li><a href="/retail/procare/">ProCare</a></li> 
			<li><a href="http://training.apple.com/#certification">Certification</a></li> 
		</ul> 
	</div> 
	<div class="capbottom"></div> 
</div> 
 
		</div><!--/breadory--> 
		<p class="gf-buy">Shop the <a href="/store/">Apple Online Store</a> (1-800-MY-APPLE), visit an <a href="/retail/">Apple Retail Store</a>, or find a <a href="/buy/">reseller</a>.</p> 
 
<ul class="gf-links piped"> 
	<li><a href="/about/" class="first">Apple Info</a></li> 
	<li><a href="/sitemap/">Site Map</a></li> 
	<li><a href="/hotnews/">Hot News</a></li> 
	<li><a href="/rss/">RSS Feeds</a></li> 
	<li><a href="/contact/" class="contact_us">Contact Us</a></li> 
	<li><a href="/choose-your-country/" class="choose" title="Choose your country or region."><img src="http://images.apple.com/home/elements/worldwide_us.png" alt="United States" width="22" height="22"></a></li> 
</ul> 
 
<div class="gf-sosumi"> 
	<p>Copyright © 2010 Apple Inc. All rights reserved.</p> 
	<ul class="piped"> 
		<li><a href="/legal/terms/site.html" class="first">Terms of Use</a></li> 
		<li><a href="/privacy/">Privacy Policy</a></li> 
	</ul> 
</div> 
 