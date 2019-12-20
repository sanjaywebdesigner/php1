<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	session_start();
	$_amon=$_SESSION['get1'];
	$a="localhost";
	$b="root";
	$c="";
	$d="crud";
	
	$rahul=new mysqli($a,$b,$c,$d);
	
	$emon=$_POST['edit_mon'];
	$efee=$_POST['edit_fee'];
	$ebal=$_POST['edit_bal'];
	$eadv=$_POST['edit_adv'];
	
	
	echo "rahul1".$emon."<br>";
	echo "rahul2".$_amon."<br>";
	echo "rahul3".$efee."<br>";
	echo "rahul4".$ebal."<br>";
	echo "rahul5".$eadv."<br>";
	
	$sql_up="UPDATE $_amon SET fees='$efee',balance='$ebal' WHERE month='$emon'";
	
	if($rahul->query($sql_up)){
		
		echo"updation complete";
		header("Location:profile.php");
	}else{
		echo"error in updation:".$rahul->error."<br>";
	}
	
	?>
</body>
</html>