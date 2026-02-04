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
	header("location:widget_merrow_login.php");	//@ redirect 
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

// then we connect to the database as renter and access table: inventory 
#
mysql_connect("localhost", "merrowco_renter", "7679") or die(mysql_error());

#
mysql_select_db("merrowco_inventory") or die(mysql_error());

?>


<? 

$name = $_SESSION['exp_user']['useremail'];



//verify login credentials
$result12 = mysql_query("SELECT * FROM login_auth WHERE useremail='$name'")
or die(mysql_error());

$verify = mysql_fetch_array($result12);

if ($verify['merrow']!=null) {  ?>

    <head>
    
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
      
       <link rel="stylesheet" href="http://css.imerrow.com/css_major/intranet.css" type="text/css" charset="utf-8">
       <link rel="stylesheet" href="http://css.imerrow.com/css_major/base_vimeo.css" type="text/css" charset="utf-8">
	<!--<link rel="stylesheet" href="http://css.imerrow.com/nav.css" type="text/css" charset="utf-8"> -->
	<!-- <link rel="stylesheet" href="http://css.imerrow.com/ac_quicktime.css"  type="text/css" charset="utf-8"> -->
	<link rel="stylesheet" href="http://css.imerrow.com/css_major/index_vimeo.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/whole_vimeo.css" type="text/css" charset="utf-8">
      
   </head>
   <body>
<div id="wrapper">
<div class="navigator">
Welcome <? echo $verify['name']; ?><br>


</div>

<div class="green1">
<div>
  <b class="spiffy_green">
  <b class="spiffy_green1"><b></b></b>
  <b class="spiffy_green2"><b></b></b>
  <b class="spiffy_green3"></b>
  <b class="spiffy_green4"></b>
  <b class="spiffy_green5"></b></b>

  <div class="spiffy_greenfg">
  <div class="title10">
   Merrow ERP
  </div>
  <div class="internal_list">
  Please <a href="https://192.168.2.105:8443/crmsfa/control/main" target="_blank">login first....</a><br>
  <a href="https://192.168.2.105:8443/crmsfa/control/main" target="mammy">CRM</a><br>
<a href="https://192.168.2.105:8443/purchasing/control/main" target="mammy">Purchasing</a><br>
<a href="https://192.168.2.105:8443/catalog/control/main"target="mammy">Catalog Control</a><br>
<a href="https://192.168.2.105:8443/catalog/control/main"target="mammy">Warehouse</a><br>
<a href="https://192.168.2.105:8443/warehouse/control/setFacility"target="mammy">Shipping</a><br>
<a href="https://192.168.2.105:8443/financials/control/setOrganization"target="mammy">Financials</a><br>

  </div>
  </div>
  


  <b class="spiffy_green">
  <b class="spiffy_green5"></b>
  <b class="spiffy_green4"></b>
  <b class="spiffy_green3"></b>
  <b class="spiffy_green2"><b></b></b>
  <b class="spiffy_green1"><b></b></b></b>
</div>
</div>
<div class="brown1">
<div>
  <b class="spiffy_brown">
  <b class="spiffy_brown1"><b></b></b>
  <b class="spiffy_brown2"><b></b></b>
  <b class="spiffy_brown3"></b>
  <b class="spiffy_brown4"></b>
  <b class="spiffy_brown5"></b></b>

  <div class="spiffy_brownfg">
  <div class="title10">
   Merrow Sales 
   </div>
     <div class="internal_list">
      <!-- <a href="http://inside.imerrow.com" target="mammy">Inside Merrow</a><br>  -->
       <a href="http://merrow.com/machine_prices.php?m=w" target="_parent">Machine Price List</a><br>
   
         <a href="http://merrow.com/widget_reporting.php" target="mammy">Customer Forms</a><br><p><div class="unread"><? if ($num_rows>'0') { ?> There are <? echo $num_rows; ?> un-claimed forms </p> <? } ?></div>
   
   </div>
  </div>

  <b class="spiffy_brown">
  <b class="spiffy_brown5"></b>
  <b class="spiffy_brown4"></b>
  <b class="spiffy_brown3"></b>
  <b class="spiffy_brown2"><b></b></b>
  <b class="spiffy_brown1"><b></b></b></b>
</div>
</div>
<div class="orange1">
<div>
  <b class="spiffy_orange">
  <b class="spiffy_orange1"><b></b></b>
  <b class="spiffy_orange2"><b></b></b>
  <b class="spiffy_orange3"></b>
  <b class="spiffy_orange4"></b>
  <b class="spiffy_orange5"></b></b>

  <div class="spiffy_orangefg"><div class="title10">
Merrow Marketing</div>
  <div class="internal_list">
 <a href="http://merrow.com/widget_marketing_material.php" target="mammy">Merrow Marketing Material</a><br>   
<a href="http://merrow.com/widget_cms_newsletter.php" target="mammy">CMM for Newsletters</a><br>
          <a href="http://merrow.com/widget_cms_machines.php" target="mammy">CMM for Machine Pages</a><br>
          <a href="http://merrow.com/widget_cms_applications.php" target="mammy">CMM for Application Pages</a><br>
          <a href="http://merrow.com/widget_cms_customer_stories.php" target="mammy">CMM for Customer Story Pages</a><br>
<a href="http://merrow.com/widget_agentmap_config.php" target="mammy">Edit Merrow Customer List</a><br>
<!--     <a href="http://merrow.com/market_analysis.php?planet=1" target="mammy">Merrow MMA Master Login</a><br> -->
<a href="http://www.merrow.com/widget_cms_customer_password.php" title="">  Edit Customer Passwords</a><br />


</div>
  </div>

  <b class="spiffy_orange">
  <b class="spiffy_orange5"></b>
  <b class="spiffy_orange4"></b>
  <b class="spiffy_orange3"></b>
  <b class="spiffy_orange2"><b></b></b>
  <b class="spiffy_orange1"><b></b></b></b>
</div>
</div>

<div class="bars">
<div class="green">
<div>
  <b class="spiffy_green">
  <b class="spiffy_green1"><b></b></b>
  <b class="spiffy_green2"><b></b></b>
  <b class="spiffy_green3"></b>
  <b class="spiffy_green4"></b>
  <b class="spiffy_green5"></b></b>

  <div class="spiffy_greenfg">
    <!-- content goes here -->
  </div>

  <b class="spiffy_green">
  <b class="spiffy_green5"></b>
  <b class="spiffy_green4"></b>
  <b class="spiffy_green3"></b>
  <b class="spiffy_green2"><b></b></b>
  <b class="spiffy_green1"><b></b></b></b>
</div>
</div>
<div class="brown">
<div>
  <b class="spiffy_brown">
  <b class="spiffy_brown1"><b></b></b>
  <b class="spiffy_brown2"><b></b></b>
  <b class="spiffy_brown3"></b>
  <b class="spiffy_brown4"></b>
  <b class="spiffy_brown5"></b></b>

  <div class="spiffy_brownfg">
    <!-- content goes here -->
  </div>

  <b class="spiffy_brown">
  <b class="spiffy_brown5"></b>
  <b class="spiffy_brown4"></b>
  <b class="spiffy_brown3"></b>
  <b class="spiffy_brown2"><b></b></b>
  <b class="spiffy_brown1"><b></b></b></b>
</div>
</div>
<div class="orange">
<div>
  <b class="spiffy_orange">
  <b class="spiffy_orange1"><b></b></b>
  <b class="spiffy_orange2"><b></b></b>
  <b class="spiffy_orange3"></b>
  <b class="spiffy_orange4"></b>
  <b class="spiffy_orange5"></b></b>

  <div class="spiffy_orangefg">
    <!-- content goes here -->
  </div>

  <b class="spiffy_orange">
  <b class="spiffy_orange5"></b>
  <b class="spiffy_orange4"></b>
  <b class="spiffy_orange3"></b>
  <b class="spiffy_orange2"><b></b></b>
  <b class="spiffy_orange1"><b></b></b></b>
</div>
</div>
</div>
</div>



<?  } else { echo '<img src="http://merrow.com/images/getout.gif"> <strong> you are not authorized to be here.....<br><br><br>walk slowly towards the door. <br><br> right on. <br><br>keep going.<br><br><br><br><br><br> back a couple more steps. <br><br><br>take your time now... or <a href="http://merrow.com/market_analysis.php?logoff=1">logoff</a></strong> and try again'; } ?>