<html>
<head>
	<title>Hashing and de-hashing data</title>
</head>
<body>
<?php
	//Hashing is used to protect data when inserting it into a database!
	//Hashing turns our data into a loooong string of text with random characters, letters, and symbols
	//This means hackers can't use the data if they were to get access to our database!

	//Here is a password!
	$pwd = "Password123";

	//Here we hash the password and make it unreadable!
	$pwdHashed = password_hash($pwd, PASSWORD_DEFAULT);

	//Notice that I wrote "PASSWORD_DEFAULT", which means that we are using the "bcrypt" algorithm
	//Bcrypt is the LATEST hashing method! And is designed to change over time as stronger algorithms are added to php

	//Algorithms such as "md5" or "sha256" are OUTDATED! DO NOT use these!

	//Hashed data usually contain things such as passwords
	//When we then need to de-hash the hashed data, we need to use another function

	//In the following example we are pretending that we have a login system, and a user wants to log in

	//Here the user can write his password in a form to log into the website. I am going to pretend that his password is $pwd from earlier
	echo '<form action="login.inc.php" method="post">
		<input type="password" name="pwd">
		<button type="submit" name="submit">Log in</button>
	</form>';

	//In "login.inc.php" we then have the following script that de-hashes his password

	//Here we get the password from the form
	$typedPwd = $_POST['pwd'];
	//Here we match the users password with the hashed one in the database. If they match the de-hash returns "1", if they do not match it returns "0".
	$hashCheck = password_verify($typedPwd, $pwdHashed);

	if ($hashCheck == 0) {
		echo "Wrong password!";
	} elseif ($hashCheck == 1) {
		echo "You have been logged in!";
	}
?>
</body>
</html>
