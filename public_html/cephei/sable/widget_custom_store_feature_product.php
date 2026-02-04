<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	 <link rel="stylesheet" href="http://css.imerrow.com/css_major/thickbox.css" type="text/css" media="screen" />
     
     
</head>
<?

$dbname1 = $_COOKIE["dbname"];

if ($dbname1==null) { $dbname = $dbspecial; } else { $dbname = $_COOKIE["dbname"]; }
$party_id = $_GET['party_id'];
$unitstore = $_GET['unit_on_ur_knees'];

?>

<?

mysql_connect("localhost", "merrowco_renter", "7679") or die(mysql_error());
mysql_select_db("merrowco_cephei") or die(mysql_error()); 



   // Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT * FROM `$dbname`")
or die(mysql_error());

 // then define juju as the result array
 $agent_store = mysql_fetch_array($result); 
 
$location = $_GET['location'];
$unit = $_GET['unit'];
 
 ?>
 
<body>

<?php

// Our original decimal number

$number = $agent_store['custom_center_product'.$unit.'_price'];

$new_number = ereg_replace("[^A-Za-z0-9.]", "", $number );

// Let’s use PHP’s built-in function to format the number into US currency

$formatted = number_format($new_number,2,'.','');


// The following statement will print 21,357

$googleprice= "\$" .$formatted;



?>

<? if ($location == 'center') { ?>


<div class="product_name"> <? echo $agent_store['custom_center_product'.$unit.'_name']; ?> </div>
<div class="product_description"><? echo $agent_store['custom_center_product'.$unit.'_description']; ?> </div>
<div class="product_price">Price: <? echo $googleprice; ?></div>
<div class="product_image"> <img src="http://merrow.com/cephei/phpThumb/phpThumb.php?src=/cephei/public_images/uploads/<? echo $party_id.'/'.$unitstore; ?>.jpg&w=330" alt="merrow store image"> </div>





<form action="https://checkout.google.com/api/checkout/v2/checkoutForm/Merchant/257331237807643" id="BB_BuyButtonForm" method="post" name="BB_BuyButtonForm">
    <input name="item_name_1" type="hidden" value="<? echo $agent_store['custom_center_product'.$unit.'_name']; ?>"/>
    <input name="item_description_1" type="hidden" value="<? echo $agent_store['custom_center_product'.$unit.'_description']; ?>"/>
    <input name="item_quantity_1" type="hidden" value="1"/>
    <input name="item_price_1" type="hidden" value="<? echo $formatted; ?>"/>
    <input name="item_currency_1" type="hidden" value="USD"/>
    <input name="_charset_" type="hidden" value="utf-8"/>
    <input alt="" src="https://checkout.google.com/buttons/buy.gif?merchant_id=257331237807643&amp;w=117&amp;h=48&amp;style=white&amp;variant=text&amp;loc=en_US" type="image"/>
</form>


<? } ?>

<? if ($location == 'column') { ?>

<?php

// Our original decimal number

$number = $agent_store['custom_product'.$unit.'_price'];

$new_number = ereg_replace("[^A-Za-z0-9.]", "", $number );

// Let’s use PHP’s built-in function to format the number into US currency

$formatted = number_format($new_number,2,'.','');


// The following statement will print 21,357

$googleprice= "\$" .$formatted;


echo $unitstore;
?>


<div class="product_name"> <? echo $agent_store['custom_product'.$unit.'_name']; ?> </div>
<div class="product_description"><? echo $agent_store['custom_product'.$unit.'_description']; ?> </div>
<div class="product_price">Price: <? echo $googleprice; ?></div>
<div class="product_image"> <img src="http://merrow.com/cephei/phpThumb/phpThumb.php?src=/cephei/public_images/uploads/<? echo $party_id.'/'.$unitstore; ?>.jpg&w=330" alt="merrow store image"> </div>



<form action="https://checkout.google.com/api/checkout/v2/checkoutForm/Merchant/257331237807643" id="BB_BuyButtonForm" method="post" name="BB_BuyButtonForm">
    <input name="item_name_1" type="hidden" value="<? echo $agent_store['custom_product'.$unit.'_name']; ?>"/>
    <input name="item_description_1" type="hidden" value="<? echo $agent_store['custom_product'.$unit.'_description']; ?>"/>
    <input name="item_quantity_1" type="hidden" value="1"/>
    <input name="item_price_1" type="hidden" value="<? echo $formatted; ?>"/>
    <input name="item_currency_1" type="hidden" value="USD"/>
    <input name="_charset_" type="hidden" value="utf-8"/>
    <input alt="" src="https://checkout.google.com/buttons/buy.gif?merchant_id=257331237807643&amp;w=117&amp;h=48&amp;style=white&amp;variant=text&amp;loc=en_US" type="image"/>
</form>

<? } ?>




</body>
</html>
