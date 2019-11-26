<?php
require_once("database.php");
$n1=$_GET["name"];
$sql = "DELETE FROM crud WHERE name='$n1'";
$conn->query($sql);
header("Location:index.php");
?>