<?php
/***************************************************************************
								slogic_show_username.php
							----------------------------------
			created				: 09.01.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// select language function: returns the "select language" form
function slogic_show_username()
{
	return $_SESSION['login_user'];
}
?>