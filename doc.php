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

	
	$opis=$_POST["opis"];
	$file=$_FILES['doc']['name'];
	

	$dst="./doc/".$file;
	$dst_db="doc/".$file;

	


	move_uploaded_file($_FILES['doc']['tmp_name'], $dst);
	
	


	$query="INSERT INTO `doc`(opis,doc) VALUES ('$opis','$dst_db')";

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

    <a class="btn btn-primary bg-warning  " id="bt11" href="addimg.php" role="button">Dodaj zdjecie</a>
      <a class="btn btn-primary bg-warning  " id="bt22" href="index.php" role="button">Chat</a>

      <a class="btn btn-primary bg-warning   " id="bt33" href="userhome.php" role="button">Strona główna</a>
      <a class="btn btn-primary bg-warning  " id="bt33" href="logout.php" role="button">Wyloguj</a>


    <div class="w-100" id="doc">



<h1> Dokumenty do pobrania w formie PDF</h1>
<li><a href="pdf/cmrnad.pdf" >CMR Nadawcy</a></li>
<li><a href="pdf/cmrnodb.pdf" >CMR odbiorcy</a></li>
<li><a href="pdf/cmrprze.pdf" >CMR przewoznika</a></li>
<h1> Dokumenty do pobrania w formie DOC</h1>
<li><a href="pdf/cmrnad.docx" >CMR Nadawcy doc</a></li>
<li><a href="pdf/cmrnodb.docx" >CMR odbiorcy doc</a></li>
<li><a href="pdf/cmrprze.docx" >CMR przewoznika doc</a></li>
<h1> Dodaj plik DOC</h1>



			
				
				<form action="doc.php" method="POST" enctype="multipart/form-data">
					
					<div>
						<label>Opis</label>
						<input type="text" name="opis">
					</div>
					<div>
						<label>Plik</label>
						<input type="file" name="doc">
					</div>
					
					
					<div>
						<input class="buttondoc" type="submit" name="submit" value="Upload Data">
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