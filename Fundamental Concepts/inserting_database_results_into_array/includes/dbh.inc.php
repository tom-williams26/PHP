<?php


  //Since we are using XAMPP in this tutorial, which is a local server, the servername will be "localhost".
  $dbServername = "localhost";
  //XAMPPs default username is "root".
  $dbUsername = "root";
  //XAMPPs default password is "", which means we don't have one.
  $dbPassword = "";
  //Here we insert the name of the database we created in phpMyAdmin. In my example I have a database named "phplessons".
  $dbName = "phplessons";

  //Here we create the connection and set it equal to a variable so we can refer to it later when we need to connect.
  $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
