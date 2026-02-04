<head>
<link rel="stylesheet" href="http://merrowservices.s3.amazonaws.com/css/services_cleanup.css" type="text/css" charset="utf-8">
</head>



<html>
<head>
<title>Machine Age</title>
</head>
<body>

<form name="form" action="search.php" method="get">
  <input type="text" name="q" />
  <input type="submit" name="Submit" value="Search" />
</form>



<?php

  // Get the search variable from URL

  $var = @$_GET['q'] ;
  $trimmed = trim($var); //trim whitespace from the stored variable

// rows to return
$limit=10; 

// check for an empty string and display a message.
if ($trimmed == "")
  {
  echo "<p>Please enter a search...</p>";
  exit;
  }

// check for a search parameter
if (!isset($var))
  {
  echo "<p>We dont seem to have a search parameter!</p>";
  exit;
  }

mysql_connect("localhost", "merrowso_renter", "7679") or die(mysql_error());

#
mysql_select_db("merrowso_hydedata") or die(mysql_error());


// Build SQL Query  
$query = "select `seller-sku` from amazon_inventory_dupes where asin1 like \"%$trimmed%\"  
  order by `seller-sku`"; // EDIT HERE and specify your table and field names for the SQL query

 $numresults=mysql_query($query);
 $numrows=mysql_num_rows($numresults);

// If we have no results, offer a google search as an alternative

if ($numrows == 0)
  {
  echo "<h4>Results</h4>";
  echo "<p>Sorry, your search: &quot;" . $trimmed . "&quot; returned zero results</p>";

// google
 echo "<p><a href=\"http://www.google.com/search?q=" 
  . $trimmed . "\" target=\"_blank\" title=\"Look up 
  " . $trimmed . " on Google\">Click here</a> to try the 
  search on google</p>";
  }

// next determine if s has been passed to script, if not use 0
  if (empty($s)) {
  $s=0;
  }

// get results
  $query .= " limit $s,$limit";
  $result = mysql_query($query) or die("Couldn't execute query");

// display what the person searched for
echo "<p>Your serial number is: &quot;" . $var . "&quot;</p>";

// begin to show results set
echo "Results <br />"; 


// now you can display the results returned
  while ($row= mysql_fetch_array($result)) {
  $title = $row["seller-sku"];

  echo "$count.)&nbsp;$title" ;
  $count++ ;
  }

$currPage = (($s/$limit) + 1);


  
?>
