<?php
  //Here we can include our database connection in order to access it further down the page
  include 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Display database data on a website using MySQLi</title>
  </head>
  <body>
    <?php
      //Here is an example where we use the connection to take data from our database, and show it in the browser

      //Here we mix PHP and SQL in order to have a statement ready that we can refer to later on
      $sql = "SELECT * FROM users;";
      //Here we "query" the SQL statement in the database using our connection variable
    	$result = mysqli_query($conn, $sql);
      //Here we get the number of results the query returned from the database
    	$resultCheck = mysqli_num_rows($result);

      //We then check if we had atleast 1 result from the database
    	if ($resultCheck > 0) {
        //If we had a result, then we use a while loop to spit out our rows of data, one by one
        //At the same time we also assign the database data to a variable named $row
    		while ($row = mysqli_fetch_assoc($result)) {
          //We can spit out the data by refering to our database column names
    			echo $row['user_uid'] . "<br>";
    		}
    	}
    ?>
  </body>
</html>
