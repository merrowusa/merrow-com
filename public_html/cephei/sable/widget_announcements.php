<? $tadpole = $_GET['drawers4']; 
	$ebay = $_GET['ebay']; 

?>


<? if ($tadpole == a) { ?>

<div class="cus" id="custext"> <? echo $tongue['drawer_4_body']; ?> </div>
<div class="cus" id="cusimagenb"> <img src="<? echo $tongue['drawer_4_picture']; ?>"></div>  

<? } elseif ($tadpole == b) { ?>

<div class="cus" id="custext"> <? echo $tongue['drawer_4_body1']; ?> </div>
<div class="cus" id="cusimage"> <img src="<? echo $tongue['drawer_4_picture1']; ?>"></div>

<? } elseif ($tadpole == c) { ?>

<div class="cus" id="custext"> <? echo $tongue['drawer_4_body2']; ?> </div>
 <div class="cus" id="cusimagenb"> <img src="<? echo $tongue['drawer_4_picture2']; ?>"></div>


   <? } elseif ($tadpole == d) { ?>
   

 <div class="cus" id="custextleft"> <? echo $tongue['drawer_4_body3']; ?> </div>
 <div class="cus" id="cusimage"> <img src="<? echo $tongue['drawer_4_picture3']; ?>"></div>
 
    <? } elseif ($ebay == a) { ?>
   

 <div class="cus" id="custitle"> <? echo $tongue['ebay_link_title']; ?> </div>
 <div class="cus" id="custextleft"> <? echo $tongue['ebay_paragraph1']; ?> </div>
  <div class="cus" id="custextleft"> <? echo $tongue['ebay_paragraph2']; ?> </div>
 <div class="cus" id="cusimage"> <img src="<? echo $tongue['drawer_4_picture3']; ?>"></div>


   <? } elseif ($tadpole == e) { ?>
   

 <div class="cus" id="custextleft"> <? echo $tongue['communication_link']; ?> </div>
 <div class="cus" id="cusimage"> <img src="<? echo $tongue['drawer_4_picture3']; ?>"></div>
<? } ?>