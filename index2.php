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

<div class="bg">


<div class="container">
  <div class="row" id="button2">

    <h1 style="text-align: center; color: red; border-style: outset;"><a style="color: grey;">Witam</a> <?php echo $_SESSION["username"] ?> </h1>

    <a class="btn btn-primary bg-warning  " id="bt11" href="register.php" role="button">Rejestracja</a>
      <a class="btn btn-primary bg-warning  " id="bt22" href="wyswietlimg.php" role="button">wyświetlenie zdjec</a>

      <a class="btn btn-primary bg-warning   " id="bt33" href="adminhome.php" role="button">Strona główna</a>
      <a class="btn btn-primary bg-warning  " id="bt33" href="wyswietldoc.php" role="button">wyświetlenie doc</a>


    <div class="w-100" id="output3">
    
<h1 style="background-color: #6495ed;color: white;"><?php echo $_SESSION['username'] ?>-online</h1>

<div class="output" id="output2">
    
<?php 
$sql="SELECT * FROM posts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "" . $row["username"]. "" .":: " . $row["msg"]." --" .$row["date"]. "<br>";
    echo "<br>";
    
  }
} else {
  echo "0 wyników";
}
$conn->close();


?>
</div>
<form method="post" action="send2.php">
  <textarea name="msg" placeholder="type to send message...." class="form-control"></textarea>
  <input type="submit" value="Send" >

</form>
<br>
<form action="usuntxt2.php">
  <input style="width: 100%;background-color: #6495ed;color: white;font-size: 20px;" type="submit" value="Wyczyść czat" >

</form>
<br>
</div>
</div>
  </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>




</html>