<?php

  //Here is a VERY basic signup script, with no security! I am just gonna make it simple so we can quickly sign up our users and move on to the profile image upload part

  include_once 'dbh.inc.php';

  $first = $_POST['first'];
  $last = $_POST['last'];
  $uid = $_POST['uid'];
  $pwd = $_POST['pwd'];

  //First we sign up the user
  $sql = "INSERT INTO user (first, last, username, password)
    VALUES ('$first', '$last', '$uid', '$pwd')";
  $result = mysqli_query($conn, $sql);

  //Then we check if we could find the user in the database, if not we let them know that there is an error
  $sql = "SELECT * FROM user WHERE username='$uid' AND first='$first'";
  $result = mysqli_query($conn, $sql);
  //Here we check if the user exists in the database
  if (mysqli_num_rows($result) > 0) {
    //If they do, then we create them a default profile image
    if ($row = mysqli_fetch_assoc($result)) {
      $userId = $row['id'];
      //Here we create a default image for the user since they haven't uploaded one yet themselves
      //Setting the status to "1" means that the user has not uploaded their own profile image
      $sql = "INSERT INTO profileimg (userid, status)
        VALUES ('$userId', 1)";
      mysqli_query($conn, $sql);
      header("Location: ../index.php");
    }
  }
  else {
    echo "You have an error!";
  }
