<?php

$a="localhost";
$b="crud_user";
$c="crud_pass";
$d="crud";

$rahul=new mysqli($a,$b,$c,$d);


	
		$ss=$_GET["username"];
		
		$sql="SELECT * FROM  crud_tab WHERE username='$ss' ";
		
		$result = $rahul ->query($sql);
		
		$row=$result->fetch_assoc();
			
		
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<form action="update.php" method="post">
<input type="text" name="user" value="<?php echo $row['username'] ?>"><br><br>
<input type="text" name="pass" value="<?php echo $row['password'] ?>"><br><br>
<input type="text" name="id" value="<?php echo $row['id'] ?>"><br><br>
<input type="text" name="add" value="<?php echo $row['address'] ?>"><br><br>
<input type="submit">


</form>
	
</body>
</html>
