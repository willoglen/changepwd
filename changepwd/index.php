
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Self service password reset</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <meta http-equiv="cache-control" content="no-cache" />
    <link rel="stylesheet" type="text/css" href="style/styles.css" />
    <link href="style/favicon.ico" rel="icon" type="image/x-icon" />
    <link href="style/favicon.ico" rel="shortcut icon" />
</head>
<body>

<div id="content" class="backbox" style="width:600px; padding:10px;background-color:smoke;">
<div style="align:center" class = "help">
<!--<h1>Self service password reset</h1>-->
<p><a href="index.php" alt="Home" style="align:center;color:azure;">
&nbsp;&nbsp;&nbsp;&nbsp;<img src="style/citizen-schools-logo.gif" alt="Logo" style="vertical-align:middle" />
</a></p></div>


<div class="result warning">
<p class="help"><font style="color:navy;font-weight:bold;">Please enter your login<br/>

(usually first name first letter of last)</font></p>
</div>


<div class="help"><p>Enter your old password and choose a new one.</p><p>Forgot your password?</p><ul><li><a href="?action=sendtoken">Reset your password by using a mail challenge</a></li></ul></div>

<div class="help">
<p>Your password should conform to the following constraints:</p>
<ul>
<li>Minimal length: 8</li>
<li>Maximal length: 25</li>
<li>Minimal lower characters: 1</li>
<li>Minimal upper characters: 1</li>
<li>Minimal different class of characters: 3</li>
<li>Restricted characters: @%</li>
<li>Your new password is not allowed to be the same as your old password
</ul>
</div>

<form action="#" method="post">
    <table>
    <tr><td>Login</td>
    <td><input type="text" name="login" value="" style="width:250px"/></td></tr>
    <tr><td>Old password</td>
    <td><input type="password" name="oldpassword"  style="width:250px"/></td></tr>
    <tr><td>New password</td>
    <td><input type="password" name="newpassword"  style="width:250px"/></td></tr>
    <tr><td>Confirm</td>
    <td><input type="password" name="confirmpassword"  style="width:250px"/></td></tr>
    <tr><td colspan="2">
    <input type="submit" value="Send" /></td></tr>
    </table>
</form>



</div>

</body>
</html>

