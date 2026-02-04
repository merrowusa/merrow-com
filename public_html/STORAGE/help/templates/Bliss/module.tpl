{php}
    if ($GLOBALS['conf']['safe_mode']) {
        include_once(dirname(__FILE__).'/..'.addslashes($_GET['file']));
    } else {
        include_once(dirname(__FILE__).'/../../..'.addslashes($_GET['file']));
    }
{/php}