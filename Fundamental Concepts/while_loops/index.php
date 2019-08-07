<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>While loops</title>
  </head>
  <body>
    <?php
      //We use loops to output data multiple times
      //A while loop keeps repeating a chunk of code, while a statement is true

      //This is a while loop example
      $x = 1;
      /*As long as $x is less than 5, "Hi there" will get written in the browser*/
      while ($x < 5) {
        echo "Hi there";
        /*After "Hi there" has been printed, 1 will be added to $x*/
        $x++;
      }
    ?>
  </body>
</html>
