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
$sql = "DELETE FROM register WHERE username='$name' AND password='$pass'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

?>