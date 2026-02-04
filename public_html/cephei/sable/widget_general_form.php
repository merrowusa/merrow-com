<? 

$label = $_GET['label'];

$result16 = mysql_query("SELECT * FROM samples WHERE label='$label'")
		or die(mysql_error());
		 $planner = mysql_fetch_array($result16); ?> 

<script>
var RecaptchaOptions = {
   theme : 'white',
   tabindex : 2
};
</script>


<? $mature = $_GET['mature'];
$countryvalue = $_POST['country']; 

?>

<div class="theformwhole">
 
 
 <form action="widget_sub_datamover.php" method="post">
<input name="party_id" type="hidden" value="<? echo $agents['party_id']; ?>" />
<input name="production_country" type="hidden" value="<? echo $countryvalue; ?>" />
<input name="interested_machine" type="hidden" value="<? echo $planner['model']; ?>" />

<div>
  <b class="spiffy_machine">
  <b class="spiffy_machine1"><b></b></b>
  <b class="spiffy_machine2"><b></b></b>
  <b class="spiffy_machine3"></b>
  <b class="spiffy_machine4"></b>
  <b class="spiffy_machine5"></b></b>

  <div class="spiffy_machinefg">
  <div class="titletop"> 
<? if ($key=='success') { ?> Thanks for sending us a note....<br><br>we'll be in touch quickly <br><br><br><br><h2> in the mean time take a look at our <a href="http://blog.merrow.com">blog</a> or have a go at the <a href="http://merrow.ning.com">community</a> site</h2> team Merrow <? } elseif ($mature=='mature') { ?> Need to produce Merrow(ed) goods in <? echo $countryvalue ?> ? <? } elseif ($key=='learnsupport') { ?> Want to learn more about our Support Program?<? } elseif ($key=='buy') { ?>Purchase the <? echo $_GET['product']; ?> from <? echo $agents['name']; ?><? } elseif ($key=='samples') { ?> Interested in the Merrow <? echo $planner['model']; ?>? <?  } elseif ($thefour=='1') { ?> the Page you're looking for has moved...  <? } else { ?>  Do you own a Merrow machine? <? } ?>
  </div> 
  
<? if ($key=='success') { } elseif ($key=='buy') { ?>

<div class="machinequestions">

customer type
<select size="1" name="production_purpose">
<option>please select</option>
<option>decorative edging</option>
<option>garment construction</option>
<option>other sewn good</option>
<option>textile finishing</option>
<option>crochet stitching</option>
</select><br>

</div>

<div class="miniheadline"> IMPORTANT!<br> are you:

<select size="1" name="production_need">
<option>buying equipment for yourself</option>
<option selected>looking for a 3rd party manufacturer</option>
<option>buying equipment for a 3rd party...</option>
</select><br>

</div>

<?  } elseif ($thefour=='1') { ?>

<div class="machinequestions">

why don't you try....<br>

	
			<ul>
				    <li><a href="http://merrow.com/cephei/sable/fp_needle_configurator.php"> the Needle Configurator</a> </li>
                    <li> <a href="http://merrow.com/cephei/sable/fp_merrow_stitching.php?app=mainpage&version=store">the Application Configurator</a></li>
                    <li> <a href="http://merrow.com/cephei/sable/fp_support.php">our Support Pages</a> </li>
                 
			</ul>
				
		
          Or send us a note

</div>



<? } elseif ($key=='samples') {  if ($planner['whyunique']!=null) { ?>

<div class="H3">

 <? echo $planner['whyunique']; ?></div> <div class="machinequestions"> send us a note <br>we'd be happy to tell you more.... </div>
 
 <? 

 $string = $planner['model'];
 $new_name = ereg_replace("[^A-Za-z0-9.]", "", $string );
 $new_name = strtolower($new_name);
 
  $result17 = mysql_query("SELECT * FROM avail_models WHERE model_c='$new_name'")
		or die(mysql_error());
		 $verify = mysql_fetch_array($result17);
 


if ($verify['model']!=null) { ?>
<div class="more_pics"> or  <a href="http://merrow.com/cephei/sable/fp_stitch.php?marketplace=general&stitch=<? echo $new_name; ?>">View more Stitch Pictures</a></div>   <?  } } else { ?>
 
 <div class="machinequestions">

send us a note... we have many more stitch samples and more information available upon request </div>

 <? 

 $string = $planner['model'];
 $new_name = ereg_replace("[^A-Za-z0-9.]", "", $string );
 $new_name = strtolower($new_name);
 
  $result17 = mysql_query("SELECT * FROM avail_models WHERE model_c='$new_name'")
		or die(mysql_error());
		 $verify = mysql_fetch_array($result17);
 


if ($verify['model']!=null) { ?>
<div class="more_pics"> or  <a href="http://merrow.com/cephei/sable/fp_stitch.php?marketplace=general&stitch=<? echo $new_name; ?>">View more Stitch Pictures</a></div>

<? } } } elseif ($mature=='mature') {  ?> 

 <div class="machinequestions">

type of production
<select size="1" name="production_purpose">
<option>please select</option>
<option>decorative edging</option>
<option>garment construction</option>
<option>other sewn good</option>
<option>textile finishing</option>
<option>crochet stitching</option>
</select><br>

</div>

<div class="miniheadline"> IMPORTANT!<br> are you:

<select size="1" name="production_need">
<option>buying equipment for yourself</option>
<option selected>looking for a 3rd party manufacturer</option>
<option>buying equipment for a 3rd party...</option>
</select><br> 

</div>
<? } else { ?> 
  <div class="machinequestions">

MG Class <input type="text" name="MG" >
70 Class <input type="text" name="M" ><br>
M Class <input type="text" name="A" >
72 Class <input type="text" name="60" ><br>
A Class <input type="text" name="70" >
60 Class <input type="text" name="72" ><br>
18 Class <input type="text" name="18" >
22 Class <input type="text" name="22" >
<div class="example"> (the blank is for quantity)  </div></div>
<div class="register"> are you interested in selling your products on Merrow.com?<br></div><div class="form_buttons"> <input type="radio" value="yes" name="sell"> YES
<input type="radio" value="no" name="radio"> NO</div>
<div class="miniheadline"> do you (would you) use your machine for: 

<select size="1" name="application">
<option>industrial seaming</option>
<option>professional sample room</option>
<option>decorative edging</option>
</select><br>


</div>
<? } ?> 

  <!-- content goes here above this to stay ... um.... 'spiffy'... ;) yeah that's not funny -->
  </div>

  <b class="spiffy_machine">
  <b class="spiffy_machine5"></b>
  <b class="spiffy_machine4"></b>
  <b class="spiffy_machine3"></b>
  <b class="spiffy_machine2"><b></b></b>
  <b class="spiffy_machine1"><b></b></b></b>
</div>


<div class="contactinfo">  

      <p class="topcontact"> our Contact Information:</p>
  
 <p> email: info@merrow.com<br>
  skype: merrowusa<br>
  jabber: merrow<br></p>
  
 <p> phone: 508.295.8899 /800.431.6677<br>
  fax: 508.295.8897</p>
  

</div>
 
 <div class="bulkoftheentrrygfields"> 
    <div class="entryfields">Your Name:
<input type="text" name="name" ><br>

Your E-Mail:
<input type="text" name="email" ><br>
</div>
<div class="secondentry">Urgency of request
 
 <select size="1" name="urgency">

<option>urgent</option>
<option selected>normal</option>
<option>high</option>
<option>low</option>
</select><br>

</div>

<div class="messagetitle"> Message </div>

<br> 
<textarea name="message" value"your message:"></textarea>
<br>
<br>
 <div class="captcha">
 <?
require_once('recaptchalib.php');
$publickey = "6LdHEwMAAAAAAEXb3hyJnaJ8ZPThABnn8B1WNHw5"; // you got this from the signup page
echo recaptcha_get_html($publickey);
?>
</div>
<input type="submit"  class="form_buttons1" value="Send Message" name="submit">
<? if ($key==blubbersnot) { ?>

blubbersnot? what?


<? } elseif ($key =='badcaptcha') { ?> <div class="bunk_captcha"> There was an error with your captcha: please try again </div> <? } elseif ($key =='missedafield') { ?> <style> #content div.column div.theformwhole form div.bulkoftheentrrygfields div.entryfields input {
	background-color: yellow;
} </style> <div class="bunk_captcha"> oops .... looks like you forgot some required information </div><? } else { ?> <div class="captcha_clarification">
If the 'captcha' is hard to read click on the button (on the captcha) just to the left of this comment, to reload the two words 
</div> <? } ?>




<? if ($key =='success') { } else { ?>

    
  <? } ?>  
    </form>
    
      


</div>
  
    
  
</div>
</div>
</div>
