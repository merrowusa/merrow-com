<%
Response.Expires = -1000 'Makes the browser not cache this page
Response.Buffer = True 'Buffers the content so our Response.Redirect will work

If Session("UserLoggedIn") <> "true" Then
    Response.Redirect("login2.asp")
End If
%>

This page is password protected.  If you are reading this you entered <br>
the correct name and password.

