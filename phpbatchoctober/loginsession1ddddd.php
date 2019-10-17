<?php
session_start();
if(isset($_SESSION['a1']))
{
	header('Location:profilessa1.php');
}
else
{
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form action="loginsessiondddd.php" method="post">
	<input type="text" name="user"><br>
		<input type="text" name="pass"><br>
		<input type="submit" value="login">
	</form>
</body>
</html>
<?php
}
?>
	
