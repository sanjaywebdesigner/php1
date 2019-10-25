<?php
include 'db.php';
$user=$_POST["username"];
$mobile=$_POST["mobile"];

	$sql = "INSERT INTO sample1 (username, mobile) VALUES ('$user','$mobile')";
	if ($conn->query($sql) === TRUE) {
    header("Location:indexsample.php");
}

?>