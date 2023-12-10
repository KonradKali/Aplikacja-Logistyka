<?php 

session_start();


if(!isset($_SESSION['username']))
{
	header("location:login.php");
}



$conn=mysqli_connect("localhost","root","","user");
if(!$conn){
	die("connection filed".mysqli_connect_error());
}

$msg=$_POST['msg'];
$username=$_SESSION['username'];

$sql="INSERT INTO posts(msg,username) values('$msg','$username')";
$result=$conn->query($sql);


header("location:index.php");







?>