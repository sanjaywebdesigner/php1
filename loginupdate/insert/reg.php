<?php
$servername = "localhost";
$username = "updates";
$password = "123";
$dbname = "loginupdate";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$name=$_POST['user'];
$pass=$_POST['pass'];
$address=$_POST['address'];
$sql= "INSERT INTO register (username, password, address)
VALUES ('$name', '$pass','$address')";

if ($conn->query($sql) === TRUE) {
	echo "record sucessful";
}
else
{
	echo "record not sucessful";
}
?>