<?php
require_once("db.php");
$ss=$_GET["username"];

$select_query = "SELECT * FROM sample1 WHERE username='$ss'";
$result = $conn->query($select_query);
$row = $result->fetch_assoc();
?>
<html>
<head>

<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form method="post" action="updatesample.php">




<input type="text" name="username" class="txtField" value="<?php echo $row['username']; ?>"><br>
<input type="text" name="mobile" class="txtField" value="<?php echo $row['mobile']; ?>"><br>

<input type="submit" name="submit" value="Submit" class="btnSubmit"></td>



</form>
</body></html>