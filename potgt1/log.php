<?php
session_start();
$a="localhost";
$b="root";
$c="";
$d="crud";

$rahul=new mysqli($a,$b,$c,$d);

if($rahul->connect_error){
	
	die("connection failed".$rahul->connect_error);
}else{
	
	$un=$_POST['user'];
	$pw=$_POST['pass'];
	
	$sql="SELECT * FROM crud_tab WHERE username='$un' AND password='$pw'";

	$result=$rahul->query($sql);
	
	$result->num_row>0;
	
	$row=$result->fetch_assoc();
	
	$_SESSION['uname']=$row['username'];
	$_SESSION['pword']=$row['password'];
	
	
	$uu=$_SESSION['uname'];
	$pp=$_SESSION['pword'];
	
	if($uu && $pp){
	header("Location:site.php");
		}else{
		
		echo"error";
	}
}

?>
