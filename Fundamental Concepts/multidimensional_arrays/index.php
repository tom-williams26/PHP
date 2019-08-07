<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>multidimensional arrays in PHP</title>
  </head>
  <body>
    <?php
      //Multidimensional array
      //An "multidimensional array" is an array that has other arrays inside of it
      //Here is an example
      $people = array(array("firstname" => "Tom", "lastname" => "Williams", "age" => 26), array("firstname" => "Jane", "lastname" => "Doe", "age" => 45));
      //Here is an example of how we can output the data
      echo $people[0]["firstname"]
      //This will output "Tom"
      echo $people[1]["firstname"]
      //This will output "Jane"

      //This is a better way to display arrays visually in our code
      $people = array(
        array(
          "firstname" => "Tom",
          "lastname" => "Williams",
          "age" => 26
        ),
        array(
          "firstname" => "Jane",
          "lastname" => "Doe",
          "age" => 45
        )
      );
    ?>
  </body>
</html>
