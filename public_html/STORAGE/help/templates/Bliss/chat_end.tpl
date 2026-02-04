<?xml version="1.0" encoding="iso-8859-1"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>{$conf.company} - Live Support Solution (Powered By Help Center Live)</title>
<meta http-equiv="Content-Type" content="text/html; charset={$lang.charset}" />
<link href="{$conf.url}/templates/{$conf.template}/css/chat.css" rel="stylesheet" type="text/css" />
</head>
<body{$onload}>
{if $visitor == 'true'}
<div align="center">
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><img src="{$conf.url}/templates/{$conf.template}/images/live_top.gif" alt="" /></td>
  </tr>
</table>
<br /><br />
</div>
{if $display == 'default'}
<div align="center">
{$end_message}<br />
<br />
<br />
<form action="{$conf.url}/live/chat/end.php?chatid={$chatid}" method="post">
<table cellspacing="0" cellpadding="0" width="80%" class="border">
  <tr>
    <td align="center" class="light" style="padding: 5px;">{$lang.email_transcript}</td>
  </tr>
  <tr>
    <td style="padding: 10px;" align="center">{$lang.email}: <input type="text" name="email" /> <input type="submit" value="{$lang.submit}" name="submit" /></td>
  </tr>
</table>
</form>
<br />
<br />
<a href="{$conf.url}/live/chat/end.php?print&chatid={$chatid}">{$lang.print_transcript}</a>
</div>
{elseif $display == 'print'}
<table cellspacing="10" cellpadding="0" class="large">
  <tr>
    <td>{$lang.nick}: </td>
    <td>{$nick}</td>
  </tr>
  <tr>
    <td>{$lang.operator}: </td>
    <td>{$operator}</td>
  </tr>
  <tr>
    <td>{$lang.department}: </td>
    <td>{$department}</td>
  </tr>
  <tr>
    <td>{$lang.email}: </td>
    <td>{$email}</td>
  </tr>
  <tr>
    <td>{$lang.time}: </td>
    <td>{$time}</td>
  </tr>
</table>
<br />
<table cellspacing="10" cellpadding="0" class="large">
  <tr>
    <td>
      {$chat}
    </td>
  </tr>
</table>
{elseif $display == 'email'}
<div align="center">
<table cellspacing="0" cellpadding="0" width="80%">
  <tr>
    <td align="center">{$lang.sent_transcript}</td>
  </tr>
</table>
</div>
{/if}
{/if}
</body>
</html>