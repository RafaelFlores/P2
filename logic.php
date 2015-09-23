<?php
$words =array();
$maxNumOfWords = 10;
$outString = " ";
//Array Create.
if($fileHandler = fopen("dictionary.txt", "r")) {
  while($line = fgets($fileHandler)){
    array_push($words, trim($line));
  }
  fclose($fileHandler);
}


if (isset($_POST["numOfWords"]) && !empty($_POST["numOfWords"]))
{
    $numOfWords = htmlspecialchars(trim($_POST["numOfWords"]));
      if (!is_numeric($numOfWords)) {
        echo "not a number";
        die();
        }

      if ($numOfWords > $maxNumOfWords) {
        echo "Too big number";
        die();
      }

      $passwords = ($numOfWords < 2) ? array(array_rand($words, $numOfWords)):
      array_rand($words, $numOfWords);

    for($i = 0; $i < $numOfWords; $i++) {
        $outString .= $words[$passwords[$i]];
        if(($i +1) < $numOfWords)
          $outString .= "-";
     }

     if(isset($_POST["number"]))
     $outString .= "9";

     if (isset($_POST["symbol"])) {
       $outString .= "$";
     }

     if (isset($_POST["capital"])) {
       $outString = ucfirst($outString);
     }
     echo $outString;
}




 ?>
