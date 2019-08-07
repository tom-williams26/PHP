<?php
  //Here we include another document on top of this document
  //In this way we can link to our website header in a seperate file, which means if we want to change it on all pages, we only need to do it in that file.
  include 'header.php';

  //We can also use the below code, if we want to make sure that we cannot add a specific file more than once. This helps avoid that we accidentically include the same code multiple times
  //include_once 'header.php';
?>
    <h1>Front page title</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  </body>
</html>
