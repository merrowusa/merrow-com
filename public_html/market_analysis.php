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



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title>Contact Merrow</title>
	
	<meta name="Author" content="Merrow, Inc.">
	<meta name="Category" content="products,sewingmachines">
	<meta name="Description" content="Merrow: the worlds best sewing machines.">
	<meta name="Keywords" content="merrow,charlie merrow,merrow machines,sewing machines,sergers,merrow stitch,merrow stitching">
	<meta name="viewport" content="width=1024">
	<META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">

<link rel="stylesheet" href="http://css.imerrow.com/css_major/base_vimeo.css" type="text/css" charset="utf-8">
	<!--<link rel="stylesheet" href="http://css.imerrow.com/nav.css" type="text/css" charset="utf-8"> -->
	<link rel="stylesheet" href="http://css.imerrow.com/ac_quicktime.css"  type="text/css" charset="utf-8">
	<link rel="stylesheet" href="http://css.imerrow.com/css_major/index_vimeo.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/whole_vimeo.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/contact_general.css" type="text/css" charset="utf-8">
    
    <style>
	
	.spiffy_machine{display:block;
}
.spiffy_machine *{
  display:block;
  height:1px;
  overflow:hidden;
  font-size:.01em;
  background:#FE3C1E}
.spiffy_machine1{
  margin-left:3px;
  margin-right:3px;
  padding-left:1px;
  padding-right:1px;
  border-left:1px solid #FE3C1E;
  border-right:1px solid #FE3C1E;
  background:#b1d88b}
.spiffy_machine2{
  margin-left:1px;
  margin-right:1px;
  padding-right:1px;
  padding-left:1px;
  border-left:1px solid #FE3C1E;
  border-right:1px solid #FE3C1E;
  background:#aad582}
.spiffy_machine3{
  margin-left:1px;
  margin-right:1px;
  border-left:1px solid #FE3C1E;
  border-right:1px solid #FE3C1E;}
.spiffy_machine4{
  border-left:1px solid #FE3C1E;
  border-right:1px solid #FE3C1E}
.spiffy_machine5{
  border-left:1px solid #FE3C1E;
  border-right:1px solid #FE3C1E}
.spiffy_machinefg{
  background:#FE3C1E}
#content div.column div.theformwhole form textarea {
	position: relative;
	visibility: visible;
	float: left;
	top: 45px;
	width: 700px;
	height: 35px;
	font-size: 28px;
	color: #1557ff;
}

</style>

</head>





<!-- ##################  
	 menu
	 ################## -->	

		





<!-- ##################  
//	 div classes for page do not edit
//	 ################## -->	

<div id="container">
		<div id="main">
			<div id="content" class="grid3cola">
				
 <!-- ################## 
//	 ################## -->	        
               
<!-- ##################  
//	 left column widgets
//	 ################## -->					
                
				
			
            		
                    
					
				
              
 <!-- ################## 
	// ################## -->	
				
              <div class="column">
<!-- ##################  
	// center column widgets
	// ################## -->	 
					
                    
                    <? include ("widget_specialdatabase_form.php") ?>
					
             		
				
  
             
 <!-- ################## 
//	 ################## -->	
     			</div> <!-- /column -->				
                <div class="column last sidebar">
  <!-- ##################  
//	 right column widgets
//	 ################## -->	 	
    			
					 
					
				
  <!-- ################## 
//	 ################## -->	               
                </div> <!-- /colum.last -->
    
  <!-- ##################  
//	 FOOTER
//	 ################## -->	

<div class="footer contain">
	<hr />

	
			
	<p>Copyright &copy; 2008 Merrow Inc. All Rights Reserved. Designated trademarks and brands are the property of their respective owners.</p>
	
</div><!-- }}} footer -->
			
               <? include ('widget_analytics.php'); ?>
	</body>
    </html>
    
<?  } else { echo '<strong> you are not authorized to be here.....<br><br><br>walk slowly towards the door. <br><br> right on. <br><br>keep going.<br><br><br><br><br><br> back a couple more steps. <br><br><br>take your time now... or <a href="http://merrow.com/market_analysis.php?logoff=1">logoff</a> and try again</strong>'; } ?>