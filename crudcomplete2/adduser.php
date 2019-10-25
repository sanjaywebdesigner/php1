<?php

	include 'db.php';
	$sql = "INSERT INTO users (userName, password, firstName, lastName) VALUES ('" . $_POST["userName"] . "','" . $_POST["password"] . "','" . $_POST["firstName"] . "','" . $_POST["lastName"] . "')";
	if ($conn->query($sql) === TRUE) {
		 header("Location:index.php");
	}

?>