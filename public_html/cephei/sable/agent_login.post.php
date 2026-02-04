<?php

define('follow', 'http://merrow.com/cephei/sable/fp_dynamicstore.php?party_id='.$_COOKIE['tmpagent'].'&choice='.$_COOKIE['tmpchoice'].'&store=65533122844756220294&key=configuration');
/*
**	@desc:		PHP ajax login form using jQuery
**	@author:	programmer@chazzuka.com
**	@url:		http://www.chazzuka.com/blog
**	@date:		15 August 2008
**	@license:	Free!, but i'll be glad if i my name listed in the credits'
*/

// @ error reporting setting  (  modify as needed )
ini_set("display_errors", 1);
error_reporting(E_ALL);

//@ explicity start session just if not automatically started at php.ini
	
	
	session_start();

//@ validate inclusion
define('VALID_ACL_',		true);

//@ load dependency files
require('agent_login.config.php');
require('agent_login.lang.php');
require('agent_login.class.php');

//@ new acl instance
$acl = new Authorization;

//@check session status 
$status = $acl->check_status();

if($status)
	{
		// @ session already active
		echo "{'status':true,'message':'".$ACL_LANG['SESSION_ACTIVE']."','url':'".SUCCESS_URL."'}";
	}
else
	{
		//@ session not active
		if($_SERVER['REQUEST_METHOD']=='GET')
			{
				//@ first load
				echo "{'status':false,'message':'".$acl->form()."'}";
			}
		else
			{
				//@ form submission
				$u = (!empty($_POST['u']))?trim($_POST['u']):false;	// retrive user var
				$p = (!empty($_POST['p']))?trim($_POST['p']):false;	// retrive password var
				
				// @ try to signin
				$is_auth = $acl->signin($u,$p);
				
				if($is_auth)
					{
						//@ success
						echo "{'status': true,'message':'".$ACL_LANG['LOGIN_SUCCESS']."','url':'".SUCCESS_URL."'}";
					}
				else
					{
						//@ failed
						echo "{'status': false,'message':'".$ACL_LANG['LOGIN_FAILED']."'}";
					}
			}
	}

//@ destroy instance
unset($acl);
?>