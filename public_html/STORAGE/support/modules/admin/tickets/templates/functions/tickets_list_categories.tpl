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
		var ml = document.categories_form;
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
		var ml = document.categories_form;
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
    <td height="20" colspan="3" class="head">&nbsp;{LANG_TICKETS_LIST_CATEGORIES}</td>
    <td height="20" colspan="3" class="head" align="right">Show next 20 categories starting at row: <input type="text" class="input"  name="limit" size="4"><input type="hidden" name="tpl" value="tickets_list_categories"><input type="hidden" name="lang" value="{LANG}"><input type="hidden" name="order_table" value="categories"> <input type="submit" class="button" name="submit" value="Go!"></td>
  </tr>
  <tr>
    <td height="17" colspan="3"><b>{FIRST}</b></td>
    <td height="17" colspan="3" align="right"><b>{LAST} </b></td>
  </tr>
  <tr>
    <td height="17" colspan="3"><b>{PREVIOUS}</b></td>
    <td height="17" colspan="3" align="right"><b>{NEXT}</b></td>
  </tr>
</form>
<form name="categories_form" method="post" action="{SELF}">
  <tr>
    <td height="17" width="20%"><b>{LANG_TICKETS_NAME}</b>&nbsp;{ORDER_NAME}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_NAME_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" width="30%"><b>{LANG_TICKETS_INFO}</b>&nbsp;{ORDER_INFO}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_INFO_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" width="30%"><b>{LANG_TICKETS_SUBSCRIBERS}</b>&nbsp;{ORDER_SUBSCRIBERS}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_SUBSCRIBERS_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" width="30%"><b>{LANG_TICKETS_EMAIL_PIPE}</b>&nbsp;{ORDER_EMAIL_PIPE}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_EMAIL_PIPE_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" align="center" width="5%"><b>{LANG_SLOGIC_EDIT}</b></td>
    <td height="17" align="center" width="15%">{DELETE_BUTTON} <input type="checkbox" class="checkbox" name="delete_all" title="{LANG_SLOGIC_STAFF_DELETE_ALL}" onclick="toggle_all(this)">({LANG_SLOGIC_ANNOUNCEMENTS_ALL})</td>
  </tr>
<CATEGORY>
  <tr class="subhead">
  	<td height="17">{NAME}</td>  
  	<td height="17">{INFO}</td>
    <td height="17">{SUBSCRIBERS}</td>
    <td height="17">{EMAIL_PIPE}</td>
    <td height="17" align="center">{EDIT}</td>
    <td height="17" align="center">{DELETE}</td>
  </tr>
</CATEGORY>
<NO_CATEGORIES>
  <tr class="subhead"> 
    <td height="17" colspan="6">{LANG_TICKETS_LIST_CATEGORIES_NO_CATEGORIES}</td>
  </tr>
</NO_CATEGORIES>
</table>
</form>