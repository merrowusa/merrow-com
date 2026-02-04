<? 
?> 

<script>
var RecaptchaOptions = {
   theme : 'white',
   tabindex : 2
};
</script>


<? $mature = $_GET['mature'];
$countryvalue = $_POST['country']; 
$planet = $_GET['planet'];
$prices = $_GET['prices'];
$pvte = $_GET['991212'];


?>



<div class="theformwhole">
 
 
 <form action="widget_sub_specialdata.php" method="post">
<?  if ($planet == '1') { ?>
<input name="planet" type="hidden" value="planets!!" /> <? } ?>
<?  if ($prices == '1') { ?>
<input name="prices" type="hidden" value="prices!!" /> <? } ?>


<input name="party_id" type="hidden" value="<? echo $agents['party_id']; ?>" />
<input name="production_country" type="hidden" value="<? echo $countryvalue; ?>" />
<input name="interested_machine" type="hidden" value="<? echo $planner['model']; ?>" />
<input name="pvte" type="hidden" value="<? echo $pvte; ?>" />


<div>
  <b class="spiffy_machine">
  <b class="spiffy_machine1"><b></b></b>
  <b class="spiffy_machine2"><b></b></b>
  <b class="spiffy_machine3"></b>
  <b class="spiffy_machine4"></b>
  <b class="spiffy_machine5"></b></b>

  <div class="spiffy_machinefg">
  <div class="titletop"> 
  
<? if ($key=='success') { ?> Thanks for sending us a note....<br><br>we'll be in touch quickly <br><br><br><br><h2> in the mean time take a look at our <a href="http://blog.merrow.com">blog</a> or have a go at the <a href="http://merrow.ning.com">community</a> site</h2> team Merrow <? } elseif ($mature=='mature') { ?> Need to produce Merrow(ed) goods in <? echo $countryvalue ?> ? <? } elseif ($key=='learnsupport') { ?>

 Want to learn more about our Support Program?
 
 <? } elseif ($key=='buy') { ?>
 
 Purchase the 
 
 <? echo $_GET['product']; ?> 
 from <? echo $agents['name']; ?>
 
 <? } elseif ($key=='samples') { ?> 
 
 Interested in the Merrow 
 
 <? echo $planner['model']; ?>? 
 
 <?  } elseif ($thefour=='1') { ?> 
 
 the Page you're looking for has moved...  
 
 <? } elseif ($planet=='1') { ?>  Login for Merrow Market Analysis <? } elseif ($prices=='1') { ?> Login for Wholesale Pricing <? } ?>
  </div> 
  
<? if ($key=='nano') { } elseif ($key=='buy') { ?>

<div class="machinequestions">

<!--customer type
<select size="1" name="production_purpose">
<option>please select</option>
<option>decorative edging</option>
<option>garment construction</option>
<option>other sewn good</option>
<option>textile finishing</option>
<option>crochet stitching</option>
</select><br> -->

</div>

<div class="miniheadline"> IMPORTANT!<br> are you:

<!--<select size="1" name="production_need">
<option>buying equipment for yourself</option>
<option selected>looking for a 3rd party manufacturer</option>
<option>buying equipment for a 3rd party...</option>
</select><br> -->

</div>

<?  } elseif ($thefour=='1') { ?>

<div class="machinequestions">

why don't you try....<br>

	
			<ul>
				    <li><a href="http://merrow.com/">the New Merrow.com</a> </li>
                    <li> <a href="http://merrow.com/merrow_stitching/app/mainpage/version/first/">the Application Configurator</a></li>
                    <li> <a href="http://merrow.com/support.html">the Support Pages</a> </li>
                 
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
<div class="more_pics"> or  <a href="http://merrow.com/stitch.php?marketplace=general&stitch=<? echo $new_name; ?>">View more Stitch Pictures</a></div>   <?  } } else { ?>
 
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
<div class="more_pics"> or  <a href="http://merrow.com/stitch.php?marketplace=general&stitch=<? echo $new_name; ?>">View more Stitch Pictures</a></div>

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
<? } elseif ($planet=='1') { ?>  <div class="machinequestions">
Merrow Market Analysis is a sophisticated tool that allows our agents to more effectively service and support the global market.  <? } elseif ($prices=='1') { ?> <div class="machinequestions">
The prices included herewith are subject to change. Current version released 2/1/09  <? } else { ?> 
 

<div class="example"> for examples of how it works, click here  </div></div>
<!--<div class="register"> Are you interested in sell<br></div><div class="form_buttons"> <input type="radio" value="yes" name="sell"> YES
<input type="radio" value="no" name="radio"> NO</div>
<div class="miniheadline"> do you (would you) use your machine for: 

<select size="1" name="application">
<option>industrial seaming</option>
<option>professional sample room</option>
<option>decorative edging</option>
</select><br> -->

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

    
  
<img name="merrow machine" src="http://images.imerrow.com/images/mg-4d45_209X245.jpg"  alt="">
  

</div>
 
 <div class="bulkoftheentrrygfields"> 
    <div class="entryfields">First Name:
<input type="text" name="name" ><br>

Last Name:
<input type="text" name="email" ><br>
</div>
<!--<div class="secondentry">Urgency of request
 
 <select size="1" name="urgency">

<option>urgent</option>
<option selected>normal</option>
<option>high</option>
<option>low</option>
</select><br>

</div>
 -->
<div class="messagetitle"> Key Code</div>

<br> 
<textarea name="message" value"your message:"></textarea>
<br>
<br>
<!-- <div class="captcha">
 <?
//require_once('recaptchalib.php');
//$publickey = "6LdHEwMAAAAAAEXb3hyJnaJ8ZPThABnn8B1WNHw5"; // you got this from the signup page
//echo recaptcha_get_html($publickey);
?>
</div> -->
<input type="submit"  class="form_buttons155" value="Login" name="submit">
<? if ($key==blubbersnot) { ?>

blubbersnot? what?


<? } elseif ($key =='badcaptcha') { ?> <div class="bunk_captcha"> There was an error with your captcha: please try again </div> <? } elseif ($key =='wrongpassword') { ?> <div class="netherlands"> ...oops your key does not match your login credentials, to reissue the key, name and email click here </div> <? } elseif ($key =='missedafield') { ?> <style> #content div.column div.theformwhole form div.bulkoftheentrrygfields div.entryfields input {
	background-color: yellow;
} </style> <div class="bunk_captcha"> oops .... looks like you forgot some required information </div><? } else {  } ?>




<? if ($key =='success') { } else { ?>

    
  <? } ?>  
    </form>
    
      


</div>
  
    
  
</div>
</div>
</div>
