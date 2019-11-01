<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "team44";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

?>
<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<title>Pagination</title>
<link href="style.css" rel="stylesheet" type="text/css" />
	<style>
	.s1{
	width:1000px;
	height:55px;
	border:1px solid black;
	
}
		h2{
			margin-left:50px;
		}
	</style>
</head>

<body>


<?php

$perpage = 5;

if(isset($_GET["page"])){
	$page = intval($_GET["page"]);
}
else {
$page = 1;
}

//$start =$page*5-5;
	$start=$page*$perpage-$perpage;
	$sql = "select * from post Limit $start, $perpage";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
	
	while($post = $result->fetch_assoc()) {
?>


<div class="s1">
<h1><?php echo $post["title"];?></h1>
	</div>


<div class="s1">
<h2><?php echo $post["detail"]; ?></h2>
	</div>
<?php
}
}
?>





<?php

if(isset($page))

{
$sql = "select count(*) As Total from post";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
$row = $result->fetch_assoc();


$total = $row["Total"];

}

$totalPages = ceil($total / $perpage);
	//echo "number of pages are $totalPages";

if($page <=1 ){

echo "<span id='page_links' style='font-weight: bold;'>Prev</span>";

}

else

{

$j = $page - 1;

echo "<span><a id='page_a_link' href='paginationdd1.php?page=$j'>< Prev</a></span>";

}

for($i=1; $i <= $totalPages; $i++)

{


echo "<span><a id='page_a_link' href='paginationdd1.php?page=$i'>$i</a></span>";



}

if($page == $totalPages )

{

echo "<span id='page_links' style='font-weight: bold;'>Next ></span>";

}

else

{

$j = $page + 1;

echo "<span><a id='page_a_link' href='paginationdd1.php?page=$j'>Next</a></span>";

}

}

?>


</body>
</html>