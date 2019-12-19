<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<?php
	session_start();
	
	$a="localhost";
	$b="root";
	$c="";
	$d="crud";
	
	$rahul=new mysqli($a,$b,$c,$d);
	
	$edit=$_GET["month"];
	$fees=$_GET["fees"];
	$bals=$_GET["bals"];
	$advs=$_GET["advs"];
	
	$_SESSION['edith']=$edit;
	$_SESSION['fees']=$fees;
	$_SESSION['bals']=$bals;
	$_SESSION['advs']=$advs;
	echo $_SESSION['edith'];
	
	echo $_SESSION['fees'];
	echo 				$_SESSION['bals'];
		echo 			$_SESSION['advs'];
	
	?>
	<form action="update.php" method="post">
		<?php echo $_SESSION['get1']?><br>
	MONTH<input type="text" name="" value="<?php echo $_SESSION['edith']  ?>"><br>
		
	FEES<input type="text" name="" value="<?php echo $_SESSION['fees'] ?>"><br>
		
	BALANCE<input type="text" name="" value="<?php echo $_SESSION['bals'] ?>"><br>
		
	ADVANCE<input type="text" name="" value="<?php echo $_SESSION['advs'] ?>"><br>
		
	<input type="submit">
	
	</form>
</body>
</html>