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
  Reference Tools  
  </div>
  <div class="internal_list">
  
       <a href="http://merrow.com/contact_general.html" target="_blank">contact Merrow with questions</a><br>
    
      


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
   Pricing Tools
   </div>
     <div class="internal_list">
<a href="http://www.merrow.com/machine_prices.html" target="_blank">Machine Wholesale Price List</a></br>
    <a href="http://merrow.com/partspricing.php" target="_blank">Genuine Parts List Prices</a><br>    
     <a href="http://merrow.com/widget_marketing_material.php" target="mammy">Merrow Marketing Material</a><br>   
<!--  THIS IS FOR MERROW GLOBAL <a href="http://merrow.com/global_analysis.php?planet=1" target="mammy">Global Master Prices</a><br> -->
    
        
   
   </div>
  </div>

  <b class="spiffy_brown">
  <b class="spiffy_brown5"></b>
  <b class="spiffy_brown4"></b>
  <b class="spiffy_brown3"></b>
  <b class="spiffy_brown2"><b></b></b>a
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
MGS Services</div>
  <div class="internal_list">
  ...coming soon...</br>
  <a href="" target="mammy">Online Store (order dashboard)</a><br>
<a href="" target="mammy">HD Video Uploading</a><br>
<a href="" target="mammy">Photo Uploading</a><br>
 <a href="" target="mammy">Message Center</a><br><p><div class="unread"></div>

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



<?  } else { echo '<strong> you are not authorized to be here.....<br><br><br>walk slowly towards the door. <br><br> right on. <br><br>keep going.<br><br><br><br><br><br> back a couple more steps. <br><br><br>take your time now... </strong>'; } ?>