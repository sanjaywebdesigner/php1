<?php
session_start();

$a="localhost";
$b="crud_user";
$c="crud_pass";
$d="crud";

$rahul=new mysqli($a,$b,$c,$d);

if($rahul->connect_error){
	
	die("connectio failed:" . $rahul->connect_error);
	
	}else{
		
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		
	$sql="SELECT * FROM crud_tab WHERE username='$user' AND password='$pass'";
		
		$result=$rahul->query($sql);
		if($result->num_rows > 0){
			$row=$result->fetch_assoc();
			
			$_SESSION['a1']=$row['user'];
			$_SESSION['a2']=$row['pass'];
			$_SESSION['a3']=$row['id'];
			$_SESSION['a4']=$row['add'];
			header("Location:site.php");
			}else{
				echo "login failed";
				}
		
		}
		
		


?>