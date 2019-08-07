<?php
	//Here we include our database connection
	include_once 'dbh.inc.php';

	//Here we fetch the data from the URL that was passed from our HTML form
	$first = $_POST['first'];
	$last = $_POST['last'];
	$email = $_POST['email'];
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];

	//Here we create a SQL statement that insert data into our database
	$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$pwd');";
	//Here we "query" the data in the database
	mysqli_query($conn, $sql);

	//We don't need to do anything else in order to insert data
	//HOWEVER!!!
	//We have not added ANY security to our code by filtering the data the user typed into the HTML form. We will learn about security later using prepared statements!

	//Here we go back to the front page
	header("Location: ../index.php?signup=success");
