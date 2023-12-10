<?php
$host="localhost";
$user="root";
$password="";
$db="user";

$data=mysqli_connect($host,$user,$password,$db);


if(isset($_POST['zmien']))
{
	$id=$_POST['id'];

	$rodzaj=$_POST['rodzaj'];

	$opis=$_POST['opis'];

	$file=$_FILES['image']['name'];

	$dst="./image/".$file;

	$dst_db="image/".$file;

	move_uploaded_file($_FILES['image']['tmp_name'], $dst);


	$sql="UPDATE addimg SET rodzaj='$rodzaj' ,opis='$opis',image='$dst_db' where id='$id' ";

	$result=mysqli_query($data,$sql);

	if($result)
	{
		header("location:wyswietlimg.php");

	}
	else
	{
		echo "Zamiania nieudana ";
	}


}




?>