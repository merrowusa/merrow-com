<?
$party_id = $_GET['party_id'];

mysql_connect("localhost", "merrowco_renter", "7679") or die(mysql_error());
mysql_select_db("merrowco_inventory") or die(mysql_error()); 



   // Get all the data from the "asin" table which is where our product info is kept
$result18 = mysql_query("SELECT * FROM `agents` WHERE party_id=$party_id")
or die(mysql_error());

 // then define juju as the result array
 $agent_test = mysql_fetch_array($result18); 



$dbspecial = $agent_test['store_db_name'];
$key = $_GET['key'];
$choice = $_GET['choice']; 

if ($party_id!=$agent_test['party_id']) {
setcookie("dbname", "$party_id", time()+3600);

} else { setcookie("dbname", "$dbspecial", time()+3600); }
 
setcookie("tmpagent", "$party_id", time()+3600); 
  ?>
<?php

$scrub = $_GET['lang'];  
$nifty = $_COOKIE["lang"];
$key = $_GET['key'];



if ( $scrub!=null) { 
$lang = $_GET['lang']; }
elseif ($scrub = null) {
$lang = '$nifty'; }
  

if ( $scrub!=null) { 
setcookie("lang", "$scrub", time()+3600);



} else { } ?>

<?php

$band = $_GET['choice'];  
$bandwidth = $_COOKIE["choice"];


if ( $band!=null) { 
$bandwidth = $_GET['choice']; }
elseif ($band = null) {
$bandwidth = '$cookieband'; }
  

if ( $band!=null) { 
setcookie("choice", "$band", time()+3600);



} else { } ?>

<?php include ("ip_lang_database.php") ?>





<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title>Merrow Agent Choice</title>
	
	<meta name="Author" content="Merrow, Inc.">
	<meta name="Category" content="products,sewingmachines">
	<meta name="Description" content="Merrow: the worlds best sewing machines.">
	<meta name="Keywords" content="merrow,charlie merrow,merrow machines,sewing machines,sergers,merrow stitch,merrow stitching">
	<meta name="viewport" content="width=1024">
	<meta name='robots' content='noindex,nofollow' />




<script type="text/javascript" src="http://merrow.com/cephei/scripts/jquery.js"></script>
<script type="text/javascript" src="http://merrow.com/cephei/scripts/thickbox.js"></script>




	<link rel="stylesheet" href="http://css.imerrow.com/css_major/thickbox.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="http://css.imerrow.com/css_major/base_vimeo.css" type="text/css" charset="utf-8">
	<link rel="stylesheet" href="http://css.imerrow.com/css_major/ac_quicktime.css"  type="text/css" charset="utf-8">
	<link rel="stylesheet" href="http://css.imerrow.com/css_major/index_vimeo.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/whole_vimeo.css" type="text/css" charset="utf-8">
        <link rel="stylesheet" href="http://css.imerrow.com/css_major/contact_general.css" type="text/css" charset="utf-8">
   
  
	
	
  

 
</head>


<!-- ************* DO NOT ALTER ANYTHING BELOW THIS LINE ! ************** --->

<!-- ##################  
	// menu
	// ################## -->	

		<?  include ("widget_main_menu.php") ?>



<!-- ##################  
//	 div classes for page do not edit
//	 ################## -->	

<div id="container">
		<div id="main">
			<div id="content" class="grid3cola">
				
 <!-- ################## 
//	 ################## -->	        
               <div class="column first sidebar">
<!-- ##################  
//	 left column widgets
//	 ################## -->					
                
				
			
            		<? include ("widget_leftmainmenu.php") ?>
                    
					
				
                
              
 <!-- ################## 
	// ################## -->	
		  </div> <!-- /column.first -->				
              <div class="column">
<!-- ##################  
	// center column widgets
	// ################## -->	 
					
	<? include ("widget_agent_lowebandwidth_info.php") ?>
  
 <!-- ################## 
//	 ################## -->	
     			</div> 
                <!-- /column -->				
                <div class="column last sidebar">
  <!-- ##################  
//	 right column widgets
//	 ################## -->	 	
     	</table>	
				
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
			</div> <!-- /content -->
		</div> <!-- /container -->

	</div> <!-- /main -->
    
       <? include ('widget_analytics.php'); ?>
	</body>
    </html>