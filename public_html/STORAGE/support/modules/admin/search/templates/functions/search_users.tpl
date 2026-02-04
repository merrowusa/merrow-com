<form name="search_users" method="post" action="{SELF}">
<table width="80%" border="0" align="center" cellpadding="4" cellspacing="0" class="boxtable">
  <tr> 
    <td height="20" colspan="2" class="head" align="center">{LANG_SEARCH_USERS}</td>
  </tr>
  <tr> 
    <td height="17" width="30%" align="right" class="title">{LANG_SEARCH_FOR}</td>
	<td height="17" width="70%" class="title"><input type="text" class="input"  name="search" size="50" maxlength="150" value="{SEARCH}"> <input type="submit" class="button" name="Submit" value="{LANG_SEARCH_SUBMIT}"></td>
  </tr>
</table>
</form>
<div align="center">
<table>
  <tr>
    <td>{RESULTS_USERS}</td>
  </tr>
</table>
</div>