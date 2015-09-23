<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
<style media="screen">
.titleBox {
  text-align: center;
  border: 5px solid blue;
  margin-left: 30%;
  margin-right: 30%;
  }

  .centerBox {
    border: solid gray;
    text-align: center;
    margin-left: 30%;
    margin-right: 30%;
  }

  .passwordBox {
    font-size: 200%;
    text-align: center;
    border: solid blue;
    margin-left: 30%;
    margin-right: 30%;
    height: 40px;
    }

</style>

    <title>Password Generator</title>
    <?php include ("logic.php"); ?>

  </head>
  <body>
<h1 class="titleBox"> Password Generator</h1>

<br>
<form  class = "centerBox" action="index.php" method="post">
  Number of Words: <input type="text" name="numOfWords"> <br>
  Add a Number: <input type="checkbox" name="number"> <br>
  Add a Symbol: <input type="checkbox" name="symbol"> <br>
  First Letter to Capital: <input type="checkbox" name="capital"> <br>
  <input type="submit" >

</form>

<p class = "passwordBox">
<?php echo $outString; ?>
</p>
  </body>
</html>
