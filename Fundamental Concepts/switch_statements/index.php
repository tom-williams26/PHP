<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      //Switch statements are used to run a chunk of code if a statement is true
      $number = "Tom";

      switch ($number) {
        case "Tom":
          echo "Variable is Tom";
          break;
        case 10:
          echo "Variable is number 10";
          break;
        default:
          echo "Variable was none of the above";
          break;
      }
    ?>
  </body>
</html>
