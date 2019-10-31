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
$sql = "SELECT* FROM post";
$result = $conn->query($sql);
?>
<table border='1'>
<tr>
<td>title</td>
<td>detail</td>

</tr>
<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo $row['title']; ?></td>
<td><?php echo $row['detail']; ?></td>
</tr>
<?php
	}
}
?>
</table>
