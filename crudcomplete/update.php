<?php
require_once("db.php"); 
$userid=$_POST['userId'];
$user=$_POST['userName'];
$pass=$_POST['password'];
$first=$_POST['firstName'];
$last=$_POST['lastName'];

$sql = "UPDATE users set userName='$user',password='$pass', firstName='$first', lastName='$last' WHERE userId='$userid'";
	
	

if ($conn->query($sql) === TRUE) {
    header("Location:index.php");
} else {
    echo "Error updating record: " . $conn->error;
}

?>