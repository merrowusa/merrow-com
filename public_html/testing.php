



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
    
     


	
<?php

// then we connect to the database as renter and access table: inventory 
#
mysql_connect("localhost", "merrowco_renter", "7679") or die(mysql_error());

#
mysql_select_db("merrowco_inventory") or die(mysql_error());

?>
     
<? 

$wammo = $_GET['party_id']; 
$noire = $_GET['stitch']; 
$drhorrible = $_GET['app'];



?>

<? if ($drhorrible == 'decorative') { ?>
    
    <link rel="exhibit/data" 
       type="application/jsonp"
       href="http://spreadsheets.google.com/feeds/list/o08268501926021654611.3421890702321214822/od6/public/basic?alt=json-in-script"
       ex:converter="googleSpreadsheets" />

    
    
     
    
    <? } elseif ($drhorrible =='finishing') {?> 
    
    
         <link href="../scripts/fin_apps.js" type="application/json" rel="exhibit/data" />
         
        
           <? } elseif ($drhorrible =='seaming') {?>
        
         <link rel="exhibit/data" 
       type="application/jsonp"
       href="http://spreadsheets.google.com/feeds/list/o08268501926021654611.3421890702321214822/od6/public/basic?alt=json-in-script"
       ex:converter="googleSpreadsheets" />

             
              
            
               <? } else { ?>
               
        <link rel="exhibit/data" 
       type="application/jsonp"
       href="http://spreadsheets.google.com/feeds/list/o08268501926021654611.3421890702321214822/od6/public/basic?alt=json-in-script"
       ex:converter="googleSpreadsheets" />
                 
                    
                 
                 
                 <? } ?> 



<?


$IPaddress=$_SERVER['REMOTE_ADDR'];
$two_letter_country_code=iptocountry($IPaddress);

include("ip_files/countries.php");
$three_letter_country_code=$countries[ $two_letter_country_code][0];
$country_name=$countries[$two_letter_country_code][1];

	

function iptocountry($ip) {   
    $numbers = preg_split( "/\./", $ip);   
    include("ip_files/".$numbers[0].".php");
    $code=($numbers[0] * 16777216) + ($numbers[1] * 65536) + ($numbers[2] * 256) + ($numbers[3]);   
    foreach($ranges as $key => $value){
        if($key<=$code){
            if($ranges[$key][0]>=$code){$two_letter_country_code=$ranges[$key][1];break;}
            }
    }
    if ($two_letter_country_code==""){$two_letter_country_code="unkown";}
    return $two_letter_country_code;
}

?>


<?  

 if ($wammo!= NULL) { $val = $wammo;}
elseif ($two_letter_country_code=='TR') {$val = '11224'; }
elseif ($two_letter_country_code=='AR') {$val = '10327'; }
elseif ($two_letter_country_code=='AU') {$val = '10936'; }
elseif ($two_letter_country_code=='BE') {$val = '10639'; }
elseif ($two_letter_country_code=='BR') {$val = '10978'; }
elseif ($two_letter_country_code=='CA') {$val = '10996'; }
elseif ($two_letter_country_code=='CO') {$val = '10223'; }
elseif ($two_letter_country_code=='DK') {$val = '10643'; }
elseif ($two_letter_country_code=='EG') {$val = '10529'; }
elseif ($two_letter_country_code=='EE') {$val = '10625'; }
elseif ($two_letter_country_code=='FR') {$val = '10177'; }
elseif ($two_letter_country_code=='DE') {$val = '11034'; }
elseif ($two_letter_country_code=='GR') {$val = '10139'; }
elseif ($two_letter_country_code=='HR') {$val = '12187'; }
elseif ($two_letter_country_code=='HK') {$val = '11318'; }
elseif ($two_letter_country_code=='IS') {$val = '10901'; }
elseif ($two_letter_country_code=='IN') {$val = '10472'; }
elseif ($two_letter_country_code=='IL') {$val = '11031'; }
elseif ($two_letter_country_code=='JP') {$val = '10292'; }
elseif ($two_letter_country_code=='KR') {$val = '10455'; }
elseif ($two_letter_country_code=='MX') {$val = '10922'; }
elseif ($two_letter_country_code=='NL') {$val = '10312'; }
elseif ($two_letter_country_code=='NO') {$val = '10049'; }
elseif ($two_letter_country_code=='PK') {$val = '10058'; }
elseif ($two_letter_country_code=='PY') {$val = '12214'; }
elseif ($two_letter_country_code=='PE') {$val = '12808'; }
elseif ($two_letter_country_code=='PL') {$val = '10607'; }
elseif ($two_letter_country_code=='PT') {$val = '10379'; }
elseif ($two_letter_country_code=='RU') {$val = '10540'; }
elseif ($two_letter_country_code=='ZA') {$val = '10028'; }
elseif ($two_letter_country_code=='ES') {$val = '10943'; }
elseif ($two_letter_country_code=='CH') {$val = '10419'; }
elseif ($two_letter_country_code=='CN') {$val = '10388'; }
elseif ($two_letter_country_code=='AE') {$val = '12856'; }
elseif ($two_letter_country_code=='UK') {$val = '10725'; }
elseif ($two_letter_country_code=='US') {$val = '767911'; }

else {$val = '767911'; }

 ?>
 
 <? // Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT leftmenu_subheadlink1,leftmenu_subhead1,leftmenu_subhead2,leftmenu_subhead3,leftmenu_subhead4,leftmenu_subheadlink2,leftmenu_subheadlink3,leftmenu_subheadlink4 FROM agents WHERE party_id='$val'")
or die(mysql_error());
?>


<?
// then define juju as the result array
 $agents = mysql_fetch_array($result); ?>
 
 
 <link href="http://css.imerrow.com/hoverbox/hoverbox.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="http://css.imerrow.com/lightbox.css" type="text/css" media="screen" />

    


	<link rel="stylesheet" href="http://css.imerrow.com/frontpage/base.css" type="text/css" charset="utf-8">
	<!--<link rel="stylesheet" href="http://css.imerrow.com/nav.css" type="text/css" charset="utf-8"> -->
	<link rel="stylesheet" href="http://css.imerrow.com/ac_quicktime.css"  type="text/css" charset="utf-8">
	<link rel="stylesheet" href="http://css.imerrow.com/frontpage/index.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://css.imerrow.com/frontpage/whole.css" type="text/css" charset="utf-8">
   
  
	
	
 

           
  
           
   <style>
       body {
           margin: 1in;
       }
       table.nobelist {
           border:     1px solid #ddd;
           padding:    0.5em;
       }
       div.name {
           font-weight: bold;
           font-size:   30%;
       }
       .discipline {
       }
       .year {
           font-style:  italic;
		   color:  #888;
       }
       .relationship {
           color:  #888;
       }
       .co-winners {
       }
	 
}
div.exhibit-viewPanel-viewSelection {
    text-align: center;
	margin-top: 10px;
	margin-left: 10px;
	top: 15px;
	padding-bottom: 10px;
}
div.name {
	width: 200px;
}
#bar div div.exhibit-text-facet input {
	height: 30px;
	width: 300px;
	margin-top: 10px;
	position: relative;
	right: 140px;
		color: #297fb5;
	font-size: 20px;
	font-weight: bold;
	background-color: #f0f0f0;

}
div#seachheader.h2 {
	color: gray;
	font-size: 16px;
	text-align: left;
}
div.exhibit-collectionView-header-sortControls {
    text-align:     center;
	float: left;
	visibility: hidden;
}
table.nobelist {
	width: 500px;
}
#content div.column table tbody tr td div.exhibit-viewPanel.exhibit-ui-protection div.exhibit-viewPanel-viewContainer div.exhibit-collectionView-body div.exhibit-thumbnailView-group h1 {
	visibility: hidden;
	margin-top: 0;
	margin-bottom: 0;
	height: 1px;
}

div.exhibit-viewPanel-viewSelection {
    text-align: left;
	position: relative;
	width: 200px;
}

   </style>

      <script src="http://static.simile.mit.edu/exhibit/api-2.0/exhibit-api.js" type="text/javascript"></script>
 
</head>


<!-- ************* DO NOT ALTER ANYTHING BELOW THIS LINE ! ************** --->

<!-- ##################  
	// menu
	// ################## -->	

		<? if ($val == '767911') { include ("widget_main_menu.php"); }
else { include("widget_int_main_menu"); } ?>



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
                
				
			
            		<? include ("widget_leftmainmenu.php") ?>
                    
					
				
                
              
 <!-- ################## 
	// ################## -->	
		  </div> <!-- /column.first -->				
                <div class="column">
<!-- ##################  
	// center column widgets
	// ################## -->	 
					
<!-- ##################  
	// decorative stitch content
	// ################## -->	
    
<? if ($drhorrible == 'decorative') { ?>

    
    
      <td> <div class="h2" id="seachheader">Search by Application or Machine </div> 
          <div class="searchbar" id="bar">
            <tr> <div ex:role="facet" 
   ex:facetClass="TextSearch">
              </div>
            </tr>
          </div>
          </td>
          <br>
         
        

 
 <table width="760">
       <tr valign="top">
           <td ex:role="viewPanel">
               <table ex:role="lens" class="nobelist" >
                   <tr>
                       <td><img ex:src-content=".imgUrl" /></td>
                       <td>
                           <div ex:content=".App" class="name"></div>
                           <div><span ex:content=".Machine" class="discipline"></span>
                             <span ex:content=".Speed" class="year"></span> 
                           </div>
                           <div ex:if-exists=".Stitch+Width" class="co-winners">Needle Type: 
                               <span ex:content=".Needle"></span>
                           </div>
                         <div <img ex:src-content=".nano3" /> <div>
                           <div ex:content=".App" class="relationship"></div>
                            <div ex:content=".Fabric" class="relationship"></div>
                          
                        
                       </td>
                   </tr>
               </table>
      
               
               
               <div role="view" 
                            ex:viewClass="Thumbnail"
                            ex:showAll="false"
                            ex:possibleOrders=".Machine, .width, .wet, .ps"
                            ex:abbreviatedCount="6">
                            
                            <table ex:role="lens" class="nobelist" style="display: none;">
                                <tr><td><img ex:src-content=".imgUrl" /> </td>
                                    <td valign="bottom" class="nobelist">
                                        <div style="position: relative"><div class="itemThumbnail-blocker"></div></div>
                                         <div  <a ex:href-subcontent="{{.imgUrl}}" >  <img ex:src-content=".nano2" /> </a>  <a ex:href-subcontent="{{.nano2}}" >  <img ex:src-content=".nano3" /> </a>  <a ex:href-subcontent="{{.label}}" >  <img ex:src-content=".nano4" /> </a>  <a ex:href-subcontent="{{.label}}" >  <img ex:src-content=".nano5" /> </a><div>
                                        <div><span ex:content=".Machine" class="discipline"></span>
                             <span ex:content=".Speed" class="year"></span> 
                           </div>
                                          <div ex:content=".App" class="relationship"></div>
                            <div ex:content=".Fabric" class="relationship"></div>   
                                    </td>

                                </tr>
                                <tr>
                                    <td class="itemThumbnail-caption"><span ex:content="value" /></td>
                                 

                                </tr>
                            </table>
                        </div>

             		 
                    
                     <div ex:role="exhibit-view"
                   ex:viewClass="Exhibit.TabularView"
                   ex:columns=".Machine, .nano, .App, .Fabric, .Stitch"
                   ex:columnLabels="Machine, Sample, App Width, Fabric, Stitch"
                   ex:columnFormats="list, image, list, list, list"
                   ex:sortColumn="3"
                   ex:sortAscending="false">
               </div>
            
              
            </td>
           <td width="25%">
            
                
                   <div ex:role="facet" ex:expression=".App" ex:height="300px" ex:facetLabel=" Application"></div>
                   <br><span> <h2> you can also sort by: </h2> </span><br>
             <div ex:role="facet" ex:expression=".Machine" ex:collapsed="false" ex:facetLabel="Machine"></div>
               <div ex:role="facet" ex:expression=".Fabric"  ex:collapsed="false"ex:facetLabel="Fabric"></div>
               <div ex:role="facet" ex:expression=".Stitch"  ex:collapsed="true"ex:facetLabel=" Stitch"></div>
           

           </td>
       </tr>
    
     <!-- ##################  
	// finishing stitch content
	// ################## -->	
    
    <? } elseif ($drhorrible =='finishing') {?> 

    
            <td> <div class="h2" id="seachheader">Search by Application or Machine </div> 
          <div class="searchbar" id="bar">
            <tr> <div ex:role="facet" 
   ex:facetClass="TextSearch">
              </div>
            </tr>
          </div>
          </td>
          <br>
         
        

 
 <table width="760">
       <tr valign="top">
           <td ex:role="viewPanel">
               <table ex:role="lens" class="nobelist" >
                   <tr>
                       <td><img ex:src-content=".imgUrl" /></td>
                       <td> 
                           <div ex:content=".App" class="name"></div>
                           <div><span ex:content=".Machine" class="discipline"></span>
                             <span ex:content=".wet" class="year"></span> 
                           </div>
                           <div ex:if-exists=".Stitch+Width" class="co-winners">Needle Type: 
                               <span ex:content=".Needle"></span>
                           </div>
                         <div <img ex:src-content=".nano3" /> <div>
                           <div ex:content=".ps" class="relationship"></div>
                            <div ex:content=".width" class="relationship"></div>
                         
                        
                       </td>
                   </tr>
               </table>
      
               
               
               <div role="view" 
                            ex:viewClass="Thumbnail"
                            ex:showAll="false"
                            ex:possibleOrders=".Machine, .width, .wet, .ps"
                            ex:abbreviatedCount="6">
                            
                            <table ex:role="lens" class="nobelist" style="display: none;">
                                   
                                <tr><td ><a ex:href-subcontent="{{.imgUrl}}" rel="lightbox" title="test37" > <img ex:src-content=".imgUrl" /> </a> </td>
                                    <td valign="bottom" class="nobelist">
                                        <div style="position: relative"><div class="itemThumbnail-blocker"></div></div>
                                        <div style="position: relative"><div class="itemThumbnail-blocker"></div></div>
                                         <div> <a ex:href-subcontent="{{.imgUrl}}" rel="lightbox" title="test37" >  <img ex:src-content=".nano2" /> </a>  <a ex:href-subcontent="{{.nano2}}" >  <img ex:src-content=".nano3" /> </a>  <a ex:href-subcontent="{{.label}}" >  <img ex:src-content=".nano4" /> </a>  <a ex:href-subcontent="{{.label}}" >  <img ex:src-content=".nano5" /> </a><div>

                                        <div><span ex:content=".Machine" class="discipline"></span>
                             <span ex:content=".Speed" class="year"></span> 
                           </div>
                                      <div ex:content=".ps" class="relationship"></div>
                            <div ex:content=".wet" class="relationship"></div>   
                                    </td>

                                </tr>
                                <tr>
                                    <td class="itemThumbnail-caption"><span ex:content="value" /></td>
                                 <td> <a ex:href-subcontent="http://www.google.com/search/?q={{.label}}" >google search</a> </td>


                                </tr>
                            </table>
                        </div>

             		 
                    
                     <div ex:role="exhibit-view"
                   ex:viewClass="Exhibit.TabularView"
                   ex:columns=".Machine, .nano, .App, .Fabric, .Stitch"
                   ex:columnLabels="Machine, Sample, App Width, Fabric, Stitch"
                   ex:columnFormats="list, image, list, list, list"
                   ex:sortColumn="3"
                   ex:sortAscending="false">
               </div>
            
              
            </td>
           <td width="25%">
            
                
                   <div ex:role="facet" ex:expression=".wet" ex:height="60px" ex:facetLabel=" Application"></div>
                   <br><span> <h2> you can also sort by: </h2> </span>
             <div ex:role="facet" ex:expression=".ps" ex:collapsed="false" ex:height="250px" ex:facetLabel="Seaming Problems"></div>
               <div ex:role="facet" ex:expression=".Table+Type" ex:height="65px" ex:collapsed="false"ex:facetLabel="Table or Rail Type"></div>
               <div ex:role="facet" ex:expression=".Fabric"  ex:collapsed="false"ex:facetLabel="Fabric"></div>
           

           </td>
       </tr>
   <!-- ##################  
	// decorative stitch content
	// ################## -->	
    
         
        
           <? } elseif ($drhorrible =='seaming') {?>
        
               
        <div style="width: 100%"><table style="font-size: 100%" cellspacing="10" width="100%">
            <tr valign="top">
                <td>
                    <div id="exhibit-control-panel"></div>
                    <div id="exhibit-view-panel">
                        <div ex:role="exhibit-lens" class="movie">
                            <img ex:if-exists=".cover-art" ex:src-content=".cover-art" class="cover-art" />
                            <span ex:content=".label" class="movie-title"></span>, 
                                genres: <span ex:content=".App"></span>,
                                rating: <span ex:content=".App"></span>

                            <div class="plot" ex:if-exists=".plot" ex:content=".plot"></div>
                        </div>
                        <div ex:role="exhibit-view"
                            ex:viewClass="Exhibit.TileView"
                            ex:orders=".App"
                            ex:directions="descending"
                            ex:possibleOrders=".App, .label, .rating"
                            ex:showAll="true"
                            ex:grouped="false">
                        </div>
                    </div>
                </td>
                <td width="25%">
                    <div ex:role="facet" ex:expression=".App"></div>
                    <div ex:role="facet" ex:expression=".Machine"></div>

                </td>
            </tr>
        </table></div>
    </div>

                        </div>

             		 
                    
                     <div ex:role="exhibit-view"
                   ex:viewClass="Exhibit.TabularView"
                   ex:columns=".Machine, .nano, .App, .Fabric, .Stitch"
                   ex:columnLabels="Machine, Sample, App Width, Fabric, Stitch"
                   ex:columnFormats="list, image, list, list, list"
                   ex:sortColumn="3"
                   ex:sortAscending="false">
               </div>
            
              
            </td>
           <td width="25%">
            
                
                   <div ex:role="facet" ex:expression=".App" ex:height="300px" ex:facetLabel=" Application"></div>
                   <br><span> <h2> you can also sort by: </h2> </span><br>
             <div ex:role="facet" ex:expression=".Machine" ex:collapsed="false" ex:facetLabel="Machine"></div>
               <div ex:role="facet" ex:expression=".Fabric"  ex:collapsed="false"ex:facetLabel="Fabric"></div>
               <div ex:role="facet" ex:expression=".Stitch"  ex:collapsed="true"ex:facetLabel=" Stitch"></div>
           

           </td>
       </tr>
             
              <!-- ##################  
	// default stitch content
	// ################## -->	
            
               <? } else { ?>
               
                  <td> <div class="h2" id="seachheader">Search by Application or Machine </div> 
          <div class="searchbar" id="bar">
            <tr> <div ex:role="facet" 
   ex:facetClass="TextSearch">
              </div>
            </tr>
          </div>
          </td>
          <br>
         
        

 
 <table width="760">
       <tr valign="top">
           <td ex:role="viewPanel">
               <table ex:role="lens" class="nobelist" >
                   <tr>
                       <td><img ex:src-content=".imgUrl" /></td>
                       <td>
                           <div ex:content=".App" class="name"></div>
                           <div><span ex:content=".Machine" class="discipline"></span>
                             <span ex:content=".Speed" class="year"></span> 
                           </div>gibberish gibberish why is this loading ahead of the page 
                           <div ex:if-exists=".Stitch+Width" class="co-winners">Needle Type: 
                               <span ex:content=".Needle"></span>
                           </div>
                         <div <img ex:src-content=".nano3" /> <div>
                           <div ex:content=".App" class="relationship"></div>
                            <div ex:content=".Fabric" class="relationship"></div>
                          
                        
                       </td>
                   </tr>
               </table>
      
               
               
               <div role="view" 
                            ex:viewClass="Thumbnail"
                            ex:showAll="false"
                            ex:possibleOrders=".Machine, .width, .wet, .ps"
                            ex:abbreviatedCount="6">
                            
                            <table ex:role="lens" class="nobelist" style="display: none;">
                                <tr><td><img ex:src-content=".imgUrl" /> </td>
                                    <td valign="bottom" class="nobelist">
                                        <div style="position: relative"><div class="itemThumbnail-blocker"></div></div>
                                      <div   <a ex:href-subcontent="http://images.imerrow.com/images/main/{{.REFERENCE}}.jpg" rel="lightbox" title="{{.Machine}}" >  <img ex:src-content=".nano2" /> </a>  <a ex:href-subcontent="{{.nano2}}" >  <img ex:src-content=".nano3" /> </a>  <a ex:href-subcontent="{{.label}}" >  <img ex:src-content=".nano4" /> </a>  <a ex:href-subcontent="{{.label}}" >  <img ex:src-content=".nano5" /> </a><div>
                                        <div><span ex:content=".Machine" class="discipline"></span>
                             <span ex:content=".Speed" class="year"></span> 
                           </div>
                                          <div ex:content=".App" class="relationship"></div>
                            <div ex:content=".Fabric" class="relationship"></div>   
                                    </td>

                                </tr>
                                <tr>
                                    <td class="itemThumbnail-caption"><span ex:content="value" /></td>
                                    <td> <div class="mylilbutton" id="buythis"><img src="/nebula/images/learnmore.jpg" alt="ko"></div> </td>
                                 

                                </tr>
                            </table>
                        </div>

             		 
                    
                     <div ex:role="exhibit-view"
                   ex:viewClass="Exhibit.TabularView"
                   ex:columns=".GROUP, .Machine, .imgUrl, .App, .Fabric, .Stitch"
                   ex:columnLabels="Group, Machine, Sample, App , Fabric, Stitch"
                   ex:columnFormats="list, list, image, list, list, list"
                   ex:sortColumn="3"
                   ex:sortAscending="false">
               </div>
            
              
            </td>
           <td width="25%">
            
                
                   <div ex:role="facet" ex:expression=".App" ex:height="300px" ex:facetLabel=" Application"></div>
                   <br><span> <h2> you can also sort by: </h2> </span><br>
             <div ex:role="facet" ex:expression=".Machine" ex:collapsed="false" ex:facetLabel="Machine"></div>
               <div ex:role="facet" ex:expression=".Class"  ex:collapsed="false"ex:facetLabel="Class"></div>
               <div ex:role="facet" ex:expression=".Stitch"  ex:collapsed="true"ex:facetLabel=" Stitch"></div>
           

           </td>
       </tr>
                 
                    
                 
                 
                 <? } ?> 
      
     
   
				
  
             
 <!-- ################## 
//	 ################## -->	
     			</div> <!-- /column -->				
                <div class="column last sidebar">
  <!-- ##################  
//	 right column widgets
//	 ################## -->	 	
     	</table>	
				
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
			</div> <!-- /content -->
		</div> <!-- /container -->

	</div> <!-- /main -->