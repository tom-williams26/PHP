<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Data Types</title>
  </head>
  <body>
    <?php
      //Below are different PHP data types you need to know about

      //String
      $string = "This is a string of text!";

      //Integer
      $int = 10;

      //Float
      //A number with decimals
      $float = 10.1425;

      //Boolean
      //true = 1 and false = 0
      $boolTrue = true;
      $boolTrue = 1;
      $boolFalse = false;
      $boolFalse = 0;

      //Array
      //Can store MANY data in one variable
      //We will get more into arrays later
      $array = array("Tom", "Williams", 26);
      //Get single data from array
      echo $array[0]; //This will output "Tom"
      echo $array[2]; //This will output "26"
    ?>
  </body>
</html>
