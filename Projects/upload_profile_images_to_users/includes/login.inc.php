<?php

session_start();

//Here we just log in the first user in the database, just so we can focus on creating a profile image.
//This is by no means a "real" login script, and we only do it this way for testing purposes!
if (isset($_POST['submit'])) {
  $_SESSION['id'] = 1;
  header("Location: ../index.php");
}
