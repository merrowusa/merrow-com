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

    // File Comments:
    // This file is the landing page for requesting live help

    // $Id: main.php,v 1.4 2005/06/26 15:55:39 mikebird Exp $ 

    include_once('../class/include.php');
    $inc = new Includer();
    $inc->template();
    $inc->live();
    $inc->chat();

    if ($GLOBALS['chat']->blocked()) {
        $GLOBALS['template']->assign('text', $GLOBALS['lang']['blocked']);
        $GLOBALS['template']->display('plain.tpl');
        $inc->finished();
        exit;
    }

    if (isset($_GET['departmentid'])) {
        $departmentid = addslashes($_GET['departmentid']);
    } else {
        $departmentid = '';
    }

    if (isset($_GET['retry'])) {
        $retry = 'true';
    } else {
        $retry = 'false';
    }

    if (!$GLOBALS['live']->status_department($departmentid)) {
        header('Location: '.$GLOBALS['conf']['url'].'/live/divert.php?divert=offline&departmentid='.$departmentid);
    }

    $GLOBALS['template']->assign('avaliable', $GLOBALS['live']->avaliable_department($departmentid));
    $GLOBALS['template']->assign('departmentid', $departmentid);
    $GLOBALS['template']->assign('nick', $GLOBALS['live']->nick());
    $GLOBALS['template']->assign('retry', $retry);

    // Display the output
    $GLOBALS['template']->display('live_main.tpl');
    
    // do events that need to be done at the end of the file
    $inc->finished();
?>