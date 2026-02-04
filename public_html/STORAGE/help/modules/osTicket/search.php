<?
session_start();

include_once(dirname(__FILE__)."/class.ticket.php");
include_once(dirname(__FILE__)."/config.php");

if ($_SESSION[user]) {
    include(INCLUDE_DIR."/header.php");
    include(INCLUDE_DIR."/search.php");
    include(INCLUDE_DIR."/footer.php");
}
?>
