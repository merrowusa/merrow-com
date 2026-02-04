
<html>

<head>
<meta http-equiv=Content-Type content="text/html; charset=macintosh">
<meta name=ProgId content=Excel.Sheet>
<meta name=Generator content="Microsoft Excel 2008">
<style>
<!--table {}
.style21
	{color:#0000D4;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:underline;
	text-underline-style:single;
	font-family:Verdana;}
a:link
	{color:#0000D4;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:underline;
	text-underline-style:single;
	font-family:Verdana;}
a:visited
	{color:#993366;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:underline;
	text-underline-style:single;
	font-family:Verdana;}
.style0
	{text-align:general;
	vertical-align:bottom;
	white-space:nowrap;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Verdana;
	border:none;}
td
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Verdana;
	text-align:general;
	vertical-align:bottom;
	border:none;
	white-space:nowrap;}
.xl24
	{color:#0000D4;
	text-decoration:underline;
	text-underline-style:single;}
ruby
	{ruby-align:left;}
rt
	{color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Verdana;
	display:none;}
-->
</style>
</head>#
<div class="a">
  <div class="style21">
    <?php
#
mysql_connect("localhost", "merrowco_renter", "7679") or die(mysql_error());
#
echo "Connection to the server was successful!<br/>";
#
mysql_select_db("merrowco_techmanual") or die(mysql_error());


// Get all the data from the "example" table
$result = mysql_query("SELECT * FROM assignment WHERE pd_ref='PDMG3U-2'")
or die(mysql_error());  

echo "<table border='1'>";
echo "<tr> <th>msmc_code</th> 
<th>ot_code</th>
<th>mmc_code</th>
<th>price</th>
</tr><tr></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo $row['msmc_code'];
	echo "</td><td>"; 
	echo $row['ot_code'];
	echo "</td><td>"; 
	echo $row['mmc_code'];
	echo "</td><td>";
	echo $row['price'];
	echo "</td></tr>";
	
	} 

echo "</table>";

?>
  </div>
</div>
