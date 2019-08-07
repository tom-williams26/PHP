<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Logical operators</title>
  </head>
  <body>
    <?php
      //Logical operators are used to perform logic

      //And
      //If both statements are true, then return true
      if (10 == 10 and 2 == 2) {
        echo "This statement is true";
      }
      //Or like this
      if (10 == 10 && 2 == 2) {
        echo "This statement is true";
      }

      //Or
      //If one of the statements are true, then return true
      if (10 == 10 or 1 == 2) {
        echo "This statement is true";
      }
      //Or like this
      if (10 == 10 || 2 == 2) {
        echo "This statement is true";
      }

      //Xor
      //If one of the statements are true BUT not both, then return true
      if (10 == 10 or 1 == 2) {
        echo "This statement is true";
      }
      if (1 == 10 or 1 == 2) {
        echo "This statement is false";
      }

      //Not
      //If the statement is not true
      if (!10 == 2) {
        echo "This statement is true";
      }
      if (!10 == 10) {
        echo "This statement is false";
      }
    ?>
  </body>
</html>
