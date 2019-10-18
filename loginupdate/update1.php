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
if(isset($_POST['s1']))
{
$name=$_POST['user'];
$pass=$_POST['pass'];

$sql = "UPDATE register SET password='$pass' WHERE username='$name'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
}
else if(isset($_POST['s2']))
{
$name=$_POST['user'];
$address=$_POST['address'];

$sql = "UPDATE register SET address='$address' WHERE username='$name'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
}
?>