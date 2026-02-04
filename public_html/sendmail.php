<?php




if(isset($_POST['submit'])) {
 
$to = "charlie@imerrow.com";
$subject = "CHARLIE MERROW";
$name_field = $_POST['name'];
$email_field = $_POST['email'];
$party_id = $_POST['party_id'];
$message99 = $_POST['message'];
$hoorequiredurl="http://merrow.com/agent_choice.php?key=missingfields&email=$email_field&party_id=$party_id";
$heerequiredurl="http://merrow.com/agent_choice.php?key=badcaptcha&email=$email_field&party_id=$party_id";
$hiirequiredurl="http://merrow.com/agent_choice.php?key=thankyou&email=$email_field&party_id=$party_id";
$body = "Testing";
$email = $_REQUEST['email'] ;
$message = $_REQUEST['message'] ;
$referer = $_SERVER['HTTP_REFERER'];
$browser = $_SERVER['HTTP_USER_AGENT'];
$ipaddress = $_SERVER['REMOTE_ADDR'];
$language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$time = date("d/m/y : H:i:s",time());



require_once('recaptchalib.php');
$privatekey = "6Lf99wIAAAAAADmLXTN9wmjgMXgj7VmKJE_qrya1";
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
mysql_query("INSERT INTO `customer_forms` VALUES ('$name_field', '$email_field', '$message99', '$time', '$language', '$ipaddress', '$browser', '$referer', '$party_id')"); 
 
}
 
if ($email_field==null) {header("Location: $hoorequiredurl"); } else {

mail($to, $subject, $body, $name_field);

}

if ($email_field==null) {header("Location: $hoorequiredurl"); } else {

if(!empty($hiirequiredurl)){header("Location: $hiirequiredurl");}}


 } else {

echo "blarg!";
echo $referer;
echo $browser;
echo $address;
echo $language;
echo $time;


}

?>





