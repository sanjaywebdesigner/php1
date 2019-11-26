<?php
include 'database.php';
$name=$_POST["name"];
$mobile=$_POST["mobile"];
$email=$_POST["email"];
$password=$_POST["password"];

$sql = "INSERT INTO crud (name, mobile, email, password) 
VALUES ('$name','$mobile','$email','$password')";
if ($conn->query($sql) === TRUE) {
header("Location:index.php");
}
?>