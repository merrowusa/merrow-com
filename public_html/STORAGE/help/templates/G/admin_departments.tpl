{if $action == 'add'}
<div align="center">
<form action="{$_SERVER.PHP_SELF}" method="post">
<table cellpadding="0" cellspacing="0" class="list">
  <tr class="alt">
    <td>{$lang.name}:</td>
    <td><input type="text" name="name" size="40" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr class="main">
    <td colspan="2" align="center">{$lang.email_info}</td>
  </tr>
  <tr class="alt">
    <td>{$lang.email}:</td>
    <td><input type="text" name="email" size="40" /></td>
  </tr>
  <tr>
    <td>{$lang.email_host}:</td>
    <td><input type="text" name="email_host" size="40" /></td>
  </tr>
  <tr class="alt">
    <td>{$lang.email_username}:</td>
    <td><input type="text" name="email_username" size="40" /></td>
  </tr>
  <tr>
    <td>{$lang.email_password}:</td>
    <td><input type="password" name="email_password" size="40" /></td>
  </tr>
</table>
<br />
<input type="submit" name="add" value="{$lang.add}" />
</form>
</div>
{elseif $action == 'added'}
<div align="center">
{$lang.department_added}
</div>
{elseif $action == 'edit'}
<div align="center">
<form action="{$_SERVER.PHP_SELF}" method="post">
<table cellpadding="0" cellspacing="0" class="list">
  <tr class="alt">
    <td>{$lang.name}:</td>
    <td><input type="text" name="name" value="{$department.name}" size="40" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr class="main">
    <td colspan="2" align="center">{$lang.email_info}</td>
  </tr>
  <tr class="alt">
    <td>{$lang.email}:</td>
    <td><input type="text" name="email" value="{$department.email}" size="40" /></td>
  </tr>
  <tr>
    <td>{$lang.email_host}:</td>
    <td><input type="text" name="email_host" value="{$department.email_host}" size="40" /></td>
  </tr>
  <tr class="alt">
    <td>{$lang.email_username}:</td>
    <td><input type="text" name="email_username" value="{$department.email_username}" size="40" /></td>
  </tr>
  <tr>
    <td>{$lang.email_password}:</td>
    <td><input type="password" name="email_password" value="{$department.email_password}" size="40" /></td>
  </tr>
</table>
<br />
<input type="hidden" name="id" value="{$department.id}" /><input type="submit" name="edit" value="{$lang.edit}" />
</form>
</div>
{elseif $action == 'edited'}
<div align="center">
{$lang.department_edited}
</div>
{else}
<div align="center">
<form action="{$_SERVER.PHP_SELF}" method="post" onsubmit="return Misc.confirm_action();">
<table width="100%" border="0" cellspacing="0" cellpadding="2" class="list">
{section name=i loop=$departments}
  <tr class="{cycle values="alt,"}">
    <td>{$departments[i].name} ({$departments[i].email})</td>
    <td align="right"><a href="{$conf.url}/admin/departments.php?edit&id={$departments[i].id}">{$lang.edit}</a> | <a href="{$conf.url}/admin/icons.php?edit&id={$departments[i].id}">{$lang.icons}</a> | <input type="checkbox" name="{$departments[i].id}" value="{$departments[i].id}" /></td>
  </tr>
{/section}
</table>
<br />
<input type="submit" name="delete" value="{$lang.delete}" />
</form>
</div>
{/if}