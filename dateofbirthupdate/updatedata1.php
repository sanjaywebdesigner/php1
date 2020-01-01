<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dateupdate";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$user=$_POST['dd'];
$date1=$_POST['ss'];
$month1=$_POST['ss1'];
$year1=$_POST['ss2'];
$deatefull=$date1."-".$month1."-".$year1;
$sql = "UPDATE dateupdate SET dob='$deatefull' WHERE username='$user'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}


?>