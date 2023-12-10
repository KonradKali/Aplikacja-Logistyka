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
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<meta charset="UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style type="text/css">

</style>
<body>

<div class="bg">

    
        <div class="container-fluid p-0  text-white text-center">
            <h1 style="text-align: center; color: red; border-style: outset;"><a style="color: black;">Witam</a> <?php echo $_SESSION["username"] ?> <button id="bt5" onclick="window.location.href='logout.php'" >wyloguj</button> </h1>
  
        </div>


    <div class="container mt-5 p-5 ">

<div class="row">

          <div class="col-sm-6 p-5">
               <a class="btn btn-primary bg-warning p-5   position-absolute bottom-50 end-50" id="bt1" href="addimg.php" role="button">Dodaj zdjecie</a></br>
      <a class="btn btn-primary bg-warning p-5 position-absolute top-50 end-50" id="bt2" href="doc.php" role="button">Dokumenty do pobrania</a>
          </div>
          <div class="col-sm-6 p-5">
      
                       <a class="btn btn-primary bg-warning p-5  position-absolute bottom-50 start-50" id="bt3" href="index.php" role="button">Chat</a></br>
                       <a class="btn btn-primary bg-warning p-5 position-absolute top-50 start-50" id="bt4" href="logout.php" role="button">Wyloguj</a>
              </div>


            </div>
            </div>

      </div>


    </div>



</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>