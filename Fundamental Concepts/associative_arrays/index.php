<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>associative arrays in PHP</title>
  </head>
  <body>
    <?php
      //Associative array
      //An "associative array" means that we can assign a name to the data in the array
      //Here is an example
      $person = array("firstname" => "Tom", "lastname" => "Williams", "age" => 26);
      echo $person["firstname"];

      //This is a better way to display arrays visually in our code
      $person = array(
        "firstname" => "Tom",
        "lastname" => "Williams",
        "age" => 26
      );
    ?>
  </body>
</html>
