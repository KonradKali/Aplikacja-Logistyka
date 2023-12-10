<?php
session_start();


if(!isset($_SESSION['username']))
{
	header("location:login.php");
}

elseif($_SESSION['usertype']=='admin')
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


<body>
<?php

error_reporting(0);
session_start();
$host="localhost";
$user="root";
$password="";
$db="user";




$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
	die("connection error");
}

if(isset($_POST['submit']))
{

	$rodzaj=$_POST["rodzaj"];
	$opis=$_POST["opis"];
	$file=$_FILES['image']['name'];
	

	$dst="./image/".$file;
	$dst_db="image/".$file;

	


	move_uploaded_file($_FILES['image']['tmp_name'], $dst);
	
	


	$query="INSERT INTO `addimg`(rodzaj,opis,image) VALUES ('$rodzaj','$opis','$dst_db')";

	$result=mysqli_query($data,$query);


	if($result)
	{
		header("location:userhome.php");
	}
	else
	{
		echo "Nie załadowano prawidłowo";
	}
}

?>
<div class="bg">


<div class="container">
  <div class="row" id="button2">

    <h1 style="text-align: center; color: red; border-style: outset;"><a style="color: grey;">Witam</a> <?php echo $_SESSION["username"] ?> </h1>

    <a class="btn btn-primary bg-warning  " id="bt11" href="doc.php" role="button">Dokumenty do pobrania</a>
      <a class="btn btn-primary bg-warning  " id="bt22" href="index.php" role="button">Chat</a>

      <a class="btn btn-primary bg-warning   " id="bt33" href="userhome.php" role="button">Strona główna</a>
      <a class="btn btn-primary bg-warning  " id="bt33" href="logout.php" role="button">Wyloguj</a>


    <div class="w-100" id="addimg">

				
				<form action="addimg.php" method="POST" enctype="multipart/form-data">
					<div>
						<label>Rodzaj ładunku</label>
						<input type="text" name="rodzaj">

					</div>
					<div>
						<label>Opis</label>
													<input type="text" name="opis">
					</div>
					<div>
						<label>Zdjęcie</label>
						<input  type="file" name="image">
					</div>
					
					
					<div>
						<input class="buttonaddimg" type="submit" name="submit" value="Dodaj zdjęcie">
					</div>

				</form>
			

</div>

</div>
</div>
  </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>