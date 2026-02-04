 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://opengraph.org/schema/"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<title>Merrow Reseller Login Announcement</title><meta property="og:title" content="Merrow Parts and Pricing Login Online"/><meta property="fb:page_id" content="43929265776" /> 
 
 
 
<style type="text/css">a.button{font-family:Arial, Helvetica, sans-serif;color:#FFFFFF;text-decoration:none;font-weight:normal;font-size:14px;line-height:16px;}#zone1 .primary-heading{font-size:50px;line-height:52px;padding:9px 0px 0px 0px;text-transform:uppercase;font-weight:bold;color:#FFFFFF;font-family:'Helvetica Neue', Arial, Helvetica, sans-serif;}#zone1_content .secondary-heading{font-weight:bold;color:#FFFFFF;font-family:Arial, Helvetica, sans-serif;font-size:30px;line-height:32px;padding:27px 0px 27px 0px;}#zone3_content .secondary-heading{font-weight:bold;color:#FFFFFF;font-family:Arial, Helvetica, sans-serif;font-size:18px;line-height:20px;padding:0px 0px 20px 0px;}body{background-color:#84adb1;}#zone1_content,#zone2_content,#zone3_content,#zone4_content{font-family:Arial, Helvetica, sans-serif;color:#FFFFFF;font-size:14px;line-height:16px;}#zone4,#zone5,#zone6,#zone7{padding:0px 0px 0px 7px;font-family:Arial, Helvetica, sans-serif;color:#FFFFFF;font-size:11px;line-height:14px;}#zone4 div.headline,#zone5 div.headline,#zone6 div.headline,#zone7 div.headline{padding:0px 0px 8px 0px;font-family:Arial, Helvetica, sans-serif;color:#FFFFFF;font-size:12px;font-weight:bold;line-height:14px;}#zone4 a,#zone5 a,#zone6 a,#zone7 a{font-family:Arial, Helvetica, sans-serif;color:#59797c;font-size:12px;font-weight:bold;text-decoration:none;line-height:14px;}#zone4 div.headline,#zone5 div.headline,#zone6 div.headline,#zone7 div.headline{font-family:Arial, Helvetica, sans-serif;color:#FFFFFF;font-size:12px;font-weight:bold;line-height:14px;}#zone1_content a.navigation{font-family:Arial, Helvetica, sans-serif;color:#678e92;text-decoration:none;font-weight:bold;text-transform:uppercase;font-size:15px;line-height:18px;}#zone1_content a.navigation_selected{font-family:Arial, Helvetica, sans-serif;color:#FFFFFF;text-decoration:none;font-weight:bold;text-transform:uppercase;font-size:15px;line-height:18px;}#footer{font-family:Arial, Helvetica, sans-serif;font-size:12px;line-height:18px;color:#464646;}#footer a{font-family:Arial, Helvetica, sans-serif;font-size:12px;line-height:18px;text-decoration:none;color:#FFFFFF;font-weight:bold;}body{margin:0;padding:0;}table img{display:block;}</style> 
 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> 
<script src="http://us1.campaign-archive.com/js/mailchimp/fancyzoom.mc.js"></script> 
<script src="http://us1.campaign-archive.com/js/mailchimp/likebutton.js"></script> 
<script type="text/javascript"> 
	var likeButtonCount = 0;
	
	$(document).ready(function () {
		loadFbScript();
		var likeButtons = $('a[rel=fblikebtn]');
		likeButtonCount = likeButtons.length; 
		likeButtons.each(function(i) {
			// the href for each like button has information on the specific element to like
			var href = $(this).attr('href');
			var params = getUrlParams(href);
			if (params['likeu']) {
				var divId = unescape(params['fblike']);
				$(this).attr('href', '#'+divId);
				addLikeButton(unescape(params['likeu']), unescape(params['liket']), divId);
			} else {
				$(this).attr('href', '#fbshare-campaign');
			}
 
			//now attach fancy zoom to it
			$(this).fancyZoom({"width":450, "height":150});
 
			if (i == likeButtonCount - 1) {
				window.likeButtonsReady();
			} 
	    });
			});
 
	window.likeButtonsReady = function() { };//callback in case anything needs to do something when all buttons are ready
 
	function getUrlParams(str) {
	    var vars = [], hash;
	    var hashes = str.slice(str.indexOf('?') + 1).split('&');
	    for(var i = 0; i < hashes.length; i++)
	    {
	        hash = hashes[i].split('=');
	        vars.push(hash[0]);
	        vars[hash[0]] = hash[1];
	    }
	    return vars;
	}
	
	function hideCommentsLoading() {
		$('#fb-comments-loading').hide();
	}
 
	window.fbAsyncInit = function() {
		// insert the loading img
		FB.init( { "appId" : '131898680168436', "status" : true, "cookie" : true, "xfbml" : true });
		FB.Event.subscribe('xfbml.render', function() {
			while ($('#fb-loading').length > 0) {// do this because the fancyzoom does non-fancy things and copies the innerHTML so there are two or more of evertyhing
				$('#fb-loading').remove();
			}
		});
		FB.Event.subscribe('edge.create', function(href, widget) {
			noteLikeEvent(href);
		});
	};
 
    function loadFbScript() { };
 
 
	function showLikeElement(source) {
		$(source).trigger('click');
	}
 
	function isCampaignUrl(href) {
		var hostname = 'campaign-archive.com';
		return href.indexOf(hostname) != -1;
	}
	
	function noteLikeEvent(href) {
		if (isCampaignUrl(href)) {// only track the like stat when it's for this campaign
			$.get("http://us1.campaign-archive.com/facebook/like?u=37c9768198782ef495d6853dc&id=963c865d6b&e=05aa29d1f9");
		}
	}
</script> 
<style type="text/css"> 
	#fblike { min-width: 450px; max-width:450px; margin:-10px -10px 10px -10px; padding:10px; border-top:20px solid #3B5998; font-family:Helvetica,arial,sans-serif; text-align:center; }
	#fbcomment { min-width: 620px; max-width:620px; margin:-10px -10px 10px -10px; padding:10px; border-top:20px solid #3B5998; font-family:Helvetica,arial,sans-serif; text-align:center; }
	#fblike h2 { margin:15px 0; color:#3B5998; }
	.fb_edge_widget_with_comment { margin:10px 0 10px 10%; }
	.widget_button_count_left { background: transparent url(http://gallery.mailchimp.com/71d50e77a8332415a525fd8a3/images/comment_start.png) no-repeat 0px 0px; float: left; height: 15px; left: 2px; position: relative; top: 3px; width: 5px; z-index: 2; }
	.widget_button_count { color: #333; background-color: #FEFEFE; border-color: #C1C1C1; border-style: solid; border-width: 1px; float: left; font-weight: bold; height: 15px; margin-left: 1px; padding: 1px 3px; border-spacing: 0px 0px; border-collapse: collapse; font-size: 11px; text-align: left; font-family: 'lucida grande', tahoma, verdana, arial, sans-serif; }
	#fb-comments-notes { padding:10px; text-align: left;}
</style> 
</head> 
 
<body marginheight="0" marginwidth="0" bottommargin="0" topmargin="0" style="background-color: #84adb1;margin: 0;padding: 0;"><div id="fb-root"></div> 
<script type="text/javascript"> 
var fbscripty = document.createElement('script');
fbscripty.type = 'text/javascript';
fbscripty.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
fbscripty.async = true;
$('#fb-root').append(fbscripty);
</script> 
<!--  like element --> 
<div id="fbshare-campaign" style="display:none;"> <div id="fblike" style="display:block;"><h2 class="fbshare-header">Like 'Merrow Parts and Pricing Login Online' on Facebook</h2> <div id="fb-loading"><img src="http://gallery.mailchimp.com/71d50e77a8332415a525fd8a3/images/ajax_loader.gif" border="0"> Connecting to Facebook</div> <fb:like href="http://us1.campaign-archive.com/?u=37c9768198782ef495d6853dc&id=963c865d6b&eo=05aa29d1f9" layout="standard" show_faces="true" width="450" action="like" colorscheme="light"></fb:like> </div> </div> 
 
<!--  comments element --> 
<div id="fbcomments" style="display:none"> <div id="fbcomment" style="display:block;"> <div id="fb-comments-loading"><img src="http://gallery.mailchimp.com/71d50e77a8332415a525fd8a3/images/ajax_loader.gif" border="0"> Connecting to Facebook</div> <div id="fb-comments-notes"></div> <div id="fb-comments-content"></div> </div> </div> 
<center> 
  <table width="661" border="0" cellspacing="0" cellpadding="0"> 
    <tr> 
      <td width="661" height="45" style="padding:0px 0px 0px 36px"> 
      <table width="182" border="0" cellspacing="0" cellpadding="0"> 
              <tr> 
                <td width="5"><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/tab_left.gif" width="5" height="21" style="display: block;"></td> 
                <td width="172" height="21" align="center" valign="middle" bgcolor="#779b9f"><!--  --></td> 
                <td width="5"><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/tab_right.gif" width="5" height="21" style="display: block;"></td> 
              </tr> 
            </table>      </td> 
    </tr> 
    <tr> 
      <td><table width="661" border="0" cellspacing="0" cellpadding="0"> 
        <tr> 
          <td width="229" align="left" valign="top"><img src="http://decorativeedging.s3.amazonaws.com/productpages/screen6.png" alt="" border="0" style="margin: 0;padding: 0;display: block;"></td> 
          <td width="432" align="left" valign="top" id="zone1"><div class="primary-heading" style="font-size: 50px;line-height: 52px;padding: 9px 0px 0px 0px;text-transform: uppercase;font-weight: bold;color: #FFFFFF;font-family: 'Helvetica Neue', Arial, Helvetica, sans-serif;">Merrow 
 Reseller Pricing Online</div></td> 
        </tr> 
      </table></td> 
    </tr> 
    <tr> 
      <td><table width="661" border="0" cellspacing="0" cellpadding="0"> 
             <tr> 
               <td width="331" valign="top"><table width="331" height="517" border="0" cellpadding="0" cellspacing="0"> 
                 <tr> 
                   <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/big_pod_01.gif" width="59" height="78" alt="" style="display: block;"></td> 
                   <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/big_pod_02.gif" width="211" height="78" alt="" style="display: block;"></td> 
                   <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/big_pod_03.gif" width="61" height="78" alt="" style="display: block;"></td> 
                 </tr> 
                 <tr> 
                   <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/big_pod_04.gif" width="59" height="315" alt="" style="display: block;"></td> 
                   <td><a href="http://www.merrow.com/agent_dashboard.php"><img src="http://decorativeedging.s3.amazonaws.com/productpages/screen5.jpg" alt="" border="0" style="margin: 0;padding: 0;display: block;"></a></td> 
                   <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/big_pod_06.gif" width="61" height="315" alt="" style="display: block;"></td> 
                 </tr> 
                 <tr> 
                   <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/big_pod_07.gif" width="59" height="124" alt="" style="display: block;"></td> 
                   <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/big_pod_08.gif" width="211" height="124" alt="" style="display: block;"></td> 
                   <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/big_pod_09.gif" width="61" height="124" alt="" style="display: block;"></td> 
                 </tr> 
               </table></td> 
          <td width="330" align="left" valign="top" id="zone1_content" style="font-family: Arial, Helvetica, sans-serif;color: #FFFFFF;font-size: 14px;line-height: 16px;"> 
          <!--<span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; line-height:16px"><a href="#" class="navigation_selected" mc:edit="featured navigation">Features</a>&nbsp;&nbsp;&nbsp;<a href="#" class="navigation" mc:edit="link_1">Company</a>&nbsp;&nbsp;&nbsp;<a href="#" class="navigation" mc:edit="link_2">Blog</a>&nbsp;&nbsp;&nbsp;<a href="#" class="navigation" mc:edit="link_3">Contact</a></span>--> 
          
          <div class="secondary-heading" style="font-weight: bold;color: #FFFFFF;font-family: Arial, Helvetica, sans-serif;font-size: 30px;line-height: 32px;padding: 27px 0px 27px 0px;">Features (beta)</div> 
          <span>Your USERNAME is charlie@merrow.com <br> <br> Your PASSWORD is: 'merrow'<br> <br><a href="http://www.merrow.com/agent_dashboard.php">Click HERE to try</a> <br><br> 
 
Today we are publishing the Merrow Reseller login. The reason is simple: make quoting Genuine Merrow products easy. We will be adding features along the way. Let us know what you think!It will provide you with pricing for Merrow products and a private page with a picture and some detail on all of our parts. It is formatted for IE, Firefox and Chrome and is available on your iphone.  </span><br> 
<br> 
<br> 
          
          <!--<table width="175" height="40" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/cta_button_01.gif" width="6" height="38" alt=""></td>
              <td height="38" align="center" valign="middle" bgcolor="#557C80"><a href="#" class="button" mc:edit="button link"><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/cta_button_03.gif" alt="" width="40" height="38" border="0"></a></td>
              <td><a href="#" mc:edit="button link"><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/cta_button_03.gif" alt="" width="40" height="38" border="0"></a></td>
            </tr>
            <tr>
              <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/cta_button_04.gif" width="6" height="2" alt=""></td>
              <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/cta_button_05.gif" width="129" height="2" alt=""></td>
              <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/cta_button_06.gif" width="40" height="2" alt=""></td>
            </tr>
          </table>--> 
          </td> 
        </tr> 
      </table></td> 
    </tr> 
    <tr> 
      <td id="zone3_content" style="font-family: Arial, Helvetica, sans-serif;color: #FFFFFF;font-size: 14px;line-height: 16px;"> 
      <div class="secondary-heading" style="font-weight: bold;color: #FFFFFF;font-family: Arial, Helvetica, sans-serif;font-size: 18px;line-height: 20px;padding: 0px 0px 20px 0px;">Selected Screens</div> 
      
      <table width="661" border="0" cellspacing="0" cellpadding="0"> 
          <tr> 
            <td><table width="147" height="298" border="0" cellpadding="0" cellspacing="0"> 
              <tr> 
                <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/mini_pod_01.gif" width="15" height="44" alt="" style="display: block;"></td> 
                <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/mini_pod_02.gif" width="119" height="44" alt="" style="display: block;"></td> 
                <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/mini_pod_03.gif" width="13" height="44" alt="" style="display: block;"></td> 
              </tr> 
              <tr> 
                <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/mini_pod_04.gif" width="15" height="179" alt="" style="display: block;"></td> 
                <td><a href="http://www.merrow.com/agent_dashboard.php"><img src="http://decorativeedging.s3.amazonaws.com/productpages/screen1.jpg" alt="" border="0" style="margin: 0;padding: 0;display: block;"></a></td> 
                <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/mini_pod_06.gif" width="13" height="179" alt="" style="display: block;"></td> 
              </tr> 
              <tr> 
                <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/mini_pod_07.gif" width="15" height="75" alt="" style="display: block;"></td> 
                <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/mini_pod_08.gif" width="119" height="75" alt="" style="display: block;"></td> 
                <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/mini_pod_09.gif" width="13" height="75" alt="" style="display: block;"></td> 
              </tr> 
            </table></td> 
            <td width="23"><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/shim_gif.1.gif" alt="" width="23" height="23" style="display: block;"></td> 
            <td><table width="147" height="298" border="0" cellpadding="0" cellspacing="0"> 
              <tr> 
                <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/mini_pod_01.gif" width="15" height="44" alt="" style="display: block;"></td> 
                <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/mini_pod_02.gif" width="119" height="44" alt="" style="display: block;"></td> 
                <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/mini_pod_03.gif" width="13" height="44" alt="" style="display: block;"></td> 
              </tr> 
              <tr> 
                <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/mini_pod_04.gif" width="15" height="179" alt="" style="display: block;"></td> 
                <td><a href="http://www.merrow.com/agent_dashboard.php"><img src="http://decorativeedging.s3.amazonaws.com/productpages/screen2.jpg" alt="" border="0" style="margin: 0;padding: 0;display: block;"></a></td> 
                <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/mini_pod_06.gif" width="13" height="179" alt="" style="display: block;"></td> 
              </tr> 
              <tr> 
                <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/mini_pod_07.gif" width="15" height="75" alt="" style="display: block;"></td> 
                <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/mini_pod_08.gif" width="119" height="75" alt="" style="display: block;"></td> 
                <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/mini_pod_09.gif" width="13" height="75" alt="" style="display: block;"></td> 
              </tr> 
            </table></td> 
            <td width="23"><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/shim_gif.1.gif" alt="" width="23" height="23" style="display: block;"></td> 
            <td><table width="147" height="298" border="0" cellpadding="0" cellspacing="0"> 
              <tr> 
                <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/mini_pod_01.gif" width="15" height="44" alt="" style="display: block;"></td> 
                <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/mini_pod_02.gif" width="119" height="44" alt="" style="display: block;"></td> 
                <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/mini_pod_03.gif" width="13" height="44" alt="" style="display: block;"></td> 
              </tr> 
              <tr> 
                <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/mini_pod_04.gif" width="15" height="179" alt="" style="display: block;"></td> 
                <td><a href="http://www.merrow.com/agent_dashboard.php"><img src="http://decorativeedging.s3.amazonaws.com/productpages/screen3.jpg" alt="" border="0" style="margin: 0;padding: 0;display: block;"></a></td> 
                <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/mini_pod_06.gif" width="13" height="179" alt="" style="display: block;"></td> 
              </tr> 
              <tr> 
                <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/mini_pod_07.gif" width="15" height="75" alt="" style="display: block;"></td> 
                <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/mini_pod_08.gif" width="119" height="75" alt="" style="display: block;"></td> 
                <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/mini_pod_09.gif" width="13" height="75" alt="" style="display: block;"></td> 
              </tr> 
            </table></td> 
            <td width="23"><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/shim_gif.1.gif" alt="" width="23" height="23" style="display: block;"></td> 
            <td><table width="147" height="298" border="0" cellpadding="0" cellspacing="0"> 
              <tr> 
                <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/mini_pod_01.gif" width="15" height="44" alt="" style="display: block;"></td> 
                <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/mini_pod_02.gif" width="119" height="44" alt="" style="display: block;"></td> 
                <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/mini_pod_03.gif" width="13" height="44" alt="" style="display: block;"></td> 
              </tr> 
              <tr> 
                <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/mini_pod_04.gif" width="15" height="179" alt="" style="display: block;"></td> 
                <td><img src="http://decorativeedging.s3.amazonaws.com/productpages/screen4.jpg" alt="" border="0" style="margin: 0;padding: 0;display: block;"></td> 
                <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/mini_pod_06.gif" width="13" height="179" alt="" style="display: block;"></td> 
              </tr> 
              <tr> 
                <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/mini_pod_07.gif" width="15" height="75" alt="" style="display: block;"></td> 
                <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/mini_pod_08.gif" width="119" height="75" alt="" style="display: block;"></td> 
                <td><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/mini_pod_09.gif" width="13" height="75" alt="" style="display: block;"></td> 
              </tr> 
            </table></td> 
          </tr> 
          <tr> 
            <td height="135" align="left" valign="top" id="zone4" style="padding: 0px 0px 0px 7px;font-family: Arial, Helvetica, sans-serif;color: #FFFFFF;font-size: 11px;line-height: 14px;"> 
            <div class="headline" style="padding: 0px 0px 8px 0px;font-family: Arial, Helvetica, sans-serif;color: #FFFFFF;font-size: 12px;font-weight: bold;line-height: 14px;">Reseller Link</div> 
            <span>A new link off of the front page makes it easy to get to the agent dashboard</span><br> 
            <br><a href="#" style="font-family: Arial, Helvetica, sans-serif;color: #59797c;font-size: 12px;font-weight: bold;text-decoration: none;line-height: 14px;">Learn More &raquo;</a> 
            </td> 
            <td>&nbsp;</td> 
            <td align="left" valign="top" id="zone5" style="padding: 0px 0px 0px 7px;font-family: Arial, Helvetica, sans-serif;color: #FFFFFF;font-size: 11px;line-height: 14px;"> 
            <div class="headline" style="padding: 0px 0px 8px 0px;font-family: Arial, Helvetica, sans-serif;color: #FFFFFF;font-size: 12px;font-weight: bold;line-height: 14px;">Dashboard</div> 
            <span>The dashboard has a center located link for Pricing</span><br> 
            <br><a href="#" style="font-family: Arial, Helvetica, sans-serif;color: #59797c;font-size: 12px;font-weight: bold;text-decoration: none;line-height: 14px;">Learn More &raquo;</a> 
            </td> 
            <td>&nbsp;</td> 
            <td align="left" valign="top" id="zone6" style="padding: 0px 0px 0px 7px;font-family: Arial, Helvetica, sans-serif;color: #FFFFFF;font-size: 11px;line-height: 14px;"> 
            <div class="headline" style="padding: 0px 0px 8px 0px;font-family: Arial, Helvetica, sans-serif;color: #FFFFFF;font-size: 12px;font-weight: bold;line-height: 14px;">Parts Listing</div> 
            <span>Parts are searchable by three different codes with pricing and description shown on the main screen</span><br> 
            <br><a href="#" style="font-family: Arial, Helvetica, sans-serif;color: #59797c;font-size: 12px;font-weight: bold;text-decoration: none;line-height: 14px;">Learn More &raquo;</a> 
            </td> 
            <td>&nbsp;</td> 
            <td align="left" valign="top" id="zone7" style="padding: 0px 0px 0px 7px;font-family: Arial, Helvetica, sans-serif;color: #FFFFFF;font-size: 11px;line-height: 14px;"> 
            <div class="headline" style="padding: 0px 0px 8px 0px;font-family: Arial, Helvetica, sans-serif;color: #FFFFFF;font-size: 12px;font-weight: bold;line-height: 14px;">Part Page</div> 
            <span>Every part has a detail page with a full size image </span><br> 
            <br><a href="#" style="font-family: Arial, Helvetica, sans-serif;color: #59797c;font-size: 12px;font-weight: bold;text-decoration: none;line-height: 14px;">Learn More &raquo;</a> 
            </td> 
          </tr> 
        </table> 
      </td> 
    </tr> 
    <tr> 
      <td bgcolor="#FFFFFF"><img src="http://gallery.mailchimp.com/74e7db47090c0ea4494e86751/images/shim_gif.1.gif" alt="" width="1" height="1" style="display: block;"></td> 
    </tr> 
    <tr> 
      <td height="120"> 
      <table width="651" border="0" align="center" cellpadding="0" cellspacing="0" id="footer" style="font-family: Arial, Helvetica, sans-serif;font-size: 12px;line-height: 18px;color: #464646;"> 
<tr> 
                    <td align="left">&copy; 2010 Merrow All Rights Reserved.</td> 
                    <td align="right"><a href="http://merrow.us1.list-manage.com/unsubscribe?u=37c9768198782ef495d6853dc&id=aae6b66b9e&e=[UNIQID]&c=963c865d6b" style="font-family: Arial, Helvetica, sans-serif;font-size: 12px;line-height: 18px;text-decoration: none;color: #FFFFFF;font-weight: bold;">Unsubscribe</a></td> 
                  </tr> 
<tr> 
	<!--  --> 
  </td> 
  </tr> 
        </table> 
      </td> 
    </tr> 
  </table> 
</center> 
</body> 
</html> 
<script type="text/javascript"> 
        var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
        document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
        </script> 
        <script type="text/javascript"> 
        try {
            var pageTracker = _gat._getTracker("UA-329148-12");
            pageTracker._trackPageview();
        } catch(err) {}</script> 
              