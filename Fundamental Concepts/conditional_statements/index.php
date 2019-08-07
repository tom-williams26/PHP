<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Conditional statements</title>
  </head>
  <body>
    <?php
      //Conditional statements are used to run a chunk of code if a statement is true
      $number = 14;

      if ($number < 10) {
        echo "The number is less than 10";
      }
      elseif ($number >= 10 and $number < 20) {
        echo "The number is less greater than 9 and less than 20";
      }
      else {
        echo "The number is greater than 19";
      }
    ?>
  </body>
</html>
