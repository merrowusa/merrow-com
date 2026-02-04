<?php




if(isset($_POST['submit'])) {
 
$to = "charlie@imerrow.com";
$subject = "CHARLIE MERROW";
$name_field = $_POST['name'];
$email_field = $_POST['email'];
$party_id = $_POST['party_id'];
$message99 = $_POST['message'];
$hoorequiredurl="http://merrow.com/cephei/sable/fp_contact_general.php?key=missedafield";
$heerequiredurl="http://merrow.com/cephei/sable/fp_contact_general.php?key=badcaptcha";
$hiirequiredurl="http://merrow.com/cephei/sable/fp_contact_general.php?key=success";
$body = "Testing";
$email = $_REQUEST['email'] ;
$message = $_REQUEST['message'] ;
$referer = $_SERVER['HTTP_REFERER'];
$browser = $_SERVER['HTTP_USER_AGENT'];
$ipaddress = $_SERVER['REMOTE_ADDR'];
$language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$time = date("H:i:s",time());
$date = date("m/d/y",time());

foreach($_POST['check'] as $value) {
$check_msg .= "Checked: $value\n";
}
 
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




require_once('recaptchalib.php');
$privatekey = "6LdHEwMAAAAAAADftU0Jl_fHuM_NXEo_Ry5EzCPU";
$resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

if (!$resp->is_valid) {
  die (header("Location: $heerequiredurl"));
}


if ( ereg( "[\r\n]", $name ) || ereg( "[\r\n]", $email ) ) { }

if ($email_field==null) {  header("Location: $hoorequiredurl"); } else {
 
mysql_connect("localhost", "merrowco_mailman", "7679") or die(mysql_error());
mysql_select_db("merrowco_inventory") or die(mysql_error());
mysql_query("INSERT INTO `customer_forms` VALUES (NULL, '$name_field', '$email_field', '$message99', '$time', '$date', '$language', '$ipaddress', '$browser', '$referer', '$party_id', '$application', '$urgency', '$sell', '$MERMG', '$MERM', '$MERA', '$MER60', '$MER70', '$MER72', '$MER18', '$MER22', '$production_country', '$production_purpose', '$production_need','not-assigned','please leave a note if you change anything on this screen','open','$interested_machine')"); 
 
}
 
if ($email_field==null) {header("Location: $hoorequiredurl"); } else {

mail($to, $subject, $body, $name_field);

}

if ($email_field==null) {header("Location: $hoorequiredurl"); } else {header("Location: $hiirequiredurl"); } } 
?>





