<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_merrowco = "localhost";
$database_merrowco = "merrowco_dynamicpages";
$username_merrowco = "merrowco_renter";
$password_merrowco = "7679";
$merrowco = mysql_pconnect($hostname_merrowco, $username_merrowco, $password_merrowco) or trigger_error(mysql_error(),E_USER_ERROR); 
?>