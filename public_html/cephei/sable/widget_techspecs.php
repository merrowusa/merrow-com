<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>
	
<?php

// then we connect to the database as renter and access table: inventory 
#
mysql_connect("localhost", "merrowco_renter", "7679") or die(mysql_error());

#
mysql_select_db("merrowco_inventory") or die(mysql_error());

?>
     
<? 

$wammo = $_GET['party_id']; 
$noire = $_GET['stitch']; 
$machine = $_GET['machine'];



// Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT * FROM asin WHERE msmc_id='$machine'")
or die(mysql_error());
?>



<?
// then define juju as the result array
 $juju = mysql_fetch_array($result); 

echo $machine;

?>

<body>



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

<!-- <td> <div class="mylilbutton" id="buythis">   
   <a href="http://store.merrow.com/Merrow-MG3U-High-Speed-Industrial-Sewing/M/B001AVK6R0.htm" >  <img src="/nebula/images/viewmore.jpg" alt="ko">   </a> </div>
 </div> </td> -->
 
 
</body>
</html>
