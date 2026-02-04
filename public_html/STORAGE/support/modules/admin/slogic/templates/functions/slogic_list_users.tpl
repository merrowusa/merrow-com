<script>
    function highlight(e)
    {
	var r = null;
	if (e.parentNode && e.parentNode.parentNode) {
	    r = e.parentNode.parentNode;
	}
	else if (e.parentElement && e.parentElement.parentElement) {
	    r = e.parentElement.parentElement;
	}
	if (r) {
	    if (r.className == "reset_row") {
		r.className = "mark_row";
	    }
	}
    }

    function unhighlight(e)
    {
	var r = null;
	if (e.parentNode && e.parentNode.parentNode) {
	    r = e.parentNode.parentNode;
	}
	else if (e.parentElement && e.parentElement.parentElement) {
	    r = e.parentElement.parentElement;
	}
	if (r) {
	    if (r.className == "mark_row") {
		r.className = "reset_row";
	    }
	}
    }

    function toggle_all(e)
    {
		if (e.checked) 
		{
		    check_all();
		}
		else 
		{
		    clear_all();
		}
    }

    function toggle(e)
    {
		if (e.checked) 
		{
		    check(e);
		}
		else 
		{
		    clear(e);
		}
    }

    function check(e)
    {
		e.checked = true;
		highlight(e);
    }
    
	function check_all()
    {
		var ml = document.users_form;
		var len = ml.elements.length;
		for (var i = 0; i < len; i++) 
		{
		    var e = ml.elements[i];
		    if (e.name == "del[]") 
		    {
				check(e);
		    }
		}
    }

    function clear(e)
    {
		e.checked = false;
		unhighlight(e);
    }
    
    function clear_all()
    {
		var ml = document.users_form;
		var len = ml.elements.length;
		for (var i = 0; i < len; i++) 
		{
		    var e = ml.elements[i];
		    if (e.name == "del[]") 
		    {
				clear(e);
		    }
		}
    }
</script>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="0" class="stafftable">
<form name="limit_form" method="get" action="{SELF}">
  <tr> 
    <td height="20" colspan="4" class="head">&nbsp;{LANG_SLOGIC_LIST_USERS}</td>
    <td height="20" colspan="5" class="head" align="right">Show next 20 users starting at row: <input type="text" class="input"  name="limit" size="4"><input type="hidden" name="tpl" value="slogic_list_users"><input type="hidden" name="lang" value="{LANG}"><input type="hidden" name="order_table" value="users"> <input type="submit" class="button" name="submit" value="Go!"></td>
  </tr>
  <tr>
    <td height="17" colspan="4"><b>{FIRST}</b></td>
    <td height="17" colspan="5" align="right"><b>{LAST} </b></td>
  </tr>
  <tr>
    <td height="17" colspan="4"><b>{PREVIOUS}</b></td>
    <td height="17" colspan="5" align="right"><b>{NEXT}</b></td>
  </tr>
</form>
<form name="users_form" method="post" action="{SELF}&tpl=slogic_delete_user">
  <tr>
    <td height="17" width="10%"><b>{LANG_SLOGIC_USERNAME}</b>&nbsp;{ORDER_USERNAME}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_USERNAME_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" width="25%"><b>{LANG_SLOGIC_EMAIL}</b>&nbsp;{ORDER_EMAIL}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_EMAIL_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" width="20%"><b>{LANG_SLOGIC_DOMAIN}</b>&nbsp;{ORDER_DOMAIN}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_DOMAIN_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" width="10%"><b>{LANG_SLOGIC_ACT_USERNAME}</b>&nbsp;{ORDER_ACT_USERNAME}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_ACT_USERNAME_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" width="10%"><b>{LANG_SLOGIC_ACT_SERVER}</b>&nbsp;{ORDER_ACT_SERVER}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_ACT_SERVER_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" width="10%"><b>{LANG_SLOGIC_GET_EMAIL}</b>&nbsp;{ORDER_GET_EMAIL}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_GET_EMAIL_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" width="5%"><b>{LANG_SLOGIC_LANGUAGE}</b><br>&nbsp;{ORDER_LANGUAGE}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_LANGUAGE_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" align="center" width="5%"><b>{LANG_SLOGIC_EDIT}</b></td>
    <td height="17" align="center" width="5%">{DELETE_BUTTON} <input type="checkbox" class="checkbox" name="delete_all" title="{LANG_SLOGIC_USERS_DELETE_ALL}" onclick="toggle_all(this)">({LANG_SLOGIC_ANNOUNCEMENTS_ALL})</td>
  </tr>
<USERS>
  <tr class="subhead">
    <td height="17">{USERNAME}</td>
    <td height="17">{EMAIL}</td>
    <td height="17">{DOMAIN}</td>
    <td height="17">{ACT_USERNAME}</td>
    <td height="17">{ACT_SERVER}</td>
    <td height="17">{GET_EMAIL}</td>
    <td height="17">{LANGUAGE}</td>
    <td height="17" align="center">{EDIT}</td>
    <td height="17" align="center">{DELETE}</td>
  </tr>
</USERS>
<NO_USERS>
  <tr class="subhead"> 
    <td height="17" colspan="9">{LANG_SLOGIC_LIST_USERS_NO_USERS}</td>
  </tr>
</NO_USERS>
</table>
</form>