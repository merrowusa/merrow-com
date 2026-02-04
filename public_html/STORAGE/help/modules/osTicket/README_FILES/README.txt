osTicket, Open Source Support Ticket System     
http://www.osticket.com                         
                                                  
Copyright (C) 2003 - 2005 osTicket, osTicket Dev Team  
                                                   
Released under the GNU General Public License 
----------------------------------------------------------------------------------


http://www.osticket.com/docs.php


Table of Contents

A.) Fresh Installation
B.) Upgrading from 1.3.0
C.) Upgrading from 1.2.x
D.) Piping Setup Mothod
E.) Credits

For complete docs and guides please visit http://www.osticket.com/docs.php


----------------------------------------------------------------------------------

A.) FRESH INSTALLATION

1.) Unzip and upload files and directories to a directory on your server.
	(i.e. /osticket/)

2.) Chmod config.php 777 (/osticket/config.php).

3.) Create a database in MySQL.

4.) Go to http://www.your-domain.com/osticket/setup.php. Follow the instuctions.

5.) Chmod config.php back to 644 (/osticket/config.php)

6.) Remove setup.php, until you do the system is disabled.

7.) You should be able to configure settings and setup email.


----------------------------------------------------------------------------------

B.) UPGRADING FROM 1.3.0 beta

1.) Always backup your current installation.

2.) Please apply any available patches to current install if needed.

3.) Upload all files EXCEPT "setup.php" to your osticket directory.

4.) Open config.php in your text editor...

	Replace the following lines with what is on your current config.php	

	/*the path to osticket homepage */
	$homepath_dir="CONFIG-HOMEPATH";
	/*The Title */
	$osticket_title="CONFIG-TITLE";
	/*The root path to osticket install directory */
	$rootpath_dir="CONFIG-ROOTPATH";

	/*Configure your MySQL Settings */
	$db_type = "CONFIG-DBTYPE";
	$db_host = "CONFIG-DBHOST";
	$db_name = "CONFIG-DBNAME";
	$db_user = "CONFIG-DBUSER";
	$db_pass = "CONFIG-DBPASS";

P.S: Don't want to do the work??? email us at support@osticket.com and we will do the upgrade for you...for a small fee.

----------------------------------------------------------------------------------

----------------------------------------------------------------------------------

C.) UPGRADING FROM 1.2.X

1.) Always backup your current installation.

2.) Upload all files EXCEPT "setup.php" to your osticket directory.

3.) replace your config.php with the new one and follow setup the config info as shown above. (section B)
	
4.) Upload "osticket_upgrade.sql" file so MySQL can query it. You can open this file 
	up if you want to query it manually instead of uploading the file.


P.S: Don't want to do the work??? email us at support@osticket.com and we will do the upgrade for you...for a small fee.
	
----------------------------------------------------------------------------------

D.) PIPING SETUP METHOD
Preferred piping method

1.) Open up the "automail.pl" file...
	
	On about line 47 to 52, you need to configure it with your SQL settings
	
	By default, flood control is set to stop sending out emails if it recieves 
	more then 5 within 60 seconds from a user. This can be changed by doing the 
	following. This is OPTIONAL.

		Look for $smoog_msgrate on line 300 and change the timer settings.
		(Default is  60, which equals to 1 minute)
		The next line down, there should be the message count.
		(Default is 5)

2.) Insure "automail.pl" is in the cgi-bin or anywhere perl can be excecuted from 
	and chmod the file to 755.

3.) Setup the aliases which could be done in the control panel by setting up a 
	forwarder. Now insert the following lines, it may be different depending on 
	what kind of system your setting this up for.

		support |/full_path_to/cgi-bin/automail.pl

	In cPanel, just create a Fowarder in your Mail Section.

		support@example.com |/home/username/public_html/cgi-bin/automail.pl

If you need additional help in setting this up, please consult our forums.
http://www.osticket.com/forums

----------------------------------------------------------------------------------

E.) CREDITS:

	Joseph Shain
	info@jshain.com
	www.jshain.com

	Jared Collums
	www.ubcomics.com

	Peter Rotich
	Enhance Solutions,LLC
	www.enhancesoft.com

	Chris Mathers 
	chris@cheapdemos.com
	www.cheapdemos.com

	FOR FULL CREDITS, PLEASE VISIT WWW.OSTICKET.COM

----------------------------------------------------------------------------------

Thank you for trying osTicket STS! 

For uptodate documentation please refer to osTicket site.
http://www.osticket.com/docs.php

	
Please refer to osTicket Website for additional information.
http://www.osticket.com


For all other questions and support, please visit our forums.
http://osticket.com/forums/

Users interested in commercial support should email comsupport@osticket.com 
for more info.
