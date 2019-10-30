<?php
include 'db.php';
$sql = "SELECT * FROM sample1";
$result = $conn->query($sql);
?>
<html>
<head>
<title>Users List</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
	<style>
		.hh{clear:both;
			width:606px;
			
		}
		.hh1{
			float:left;
			width:200px;
			height:30px;
			border:1px solid black;
		}
	</style>
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="dd"><a href="addsample.php" class="link">Add User</a></div>
<div class="hh">
<?php

while($row = $result->fetch_assoc()) {
$aa1=$row['username'];
$aa2=$row['mobile'];
?>

<div class="hh1"><?php echo $aa1; ?></div>
<div class="hh1"><?php echo $aa2; ?></div>

<div class="hh1"><a href="editsample.php?username=<?php echo $aa1?>">edit</a> 
<a href="deletesample.php?username=<?php echo $aa1?>">delete</a></div>

<?php

}
?>
	</div>
</form>
<div class="dd"><a href="login.php" class="link">Login</a></div>
</body></html>