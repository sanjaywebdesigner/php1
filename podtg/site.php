<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<style>
	
		.main{width:600px;
			}
		.sub{width:198px;
			height:48px;
		border:1px solid black;
		float:left;}
	</style>
</head>

<body>
	<?php
	session_start();
	session_destroy();
	$a="localhost";
	$b="root";
	$c="";
	$d="crud";
	
	$rahul=new mysqli($a,$b,$c,$d);
	
	
	if($rahul->connect_error)
	{
		
		die("connection failed:" .$rahul->connect_error);
	}
	?>
	<div class="main">
	<div class="sub">Name</div>
	<div class="sub">password</div>
	<div class="sub">profile</div>
	</div>
	<?php
	$sql="SELECT * FROM crud_tab";
	
	$result=$rahul->query($sql);
	
	$result->num_rows>0;
	
	while($row=$result->fetch_assoc()){
	
	?>
	<div class="main">
	<div class="sub"><?php echo $row['username'] ?></div>
	<div class="sub"><?php echo $row['password'] ?></div>
	<div class="sub"><a href="profile.php?username=<?php echo $row['username'] ?>">visitprofile</a></div>
	</div>
	<?php
	}
		?>
</body>
</html>