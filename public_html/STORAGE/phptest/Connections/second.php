<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_second = "localhost";
$database_second = "merrowco_techmanual";
$username_second = "merrowco_renter";
$password_second = "7679";
$second = mysql_pconnect($hostname_second, $username_second, $password_second) or trigger_error(mysql_error(),E_USER_ERROR); 
?>