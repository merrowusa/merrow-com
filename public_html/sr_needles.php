<html>
<head>
   <title>MIT MERROW winners</title>
 
   <link href="../scripts/needles.js" type="application/json" rel="exhibit/data" />
   <link href="../scripts/m_needle.js" type="application/json" rel="exhibit/data" />
 
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
                <td width="15%">
                    <b>Search</b>

                    <div ex:role="facet" ex:facetClass="TextSearch"></div>
                    <hr/>
                    <div ex:role="facet" ex:expression=".Metric+Size" ex:facetLabel="Metric Size" ex:height="15em"></div>
                    <div ex:role="facet" ex:expression=".Size" ex:facetLabel="Merrow Size" ex:height="20em"></div>
                </td>
                <td>

           
           <td ex:role="viewPanel">
               <table ex:role="lens" class="nobelist">
                   <tr>
                       <td><img ex:src-content=".imageURL" /></td>
                       <td>
                           <div ex:content=".label" class="name"></div>
                           <div>
                              <span ex:content=".Machine" class="discipline"></span>
                             , 
                             <span ex:content=".Speed" class="year"></span>                           </div>
                           <div ex:if-exists=".Stitch+Width" class="co-winners">Co-winners: 
                               <span ex:content=".co-winner"></span>
                           </div>
                           <div ex:content=".relationship-detail" class="relationship"></div>
                            <div ex:content=".Stitch+Class" class="relationship"></div>
                       </td>
                   </tr>
               </table>
               <div ex:role="exhibit-view"
                   ex:viewClass="Exhibit.TabularView"
                   ex:columns=".name, .Description, .Size, .Metric+Size, .label"
                   ex:columnLabels="name, Description, Size, Metric Size, label"
                   ex:columnFormats="list, list, list, list, list"
                   ex:sortColumn="3"
                   ex:sortAscending="false">
               </div>
              <div ex:role="view"
                   ex:viewClass="Timeline"
                   ex:start=".nobel-year"
                   ex:colorKey=".discipline">
               </div>
               <div ex:role="view"
                   ex:orders=".discipline, .nobel-year"
                   ex:possibleOrders=".label, .last-name, .discipline, .relationship, .shared, .deceased, .nobel-year">
               </div>
            </td>
           <td width="25%">
               <div ex:role="facet" ex:facetClass="TextSearch"></div>
               <div ex:role="facet" ex:expression=".Scarf" ex:facetLabel="Scarf"></div>
               <div ex:role="facet" ex:expression=".Eye+Type" ex:facetLabel="Eye Type"></div>
               <div ex:role="facet" ex:expression=".Point+Type" ex:facetLabel="Point Type?"></div>
               <div ex:role="facet" ex:expression=".Groove+on+Needle" ex:facetLabel="Groove or no Groove"></div>
               <div ex:role="facet" ex:expression=".Type+of+Coating" ex:facetLabel="Coating"></div>
               <div ex:role="facet" ex:expression=".Tapered+Blade" ex:facetLabel="Tapered?"></div>
               <div ex:role="facet" ex:expression=".Linear" ex:facetLabel="Curved or Straight"></div>
          

           </td>
       </tr>
   </table>
</body>
</html>
