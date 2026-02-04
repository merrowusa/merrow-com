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
		var ml = document.announcements;
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
		var ml = document.announcements;
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

<table width="100%" border="0" align="center" cellpadding="2" cellspacing="0" class="stafftable">
<form name="limit_form" method="get" action="{SELF}">
  <tr> 
    <td height="20" colspan="2" class="head">&nbsp;{LANG_SLOGIC_ANNOUNCEMENTS}</td>
    <td height="20" colspan="5" class="head" align="right">Show next 20 announcements starting at row: <input type="text" class="input"  name="limit" size="4"><input type="hidden" name="tpl" value="slogic_list_announcements"><input type="hidden" name="lang" value="{LANG}"><input type="hidden" name="order_table" value="announcements"> <input type="submit" class="button" name="submit" value="Go!" class="button"></td>
  </tr>
  <tr>
    <td height="17" colspan="2"><b>{FIRST}</b></td>
    <td height="17" colspan="5" align="right"><b>{LAST} </b></td>
  </tr>
  <tr>
    <td height="17" colspan="2"><b>{PREVIOUS}</b></td>
    <td height="17" colspan="5" align="right"><b>{NEXT}</b></td>
  </tr>
</form>
<form name="announcements" method="post" action="{SELF}">
  <tr>
    <td height="17" width="20%"><b>{LANG_SLOGIC_SUBJECT}</b>&nbsp;{ORDER_SUBJECT}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_SUBJECT_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" width="35%"><b>{LANG_SLOGIC_CONTENT}</b>&nbsp;{ORDER_CONTENT}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_CONTENT_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" width="10%"><b>{LANG_SLOGIC_SENT_DATE}</b>&nbsp;{ORDER_SENT_DATE}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_SENT_DATE_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" width="10%"><b>{LANG_SLOGIC_SHOW_DATE}</b>&nbsp;{ORDER_SHOW_DATE}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_SHOW_DATE_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" width="10%"><b>{LANG_SLOGIC_SHOW_TO}</b>&nbsp;{ORDER_SHOW_TO}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_SHOW_TO_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" align="center" width="5%"><b>{LANG_SLOGIC_EDIT}</b></td>
    <td height="25" align="center" width="10%">{DELETE_BUTTON} <input type="checkbox" class="checkbox" name="delete_all" title="{LANG_SLOGIC_ANNOUNCEMENTS_DELETE_ALL}" onclick="toggle_all(this)">({LANG_SLOGIC_ANNOUNCEMENTS_ALL})</td>
  </tr>
<ANNOUNCEMENT>
  <tr class="subhead">
    <td height="17">{SUBJECT}</td>
    <td height="17">{CONTENT}</td>
    <td height="17">{SENT_DATE}</td>
    <td height="17">{SHOW_DATE}</td>
    <td height="17">{SHOW_TO}</td>
    <td height="17" align="center">{EDIT}</td>
    <td height="17" align="center">{DELETE}</td>
  </tr>
</ANNOUNCEMENT>
<NO_ANNOUNCEMENTS>
  <tr class="subhead"> 
    <td height="17" colspan="7">{LANG_SLOGIC_NO_ANNOUNCEMENTS}</td>
  </tr>
</NO_ANNOUNCEMENTS>
</table>
</form>