<?php
require_once("database.php");
$n1=$_GET["name"];

$select_query = "SELECT * FROM crud WHERE name='$n1'";
$result = $conn->query($select_query);
$row = $result->fetch_assoc();
?>
<html>
<head>
</head>
<body>
<form action="update.php" method="post">

<input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
<input type="text" name="mobile" value="<?php echo $row['mobile']; ?>"><br>
<input type="text" name="email" value="<?php echo $row['email']; ?>"><br>
<input type="text" name="password" value="<?php echo $row['password']; ?>"><br>
<input type="submit" name="submit" value="Submit">

</form>
</body>
</html>