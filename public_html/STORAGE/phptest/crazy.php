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

<?php
//Gets the referer URL
$mdk = substr(getenv("HTTP_REFERER"), -14, 10);

echo $mdk;
?>
<br /><br /><br /><br /><br /><br /><br />


        <?php
#
mysql_connect("localhost", "merrowco_renter", "7679") or die(mysql_error());

#
mysql_select_db("merrowco_inventory") or die(mysql_error());


// Get all the data from the "example" table
$result = mysql_query("SELECT * FROM asin WHERE asin_id='$mdk'")
or die(mysql_error());
?>

<? $juju = mysql_fetch_array($result); ?>

<br />
<br />
323232
<br />
<br />
<? 
$mumu = $juju['pdclass'];
print $mumu; 
;?>

       
           <a href="<? echo $juju['imgurl_large'];?>"  rel="lightbox" title=" <? echo $row['asin_id']; ?> "><img src="<? echo $juju['imgurl_tiny'];?>" width="200" height="100" /></a>  
            
     
    <?  echo "</td><td></div>"; 
   echo "</td><td>"; 
   echo "</td></tr>";
                
    
         echo "</table> ";

?>     
            
            
        
            
      <table>      
            
       
       
       
       
             <br />

       
       
       
       
       
       
       
            
            
            <br />
        <?php
#


#
mysql_select_db("merrowco_inventory") or die(mysql_error());


// Get all the data from the "example" table
$result = mysql_query("SELECT * FROM asin WHERE pdclass='$mumu'")
or die(mysql_error());
?>

          

	
	
	<?php
  
    // keeps getting the next row until there are no more to get
    while($row = mysql_fetch_array( $result )) { ?>
  
 <table border="0" cellpadding="0" cellspacing="10" width="100%"><tr><td class="layout3"><a class="r" href="/W.P.-Supp.-70/A/B0019QE6GS.htm"><img alt="W.P. Supp. -70" border="0" height="75"  src="<? echo $row['imgurl_tiny']; ?>" title="" width="75"></a></td>
 <td class="layout3 layout3Name" id="title" width="100%"><h3><a class="r" href="/W.P.-Supp.-70/A/B0019QE6GS.htm"><? echo $row['msmc_code']; ?><br /><? echo $row['description']; ?></a></h3><br><table border="0" cellpadding="2" cellspacing="0" class="savings"><tr><td align="left" class="our-label">
								Our Price:
							</td><td align="left" class="our"><? echo $row['price_list'];?></td></tr></table></td></tr>
 
    <?  echo "</td><td></div>"; 
   echo "</td><td>"; 
   echo "</td></tr>";
                
      } 
         echo "</table> ";

?>


        
 




</body>
</html>
