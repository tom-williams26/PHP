<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Local and Global Scopes</title>
  </head>
  <body>
    <?php
      //This is the global scope, outside functions
      //Variables in the global scope can not be used inside functions without importing them first
      $x = "I am in the global scope!";

      function test() {
        //This is the local scope
        //Variables in the local scope of this fuction can only be used in that functions
        $y = "I am in the local scope!";
      }

      //HOWEVER using the "global" keyword we can access global variables inside functions without importing them
      //You should avoid using "global" as much as possible, since it makes your code unstructured and messy
      $x = "I am in the global scope!";

      function test() {
        global $x;
        echo $x;
      }
    ?>
  </body>
</html>
