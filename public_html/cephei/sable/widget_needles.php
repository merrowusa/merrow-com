<div id="content">
    <div id="title-panel">
      <h1>Merrow Sewing Needle Configurator</h1>
    </div>
    

    
            <div>
  <b class="spiffy_needles">
  <b class="spiffy_needles1"><b></b></b>
  <b class="spiffy_needles2"><b></b></b>
  <b class="spiffy_needles3"></b>
  <b class="spiffy_needles4"></b>
  <b class="spiffy_needles5"></b></b>

  <div class="spiffy_needlesfg">
    
    <div id="top-panels">

        <table width="100%"><tr>
              <td><div ex:role="facet" ex:expression=".size" ex:facetLabel="Merrow Class Size"></div></td>
                <td><div ex:role="facet" ex:expression=".name" ex:facetLabel="Merrow Name"></div></td>
            <td><div ex:role="facet" ex:expression=".metric" ex:facetLabel="Metric Size"></div></td>
            <td><div ex:role="facet" ex:expression=".linear" ex:facetLabel="Curved"></div></td>
            <td><div ex:role="facet" ex:expression=".point" ex:facetLabel="Point Type"></div></td>
             <td><div ex:role="facet" ex:expression=".coating" ex:facetLabel="Coating"></div></td>
        </tr></table>
  
   </div>
     </div> <!-- this is a spiffy div -->
 <b class="spiffy_needles">
  <b class="spiffy_needles5"></b>
  <b class="spiffy_needles4"></b>
  <b class="spiffy_needles3"></b>
  <b class="spiffy_needles2"><b></b></b>
  <b class="spiffy_needles1"><b></b></b></b>
</div><!-- this is last spiffy div -->
   
     



  <div ex:role="viewPanel" style="padding: 1em 0.5in;">
        
       
<table ex:role="lens" class="nobelist" style="display: none;">

<tr>
	<td> 

<div class="mainurl" id="mainimage"> 

      <a class="thickbox" ex:href-subcontent="http://imerrow.com/nebula/inventory/600wide/{{.picname}}.jpg" ex:if-exists=".name" onclick="return showThickbox(this);"> 
      	<img ex:src-subcontent="http://imerrow.com/nebula/inventory/200wide_100high/{{.picname}}.jpg" alt=""/>
     </a>
</div>
	</td>
            
            
<td>
 
      
      <div>
          <span ex:content=".coating" class="discipline"></span>, 
              <i ex:content=".asin"></i>
       </div>

              <div ex:if-exists=".name" class="co-winners"> Description: <span ex:content=".description"></span>
              </div>
                
                <div ex:content=".name" class="relationship">
                </div>
                </div>
  
 </td>
    </tr>
    	</table>
        
        
        
    <div ex:role="view"
            ex:viewClass="Thumbnail"
           ex:showAll="false"
            ex:orders=".discipline, .nobel-year"
            ex:abbreviatedCount="10"
            ex:possibleOrders=".name, .shank, .eye, .point, .grove, .ot, .asin">
            
            
            <div ex:role="exhibit-lens" class="nobelist-thumbnail" style="display: none;">

<a class="thickbox" ex:href-subcontent="http://imerrow.com/nebula/inventory/600wide/{{.picname}}.jpg"  ex:if-exists=".name" onclick="return showThickbox(this);"> 
     <img ex:src-subcontent="http://imerrow.com/nebula/inventory/200wide_100high/{{.picname}}.jpg" alt=""/>
</a>

<div><span ex:content=".name"></span>
</div>

 <div>
    <span ex:content=".linear" class="discipline"></span>,Metric Size <span ex:content=".metric" class="year"></span>  <? if ($val=='767911') { echo '<a ex:href-content=".amznurl">'; } else { echo '<a ex:href-content=".caturl">'; } ?> <? if ($val=='767911') { echo '<img src="http://images.imerrow.com/images/buynow_50wide.jpg"  alt=""/>'; } else { echo '<img src="http://images.imerrow.com/images/more_50wide.jpg"  alt=""/>'; } ?>
    
    </a>               
</div>
  </div>
    </div>
         
         
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
we have you tagged as <? echo $val; ?> <a href="pop_ajaxcontent.php?height=50&width=200&subjectmatter=nosey" class="thickbox" title="this is your ID">what's this?</a>  

