<?php



	$user=$_POST['username'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
$username="root";
$servername="localhost";
$password="";
$database="updatein";
$lalit= new mysqli($servername,$username,$password,$database);
if ($lalit->connect_error)
{
	die("connection failed: " . $lalit->connect_error);
}
else
{
	if(isset($_POST['genderupdate']))
	{
	$sql = "UPDATE updatein SET gender='$gender' WHERE username='$user'";

if ($lalit->query($sql) === TRUE) {

} else {
    echo "Error updating record: " . $lalit->error;
}
	}
	else if(isset($_POST['emailupdate']))
	{
	$sql = "UPDATE updatein SET email='$email' WHERE username='$user'";

if ($lalit->query($sql) === TRUE) {
	
} else {
    echo "Error updating record: " . $lalit->error;
}	
	}
}

?>
