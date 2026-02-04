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
    // This file is used to exchange data between HCL and the WinApp, or any
    // other external application that interacts with HCL

    // $Id: client.php,v 1.7 2005/06/26 15:29:57 mikebird Exp $ 

    include_once('./class/include.php');
    $inc = new Includer();
    $inc->auth();
    $inc->monitor();
    $inc->image();
    $inc->department();
    $inc->chat();
    $inc->canned();
    $inc->file();
    $inc->cobrowse();

    if (isset($_GET['cobrowsepage'])) {
        $_SESSION['hcl_cobrowse'] = 'true';
        header('Location: '.rawurldecode(addslashes($_GET['url'])));
        exit;
    }

    // Let the client know which HCL version is in use
    echo('[hcl|'.$GLOBALS['conf']['version'].']');

    // Check that the login info is correct
    if (isset($_GET['username']) && isset($_GET['password'])) {
        $login = $GLOBALS['auth']->login(addslashes($_GET['username']), addslashes($_GET['password']), 'no_md5');
        if (!$login) {
            echo('[login|failure]');
            exit;
        }
    } else {
        echo('[login|no_input]');
        exit;
    }

    $departments = $GLOBALS['department']->listall();
    if (isset($departments[0])) {
        foreach ($departments as $key => $val) {
            echo('[department|'.$departments[$key]['id'].'|'.$departments[$key]['name'].']');
        }
    }

    // Let the client know what template is in use
    echo('[template|'.$GLOBALS['conf']['template'].']');

    // Let the client know how much its allowed to upload at once
    echo('[maxupload|'.$GLOBALS['file']->max_size().']');

    echo('[login|success]');

    if (isset($_GET['exit'])) {
        $GLOBALS['monitor']->status('off');
        // Tell eveyone the operator has logged out
        $GLOBALS['db']->query('INSERT INTO `activity` (`operatorid`, `status`) VALUES ("'.$GLOBALS['operator']->id().'", "loggedout")');
    
        // do events that need to be done at the end of the file
        $inc->finished();

        exit;
    } elseif (isset($_GET['connect'])) {
        // Delete old connection status
        $GLOBALS['db']->query('DELETE FROM `activity` WHERE `operatorid`="'.$GLOBALS['operator']->id().'" AND `status`="loggedout"');
    
        // do events that need to be done at the end of the file
        $inc->finished();

        exit;
    } elseif (isset($_GET['disconnect'])) {
        // Delete old connection status
        $GLOBALS['db']->query('UPDATE `activity` SET `status`="loggedout" WHERE `operatorid`="'.$GLOBALS['operator']->id().'"');
        $GLOBALS['monitor']->status('off');

        // do events that need to be done at the end of the file
        $inc->finished();

        exit;
    } elseif (isset($_GET['accept_chat'])) {
        $GLOBALS['monitor']->accept_chat(addslashes($_GET['id']), addslashes($_GET['chatid']));
        echo('[accept_chat|success]');
    
        // do events that need to be done at the end of the file
        $inc->finished();

        exit;
    } elseif (isset($_GET['decline_chat'])) {
        $GLOBALS['monitor']->decline_chat(addslashes($_GET['id']), addslashes($_GET['chatid']));
        echo('[decline_chat|success]');
    
        // do events that need to be done at the end of the file
        $inc->finished();

        exit;
    } elseif (isset($_GET['accept_opchat'])) {
        $GLOBALS['monitor']->accept_opchat(addslashes($_GET['id']), addslashes($_GET['chatid']));
        echo('[accept_opchat|success]');
    
        // do events that need to be done at the end of the file
        $inc->finished();

        exit;
    } elseif (isset($_GET['decline_opchat'])) {
        $GLOBALS['monitor']->decline_opchat(addslashes($_GET['id']), addslashes($_GET['chatid']));
        echo('[decline_opchat|success]');
    
        // do events that need to be done at the end of the file
        $inc->finished();

        exit;
    } elseif (isset($_GET['accept_transfer'])) {
        $GLOBALS['monitor']->accept_transfer(addslashes($_GET['id']), addslashes($_GET['chatid']));
        echo('[accept_transfer|success]');
    
        // do events that need to be done at the end of the file
        $inc->finished();

        exit;
    } elseif (isset($_GET['decline_transfer'])) {
        $GLOBALS['monitor']->decline_transfer(addslashes($_GET['id']), addslashes($_GET['chatid']));
        echo('[decline_chat|success]');
    
        // do events that need to be done at the end of the file
        $inc->finished();

        exit;
    } elseif (isset($_GET['online'])) {
        $GLOBALS['monitor']->status('on');
        echo('[online|success]');
    
        // do events that need to be done at the end of the file
        $inc->finished();

        exit;
    } elseif (isset($_GET['offline'])) {
        $GLOBALS['monitor']->status('off');
        echo('[offline|success]');
    
        // do events that need to be done at the end of the file
        $inc->finished();

        exit;
    } elseif (isset($_GET['initiate'])) {
        $GLOBALS['monitor']->initiate(addslashes($_GET['departmentid']), $GLOBALS['operator']->id(), addslashes($_GET['chatid']));
        echo('[initiate|success]');
    
        // do events that need to be done at the end of the file
        $inc->finished();

        exit;
    } elseif (isset($_GET['canned'])) {
        $canned = $GLOBALS['canned']->get($GLOBALS['operator']->id(), addslashes($_GET['departmentid']));
        if (isset($canned['all'][0])) {
            foreach ($canned['all'] as $key => $val) {
                echo('[canned|all|'.$canned['all'][$key]['subject'].'|'.$canned['all'][$key]['message'].']');
            }
        }
        if (isset($canned['op'][0])) {
            foreach ($canned['op'] as $key => $val) {
                echo('[canned|op|'.$canned['op'][$key]['subject'].'|'.$canned['op'][$key]['message'].']');
            }
        }
        if (isset($canned['dep'][0])) {
            foreach ($canned['dep'] as $key => $val) {
                echo('[canned|dep|'.$canned['dep'][$key]['subject'].'|'.$canned['dep'][$key]['message'].']');
            }
        }
        if (isset($canned['both'][0])) {
            foreach ($canned['both'] as $key => $val) {
                echo('[canned|both|'.$canned['both'][$key]['subject'].'|'.$canned['both'][$key]['message'].']');
            }
        }
    
        // do events that need to be done at the end of the file
        $inc->finished();

        exit;
    } elseif (isset($_GET['footprints'])) {
        $info = $GLOBALS['monitor']->info(addslashes($_GET['chatid']));
        if (isset($info['footprints'][0])) {
            foreach ($info['footprints'] as $key => $val) {
                echo('[footprint|'.$info['footprints'][$key]['hotpage'].'|'.$info['footprints'][$key]['url'].'|'.$info['footprints'][$key]['time'].']');
            }
        }
    
        // do events that need to be done at the end of the file
        $inc->finished();

        exit;
    } elseif (isset($_GET['history'])) {
        $info = $GLOBALS['monitor']->info(addslashes($_GET['chatid']));
        if (isset($info['history'][0])) {
            foreach ($info['history'] as $key => $val) {
                echo('[history|'.$info['history'][$key]['hotpage'].'|'.$info['history'][$key]['url'].'|'.$info['history'][$key]['time'].']');
            }
        }
    
        // do events that need to be done at the end of the file
        $inc->finished();

        exit;
    } elseif (isset($_GET['end_chat'])) {
        $GLOBALS['chat']->end(addslashes($_GET['chatid']));
        echo('[end_chat|success]');
    
        // do events that need to be done at the end of the file
        $inc->finished();

        exit;
    } elseif (isset($_GET['send']) && isset($_GET['message'])) {
        if ($_GET['message'] !== '') {
            $GLOBALS['chat']->session(addslashes($_GET['chatid']));
            $GLOBALS['chat']->send(addslashes($_GET['chatid']), addslashes($_GET['message']), 'true', 'false');
        }
        echo('[send|success]');
    
        // do events that need to be done at the end of the file
        $inc->finished();

        exit;
    } elseif (isset($_GET['typing'])) {
        $GLOBALS['chat']->typing(addslashes($_GET['chatid']));
        echo('[typing|success]');
    
        // do events that need to be done at the end of the file
        $inc->finished();

        exit;
    } elseif (isset($_GET['typed'])) {
        $GLOBALS['chat']->typed(addslashes($_GET['chatid']));
        echo('[typed|success]');
    
        // do events that need to be done at the end of the file
        $inc->finished();

        exit;
    } elseif (isset($_GET['transfer'])) {
        $GLOBALS['chat']->transfer(addslashes($_GET['chatid']), addslashes($_GET['operatorid']), addslashes($_GET['departmentid']));
        echo('[transferchat|pending]');
    
        // do events that need to be done at the end of the file
        $inc->finished();

        exit;
    } elseif (isset($_GET['transferchat'])) {
        $transfer = $GLOBALS['live']->avaliable_department('', 'all');
        if (isset($transfer[0])) {
            foreach ($transfer as $key => $val) {
                if (isset($transfer[$key]['operators'][0])) {
                    foreach($transfer[$key]['operators'] as $key2 => $val2) {
                        echo('[transferchat|'.$transfer[$key]['id'].'|'.$transfer[$key]['name'].'|'.$transfer[$key]['operators'][$key2]['id'].'|'.$transfer[$key]['operators'][$key2]['name'].'|'.$transfer[$key]['operators'][$key2]['status'].']');
                    }
                }
            }
        }
    
        // do events that need to be done at the end of the file
        $inc->finished();

        exit;
    } elseif (isset($_GET['transfermessages'])) {
        $GLOBALS['chat']->session(addslashes($_GET['chatid']));
        $messages = $GLOBALS['chat']->get_messages('true', addslashes($_GET['chatid']));
        if (isset($messages[0])) {
            foreach ($messages as $key => $val) {
                echo('[message|'.char_to_html($messages[$key]['name']).'|'.char_to_html($messages[$key]['message']).']');
            }
        }
    
        // do events that need to be done at the end of the file
        $inc->finished();

        exit;
    } elseif (isset($_GET['transferfile'])) {
        if ($_FILES['file']['size'] > 0) {
            $GLOBALS['file']->insert('true', $_FILES['file'], addslashes($_GET['chatid']));
            echo('[transferfile|success]');
        } else {
            echo('[transferfile|failure]');
        }
    
        // do events that need to be done at the end of the file
        $inc->finished();

        exit;
    } elseif (isset($_GET['requestfile'])) {
        $GLOBALS['file']->request_transfer(addslashes($_GET['chatid']));
        echo('[requestfile|success]');
    
        // do events that need to be done at the end of the file
        $inc->finished();

        exit;
    } elseif (isset($_GET['startcobrowse'])) {
        if ($GLOBALS['cobrowse']->start(addslashes($_GET['chatid']))) {
            echo('[cobrowse|success]');
        } else {
            echo('[cobrowse|failure]');
        }
    
        // do events that need to be done at the end of the file
        $inc->finished();

        exit;
    } elseif (isset($_GET['cobrowsedisconnect'])) {
        if ($GLOBALS['cobrowse']->disconnect(addslashes($_GET['chatid']))) {
            echo('[cobrowsedisconnect|success]');
        } else {
            echo('[cobrowsedisconnect|failure]');
        }
    
        // do events that need to be done at the end of the file
        $inc->finished();

        exit;
    } elseif (isset($_GET['cobrowsechangepage'])) {
        if ($GLOBALS['cobrowse']->changepage(addslashes($_GET['chatid']), rawurldecode(addslashes($_GET['url'])))) {
            echo('[cobrowsechangepage|success]');
        } else {
            echo('[cobrowsechangepage|failure]');
        }
    
        // do events that need to be done at the end of the file
        $inc->finished();

        exit;
    } elseif (isset($_GET['cobrowsemarker'])) {
        if ($_GET['cobrowsemarker'] == 'clear') {
            if ($GLOBALS['cobrowse']->clearmarkers(addslashes($_GET['chatid']), 'true')) {
                echo('[cobrowsemarker|cleared]');
            } else {
                echo('[cobrowsemarker|failure]');
            }
        } else {
            if ($GLOBALS['cobrowse']->setmarker(addslashes($_GET['chatid']), addslashes($_GET['x']), addslashes($_GET['y']), addslashes($_GET['cobrowsemarker']))) {
                echo('[cobrowsemarker|success|'.addslashes($_GET['cobrowsemarker']).']');
            } else {
                echo('[cobrowsemarker|failure]');
            }
        }
    
        // do events that need to be done at the end of the file
        $inc->finished();

        exit;
    } elseif (isset($_GET['coforms'])) {
        if ($GLOBALS['cobrowse']->setforms(addslashes($_GET['chatid']), addslashes($_GET['type']), char_to_html(rawurldecode(addslashes($_GET['name']))), char_to_html(rawurldecode(addslashes($_GET['value']))), 'true')) {
            echo('[coforms|success]');
        } else {
            echo('[coforms|failure]');
        }
    
        // do events that need to be done at the end of the file
        $inc->finished();

        exit;
    } elseif (isset($_GET['cobrowse'])) {
        // Keep the connection open, and flush the output instead of refreshing the page
        @ob_end_flush();

        $i = 1;
        $GLOBALS['chat']->session(addslashes($_GET['chatid']));
        while ($i > 0) {

            // Stop if the operator has logged out
            if ($GLOBALS['db']->query('SELECT `id` FROM `activity` WHERE `operatorid`="'.$GLOBALS['operator']->id().'" AND `status`="loggedout"')) {
                exit;
            }
            // Stop if the operator has timed out
            if (!$GLOBALS['operator']->online()) {
                $GLOBALS['db']->query('UPDATE `activity` SET `status`="loggedout" WHERE `operatorid`="'.$GLOBALS['operator']->id().'"');
                exit;
            }

            if (!$GLOBALS['db']->query('SELECT `id` FROM `activity` WHERE `operatorid`="'.$GLOBALS['operator']->id().'"')) {
                exit;
            } else {
                if ($forms = $GLOBALS['cobrowse']->getforms(addslashes($_GET['chatid']), 'true')) {
                    foreach ($forms as $key => $val) {
                        echo('[element|'.$forms[$key]['type'].'|'.$forms[$key]['name'].'|'.$forms[$key]['value'].']');
                    }
                } else {
                    echo('[activity|false]');
                }

                echo(chr(13));

                // Flush the output
                @flush();
                @ob_flush();
                sleep(1);
                // Add some execution time on
                set_time_limit('10');
            }
        }
    } elseif (isset($_GET['chat'])) {
        // Keep the connection open, and flush the output instead of refreshing the page
        @ob_end_flush();

        $i = 1;
        $GLOBALS['chat']->session(addslashes($_GET['chatid']));
        while ($i > 0) {

            // Stop if the operator has logged out
            if ($GLOBALS['db']->query('SELECT `id` FROM `activity` WHERE `operatorid`="'.$GLOBALS['operator']->id().'" AND `status`="loggedout"')) {
                exit;
            }
            // Stop if the operator has timed out
            if (!$GLOBALS['operator']->online()) {
                $GLOBALS['db']->query('UPDATE `activity` SET `status`="loggedout" WHERE `operatorid`="'.$GLOBALS['operator']->id().'"');
                exit;
            }

            // Do processing
            if (!$GLOBALS['db']->query('SELECT `id` FROM `activity` WHERE `operatorid`="'.$GLOBALS['operator']->id().'"')) {
                echo('[close|true]');
                exit;
            } else {

                $message = false;
                $typing = false;

                $action = $GLOBALS['chat']->response(addslashes($_GET['chatid']), 'false', 'true', '');

                if (preg_match("/\|message:(.*)\|/", $action, $matches)) {
                    $message = true;
                    echo('[message|'.$matches[1].']');
                }

                if (preg_match("/\|download:(.*):(.*)\|/", $action, $matches)) {
                    echo('[transferfile|'.char_to_html(urldecode($matches[1])).'|'.$GLOBALS['conf']['url'].'/live/chat/download.php?client&id='.$matches[2].'&admin&time='.time().']');
                }

                if ($action !== '') {
                    $action = explode('|', $action);
                    foreach ($action as $key => $val) {
                        switch ($action[$key]) {
                            case 'typing':
                                echo('[typing|true]');
                                $typing = true;
                                break;
                            case 'transfer-yes':
                                echo('[transferchat|success]');
                                break;
                            case 'transfer-no':
                                echo('[transferchat|failure]');
                                break;
                            case 'close':
                                echo('[close|true]');
                                exit;
                                break;
                        }
                    }
                }

                if ($message || !$typing) {
                    //not typing
                    echo('[typing|false]');
                }

                if ($GLOBALS['cobrowse']->enabled(addslashes($_GET['chatid']))) {
                    echo('[cobrowse|true]');
                } else {
                    echo('[cobrowse|false]');
                }

                echo(chr(13));

                // Flush the output
                @flush();
                @ob_flush();
                sleep(1);
                // Add some execution time on
                set_time_limit('10');
            }
        }
    } elseif(isset($_GET['monitor'])) {
        // Keep the connection open, and flush the output instead of refreshing the page
        @ob_end_flush();

        if(isset($_GET['id'])) {
            $id = addslashes($_GET['id']);
            if ($GLOBALS['db']->query('SELECT `id` FROM `activity` WHERE `id`="'.$id.'"')) {
                $GLOBALS['db']->query('UPDATE `activity` SET `status`="loggedin" WHERE `id`="'.$id.'"');
            } else {
                // Tell eveyone the operator has logged in
                $GLOBALS['db']->query('DELETE FROM `activity` WHERE `operatorid`="'.$GLOBALS['operator']->id().'"');
                $GLOBALS['db']->query('INSERT INTO `activity` (`operatorid`, `status`) VALUES ("'.$GLOBALS['operator']->id().'", "loggedin")');
                $id = $GLOBALS['db']->id(); 
            }
        } else {
            // Tell eveyone the operator has logged in
            $GLOBALS['db']->query('DELETE FROM `activity` WHERE `operatorid`="'.$GLOBALS['operator']->id().'"');
            $GLOBALS['db']->query('INSERT INTO `activity` (`operatorid`, `status`) VALUES ("'.$GLOBALS['operator']->id().'", "loggedin")');
            $id = $GLOBALS['db']->id();
        }

        echo('[id|'.$id.']');

        $i = 1;
        while ($i > 0) {

            // Make sure no one else is logged in with the same username
            if ($GLOBALS['db']->query('SELECT `id` FROM `activity` WHERE `operatorid`="'.$GLOBALS['operator']->id().'" AND `status`="loggedin" AND `id`!="'.$id.'"')) {
                $GLOBALS['db']->query('DELETE FROM `activity` WHERE `id`="'.$id.'"');
                exit;
            }

            // Stop if the operator has logged out
            if ($GLOBALS['db']->query('SELECT `id` FROM `activity` WHERE `id`="'.$id.'" AND `status`="loggedout"')) {
                exit;
            }

            // Do processing
            if (!$GLOBALS['db']->query('SELECT `id` FROM `activity` WHERE  `id`="'.$id.'"')) {
                exit;
            } else {
                if ($GLOBALS['monitor']->response() == '|') {
                    echo('[activity|false]');
                } else {
                    echo('[activity|true]');
                }

                $GLOBALS['monitor']->result = array();
                $GLOBALS['monitor']->result2 = array();
                $GLOBALS['monitor']->sounds = array();
                $GLOBALS['monitor']->chats = false;
                $GLOBALS['monitor']->visitors = false;

                if ($chats = $GLOBALS['monitor']->chats()) {
                    foreach ($chats as $key => $val) {
                        echo('[chat|'.$chats[$key]['id'].'|'.$chats[$key]['chatid'].'|'.$chats[$key]['assignid'].'|'.$chats[$key]['departmentid'].'|'.$chats[$key]['operatorid'].'|'.$chats[$key]['nick'].'|'.$chats[$key]['alert'].'|'.$chats[$key]['timeo'].'|'.$chats[$key]['timeg'].'|'.$chats[$key]['typeo'].'|'.$chats[$key]['typeg'].'|'.$chats[$key]['transfer'].'|'.$chats[$key]['type'].'|'.$chats[$key]['title'].'|'.$chats[$key]['name'].'|'.$GLOBALS['department']->name($chats[$key]['departmentid']).']');
                    }
                }
                if ($visitors = $GLOBALS['monitor']->visitors()) {
                    foreach ($visitors as $key => $val) {
                        $timeonsite = secs_to_hms(time() - $visitors[$key]['start']);
                        $timeonpage = secs_to_hms(time() - $visitors[$key]['pagestart']);
                        echo('[visitor|'.$visitors[$key]['id'].'|'.$visitors[$key]['timestamp'].'|'.$visitors[$key]['ip'].'|'.$visitors[$key]['useragent'].'|'.$visitors[$key]['hostname'].'|'.$visitors[$key]['referrer'].'|'.$visitors[$key]['requests'].'|'.$visitors[$key]['visits'].'|'.$visitors[$key]['start'].'|'.$visitors[$key]['url'].'|'.$visitors[$key]['chatting'].'|'.$visitors[$key]['status'].'|'.$timeonsite.'|'.$timeonpage.']');
                    }
                }
                if ($sounds = $GLOBALS['monitor']->sounds()) {
                    foreach ($sounds as $key => $val) {
                        echo('[sound|'.$sounds[$key]['name'].']');
                    }
                }

                echo(chr(13));

                // Flush the output
                @flush();
                @ob_flush();
                sleep(1);
                // Add some execution time on
                set_time_limit('10');
            }
        }
    }
    
    // do events that need to be done at the end of the file
    $inc->finished();

?>