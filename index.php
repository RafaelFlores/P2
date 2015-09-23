<?php session_start(); ?>
<!DOCTYPE html>

<html>
  <head>

    <link rel="stylesheet" type="text/css" href="externalstyle.css">


    <title>Password Generator</title>
    <?php include ("logic.php"); ?>

  </head>
  <body>
<h1 class="titleBox"> Password Generator</h1>
<p class = centerBox>
  A password needs to comply with two functions: It has to be hard to crack but
  it has to be easy to remember, so thats why  this page genereates passwords
  using words that are easy to remember. This passwords are known to be
  xkcd passwords because they explain the issue in their comic #936 Password
  Strength at <a href="http://www.explainxkcd.com/wiki/index.php/936:_Password_Strength"
  >http://www.explainxkcd.com/wiki/index.php/936:_Password_Strength</a>
</p>
<br>
<form  class = "centerBox" action="index.php" method="post">
  Number of Words max(<?php echo $maxNumOfWords ?>): <input type="text" name="numOfWords"> <br>
  Add a Number: <input type="checkbox" name="number"> <br>
  Add a Symbol: <input type="checkbox" name="symbol"> <br>

  <input type="submit" >

</form>

<p class = "passwordBox">
<?php echo $outString; ?>
</p>
<img class = "centerIMG" src="lock.png" alt="lock image">

  </body>
</html>
