<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Functions</title>
  </head>
  <body>
    <?php
      //User made functions are functions we build ourselves!
      //We use functions often in PHP

      //A function is created using the keyword "function" followed by the functions name. WE DECIDE the name of the function just like with variables!

      function newCalc() {
        echo "This is a function!";
      }
      //We can easily output functions in the browser like this
      newCalc();

      //The () after the function name is used to import variables into the function. Variables WILL NOT WORK without importing them.
      //When calling the function later, we also need to include the variable.
      $x = "I need to be imported!";

      function newCalc($x) {
        echo $x . "And now I can be used!";
      }

      newCalc($x);

      //The function can be created at any time, before or after the variable! Like in this example.
      //And we can use the same function multiple times after we have created it. Which is awesome!
      function newCalc($x) {
        echo $x . "And now I can be used!";
      }

      $x = "I need to be imported!";
      newCalc($x);

      $y = "I also need to be imported!";
      newCalc($y);

      //As you may have noticed, we don't have to name the outside variable the same as the variable in the function. The one in the function is only a PLACEHOLDER! This is why we could use the variable $y also!
    ?>
  </body>
</html>
