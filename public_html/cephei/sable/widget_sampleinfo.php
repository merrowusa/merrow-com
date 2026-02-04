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
$sample = $_GET['sample'];



?>

<link rel="stylesheet" href="http://merrow.com/cephei/css/css_major/thickbox.css" type="text/css" media="screen" />

 <? // Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT * FROM samples WHERE label='$sample'")
or die(mysql_error());
?>


<?
// then define juju as the result array
 $sq = mysql_fetch_array($result); ?>


<body>


<div class="header" id="top"> Why is this Sample Unique? </div>
<div class="answer" id="text">
  <tr><? echo $sq['whyunique']; ?> </tr>
</div>
<div class="header" id="top"> What does this machine do? </div>
<div class="answer" id="text"><tr><? echo $sq['whatmachine']; ?> </tr></div>
<div class="header" id="top"> Does Merrow support this machine?  </div>
<div class="answer" id="text"><tr><? echo $sq['merrowsupport']; ?> </tr></div>
<div class="header" id="top"> is the Machine in production?  </div>
<div class="answer" id="text"><tr><? echo $sq['inproduction']; ?> </tr></div>

<!-- <td> <div class="mylilbutton" id="buythis">   
   <a href="http://store.merrow.com/Merrow-MG3U-High-Speed-Industrial-Sewing/M/B001AVK6R0.htm" >  <img src="/nebula/images/viewmore.jpg" alt="ko">   </a> </div>
 </div> </td> -->
 
 
</body>
</html>
