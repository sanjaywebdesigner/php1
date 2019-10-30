<?php
session_start();
$cc=$_SESSION['a1'];

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	profile <?php echo $cc;?>
	<a href="logout.php">logout</a>
</body>
</html>