<?php /* Smarty version 2.6.1, created on 2005-10-31 09:46:27
         compiled from module.tpl */ ?>
<?php 
    if ($GLOBALS['conf']['safe_mode']) {
        include_once(dirname(__FILE__).'/..'.addslashes($_GET['file']));
    } else {
        include_once(dirname(__FILE__).'/../../..'.addslashes($_GET['file']));
    }
 ?>