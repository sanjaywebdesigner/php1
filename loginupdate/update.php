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
$pass1=$_POST['pass1'];
$sql = "UPDATE register SET password='$pass1' WHERE username='$name' AND password='$pass'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
?>