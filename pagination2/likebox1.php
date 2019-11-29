<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form action="#" method="post">
	<input type="text" name="name">
		<input type="submit">
	
	</form>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "team44";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
	if(isset($_POST['name']))
	{
		
	
$a1=$_POST['name'];
$sql = "SELECT* FROM post WHERE title LIKE '%$a1%'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
	?>
    <head>
    <style>
    .ss{width:1000px;
	height:50px;
	border:1px solid black;
	}
    </style>
    <head>
    <?php
echo "<div class='ss'>";
echo "title: ".$row['title']."<br>";
echo "description: ".$row['detail']."<br>";
echo "</div>";
}
	}
	else
	{
		$sql = "SELECT* FROM post";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
	?>
    <head>
    <style>
    .ss{width:1000px;
	height:50px;
	border:1px solid black;
	}
    </style>
    <head>
    <?php
echo "<div class='ss'>";
echo "title: ".$row['title']."<br>";
echo "description: ".$row['detail']."<br>";
echo "</div>";
}
	}
?>
		</body>
</html>