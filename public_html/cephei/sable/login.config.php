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
define('LOGIN_METHOD',	'user');			//@ 'user':'email','both'
define('SUCCESS_URL',	'widget_opentaps.php');		//@ redirection target on success

//@ you could delete one of block below according to the USEDB value
if(USEDB) 
	{
			$db_config = array(
				'server'	=>	'localhost',	//@ server name or ip address along with suffix ':port' if needed (localhost:3306)
				'user'		=>	'merrowco_renter',			//@ mysql username
				'pass'		=>	'7679',	//@ mysql password
				'name'		=>	'merrowco_invnetory',		//@ database name
				'tbl_user'	=>	'login_auth'		//@ user table name
			);
	}
else
	{
		$user_config = array(
			array(
				'username'	=>	'admin',
				'useremail'	=>	'admin@localhost',
				'userpassword'	=>	'e10adc3949ba59abbe56e057f20f883e',	// md5:123456
			),
			array(
				'username'	=>	'user',
				'useremail'	=>	'user@localhost',
				'userpassword'	=>	'e10adc3949ba59abbe56e057f20f883e',	// md5:123456
			),	
			array(
				'username'	=>	'charlie',
				'useremail'	=>	'charlie@merrow.com',
				'userpassword'	=>	'333943ff8a14617d66ea94ec176fc787',	// md5:7679
			),
			array(
				'username'	=>	'david',
				'useremail'	=>	'david@merrow.com',
				'userpassword'	=>	'bcb7739206f7be74cd104024d9f6514f',	// md5:merr0w
			),
			array(
				'username'	=>	'robyn',
				'useremail'	=>	'robyn@merrow.com',
				'userpassword'	=>	'bcb7739206f7be74cd104024d9f6514f',	// md5:merr0w
			),	
			array(
				'username'	=>	'michael',
				'useremail'	=>	'michael@merrow.com',
				'userpassword'	=>	'bcb7739206f7be74cd104024d9f6514f',	// md5:merr0w
			),	
			array(
				'username'	=>	'priscilla',
				'useremail'	=>	'priscilla@merrow.com',
				'userpassword'	=>	'bcb7739206f7be74cd104024d9f6514f',	// md5:merr0w
			),	
			array(
				'username'	=>	'april',
				'useremail'	=>	'april@merrow.com',
				'userpassword'	=>	'bcb7739206f7be74cd104024d9f6514f',	// md5:merr0w
			),	
			array(
				'username'	=>	'adam',
				'useremail'	=>	'adam@merrow.com',
				'userpassword'	=>	'bcb7739206f7be74cd104024d9f6514f',	// md5:merr0w
			),	
			array(
				'username'	=>	'brian',
				'useremail'	=>	'brian@merrow.com',
				'userpassword'	=>	'bcb7739206f7be74cd104024d9f6514f',	// md5:merr0w
			),	
			array(
				'username'	=>	'spencer',
				'useremail'	=>	'spencer@merrow.com',
				'userpassword'	=>	'bcb7739206f7be74cd104024d9f6514f',	// md5:merr0w
			),	
			array(
				'username'	=>	'justin',
				'useremail'	=>	'justin@merrow.com',
				'userpassword'	=>	'bcb7739206f7be74cd104024d9f6514f',	// md5:merr0w
			),			
			array(
				'username'	=>	'pam',
				'useremail'	=>	'pam@merrow.com',
				'userpassword'	=>	'bcb7739206f7be74cd104024d9f6514f',	// md5:merr0w
			),	
			
		);
	}
?>