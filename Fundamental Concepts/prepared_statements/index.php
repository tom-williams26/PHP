<?php
	include_once 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title> Prepared Statements</title>
</head>
<body>

<form action="includes/signup.inc.php" method="POST">
	<input type="text" name="first" placeholder="Firstname">
	<br>
	<input type="text" name="last" placeholder="Lastname">
	<br>
	<input type="text" name="email" placeholder="E-mail">
	<br>
	<input type="text" name="uid" placeholder="Username">
	<br>
	<input type="password" name="pwd" placeholder="Password">
	<br>
	<button type="submit" name="submit">Sign up</button>
</form>

<?php
	//Here is an SELECT example using prepared statements

	$data = "Admin";
	//Created a template
	$sql = "SELECT * FROM users WHERE user_uid=?;";
	//Create a prepared statement
	$stmt = mysqli_stmt_init($conn);
	//Prepare the prepared statement
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "SQL statement failed";
	} else {
		//Bind parameters to the placeholder
		mysqli_stmt_bind_param($stmt, "s", $data);
		//Run parameters inside database
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);

		while ($row = mysqli_fetch_assoc($result)) {
			echo $row['user_uid'] . "<br>";
		}
	}
?>

</body>
</html>
