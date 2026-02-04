<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
  <?php 
// for example: thispage.php?word=abracadabra 


$noire = $_GET['stitch']; 
 // NOTE THIS IS AN ADDED VARIABLE DO NOT REPLACE THIS SECTION WITHOUT ADDING THIS VARIABLE
 
$kiwi = $_GET['kiwifruit']; 
$language = $_GET['language']; 
$type = $_GET['type']; 
$setnumber = $_GET['setnum']; 
$setname = $_GET['setnam'];
$diagram = $_GET['diagram']; 
$showthemapicture = $_GET['showthemapicture'];

$themix = "$type $kiwi $language";
$thepdf = "$type-$kiwi-$language";


?> 
  
  <div class="box" id="videos">
						 <td class="right"> <h2>
						<? if ($themix=='MG instructions english') 
						{ echo 'MG Class Setup and Instruction book in english'; }
						 elseif ($themix=='70 instructions english')
						  { echo '70 Class Instructions in english'; }
						   elseif  ($themix=='MG instructions spanish')
						    { echo 'MG Class instructions in spanish'; }
							  elseif  ($themix=='BS book english')
						    { echo 'the Merrow End to End seaming book in english'; }
							   elseif  ($themix=='BS book portuguese')
						    { echo 'the Merrow End to End seaming book in portuguese'; }
							 elseif  ($themix=='BS book turkish')
						    { echo 'the Merrow End to End seaming book in turkish'; }
							 elseif  ($themix=='BS book spanish')
						    { echo 'the Merrow End to End seaming book in spanish'; }
							 elseif  ($themix=='BS book mandarin')
						    { echo 'the Merrow End to End seaming book in mandarin'; }
							  elseif  ($themix=='MG partsbook english')
						    { echo 'MG Class parts book (the Green book)'; }
								  elseif  ($themix=='70 partsbook english')
						    { echo '70 Class parts book (the Grey book)'; }
							 	  elseif  ($themix=='60 partsbook english')
						    { echo '60 Class parts book (the Purple book)'; }
							  elseif  ($themix=='A partsbook english')
						    { echo 'A Class parts book (the Black book)'; }
								  elseif  ($themix=='crochet partsbook english')
						    { echo 'Crochet Machine parts book (the  other Green book)'; }
							 elseif  ($kiwi==null)
						    { echo 'The Manual Viewer &amp; Downloader'; }
							 ?>
                            
                            
                        </h2>
    </td>						
						 <div class="padder">
							<div class="download" id="me">
                              <? if ($diagram!=null) { ?> <p class="downloadthisboook">to view a close-up of this threading diagram: <strong id="descriptionpanel">  
                              
                              <a href="widget_sub_threading.php?height=650&width=925&diagram=<? echo $diagram; ?>" title="merrow threading diagrams" class="thickbox">click here</a>  

                           
                              
                             
							  <? } elseif ($kiwi==null) { ?> <p class="downloadthisboook">Download this book: <strong id="descriptionpanel">  please select a book....  
                              <? } else { ?><p class="downloadthisboook">Download this book: <strong id="descriptionpanel"> 
							<? echo '<a href="http://merrow.com/cephei/downloads/Merrow-'?><? echo $thepdf ?>.pdf">click here</a> <? } ?>
							
					
                          </strong></p>
						  </div>
                          
 

<? if ($showthemapicture=='ohyeah'){ ?>

  
         <? // Get all the data from the "agent_asin" table which is where our product info is kept
$result2 = mysql_query("SELECT * FROM `threading_diagrams` WHERE image='$diagram'")
or die(mysql_error());


 $suju = mysql_fetch_array($result2); 

?>
 		

<div class="threadheader" id="tech">Thread Diagram Number: <? echo $suju['name']; ?> <br /></div><br /> 
<div id="threadingpic"> <img name="threading_diagram" src="http://images.imerrow.com/images/threadingdiagrams/medium/<? echo $diagram; ?>"  width="550" "alt=""> </div>

<? } elseif ($kiwi!=null) 
						{ ?> <object width="582" height="540" align="middle"><param name="FlashVars" VALUE="ids=<? echo $setnumber; ?>&names=<? echo $setname; ?>&userName=merrowmachine&userId=25997048@N06&titles=on&source=sets&titles=on&displayNotes=on&thumbAutoHide=off&imageSize=original&vAlign=mid&displayZoom=on&vertOffset=0&initialScale=on&bgAlpha=80"></param><param name="PictoBrowser" value="http://www.db798.com/pictobrowser.swf"></param><param name="scale" value="noscale"></param><param name="bgcolor" value="#DDDDDD"></param><embed src="http://www.db798.com/pictobrowser.swf" FlashVars="ids=<? echo $setnumber; ?>&names=<? echo $setname; ?>&userName=merrowmachine&userId=25997048@N06&titles=on&source=sets&titles=on&displayNotes=on&thumbAutoHide=off&imageSize=original&vAlign=mid&displayZoom=on&vertOffset=0&initialScale=on&bgAlpha=80" loop="false" scale="noscale" bgcolor="#DDDDDD" width="582" height="540" name="PictoBrowser" align="middle"></embed></object> 
                        
                        
                        
                         <? }	 else { ?>   
                         
                          <img name="arrows" src="http://images.imerrow.com/images/manual_front.png"  alt="arrows" />                      
                          


		<? } ?>
						</div> <!-- /padder -->

						<!--<div class="boxcap"></div> -->
					</div> <!-- /stitches -->
                 