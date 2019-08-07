<?php
  include 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inserting database results into array in PHP</title>
  </head>
  <body>
    <?php
      //Here we create the empty array that we will insert the database data into
      $dbData = array();

      $sql = "SELECT * FROM users;";
    	$result = mysqli_query($conn, $sql);
    	$resultCheck = mysqli_num_rows($result);

    	if ($resultCheck > 0) {
    		while ($row = mysqli_fetch_assoc($result)) {
    			//This is where we can output data from the database
          //Here we simply set our existing array equal to $row, which has all our row data
          //Each time the while loop runs, the new row from the database will get inserted into the array
          $dbData[] = $row;
    		}
    	}

      //Here we can test our array
      print_r($dbData);
    ?>
  </body>
</html>
