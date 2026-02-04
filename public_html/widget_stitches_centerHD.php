<? 
							
$noire = $_GET['stitch']; 
$label = $_GET['label'];
$oneup = strtoupper($noire);
$setnumber = $_GET['setnum']; 
$setnumber1 = $_GET['setnum1']; 
$setname = $_GET['setnam'];
$res = $_GET['resolution'];
$marketplace= $_GET['marketplace'];
$store= $_GET['store'];



if ($label == '1453627189') { $blue='the Merrow Purl Stitch'; }
if ($label == '153627189') { $blue='the Emblem Edge by Merrow'; }
if ($label == '145362719') { $blue='the Merrow Shell stitch (both small and large)'; }
if ($label == '145362789') { $blue='the Merrow Blanket stitch'; }
if ($label == '145362189') { $blue='End to End seaming by Merrow'; }
if ($label == '145367189') { $blue='the Merrow Purl Stitch'; }
if ($label == '145327189') { $blue='general Crochet Stitches by Merrow'; }
if ($label == '145627189') { $blue='samples of the Netting Stitching by Merrow'; }
if ($label == '143627189') { $blue='General Overlock stitches by Merrow'; }
if ($label == '43627189') { $blue='Hosiery stitch samples by Merrow'; }



 // Get all the data from the "asin" table which is where our product info is kept
	$result = mysql_query("SELECT imgstoreurl, msmc_id, amzn_url,mmc_id, include_amazon FROM asin WHERE mmc_id='$stitch'")
		or die(mysql_error());
		 $juju = mysql_fetch_array($result); ?> 
 
  

			
                            
                             <? if ($res=='low') { ?>	  <strong id="descriptionpanelHD">  <? if ($label!=null) { ?> Now Viewing: <? } else {  echo $tongue['stitch_center_1']; }?>  <? echo $blue; ?> </strong></p>  <div id="rightsideHD"> for HD pictures click <? echo "<a href=\"http://merrow.com/stitchHD.php?marketplace=" .$marketplace . "&label=" .$label . "&setnum=" .$setnumber . "&setnam=" .$setname . "&resolution=high";  ?>">here</a></div> 					 
							
                            <? } elseif ($res=='high') { ?> 	<div class="header1"> <? echo $tongue['stitch_center_title']; ?> in HD</div> <strong id="descriptionpanelHD">  <? if ($label!=null) { ?> Now Viewing: <? } else {  echo $tongue['stitch_center_1']; }?> <? echo $blue; ?> </strong></p>  <div id="rightsideHD"> make 'em smaller <? echo "<a href=\"http://merrow.com/stitch.php?marketplace=" .$marketplace . "&label=" .$label . "&setnum1=" .$setnumber1 . "&setnam=" .$setname . "&resolution=low";  ?>">here</a></div> 		
							
							
							<? } elseif ($noire!=null) { ?> <strong id="descriptionpanelHD"> <? echo  $oneup; ?> 
							
							  
                        
                          
                         
                        
                            </strong></p> 
						
                        	<? } else {  ?> </strong></p> <? } ?>
							
							<? if ($val!='767911') {  } elseif ($juju['include_amazon']=='1') {  ?>
                                         
               <div id="buybutton_rightside"><a href="<? echo $juju['amzn_url']; ?>" target="_blank"><img name="" src="http://images.imerrow.com/images/buynow.jpg"  alt="buy_button" /></a></div>
                                
                                
                                
                                <? } ?>
                                

<div>
  <b class="spiffyhd">
  <b class="spiffyhd1"><b></b></b>
  <b class="spiffyhd2"><b></b></b>
  <b class="spiffyhd3"></b>
  <b class="spiffyhd4"></b>
  <b class="spiffyhd5"></b></b>

  <div class="spiffyhdfg">
    <!-- content goes here -->
  
     

    <div class="bigplayer" id="screen">
       <?php 


		
 if ($res=='high') { ?> 

<object width="950" height="545" align="middle"><param name="FlashVars" VALUE="ids=<? echo $setnumber; ?>&names=<? echo $setname; ?>&userName=merrowmachine&userId=25997048@N06&titles=on&source=sets&titles=on&displayNotes=on&thumbAutoHide=off&imageSize=original&vAlign=mid&displayZoom=on&vertOffset=0&initialScale=off&bgAlpha=80"></param><param name="PictoBrowser" value="http://www.db798.com/pictobrowser.swf"></param><param name="scale" value="noscale"></param><param name="bgcolor" value="#DDDDDD"></param><embed src="http://www.db798.com/pictobrowser.swf" FlashVars="ids=<? echo $setnumber; ?>&names=<? echo $setname; ?>&userName=merrowmachine&userId=25997048@N06&titles=on&source=sets&titles=on&displayNotes=on&thumbAutoHide=off&imageSize=original&vAlign=mid&displayZoom=on&vertOffset=0&initialScale=off&bgAlpha=80" loop="false" scale="noscale" bgcolor="#DDDDDD" width="950" height="545" name="PictoBrowser" align="middle"></embed></object>

<? } elseif ($res=='low') { ?> 

<object width="582" height="440" align="middle"><param name="FlashVars" VALUE="ids=<? echo $setnumber1; ?>&names=<? echo $setname; ?>&userName=merrowmachine&userId=25997048@N06&titles=on&source=sets&titles=on&displayNotes=on&thumbAutoHide=off&imageSize=original&vAlign=mid&displayZoom=on&vertOffset=0&initialScale=on&bgAlpha=80"></param><param name="PictoBrowser" value="http://www.db798.com/pictobrowser.swf"></param><param name="scale" value="noscale"></param><param name="bgcolor" value="#DDDDDD"></param><embed src="http://www.db798.com/pictobrowser.swf" FlashVars="ids=<? echo $setnumber1; ?>&names=<? echo $setname; ?>&userName=merrowmachine&userId=25997048@N06&titles=on&source=sets&titles=on&displayNotes=on&thumbAutoHide=off&imageSize=original&vAlign=mid&displayZoom=on&vertOffset=0&initialScale=on&bgAlpha=80" loop="false" scale="noscale" bgcolor="#DDDDDD" width="582" height="440" name="PictoBrowser" align="middle"></embed></object>


<? } elseif ($noire!=null) { ?>

<object width="582" height="440" align="middle"><param name="FlashVars" VALUE="ids=<? echo "$noire"; ?>&names=<? echo "$noire"; ?>&userName=merrowmachine&userId=25997048@N06&titles=on&source=keyword&titles=on&displayNotes=on&thumbAutoHide=off&imageSize=medium&vAlign=mid&displayZoom=off&vertOffset=0&initialScale=off&bgAlpha=80"></param><param name="PictoBrowser" value="http://www.db798.com/pictobrowser.swf"></param><param name="scale" value="noscale"></param><param name="bgcolor" value="#edebe9"></param><embed src="http://www.db798.com/pictobrowser.swf" FlashVars="ids=<? echo "$noire"; ?>&names=<? echo "$noire"; ?>&userName=merrowmachine&userId=25997048@N06&titles=on&source=keyword&titles=on&displayNotes=on&thumbAutoHide=off&imageSize=medium&vAlign=mid&displayZoom=off&vertOffset=0&initialScale=off&bgAlpha=80" loop="false" scale="noscale" bgcolor="#edebe9" width="582" height="440" name="PictoBrowser" align="middle"></embed></object>



<? } else { ?>





<object width="582" height="440" align="middle"><param name="FlashVars" VALUE="ids=72157607080597749&names=whystitch&userName=merrowmachine&userId=25997048@N06&titles=on&source=sets&titles=on&displayNotes=on&thumbAutoHide=off&imageSize=medium&vAlign=mid&displayZoom=off&vertOffset=0&initialScale=off&bgAlpha=80"></param><param name="PictoBrowser" value="http://www.db798.com/pictobrowser.swf"></param><param name="scale" value="noscale"></param><param name="bgcolor" value="#edebe9"></param><embed src="http://www.db798.com/pictobrowser.swf" FlashVars="ids=72157607080597749&names=whystitch&userName=merrowmachine&userId=25997048@N06&titles=on&source=sets&titles=on&displayNotes=on&thumbAutoHide=off&imageSize=medium&vAlign=mid&displayZoom=off&vertOffset=0&initialScale=off&bgAlpha=80" loop="false" scale="noscale" bgcolor="#edebe9" width="582" height="440" name="PictoBrowser" align="middle"></embed></object>

							
	<?	}		?>
    </div>       
</div>

  <b class="spiffyhd">
  <b class="spiffyhd5"></b>
  <b class="spiffyhd4"></b>
  <b class="spiffyhd3"></b>
  <b class="spiffyhd2"><b></b></b>
  <b class="spiffyhd1"><b></b></b></b>
</div>
