<?php
require_once("database.php"); 
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];


$sql = "UPDATE crud SET mobile = '$mobile', email = '$email', password='$password' WHERE name = '$name'";


if ($conn->query($sql) === TRUE) {
	header("Location: index.php"); 
    
} else {
    echo "Error updating record: " . $conn->error;
}
?>