<html>
<head>
<title>Add New User</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="adding.php">
<div style="width:500px;">
<div class="dd"><a href="index.php" class="link"><img alt='List' title='List' src='images/list.png' class="dd1"/> List User</a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Add New User</td>
</tr>
<tr>
<td><label>Username</label></td>
<td><input type="text" name="userName" class="txtField"></td>
</tr>
<tr>
<td><label>Password</label></td>
<td><input type="password" name="password" class="txtField"></td>
</tr>
<td><label>First Name</label></td>
<td><input type="text" name="firstName" class="txtField"></td>
</tr>
<td><label>Last Name</label></td>
<td><input type="text" name="lastName" class="txtField"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body></html>