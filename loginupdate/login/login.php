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

$sql = "SELECT* FROM register where username='$name' and  password='$pass'";
$result = $conn->query($sql);
if($result->num_rows>0){
	 $row = $result->fetch_assoc();
	echo $row['username']."<br>";
	echo $row['password']."<br>";
	echo $row['address']."<br>";
}
else{
	echo "error";
}
?>