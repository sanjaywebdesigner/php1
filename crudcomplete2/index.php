<?php
include 'db.php';
$sql = "SELECT * FROM users ORDER BY userId DESC";
$result = $conn->query($sql);
?>
<html>
<head>
<title>Users List</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="dd"><a href="add_useraaa.php" class="link"><img alt='Add' title='Add' src='images/add.png'/ class="dd1"> Add User</a></div>
<table border="0" cellpadding="10" cellspacing="1" width="500" class="tblListForm">
<tr class="listheader">
<td>Username</td>
<td>First Name</td>
<td>Last Name</td>
<td>CRUD Actions</td>
</tr>
<?php

while($row = $result->fetch_assoc()) {

?>
<tr>
<td><?php echo $row["userName"]; ?></td>
<td><?php echo $row["firstName"]; ?></td>
<td><?php echo $row["lastName"]; ?></td>
<td><a href="edit_user.php?userId=<?php echo $row["userId"]; ?>" class="link"><img alt='Edit' title='Edit' src='images/edit.png' class="dd1" /></a> 
<a href="delete_user.php?userId=<?php echo $row["userId"]; ?>"  class="link"><img alt='Delete' title='Delete' src='images/delete.png' class="dd1" /></a></td>
</tr>
<?php

}
?>
</table>
</form>

</body></html>