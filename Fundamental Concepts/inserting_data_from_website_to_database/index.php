<!DOCTYPE html>
<html>
<head>
	<title>Insert data from a website into a database using MySQLi</title>
</head>
<body>
<!--Here is a basic example of how to insert data into our database using a simple HTML form-->
<!--Notice that I am using a POST method, and I am sending the data to a script on a separate page-->
<form action="includes/signup.inc.php" method="post">
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

</body>
</html>
