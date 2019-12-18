<?php
session_start();
if(isset($_SESSION['a1'])){
	header("Location:site.php");
	}else{
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="dronc.php" method="post">
<input type="text" name="user">
<input type="text" name="pass">
<input type="submit">
</form>
</body>
</html>
<?php
	}
?>