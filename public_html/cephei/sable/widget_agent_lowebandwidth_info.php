 <script>
var RecaptchaOptions = {
   theme : 'white',
   tabindex : 2
};
</script>
 
 <? // Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT * FROM agents WHERE party_id='$val'")
or die(mysql_error()); ?> 

<?
// then define juju as the result array
 $agents = mysql_fetch_array($result); ?>
 
 <? 
  ?> 

<br>
<br>
<br>
<? if ($agents['account_name'] == null) { ?> 

fiddling with the URL eh? .... click <a href="http://www.fiddle.com/">here</a> to continue 

<? } elseif
    
	($agents['party_id'] == '767911') { ?> 
    
 fiddling with the URL eh? .... click <a href="http://www.fiddlerrecords.com/">here</a> to continue 
	
	<? } elseif 
	
	($agents['store'] == 'yes')  { ?>
    
     
<h2> the Merrow store for <? echo $agents['account_name']; ?> comes in two versions</h2>

<table width="400" border="0">
  <tr>
    <td><a href="http://merrow.com/cephei/sable/fp_dynamicstore.php?party_id=<? echo $agents['party_id']; ?>&choice=high&store=65533122844756220294">with a map</a></td>
    <td><a href="http://merrow.com/cephei/sable/fp_dynamicstore.php?party_id=<? echo $agents['party_id']; ?>&choice=low&store=65533122844756220294">without a map</a></td>
  </tr>
  <tr>
    <td>(high bandwidth)</td>
    <td>(low bandwidth)</td>
  </tr>
</table>


<div align="center"><br>
  <br>
  <br>
  <br>
</div>

   

<p align="center"> why do Merrow agents<a href="pop_ajaxcontent.php?height=360&width=460&subjectmatter=whystore" class="thickbox" title="your question: why do agents have a merrow store?"> have their own stores?</a> </p>



<div align="left"></div>
  <? } elseif ($key==null) { ?>
  
  <div class="title">
  <div>
  <b class="spiffy_AGENTS">
  <b class="spiffy_AGENTS1"><b></b></b>
  <b class="spiffy_AGENTS2"><b></b></b>
  <b class="spiffy_AGENTS3"></b>
  <b class="spiffy_AGENTS4"></b>
  <b class="spiffy_AGENTS5"></b></b>

  <div class="spiffy_AGENTSfg">
  
  <p> If you're looking for a Merrow Agent in  <strong> <? echo $agents['city']; ?> <? echo $agents['state']; ?></strong>, we've got one for you.</p><p>To contact them directly fill in the form below</p></div>
   <!-- content goes here -->
  </div>

  <b class="spiffy_AGENTS">
  <b class="spiffy_AGENTS5"></b>
  <b class="spiffy_AGENTS4"></b>
  <b class="spiffy_AGENTS3"></b>
  <b class="spiffy_AGENTS2"><b></b></b>
  <b class="spiffy_AGENTS1"><b></b></b></b>
</div>

  
 <div class="theform">
 
 
 <form action="sendmail.php" method="post">
<input name="party_id" type="hidden" value="<? echo $agents['party_id']; ?>" />
  
    <div class="entryfields">Your Name:
<input type="text" name="name" ><br>

Your E-Mail:
<input type="text" name="email" ><br>
</div>
 

<div class="messagetitle"> Message to<br />the agent here:</div>

<br> 
<textarea name="message" value"your message:"></textarea>
<br>
<br>
 <div class="captcha_agents">
<?
require_once('recaptchalib.php');
$publickey = "6LdHEwMAAAAAAEXb3hyJnaJ8ZPThABnn8B1WNHw5"; // you got this from the signup page
echo recaptcha_get_html($publickey);
?>
</div>

<? if ($key =='badcaptcha') { ?> <div class="bunk_captcha"> There was an error with your entry: please try again </div> <? } elseif ($key =='missingfields') { ?>  <div class="bunk_captcha"> oops .... looks like you forgot some required information </div><? } ?>

<input type="submit"  class="buttons" value="Send Message" name="submit">
    
    
    </form>
    
      <? } elseif ($key=='thankyou') { ?> <div class="title9" align="left">
  
  <p>   <strong>     Thank You ... <br><br></strong>the Merrow agent in <? echo $agents['city']; ?> <? echo $agents['state']; ?> will be contacting you shortly.</p><p> If you have questions in the mean time <br>feel free to send an email or call us directly.</p> </p></div><div class="bottomforms"> While you're waiting enjoy our selection of <a href="http://merrow.com/cephei/sable/fp_stitch.php">stitch samples</a></p><p> catch up on <a href="http://blog.merrow.com/">the blog</a></p><p>ask questions in <a href="http://merrow.ning.com/groups">the community groups</a></p><p> or go shopping in <a href="http://merrow.com/cephei/sable/fp_dynamicstore.php">our store</a></p></div>
  
  <? } elseif ($key!=null) { ?>
  
   <div class="title">
  
  <p> If you're looking for a Merrow Agent in  <strong> <? echo $agents['city']; ?> <? echo $agents['state']; ?></strong>, we've got one for you.</p><p>To contact them directly fill in the form below</p></div>
  

  
 <div class="theform">
 
 
 <form action="sendmail.php" method="post">
<input name="party_id" type="hidden" value="<? echo $agents['party_id']; ?>" />


  
    <div class="entryfields">Your Name:
<input type="text" name="name" >required<br>

Your E-Mail:
<input type="text" name="email" >required<br>
</div>
 

<div class="messagetitle"> Message to<br />the agent here:</div>

<br> 
<textarea name="message" value"your message:"></textarea>
<br>
<br>
 <div class="captcha">
 <?
require_once('recaptchalib.php');
$publickey = "6Lf99wIAAAAAAESGMFUDIHPUPXmppsNRRadK2Sgo"; // you got this from the signup page
echo recaptcha_get_html($publickey);
?>
</div>

<? if ($key =='badcaptcha') { ?> <div class="bunk_captcha"> There was an error with your entry: please try again </div> <? } elseif ($key =='missingfields') { ?>  <div class="bunk_captcha"> oops .... looks like you forgot some required information </div><? } ?>

<input type="submit"  class="buttons" value="Send Message" name="submit">
    
    
    </form>
    
    <? } ?>
  
  
    

	




</div>

   
 
  

  

  
</div>
 