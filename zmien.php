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
	<link rel="stylesheet" type="text/css" href="style.css" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Zamień</title>
</head>
<style type="text/css">
	


.bottom{


}
.center h1{
	color: #00FF00;
}

.center a{
	color: #00FF00;
}


</style>
<body>

<?php

$host="localhost";
$user="root";
$password="";
$db="user";

$data=mysqli_connect($host,$user,$password,$db);

$s_id=$_GET['id'];

$sql="SELECT * FROM `addimg` where id='$s_id' ";

$result = mysqli_query($data,$sql);

$info = $result->fetch_assoc();

/*echo "{$info['rodzaj']}";
echo "{$info['opis']}";
echo "<img height='200' width='200' src='{$info['image']}>";*/

?>

<div class="bg">


<div class="container">
  <div class="row" id="button2">

    <h1 style="text-align: center; color: red; border-style: outset;"><a style="color: grey;">Witam</a> <?php echo $_SESSION["username"] ?> </h1>

    <a class="btn btn-primary bg-warning  " id="bt11" href="wyswietlimg.php" role="button">Wyswietl zdjecie</a>
      <a class="btn btn-primary bg-warning  " id="bt22" href="index2.php" role="button">Chat</a>

      <a class="btn btn-primary bg-warning   " id="bt33" href="adminhome.php" role="button">Strona główna</a>
      <a class="btn btn-primary bg-warning  " id="bt33" href="wyswietldoc.php" role="button">wyświetlenie doc</a>


    <div class="w-100" id="zmien">

		<form action="zmienzaw.php" method="POST" enctype="multipart/form-data">
			<div>
			
				<input type="text" name="id" value="<?php
				 echo "{$info['id']}"; ?>" hidden>
			</div>

			<div>
				<label>Rodzaj ładunku</label>
				<input type="text" name="rodzaj" value="<?php
				 echo "{$info['rodzaj']}"; ?>">
			</div>

			<div>
				<label>Opis</label>
				<input type="text" name="opis" value="<?php
				 echo "{$info['opis']}"; ?>">
			</div>

			<div>
				<label>Stare zdjęcie</label>
				<img height='150' width='150' src="<?php
				 echo "{$info['image']}"; ?>">
			</div>

			<div>
				<label>Zmiana zdjecia</label>
				<input type="file" name="image" >
			</div>

			<div>
				
				<input class="buttonzmien" type="submit" name="zmien" value="Update Data">
			</div>




		</form>



<?php
?>

</div>
</div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>