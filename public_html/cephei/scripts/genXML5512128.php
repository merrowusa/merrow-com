<?php  


require_once 'MCAPI.class.php';
require_once 'config.inc'; //contains username & password
$GLOBALS["mc_api_key"] = '';
$acct = new MCAPI($mailChimpUser, $mailChimpPass);
$api = new MCAPI($username, $password);



$retval = $api->  campaignNotOpenedAIM($campaignId);
$retval1 = $api->  campaignHardBounces($campaignId);
$retval2 = $api->  campaignSoftBounces($campaignId);
$retval3 = $api->  campaignOpenedAIM($campaignId);
$opens = $retval3[1]['email'];

  



$radish=$_GET['planet'];
$timeout = $_GET['timeout'];
$drjohn = $_GET['449812'];

require("phpsqlajax_dbinfo.php"); 

// Start XML file, create parent node

$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node); 

// Opens a connection to a MySQL server

$connection=mysql_connect (localhost, $username, $password);
if (!$connection) {  die('Not connected : ' . mysql_error());} 

// Set the active MySQL database

$db_selected = mysql_select_db($database, $connection);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
} 

// Select all the rows in the markers table
// Select all the rows in the markers table
if ($timeout == 30) {
$query = "SELECT * FROM $radish WHERE DATE_SUB(CURDATE(),INTERVAL 29 DAY) <= date_contacted";
}
elseif ($timeout == 60) {
$query = "SELECT * FROM $radish WHERE DATE_SUB(CURDATE(),INTERVAL 59 DAY) <= date_contacted";
}
elseif ($timeout == 90) {
$query = "SELECT * FROM $radish WHERE DATE_SUB(CURDATE(),INTERVAL 89 DAY) <= date_contacted";
}
elseif ($drjohn == 39443 { 
$query = "SELECT * FROM textile_plants_uk
UNION
SELECT * FROM textile_plants_argentina
UNION
SELECT * FROM textile_plants_bangladesh
UNION
SELECT * FROM textile_plants_belgium
UNION
SELECT * FROM textile_plants_brazil
UNION
SELECT * FROM textile_plants_canada
UNION
SELECT * FROM textile_plants_czech
UNION
SELECT * FROM textile_plants_egypt
UNION
SELECT * FROM textile_plants_thailand
UNION
SELECT * FROM textile_plants_india
UNION
SELECT * FROM textile_plants_korea
UNION
SELECT * FROM textile_plants_mexico
UNION
SELECT * FROM textile_plants_pakistan
UNION
SELECT * FROM textile_plants_poland
UNION
SELECT * FROM textile_plants_shandong
UNION
SELECT * FROM textile_plants_southafrica
UNION
SELECT * FROM textile_plants_spain
UNION
SELECT * FROM textile_plants_taiwan
UNION
SELECT * FROM textile_plants_turkey
UNION
SELECT * FROM textile_plants_zhejiang

 WHERE 1";
} else {

$query = "SELECT * FROM $radish WHERE 1";
}

$result = mysql_query($query);
if (!$result) {  
  die('Invalid query: ' . mysql_error());
} 

header("Content-type: text/xml"); 


// Iterate through the rows, adding XML nodes for each

while ($row = @mysql_fetch_assoc($result)){  
  // ADD TO XML DOCUMENT NODE  
  $node = $dom->createElement("marker");  
  $newnode = $parnode->appendChild($node);   
  $newnode->setAttribute("name",$row['name']);
  $newnode->setAttribute("address", $row['address']);  
  $newnode->setAttribute("lat", $row['lat']);  
  $newnode->setAttribute("lng", $row['lng']);  
  $newnode->setAttribute("email", $row['email']);
  
    $newnode->setAttribute("phone", $row['phone']);   
	 $newnode->setAttribute("machines", $row['number_of_machines']);   
	  $newnode->setAttribute("rails", $row['rails']);   
	   $newnode->setAttribute("notes", $row['short_notes']);   
	    $newnode->setAttribute("id", $row['id']);   
		  $newnode->setAttribute("datecontacted", $row['date_contacted']); 
		 	 
		 if ($retval['email'] == $row['email']) {
		 $newnode->setAttribute("emailed", 'un-opened');
		 } else
		 if ($retval1['email'] == $row['email']) {
		 $newnode->setAttribute("emailed", 'Hard Bounce');
		 } else
		 if ($retval2['email'] == $row['email']) {
		 $newnode->setAttribute("emailed", 'Soft Bounce');
		 } else
		 if ($retval3['email'] == $row['email']) {
		  $newnode->setAttribute("emailed", 'Success!');
		  } else {
		  $newnode->setAttribute("emailed", 'No Data');
		  }
		 
		 		$lastcontact=$row['date_contacted']; 
				 $newlast = strtotime( $lastcontact );  
        		 $fewlast = time() - $newlast;
		 		if ($fewlast < 2592000) { $lapped = 'wham';} elseif ($fewlast < 5184000) { $lapped = 'bam';} elseif ($fewlast < 7776000) { $lapped = 'thankyou';} elseif ($fewlast > 7776001) { $lapped = 'mam';} elseif ($lastcontact == null ) { $lapped = 'cookie';}
		   
		 		 $newnode->setAttribute("type", $lapped); 
				 
				 

} 

echo $dom->saveXML();

?>