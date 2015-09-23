<?php session_start(); ?>
<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="externalstyle.css">


    <title>Password Generator</title>
    <?php include ("logic.php"); ?>

  </head>
  <body>
<h1 class="titleBox"> Password Generator</h1>

<br>
<form  class = "centerBox" action="index.php" method="post">
  Number of Words max(<?php echo $maxNumOfWords ?>): <input type="text" name="numOfWords"> <br>
  Add a Number: <input type="checkbox" name="number"> <br>
  Add a Symbol: <input type="checkbox" name="symbol"> <br>
  First Letter to Capital: <input type="checkbox" name="capital"> <br>
  <input type="submit" >

</form>

<p class = "passwordBox">
<?php echo $outString; ?>
</p>
<img class = "centerIMG" src="lock.png" alt="lock image">

  </body>
</html>
