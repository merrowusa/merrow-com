
    


   
 <?php 
// for example: thispage.php?word=abracadabra 

$val = $_GET['keyword']; 
$munt = $_GET['mediakeyword']; 
$section = $_GET['section'];
$keepmap = $_GET['keepmap'];
$rail = $_GET['rail'];
$parts = $_GET['parts'];


?>
<?php

$munt = $_GET['mediakeyword']; 


// then we connect to the database as renter and access table: inventory 
#
mysql_connect("localhost", "merrowco_renter", "7679") or die(mysql_error());

#
mysql_select_db("merrowco_inventory") or die(mysql_error());


// Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT * FROM asin WHERE asin_id='$mdk'")
or die(mysql_error());
?>


<?
// then define juju as the result array
 $juju = mysql_fetch_array($result); 


?>

<?php 


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title>the Sewing Needle Configuration tool from Merrow</title>
	
	<meta name='robots' content='noindex,nofollow' />


<link rel="stylesheet" href="http://css.imerrow.com/css_major/thickbox.css" type="text/css" media="screen" />
      <link rel="stylesheet" href="http://css.imerrow.com/css_major/lilneedles.css" type="text/css" charset="utf-8">

<link rel="stylesheet" href="http://css.imerrow.com/css_major/added_parts.css" type="text/css" charset="utf-8">
<link href="http://css.imerrow.com/css_major/menu.css" rel="stylesheet" type="text/css" />
  

 
      
<link href="http://merrow.com/cephei/scripts/needles_min.js" type="application/json" rel="exhibit/data" />



<script src="http://static.simile.mit.edu/exhibit/api-2.0/exhibit-api.js" type="text/javascript"></script>
     
     
 <style>
 
 div.exhibit-toolboxWidget-popup.screen {
	visibility: hidden;
}

     
        
        #content {
	background: white;
	width: 980px;
}
        
        #top-panels {
            padding:        0.5em 0.5in;
            border-top:     1px solid #BCB79E;
            border-bottom:  1px solid #BCB79E;
            background:     #FBF4D3;
        }
        
        .exhibit-tileView-body { list-style: none; }
        .exhibit-collectionView-group-count { display: none; }
        
        table.nobelist {
            border:     1px solid #ddd;
            padding:    0.5em;
        }
        div.name {
            font-weight: bold;
            font-size:   120%;
        }
        .relationship {
            color:  #888;
        }
        
        div.nobelist-thumbnail {
            float:      left;
            width:      200px;
            height:     10em;
            border:     1px solid #BCB79E;
            background: #F0FFF0;
            padding:    1em;
            margin:     0.5em;
            text-align: center;
        }
        div.nobelist-timeline-lens {
            padding:    1em;
            text-align: center;
        }
	   .exhibit-thumbnailView-itemContainer{
   clear:right;
   }
   .exhibit-thumbnailView-itemContainer-IE{
   width:auto !important;
   }
    </style>

<script type="text/javascript">
        function deceaseRowStyler(itemID, database, tr, rowIndex) {
            var deceased = database.getObject(itemID, "deceased");
            if (deceased == "yes") {
                tr.style.backgroundColor = "#f88";
            }
        }
    </script>
    
    
	
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

<? include ('widget_sub_partsmenu2ndchoice.php'); ?>

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

        <table width="780px"><tr>
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
    <span ex:content=".linear" class="discipline"></span>,Metric Size <span ex:content=".metric" class="year"></span>  <a target="_parent" ex:href-content=".amznurl"> <img src="http://images.imerrow.com/images/buynow_50wide.jpg"  alt=""/>
    
    </a></div>
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


