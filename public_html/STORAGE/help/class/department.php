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
    // This class contains functions to deal with departments

    // $Id: department.php,v 1.4 2005/06/06 11:16:57 mikebird Exp $ 


    class Department {

        var $result;
        var $result2;
        var $array;

        function name($id)
        {
            $this->result = $GLOBALS['db']->query('SELECT `name` FROM `departments` WHERE `id`="'.$id.'"');
            return $this->result[0]['name'];
        }

        function email($id)
        {
            $this->result = $GLOBALS['db']->query('SELECT `email` FROM `departments` WHERE `id`="'.$id.'"');
            return $this->result[0]['email'];
        }

        function email_host($id)
        {
            $this->result = $GLOBALS['db']->query('SELECT `email_host` FROM `departments` WHERE `id`="'.$id.'"');
            return $this->result[0]['email_host'];
        }

        function email_username($id)
        {
            $this->result = $GLOBALS['db']->query('SELECT `email_username` FROM `departments` WHERE `id`="'.$id.'"');
            return $this->result[0]['email_username'];
        }

        function email_password($id)
        {
            $this->result = $GLOBALS['db']->query('SELECT `email_password` FROM `departments` WHERE `id`="'.$id.'"');
            return $this->result[0]['email_password'];
        }

        function get($id)
        {
            if ($this->result = $GLOBALS['db']->query('SELECT * FROM `departments` WHERE `id`="'.$id.'"')) {
                return $this->result[0];
            } else {
                return false;
            }
        }

        function update($id, $name, $email, $email_host, $email_username, $email_password)
        {
            if ($GLOBALS['db']->query('UPDATE `departments` SET `name`="'.$name.'", `email`="'.$email.'", `email_host`="'.$email_host.'", `email_username`="'.$email_username.'", `email_password`="'.$email_password.'" WHERE `id`="'.$id.'"')) {
                return true;
            } else {
                return false;
            }
        }

        function insert($name, $email, $email_host, $email_username, $email_password)
        {
            if ($GLOBALS['db']->query('INSERT INTO `departments` (`name`, `email`, `email_host`, `email_username`, `email_password`) VALUES ("'.$name.'", "'.$email.'", "'.$email_host.'", "'.$email_username.'", "'.$email_password.'")')) {
                return true;
            } else {
                return false;
            }
        }

        function delete($id)
        {
            if ($GLOBALS['db']->query('DELETE FROM `departments` WHERE `id`="'.$id.'"')) {
                $GLOBALS['assign']->delete_department($id);
                return true;
            } else {
                return false;
            }
        }

        function listall($operatorid = '')
        {
            $this->array = array();
            if ($operatorid == '0' || $operatorid == '') {
                $this->array = $GLOBALS['db']->query('SELECT * FROM `departments` WHERE 1');
            } else {
                if ($this->result = $GLOBALS['db']->query('SELECT * FROM `assigns` WHERE `operatorid`="'.$operatorid.'"')) {
                    foreach ($this->result as $key => $val) {
                        $this->result2 = $GLOBALS['db']->query('SELECT * FROM `departments` WHERE `id`="'.$this->result[$key]['departmentid'].'"');
                        $this->array = array_merge($this->array, array(array('id' => $this->result[$key]['departmentid'], 'name' => $this->result2[0]['name'], 'email' => $this->result2[0]['email'])));
                    }
                }
            }
            return $this->array;
        }

    }

?>