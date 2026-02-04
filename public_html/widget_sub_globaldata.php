<?php
if(isset($_POST['submit'])) {
 
$to = "charlie@imerrow.com";
$subject = "CHARLIE MERROW";
$name_field = $_POST['name'];
$email_field = $_POST['email'];
$party_id = $_POST['party_id'];
$message99 = $_POST['message'];
$hoorequiredurl="http://merrow.com/widget_globaldatabase_form.php?key=missedafield";
$heerequiredurl="http://merrow.com/widget_globaldatabase_form.php?key=badcaptcha";
$haarequiredurl="http://merrow.com/global_analysis.php?planet=1";
$hiirequiredurl="http://merrow.com/global_plants.php?8787=$message99&33950019334xxlmmnot=$name_field&908234klsdfzwe38hna9f7s=$email_field";
$hyyrequiredurl="http://merrow.com/agent_pricing.php?8787=$message99&33950019334xxlmmnot=$name_field&908234klsdfzwe38hna9f7s=$email_field";
$body = "Testing";
$email = $_REQUEST['email'] ;
$message = $_REQUEST['message'] ;
$referer = $_SERVER['HTTP_REFERER'];
$browser = $_SERVER['HTTP_USER_AGENT'];
$ipaddress = $_SERVER['REMOTE_ADDR'];
$language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$time = date("H:i:s",time());
$date = date("m/d/y",time());

//foreach($_POST['check'] as $value) {
//$check_msg .= "Checked: $value\n";
//}
 
$application = $_POST['application'];
$urgency = $_POST['urgency'];
$sell = $_POST['sell'];
$MERMG = $_POST['MG'];
$MERM = $_POST['M'];
$MERA = $_POST['A'];
$MER60 = $_POST['60'];
$MER70 = $_POST['70'];
$MER72 = $_POST['72'];
$MER18 = $_POST['18'];
$MER22 = $_POST['22'];
$production_country = $_POST['production_country'];
$production_purpose = $_POST['production_purpose'];
$production_need = $_POST['production_need'];
$interested_machine = $_POST['interested_machine'];
$refd = $_COOKIE['refered_date'];
$refa = $_COOKIE['refered_agent'];
$prices = $_POST['prices'];
$planet = $_POST['planet'];

$whole = $message99 .$name_field .$email_field;


//require_once('recaptchalib.php');
//$privatekey = "6LdHEwMAAAAAAADftU0Jl_fHuM_NXEo_Ry5EzCPU";
//$resp = recaptcha_check_answer ($privatekey,
//                                $_SERVER["REMOTE_ADDR"],
 //                               $_POST["recaptcha_challenge_field"],
  //                              $_POST["recaptcha_response_field"]);

// if (!$resp->is_valid) {
//  die (header("Location: $heerequiredurl"));
//}


if ( ereg( "[\r\n]", $name ) || ereg( "[\r\n]", $email ) ) { }

if ($email_field==null) {  header("Location: $hoorequiredurl"); } else {
 
mysql_connect("localhost", "merrowco_renter", "7679") or die(mysql_error());
mysql_select_db("merrowco_inventory") or die(mysql_error());

$result = mysql_query("SELECT * FROM agent_word WHERE agent_id='$whole'")
or die(mysql_error());


// then define juju as the result array
 $parsnip = mysql_fetch_array($result); 
 
 

//mysql_query("INSERT INTO `customer_forms` VALUES (NULL, '$name_field', '$email_field', '$message99', '$time', '$date', '$language', '$ipaddress', '$browser', '$referer', '$party_id', '$application', '$urgency', '$sell', '$MERMG', '$MERM', '$MERA', '$MER60', '$MER70', '$MER72', '$MER18', '$MER22', '$production_country', '$production_purpose', '$production_need','not-assigned','please leave a note if you change anything on this screen','open','$interested_machine','$refd','$refa')"); 
 
}
 
if ($parsnip['table']==null) {header("Location: $haarequiredurl"); } elseif  ($prices!=null) { header("Location: $hyyrequiredurl"); } elseif  ($planet!=null) { header("Location: $hiirequiredurl"); } } 
?>





