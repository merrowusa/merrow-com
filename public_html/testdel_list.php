<?php

$my_email = $_GET['1'];
$listId = $_GET['2'];

/**
This Example shows how to pull the Info for a Member of a List using the MCAPI.php 
class and do some basic error checking.
**/
require_once 'MCAPI.class.php';
require_once 'config.inc'; //contains username & password

// Connect to the MailChimp server with the user's credentials.
$api = new MCAPI($username, $password);
if ($api->errorCode!=''){
	// an error occurred while logging in
	echo "code:".$api->errorCode."\n";
	echo "msg :".$api->errorMessage."\n";
	die();
}

$retval = $api->listMemberInfo( $listId, $my_email );

if (!$retval){
	echo "Unable to load listMemberInfo()!\n";
	echo "\tCode=".$api->errorCode."\n";
	echo "\tMsg=".$api->errorMessage."\n";
} else {
    echo "Member info:\n";
    //below is stupid code specific to what is returned
    //Don't actually something like this.
    foreach($retval as $k=>$v){
        if (is_array($v)){
            //handle the merges
            foreach($v as $l=>$w){
                echo "\t$l = $w\n";
            }
        } else {
            echo "$k = $v\n";
        }
    }
}
