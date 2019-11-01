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
$sql = "SELECT* FROM post WHERE title='CMS'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<table border='1'>
<tr>
<td>title</td>
<td><?php echo $row['title']; ?></td>
</tr>
<tr>
<td>detail</td>
<td><?php echo $row['detail']; ?></td>
</tr>
</table>
