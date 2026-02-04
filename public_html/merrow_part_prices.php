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


  




<?php

// then we connect to the database as renter and access table: inventory 
#
mysql_connect("localhost", "merrowco_renter", "7679") or die(mysql_error());

#
mysql_select_db("merrowco_inventory") or die(mysql_error());

?>


<? 

$name = $_SESSION['exp_user']['username'];



//verify login credentials
$result12 = mysql_query("SELECT * FROM login_auth_agent WHERE username='$name'")
or die(mysql_error());

$verify = mysql_fetch_array($result12);

if ($verify['merrow']!=null) { 



 ?>
 <html>
 <head>
 <? include ('widget_analytics.php'); ?>
<style type="text/css" media="all"> @import "http://merrow-media.s3.amazonaws.com/general-http/new_header.css";

td#common {
	border: 1px solid silver;
	font-size: 10px;
	
	
}
td#NEEDLE { background-color: #F2F2F2; border: 1px solid silver;  font-size: 10px; }
td#TABLE { background-color: #F3F2F2; border: 1px solid silver;  font-size: 10px; }
td#TABLEMOTORASSEMBLY { background-color: #F4F1F1; border: 1px solid silver;  font-size: 10px; }
td#LOOPER { background-color: #F4F0F0; border: 1px solid silver;  font-size: 10px; }
td#Accessory { background-color: #F4F0F0; border: 1px solid silver;  font-size: 10px; }
td#NUT { background-color: #F5EFEF; border: 1px solid silver;  font-size: 10px; }
td#SCREW { background-color: #F5EFEF; border: 1px solid silver;  font-size: 10px; }
td#WASHER { background-color: #F7EEEE; border: 1px solid silver;  font-size: 10px; }
td#PIPE { background-color: #F7EDED; border: 1px solid silver;  font-size: 10px; }
td#STUD { background-color: #F8EDED; border: 1px solid silver;  font-size: 10px; }
td#CAM { background-color: #F9ECEC; border: 1px solid silver;  font-size: 10px; }
td#BOLT { background-color: #F9EBEB; border: 1px solid silver;  font-size: 10px; }
td#SPAREPART { background-color: #F9EBEB; border: 1px solid silver;  font-size: 10px; }
td#CAMLEVER { background-color: #FAEBEB; border: 1px solid silver;  font-size: 10px; }
td#TENSIONDISC { background-color: #FAEBEB; border: 1px solid silver;  font-size: 10px; }
td#BLOCK { background-color: #FAEBEB; border: 1px solid silver;  font-size: 10px; }
td#KEY { background-color: #FAEBEB; border: 1px solid silver;  font-size: 10px; }
td#BAR { background-color: #FAEBEB; border: 1px solid silver;  font-size: 10px; }
td#LINK { background-color: #FAEBEB; border: 1px solid silver;  font-size: 10px; }
td#FRAMECAP { background-color: #FAEAEA; border: 1px solid silver;  font-size: 10px; }
td#FRAME { background-color: #FBEAEA; border: 1px solid silver;  font-size: 10px; }
td#NEEDLEPLATE { background-color: #FBEAEA; border: 1px solid silver;  font-size: 10px; }
td#SPRING { background-color: #FBE9E9; border: 1px solid silver;  font-size: 10px; }
td#THIMBLE { background-color: #FBE9E9; border: 1px solid silver;  font-size: 10px; }
td#GUIDE { background-color: #FBE9E9; border: 1px solid silver;  font-size: 10px; }
td#FEEDECCENTRIC { background-color: #FCE8E8; border: 1px solid silver;  font-size: 10px; }
td#CAMROLL { background-color: #FCE8E8; border: 1px solid silver;  font-size: 10px; }
td#BUSHING { background-color: #FDE8E8; border: 1px solid silver;  font-size: 10px; }
td#CARRIER { background-color: #FDE7E7; border: 1px solid silver;  font-size: 10px; }
td#HEMMER { background-color: #FFE5E5; border: 1px solid silver;  font-size: 10px; }
td#PRESSERFOOT { background-color: #FFE5E5; border: 1px solid silver;  font-size: 10px; }
td#WORKPLATE { background-color: #FFE5E5; border: 1px solid silver;  font-size: 10px; }
td#ROD { background-color: #FFE5E5; border: 1px solid silver;  font-size: 10px; }
td#BALL { background-color: #FFE5E5; border: 1px solid silver;  font-size: 10px; }
td#ASSEMBLY { background-color: #FFE5E5; border: 1px solid silver;  font-size: 10px; }
td#HANDWHEEL { background-color: #FFE5E5; border: 1px solid silver;  font-size: 10px; }
td#TENSION { background-color: #FFE5E5; border: 1px solid silver;  font-size: 10px; }
td#SHAFT { background-color: #FFE5E5; border: 1px solid silver;  font-size: 10px; }
td#FEEDDOG { background-color: #FFE5E5; border: 1px solid silver;  font-size: 10px; }
td#GUARD { background-color: #FFE5E5; border: 1px solid silver;  font-size: 10px; }
td#NEEDLELEVER { background-color: #FFE5E5; border: 1px solid silver;  font-size: 10px; }
td#GAUGE { background-color: #FFE5E5; border: 1px solid silver;  font-size: 10px; }
td#PRESSERBAR { background-color: #FFE5E5; border: 1px solid silver;  font-size: 10px; }
td#CASTOFFHORN { background-color: #FFFAFA; border: 1px solid silver;  font-size: 10px; }
td#CLAMP { background-color: #FAEBEA; border: 1px solid silver;  font-size: 10px; }
td#ROCKERSHAFT { background-color: #FEE8E7; border: 1px solid silver;  font-size: 10px; }
td#CAP { background-color: #F5F0F0; border: 1px solid silver;  font-size: 10px; }
td#HOLDER { background-color: #F9EDEB; border: 1px solid silver;  font-size: 10px; }
td#INDUSTRIALSEWINGMACHINE { background-color: #F9EDEB; border: 1px solid silver;  font-size: 10px; }
td#OILFILTER { background-color: #FFE8E5; border: 1px solid silver;  font-size: 10px; }
td#Other { background-color: #F8EEEC; border: 1px solid silver;  font-size: 10px; }
td#LEVER { background-color: #FEE9E6; border: 1px solid silver;  font-size: 10px; }
td#ROLL { background-color: #FFE8E5; border: 1px solid silver;  font-size: 10px; }
td#FEEDCOVER { background-color: #F3F2F1; border: 1px solid silver;  font-size: 10px; }
td#CONNECTION { background-color: #FFE9E5; border: 1px solid silver;  font-size: 10px; }
td#WEDGE { background-color: #FAEDEB; border: 1px solid silver;  font-size: 10px; }
td#PIN { background-color: #FAEDEB; border: 1px solid silver;  font-size: 10px; }
td#FEEDCARRIER { background-color: #FDEBE8; border: 1px solid silver;  font-size: 10px; }
td#STOP { background-color: #FFE9E5; border: 1px solid silver;  font-size: 10px; }
td#NEEDLEGUARD { background-color: #FFE9E5; border: 1px solid silver;  font-size: 10px; }
td#SLIDE { background-color: #F9EEEC; border: 1px solid silver;  font-size: 10px; }
td#KNOB { background-color: #FAEDEB; border: 1px solid silver;  font-size: 10px; }
td#FORK { background-color: #FAEDEB; border: 1px solid silver;  font-size: 10px; }
td#GEAR { background-color: #FDEBE8; border: 1px solid silver;  font-size: 10px; }
td#FEEDRAISINGLEVERPIN { background-color: #FFEAE5; border: 1px solid silver;  font-size: 10px; }
td#LIFTER { background-color: #FCECE8; border: 1px solid silver;  font-size: 10px; }
td#BRACKET { background-color: #FFEBE5; border: 1px solid silver;  font-size: 10px; }
td#PLUNGER { background-color: #FFEBE5; border: 1px solid silver;  font-size: 10px; }
td#SUPPORT { background-color: #F8EFED; border: 1px solid silver;  font-size: 10px; }
td#NEDDLEPLATE { background-color: #F9EEEB; border: 1px solid silver;  font-size: 10px; }
td#CAMLOBEINDICATOR { background-color: #FCEDE8; border: 1px solid silver;  font-size: 10px; }
td#INDICATOR { background-color: #FDEDE8; border: 1px solid silver;  font-size: 10px; }
td#GUIDEINDICATOR { background-color: #FFEBE5; border: 1px solid silver;  font-size: 10px; }
td#EDGEINDICATORSCALE { background-color: #F4F1F0; border: 1px solid silver;  font-size: 10px; }
td#LATCH { background-color: #FBEEE9; border: 1px solid silver;  font-size: 10px; }
td#LOCK { background-color: #FFECE5; border: 1px solid silver;  font-size: 10px; }
td#PLATE { background-color: #FBEEEA; border: 1px solid silver;  font-size: 10px; }
td#TREADLE { background-color: #FFECE5; border: 1px solid silver;  font-size: 10px; }
td#OILCOLLECTOR { background-color: #FFECE5; border: 1px solid silver;  font-size: 10px; }
td#BELT { background-color: #FFECE5; border: 1px solid silver;  font-size: 10px; }
td#WRENCH { background-color: #FFECE5; border: 1px solid silver;  font-size: 10px; }
td#TOOLS { background-color: #FFECE5; border: 1px solid silver;  font-size: 10px; }
td#COUNTERWEIGHT { background-color: #F7F0EE; border: 1px solid silver;  font-size: 10px; }
td#THREADINGWIRES { background-color: #F9EFEC; border: 1px solid silver;  font-size: 10px; }
td#WHEEL { background-color: #FCEEE8; border: 1px solid silver;  font-size: 10px; }
td#HEMFOLD { background-color: #FDEEE7; border: 1px solid silver;  font-size: 10px; }
td#FINGER { background-color: #FFEDE6; border: 1px solid silver;  font-size: 10px; }
td#PRESSERFOOTFINGER { background-color: #FFEDE5; border: 1px solid silver;  font-size: 10px; }
td#TENSIONRODSHELL { background-color: #F6F1EF; border: 1px solid silver;  font-size: 10px; }
td#THREADTAKEUP { background-color: #F9F0EC; border: 1px solid silver;  font-size: 10px; }
td#CUTTER { background-color: #F9F0EB; border: 1px solid silver;  font-size: 10px; }
td#COLLAR { background-color: #FAEFEB; border: 1px solid silver;  font-size: 10px; }
td#WHEELPRESSERFOOT { background-color: #FDEEE8; border: 1px solid silver;  font-size: 10px; }
td#HEAD { background-color: #FDEEE8; border: 1px solid silver;  font-size: 10px; }
td#PRESSERFOOTWHEEL { background-color: #FFEEE5; border: 1px solid silver;  font-size: 10px; }
td#EXTENSION { background-color: #FFEEE5; border: 1px solid silver;  font-size: 10px; }
td#SPACER { background-color: #FAF0EB; border: 1px solid silver;  font-size: 10px; }
td#SHIM { background-color: #FAF0EB; border: 1px solid silver;  font-size: 10px; }
td#CUTTERHOLDER { background-color: #FAF0EA; border: 1px solid silver;  font-size: 10px; }
td#DISCONTINUED { background-color: #FFEEE5; border: 1px solid silver;  font-size: 10px; }
td#THREADTUBE { background-color: #F4F2F1; border: 1px solid silver;  font-size: 10px; }
td#FEEDCARRIERLINK { background-color: #F6F1EE; border: 1px solid silver;  font-size: 10px; }
td#EAR { background-color: #FEEFE7; border: 1px solid silver;  font-size: 10px; }
td#GIB { background-color: #FEEFE6; border: 1px solid silver;  font-size: 10px; }
td#DUSTSHIELD { background-color: #FFEFE5; border: 1px solid silver;  font-size: 10px; }
td#HEADCAP { background-color: #FCF0E8; border: 1px solid silver;  font-size: 10px; }
td#NEEDLECARRIER { background-color: #FCF0E8; border: 1px solid silver;  font-size: 10px; }
td#THREADSTAND { background-color: #FFEFE5; border: 1px solid silver;  font-size: 10px; }
td#THREADSTANDPARTS { background-color: #F8F1EC; border: 1px solid silver;  font-size: 10px; }
td#GRAY { background-color: #FAF1EB; border: 1px solid silver;  font-size: 10px; }
td#CATCH { background-color: #FAF1EA; border: 1px solid silver;  font-size: 10px; }
td#TENSIONROD { background-color: #FFF0E5; border: 1px solid silver;  font-size: 10px; }
td#BLADE { background-color: #FFF0E5; border: 1px solid silver;  font-size: 10px; }
td#THREADEYE { background-color: #F6F2EF; border: 1px solid silver;  font-size: 10px; }
td#COLLECTOR { background-color: #F7F2EE; border: 1px solid silver;  font-size: 10px; }
td#FRAMEBASE { background-color: #FAF1EB; border: 1px solid silver;  font-size: 10px; }
td#GASKET { background-color: #FCF1E9; border: 1px solid silver;  font-size: 10px; }
td#DOVETAILSLIDE { background-color: #FCF1E9; border: 1px solid silver;  font-size: 10px; }
td#PLUG { background-color: #FCF1E9; border: 1px solid silver;  font-size: 10px; }
td#TENSIONPLATE { background-color: #FDF0E7; border: 1px solid silver;  font-size: 10px; }
td#UPPERCUTTERCLAMP { background-color: #FFF0E5; border: 1px solid silver;  font-size: 10px; }
td#THREADGUIDE { background-color: #FFF5EE; border: 1px solid silver;  font-size: 10px; }
td#TUBE { background-color: #F4F2F1; border: 1px solid silver;  font-size: 10px; }
td#REPLACEDPART { background-color: #F6F2EE; border: 1px solid silver;  font-size: 10px; }
td#STUB { background-color: #FBF1E9; border: 1px solid silver;  font-size: 10px; }
td#WEB { background-color: #FCF1E8; border: 1px solid silver;  font-size: 10px; }
td#PRESSERARM { background-color: #FDF1E8; border: 1px solid silver;  font-size: 10px; }
td#AIRMOTOR { background-color: #F3F2F2; border: 1px solid silver;  font-size: 10px; }
td#FABRICGUIDE { background-color: #FDF1E7; border: 1px solid silver;  font-size: 10px; }
td#TAPEGUIDE { background-color: #FEF1E6; border: 1px solid silver;  font-size: 10px; }
td#TAPEFOLDER { background-color: #F3F2F1; border: 1px solid silver;  font-size: 10px; }
td#SPREADER { background-color: #F4F2F0; border: 1px solid silver;  font-size: 10px; }
td#BORDER { background-color: #F7F2EE; border: 1px solid silver;  font-size: 10px; }
td#NEEDLEPLATEFINGER { background-color: #FBF2EA; border: 1px solid silver;  font-size: 10px; }
td#HEEL { background-color: #FDF1E7; border: 1px solid silver;  font-size: 10px; }
td#ARM { background-color: #FFF2E5; border: 1px solid silver;  font-size: 10px; }
td#THREADPLATE { background-color: #F9F2EC; border: 1px solid silver;  font-size: 10px; }
td#CAPEXTENSION { background-color: #F9F2EB; border: 1px solid silver;  font-size: 10px; }
td#SHIRRINGBLADE { background-color: #FDF2E8; border: 1px solid silver;  font-size: 10px; }
td#SHANK { background-color: #FFF2E6; border: 1px solid silver;  font-size: 10px; }
td#SLIDEROD { background-color: #FFF2E5; border: 1px solid silver;  font-size: 10px; }
td#PIVOT { background-color: #FAF2EB; border: 1px solid silver;  font-size: 10px; }
td#NEEDLECARRIERCOLLAR { background-color: #FAF2EB; border: 1px solid silver;  font-size: 10px; }
td#EXTRACTOR { background-color: #FAF2EB; border: 1px solid silver;  font-size: 10px; }
td#BRACE { background-color: #FAF2EA; border: 1px solid silver;  font-size: 10px; }
td#TAKEUP { background-color: #FBF2EA; border: 1px solid silver;  font-size: 10px; }
td#FILTER { background-color: #FBF2E9; border: 1px solid silver;  font-size: 10px; }
td#BASE { background-color: #FFF2E5; border: 1px solid silver;  font-size: 10px; }
td#COVER { background-color: #FFF2E5; border: 1px solid silver;  font-size: 10px; }
td#BACKTACK { background-color: #FFF2E5; border: 1px solid silver;  font-size: 10px; }
td#UPPERCUTTERCARRIEREXTENSION { background-color: #FFF2E5; border: 1px solid silver;  font-size: 10px; }
td#UNCURLINGBLOCK { background-color: #FFF2E5; border: 1px solid silver;  font-size: 10px; }
td#SELVEDGERIPPER { background-color: #FFF2E5; border: 1px solid silver;  font-size: 10px; }
td#NEDDLECARRIER { background-color: #FBF2EA; border: 1px solid silver;  font-size: 10px; }
td#CASE { background-color: #FBF3EA; border: 1px solid silver;  font-size: 10px; }
td#HEADASSEMBLY { background-color: #FDF3E8; border: 1px solid silver;  font-size: 10px; }
td#PRESSERBARCATCH { background-color: #FFF3E5; border: 1px solid silver;  font-size: 10px; }
td#HEATSINK { background-color: #F6F3EE; border: 1px solid silver;  font-size: 10px; }
td#FEEDCAPASSEMBLY { background-color: #FBF3EA; border: 1px solid silver;  font-size: 10px; }
td#RESERVOIRPLATE { background-color: #FBF3E9; border: 1px solid silver;  font-size: 10px; }
td#FILTERSUPPORT { background-color: #FFF3E5; border: 1px solid silver;  font-size: 10px; }
td#OILGAUGE { background-color: #FFF3E5; border: 1px solid silver;  font-size: 10px; }
td#GAGEPLATE { background-color: #F5F3EF; border: 1px solid silver;  font-size: 10px; }
td#INDUSTRIALSEWINGMACHINEMOUNT { background-color: #F5F3EF; border: 1px solid silver;  font-size: 10px; }
td#CHAIN { background-color: #FAF3EA; border: 1px solid silver;  font-size: 10px; }
td#CAPCHAIN { background-color: #FDF3E7; border: 1px solid silver;  font-size: 10px; }
td#BUBBLERCAP { background-color: #FFF3E5; border: 1px solid silver;  font-size: 10px; }
td#GAGE { background-color: #FFF3E5; border: 1px solid silver;  font-size: 10px; }
td#FLANGE { background-color: #FFF4E5; border: 1px solid silver;  font-size: 10px; }
td#HOLE { background-color: #F4F2F1; border: 1px solid silver;  font-size: 10px; }
td#BEARING { background-color: #F4F3F0; border: 1px solid silver;  font-size: 10px; }
td#THREADINGPLATE { background-color: #F8F3ED; border: 1px solid silver;  font-size: 10px; }
td#METER { background-color: #F8F3ED; border: 1px solid silver;  font-size: 10px; }
td#FEEDLINKPIVOTARM { background-color: #F9F3EC; border: 1px solid silver;  font-size: 10px; }
td#ACTUATOR { background-color: #F9F3EB; border: 1px solid silver;  font-size: 10px; }
td#SNAPRING { background-color: #FBF3EA; border: 1px solid silver;  font-size: 10px; }
td#BALLSOCKET { background-color: #FCF3E9; border: 1px solid silver;  font-size: 10px; }
td#BALLJOINTANDSOCKET { background-color: #FCF4E8; border: 1px solid silver;  font-size: 10px; }
td#TRIMMER { background-color: #FCF4E8; border: 1px solid silver;  font-size: 10px; }
td#TRIMMERCHAINCUTTER { background-color: #FEF4E7; border: 1px solid silver;  font-size: 10px; }
td#CHAINCUTTER { background-color: #FFF4E5; border: 1px solid silver;  font-size: 10px; }
td#COMPLETEPART { background-color: #FFF4E5; border: 1px solid silver;  font-size: 10px; }
td#CAMRACE { background-color: #F3F2F1; border: 1px solid silver;  font-size: 10px; }
td#FEEDCOVERSUPPORT { background-color: #FCF4E9; border: 1px solid silver;  font-size: 10px; }
td#CUTTERCARRIER { background-color: #F5F3F0; border: 1px solid silver;  font-size: 10px; }
td#CUTTERCARRIERCAP { background-color: #F7F3ED; border: 1px solid silver;  font-size: 10px; }
td#UPPERCUTTERCARRIERCAP { background-color: #FBF4E9; border: 1px solid silver;  font-size: 10px; }
td#PLUSBLOCK { background-color: #FEF4E6; border: 1px solid silver;  font-size: 10px; }
td#UPPERSHAFTASSEMBLY { background-color: #FEF5E6; border: 1px solid silver;  font-size: 10px; }
td#LOWERSHAFT { background-color: #FFF5E5; border: 1px solid silver;  font-size: 10px; }
td#LOWERCUTTERHOLDERSUPPORT { background-color: #FFF5E5; border: 1px solid silver;  font-size: 10px; }
td#CONDUCTOR { background-color: #FFF5E5; border: 1px solid silver;  font-size: 10px; }
td#SCREWREPLACEMENT { background-color: #FFF5E5; border: 1px solid silver;  font-size: 10px; }
td#MOTOR { background-color: #FFF5E5; border: 1px solid silver;  font-size: 10px; }
td#HOOK { background-color: #F8F4EC; border: 1px solid silver;  font-size: 10px; }
td#OIL { background-color: #FBF4EA; border: 1px solid silver;  font-size: 10px; }
td#THREAD { background-color: #FFF5E5; border: 1px solid silver;  font-size: 10px; }
td#LOOPERCARRIER { background-color: #FFF6E5; border: 1px solid silver;  font-size: 10px; }




td#m_title1 {
	
}
td#m_title2 {
	color: white;
	text-align: center;
	background-color: black;
}


td#m_title3 {
	font-size: 24px;
}
td#m_title4 {
	background-color: #a2d144;
	border-right: 1px solid silver;
	border-left: 1px solid silver;
}
td#quiet {
	border-right: 1px solid silver;
	border-left: 1px solid silver;
}
div.fonts {
	
	
}

</style>
</head>
<body>

<h1>MERROW 2011 GENUINE MERROW PARTS PRICE LIST</h1>
<div id="google_translate_element"></div><script>
function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: 'en'
  }, 'google_translate_element');
}
</script><script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


<p>*** Wholesale Net and Quantity Discounts are offered to Certified Merrow Agents. </p> 
<table>
<tr>
<td></td>
<td></td>
<td id="m_titel"></td>
</tr>
<tr>
<td id="m_title2">US Price List</td>
<td id="m_title2">Merrow Code</td>
<td id="m_title2">Description</td>
<td id="m_title2">American List Ea. ($)</td>
<td id="m_title2">IMAGE</td>

</tr>
<tr>
<td></td>
<td></td>
<td id="m_title3"> ALL MERROW PARTS</td>

</tr>
<tr>
<td id="m_title4"></td>
<td id="m_title4"></td>
<td id="m_title4">MANUFACTURED TO .001 TOLERENCES</td>
<td id="m_title4"></td>
<td id="m_title4"></td>
</tr>
<tr><? $mapp1 = 'parts' ?><? $parts = mysql_query("SELECT *  FROM asin
WHERE `item_price` != '0.00' 
AND `search_terms_3` != ''
AND `item_price` != ''
AND `search_terms_3` != 'INDUSTRIAL SEWING MACHINE'
AND `search_terms_3` != 'NEEDLE'
ORDER BY  `search_terms_3`
")
or die(mysql_error()); 
while($parts_list = mysql_fetch_array( $parts )) { 
foreach($parts_list AS $key => $value) { $parts_list[$key] = stripslashes($value);
} $bad_char = array("&"," ","//"); $category = str_replace ($bad_char, "", $parts_list['search_terms_3']); ?><td id="<? echo $category; ?>"><? echo $parts_list['search_terms_3']; ?></td><td id="<?  echo $category; ?>"><? echo $parts_list['msmc_id']; ?></td><td id="<? echo $category; ?>"><? echo $parts_list['product_name']; ?></td><td id="<?  echo $category; ?>"><? echo '$USD ' .$parts_list['item_price']; ?></td><td id="<?  echo $category; ?>"><a href="<? echo $parts_list['imgurl_large']; ?>">CLICK FOR IMAGE</a> </td></tr><? } ?></table>


</body>
</html>
<? } ?>