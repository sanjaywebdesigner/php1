<?php
include 'database.php';
$sql= "SELECT * FROM crud";
$result = $conn->query($sql);
?>
<html>
<head>

<title>Crud Database</title>
	<link href="style.css" rel="stylesheet">
</head>
<body>
	<form action="" method="post">

<div class="add"><a href="add.html">ADD user</a></div>
<div class="box">
	<div class="a1">Name</div>
<div class="a1">Mobile</div>
<div class="a1">Email</div>

<div class="a1">edit/delete
</div>
<?php
	
 while($row = $result->fetch_assoc()) {
$name=$row['name'];
$mobile=$row['mobile'];
$email=$row['email'];
$password=$row['password'];
?>
		
<div class="a1"><?php echo $name; ?></div>
<div class="a1"><?php echo $email; ?></div>
<div class="a1"><?php echo $mobile; ?></div>

<div class="a1"><a href="edit.php?name=<?php echo $name?>">EDIT</a>
<a href="delete.php?name=<?php echo $name?>">DELTE</a>
</div>
		
<?php
}
?>
	</div>
</form>
</body>
</html>