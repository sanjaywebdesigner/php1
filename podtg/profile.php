<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	
	<style>
	
		.main{width:1000px;
			}
		.sub{width:198px;
			height:48px;
		border:1px solid black;
		float:left;}
		
					page_links
 {
  font-family: arial, verdana;
  font-size: 12px;
  border:1px #000000 solid;
  padding: 6px;
  margin: 3px;
  background-color: #cccccc;
  text-decoration: none;

 }
 #page_a_link
 {
	 
  font-family: arial, verdana;
  font-size: 12px;
  border:1px #000000 solid;
  color: #ff0000;
  background-color: #cccccc;
  padding: 6px;
  margin: 3px;

  text-decoration: none;
 }
	
		.pos{clear:both;}
	</style>
	
</head>

<body>
	
	<?php
	session_start();
	
	$a="localhost";
	$b="root";
	$c="";
	$d="crud";
	
	$rahul=new mysqli($a,$b,$c,$d);
	
	if(isset($_SESSION['get1'])){
		$get=$_SESSION['get1'];
	}else{
	$get=$_GET['username'];
	
	$_SESSION['get1']=$get;
	}
	$sql="SELECT * FROM crud_tab WHERE username='$get'";
	
	$result=$rahul->query($sql);
	
	$result->num_rows >0;
	
	$row=$result->fetch_assoc();
	
	
	?>
	
	<div class="top">
	<ul>
		<li>username:<?php echo $row['username'] ?></li>
		<li>password:<?php echo $row['password']?></li>
		<li>id:<?php echo $row['id']?></li>
		<li>address:<?php echo $row['address']?></li>
		</ul>
	<?php
	
	$_SESSION['password']=$row['password'];
	$_SESSION['id']=$row['id'];
	$_SESSION['address']=$row['address'];
			
	
	?>
	<a href="profile2.php">profile2</a>
	
	</div>
	<div class="bot">
	
	<form action="#" method="post">
		<input type="text" name="mon" placeholder="month">
		<input type="text" name="fee" placeholder="fee">
		<input type="text" name="bal" placeholder="balance">
		<input type="text" name="adv" placeholder="advance">
		<input type="submit" name="sub">

		</form>
	<?php
	
	$sql_tab="CREATE TABLE $get (
	month VARCHAR(30) PRIMARY KEY,
	fees VARCHAR(30) ,
	balance VARCHAR(30) ,
	advance VARCHAR(30) 
	)";
			
			if($rahul->query($sql_tab)){
				
				echo"table done";
				
			}else{
				
				echo"table not done:".$rahul->error."<br>";
				
	
				
			}
			
					if(isset($_POST['mon']))
					   {
						   $mon=$_POST['mon'];
					   }
	if(isset($_POST['fee']))
					   {
		$fee=$_POST['fee'];
	}
	if(isset($_POST['bal']))
					   {
		$bal=$_POST['bal'];
	}
	if(isset($_POST['adv']))
					   {
		$adv=$_POST['adv'];
	}
	if(isset($_POST['sub']))
	{
$sql_ins="INSERT into $get (month,fees,balance,advance) VALUES('$mon','$fee','$bal','$adv')";
			
				if($rahul->query($sql_ins)){
					
					echo $get."'s information is inserted";
					
				}else{
					echo "error in insertion:".$rahul->error."<br>";
					 }	
	}
		$perpage=2;
			
			if(isset($_GET["page"])){
				
				
				$page=intval($_GET["page"]);
			}else{
				$page=1;
			}
				
		$start=$page*$perpage-$perpage;
			
			$sql_pg="SELECT * FROM $get ORDER BY month DESC LIMIT $start,$perpage";
			
			$result_pg=$rahul->query($sql_pg);
			
			if($result_pg->num_rows >0){
				
				$i=0;
				
				while($row_pg=$result_pg->fetch_assoc()){
					
				$_SESSION['mons']=$row_pg['month'];
					$_SESSION['fees']=$row_pg['fees'];
					$_SESSION['bals']=$row_pg['balance'];
					$_SESSION['advs']=$row_pg['advance'];	
			
				
			
			
	?>
<div class="main">
		<div class="sub"><?php echo $_SESSION['mons'] ?></div>
		<div class="sub"><?php echo $_SESSION['fees'] ?></div>
		<div class="sub"><?php echo $_SESSION['bals'] ?></div>
		<div class="sub"><?php echo $_SESSION['advs'] ?></div>
		<div class="sub"><a href="edit.php?month=<?php echo $_SESSION['mons'] ?>&fees=<?php echo $_SESSION['fees'] ?>&bals=<?php echo $_SESSION['bals'] ?>&advs=<?php echo $_SESSION['advs'] ?>">update</a></div>
		</div>
	<?php }
		
		}
		
			if(isset($page)){
				
				$sql_pg2="SELECT COUNT(*) As Total  FROM $get";
				
				$result_pg2=$rahul->query($sql_pg2);
				
				$result_pg2->num_rows>0;
				
				$row_pg2=$result_pg2->fetch_assoc();
				
				$total=$row_pg2["Total"];
			}
			
			$totalpages=ceil($total /$perpage);
			echo"<div class='pos'>";
			if($page<=1){
				
				echo"<span id='page_links' style='font-weight:bold'>start</span>";
			}else{
				$j=$page-1;
				
echo"<span><a href='profile.php?page=$j' id='page_a_link' style='font-weight:bold'>prev</a></span>";
			}
			
			for($i=1;$i<=$totalpages;$i++){
				
echo "<span><a href='profile.php?page=$i' id='page_a_link' style='font-weight:bold'>$i</a></span>";	
				
			}
		
			if($page==$totalpages){
				
				echo"<span id='page_links' style='font-weight:bold'>last</span>";
			}else{
				
				$j=$page+1;
				echo"<span><a href='profile.php?page=$j' id='page_a_link' style='font-weight:bold'>last</a></span>";
			}
			echo"</div>";
		?>
	</div>
	
</body>
</html>