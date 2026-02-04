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

</style>
</head>
<body>

<h1>MERROW 2013 SEWING MACHINE PRICE LIST</h1>
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
<td id="m_title2">Wholesale Net Ea. ($)</td>
<td id="m_title2">American List Ea. ($)</td>
<td id="m_title2">UPDATED 8/1/2011 Quantity Discount (24/$)</td>
<td id="m_title2">Table & Motor</td>
<td id="m_title2">MSMC ID</td>
</tr>
<tr>
<td></td>
<td></td>
<td id="m_title3"> 70 and 72 Class Overlock Machines</td>

</tr>
<tr>
<td id="m_title4"></td>
<td id="m_title4"></td>
<td id="m_title4">End to End Seaming Sewing Machines</td>
<td id="m_title4"></td>
<td id="m_title4"></td>
<td id="m_title4"></td>

<td id="m_title4"></td>
<td id="m_title4"></td>
</tr>
<tr>

<? $mapp1 = '70' ?> 
<? $apps = mysql_query("SELECT *  FROM machine_pages
WHERE `publish` = 'yes'  
AND `machine_pages`.`class_key` = $mapp1
")
or die(mysql_error()); 
while($mach_list = mysql_fetch_array( $apps )) { 
foreach($mach_list AS $key => $value) { $mach_list[$key] = stripslashes($value);
} ?>
<td></td>
<td id="common"><? echo $mach_list['style']; ?></td>
<td id="common"><? echo $mach_list['description']; ?></td>
<td id="common"><? echo '$USD ' .$mach_list['price']*.8; ?></td>
<td id="common"><? echo '$USD ' .$mach_list['price']; ?></td>

<td id="common"><? echo '$USD ' .$mach_list['price']*.7; ?></td>
<td id="common"><? echo $mach_list['installation']; ?></td>
<td id="common"><? if ($_GET['m']== 'w') { ?> <a href="https://192.168.2.105:8443/crmsfa/control/product?product_id=<? echo $mach_list['ot_id']; ?>"><? echo $mach_list['ot_id']; ?></a> <? } else  echo $mach_list['ot_id']; ?> </td>

</tr><? } ?>
<? $mapp1 = '72' ?> 
<? $apps = mysql_query("SELECT *  FROM machine_pages
WHERE `publish` = 'yes'  
AND `machine_pages`.`class_key` = $mapp1
")
or die(mysql_error()); 
while($mach_list = mysql_fetch_array( $apps )) { 
foreach($mach_list AS $key => $value) { $mach_list[$key] = stripslashes($value);
} ?>
<td></td>
<td id="common"><? echo $mach_list['style']; ?></td>
<td id="common"><? echo $mach_list['description']; ?></td>
<td id="common"><? echo '$USD ' .$mach_list['price']*.8; ?></td>
<td id="common"><? echo '$USD ' .$mach_list['price']; ?></td>

<td id="common"><? echo '$USD ' .$mach_list['price']*.7; ?></td>
<td id="common"><? echo $mach_list['installation']; ?></td>
<td id="common"><? if ($_GET['m']== 'w') { ?> <a href="https://192.168.2.105:8443/crmsfa/control/product?product_id=<? echo $mach_list['ot_id']; ?>"><? echo $mach_list['ot_id']; ?></a> <? } else  echo $mach_list['ot_id']; ?> </td>
</tr><? } ?>

<tr>
<td></td>
<td></td>
<td id="m_title3"> Crochet Class Overlock Machines</td>

</tr>
<tr>
<td id="m_title4"></td>
<td id="m_title4"></td>
<td id="m_title4">Whip Stitch and Crochet Overlock Machines</td>
<td id="m_title4"></td>
<td id="m_title4"></td>
<td id="m_title4"></td>

<td id="m_title4"></td>
<td id="m_title4"></td>
</tr>
<tr>


<? $mapp1 = '6611' ?> 
<? $apps = mysql_query("SELECT *  FROM machine_pages
WHERE `publish` = 'yes'  
AND `machine_pages`.`class_key` = $mapp1
")
or die(mysql_error()); 
while($mach_list = mysql_fetch_array( $apps )) { 
foreach($mach_list AS $key => $value) { $mach_list[$key] = stripslashes($value);
} ?>
<td></td>
<td id="common"><? echo $mach_list['style']; ?></td>
<td id="common"><? echo $mach_list['description']; ?></td>
<td id="common"><? echo '$USD ' .$mach_list['price']*.8; ?></td>
<td id="common"><? echo '$USD ' .$mach_list['price']; ?></td>

<td id="common"><? echo '$USD ' .$mach_list['price']*.7; ?></td>
<td id="common"><? echo $mach_list['installation']; ?></td>
<td id="common"><? if ($_GET['m']== 'w') { ?> <a href="https://192.168.2.105:8443/crmsfa/control/product?product_id=<? echo $mach_list['ot_id']; ?>"><? echo $mach_list['ot_id']; ?></a> <? } else  echo $mach_list['ot_id']; ?> </td>
</tr><? } ?>

<tr>
<td></td>
<td></td>
<td id="m_title3"> MG Class Overlock Machines</td>

</tr>
<tr>
<td id="m_title4"></td>
<td id="m_title4"></td>
<td id="m_title4">High Speed Overlock Machines</td>
<td id="m_title4"></td>
<td id="m_title4"></td>
<td id="m_title4"></td>

<td id="m_title4"></td>
<td id="m_title4"></td>
</tr>
<tr>

<? $mapp1 = '6612' ?> 
<? $apps = mysql_query("SELECT *  FROM machine_pages
WHERE `publish` = 'yes'  
AND `machine_pages`.`class_key` = $mapp1
")
or die(mysql_error()); 
while($mach_list = mysql_fetch_array( $apps )) { 
foreach($mach_list AS $key => $value) { $mach_list[$key] = stripslashes($value);
} ?>
<td></td>
<td id="common"><? echo $mach_list['style']; ?></td>
<td id="common"><? echo $mach_list['description']; ?></td>
<td id="common"><? echo '$USD ' .$mach_list['price']*.8; ?></td>
<td id="common"><? echo '$USD ' .$mach_list['price']; ?></td>

<td id="common"><? echo '$USD ' .$mach_list['price']*.7; ?></td>
<td id="common"><? echo $mach_list['installation']; ?></td>
<td id="common"><? if ($_GET['m']== 'w') { ?> <a href="https://192.168.2.105:8443/crmsfa/control/product?product_id=<? echo $mach_list['ot_id']; ?>"><? echo $mach_list['ot_id']; ?></a> <? } else  echo $mach_list['ot_id']; ?> </td></tr><? } ?>

<tr>
<td></td>
<td></td>
<td id="m_title3"> Refurbished Overlock Machines</td>

</tr>
<tr>
<td id="m_title4"></td>
<td id="m_title4"></td>
<td id="m_title4">General Refurbished Overlock Machines</td>
<td id="m_title4"></td>
<td id="m_title4"></td>

<td id="m_title4"></td>
<td id="m_title4"></td>
</tr>
<tr>

<? $mapp1 = '6613' ?> 
<? $apps = mysql_query("SELECT *  FROM machine_pages
WHERE `publish` = 'yes'  
AND `machine_pages`.`class_key` = $mapp1
")
or die(mysql_error()); 
while($mach_list = mysql_fetch_array( $apps )) { 
foreach($mach_list AS $key => $value) { $mach_list[$key] = stripslashes($value);
} ?>
<td></td>
<td id="common"><? echo $mach_list['style']; ?></td>
<td id="common"><? echo $mach_list['description']; ?></td>
<td id="common"><? echo '$USD ' .$mach_list['price']*.8; ?></td>
<td id="common"><? echo '$USD ' .$mach_list['price']; ?></td>

<td id="common"><? echo '$USD ' .$mach_list['price']*.7; ?></td>
<td id="common"><? echo $mach_list['installation']; ?></td>
<td id="common"><? if ($_GET['m']== 'w') { ?> <a href="https://192.168.2.105:8443/crmsfa/control/product?product_id=<? echo $mach_list['ot_id']; ?>"><? echo $mach_list['ot_id']; ?></a> <? } else  echo $mach_list['ot_id']; ?> </td>
</tr><? } ?>


</table>
</body>
</html>
<? } ?>