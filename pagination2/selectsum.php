<?php
$conn=mysqli_connect("localhost","root","","team44");
?>
<!DOCTYPE>
<html>
<head>
<meta charset=utf-8" />
<title>Pagination</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<table style="border: 1px #000000 solid;" width="400" cellspacing="2" cellpadding="2" align="center">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "team44";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT SUM(id) As sum FROM post";
$result = $conn->query($sql);
$rs = mysqli_fetch_assoc($result);
$sum = $rs["sum"];
echo $sum;
?>


</body>
</html>