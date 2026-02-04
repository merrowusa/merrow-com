


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

?>

 <? if ($lang != null) {

   // Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT * FROM language WHERE language='$lang'")
or die(mysql_error());

} else { ?>

   <? // Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT * FROM language WHERE language='en'")
or die(mysql_error());

}?>


<?
// then define juju as the result array
 $tongue = mysql_fetch_array($result); 
 
?> 




<?


$IPaddress=$_SERVER['REMOTE_ADDR'];
$two_letter_country_code=iptocountry($IPaddress);

include("ip_files/countries.php");
$three_letter_country_code=$countries[ $two_letter_country_code][0];
$country_name=$countries[$two_letter_country_code][1];

	

function iptocountry($ip) {   
    $numbers = preg_split( "/\./", $ip);   
    include("ip_files/".$numbers[0].".php");
    $code=($numbers[0] * 16777216) + ($numbers[1] * 65536) + ($numbers[2] * 256) + ($numbers[3]);   
    foreach($ranges as $key => $value){
        if($key<=$code){
            if($ranges[$key][0]>=$code){$two_letter_country_code=$ranges[$key][1];break;}
            }
    }
    if ($two_letter_country_code==""){$two_letter_country_code="unkown";}
    return $two_letter_country_code;
}

?>


<?  

 if ($wammo!= NULL) { $val = $wammo;}
elseif ($two_letter_country_code=='TR') {$val = '11224'; }
elseif ($two_letter_country_code=='AR') {$val = '10327'; }
elseif ($two_letter_country_code=='AU') {$val = '10936'; }
elseif ($two_letter_country_code=='BE') {$val = '10639'; }
elseif ($two_letter_country_code=='BR') {$val = '10978'; }
elseif ($two_letter_country_code=='CA') {$val = '10996'; }
elseif ($two_letter_country_code=='CO') {$val = '10223'; }
elseif ($two_letter_country_code=='DK') {$val = '10643'; }
elseif ($two_letter_country_code=='EG') {$val = '10529'; }
elseif ($two_letter_country_code=='EE') {$val = '10625'; }
elseif ($two_letter_country_code=='FR') {$val = '10177'; }
elseif ($two_letter_country_code=='DE') {$val = '11034'; }
elseif ($two_letter_country_code=='GR') {$val = '10139'; }
elseif ($two_letter_country_code=='HR') {$val = '12187'; }
elseif ($two_letter_country_code=='HK') {$val = '11318'; }
elseif ($two_letter_country_code=='IS') {$val = '10901'; }
elseif ($two_letter_country_code=='IN') {$val = '10472'; }
elseif ($two_letter_country_code=='IL') {$val = '11031'; }
elseif ($two_letter_country_code=='JP') {$val = '10292'; }
elseif ($two_letter_country_code=='KR') {$val = '10455'; }
elseif ($two_letter_country_code=='MX') {$val = '10922'; }
elseif ($two_letter_country_code=='NL') {$val = '10312'; }
elseif ($two_letter_country_code=='NO') {$val = '10049'; }
elseif ($two_letter_country_code=='PK') {$val = '10058'; }
elseif ($two_letter_country_code=='PY') {$val = '12214'; }
elseif ($two_letter_country_code=='PE') {$val = '12808'; }
elseif ($two_letter_country_code=='PL') {$val = '10607'; }
elseif ($two_letter_country_code=='PT') {$val = '10379'; }
elseif ($two_letter_country_code=='RU') {$val = '10540'; }
elseif ($two_letter_country_code=='ZA') {$val = '10028'; }
elseif ($two_letter_country_code=='ES') {$val = '10943'; }
elseif ($two_letter_country_code=='CH') {$val = '10419'; }
elseif ($two_letter_country_code=='CN') {$val = '10388'; }
elseif ($two_letter_country_code=='AE') {$val = '12856'; }
elseif ($two_letter_country_code=='UK') {$val = '10725'; }
elseif ($two_letter_country_code=='US') {$val = '767911'; }

else {$val = '767911'; }

 ?>
 
  <? // Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT * FROM agents WHERE party_id='$val'")
or die(mysql_error()); ?> 

<?
// then define juju as the result array
 $agents = mysql_fetch_array($result); ?>




