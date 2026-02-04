<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
 <link rel="stylesheet" href="http://css.imerrow.com/css_major/agent_interactive_form.css" type="text/css" charset="utf-8">
 <title>enterprise database</title>
 </head>
 <style>
 input.pme-add {
			color: black;
	font-weight: bold;
	font-size: 14px;
	background-color: orange;
	position: relative;
	top: 10px;
	left: 60px;
	visibility: visible;
}
	table.pme-main 	     { border-collapse: collapse; border-spacing: 0px; width: 960px;
	margin-top: 20px;
	border-width: 1px;
	border-color: #004d9c;
}
input.pme-next {
		position: relative;
	visibility: visible;
	left: 60px;
}
input.pme-last {
		position: relative;
	visibility: visible;
	left: 60px;
}
input.pme-first {
			position: relative;
	visibility: visible;
}
input.pme-prev {
			position: relative;
	visibility: visible;
}

input.pme-goto {
			position: relative;
	visibility: visible;
		left: 60px;
}

select.pme-goto {
		position: relative;
	visibility: visible;
		left: 60px;
}
input.pme-view {
		position: relative;
	visibility: visible;
		right: 50px;
}
</style>

</head>
<body>
<h3>merrow enterprise accounts</h3>
<div class="list_top">
  <div class="spacer"> <a href="http://merrow.com/widget_enterprise_targetsdb.php" target="mammy">Enterprise Targets</a> </div>
      <div class="spacer"> <a href="http://merrow.com/widget_enterprise_machinesdb.php" target="mammy">Machines by Facility</a> </div>
      <div class="spacer">   <a href="http://merrow.com/widget_enterprise_namesdb.php" target="mammy">Contacts by Facility</a> </div>
      <div class="spacer">    <a href="http://merrow.com/widget_enterprise_fabricdb.php" target="mammy">Fabrics by Faciltity</a> </div>
       <div class="spacer">   <a href="http://merrow.com/widget_enterprise_applicationdb.php" target="mammy">Applications  by Faciltity</a> </div>
         </div><div class="stop_the_bleed"></div>
         
         <?php
/*****************************************************************

    File name: browser.php
    Author: Gary White
    Last modified: November 10, 2003
    
    **************************************************************

    Copyright (C) 2003  Gary White
    
    This program is free software; you can redistribute it and/or
    modify it under the terms of the GNU General Public License
    as published by the Free Software Foundation; either version 2
    of the License, or (at your option) any later version.
    
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details at:
    http://www.gnu.org/copyleft/gpl.html

    **************************************************************

    Browser class
    
    Identifies the user's Operating system, browser and version
    by parsing the HTTP_USER_AGENT string sent to the server
    
    Typical Usage:
    
        require_once($_SERVER['DOCUMENT_ROOT'].'/include/browser.php');
        $br = new Browser;
        echo "$br->Platform, $br->Name version $br->Version";
    
    For operating systems, it will correctly identify:
        Microsoft Windows
        MacIntosh
        Linux

    Anything not determined to be one of the above is considered to by Unix
    because most Unix based browsers seem to not report the operating system.
    The only known problem here is that, if a HTTP_USER_AGENT string does not
    contain the operating system, it will be identified as Unix. For unknown
    browsers, this may not be correct.
    
    For browsers, it should correctly identify all versions of:
        Amaya
        Galeon
        iCab
        Internet Explorer
            For AOL versions it will identify as Internet Explorer (AOL) and the version
            will be the AOL version instead of the IE version.
        Konqueror
        Lynx
        Mozilla
        Netscape Navigator/Communicator
        OmniWeb
        Opera
        Pocket Internet Explorer for handhelds
        Safari
        WebTV
*****************************************************************/

class browser{

    var $Name = "Unknown";
    var $Version = "Unknown";
    var $Platform = "Unknown";
    var $UserAgent = "Not reported";
    var $AOL = false;

    function browser(){
        $agent = $_SERVER['HTTP_USER_AGENT'];

        // initialize properties
        $bd['platform'] = "Unknown";
        $bd['browser'] = "Unknown";
        $bd['version'] = "Unknown";
        $this->UserAgent = $agent;

        // find operating system
        if (eregi("win", $agent))
            $bd['platform'] = "Windows";
        elseif (eregi("mac", $agent))
            $bd['platform'] = "MacIntosh";
        elseif (eregi("linux", $agent))
            $bd['platform'] = "Linux";
        elseif (eregi("OS/2", $agent))
            $bd['platform'] = "OS/2";
        elseif (eregi("BeOS", $agent))
            $bd['platform'] = "BeOS";

        // test for Opera        
        if (eregi("opera",$agent)){
            $val = stristr($agent, "opera");
            if (eregi("/", $val)){
                $val = explode("/",$val);
                $bd['browser'] = $val[0];
                $val = explode(" ",$val[1]);
                $bd['version'] = $val[0];
            }else{
                $val = explode(" ",stristr($val,"opera"));
                $bd['browser'] = $val[0];
                $bd['version'] = $val[1];
            }

        // test for WebTV
        }elseif(eregi("webtv",$agent)){
            $val = explode("/",stristr($agent,"webtv"));
            $bd['browser'] = $val[0];
            $bd['version'] = $val[1];
        
        // test for MS Internet Explorer version 1
        }elseif(eregi("microsoft internet explorer", $agent)){
            $bd['browser'] = "MSIE";
            $bd['version'] = "1.0";
            $var = stristr($agent, "/");
            if (ereg("308|425|426|474|0b1", $var)){
                $bd['version'] = "1.5";
            }

        // test for NetPositive
        }elseif(eregi("NetPositive", $agent)){
            $val = explode("/",stristr($agent,"NetPositive"));
            $bd['platform'] = "BeOS";
            $bd['browser'] = $val[0];
            $bd['version'] = $val[1];

        // test for MS Internet Explorer
        }elseif(eregi("msie",$agent) && !eregi("opera",$agent)){
            $val = explode(" ",stristr($agent,"msie"));
            $bd['browser'] = $val[0];
            $bd['version'] = $val[1];
        
        // test for MS Pocket Internet Explorer
        }elseif(eregi("mspie",$agent) || eregi('pocket', $agent)){
            $val = explode(" ",stristr($agent,"mspie"));
            $bd['browser'] = "MSPIE";
            $bd['platform'] = "WindowsCE";
            if (eregi("mspie", $agent))
                $bd['version'] = $val[1];
            else {
                $val = explode("/",$agent);
                $bd['version'] = $val[1];
            }
            
        // test for Galeon
        }elseif(eregi("galeon",$agent)){
            $val = explode(" ",stristr($agent,"galeon"));
            $val = explode("/",$val[0]);
            $bd['browser'] = $val[0];
            $bd['version'] = $val[1];
            
        // test for Konqueror
        }elseif(eregi("Konqueror",$agent)){
            $val = explode(" ",stristr($agent,"Konqueror"));
            $val = explode("/",$val[0]);
            $bd['browser'] = $val[0];
            $bd['version'] = $val[1];
            
        // test for iCab
        }elseif(eregi("icab",$agent)){
            $val = explode(" ",stristr($agent,"icab"));
            $bd['browser'] = $val[0];
            $bd['version'] = $val[1];

        // test for OmniWeb
        }elseif(eregi("omniweb",$agent)){
            $val = explode("/",stristr($agent,"omniweb"));
            $bd['browser'] = $val[0];
            $bd['version'] = $val[1];

        // test for Phoenix
        }elseif(eregi("Phoenix", $agent)){
            $bd['browser'] = "Phoenix";
            $val = explode("/", stristr($agent,"Phoenix/"));
            $bd['version'] = $val[1];
        
        // test for Firebird
        }elseif(eregi("firebird", $agent)){
            $bd['browser']="Firebird";
            $val = stristr($agent, "Firebird");
            $val = explode("/",$val);
            $bd['version'] = $val[1];
            
        // test for Firefox
        }elseif(eregi("Firefox", $agent)){
            $bd['browser']="Firefox";
            $val = stristr($agent, "Firefox");
            $val = explode("/",$val);
            $bd['version'] = $val[1];
            
      // test for Mozilla Alpha/Beta Versions
        }elseif(eregi("mozilla",$agent) && 
            eregi("rv:[0-9].[0-9][a-b]",$agent) && !eregi("netscape",$agent)){
            $bd['browser'] = "Mozilla";
            $val = explode(" ",stristr($agent,"rv:"));
            eregi("rv:[0-9].[0-9][a-b]",$agent,$val);
            $bd['version'] = str_replace("rv:","",$val[0]);
            
        // test for Mozilla Stable Versions
        }elseif(eregi("mozilla",$agent) &&
            eregi("rv:[0-9]\.[0-9]",$agent) && !eregi("netscape",$agent)){
            $bd['browser'] = "Mozilla";
            $val = explode(" ",stristr($agent,"rv:"));
            eregi("rv:[0-9]\.[0-9]\.[0-9]",$agent,$val);
            $bd['version'] = str_replace("rv:","",$val[0]);
        
        // test for Lynx & Amaya
        }elseif(eregi("libwww", $agent)){
            if (eregi("amaya", $agent)){
                $val = explode("/",stristr($agent,"amaya"));
                $bd['browser'] = "Amaya";
                $val = explode(" ", $val[1]);
                $bd['version'] = $val[0];
            } else {
                $val = explode("/",$agent);
                $bd['browser'] = "Lynx";
                $bd['version'] = $val[1];
            }
        
        // test for Safari
        }elseif(eregi("safari", $agent)){
            $bd['browser'] = "Safari";
            $bd['version'] = "";

        // remaining two tests are for Netscape
        }elseif(eregi("netscape",$agent)){
            $val = explode(" ",stristr($agent,"netscape"));
            $val = explode("/",$val[0]);
            $bd['browser'] = $val[0];
            $bd['version'] = $val[1];
        }elseif(eregi("mozilla",$agent) && !eregi("rv:[0-9]\.[0-9]\.[0-9]",$agent)){
            $val = explode(" ",stristr($agent,"mozilla"));
            $val = explode("/",$val[0]);
            $bd['browser'] = "Netscape";
            $bd['version'] = $val[1];
        }
        
        // clean up extraneous garbage that may be in the name
        $bd['browser'] = ereg_replace("[^a-z,A-Z]", "", $bd['browser']);
        // clean up extraneous garbage that may be in the version        
        $bd['version'] = ereg_replace("[^0-9,.,a-z,A-Z]", "", $bd['version']);
        
        // check for AOL
        if (eregi("AOL", $agent)){
            $var = stristr($agent, "AOL");
            $var = explode(" ", $var);
            $bd['aol'] = ereg_replace("[^0-9,.,a-z,A-Z]", "", $var[1]);
        }
        
        // finally assign our properties
        $this->Name = $bd['browser'];
        $this->Version = $bd['version'];
        $this->Platform = $bd['platform'];
        $this->AOL = $bd['aol'];
    }
}
?>



<?php

/*
 * IMPORTANT NOTE: This generated file contains only a subset of huge amount
 * of options that can be used with phpMyEdit. To get information about all
 * features offered by phpMyEdit, check official documentation. It is available
 * online and also for download on phpMyEdit project management page:
 *
 * http://platon.sk/projects/main_page.php?project_id=5
 *
 * This file was generated by:
 *
 *                    phpMyEdit version: 5.7.1
 *       phpMyEdit.class.php core class: 1.204
 *            phpMyEditSetup.php script: 1.50
 *              generating setup script: 1.50
 */

// MySQL host name, user name, password, database, and table
$opts['hn'] = 'localhost';
$opts['un'] = 'merrowco_mailman';
$opts['pw'] = '7679';
$opts['db'] = 'merrowco_cephei';
$opts['tb'] = 'enterprise';

// Name of field which is the unique key
$opts['key'] = 'id';

// Type of key field (int/real/string/date etc.)
$opts['key_type'] = 'int';

// Sorting field(s)
$opts['sort_field'] = array('id');

// Number of records to display on the screen
// Value of -1 lists all records in a table
$opts['inc'] = 15;

// Options you wish to give the users
// A - add,  C - change, P - copy, V - view, D - delete,
// F - filter, I - initial sort suppressed
$opts['options'] = 'ACPVDF';

// Number of lines to display on multiple selection filters
$opts['multiple'] = '4';

// Navigation style: B - buttons (default), T - text links, G - graphic links
// Buttons position: U - up, D - down (default)
$opts['navigation'] = 'DB';

// Display special page elements
$opts['display'] = array(
	'form'  => true,
	'query' => true,
	'sort'  => true,
	'time'  => true,
	'tabs'  => true
);

// Set default prefixes for variables
$opts['js']['prefix']               = 'PME_js_';
$opts['dhtml']['prefix']            = 'PME_dhtml_';
$opts['cgi']['prefix']['operation'] = 'PME_op_';
$opts['cgi']['prefix']['sys']       = 'PME_sys_';
$opts['cgi']['prefix']['data']      = 'PME_data_';

/* Get the user's default language and use it if possible or you can
   specify particular one you want to use. Refer to official documentation
   for list of available languages. */
$opts['language'] = $_SERVER['HTTP_ACCEPT_LANGUAGE'] . '-UTF8';

/* Table-level filter capability. If set, it is included in the WHERE clause
   of any generated SELECT statement in SQL query. This gives you ability to
   work only with subset of data from table.

$opts['filters'] = "column1 like '%11%' AND column2<17";
$opts['filters'] = "section_id = 9";
$opts['filters'] = "PMEtable0.sessions_count > 200";
*/

/* Field definitions
   
Fields will be displayed left to right on the screen in the order in which they
appear in generated list. Here are some most used field options documented.

['name'] is the title used for column headings, etc.;
['maxlen'] maximum length to display add/edit/search input boxes
['trimlen'] maximum length of string content to display in row listing
['width'] is an optional display width specification for the column
          e.g.  ['width'] = '100px';
['mask'] a string that is used by sprintf() to format field output
['sort'] true or false; means the users may sort the display on this column
['strip_tags'] true or false; whether to strip tags from content
['nowrap'] true or false; whether this field should get a NOWRAP
['select'] T - text, N - numeric, D - drop-down, M - multiple selection
['options'] optional parameter to control whether a field is displayed
  L - list, F - filter, A - add, C - change, P - copy, D - delete, V - view
            Another flags are:
            R - indicates that a field is read only
            W - indicates that a field is a password field
            H - indicates that a field is to be hidden and marked as hidden
['URL'] is used to make a field 'clickable' in the display
        e.g.: 'mailto:$value', 'http://$value' or '$page?stuff';
['URLtarget']  HTML target link specification (for example: _blank)
['textarea']['rows'] and/or ['textarea']['cols']
  specifies a textarea is to be used to give multi-line input
  e.g. ['textarea']['rows'] = 5; ['textarea']['cols'] = 10
['values'] restricts user input to the specified constants,
           e.g. ['values'] = array('A','B','C') or ['values'] = range(1,99)
['values']['table'] and ['values']['column'] restricts user input
  to the values found in the specified column of another table
['values']['description'] = 'desc_column'
  The optional ['values']['description'] field allows the value(s) displayed
  to the user to be different to those in the ['values']['column'] field.
  This is useful for giving more meaning to column values. Multiple
  descriptions fields are also possible. Check documentation for this.
*/

$opts['fdd']['id'] = array(
  'name'     => 'ID',
  'select'   => 'T',
  'options'  => 'AVCPDR', // auto increment
  'maxlen'   => 200,
  'default'  => '0',
  'sort'     => true
);
$opts['fdd']['ot_id'] = array(
  'name'     => 'Party ID',
  'select'   => 'T',
  'maxlen'   => 10,
  'URL'      => 'https://192.168.2.105:8443/crmsfa/control/viewAccount?partyId=$value',
  'sort'     => true
);

$opts['fdd']['corporate_name'] = array(
  'name'     => 'Corporate name',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['branch_name'] = array(
  'name'     => 'Branch name',
  'select'   => 'T',
  'maxlen'   => 200,
  'sort'     => true
);

$opts['fdd']['fabric1_name'] = array(
  'name'     => 'Fabric1 name',
  'select'   => 'T',
'options'  => 'CLAV',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['fabric1_priority'] = array(
  'name'     => 'Fabric1 priority',
  'select'   => 'T',
'options'  => 'CAV',
  'maxlen'   => 600,
  'sort'     => true
);
$opts['fdd']['fabric1_description'] = array(
  'name'     => 'Fabric1 description',
  'select'   => 'T',
'options'  => 'CAV',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['fabric2_name'] = array(
  'name'     => 'Fabric2 name',
  'select'   => 'T',
'options'  => 'CAVL',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['fabric2_priority'] = array(
  'name'     => 'Fabric2 priority',
  'select'   => 'T',
'options'  => 'CAV',
  'maxlen'   => 600,
  'sort'     => true
);
$opts['fdd']['fabric2_description'] = array(
  'name'     => 'Fabric2 description',
  'select'   => 'T',
'options'  => 'CAV',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['fabric3_name'] = array(
  'name'     => 'Fabric3 name',
  'select'   => 'T',
'options'  => 'CAVL',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['fabric3_priority'] = array(
  'name'     => 'Fabric3 priority',
  'select'   => 'T',
'options'  => 'CAV',
  'maxlen'   => 600,
  'sort'     => true
);
$opts['fdd']['fabric3_description'] = array(
  'name'     => 'Fabric3 description',
  'select'   => 'T',
'options'  => 'CAV',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['fabric4_name'] = array(
  'name'     => 'Fabric4 name',
  'select'   => 'T',
'options'  => 'CAVL',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['fabric4_priority'] = array(
  'name'     => 'Fabric4 priority',
  'select'   => 'T',
'options'  => 'CAV',
  'maxlen'   => 600,
  'sort'     => true
);
$opts['fdd']['fabric4_description'] = array(
  'name'     => 'Fabric4 description',
  'select'   => 'T',
'options'  => 'CAV',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['fabric5_name'] = array(
  'name'     => 'Fabric5 name',
  'select'   => 'T',
'options'  => 'CAV',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['fabric5_priority'] = array(
  'name'     => 'Fabric5 priority',
  'select'   => 'T',
'options'  => 'CAV',
  'maxlen'   => 600,
  'sort'     => true
);
$opts['fdd']['fabric5_description'] = array(
  'name'     => 'Fabric5 description',
  'select'   => 'T',
'options'  => 'CAV',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['fabric6_name'] = array(
  'name'     => 'Fabric6 name',
  'select'   => 'T',
'options'  => 'CAV',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['fabric6_priority'] = array(
  'name'     => 'Fabric6 priority',
  'select'   => 'T',
'options'  => 'CAV',
  'maxlen'   => 600,
  'sort'     => true
);
$opts['fdd']['fabric6_description'] = array(
  'name'     => 'Fabric6 description',
  'select'   => 'T',
'options'  => 'CAV',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['fabric7_name'] = array(
  'name'     => 'Fabric7 name',
  'select'   => 'T',
'options'  => 'CAV',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['fabric7_priority'] = array(
  'name'     => 'Fabric7 priority',
  'select'   => 'T',
'options'  => 'CAV',
  'maxlen'   => 600,
  'sort'     => true
);
$opts['fdd']['fabric7_description'] = array(
  'name'     => 'Fabric7 description',
  'select'   => 'T',
'options'  => 'CAV',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['fabric8_name'] = array(
  'name'     => 'Fabric8 name',
  'select'   => 'T',
'options'  => 'CAV',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['fabric8_priority'] = array(
  'name'     => 'Fabric8 priority',
  'select'   => 'T',
'options'  => 'CAV',
  'maxlen'   => 600,
  'sort'     => true
);
$opts['fdd']['fabric8_description'] = array(
  'name'     => 'Fabric8 description',
  'select'   => 'T',
'options'  => 'CAV',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['fabric9_name'] = array(
  'name'     => 'Fabric9 name',
  'select'   => 'T',
'options'  => 'CAV',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['fabric9_priority'] = array(
  'name'     => 'Fabric9 priority',
  'select'   => 'T',
'options'  => 'CAV',
  'maxlen'   => 600,
  'sort'     => true
);
$opts['fdd']['fabric9_description'] = array(
  'name'     => 'Fabric9 description',
  'select'   => 'T',
'options'  => 'CAV',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['fabric10_name'] = array(
  'name'     => 'Fabric10 name',
  'select'   => 'T',
'options'  => 'CAV',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['fabric10_priority'] = array(
  'name'     => 'Fabric10 priority',
  'select'   => 'T',
'options'  => 'CAV',
  'maxlen'   => 600,
  'sort'     => true
);
$opts['fdd']['fabric10_description'] = array(
  'name'     => 'Fabric10 description',
  'select'   => 'T',
'options'  => 'CAV',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['fabric11_name'] = array(
  'name'     => 'Fabric11 name',
  'select'   => 'T',
'options'  => 'CAV',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['fabric11_priority'] = array(
  'name'     => 'Fabric11 priority',
  'select'   => 'T',
'options'  => 'CAV',
  'maxlen'   => 600,
  'sort'     => true
);
$opts['fdd']['fabric11_description'] = array(
  'name'     => 'Fabric11 description',
  'select'   => 'T',
'options'  => 'CAV',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['fabric12_name'] = array(
  'name'     => 'Fabric12 name',
  'select'   => 'T',
'options'  => 'CAV',
  'maxlen'   => 200,
  'sort'     => true
);
$opts['fdd']['fabric12_priority'] = array(
  'name'     => 'Fabric12 priority',
  'select'   => 'T',
'options'  => 'CAV',
  'maxlen'   => 600,
  'sort'     => true
);
$opts['fdd']['fabric12_description'] = array(
  'name'     => 'Fabric12 description',
  'select'   => 'T',
'options'  => 'CAV',
  'maxlen'   => 200,
  'sort'     => true
);

$opts['fdd']['issues'] = array(
  'name'     => 'Issues',
  'select'   => 'T',
'options'  => 'CLAV',
  'maxlen'   => 200,
  'sort'     => true
);

$opts['fdd']['merrow_csr'] = array(
  'name'     => 'Merrow csr',
  'select'   => 'T',
'options'  => 'CAVL',
  'maxlen'   => 200,
  'sort'     => true
);

// Now important call to phpMyEdit
require_once 'phpMyEdit.class.php';
new phpMyEdit($opts);

?>


</body>
</html>
