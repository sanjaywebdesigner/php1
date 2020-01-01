<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dateupdate";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$user=$_POST['username'];
$pass=$_POST['password'];
$sql = "SELECT* FROM dateupdate WHERE username='$user' AND password='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
	?>
	<form action="updatedata1.php" method="post">
	<input type="hidden" name="dd" value="<?php echo $row['username'];?>">	
		<?php
	
	$dd1 = explode("-", $row['dob']);
	?>
<br>Date<select name="ss">
		<option><?php echo $dd1[0];?></option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		</select>
Month<select name="ss1">
		<option><?php echo $dd1[1];?></option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		</select>
Year<select name="ss2">
		<option><?php echo $dd1[2];?></option>
		<option>2001</option>
		<option>2002</option>
		<option>2003</option>
		<option>2004</option>
		</select><br>
		<input type="submit" value="update">
</form>
	<?php
}
?>