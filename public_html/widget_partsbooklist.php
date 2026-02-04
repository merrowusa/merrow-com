<? include ('widget_sql.php'); ?>
<script type="text/javascript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>

<style>

#2ndsearchb{
text-align: right;
position: relative;
	right: 30px;

}

</style>

<? $mdk =$_SERVER["REQUEST_URI"]; 
    $marketplace = $_GET['marketplace'];?>

<? if ($mdk=='/nebula/sable/ebay.php') {   ?>   


 <? } elseif ($marketplace=='ebay') { ?>
 
  
 
   <? } else { ?>

   <div class="box dark1" id="gallery1">
   
        <h2><a href="">Merrow Documentation</a></h2>
   
   <div id="wheretobuypromo"></div>

  <div class="stitches" id="secondset">
 <div class="little" id="label"> <p>Threading Diagrams</p></div>
    
    
   <? // Get all the data from the "agent_asin" table which is where our product info is kept
$result_t = mysql_query("SELECT * FROM threading_diagrams")
or die(mysql_error());

?>

 
  <select size="5" name="menu4" onchange="MM_jumpMenu('parent',this,0)" >
           
<? while($juju1 = mysql_fetch_array( $result_t )) { 
    $msmc = $juju1['name'];
    $url = $juju1['img_url'];
    $image = $juju1['image']; ?>	
    		
            <option value="<?$_SERVER['HTTP_REFERER'];?>?diagram=<? echo $image; ?>&showthemapicture=ohyeah">Diagram #<? echo $msmc; ?></option>
         <? }  ?>
         
          <option value="http://merrow.com/&showthemapicture=ohyeah">Diagram # TEST</option>
         
          </select>
   
         
        
         <div class="little" id="label"><p>Parts Books</p></div>
    
     <select size="6" name="menu4" onchange="MM_jumpMenu('parent',this,0)" >
   			<option value="http://merrow.com/agent_book/kiwifruit/partsbook/language/english/type/MG/setnum/72157606827670334/setnam/mgpartsbook">MG parts book (english)</option>
      	    <option value="http://merrow.com/agent_book/kiwifruit/partsbook/language/english/type/70/setnum/72157606828138530/setnam/70classbook">70 class parts book (english)</option>
			<option value="http://merrow.com/agent_book/kiwifruit/partsbook/language/english/type/crochet/setnum/72157606826978368/setnam/crochet">Crochet parts book(english)</option>
            <option value="http://merrow.com/agent_book/kiwifruit/partsbook/language/english/type/60/setnum/72157606826047178/setnam/60class">60 Class parts book(english)</option>
            <option value="http://merrow.com/agent_book/kiwifruit/partsbook/language/english/type/A/setnum/72157606832488303/setnam/Aclassparts">A Class parts book (english)</option>
          </select>

 </form>
 
 <div class="little" id="label"><p>Instruction Manuals</p></div>
 <select size="4" name="menu4" onchange="MM_jumpMenu('parent',this,0)" >
    <option value="http://merrow.com/agent_book/kiwifruit/instructions/language/english/type/MG/setnum/72157606829542814/setnam/mginstructions">MG instructions (english)</option>
     <option value="http://merrow.com/agent_book/kiwifruit/instructions/language/spanish/type/MG/setnum/72157606830005278/setnam/mgpspanishinstruction">MG instructions (spanish)</option>
     <option value="http://merrow.com/agent_book/kiwifruit/instructions/language/english/type/70/setnum/72157606831978449/setnam/70classinstructions">70 class instructions (english)</option>
   
          
          </select>

 </form>
                          
	<div class="little" id="label"> <p>Butt Seam Book</p></div>
	
			
	   
	   <select size="6" name="menu4" onchange="MM_jumpMenu('parent',this,0)" >
	     <option value="http://merrow.com/agent_book/kiwifruit/book/language/english/setnum/72157607489347906/setnam/english_book/type/BS">Butt Seam (english)</option>
	     <option value="http://merrow.com/agent_book/kiwifruit/book/language/portuguese/setnum/72157606583868719/setnam/rivitex_book/type/BS">Butt Seam (portuguese)</option>
	     <option value="http://merrow.com/agent_book/kiwifruit/book/language/turkish/setnum/72157606834081591/setnam/turkish_book/type/BS">Butt Seam (turkish)</option>
	     <option value="http://merrow.com/agent_book/kiwifruit/book/language/spanish/setnum/72157606834229615/setnam/spanish_book/type/BS">Butt Seam (spanish)</option>
	     <option value="http://merrow.com/agent_book/kiwifruit/book/language/mandarin/setnum/72157606831254410/setnam/mandarin_book/type/BS">Butt Seam (chinese)</option>
       </select>
	   

</form>


          
    </div>
    
  
     
<? } ?>
      
      
   					
						
<h3 class="last"><a href="http://merrow.com/merrow_stitching.php?app=mainpage&version=first"><? echo $tongue['stitch_selector_2']; ?> </a></h3>
							<p><a href="http://merrow.com/contact_general.php" class="more"><? echo $tongue['stitch_selector_3']; ?> </a></p></div>


					
	
					