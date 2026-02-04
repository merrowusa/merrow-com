<html>
<head>
   <title>MIT MERROW winners</title>
 
   <link href="../scripts/machines.js" type="application/json" rel="exhibit/data" />
 
   <script src="http://static.simile.mit.edu/exhibit/api-2.0/exhibit-api.js"
           type="text/javascript"></script>
           
   <script src="http://static.simile.mit.edu/exhibit/extensions-2.0/time/time-extension.js"
           type="text/javascript"></script>
           
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
           font-size:   120%;
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
   </style>
</head> 
<body>
   <h1>Merrow Sewing Machines</h1>
   <table width="100%">
       <tr valign="top">
           <td ex:role="viewPanel">
               <table ex:role="lens" class="nobelist">
                   
                       <td><img ex:src-content=".imageURL" /></td>
                       <td>
                           <div ex:content=".Machine" class="name"></div>
                           <div>
                               <div class="ogoga" id="woooga"><span ex:content=".Machine" class="discipline"></span></div>
                             , 
                             <span ex:content=".Speed" class="year"></span>                           </div>
                           <div ex:if-exists=".Stitch+Width" class="co-winners">Co-winners: 
                               <span ex:content=".Needle"></span>
                           </div>
                           <div ex:content=".Fabric+Weight" class="relationship"></div>
                            <div ex:content=".Stitch+Class" class="relationship"></div>
                       </td>
                   </tr>
               </table>
               <div ex:role="exhibit-view"
                   ex:viewClass="Exhibit.TabularView"
                   ex:columns=".Machine, .Speed, .Stitch+Width, .General, .Thread+Count"
                   ex:columnLabels="Machine, Speed, Stitch Width, Conditions, Thread Count"
                   ex:columnFormats="list, list, list, list, list"
                   ex:sortColumn="3"
                   ex:sortAscending="false">
               </div>
              <div ex:role="view"
                   ex:viewClass="Timeline"
                   ex:start=".Machine"
                   ex:colorKey=".Needle">
               </div>
               <div ex:role="view"
                   ex:orders=".Machine, .Needle"
                   ex:possibleOrders=".Machine, .last-name, .discipline, .relationship, .shared, .deceased, .nobel-year">
               </div>
            </td>
           <td width="25%">
             <div ex:role="facet" ex:facetClass="TextSearch"></div>
                 <div ex:role="facet" ex:expression=".Needle" ex:facetLabel="Needle"></div>
               
             <div ex:role="facet" ex:expression=".Speed" ex:facetLabel="Machine"></div>
               <div ex:role="facet" ex:expression=".Stitch+Width" ex:facetLabel="Stitch Width?"></div>
               <div ex:role="facet" ex:expression=".Fabric+Weight" ex:facetLabel="Fabric Weight"></div>
               <div ex:role="facet" ex:expression=".Stitch+Classification" ex:facetLabel="Stitch Class"></div>

           </td>
       </tr>
   </table>
</body>
</html>
