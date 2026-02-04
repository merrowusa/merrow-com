<?php
/* http://www.fiftyfoureleven.com/weblog/web-development/css/the-definitive-css-gzip-method
*/
header("Content-type: text/javascript; charset: UTF-8");
header("Cache-Control: must-revalidate");
$offset = 60 * 60 ;
$ExpStr = "Expires: " .
gmdate("D, d M Y H:i:s",
time() + $offset) . " GMT";
header($ExpStr);
?>