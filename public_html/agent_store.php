 
<?

$dbspecial = $agents['store_db_name'];

$dbname1 = $_COOKIE["dbname"];

if ($dbname1==null) { $dbname = $dbspecial; } else { $dbname = $_COOKIE["dbname"]; }


?>


 
  <?

mysql_connect("localhost", "merrowco_renter", "7679") or die(mysql_error());
mysql_select_db("merrowco_cephei") or die(mysql_error()); 



   // Get all the data from the "asin" table which is where our product info is kept
$result48 = mysql_query("SELECT * FROM `$dbname`")
or die(mysql_error());

 // then define juju as the result array
 $agent_store = mysql_fetch_array($result48); 
 

 
 ?>
<?
$bandwidth = $_GET['choice']; 
$party_id = $_GET['party_id'];

$key = $_GET['key'];
$choice = $_GET['choice']; 
$username_chk = $agent_store['username'];
setcookie("dbname", "$dbspecial", time()+3600); 
setcookie("tmpagent", "$party_id", time()+3600); 
setcookie("tmpchoice", "$choice", time()+3600); ?>
    
     <? if ($key=='configuration') { ?>
     
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
	header("location:secure_agent_login.php?party_id=".$_GET['party_id']."&choice=".$_GET['choice']."&store=65533122844756220294");	//@ redirect 
} else {
	$_SESSION['exp_user']['expires'] = time()+(45*60);	//@ renew 45 minutes
}	
}

?>  
  

  


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title>Merrow Global Stores</title>
	
	<meta name="Author" content="Merrow, Inc.">
	<meta name="Category" content="products,sewingmachines">
	<meta name="Description" content="Merrow: the worlds best sewing machines.">
	<meta name="Keywords" content="merrow,charlie merrow,merrow machines,sewing machines,sergers,merrow stitch,merrow stitching">
	<meta name="viewport" content="width=1024">
	<meta name='robots' content='index,follow' />

<link href="http://css.imerrow.com/css_major/onestore.css" media="screen, print" rel="stylesheet">
	<link rel="stylesheet" href="http://css.imerrow.com/css_major/base_vimeo.css" type="text/css" charset="utf-8">
	
	<link rel="stylesheet" href="http://css.imerrow.com/css_major/index_vimeo.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/whole_vimeo.css" type="text/css" charset="utf-8">

	 <link rel="stylesheet" href="http://imerrow.com/nebula/css/thickbox.css" type="text/css" media="screen" />
     <script type="text/javascript" src="http://imerrow.com/nebula/scripts/jquery.js"></script>
     <script type="text/javascript" src="http://imerrow.com/nebula/scripts/thickbox.js"></script>   
</head>





<!-- ##################  
	 menu
	 ################## -->	
   <? //if there are login issues -- then uncomment these lines and make sure that the names are equal
   
   //echo $username_chk;
   //echo $_SESSION['exp_user']['username']; 
   
   ?>
   

					<? include ("widget_main_menu.php") ?>

<!-- ##################  
	 div classes for page do not edit
	 ################## -->	
     
     <?
	  if ($username_chk==$_SESSION['exp_user']['username']) { $keyman='configuration'; 
	  
	 if ($key=='configuration') {
	 
	  ?>
	
     
   
  
  
<div class="editing_header">                      
 <div class="refresh_button">Click here to see your changes
<SCRIPT LANGUAGE="JavaScript">

document.write('<form><input type=button value="Page Refresh" onClick="history.go()"></form>')

</script>
</div>
<div class="exit_button"> <input name="Big Button" value="Exit Store Configuration" type="button" onclick="location.href='http://merrow.com/dynamicstore.php?party_id=<? echo $party_id; ?>&choice=<? echo $choice; ?>&store=65533122844756220294'">  click on the images to change them, and on the pencil icons to edit the text    
</div>

</div>


<? } } ?>
 
<? include ("widget_agent_store.php");  ?> 

    
  <!-- ##################  
	 FOOTER
	 ################## -->	
<div class="footer contain">
	<hr />

	
			
	<p>Copyright &copy; 2009 Merrow Inc. All Rights Reserved. Designated trademarks and brands are the property of their respective owners.</p>
	
</div><!-- }}} footer -->
			</div> <!-- /content -->
		</div> <!-- /container -->

	</div> <!-- /main -->
   
      <? include ('widget_analytics.php'); ?>
	</body>
    </html>