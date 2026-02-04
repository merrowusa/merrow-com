 <?php 
// for example: thispage.php?word=abracadabra 

$val = $_GET['keyword']; 
$section = $_GET['section'];
$keepmap = $_GET['keepmap'];

// for example: thispage.php?word=abracadabra 

if ($_GET['mediakeyword'] != null) {
$munt = $_GET['mediakeyword']; } 
elseif ($_GET['amzn'] != null) {
$hunt = $_GET['amzn']; } else {
$hunt = substr(getenv("HTTP_REFERER"), -14, 10); }

if ($munt != null) {

// then we connect to the database as renter and access table: inventory 
#
mysql_connect("localhost", "merrowco_renter", "7679") or die(mysql_error());

#
mysql_select_db("merrowco_inventory") or die(mysql_error());


// Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT * FROM asin WHERE media_keyword='$munt'")
or die(mysql_error());


}

else 

{ 

// then we connect to the database as renter and access table: inventory 
#
mysql_connect("localhost", "merrowco_renter", "7679") or die(mysql_error());

#
mysql_select_db("merrowco_inventory") or die(mysql_error());


// Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT * FROM asin WHERE asin_id='$hunt'")
or die(mysql_error());


 }  


// then define juju as the result array
 $juju1 = mysql_fetch_array($result); 
 $setnumber = $juju1['media_setnumber'];


?>




<div class="menu_container">
	<div>
  <br style="clear: left" />
    	</div>

				<div>
                      <b class="spiffy_amazon">
                      <b class="spiffy_amazon1"><b></b></b>
                      <b class="spiffy_amazon2"><b></b></b>
                      <b class="spiffy_amazon3"></b>
                      <b class="spiffy_amazon4"></b>
                      <b class="spiffy_amazon5"></b></b>

  								<div class="spiffy_amazonfg">
  
                                        <div id="menu_group">
                                        	<div class="indentmenu">
                                                      <ul>
                                                      <li><a href="http://merrow.com/widget_sub_lilthreadsize.php?mediakeyword=thread&setnumber=<? echo $juju1['media_setnumber']; ?>&rail=yes" target="_self">Thread Quantity</a></li>
                                                    
                                                     <li><a href="http://merrow.com/widget_sub_lilthreadapps.php?mediakeyword=thread&setnumber=<? echo $juju1['media_setnumber']; ?>&rail=yes" target="_self"><? echo $juju1['product_name']; ?> Applications</a></li>
                                                      
                                                       
                                                     <li><a href="http://merrow.com/widget_sub_lilthreadblog.php?mediakeyword=thread&setnumber=<? echo $juju1['media_setnumber']; ?>&rail=yes" target="_self">People Blogging about <? echo $juju1['product_name']; ?>  </a></li>
                                                    
                                                     
                                                     
                                                     
                                                     </ul>
                               <!-- content goes here -->
                                
											</div>
									  </div>

                  <b class="spiffy_amazon">
                  <b class="spiffy_amazon5"></b>
                  <b class="spiffy_amazon4"></b>
                  <b class="spiffy_amazon3"></b>
                  <b class="spiffy_amazon2"><b></b></b>
                  <b class="spiffy_amazon1"><b></b></b></b>
                  <br style="clear: left" />
                			
                            </div>

				</div>
             </div>
<? // } elseif ($mdk==null) { ?> <!--african swallows? eh? heh. they don't fly, pal<br />... they just don't fly. <br />now why would you go and haul such a nice<br /> looking page and drop it here<br /> <br /><br /><br /><---- looks both ways ------><!--it'just not great here, if you know what i'm saying. put me back. let me go home. <br /><br /><br />stop LOOKING at me! <br /><br />i feel, your, taking ad-vant-age of me.<br /><br /> dirty man. page raper. blaughhh   --> <? // } ?>