<form name="config_form" method="post" action="{SELF}">
<table border="0" width="70%" cellpadding="4" cellspacing="0" align="center" class="boxtable">
  <tr> 
    <td height="20" class="head" align="center" colspan="2">{LANG_SLOGIC_CONFIG_FORM}</td>
  </tr>
  <tr> 
    <td height="17" colspan="2">{LANG_SLOGIC_CONFIG_WARNING}</td>
  </tr>
  <tr> 
    <td height="17" class="formfield" width="50%">{LANG_SLOGIC_CONFIG_SESSION}</td>
    <td height="17" width="50%">{SESSION_MANAGEMENT}</td>
  </tr>
  <tr> 
    <td height="17" class="formfield" width="50%">{LANG_SLOGIC_CONFIG_SESSION_TIMEOUT}</td>
    <td height="17"><input type="text" class="input"  name="session_timeout" value="{SESSION_TIMEOUT}" size="20"></td>
  </tr>
  <tr> 
    <td height="17" class="formfield" width="50%">{LANG_SLOGIC_CONFIG_COOKIE_TIMEOUT}</td>
    <td height="17"><input type="text" class="input"  name="cookie_timeout" value="{COOKIE_TIMEOUT}" size="20"></td>
  </tr>
  <tr> 
    <td height="17" class="formfield" width="50%">{LANG_SLOGIC_CONFIG_SQL_MODULE}</td>
    <td height="17">{SQL_MODULE)</td>
  </tr>
  <tr> 
    <td height="17" class="formfield" width="50%">{LANG_SLOGIC_CONFIG_DEBUG_MODE}</td>
    <td height="17">{DEBUG_MODE}</td>
  </tr>
  <tr> 
    <td height="17" class="formfield" width="50%">{LANG_SLOGIC_CONFIG_SCRIPT_PATH}</td>
    <td height="17"><input type="text" class="input"  name="script_path" value="{SCRIPT_PATH}" size="40"></td>
  </tr>
  <tr> 
    <td height="17" class="formfield" width="50%">{LANG_SLOGIC_CONFIG_SCRIPT_URL}</td>
    <td height="17"><input type="text" class="input"  name="script_url" value="{SCRIPT_URL}" size="40"></td>
  </tr>
  <tr> 
    <td height="17" class="formfield" width="50%">{LANG_SLOGIC_CONFIG_DB_HOST}</td>
    <td height="17"><input type="text" class="input"  name="db_host" value="{DB_HOST}" size="20"></td>
  </tr>
  <tr> 
    <td height="17" class="formfield" width="50%">{LANG_SLOGIC_CONFIG_DB_USER}</td>
    <td height="17"><input type="text" class="input"  name="db_user" value="{DB_USER}" size="20"></td>
  </tr>
  <tr> 
    <td height="17" class="formfield" width="50%">{LANG_SLOGIC_CONFIG_DB_PASS}</td>
    <td height="17"><input type="text" class="input"  name="db_pass" value="{DB_PASS}" size="20"></td>
  </tr>
  <tr> 
    <td height="17" class="formfield" width="50%">{LANG_SLOGIC_CONFIG_DB_DATABASE}</td>
    <td height="17"><input type="text" class="input"  name="db_database" value="{DB_DATABASE}" size="20"></td>
  </tr>
  <tr> 
    <td height="17" class="formfield" width="50%">{LANG_SLOGIC_CONFIG_ALLOWED_TAGS}</td>
    <td height="17"><input type="text" class="input"  name="allowed_tags" value="{ALLOWED_TAGS}" size="40"></td>
  </tr>
  <tr> 
    <td height="17" class="formfield" width="50%">{LANG_SLOGIC_CONFIG_DEFAULT_LANGUAGE}</td>
    <td height="17">{DEFAULT_LANGUAGE}</td>
  </tr>
  <tr> 
    <td height="17" class="formfield" width="50%">{LANG_SLOGIC_CONFIG_SEND_ALERT}</td>
    <td height="17">{SEND_ALERT}</td>
  </tr>
  <tr> 
    <td height="17" class="formfield" width="50%">{LANG_SLOGIC_CONFIG_SEND_EMAIL}</td>
    <td height="17">{SEND_EMAIL}</td>
  </tr>
  <tr> 
    <td height="17" class="formfield" width="50%">{LANG_SLOGIC_CONFIG_TEMPLATE_SYSTEM}</td>
    <td height="17">{TEMPLATE_SYSTEM}</td>
  </tr>
  <tr> 
    <td height="17" class="formfield" width="50%">{LANG_SLOGIC_CONFIG_EMAIL_FROM}</td>
    <td height="17"><input type="text" class="input"  name="slogic_email_from" value="{EMAIL_FROM}" size="40"></td>
  </tr>
  <tr> 
    <td height="17" class="formfield" width="50%">{LANG_SLOGIC_CONFIG_FLOOD_LIMIT}</td>
    <td height="17"><input type="text" class="input"  name="email_flood_limit" value="{EMAIL_FLOOD_LIMIT}" size="20"></td>
  </tr>
  <tr> 
    <td height="17" class="formfield" width="50%">{LANG_SLOGIC_CONFIG_PIPE_PRIORITY}</td>
    <td height="17"><input type="text" class="input"  name="default_pipe_priority" value="{DEFAULT_PIPE_PRIORITY}" size="20"></td>
  </tr>
  <tr> 
    <td height="17" class="formfield" width="50%">{LANG_SLOGIC_CONFIG_PIPE_AUTO_USER}</td>
    <td height="17">{SLOGIC_PIPE_AUTO_USER}</td>
  </tr>
  <tr>
    <td height="17" width="100%" colspan="2" align="center"><input class="button" type="submit" name="Submit" value="{LANG_SLOGIC_CONFIG_SUBMIT}">&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" type="reset" name="Reset" value="{LANG_SLOGIC_RESET}"></td>
  </tr>
</table>
</form>