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
    // This file provides a landing page for people wishing to use your Help Center

    // $Id: index.php,v 1.3 2005/06/06 13:06:42 mikebird Exp $ 

    $GLOBALS['inc']->department();

    if (isset($_POST['email_send'])) {
        mail($GLOBALS['department']->email(addslashes($_POST['departmentid'])), addslashes($_POST['subject']), addslashes($_POST['message']), "Content-type: text/html; charset=".$GLOBALS['lang']['charset']."\r\nMIME-Version: 1.0\r\nFrom: ".addslashes($_POST['name'])." <".addslashes($_POST['email']).">");
        $email_sent = true;
    } else {
        $email_sent = false;
    }

?>
<div align="center">
<h3><?php echo($GLOBALS['lang']['live_help']); ?></h3>
<!-- BEGIN Help Center Live Code, Copyright © 2005 UberTec Ltd. All Rights Reserved -->
<div id="div_initiate" style="position:absolute; z-index:1; top: 40%; left:40%; visibility: hidden;"><a href="javascript:Live.initiate_accept();"><img src="<?php echo($GLOBALS['conf']['url']); ?>/templates/<?php echo($GLOBALS['conf']['template']); ?>/images/initiate.gif" border="0"></a><br><a href="javascript:Live.initiate_decline();"><img src="<?php echo($GLOBALS['conf']['url']); ?>/templates/<?php echo($GLOBALS['conf']['template']); ?>/images/initiate_close.gif" border="0"></a></div>
<script type="text/javascript" language="javascript" src="<?php echo($GLOBALS['conf']['url']); ?>/class/js/include.php?live&cobrowse"></script>
<!-- END Help Center Live Code, Copyright © 2005 UberTec Ltd. All Rights Reserved -->
<br />
<br />
<br />
<br />
<?php
    // check to see if the osTicket module is activated, and include the config for it.
    if ($GLOBALS['module']->exists('osTicket')) {
        if ($GLOBALS['module']->active('osTicket')) {
            $GLOBALS['module']->get_config('osTicket');
?>
<h3><?php echo($GLOBALS['lang']['trouble_tickets']); ?></h3>
<?php include(dirname(__FILE__).'/../osTicket/open.php'); ?>
<br />
<br />
<br />
<br />
<?php
        }
    }
?>
<h3><?php echo($GLOBALS['lang']['contact_us']); ?></h3>
<?php

    // osTicket changes the selected database so we need to cahnge it back
    $GLOBALS['db']->select();

    if ($email_sent) {
        echo($GLOBALS['lang']['email_sent']);
    } else {
?>
<form action="<?php echo($GLOBALS['conf']['modules']['HelpCenter']['selfurl']); ?>" method="post">
  <table cellspacing="0" cellpadding="5">
    <tr class="alt">
      <td><?php echo($GLOBALS['lang']['department']); ?></td>
      <td>
      <select name="departmentid">
<?php
        $departments = $GLOBALS['department']->listall('0');
        foreach ($departments as $key => $val) {
?>
          <option value="<?php echo($departments[$key]['id']); ?>"><?php echo($departments[$key]['name']); ?></option>
<?php
        }
?>
      </select>
      </td>
    </tr>
    <tr>
      <td><?php echo($GLOBALS['lang']['your_name']); ?></td>
      <td><input type="text" name="name" value="" size="20" /></td>
    </tr>
    <tr>
      <td><?php echo($GLOBALS['lang']['your_email']); ?></td>
      <td><input type="text" name="email" value="" size="20" /></td>
    </tr>
    <tr>
      <td><?php echo($GLOBALS['lang']['subject']); ?></td>
      <td><input type="text" name="subject" value="" size="20" /></td>
    </tr>
    <tr>
      <td><?php echo($GLOBALS['lang']['message']); ?></td>
      <td><textarea name="message" rows="5" cols="20"></textarea></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="email_send" value="<?php echo($GLOBALS['lang']['submit']); ?>" /></td>
    </tr>
  </table>
</form>
<?php
    }
?>
</div>