<?php
$servername = "localhost";
$username = "sanjaywe_reset";
$password = "sanjay@123";
$dbname = "sanjaywe_reset";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$bb=$_POST['code1'];
$sql = "select * from update1 where phone='8700729155'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
	$cc=$row['code1'];
	if($bb==$cc)
	{
		echo "sucessfull";
	}
	else
	{
		echo "not sucessful";
	}
}
?>