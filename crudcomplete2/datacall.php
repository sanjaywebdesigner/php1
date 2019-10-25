<html>
	<head>
	<style>
		.d1{
			width:1008px;
			height:52px;
			
		}
		.d2{
			width:250px;
			height:50px;
			border:1px solid black;
			float:left;
		}
		</style>
	</head>
	
</html>

<?php
include 'db.php';
$sql = "SELECT * FROM users ORDER BY userId DESC";
$result = $conn->query($sql);
echo "<div class='d1'>";
echo "<div class='d2'>Username</div>";
echo "<div class='d2'>Password</div>";
echo "<div class='d2'>First Name</div>";
echo "<div class='d2'>Last Name</div>";
while($row = $result->fetch_assoc()) {
	echo "<div class='d2'>".$row['userName']."</div>";
echo "<div class='d2'>".$row['password']."</div>";
echo "<div class='d2'>".$row['firstName']."</div>";
echo "<div class='d2'>".$row['lastName']."</div>";
}
echo "</div>";
?>

