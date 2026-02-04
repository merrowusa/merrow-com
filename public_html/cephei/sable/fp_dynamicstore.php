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

<?php

$band = $_GET['choice'];  
$bandwidth = $_COOKIE["choice"];


if ( $band!=null) { 
$bandwidth = $_GET['choice']; }
elseif ($band = null) {
$bandwidth = '$cookieband'; }
  

if ( $band!=null) { 
setcookie("choice", "$band", time()+3600);



} else { }

?>


<?php include ("ip_lang_database.php") ?>

<?  
 if ($wammo == '767911') {include ('fp_store.php'); }
 elseif ($wammo!= NULL) { $val = $wammo; include ('fp_store.php'); }
elseif ($two_letter_country_code=='TR') {$val = '11224'; include ('fp_store.php'); }
elseif ($two_letter_country_code=='AR') {$val = '10327'; include ('fp_store.php'); }
elseif ($two_letter_country_code=='AU') {$val = '10936'; include ('fp_store.php'); }
elseif ($two_letter_country_code=='BE') {$val = '10639'; include ('fp_store.php'); }
elseif ($two_letter_country_code=='BR') {$val = '10978'; include ('fp_store.php'); }
elseif ($two_letter_country_code=='CA') {$val = '10996'; include ('fp_store.php'); }
elseif ($two_letter_country_code=='CO') {$val = '10223'; include ('fp_store.php'); }
elseif ($two_letter_country_code=='DK') {$val = '10643'; include ('fp_store.php'); }
elseif ($two_letter_country_code=='EG') {$val = '10529'; include ('fp_store.php'); }
elseif ($two_letter_country_code=='EE') {$val = '10625'; include ('fp_store.php'); }
elseif ($two_letter_country_code=='FR') {$val = '10177'; include ('fp_store.php'); }
elseif ($two_letter_country_code=='DE') {$val = '11034'; include ('fp_store.php'); }
elseif ($two_letter_country_code=='GR') {$val = '10139'; include ('fp_store.php'); }
elseif ($two_letter_country_code=='HR') {$val = '12187'; include ('fp_store.php'); }
elseif ($two_letter_country_code=='HK') {$val = '11318'; include ('fp_store.php'); }
elseif ($two_letter_country_code=='IS') {$val = '10901'; include ('fp_store.php'); }
elseif ($two_letter_country_code=='IN') {$val = '10472'; include ('fp_store.php'); }
elseif ($two_letter_country_code=='IL') {$val = '11031'; include ('fp_store.php'); }
elseif ($two_letter_country_code=='JP') {$val = '10292'; include ('fp_store.php'); }
elseif ($two_letter_country_code=='KR') {$val = '10455'; include ('fp_store.php'); }
elseif ($two_letter_country_code=='MX') {$val = '10922'; include ('fp_store.php'); }
elseif ($two_letter_country_code=='NL') {$val = '10312'; include ('fp_store.php'); }
elseif ($two_letter_country_code=='NO') {$val = '10049'; include ('fp_store.php'); }
elseif ($two_letter_country_code=='PK') {$val = '10058'; include ('fp_store.php'); }
elseif ($two_letter_country_code=='PY') {$val = '12214'; include ('fp_store.php'); }
elseif ($two_letter_country_code=='PE') {$val = '12808'; include ('fp_store.php'); }
elseif ($two_letter_country_code=='PL') {$val = '10607'; include ('fp_store.php'); }
elseif ($two_letter_country_code=='PT') {$val = '10379'; include ('fp_store.php'); }
elseif ($two_letter_country_code=='RU') {$val = '10540'; include ('fp_store.php'); }
elseif ($two_letter_country_code=='ZA') {$val = '10028'; include ('fp_store.php'); }
elseif ($two_letter_country_code=='ES') {$val = '10943'; include ('fp_store.php'); }
elseif ($two_letter_country_code=='CH') {$val = '10419'; include ('fp_store.php'); }
elseif ($two_letter_country_code=='CN') {$val = '10388'; include ('fp_store.php'); }
elseif ($two_letter_country_code=='AE') {$val = '12856'; include ('fp_store.php'); }
elseif ($two_letter_country_code=='UK') {$val = '10725'; include ('fp_store.php'); }
elseif ($two_letter_country_code=='US') {$val = '767911'; include ('fp_store.php'); }

else  {$val == '767911'; include ('fp_store.php'); }
?>

<? // Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT * FROM agents WHERE party_id='$val'")
or die(mysql_error()); ?>


    