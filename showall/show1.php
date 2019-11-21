<?php
$servername="localhost";
$username="root";
$password="";
$dbname="showall";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$name=$_POST['username'];
$pass=$_POST['password'];
$sql = "SELECT * FROM show1 WHERE username='$name' AND password='$pass' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc() ;
	?>
<input type="text" value="<?php echo $row["username"];?>"><br>	
						  <input type="text" value="<?php echo $row["password"];?>"><br>
<input type="radio" value="male" 
	 <?php 
	if($row["gender"]=="male")
	{
		echo "checked";
	}
	else
	{
		echo "";
	}
	
	?>>Male<br><input type="radio" value="female" 
	 <?php 
	if($row["gender"]=="female")
	{
		echo "checked";
	}
	else
	{
		echo "";
	}
	
	?>>Female<br><input type="radio" value="female" 
	 if($row["gender"]=="others")
	{
		echo "checked";
	}
	else
	{
		echo "";
	}
	
	?>others
<?Php
    }
 else {
    echo "failed";
}


$conn->close();

?>