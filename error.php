<?php session_start() ?>

<html>
  <head>

    <meta http-equiv="Refresh" content="5; url=index.php">
    <link rel="stylesheet" type="text/css" href="externalstyle.css">

    <?php include ("logic.php"); ?>
    <title>An Error Ocurred</title>
  </head>
  <body
  <p class ="error">
     <?php echo $_SESSION['errorMessage'] ?>

     </p>
     <p>
       You can try again in 5 seconds
     </p class ="error">

<p>
  <a href="index.php">If you are not redirected click here</a>
</p>

  </body>
</html>
