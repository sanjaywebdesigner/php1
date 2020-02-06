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
echo "Connected successfully";
?>