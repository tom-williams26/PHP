<?php
	include_once 'dbh.inc.php';

	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	//Here is an INSERT example using prepared statements
	//Prepared statements are more efficient and faster!
	//We don't need to run the query EVERY time we want to run the statement, only the parameters/data
	//Prepared statements help protect your database by running the data later using a different protocol!

	//In the SQL statement we replace our data with placeholders (?)
	$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES (?, ?, ?, ?, ?);";
	//Here we initialize the connection we have to the database
	$stmt = mysqli_stmt_init($conn);
	//Then if we have no errors preparing the SQL statement, we run the "else" condition
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "SQL error";
	} else {
		//Here we assign our data to the prepared statement, and replace our placeholders with the data
		mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $uid, $pwd);
		//Then we execute the statement!
		mysqli_stmt_execute($stmt);
	}

	header("Location: ../index.php?signup=success");
