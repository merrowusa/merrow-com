<?php
/*
**	@desc:		PHP ajax login form using jQuery
**	@author:	programmer@chazzuka.com
**	@url:		http://www.chazzuka.com/blog
**	@date:		15 August 2008
**	@license:	Free!, but i'll be glad if i my name listed in the credits'
*/

//@ validate inclusion
if(!defined('VALID_ACL_')) exit('direct access is not allowed.');

define('USEDB',			true);				//@ use database? true:false
define('LOGIN_METHOD',	'email');			//@ 'user':'email','both'
define('SUCCESS_URL',	"THIS IS NOT BEING USED IT IS REPLACED BY A THE VARIABLE FOLLOW ON THE PREVIOUS PAGE");		//@ redirection target on success


//@ you could delete one of block below according to the USEDB value
if(USEDB) 
	{
		$db_config = array(
				'server'	=>	'localhost',	//@ server name or ip address along with suffix ':port' if needed (localhost:3306)
				'user'		=>	'merrowco_renter',			//@ mysql username
				'pass'		=>	'7679',	//@ mysql password
				'name'		=>	'merrowco_inventory',		//@ database name
				'tbl_user'	=>	'login_auth'		//@ user table name
			);
		
	}
else
	{
		$user_config = array(
			
			
		);
	}
?>