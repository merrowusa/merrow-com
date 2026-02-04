<form name="limit_form" method="get" action="{SELF}">
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="0" class="stafftable">
  <tr> 
    <td height="20" colspan="3" class="head">&nbsp;{LANG_TICKETS_OPEN_TICKETS}</td>
    <td height="20" colspan="3" class="head" align="right">Show next 20 tickets starting at ticket: <input type="text" class="input"  name="limit" size="4"><input type="hidden" name="tpl" value="tickets_list_open"><input type="hidden" name="lang" value="{LANG}"><input type="hidden" name="order_table" value="open"> <input type="submit" class="button" name="Submit" value="Go!"></td>
  </tr>
  <tr> 
    <td height="17" colspan="3"><b>{FIRST}</b></td>
    <td height="17" colspan="3" align="right"><b>{LAST} </b></td>
  </tr>
  <tr> 
    <td height="17" colspan="3"><b>{PREVIOUS}</b></td>
    <td height="17" colspan="3" align="right"><b>{NEXT}</b></td>
  </tr>
  <tr class="title"> 
    <td height="17" width="20%"><b>{LANG_TICKETS_SENTDATE}</b>&nbsp;{ORDER_SENTDATE}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_SENTDATE_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" width="10%"><b>{LANG_TICKETS_USER}</b>&nbsp;{ORDER_USER}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_USER_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" width="10%"><b>{LANG_TICKETS_PRIORITY}</b>&nbsp;{ORDER_PRIORITY}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_PRIORITY_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" width="10%"><b>{LANG_TICKETS_CATEGORY}</b>&nbsp;{ORDER_CATEGORY}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_CATEGORY_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" width="40%"><b>{LANG_TICKETS_SUBJECT}</b>&nbsp;{ORDER_SUBJECT}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_SUBJECT_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" width="10%"><b>{LANG_TICKETS_STATUS}</b>&nbsp;{ORDER_STATUS}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_STATUS_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
  </tr>
<TICKETS>
  <tr class="subhead"> 
    <td height="17">{SENTDATE}</td>
    <td height="17">{USER}</td>
    <td height="17">{PRIORITY}</td>
    <td height="17">{CATEGORY}</td>
    <td height="17">{SUBJECT}</td>
    <td height="17">{STATUS}</td>
  </tr>
</TICKETS>
<NO_TICKETS>
  <tr class="subhead"> 
    <td height="17" colspan="6">{LANG_TICKETS_NO_TICKETS}</td>
  </tr>
</NO_TICKETS>
</table>
</form>