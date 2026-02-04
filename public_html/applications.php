<?php

$scrub = $_GET['lang'];  
$nifty = $_COOKIE["lang"];


if ( $scrub!=null) { 
$lang = $_GET['lang']; }
elseif ($scrub = null) {
$lang = '$nifty'; }
  

if ( $scrub!=null) { 
setcookie("lang", "$scrub", time()+3600);


} else { }

?>


<?php include ("ip_lang_database.php") ?>

<? 

$wammo = $_GET['party_id']; 
$noire = $_GET['stitch']; 
$drhorrible = $_GET['app'];



?>




<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title>Merrow Overlock Serger and Sewing Application Configurator</title>
	
	<meta name="Author" content="Merrow, Inc.">
	<meta name="Category" content="products,sewingmachines">
	<meta name="Description" content="Merrow: the worlds best sewing machines.">
	<meta name="Keywords" content="merrow,charlie merrow,merrow machines,sewing machines,sergers,merrow stitch,merrow stitching">
	<meta name="viewport" content="width=1024">
	

     <? if ($drhorrible == 'decorative') { ?>
    
     	 <link href="http://merrow.com/cephei/scripts/decseam.js" type="application/json" rel="exhibit/data" />
    
 <? } elseif ($drhorrible =='finishing') {?> 
    
          <link href="http://merrow.com/cephei/scripts/finishing.js" type="application/json" rel="exhibit/data" />
        
 <? } elseif ($drhorrible =='seaming') {?>
        
        
          <link href="http://merrow.com/cephei/scripts/decseam.js" type="application/json" rel="exhibit/data" />
             
              
 <? } else { ?>
               
      
                    
 <? } ?> 
             


    <script type="text/javascript" src="http://static.simile.mit.edu/exhibit/api-2.0/exhibit-api.js"></script>       

 

	
    
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/thickbox.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/base_vimeo.css" type="text/css" charset="utf-8">
	<link rel="stylesheet" href="http://css.imerrow.com/css_major/index_vimeo.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/whole_vimeo.css" type="text/css" charset="utf-8">
     <link rel="stylesheet" href="http://css.imerrow.com/css_major/MIT_dummy.css" type="text/css" charset="utf-8">
     
<style type="text/css" media="all"> @import "http://merrowservices.s3.amazonaws.com/css/services_cleanup.css";
</style>
  <style>
  
  
  
 
div.exhibit-collectionView-header {
	height: 30px;
	position: relative;
}


</style>

                 
        
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

</head>





<!-- ##################  
	 menu
	 ################## -->	

		<? include ("widget_main_google_menu.php") ?>





<!-- ##################  
//	 div classes for page do not edit
//	 ################## -->	

<div id="container">
		<div id="main">
			<div id="content" class="grid3cola">
				
 <!-- ################## 
//	 ################## -->	        
               <div class="column first sidebar">
<!-- ##################  
//	 left column widgets
//	 ################## -->					
                
   <? if ($drhorrible == 'decorative') { ?>				
			
            		                
		  <div class="box dark1" id="gallery1">
   
        <h2><a href="">Sample Settings</a></h2>
   
   <div id="wheretobuypromo"></div>

  <div class="stitches" id="secondset">
 <div class="little" id="label"> <p>Applications</p></div>
 
 
              <div ex:role="facet" ex:expression=".App" ex:height="300px" ex:facetLabel=" <? echo $tongue['decorative_edging_application']; ?>"></div>
                   <br><span> <h2> <? echo $tongue['decorative_edging_sort']; ?> </h2> </span><br>
               <div ex:role="facet" ex:expression=".Machine" ex:height="300px" ex:showMissing="false" ex:collapsed="false"ex:facetLabel="<? echo $tongue['decorative_edging_machine']; ?>"></div>

        	
			
            		
     </div>
     </div>     
                    
					
				
              
 <!-- ################## 
	// ################## -->	
		  </div> <!-- /column.first -->				
              <div class="column">
<!-- ##################  
	// center column widgets
	// ################## -->	 
					
                <div class="trap">
               
                  <div id="content">
                  <div class="header"> The Merrow Application Configurator </div><div class="searchbarnote">search  apps</div>
                   
          <div class="searchbar" id="bar">
             <div ex:role="facet" ex:facetClass="TextSearch">
             </div>
            </div>
           

 
    <div ex:role="viewPanel" style="padding: 1em 0.5in;"> <table ex:role="lens" class="nobelist" style="display: none;">
    
    

    <tr>
    <td> 
    
    
      <div class="biggerimages" id="sandbox"> <a class="thickbox" id="bigimage" 
      ex:href-subcontent="http://images.imerrow.com/images/big_main_465/{{.mainIMG}}.jpg"
     onclick="return showThickbox(this);"> 
        <img ex:src-subcontent="http://images.imerrow.com/images/main/{{.mainIMG}}.jpg" alt=""/></a></div>
     
<div class="lilurl_all"> 

       <div class="lilurl" id="image1"> 
     <a class="thickbox" 
     ex:href-subcontent="http://images.imerrow.com/images/big_main_465/{{.nano1}}.jpg" 
    ex:if-exists=".nano1"
    onclick="return showThickbox(this);"> 
     <img ex:src-subcontent="http://images.imerrow.com/images/nano/{{.nano1}}.jpg" alt=""/></a></div>
     

     
     <div class="lilurl" id="image2"> 
     <a class="thickbox" 
     ex:href-subcontent="http://images.imerrow.com/images/big_main_465/{{.nano2}}.jpg" 
    ex:if-exists=".nano1"
    onclick="return showThickbox(this);"> 
     <img ex:src-subcontent="http://images.imerrow.com/images/nano/{{.nano2}}.jpg" alt=""/></a></div>
 
  
         
  <div class="lilurl" id="image3">   
   <a class="thickbox" 
      ex:href-subcontent="http://images.imerrow.com/images/big_main_465/{{.nano3}}.jpg"
     ex:if-exists=".nano3"
     onclick="return showThickbox(this);"> 
     <img ex:src-subcontent="http://images.imerrow.com/images/nano/{{.nano3}}.jpg" alt=""/></a></div>
   
   
       
  <div class="lilurl" id="image4">     
  <a class="thickbox" 
     ex:href-subcontent="http://images.imerrow.com/images/big_main_465/{{.nano4}}.jpg"
     ex:if-exists=".nano4"
     onclick="return showThickbox(this);"> 
     <img ex:src-subcontent="http://images.imerrow.com/images/nano/{{.nano4}}.jpg" alt=""/></a></div>
    
  </div>
     
     
  
            </td>
               <td> 
                
                 <div class="boxes"
                 <div class="charlie">
                                     <div ex:if-exists=".Machine" class="co-winners">Machine Style: 
                               <span ex:content=".Machine"></span></div>
                                     <div ex:if-exists=".App" class="discipline">Application: 
                               <span ex:content=".App"></span></div>
                               <div ex:if-exists=".spi" class="year">Stitches per Inch: 
                               <span ex:content=".spi"></span></div>
                               <div class="one" id="link">
            <a nancy="thickbox" ex:href-subcontent="http://merrow.com/contact_general/label/{{.label}}/key/samples"> 
     <img src="http://images.imerrow.com/images/learnmore.jpg" alt="ko"> </a> </div> </td>
		  </div>
                </div>
                  
                 

            </td>
            <td>
            <div class="buttons"
              
       
    
        </div>
            </td>
        </tr></table>
       
        
      
        <div ex:role="view"
            ex:label="Details"
            ex:viewClass="Tile"
            ex:showAll="false"
            ex:orders=".discipline, .nobel-year"
            ex:abbreviatedCount="5"
            ex:possibleOrders=".label, .last-name, .discipline, .relationship, .shared, .deceased, .nobel-year">
        </div>
        
    </div>
    
</div>

</div>
				
             		
				
  
             
 <!-- ################## 
//	 ################## -->	
     			</div> <!-- /column -->				
                <div class="column last sidebar">
  <!-- ##################  
//	 right column widgets
//	 ################## -->	 	
    			
					  <div class="box dark1" id="gallery1">
   
        <h2><a href="">Stitch Requirements</a></h2>
   
   <div id="wheretobuypromo"></div>

  <div class="stitches" id="secondset">
 <div class="little" id="label"> <p>Stitch Settings</p></div>
 
 
              <div ex:role="facet" ex:expression=".width" ex:showMissing="false"  ex:collapsed="false"ex:facetLabel="<? echo $tongue['decorative_edging_stitch_width']; ?>"></div>
               <div ex:role="facet" ex:sortMode="value" ex:showMissing="false" ex:expression=".spi"  ex:collapsed="false"ex:facetLabel="<? echo $tongue['decorative_edging_per_inch']; ?>"></div>
               <div ex:role="facet" ex:expression=".Fabric Type"  ex:showMissing="false" ex:collapsed="false" ex:facetLabel="<? echo $tongue['decorative_edging_fabric_type']; ?>"></div>


        	
			
            		
     </div>
     </div>
     
     <? } elseif ($drhorrible =='finishing') {?>
     
     	  <div class="box dark1" id="gallery1">
   
        <h2><a href="">Sample Settings</a></h2>
   
   <div id="wheretobuypromo"></div>

  <div class="stitches" id="secondset">
 <div class="little" id="label"> <p>Conditions</p></div>
 
    <div ex:role="facet" ex:expression=".wet" ex:height="70px"  ex:showMissing="false" ex:facetLabel="<? echo $tongue['textile_finishing_wet_dry']; ?>"></div>
 <div ex:role="facet" ex:expression=".ps" ex:showMissing="false" ex:collapsed="false"  ex:height="500px" ex:facetLabel="<? echo $tongue['textile_finishing_problem_solver']; ?>"></div>
                                 
               

        	
			
            		
     </div>
     </div>     
                    
					
				
              
 <!-- ################## 
	// ################## -->	
		  </div> <!-- /column.first -->				
              <div class="column">
<!-- ##################  
	// center column widgets
	// ################## -->	 
					
                <div class="trap">
               
                  <div id="content">
                  <div class="header"> The Merrow Application Configurator </div><div class="searchbarnote">search  apps</div>
                   
          <div class="searchbar" id="bar">
             <div ex:role="facet" ex:facetClass="TextSearch">
             </div>
            </div>


 
    <div ex:role="viewPanel" style="padding: 1em 0.5in;"> <table ex:role="lens" class="nobelist" style="display: none;">
    
    

    <tr>
    <td> 
    
    
      <div class="biggerimages" id="sandbox"> <a class="thickbox" id="bigimage" 
      ex:href-subcontent="http://images.imerrow.com/images/big_main_465/{{.mainIMG}}.jpg"
     onclick="return showThickbox(this);"> 
        <img ex:src-subcontent="http://images.imerrow.com/images/main/{{.mainIMG}}.jpg" alt=""/></a></div>
     
<div class="lilurl_all"> 

       <div class="lilurl" id="image1"> 
     <a class="thickbox" 
     ex:href-subcontent="http://images.imerrow.com/images/big_main_465/{{.nano1}}.jpg" 
    ex:if-exists=".nano1"
    onclick="return showThickbox(this);"> 
     <img ex:src-subcontent="http://images.imerrow.com/images/nano/{{.nano1}}.jpg" alt=""/></a></div>
     

     
     <div class="lilurl" id="image2"> 
     <a class="thickbox" 
     ex:href-subcontent="http://images.imerrow.com/images/big_main_465/{{.nano2}}.jpg" 
    ex:if-exists=".nano1"
    onclick="return showThickbox(this);"> 
     <img ex:src-subcontent="http://images.imerrow.com/images/nano/{{.nano2}}.jpg" alt=""/></a></div>
 
  
         
  <div class="lilurl" id="image3">   
   <a class="thickbox" 
      ex:href-subcontent="http://images.imerrow.com/images/big_main_465/{{.nano3}}.jpg"
     ex:if-exists=".nano3"
     onclick="return showThickbox(this);"> 
     <img ex:src-subcontent="http://images.imerrow.com/images/nano/{{.nano3}}.jpg" alt=""/></a></div>
   
   
       
  <div class="lilurl" id="image4">     
  <a class="thickbox" 
     ex:href-subcontent="http://images.imerrow.com/images/big_main_465/{{.nano4}}.jpg"
     ex:if-exists=".nano4"
     onclick="return showThickbox(this);"> 
     <img ex:src-subcontent="http://images.imerrow.com/images/nano/{{.nano4}}.jpg" alt=""/></a></div>
    
  </div>
     
     
  
            </td>
               <td> 
                
                 <div class="boxes"
                 <div class="charlie">
                                     <div ex:if-exists=".Machine" class="co-winners">Machine Style: 
                               <span ex:content=".Machine"></span></div>
                                     <div ex:if-exists=".App" class="discipline">Application: 
                               <span ex:content=".App"></span></div>
                               <div ex:if-exists=".spi" class="year">Stitches per Inch: 
                               <span ex:content=".spi"></span></div>
                                <a nancy="thickbox" ex:href-subcontent="http://merrow.com/contact_general/label/{{.label}}/key/samples"> 
     <img src="http://images.imerrow.com/images/learnmore.jpg" alt="ko"> </a></td>
		  </div>
                </div>
                  
                 

            </td>
            <td>
            <div class="buttons"
             
        </div>
            </td>
        </tr></table>
       
        
      
        <div ex:role="view"
            ex:label="Details"
            ex:viewClass="Tile"
            ex:showAll="false"
            ex:orders=".discipline, .nobel-year"
            ex:abbreviatedCount="5"
            ex:possibleOrders=".label, .last-name, .discipline, .relationship, .shared, .deceased, .nobel-year">
        </div>
        
    </div>
    
</div>

</div>
				
             		
				
  
             
 <!-- ################## 
//	 ################## -->	
     			</div> <!-- /column -->				
                <div class="column last sidebar">
  <!-- ##################  
//	 right column widgets
//	 ################## -->	 	
    			
					  <div class="box dark1" id="gallery1">
   
        <h2><a href="">Stitch Requirements</a></h2>
   
   <div id="wheretobuypromo"></div>

  <div class="stitches" id="secondset">
 <div class="little" id="label"> <p>Stitch Settings</p></div>
 
 
            
              <div ex:role="facet" ex:expression=".Fabric Type" ex:showMissing="false" ex:collapsed="false"ex:facetLabel="<? echo $tongue['textile_finishing_fabric_type']; ?>"></div>
              <br><span> <h2> <? echo $tongue['decorative_edging_sort']; ?> </h2> </span><br>
               <div ex:role="facet" ex:expression=".Machine"  ex:height="300px" ex:showMissing="false" ex:collapsed="false" ex:facetLabel="<? echo $tongue['textile_finishing_machine_style']; ?>"></div> 
               <div ex:role="facet" ex:sortMode="value" ex:showMissing="false" ex:expression=".spi"  ex:collapsed="false"ex:facetLabel="<? echo $tongue['textile_finishing_stitches_per']; ?>"></div>
            

        	
			
            		
     </div>
     </div>
     
     <? } elseif ($drhorrible =='seaming') {?>
     
     	  <div class="box dark1" id="gallery1">
   
        <h2><a href="">Sample Settings</a></h2>
   
   <div id="wheretobuypromo"></div>

  <div class="stitches" id="secondset">
 <div class="little" id="label"> <p>Applications</p></div>
 
 
              <div ex:role="facet" ex:expression=".App" ex:height="300px" ex:facetLabel=" <? echo $tongue['decorative_edging_application']; ?>"></div>
                   <br><span> <h2> <? echo $tongue['decorative_edging_sort']; ?> </h2> </span><br>
               <div ex:role="facet" ex:expression=".Machine" ex:height="300px" ex:showMissing="false" ex:collapsed="false"ex:facetLabel="<? echo $tongue['decorative_edging_machine']; ?>"></div>

        	
			
            		
     </div>
     </div>     
                    
					
				
              
 <!-- ################## 
	// ################## -->	
		  </div> <!-- /column.first -->				
              <div class="column">
<!-- ##################  
	// center column widgets
	// ################## -->	 
					
                <div class="trap">
               
                  <div id="content">
                  <div class="header"> The Merrow Application Configurator </div><div class="searchbarnote">search  apps</div>
                   
          <div class="searchbar" id="bar">
             <div ex:role="facet" ex:facetClass="TextSearch">
             </div>
            </div>


 
    <div ex:role="viewPanel" style="padding: 1em 0.5in;"> <table ex:role="lens" class="nobelist" style="display: none;">
    
    

    <tr>
    <td> 
    
    
      <div class="biggerimages" id="sandbox"> <a class="thickbox" id="bigimage" 
      ex:href-subcontent="http://images.imerrow.com/images/big_main_465/{{.mainIMG}}.jpg"
     onclick="return showThickbox(this);"> 
        <img ex:src-subcontent="http://images.imerrow.com/images/main/{{.mainIMG}}.jpg" alt=""/></a></div>
     
<div class="lilurl_all"> 

       <div class="lilurl" id="image1"> 
     <a class="thickbox" 
     ex:href-subcontent="http://images.imerrow.com/images/big_main_465/{{.nano1}}.jpg" 
    ex:if-exists=".nano1"
    onclick="return showThickbox(this);"> 
     <img ex:src-subcontent="http://images.imerrow.com/images/nano/{{.nano1}}.jpg" alt=""/></a></div>
     

     
     <div class="lilurl" id="image2"> 
     <a class="thickbox" 
     ex:href-subcontent="http://images.imerrow.com/images/big_main_465/{{.nano2}}.jpg" 
    ex:if-exists=".nano1"
    onclick="return showThickbox(this);"> 
     <img ex:src-subcontent="http://images.imerrow.com/images/nano/{{.nano2}}.jpg" alt=""/></a></div>
 
  
         
  <div class="lilurl" id="image3">   
   <a class="thickbox" 
      ex:href-subcontent="http://images.imerrow.com/images/big_main_465/{{.nano3}}.jpg"
     ex:if-exists=".nano3"
     onclick="return showThickbox(this);"> 
     <img ex:src-subcontent="http://images.imerrow.com/images/nano/{{.nano3}}.jpg" alt=""/></a></div>
   
   
       
  <div class="lilurl" id="image4">     
  <a class="thickbox" 
     ex:href-subcontent="http://images.imerrow.com/images/big_main_465/{{.nano4}}.jpg"
     ex:if-exists=".nano4"
     onclick="return showThickbox(this);"> 
     <img ex:src-subcontent="http://images.imerrow.com/images/nano/{{.nano4}}.jpg" alt=""/></a></div>
    
  </div>
     
     
  
            </td>
               <td> 
                
                 <div class="boxes"
                 <div class="charlie">
                                     <div ex:if-exists=".Machine" class="co-winners">Machine Style: 
                               <span ex:content=".Machine"></span></div>
                                     <div ex:if-exists=".App" class="discipline">Application: 
                               <span ex:content=".App"></span></div>
                               <div ex:if-exists=".spi" class="year">Stitches per Inch: 
                               <span ex:content=".spi"></span></div>
                                <a nancy="thickbox" ex:href-subcontent="http://merrow.com/contact_general/label/{{.label}}/key/samples"> 
     <img src="http://images.imerrow.com/images/learnmore.jpg" alt="ko"> </a></td>
		  </div>
                </div>
                  
                 

            </td>
            <td>
            <div class="buttons"
             
        </div>
            </td>
        </tr></table>
       
        
      
        <div ex:role="view"
            ex:label="Details"
            ex:viewClass="Tile"
            ex:showAll="false"
            ex:orders=".discipline, .nobel-year"
            ex:abbreviatedCount="5"
            ex:possibleOrders=".label, .last-name, .discipline, .relationship, .shared, .deceased, .nobel-year">
        </div>
        
    </div>
    
</div>

</div>
				
             		
				
  
             
 <!-- ################## 
//	 ################## -->	
     			</div> <!-- /column -->				
                <div class="column last sidebar">
  <!-- ##################  
//	 right column widgets
//	 ################## -->	 	
    			
					  <div class="box dark1" id="gallery1">
   
        <h2><a href="">Stitch Requirements</a></h2>
   
   <div id="wheretobuypromo"></div>

  <div class="stitches" id="secondset">
 <div class="little" id="label"> <p>Stitch Settings</p></div>
 
 
              <div ex:role="facet" ex:expression=".width" ex:showMissing="false"  ex:collapsed="false"ex:facetLabel="<? echo $tongue['decorative_edging_stitch_width']; ?>"></div>
               <div ex:role="facet" ex:sortMode="value" ex:showMissing="false" ex:expression=".spi"  ex:collapsed="false"ex:facetLabel="<? echo $tongue['decorative_edging_per_inch']; ?>"></div>
               <div ex:role="facet" ex:expression=".Fabric Type"  ex:showMissing="false" ex:collapsed="false" ex:facetLabel="<? echo $tongue['decorative_edging_fabric_type']; ?>"></div>


        	
			
            		
     </div>
     </div>
     
     <? } ?> 
					
				
  <!-- ################## 
//	 ################## -->	               
                </div> <!-- /colum.last -->
    
  <!-- ##################  
//	 FOOTER
//	 ################## -->	

<div class="footer contain">
	<hr />

	
			
	<p>Copyright &copy; 2009 Merrow Inc. All Rights Reserved. Designated trademarks and brands are the property of their respective owners.</p>
	
</div><!-- }}} footer -->

   <? include ('widget_analytics.php'); ?>
	</body>
    </html>
			