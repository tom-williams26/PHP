<?php
  //Here we start a session on this page!
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Session Start</title>
  </head>
  <body>
    <?php
      //Below is a VERY simple login example

      //Here we create a username session variable
      $_SESSION['username'] = "tomi948a";

      //Here we check if a username session variable exists, and if it does then we write the users username on the page.
      if (isset($_SESSION['username'])) {
        echo "You are logged in as " . $_SESSION['username'];
      }
      else {
        echo "You are not logged in!";
      }
    ?>
  </body>
</html>
