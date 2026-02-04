



<div class="AGE_title">Enter your Merrow ID or Serial Number</div>
<form name="form" action="search1.php" method="get">
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
  echo "<p>your serial number is located on a Merrow tag on the front of the machine</p>";
  exit;
  }

// check for a search parameter
if (!isset($var))
  {
  echo "<p>You dont seem to have a serial number entered</p>";
  exit;
  }
  
echo "<div class=\"AGE_serial\">your serial #: " . $var . "</div>";
echo "<div class=\"AGE_result\">";
// check range
if ($var > 0 && $var < 5000)  { echo "Your Merrow Machine is old as dirt";
} else if ($var > 5000 && $var < 10000) { echo "Your Machine was manufactured between 1906 and 1912";
} else if ($var > 10000 && $var < 15000) { echo "Your Merrow Machine was manufactured between 1912 and 1916";
} else if ($var > 15000 && $var < 20000) {  echo "Your Merrow Machine was manufactured between 1916 and 1919";
 } else if ($var > 20000 && $var < 25000) { echo "Your Merrow Machine was manufactured between 1919 and 1921";
} else if ($var > 25000 && $var < 30000) { echo "Your Merrow Machine was manufactured between 1921 and 1924";
} else if ($var > 30000 && $var < 35000) { echo "Your Merrow Machine was manufactured between 1924 and 1925";
} else if ($var > 35000 && $var < 40000) { echo "Your Merrow Machine was manufactured between 1925 and 1926";
} else if ($var > 40000 && $var < 45000) { echo "Your Merrow Machine was manufactured between 1926 and 1927";
} else if ($var > 45000 && $var < 50000) { echo "Your Merrow Machine was manufactured between 1927 and 1930";
} else if ($var > 50000 && $var < 55000) { echo "Your Merrow Machine was manufactured between 1930 and 1934";
} else if ($var > 55000 && $var < 60000) { echo "Your Merrow Machine was manufactured between 1934 and 1936";
} else if ($var > 60000 && $var < 65000) { echo "Your Merrow Machine was manufactured between 1936 and 1939";
} else if ($var > 65000 && $var < 70000) { echo "Your Merrow Machine was manufactured between 1939 and 1940";
} else if ($var > 70000 && $var < 75000) { echo "Your Merrow Machine was manufactured between 1940 and 1945";
} else if ($var > 75000 && $var < 80000) { echo "Your Merrow Machine was manufactured between 1945 and 1947";
} else if ($var > 80000 && $var < 85000) { echo "Your Merrow Machine was manufactured between 1947 and 1948";
} else if ($var > 85000 && $var < 90000) { echo "Your Merrow Machine was manufactured between 1948 and 1949";
} else if ($var > 90000 && $var < 95000) { echo "Your Merrow Machine was manufactured between 1949 and 1950";
} else if ($var > 95000 && $var < 100000) { echo "Your Merrow Machine was manufactured between 1950 and 1951";
} else if ($var > 100000 && $var < 105000) { echo "Your Merrow Machine was manufactured between 1951 and 1952";
} else if ($var > 105000 && $var < 110000) { echo "Your Merrow Machine was manufactured between 1952 and 1954";
} else if ($var > 110000 && $var < 112000) { echo "Your Merrow Machine was manufactured between 1954 and 1955";
} else if ($var > 112000 && $var < 122000) { echo "Your Merrow Machine was manufactured between 1955 and 1958";
} else if ($var > 122000 && $var < 130000) { echo "Your Merrow Machine was manufactured between 1958 and 1960";
} else if ($var > 130000 && $var < 135000) { echo "Your Merrow Machine was manufactured between 1960 and 1961";
} else if ($var > 135000 && $var < 140000) { echo "Your Merrow Machine was manufactured between 1961 and 1962";
} else if ($var > 140000 && $var < 145000) { echo "Your Merrow Machine was manufactured between 1962 and 1963";
} else if ($var > 145000 && $var < 150000) { echo "Your Merrow Machine was manufactured between 1963 and 1964";
} else if ($var > 150000 && $var < 155000) { echo "Your Merrow Machine was manufactured between 1964 and 1965";
} else if ($var > 155000 && $var < 160000) { echo "Your Merrow Machine was manufactured between 1965 and 1966";
} else if ($var > 160000 && $var < 165000) { echo "Your Merrow Machine was manufactured between 1966 and 1967";
} else if ($var > 165000 && $var < 170000) { echo "Your Merrow Machine was manufactured between 1967 and 1968";
} else if ($var > 170000 && $var < 175000) { echo "Your Merrow Machine was manufactured between 1968 and 1969";
} else if ($var > 175000 && $var < 180000) { echo "Your Merrow Machine was manufactured between 1969 and 1970";
} else if ($var > 180000 && $var < 185000) { echo "Your Merrow Machine was manufactured between 1970 and 1972";
} else if ($var > 185000 && $var < 194000) { echo "Your Merrow Machine was manufactured between 1972 and 1973";
} else if ($var > 194000 && $var < 199000) { echo "Your Merrow Machine was manufactured between 1973 and 1974";
} else if ($var > 199000 && $var < 204000) { echo "Your Merrow Machine was manufactured between 1974 and 1975";
} else if ($var > 204000 && $var < 207000) { echo "Your Merrow Machine was manufactured between 1975 and 1976";
} else if ($var > 207000 && $var < 211000) { echo "Your Merrow Machine was manufactured between 1976 and 1979";
} else if ($var > 211000 && $var < 216000) { echo "Your Merrow Machine was manufactured between 1979 and 1981";
} else if ($var > 216000 && $var < 222000) { echo "Your Merrow Machine was manufactured between 1981 and 1983";
} else if ($var > 222000 && $var < 227000) { echo "Your Merrow Machine was manufactured between 1983 and 1985";
} else if ($var > 227000 && $var < 233000) { echo "Your Merrow Machine was manufactured between 1985 and 1987";
} else if ($var > 233000 && $var < 237000) { echo "Your Merrow Machine was manufactured between 1987 and 1989";
} else if ($var > 237000 && $var < 242000) { echo "Your Merrow Machine was manufactured between 1989 and 1991";
} else if ($var > 242000 && $var < 245000) { echo "Your Merrow Machine was manufactured between 1991 and 1992";
} else if ($var > 245000 && $var < 246500) { echo "Your Merrow Machine was manufactured between 1992 and 1993";
} else if ($var > 246500 && $var < 248000) { echo "Your Merrow Machine was manufactured between 1993 and 1994";
} else if ($var > 248000 && $var < 250000) { echo "Your Merrow Machine was manufactured between 1994 and 1995";
} else if ($var > 250000 && $var < 252500) { echo "Your Merrow Machine was manufactured between 1995 and 1996";
} else if ($var > 252500 && $var < 300000) { echo "Your Merrow Machine was manufactured between 1996 and 1999";
} else if ($var > 300000 && $var < 301000) { echo "Your Merrow Machine was manufactured between 1999 and 2004";
} else if ($var > 301000 && $var < 302000) { echo "Your Merrow Machine was manufactured between 2004 and 2007";
} else if ($var > 302000 && $var < 303000) { echo "Your Merrow Machine was manufactured between 2007 and 2009";
} else if ($var > 303000 && $var < 304000) { echo "Your Merrow Machine was manufactured between 2009 and 2010";
} else if ($var > 304000 && $var < 999999) { echo " Hello Doc Brown! Your Merrow Machine is manufactured between 2010 and some time in our brave future.";
} else if ($var == "Rob Merrow") { echo "Happy 63rd Birthday <br /> xoxo Ow,Ml,Cg<br /><br />Things that happened on 2/1 in history... <a href=\"http://en.wikipedia.org/wiki/February_1st\"> Wiki Links</> <br /><img src=\"https://s3.amazonaws.com/print_images/Munich%20Train%20Station.jpg\">";
} else if ($var == "Robert Merrow") { echo "Happy 63rd Birthday <br /> xoxo Ow,Ml,Cg<br /><br />Things that happened on 2/1 in history... <a href=\"http://en.wikipedia.org/wiki/February_1st\"> Wiki Links</> <br /><img src=\"https://s3.amazonaws.com/print_images/Munich%20Train%20Station.jpg\">";
} else if ($var == "Rob") { echo "Happy 63rd Birthday <br /> xoxo Ow,Ml,Cg<br /><br />Things that happened on 2/1 in history... <a href=\"http://en.wikipedia.org/wiki/February_1st\"> Wiki Links</> <br /><img src=\"https://s3.amazonaws.com/print_images/Munich%20Train%20Station.jpg\">";
} else if ($var == "Mary Merrow") { echo "Happy 61st Birthday Mary <br /> xoxo Ow,Ml,Cg<br /><img src=\"https://s3.amazonaws.com/print_images/Munich%20Train%20Station.jpg\">";
} else if ($var == "Mary") { echo "Happy 61st Birthday Mary <br /> xoxo Ow,Ml,Cg<br /><br />Things that happened on 2/1 in history... <a href=\"http://en.wikipedia.org/wiki/February_1st\"> Wiki Links</> <br /><img src=\"https://s3.amazonaws.com/print_images/Munich%20Train%20Station.jpg\">";
} else { echo "<div class=\"bullett\">It's likely that " . $var . " is not a valid serial number. If you're making one up to test us, kuddos. If you're just typing something in to see what happens.... better luck next time. </div> <br /> If you've really tried to type in a serial number double check that " .$var . " is written on the tag on the machine or call us at 800.431.6677"  ;
    
 
 
 
 
} 
 	
 
 
 
 
 
 
 ?>

