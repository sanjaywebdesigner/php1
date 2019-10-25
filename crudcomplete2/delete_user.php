<?php
require_once("db.php");
$ss=$_GET["userId"];
$sql = "DELETE FROM users WHERE userId='$ss'";
$conn->query($sql);
header("Location:index.php");
?>