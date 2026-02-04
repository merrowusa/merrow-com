<?php
/***************************************************************************
								slogic_logout.php
							-------------------------
			created				: 04.01.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// logout function: destroys the session and deletes the cookies
function slogic_logout()
{
	session_destroy();
	
	setcookie ('admin_sid', '', time()-48*3600);
	return;
}
?>