<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	session_start();
	
	
	echo $_SESSION['get1'];
	echo $_SESSION['password'];
	echo $_SESSION['id'];
	echo $_SESSION['address'];
	
	?>
	<ul>
	<strong>username:</strong><li><?php echo $_SESSION['get1']; ?></li>
	<strong>password:</strong><li><?php echo $_SESSION['password']; ?></li>
	<strong>id:</strong><li><?php echo $_SESSION['id']; ?></li>
	<strong>address:</strong><li><?php echo $_SESSION['address']; ?></li>
	</ul>
	<a href="profile3.php">profile3</a>
</body>
</html>