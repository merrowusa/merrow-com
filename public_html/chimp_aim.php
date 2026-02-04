<head>
     <link rel="stylesheet" href="http://css.imerrow.com/css_major/chimpmaps.css" type="text/css" media="screen" />
     </head>

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
 

require_once 'MCAPI.class.php';
require_once 'config.inc'; //contains username & password
$GLOBALS["mc_api_key"] = '';
$acct = new MCAPI($mailChimpUser, $mailChimpPass);
$api = new MCAPI($username, $password);



if ($_GET['choice'] == '1') {

if ($api->errorCode){
	// an error occurred while logging in
	echo "code:".$api->errorCode."\n";
	echo "msg :".$api->errorMessage."\n";
	die();
}

$retval = $api->  campaignOpenedAIM($campaignId);

if ($api->errorCode){
	echo "Unable to Load Campaign Stats!";
	echo "\n\tCode=".$api->errorCode;
	echo "\n\tMsg=".$api->errorMessage."\n";
} else {
  
   echo "<ul class=\"stats-list\">";
   
    foreach($retval as $k=>$v){
        echo " <li><span class=\"name\"> 
		<a href=\"mailto:"
		.$v['email'].
		"\"class=\"mailto\">"
		.$v['email'].
		"</a>
		\n </span> <span class=\"centered\"> </span><span class=\"value\">"
		.$v['open_count'].
		"\n times<br></span></li>";
	
    } echo "</ul>";
 
}

}
if ($_GET['choice'] == '2') {

if ($api->errorCode){
	// an error occurred while logging in
	echo "code:".$api->errorCode."\n";
	echo "msg :".$api->errorMessage."\n";
	die();
}

$retval = $api->  campaignNotOpenedAIM($campaignId);

if ($api->errorCode){
	echo "Unable to Load Campaign Stats!";
	echo "\n\tCode=".$api->errorCode;
	echo "\n\tMsg=".$api->errorMessage."\n";
} else {
  
   echo "<ul class=\"stats-list\">";
   
    foreach($retval as $k){
        echo " <li><span class=\"name\"><a href=\"mailto:"
		.$k.
		"\"class=\"mailto\">"
		.$k.
		"</a> </span></li>";
	
    } echo "</ul>";
 
}

}




?>
<?php

// Connect to the MailChimp server with the user's credentials.

?> 
#
 