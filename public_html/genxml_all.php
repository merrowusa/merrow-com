<?php  


require_once 'MCAPI.class.php';
require_once 'config.inc'; //contains username & password
$GLOBALS["mc_api_key"] = '';
$acct = new MCAPI($mailChimpUser, $mailChimpPass);
$api = new MCAPI($username, $password);



$retval = $api->  campaignNotOpenedAIM($campaignId);
$retval1 = $api->  campaignHardBounces($campaignId);
$retval2 = $api->  campaignSoftBounces($campaignId);


  



$radish=$_GET['planet'];
$timeout = $_GET['timeout'];


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
if ($timeout == 30) {
$query = "SELECT * FROM textile_plants_brazil WHERE DATE_SUB(CURDATE(),INTERVAL 30 DAY) <= date_contacted";
}
elseif ($timeout == 60) {
$query = "SELECT * FROM textile_plants_brazil WHERE DATE_SUB(CURDATE(),INTERVAL 60 DAY) <= date_contacted";
}
elseif ($timeout == 90) {
$query = "SELECT * FROM textile_plants_brazil WHERE DATE_SUB(CURDATE(),INTERVAL 90 DAY) <= date_contacted";
}
else { 
$query = "SELECT * FROM textile_plants_brazil WHERE 1";
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
		 
		 
		 $lastcontact=$row['date_contacted']; 
		 $newlast = strtotime( $lastcontact );  
         $fewlast = time() - $newlast;
		 if ($fewlast < 2592000) { $lapped = 'wham';} elseif ($fewlast < 5184000) { $lapped = 'bam';} elseif ($fewlast < 7776000) { $lapped = 'thankyou';} elseif ($fewlast > 7776001) { $lapped = 'mam';} elseif ($lastcontact == null ) { $lapped = 'cookie';}
		   
		  $newnode->setAttribute("type", $lapped); 

} 

echo $dom->saveXML();


?>