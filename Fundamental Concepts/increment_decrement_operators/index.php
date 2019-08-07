<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Increment/decrement operators</title>
  </head>
  <body>
    <?php
      //Increment/decrement operators are used to increase or decrease data

      //Pre-increment
      //Increments/adds by 1, and then returns the data
      //1 is added before returning the value when using it in a "loop".
      $data = 5;
      ++$data;
      //$data is now 6

      //Post-increment
      //Returns the data, and then increments/adds by 1
      //1 is added after returning the value when using it in a "loop".
      $data = 5;
      $data++;
      //$data is now 6

      //Pre-decrement
      //Decrements/subtracts by 1, and then returns the data
      //1 is subtracted before returning the value when using it in a "loop".
      $data = 5;
      --$data;
      //$data is now 4

      //Post-decrement
      //Returns the data, and then decrement/subtracts by 1
      //1 is subtracted after returning the value when using it in a "loop".
      $data = 5;
      $data--;
      //$data is now 4
    ?>
  </body>
</html>
