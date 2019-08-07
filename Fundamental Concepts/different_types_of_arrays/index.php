<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Different types of array in PHP</title>
  </head>
  <body>
    <?php
      //Indexed array
      //An "indexed array" simply means that the data needs to be accessed using numbers
      //Here is an example
      $person = array("Tom", "Williams", 26);
      echo $person[0];

      //Associative array
      //An "associative array" means that we can assign a name to the data in the array
      //Here is an example
      $person = array("firstname" => "Tom", "lastname" => "Williams", "age" => 26);
      echo $person["firstname"];

      //Multidimensional array
      //An "multidimensional array" is an array that has other arrays inside of it
      //Here is an example
      $people = array(array("firstname" => "Tom", "lastname" => "Williams", "age" => 26), array("firstname" => "Jane", "lastname" => "Doe", "age" => 45));
      //Here is an example of how we can output the data
      echo $people[0]["firstname"]
      //This will output "Daniel"
      echo $people[1]["firstname"]
      //This will output "Jane"
    ?>
  </body>
</html>
