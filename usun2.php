<?php

$host="localhost";
$user="root";
$password="";
$db="user";

$data=mysqli_connect($host,$user,$password,$db);

$s_id=$_GET['id'];

$query="DELETE FROM `doc` where id='$s_id' ";

$result=mysqli_query($data,$query);

if($result)
{
	header("location:wyswietldoc.php");
}
else
{
	echo "Nie udało sie usunąć";
}

?>