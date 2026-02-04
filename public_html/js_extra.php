<? if ($_GET['form'] == 'complete') { ?>
<script type="text/javascript">
$(document).ready(function(){
$("#availableTitles").slideDown(100)
return false;
});
</script>
<? } ?>

<script type="text/javascript">
$(document).ready(function(){

//open stitch lab
$("div#fat.man").click(function(){
$("#availableTitles").slideToggle(500);

});

//collapse stitchlab
$("div.fat_boy").click(function(){
$("#availableTitles").slideUp(500)
return false;
});

$("p.close").click(function(){
$("#availableTitles").slideUp(500)
return false;
});

$("p.close").click(function(){
$("#availableTitles").slideUp(500)
return false;
});

/* FRONT PAGE CONTROLS */

$.doTimeout( 1000, function(){
$("#center_front_1").fadeOut(4000)
return false;
});

$.doTimeout( 5200, function(){
$("#center_front_2").fadeIn(4000)
return false;
});

 $("#brand.learn_submain").click(function () {
$("div.main_content").hide("slide", { direction: "left" }, 1000);
$.doTimeout( 1100, function(){
$("div.branded_content").show("slide", { direction: "right" }, 1000)
});
$("#brand.learn_submain").toggleClass("active");
$("div.close_brand").fadeIn(300);
return false;
});

$("div.close_brand").click(function () {
$("div.branded_content").hide("slide", { direction: "right" }, 1000);
$.doTimeout( 1100, function(){
$("div.main_content").show("slide", { direction: "left" }, 1000)
});
$("#brand.learn_submain").toggleClass("active");
$("div.close_brand").fadeOut(300);
return false;
}); 
$("div.return").click(function () {
$("div.branded_content").hide("slide", { direction: "right" }, 1000);
$.doTimeout( 1100, function(){
$("div.main_content").show("slide", { direction: "left" }, 1000)
});
$("#brand.learn_submain").toggleClass("active");
$("div.close_brand").fadeOut(300);
return false;
}); 
/* FRONT PAGE CONTROLS */

/* CONTENT PAGE CONTROLS */
$("div.stitch_button").click(function(){
$("#availableTitles").slideToggle(500);

});

});

</script>
<script type="text/javascript"> Cufon.now(); </script>
