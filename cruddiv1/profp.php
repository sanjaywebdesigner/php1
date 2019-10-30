<?php
session_start();
include ('db.php');

$aa1=$_POST['user'];
$aa2=$_POST['mob'];

$sql="SELECT * FROM sample1 where username='$aa1' AND mobile='$aa2'";

$result=$conn->query($sql);

if($result->num_rows > 0){

$row=$result->fetch_assoc();

$_SESSION['a1']=$row['username'];
$_SESSION['a2']=$row['mobile'];
echo $row['username']."<br>";
	echo $row['mobile']."<br>";
	echo "<a href='profile.php'>profile</a><br>";
	echo "<a href='logout.php'>logout</a>";
}else{
	echo "login failed";
	
}




?>