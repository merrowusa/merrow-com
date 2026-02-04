<?php
/*
**	@desc:	PHP ajax login form using jQuery
**	@author:	programmer@chazzuka.com
**	@url:		http://www.chazzuka.com/blog
**	@date:	15 August 2008
**	@license:	Free!, but i'll be glad if i my name listed in the credits'
*/

// @ error reporting setting  (  modify as needed )


//@ explicity start session  ( remove if needless )
session_start();

//@ if logoff
if(!empty($_GET['logoff'])) { $_SESSION = array(); }

//@ is authorized?
if(empty($_SESSION['exp_user']) || @$_SESSION['exp_user']['expires'] < time()) {
	header("location:widget_merrow_agent_login.php");	//@ redirect 
} else {
	$_SESSION['exp_user']['expires'] = time()+(3600*60);	//@ renew 45 minutes
}	
?>  
  
  

   
 <?php
if ($_GET['lang']!=null) {
$scrub = $_GET['lang'];  }

$nifty = $_COOKIE["lang"];


if ( $scrub!=null) { 
$lang = $_GET['lang']; }
elseif ($scrub = null) {
$lang = '$nifty'; }
  

if ( $scrub!=null) { 
setcookie("lang", "$scrub", time()+3600);


} else { } ?>


<?php include ("ip_lang_database.php") ?>
   <? 
// Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT * FROM customer_forms WHERE customer_service_agent='not-assigned'")
or die(mysql_error());
?>


<?
// then define the result array
 $ruju = mysql_fetch_array($result); 
 $num_rows = mysql_num_rows($result);

 
?>

<?php

$timeout = $_GET['timeout'];

// then we connect to the database as renter and access table: inventory 
#
mysql_connect("localhost", "merrowco_renter", "7679") or die(mysql_error());

#
mysql_select_db("merrowco_inventory") or die(mysql_error());

?>


<? 

$name = $_SESSION['exp_user']['useremail'];


//verify login credentials
$result12 = mysql_query("SELECT * FROM login_auth_agent WHERE useremail='$name'")
or die(mysql_error());

$verify = mysql_fetch_array($result12);

if ($verify['merrow']!=null) {  ?>
<? 


$grantorino = $_COOKIE['merid'];

// then we connect to the database as renter and access table: inventory 
#
mysql_connect("localhost", "merrowco_renter", "7679") or die(mysql_error());

#
mysql_select_db("merrowco_inventory") or die(mysql_error());


   // Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT * FROM agent_word WHERE agent_id='$grantorino'")
or die(mysql_error());




// then define juju as the result array
 $parsnip = mysql_fetch_array($result); 
 

?>
 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Merrow customer map for <? echo $parsnip['country']; ?></title>
    <style>

	
	</style>
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/thickbox.css" type="text/css" media="screen" />
       <link rel="stylesheet" href="http://css.imerrow.com/css_major/chimpmaps.css" type="text/css" media="screen" />
	
    <script type="text/javascript" src="http://merrow.com/cephei/scripts/jquery.js"></script>
<script type="text/javascript" src="http://merrow.com/cephei/scripts/thickbox.js"></script>
    <script src="http://maps.google.com/maps?file=api&v=2.122&amp;key=ABQIAAAADizr7-TCJzgpJyUo_GBo-RS__Kf-IlIVJkgAx4Cxw4mlXnWodBQy-vGGOuTVBFC-o6N8AIw9NfBVvw"
            type="text/javascript"></script>
            <script language="javascript" type="text/javascript">
<!--//
tb_init('a.thickbox');
//-->
</script>
<?

require_once 'MCAPI.class.php';
require_once 'config.inc'; //contains username & password
$GLOBALS["mc_api_key"] = '';
$acct = new MCAPI($mailChimpUser, $mailChimpPass);
$api = new MCAPI($username, $password);



if ($api->errorCode){
	// an error occurred while logging in
	echo "code:".$api->errorCode."\n";
	echo "msg :".$api->errorMessage."\n";
	die();
}

$retval = $api->campaignStats($campaignId);

if ($api->errorCode){
	echo "Unable to Load Campaign Stats!";
	echo "\n\tCode=".$api->errorCode;
	echo "\n\tMsg=".$api->errorMessage."\n";
} 



?>

<div class="boxed"><div id="header"><h2 id="page-heading">Merrow Customer Management</h2>  <h3 id="overview-heading">Campaign: <span class="campaign-title"><? echo $parsnip['country']; ?> 
<a href="http://merrow.com/textile_plants.php">(Return to List)</a> 


</span> <a href=""></a> </h3> </div>





<!-- <div class="print-report"><a href="#" onclick="window.print(); return false;" class="print">print report</a></div>  -->
 
 <div id="overview-block"> <div id="detail-stats"> <div id="complaints"> <span id="complaint-count"><? echo "".$retval['emails_sent']; ?></span> Emails Sent <a href=""></a> </div> <ul class="stats-list"> <li> <span class="value"><? echo "".$retval['emails_sent']; ?></span> <span class="name">Total Recipients</span> </li> <li> <span class="value">

<? $total = $retval['emails_sent'] - $retval['syntax_errors'] - $retval['hard_bounces'] - $retval['soft_bounces']; 
echo $total;?>

</span> <span class="name">Successful Deliveries</span> </li> <li> <span class="value"><? echo "".$retval['forwards']; ?></span> <span class="name">Times Forwarded</span> </li> <li> <span class="value"><? echo "".$retval['forwards_opens']; ?></span> <span class="name">Forwarded Opens</span> </li>   <li> <span class="value"> <span class="percent">

<? $percopen = $retval['unique_opens'] / $total; $percent = ($percopen *100)." %"; echo $percent; ?></span>

                        <? echo "".$retval['unique_opens']; ?>                    </span>  <span class="name"><a href="http://merrow.com/chimp_aim.php?choice=1&cid=febf14b72d&height=500&width=300" class="thickbox" title="Opened Email">Recipients Who Opened</a></span> </li> <li> <span class="value"><? echo "".$retval['opens']; ?></span>  <span class="name">Total Times Opened</span> </li> <li> <span class="value"><? echo "".$retval['last_open']; ?></span>  <span class="name">Last Open Date</span> </li> <li> <span class="value"> <span class="percent"></span>

                       <? echo "".$retval['unique_clicks']; ?>                   </span>  <span class="name">Recipients Who Clicked</span> </li> <li> <span class="value"><? echo "".$retval['clicks']; ?></span>  <span class="name">Total Clicks</span> </li> <li> <span class="value"><? echo "".$retval['last_click']; ?></span>  <span class="name">Last Click Date</span> </li><li> <span class="value"> <? $didntopen = $total - $retval['unique_opens']; 
echo $didntopen;?></span>  <span class="name"><a href="http://merrow.com/chimp_aim.php?choice=2&cid=febf14b72d&height=500&width=300" class="thickbox" title="Un-Opened Email">Total Unopened</a></span> </li> <li class="last"> <span class="value"><? echo "".$retval['unsubscribes']; ?></span> <span class="name">Total Unsubs</span> </li> </ul>

Map Key: <img name="green" src="http://labs.google.com/ridefinder/images/mm_20_green.png" width="6" height="10" alt="" /> <img name="green" src="http://labs.google.com/ridefinder/images/mm_20_blue.png" width="6" height="10" alt="" /> <img name="green" src="http://labs.google.com/ridefinder/images/mm_20_yellow.png" width="6" height="10" alt="" /> <img name="green" src="http://labs.google.com/ridefinder/images/mm_20_red.png" width="6" height="10" alt="" />

<div class="key"> <div class="green"><a href="test_maps_1.php?timeout=30" target="_self"><img name="green" src="http://labs.google.com/ridefinder/images/mm_20_green.png" width="12" height="20" alt="" /></a> called within 30 days</div> <div class="blue"> <a href="test_maps_1.php?timeout=60" target="_self"><img name="green" src="http://labs.google.com/ridefinder/images/mm_20_blue.png" width="12" height="20" alt="" /></a> all called within 60 days </div> 
<div class="yellow"><a href="test_maps_1.php?timeout=90" target="_self"><img name="green" src="http://labs.google.com/ridefinder/images/mm_20_yellow.png" width="12" height="20" alt="" /></a> all called within 90 days </div> 
<div class="red"><a href="test_maps_1.php?timeout=3000" target="_self"><img name="green" src="http://labs.google.com/ridefinder/images/mm_20_red.png" width="12" height="20" alt="" /></a> view all</div>
</div></div> </div>
<?php

// Connect to the MailChimp server with the user's credentials.
  
?> 




    <script type="text/javascript">
    //<![CDATA[

    var iconBlue = new GIcon(); 
    iconBlue.image = 'http://labs.google.com/ridefinder/images/mm_20_blue.png';
    iconBlue.shadow = 'http://labs.google.com/ridefinder/images/mm_20_shadow.png';
    iconBlue.iconSize = new GSize(12, 20);
    iconBlue.shadowSize = new GSize(22, 20);
    iconBlue.iconAnchor = new GPoint(6, 20);
    iconBlue.infoWindowAnchor = new GPoint(5, 1);

    var iconRed = new GIcon(); 
    iconRed.image = 'http://labs.google.com/ridefinder/images/mm_20_red.png';
    iconRed.shadow = 'http://labs.google.com/ridefinder/images/mm_20_shadow.png';
    iconRed.iconSize = new GSize(12, 20);
    iconRed.shadowSize = new GSize(22, 20);
    iconRed.iconAnchor = new GPoint(6, 20);
    iconRed.infoWindowAnchor = new GPoint(5, 1);
	
	    var iconYellow = new GIcon(); 
    iconYellow.image = 'http://labs.google.com/ridefinder/images/mm_20_yellow.png';
    iconYellow.shadow = 'http://labs.google.com/ridefinder/images/mm_20_shadow.png';
    iconYellow.iconSize = new GSize(12, 20);
    iconYellow.shadowSize = new GSize(22, 20);
    iconYellow.iconAnchor = new GPoint(6, 20);
    iconYellow.infoWindowAnchor = new GPoint(5, 1);
	
	  var iconGreen = new GIcon(); 
    iconGreen.image = 'http://labs.google.com/ridefinder/images/mm_20_green.png';
    iconGreen.shadow = 'http://labs.google.com/ridefinder/images/mm_20_shadow.png';
    iconGreen.iconSize = new GSize(12, 20);
    iconGreen.shadowSize = new GSize(22, 20);
    iconGreen.iconAnchor = new GPoint(6, 20);
    iconGreen.infoWindowAnchor = new GPoint(5, 1);
	
	  var iconOrange = new GIcon(); 
    iconOrange.image = 'http://labs.google.com/ridefinder/images/mm_20_orange.png';
    iconOrange.shadow = 'http://labs.google.com/ridefinder/images/mm_20_shadow.png';
    iconOrange.iconSize = new GSize(12, 20);
    iconOrange.shadowSize = new GSize(22, 20);
    iconOrange.iconAnchor = new GPoint(6, 20);
    iconOrange.infoWindowAnchor = new GPoint(5, 1);
	
	  var iconPurple = new GIcon(); 
    iconPurple.image = 'http://labs.google.com/ridefinder/images/mm_20_purple.png';
    iconPurple.shadow = 'http://labs.google.com/ridefinder/images/mm_20_shadow.png';
    iconPurple.iconSize = new GSize(12, 20);
    iconPurple.shadowSize = new GSize(22, 20);
    iconPurple.iconAnchor = new GPoint(6, 20);
    iconPurple.infoWindowAnchor = new GPoint(5, 1);

    var customIcons = [];
    customIcons["wham"] = iconGreen;
    customIcons["bam"] = iconBlue;
	 customIcons["thankyou"] = iconYellow;
	  customIcons["mam"] = iconRed;
	   customIcons["cookie"] = iconOrange;
	    customIcons["monster"] = iconOrange;

    function load() {
      if (GBrowserIsCompatible()) {
        var map = new GMap2(document.getElementById("map"));
        map.addControl(new GSmallMapControl());
        map.addControl(new GMapTypeControl());
        map.setCenter(new GLatLng(<? echo $parsnip['geo_center_lat']; ?>,<? echo $parsnip['geo_center_lng']; ?>), 5);

        GDownloadUrl("genXML5512128.php?planet=<? echo $parsnip['table']; ?>&merrow=merrow&timeout=<? echo $timeout; ?>&449812=39443", function(data) {
          var xml = GXml.parse(data);
          var markers = xml.documentElement.getElementsByTagName("marker");
          for (var i = 0; i < markers.length; i++) {
            var name = markers[i].getAttribute("name");
            var address = markers[i].getAttribute("address");
            var type = markers[i].getAttribute("type");
			 var email = markers[i].getAttribute("email");
			 var machines = markers[i].getAttribute("machines");
			 var rails = markers[i].getAttribute("rails");
			 var notes = markers[i].getAttribute("notes");
			  var phone = markers[i].getAttribute("phone");
			  var datecontact = markers[i].getAttribute("datecontacted");
			  var emailed = markers[i].getAttribute("emailed");
			  
			   var id = markers[i].getAttribute("id");
            var point = new GLatLng(parseFloat(markers[i].getAttribute("lat")),
                                    parseFloat(markers[i].getAttribute("lng")));
            var marker = createMarker(point, name, address, email, phone, machines, datecontact, rails, notes, id, type, emailed);
            map.addOverlay(marker);
          }
        });
      }
    }
	
	

    function createMarker(point, name, address, email, phone, machines, datecontact, rails, notes, id, type, emailed) {
     
	  var marker = new GMarker(point, customIcons[type]);
	   "div class=\"marker1\">";
      var html = "<b><a href=\"http://merrow.com/textile_plants.php?frommap=2&PME_sys_fl=1&PME_sys_fm=0&PME_sys_operation=PME_op_Change&PME_sys_qf6_id=yes&PME_sys_rec=" + id + "&height=600&width=800\" title=\"" + name + "\" class=\"thickbox\" rel=\"gallery-article3\">" + name + "</a>  </b> <br/> Last Contacted: " + datecontact + "<br> Opened Last Mail Campaign: " + emailed + "<div class=\"mapfont\"><br/>" + address + "<br/> <br/> <a href=\"mailto:" + email + "\">" + email + "</a>" + "<br/> Phone: " + phone + "</div> <br/> <div class=\"info\">Machines: " + machines + "<br/>Rails :" + rails + "<br/>Notes: " + notes + "</div>";
     GEvent.addListener(marker, "click", function(){marker.openInfoWindowHtml(html);tb_init('a.thickbox');});
 "</div>"
      return marker;
	 
    }
	
    //]]>
  </script>
  </head>

  <body onload="load()" onunload="GUnload()">
    <div id="map" style="width: 980px; height: 800px"></div>
  </body>
</html>
<?  } else { echo '<strong> you are not authorized to be here.....<br><br><br>walk slowly towards the door. <br><br> right on. <br><br>keep going.<br><br><br><br><br><br> back a couple more steps. <br><br><br>take your time now... or <a href="http://merrow.com/market_analysis.php?logoff=1">logoff</a></strong> and try again'; } ?>