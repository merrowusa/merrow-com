<?php

$scrub = $_GET['lang'];  
$nifty = $_COOKIE["lang"];


if ( $scrub!=null) { 
$lang = $_GET['lang']; }
elseif ($scrub = null) {
$lang = '$nifty'; }
  

if ( $scrub!=null) { 
setcookie("lang", "$scrub", time()+3600);


} else { } ?>


<?php include ("ip_lang_database.php") ?>

<? 

$wammo = $_GET['party_id']; 
$noire = $_GET['stitch']; 
$drhorrible = $_GET['app'];



?>




<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Merrow</title>
	
	<meta name="Author" content="Merrow, Inc.">
	<meta name="Category" content="products,sewingmachines">
	<meta name="Description" content="the worlds best sewing machines.">

	<meta name="Keywords" content="merrow,charlie,merrow machines">
	<meta name="viewport" content="width=1024">

<? if ($drhorrible == 'decorative') { ?>
    
     	 <link href="http://merrow.com/cephei/scripts/decseam.js" type="application/json" rel="exhibit/data" />
    
 <? } elseif ($drhorrible =='finishing') {?> 
    
          <link href="http://merrow.com/cephei/scripts/finishing.js" type="application/json" rel="exhibit/data" />
        
 <? } elseif ($drhorrible =='seaming') {?>
        
        
          <link href="http://merrow.com/cephei/scripts/decseam.js" type="application/json" rel="exhibit/data" />
             
              
 <? } else { ?>
               
        <link rel="exhibit/data" 
       type="application/jsonp"
       href="http://spreadsheets.google.com/feeds/list/o08268501926021654611.7566200901081157958/od6/public/basic?alt=json-in-script"
       ex:converter="googleSpreadsheets" />
                 
                    
 <? } ?> 

    <script type="text/javascript" src="http://static.simile.mit.edu/exhibit/api-2.0/exhibit-api.js"></script>       

 

<link rel="stylesheet" href="http://css.imerrow.com/css_major/thickbox.css" type="text/css" media="screen" />
     <link rel="stylesheet" href="http://css.imerrow.com/css_major/MIT_dummy.css" type="text/css" media="screen" />   
   
	<link rel="stylesheet" href="http://css.imerrow.com/css_major/base_vimeo.css" type="text/css" charset="utf-8">
	<link rel="stylesheet" href="http://css.imerrow.com/css_major/index_vimeo.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/whole_vimeo.css" type="text/css" charset="utf-8">

  

                 
        
 <script type="text/javascript" src="http://merrow.com/cephei/scripts/jquery.js"></script>
<script type="text/javascript" src="http://merrow.com/cephei/scripts/thickbox.js"></script>

 <script type="text/javascript">
  function showThickbox(a){
    var t = a.title || a.name || null;
    var g = a.rel || false;
    tb_show(t,a.href,g);
    a.blur();
    return false;
  };
</script>


<style type="text/css">
.spiffy{display:block}
.spiffy *{
  display:block;
  height:1px;
  overflow:hidden;
  font-size:.01em;
  background:#0F0101}
.spiffy1{
  margin-left:3px;
  margin-right:3px;
  padding-left:1px;
  padding-right:1px;
  border-left:1px solid #938585;
  border-right:1px solid #938585;
  background:#493b3b}
.spiffy2{
  margin-left:1px;
  margin-right:1px;
  padding-right:1px;
  padding-left:1px;
  border-left:1px solid #dfd1d1;
  border-right:1px solid #dfd1d1;
  background:#3b2d2d}
.spiffy3{
  margin-left:1px;
  margin-right:1px;
  border-left:1px solid #3b2d2d;
  border-right:1px solid #3b2d2d;}
.spiffy4{
  border-left:1px solid #938585;
  border-right:1px solid #938585}
.spiffy5{
  border-left:1px solid #493b3b;
  border-right:1px solid #493b3b}
.spiffyfg{
  background:#0F0101;
  width:980Ppx; }
div.column {
	width: 980px !important;
	margin-left: 0 !important;
}
</style>	
	
</head>
<!-- ##################  
	 menu
	 ################## -->	

					<? include ("widget_main_menu.php") ?>


<!-- ##################  
	 div classes for page do not edit
	 ################## -->	

<div id="container">
		<div id="main">
			<div id="content" class="grid3cola">
				
 <!-- ################## 
	 ################## -->	        
               <div class="column first sidebar">
<!-- ##################  
	 left column widgets
	 ################## -->					
                
				
			
            		
                    
					
				
                
              
 <!-- ################## 
	 ################## -->	
     			</div> <!-- /column.first -->				
                <div class="column">
<!-- ##################  
	 center column widgets
	 ################## -->	 
					
                    
                   

    


   
       
     <!-- ##################  
	// finishing stitch content
	// ################## -->	
    


   
    
              
            
   <!-- ##################  
	// seaming stitch content
	// ################## -->	
    
         
                 <td>
               <div class="h2" id="seachheader"> 
			   <? echo $tongue['decorative_edging_search']; ?>
                </div> 
          <div class="searchbar" id="bar">
             <div ex:role="facet" ex:facetClass="TextSearch">
             </div>
            </div>
          
          </td>
         
        
       <div class="resultBox">
       <div class="resultboxE">
       <div class="resultboxW">
       </div>
       </div>
       </div>          

 

<table id="centertable"><tr valign="top"><td ex:role="viewPanel"><table ex:role="lens" class="nobelist"><td>



         
     
    <div class="mainurl" id="mainimage">
    <a class="thickbox" 
      ex:href-subcontent="http://images.imerrow.com/images/big_main_465/{{.mainIMG}}.jpg"
     onclick="return showThickbox(this);"> 
     <img ex:src-subcontent="http://images.imerrow.com/images/main/{{.mainIMG}}.jpg" alt=""/></a></div>
     
     </td>
    
    
    <td valign="bottom" class="nobelist">  <div class="weebits"> 
    
    <div style="position: relative"><div class="itemThumbnail-blocker" id="nanana"></div>
                                      
    

     <div class="lilurl" id="image"> 
     <a class="thickbox" 
     ex:href-subcontent="http://images.imerrow.com/images/big_main_465/{{.nano1}}.jpg" 
    ex:if-exists=".nano1"
    onclick="return showThickbox(this);"> 
     <img ex:src-subcontent="http://images.imerrow.com/images/nano/{{.nano1}}.jpg" alt=""/></a></div>
     

     <div class="lilurl" id="image"> 
     <a class="thickbox" 
     ex:href-subcontent="http://images.imerrow.com/images/big_main_465/{{.nano2}}.jpg" 
    ex:if-exists=".nano1"
    onclick="return showThickbox(this);"> 
     <img ex:src-subcontent="http://images.imerrow.com/images/nano/{{.nano2}}.jpg" alt=""/></a></div>
     
  <div class="lilurl" id="image">   
   <a class="thickbox" 
      ex:href-subcontent="http://images.imerrow.com/images/big_main_465/{{.nano3}}.jpg"
     ex:if-exists=".nano3"
     onclick="return showThickbox(this);"> 
     <img ex:src-subcontent="http://images.imerrow.com/images/nano/{{.nano3}}.jpg" alt=""/></a></div>
     
  <div class="lilurl" id="image">     
  <a class="thickbox" 
     ex:href-subcontent="http://images.imerrow.com/images/big_main_465/{{.nano4}}.jpg"
     ex:if-exists=".nano4"
     onclick="return showThickbox(this);"> 
     <img ex:src-subcontent="http://images.imerrow.com/images/nano/{{.nano4}}.jpg" alt=""/></a></div>
    

     
     <div class="charlie">
                                     <div ex:if-exists=".Machine" class="co-winners">Machine Style: 
                               <span ex:content=".Machine"></span></div>
                                     <div ex:if-exists=".App" class="discipline">Application: 
                               <span ex:content=".App"></span></div>
                               <div ex:if-exists=".spi" class="year">Stitches per Inch: 
                               <span ex:content=".spi"></span></div></td>
      </div>
    <td>   
    
    <a class="thickbox" 
     ex:href-subcontent="http://merrow.com/cephei/sable/widget_sampleinfo.php?sample={{.label}}"
     
     onclick="return showThickbox(this);"> 
      <div class="learn" id="link">  <img src="/nebula/images/learnmore.jpg" alt="ko"> </a> </div> 
       <a class="thickbox" 
     ex:href-subcontent="http://merrow.com/cephei/sable/widget_techspecs.php?machine={{.Machine}}"
     
     onclick="return showThickbox(this);"> 
      <div class="tech" id="link">  <img src="/nebula/images/techspecs.jpg" alt="ko"> </a></div>
      </td>
  
  
</table>


 
      
                  			<div role="view" 
                            ex:viewClass="Thumbnail"
                            ex:showAll="false"
                           ex:abbreviatedCount="6" >
                    
             </div>
                    
                      <div ex:role="exhibit-view"
                   ex:viewClass="Exhibit.TabularView"
                   ex:columns=".Machine, .mainIMG, .App"
                   ex:columnLabels="Machine, Sample, Application"
                   ex:columnFormats="list, image, list"
                   ex:sortColumn="1"
                   ex:sortAscending="false">     
             </div>
             
       
<td width="25%">
            
               <div ex:role="facet" ex:expression=".App" ex:height="300px" ex:facetLabel=" <? echo $tongue['decorative_edging_application']; ?>"></div>
                   <br><span> <h2> <? echo $tongue['decorative_edging_sort']; ?> </h2> </span><br>
               <div ex:role="facet" ex:expression=".Process" ex:showMissing="false" ex:collapsed="false" ex:facetLabel="<? echo $tongue['decorative_edging_process']; ?>"></div>
               <div ex:role="facet" ex:expression=".Machine" ex:showMissing="false" ex:collapsed="false"ex:facetLabel="<? echo $tongue['decorative_edging_machine']; ?>"></div>
               <div ex:role="facet" ex:expression=".width" ex:showMissing="false"  ex:collapsed="false"ex:facetLabel="<? echo $tongue['decorative_edging_stitch_width']; ?>"></div>
               <div ex:role="facet" ex:sortMode="value" ex:showMissing="false" ex:expression=".spi"  ex:collapsed="false"ex:facetLabel="<? echo $tongue['decorative_edging_per_inch']; ?>"></div>
               <div ex:role="facet" ex:expression=".Fabric Type"  ex:showMissing="false" ex:collapsed="false" ex:facetLabel="<? echo $tongue['decorative_edging_fabric_type']; ?>"></div>
        
           
</td></table>
             

        
      
        
 <!-- ##################  
	// default stitch content
	// ################## -->

 <!-- ################## 
	 ################## -->	
     			</div> <!-- /column -->				
                <div class="column last sidebar">
  <!-- ##################  
	 right column widgets
	 ################## -->	 	
    			
				
					
				
  <!-- ################## 
	 ################## -->	               
                </div> <!-- /colum.last -->
    
  <!-- ##################  
	 FOOTER
	 ################## -->	
<div class="footer contain">
	<hr />

	
			
	<p>Copyright &copy; 2008 Merrow Inc. All Rights Reserved. Designated trademarks and brands are the property of their respective owners.</p>
	
</div><!-- }}} footer -->
			</div> <!-- /content -->
		</div> <!-- /container -->

	</div> <!-- /main -->
       <? include ('widget_analytics.php'); ?>
	</body>
    </html>