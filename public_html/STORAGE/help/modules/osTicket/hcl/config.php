<?php

    // Copyright © 2005 UberTec Ltd. All Rights Reserved

    // This file is part of Help Center Live.

    // Help Center Live is free software; you can redistribute it and/or modify
    // it under the terms of the GNU General Public License as published by
    // the Free Software Foundation; either version 2 of the License, or
    // (at your option) any later version.

    // Help Center Live is distributed in the hope that it will be useful,
    // but WITHOUT ANY WARRANTY; without even the implied warranty of
    // MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    // GNU General Public License for more details.

    // You should have received a copy of the GNU General Public License
    // along with Help Center Live; if not, write to the Free Software
    // Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

    // Contributors: Michael Bird

    // $Id: config.php,v 1.3 2005/06/06 13:16:41 mikebird Exp $ 

    // File Comments:
    // This file allows osTicket to integrate into Help Center Live

    // This sets HCL to use the module or not.
    $GLOBALS['conf']['modules']['osTicket']['active'] = true;

    // This sets HCL to display the module in the main admin links.
    $GLOBALS['conf']['modules']['osTicket']['display'] = true;

    // The title of the module.
    $GLOBALS['conf']['modules']['osTicket']['title'] = 'osTicket';

    // The main file that will be accessible by end users.
    $GLOBALS['conf']['modules']['osTicket']['user'] = '/modules/osTicket/view.php';

    // The main file that will be accessible by the operators.
    $GLOBALS['conf']['modules']['osTicket']['operator'] = '/modules/osTicket/admin.php';
    
    // The main file that will be accessible by the administators.
    $GLOBALS['conf']['modules']['osTicket']['admin'] = '/modules/osTicket/admin.php';
    
    // The main file that will be accessible in the config settings menu.
    $GLOBALS['conf']['modules']['osTicket']['conf'] = '/modules/osTicket/admin.php&a=pref';

    // The url to the module
    $GLOBALS['conf']['modules']['osTicket']['realurl'] = $GLOBALS['conf']['url'].'/modules/osTicket/';
    
    if (isset($_GET['type'])) {
        $GLOBALS['conf']['modules']['osTicket']['url'] = $GLOBALS['conf']['url'].'/admin/module.php?module=osTicket&type='.addslashes($_GET['type']).'&file=/modules/osTicket/';
    } else {
        $GLOBALS['conf']['modules']['osTicket']['url'] = $GLOBALS['conf']['url'].'/module.php?module=osTicket&file=/modules/osTicket/';
    }


    // Get the PHP_SELF with GET vars
    $args = '';
    $getargs = '';
    foreach ($_GET as $key => $val) {
        if ($key == 'module' || $key == 'file' || $key == 'type') {
            $getargs .= '<input type="hidden" name="'.$key.'" value="'.$val.'" />';
            if ($args == '') {
                $args .= '?'.$key.'='.$val;
            } else {
                $args .= '&'.$key.'='.$val;
            }
        }
    }

    $GLOBALS['conf']['modules']['osTicket']['selfurl'] = $_SERVER['PHP_SELF'].$args;

    // Used for when forms are posted via GET
    $GLOBALS['conf']['modules']['osTicket']['getargs'] = $getargs;

?>