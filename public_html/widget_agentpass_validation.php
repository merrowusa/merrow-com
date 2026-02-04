<?php

// then we connect to the database as renter and access table: inventory 
#
mysql_connect("localhost", "merrowco_renter", "7679") or die(mysql_error());

#
mysql_select_db("merrowco_inventory") or die(mysql_error());



   // Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT * FROM agent_word WHERE agent_id='$whole'")
or die(mysql_error());


// then define juju as the result array
 $parsnip = mysql_fetch_array($result); 
 
?> 
