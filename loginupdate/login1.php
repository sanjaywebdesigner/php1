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
	echo "<form action='up.php' method='post'>";
	echo "<input type='text' name='user' value='".$row['username']."'><br>";
	echo "<input type='text' name='pass' value='".$row['password']."'><br>";
	echo "<input type='text' name='address' value='".$row['address']."'><br>";
	echo "<input type='submit' value='submit'><br>";
	echo "</form>";
}
else{
	echo "error";
}
?>