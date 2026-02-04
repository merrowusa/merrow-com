	
 <!-- YOU NEED TO USE THIS STYLE AND SCRIPT IN THE CONTAINER PAGE
 
    <link href="http://css.imerrow.com/hoverbox/hoverbox.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="http://css.imerrow.com/lightbox.css" type="text/css" media="screen" />
<script type="text/javascript" src="http://merrow.com/cephei/scripts/lightbox.js"></script>


END TECHNICAL PAGE SCRIPT AND STUFF ---> 
    
    	<div class="box" id="technical">
						<h2></h2>
						<div class="padder">
        
        
        
<?

//defining fufu as a machine ID for the product allows us to determine wherther or not the part in question gets a machine menu or a partsbook and list of parts where 2 is the descriminator and fufu is random//

?>
<? if ($mval!='key') { ?>

<div class="techheader" id="tech">you're viewing: <? echo $juju['class']; ?> class technical information </div>
<br />
<br /> 
<div class="technical" id="text"><? echo $juju[$noodle]; ?></div>




<? } else if ($mval='key') { ?>


<!--- THIS IS WHERE WE GET THE PARTS BOOK --> 


<div class="techheader" id="tech">you're viewing: the <? echo $huhu['msmc_id']; ?> parts book </div>
<br />

<? include($huhu['book_page']); ?>

<!--- END GETTING THE PARTS BOOK --> 


<? } elseif ($noodle=='howto'){ ?>

<div class="techheader" id="tech">How to use this menu: <br /></div><br /> <div class="technical" id="text" > the Menu on the left is divided into general classes of our Sewing Machines <br /> <br> MG Class -- or all Green sergers <br>  70 Class -- most often used for textile finishing <br>Crochet Machines -- or all 'high-arm' sewing machines. These machines use straight needles and latch hooks instead of loopers <br><br /> The menu includes setup guides, operation guides and parts diagrams<br /><br /> For video support please go <a href="http://merrow.com/video.html">here</a> <br><br> we're here to help, please <a href="http://merrow.com/contact_general.php">let us know</a> if there is anything else we can do.</div><br><br> 
<br />

<? } elseif ($noodle=='thankyou'){ ?>

<div class="techheader" id="tech">Thanks for your input<br /></div><br /> <div class="technical" id="text" > We will do the best we can to make changes based on your suggestions and questions. <br><br /> To offer a more detailed suggestion please go <a href="http://merrow.com/contact_general.php">here</a> </div><br><br> 
<br />


<? } elseif ($noodle=='error'){ ?>

<div class="techheader" id="redtech">PLEASE ADD YOUR EMAIL ADDRESS<br /></div><br /> <div class="technical" id="text" > without your email address we cannot read and process your comment <br><br /> To offer a more detailed suggestion please go <a href="http://merrow.com/contact_general.php">here</a> </div><br><br> 
<br />

<? } elseif ($showthemapicture=='ohyeah'){ ?>

  
         <? // Get all the data from the "agent_asin" table which is where our product info is kept
$result2 = mysql_query("SELECT * FROM `threading_diagrams` WHERE image='$diagram'")
or die(mysql_error());


 $suju = mysql_fetch_array($result2); 

?>
 		

<div class="techheader" id="tech">Thread Diagram Number: <? echo $suju['name']; ?> <br /></div><br /> 
<div id="threadingpic"> <img name="threading_diagram" src="http://images.imerrow.com/images/threadingdiagrams/medium/<? echo $diagram; ?>"  width="550" "alt="" /></div>


<? } else { ?>



<div class="techheader" id="tech">welcome to Merrow's technical help guide <br /></div><br /> <div class="technical" id="text" > if you have trouble finding what you're looking for please contact us directly: <br /> <br> domestic phone: 800.431.6677 <br>  email: help@merrow.com <br> skype: merrowusa <br> jabber: merrowhelp@gmail.com <br /> international phone: 508.295.8899  <br /> US &amp; INT fax: 508.295.8897 <br><br> we're here to help!</div><br><br> 
<br />

<? } ?>

<br /> 

          </div>
          </div>