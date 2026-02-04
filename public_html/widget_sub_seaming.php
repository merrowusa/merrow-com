
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

 

<table width="760"><tr valign="top"><td ex:role="viewPanel"><table ex:role="lens" class="nobelist"><td>



         
     
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
     ex:href-subcontent="http://merrow.com/widget_sampleinfo.php?sample={{.label}}"
     
     onclick="return showThickbox(this);"> 
      <div class="learn" id="link">  <img src="/nebula/images/learnmore.jpg" alt="ko"> </a> </div> 
       <a class="thickbox" 
     ex:href-subcontent="http://merrow.com/widget_techspecs.php?machine={{.Machine}}"
     
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
             