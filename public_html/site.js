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
   
   $.doTimeout( 2000, function(){
   $("#center_front_1").fadeOut(4000)
   return false;
   });
   
   $.doTimeout( 6305, function(){
   $("#center_front_2").fadeIn(4500)
   return false;
   });
   
  
  $("#brand.learn_submain").click(function () {
  $("div.main_content").fadeOut(2000);
  $.doTimeout( 2100, function(){
  $("div.branded_content").fadeIn(1000)
  });
  $("#brand.learn_submain").toggleClass("active");
  $("div.close_brand").fadeIn(300);
  return false;
  });
  
  $("div.close_brand").click(function () {
  $("div.branded_content").fadeOut(2000);
  $.doTimeout( 2100, function(){
  $("div.main_content").fadeIn(1000)
  });
  $("#brand.learn_submain").toggleClass("active");
  $("div.close_brand").fadeOut(300);
  return false;
  }); 
  $("div.return").click(function () {
  $("div.branded_content").fadeOut(2000);
  $.doTimeout( 2100, function(){
  $("div.main_content").fadeIn(1000)
  });
  $("#brand.learn_submain").toggleClass("active");
  $("div.close_brand").fadeOut(300);
  return false;
  }); 
  
  
  
    /*    $("#brand.learn_submain").click(function () {
   $("div.main_content").hide("slide", { direction: "left" }, 1000);
   $.doTimeout( 900, function(){
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
FRONT PAGE CONTROLS */
   
   /* CONTENT PAGE CONTROLS */
   $("div.stitch_button").click(function(){
   $("#availableTitles").slideToggle(500);
   
   });
   
   });
   
   </script>

   <div id="fb-root"></div>
   <script>(function(d, s, id) {
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) return;
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=154223121308337";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));</script>
   
   
 