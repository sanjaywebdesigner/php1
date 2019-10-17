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
			background-color:pink;
			float:left;
			border:1px solid black;
		}
	</style>
</head>

<body>
	<div class="s1">
	<div class="a1">Name</div>
		<div class="a1">Passwrod</div>
		<div class="a1">Phone</div>
		<div class="a1">Email Id</div>
		<div class="a1">Address</div>
	</div>
	<div class="s1">
	<div class="a1">
	<?php
		echo $_SESSION['a1']
		?>
		</div>
		<div class="a1">
		<?php
		echo $_SESSION['a2'];
		?>
		
		</div>
		<div class="a1">
		<?php
		echo $_SESSION['a3'];
		?>
		
		</div>
		<div class="a1">
		<?php
		echo $_SESSION['a4'];
		?>
		</div>
		<div class="a1">
		
		<?php
		echo $_SESSION['a5'];
		?>
		</div>
	</div>
</body>
</html>