<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Scheduled Message Programming</title>
  </head>
  <body>
    <?php
      //This is a PHP script that knows which day of the week it is

      //First we get the week day as an integer using a build-in PHP function
      $dayofweek = date("w");

      //Then we use a switch to give a message depending on the day it is
      switch ($dayofweek) {
        case 1:
          echo "It is Monday!";
          break;
        case 2:
          echo "It is Tuesday!";
          break;
        case 3:
          echo "It is Wednesday!";
          break;
        case 4:
          echo "It is Thursday!";
          break;
        case 5:
          echo "It is Friday!";
          break;
        case 6:
          echo "It is Saturday!";
          break;
        case 0:
          echo "It is Sunday!";
          break;
        default:
          echo "Error!";
          break;
      }
    ?>
  </body>
</html>
