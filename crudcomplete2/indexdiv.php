<?php
include 'db.php';
$sql = "SELECT * FROM users ORDER BY userId DESC";
$result = $conn->query($sql);
?>
<html>
<head>
<title>Users List</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
	<style>
		.gg{clear:both;
			width:508px;
			
		}
		.gg1{
			width:125px;
			float:left;
			height:40px;
			border:1px solid black;
		}
	</style>
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:508px;">
<div class="dd"><a href="add_useraaa.php" class="link"><img alt='Add' title='Add' src='images/add.png'/ class="dd1"> Add User</a></div>
<div class="gg">

<div class="gg1">Username</div>
<div class="gg1">First Name</div>
<div class="gg1">Last Name</div>
<div class="gg1">CRUD Actions</div>

<?php

while($row = $result->fetch_assoc()) {

?>

<div class="gg1"><?php echo $row["userName"]; ?></div>
<div class="gg1"><?php echo $row["firstName"]; ?></div>
<div class="gg1"><?php echo $row["lastName"]; ?></div>
<div class="gg1"><a href="edit_user.php?userId=<?php echo $row["userId"]; ?>" class="link"><img alt='Edit' title='Edit' src='images/edit.png' class="dd1" /></a> 
<a href="delete_user.php?userId=<?php echo $row["userId"]; ?>"  class="link"><img alt='Delete' title='Delete' src='images/delete.png' class="dd1" /></a></div>

<?php

}
?>
	</div>
</form>

</body></html>