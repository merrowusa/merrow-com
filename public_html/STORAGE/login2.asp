<%
Response.Expires = -1000 'Makes the browser not cache this page
Response.Buffer = True 'Buffers the content so our Response.Redirect will work

Dim Error_Msg

login = Request.Form("login")
If login = "login_again" Then
    Session("UserLoggedIn") = ""
    ShowLogin
Else
    If Session("UserLoggedIn") = "true" Then
        AlreadyLoggedIn
    Else
        If login = "true" Then
            CheckLogin
        Else
            ShowLogin
        End If
    End If
End If

Sub ShowLogin
Response.Write(Error_Msg & "<br>")
%>
<form name=form1 action=login2.asp method=post>
User Name : <input type=text name=username><br>
Password : <input type=password name=userpwd><br>
<input type=hidden name=login value=true>
<input type=submit value="Login">
</form>
<%
End Sub

Sub AlreadyLoggedIn
%>
You are already logged in.
Do you want to logout or login as a different user?
<form name=form2 action=login2.asp method=post>
<input type=submit name=button1 value='Yes'>
<input type=hidden name=login value='login_again'>
</form>
<%
End Sub

Sub CheckLogin
Dim Conn, cStr, sql, RS, username, userpwd
username = Request.Form("username")
userpwd = Request.Form("userpwd")
Set Conn = Server.CreateObject("ADODB.Connection")
cStr = "DRIVER={Microsoft Access Driver (*.mdb)};"
cStr = cStr & "DBQ=" & Server.MapPath("\home\codelib\howto\aspadvanced\passwordhowto.mdb") & ";"
Conn.Open(cStr)
sql = "select username from UserTable where username = '" & LCase(username) & "'"
sql = sql & " and userpwd = '" & LCase(userpwd) & "'"
Set RS = Conn.Execute(sql)
If RS.BOF And RS.EOF Then
    Error_Msg = "Login Failed. Try Again."
    ShowLogin
Else
    Session("UserLoggedIn") = "true"
    Response.Redirect "protectedpage2.asp"
End If
End Sub
%>

