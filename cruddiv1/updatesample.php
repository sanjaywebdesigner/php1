<?php
require_once("db.php"); 
$user=$_POST['username'];
$mobile=$_POST['mobile'];


$sql = "UPDATE sample1 set mobile='$mobile' WHERE username='$user'";
	
	

if ($conn->query($sql) === TRUE) {
    header("Location:indexsample.php");
} else {
    echo "Error updating record: " . $conn->error;
}

?>