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

$ACL_LANG = array (
		'USERNAME'			=>	'Username',
		'EMAIL'				=>	'E-mail',
		'PASSWORD'			=>	'Password',
		'LOGIN'				=>	'Login!',
		'SESSION_ACTIVE'	=>	'Your Session is already active, click <a href="'.follow.'">here</a> to continue.',
		'LOGIN_SUCCESS'		=>	'welcome to the Merrow Global Stores configuration tool, click <a href="'.follow.'">here</a> to continue.',
		'LOGIN_FAILED'		=>	'Login Failed: wrong combination of '.((LOGIN_METHOD=='user'||LOGIN_METHOD=='both')?'Username':''). 
								((LOGIN_METHOD=='both')?'/':'').
								((LOGIN_METHOD=='email'||LOGIN_METHOD=='both')?'email':'').
								' and password.',
	);
?>