<?php

include 'db.php';
$user=$_POST["userName"];
$pass=$_POST["password"];
$first=$_POST["firstName"];
$last=$_POST["lastName"];
	$sql = "INSERT INTO users (userName, password, firstName, lastName) VALUES ('$user','$pass','$first','$last')";
	if ($conn->query($sql) === TRUE) {
    header("Location:index.php");
}

?>