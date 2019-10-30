<?php
require_once("db.php");
$ss=$_GET["username"];
$sql = "DELETE FROM sample1 WHERE username='$ss'";
$conn->query($sql);
header("Location:indexsample.php");
?>