<?php 

$conn=mysqli_connect("localhost","root","","user");
if(!$conn){
	die("connection filed".mysqli_connect_error());
}

$sql="TRUNCATE TABLE posts";
$result=$conn->query($sql);


if($result)
{
	header("location:index.php");
}
else
{
	echo "Nie udało sie usunąć";
}


?>