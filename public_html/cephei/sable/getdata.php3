<?php

// getdata.php3 - by Florian Dittmer <dittmer@gmx.net>
// Example php script to demonstrate the direct passing of binary data
// to the user. More infos at http://www.phpbuilder.com
// Syntax: getdata.php3?id=<id>

if($id) {

    // you may have to modify login information for your database server:
mysql_connect("localhost", "merrowco_mailman", "7679") or die(mysql_error());
mysql_select_db("merrowco_cephie") or die(mysql_error());

    $query = "select bin_data,filetype from binary_data where id=$id";
    $result = @MYSQL_QUERY($query);

    $data = @MYSQL_RESULT($result,0,"bin_data");
    $type = @MYSQL_RESULT($result,0,"filetype");

    Header( "Content-type: $type");
    echo $data;

};
?>