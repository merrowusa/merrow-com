<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   	<!--all of this javascript appears necessary to drive movies and drawers -->	
	<link href="http://merrow.com/cephei/css/menu.css" rel="stylesheet" type="text/css" />
<link href="http://merrow.com/cephei/css/hoverbox/hoverbox.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="http://merrow.com/cephei/css/productpage/added_parts.css" type="text/css" charset="utf-8">






<body>

<?php

$munt = $_GET['mediakeyword']; 


// then we connect to the database as renter and access table: inventory 
#
mysql_connect("localhost", "merrowco_renter", "7679") or die(mysql_error());

#
mysql_select_db("merrowco_inventory") or die(mysql_error());


// Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT * FROM asin WHERE media_keyword='$munt'")
or die(mysql_error());
?>


<?
// then define juju as the result array
 $juju = mysql_fetch_array($result); 


?>



<?php 

include('machinemenu.php'); 

?>
<br /><br />
<a href="<? echo $juju['setup_url']; ?>" target="_self">Setup & Instructions</a>
<a href="<? echo $juju['maint_url']; ?>" target="_self">Maintenace</a>
<a href="<? echo $juju['trouble_url']; ?>" target="_self">Troubleshooting</a>
<br>
<br>
DESCRIPTION<br /><br />

<? echo $juju['long_desc']; ?><br /><br />

SPECS 
<br />
Speed: <? echo $juju['spec_speed']; ?>
<br />
Number of threads: <? echo $juju['spec_numthreads']; ?><br />
Needle Thread: <? echo $juju['spec_thread']; ?><br />
Looper Thread: <? echo $juju['spec_looperthread']; ?><br />
<br />
<br />Standard Loopers: <? echo $juju['spec_loopers']; ?>
<br />
<br />Standard Needle: <? echo $juju['spec_standardneedle']; ?>
<br />Needle Range: <? echo $juju['spec_needlerange']; ?>
<br />
<br />Standard Eccentrics: <? echo $juju['spec_standardeccentric']; ?>
<br />Eccentric Range: <? echo $juju['spec_eccentricrange']; ?>
<br />
<br />
<br />Standard Seam Width: <? echo $juju['spec_standardseamwidth']; ?>
<br />Seam Width: <? echo $juju['spec_seamwidthrange']; ?>
<br />Seam Type: <? echo $juju['spec_seamtype']; ?>


</div>
</html>
</body>
