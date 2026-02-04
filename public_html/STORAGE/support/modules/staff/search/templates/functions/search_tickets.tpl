<form name="search_tickets" method="post" action="{SELF}">
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="0" class="boxtable">
  <tr> 
    <td height="20" colspan="2" class="head" align="center">{LANG_SEARCH_TICKETS}</td>
  </tr>
  <tr> 
    <td height="17" class="formfield">{LANG_SEARCH_FOR}</td>
	<td height="17"><input type="text" class="input"  name="search" size="50" maxlength="150" value="{SEARCH}"> <input type="submit" class="button" name="Submit" value="{LANG_SEARCH_SUBMIT}"></td>
  </tr>
  <tr>
    <td height="17" class="formfield">{LANG_SEARCH_IN}</td>
    <td height="17">
      <input type="checkbox" class="checkbox"  name="search_in_tickets" value="yes" {SEARCH_IN_TICKETS}> {LANG_SEARCH_IN_TICKETS}<br>
      <input type="checkbox" class="checkbox"  name="search_in_notes" value="yes" {SEARCH_IN_NOTES}> {LANG_SEARCH_IN_NOTES}
    </td>
  </tr>
</table>
</form>
<div align="center">
<table>
  <tr>
    <td>{RESULTS_TICKETS}</td>
  </tr>
  <tr>
    <td>{RESULTS_NOTES}</td>
  </tr>
</table>
</div>