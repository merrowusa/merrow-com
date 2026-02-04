<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Merrow Parts Book</title>
<html>


<meta http-equiv=Content-Type content="text/html; charset=macintosh">
<meta name=Generator content="Merrow Parts Book">
<link rel="stylesheet" href="http://imerrow.com/webportal/css/whole1.css" type="text/css" charset="utf-8">
<link rel="stylesheet" href="http://imerrow.com/webportal/css/mamazoncss/extracted-common.css" type="text/css" charset="utf-8">
 <link rel="stylesheet" href="http://imerrow.com/webportal/css/mamazoncss/extracted-iwsclassic.css" type="text/css" charset="utf-8">
 <link rel="stylesheet" href="http://imerrow.com/webportal/css/lightbox.css" type="text/css" media="screen" />
<script type="text/javascript" src="http://imerrow.com/webportal/scripts/lightbox.js"></script>

</head>


<body>
<br />
<br />
<a href="http://imerrow.com/webportal/machines/partsbook/parts%20mg%20class/pics/pdmg3u-05.gif"  rel="lightbox" title="Merrow Parts Diagram (copyright 2008)"><img src="http://imerrow.com/webportal/machines/partsbook/parts%20mg%20class/pics/pdmg3u-05.gif" width="300" height="100" /></a>

			<br />
			<br />

12<br />
<?php $rest = substr(getenv('SCRIPT_NAME'), 1, -10);
echo $rest;?>

12<br />
<?php $rest = substr(getenv('SCRIPT_NAME'), 1, -15);
echo $rest;?>
12<br />
<?php $rest = substr(getenv('SCRIPT_NAME'), 1, -1);
echo $rest;?>
12<br />
<?php $rest = substr(getenv('SCRIPT_NAME'), 1, 5);
echo $rest;?>
<br />13<br />
<?

$currentFile = $_SERVER["SCRIPT_NAME"];

$img = array_pop(explode("/", $currentFile ));
$row = ($currentFile);
echo $img;
echo $row;


?> 
     
          <?php
#
mysql_connect("localhost", "merrowco_renter", "7679") or die(mysql_error());

#
mysql_select_db("merrowco_techmanual") or die(mysql_error());


// Get all the data from the "example" table
$result = mysql_query("SELECT * FROM assignment WHERE pd_ref='PD_2'")
or die(mysql_error());
?>

          

	
	
	<?php
  
    // keeps getting the next row until there are no more to get
    while($row = mysql_fetch_array( $result )) { ?>
  
 <table border="0" cellpadding="0" cellspacing="10" width="100%"><tr><td class="layout3"><a class="r" href="/W.P.-Supp.-70/A/B0019QE6GS.htm"><img alt="W.P. Supp. -70" border="0" height="75"  src="<? echo $row['url']; ?>" title="" width="75"></a></td>
 <td class="layout3 layout3Name" id="title" width="100%"><h3><a class="r" href="/W.P.-Supp.-70/A/B0019QE6GS.htm"><? echo $row['msmc_code']; ?><br /><? echo $row['mmc_code']; ?></a></h3><br><table border="0" cellpadding="2" cellspacing="0" class="savings"><tr><td align="left" class="our-label">
								Our Price:
							</td><td align="left" class="our"><? echo $row['price'];?></td></tr></table></td></tr>
 
    <?  echo "</td><td></div>"; 
   echo "</td><td>"; 
   echo "</td></tr>";
                
      } 
         echo "</table> ";

?>



        
 




</body>
</html>
