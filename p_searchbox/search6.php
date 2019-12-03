<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	
	<style>
	
		.main	{width:600px;}
		.tab	{width:198px;
				height:78px;
				border:1px solid black;
				float:left;
				line-height: 78px;
				text-align: center;
				}	
	</style>
	
</head>

<body>
	<form action="#" method="post">
	<input type="text" name="id"><input type="submit" name="ss"><input type="text" name="title"><input type="submit" name="ss1"><input type="text" name="detail">
		<input type="submit" name="ss2">
	</form>
	
	<?php
$a="localhost";
$b="root";
$c="";
$d="team44";

$rahul=new mysqli($a,$b,$c,$d);

if($rahul->connect_error){
	die("connection failed:". $rahul->connect_error );
}
	
	if(isset($_POST['ss'])){
		
		$a1=$_POST['id'];
		
		$sql="SELECT * FROM post WHERE id='$a1'";
		$result=$rahul->query($sql);
		while($row=$result->fetch_assoc()){
			echo"<div class='main'>";
				
				echo"<div class='tab'>".$row['id']."</div>";
				echo"<div class='tab'>".$row['title']."</div>";
				echo"<div class='tab'>".$row['detail']."</div>";
				
				echo"</div>";
		}
		
	}
	else if(isset($_POST['ss1']) ){
		
		$a1=$_POST['title'];
		
		$sql="SELECT * FROM post WHERE title like '%$a1'";
		$result=$rahul->query($sql);
		while($row=$result->fetch_assoc()){
			echo"<div class='main'>";
				
				echo"<div class='tab'>".$row['id']."</div>";
				echo"<div class='tab'>".$row['title']."</div>";
				echo"<div class='tab'>".$row['detail']."</div>";
				
				echo"</div>";
		}
		
	}
	else if(isset($_POST['ss2'])){
		
		$a1=$_POST['detail'];
		
		$sql="SELECT * FROM post WHERE detail like '%$a1'";
		$result=$rahul->query($sql);
		while($row=$result->fetch_assoc()){
			echo"<div class='main'>";
				
				echo"<div class='tab'>".$row['id']."</div>";
				echo"<div class='tab'>".$row['title']."</div>";
				echo"<div class='tab'>".$row['detail']."</div>";
				
				echo"</div>";
		}
		
	}
	else{
		
		$sql="SELECT * FROM post";
		
		$result=$rahul->query($sql);
		
		while($row=$result->fetch_assoc()){
			
			echo"<div class='main'>";
				
				echo"<div class='tab'>".$row['id']."</div>";
				echo"<div class='tab'>".$row['title']."</div>";
				echo"<div class='tab'>".$row['detail']."</div>";
				
				echo"</div>";
			
			
		
	}
}
?>	
</body>
</html>

