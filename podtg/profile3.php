<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body><?php
	session_start();
	?>
	<ul>
	<li><strong>username:</strong><?php echo $_SESSION['get1']; ?></li>
	<li><strong>password:</strong><?php echo $_SESSION['password']; ?></li>
	<li><strong>id:</strong><?php echo $_SESSION['id']; ?></li>
	<li><strong>address:</strong><?php echo $_SESSION['address']; ?></li>
	</ul>
</body>
</html>