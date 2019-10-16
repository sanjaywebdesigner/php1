<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<style>
	.s1{
		width:1010px;
		height:52px;
		}
		.a1{
			width:200px;
			height:50px;
			float:left;
			background-color:pink;
			border:1px solid black;
		}
	</style>
</head>

<body>
	<div class="s1">
	<div class="a1">Name</div>
	<div class="a1">Password</div>
	<div class="a1">Mobile</div>
	<div class="a1">Mail</div>
	<div class="a1">Address</div>
	</div>
	<div class="s1">
	<div class="a1">
	<?php
	echo $_SESSION['username']; 	
		?>
		
		</div>
	<div class="a1">
		<?php
	echo $_SESSION['password']; 	
		?>
		</div>
	<div class="a1">
		<?php
	echo $_SESSION['mobile']; 	
		?>
		</div>
	<div class="a1">
	<?php
	echo $_SESSION['mail']; 	
		?>	
		</div>
	<div class="a1">
		<?php
	echo $_SESSION['address']; 	
		?>
		
		</div>
	</div>
</body>
</html>