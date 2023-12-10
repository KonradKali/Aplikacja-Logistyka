<?php
session_start();


if(!isset($_SESSION['username']))
{
	header("location:login.php");
}

elseif($_SESSION['usertype']=='user')
{
	header("location:login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title></title>
</head>



<style type="text/css">
	



</style>
<body>
<?php


$host="localhost";
$user="root";
$password="";
$db="user";

$data=mysqli_connect($host,$user,$password,$db);

$query="SELECT * FROM `addimg`";

	$result=mysqli_query($data,$query);

	if(isset($_GET['znajdz']))
	{
		$text=$_GET['search_text'];

	$sql="SELECT * FROM addimg where rodzaj LIKE '%".$text."%' ";

		$result=mysqli_query($data,$sql);
	}




?>
<div class="bg">


<div class="container">
  <div class="row" id="button2">

    <h1 style="text-align: center; color: red; border-style: outset;"><a style="color: grey;">Witam</a> <?php echo $_SESSION["username"] ?> </h1>

    <a class="btn btn-primary bg-warning  " id="bt11" href="register.php" role="button">Rejestracja</a>
      <a class="btn btn-primary bg-warning  " id="bt22" href="index2.php" role="button">Chat</a>

      <a class="btn btn-primary bg-warning   " id="bt33" href="adminhome.php" role="button">Strona główna</a>
      <a class="btn btn-primary bg-warning  " id="bt33" href="wyswietldoc.php" role="button">wyświetlenie doc</a>


    <div class="w-100" id="tab">
<form action="wyswietlimg.php" method="GET" align="center">
		<input type="text" name="search_text">
		<input type="submit" name="znajdz" value="Search Somethink">

</form>
<table border="3px" align="center">
	<tr >
		<th >Rodzaj</th>
		<th >Opis</th>
		<th >Zdjęcie</th>
		<th >Usuń</th>
		<th >Zmień</th>
	</tr>




<?php

	while ($info=$result->fetch_assoc()) 
	{
		?> 
		<tr>
		<?php
		echo "<td >{$info['rodzaj']}</td>";
		echo "<td>{$info['opis']}</td>";
		echo "<td><img height='100' width='100' src='{$info['image']}'></td>";
		
		echo "<td><a href='usun.php?id={$info['id']}' class='usun'>Usuń</a></td>";
		echo "<td><a href='zmien.php?id={$info['id']}' class='zmien' >Zmień</a></td>";
		
		?>
	</tr>
	<?php



	}
?>
</table>




</div>

</div>
</div>
  </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>