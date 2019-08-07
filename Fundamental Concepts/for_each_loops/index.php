<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>For Each Loops</title>
  </head>
  <body>
    <?php
      //We use loops to output data multiple times
      //A foreach loop keeps repeating a chunk of code, while we have data in an array (we will get more into arrays later)

      //Here is an array with names
      $names = array("Tom", "John", "Jane");

      //This is a foreach loop example
      //First parameter is the array, the second is a variable we create that refers to the data in the array as it loops through them
      foreach ($names as $name) {
        echo "<br>Below is an array data<br>";
        echo $name;
      }
    ?>
  </body>
</html>
