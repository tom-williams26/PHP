<?php
  session_start();
  include_once 'inludes/dbh.inc.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Delete profile image using PHP</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php
      //Here we display all users who are registered in the database
      //Another way we could have done the following, would be by doing a JOIN to avoid doing a query within a query
      //First we get the users one by one
      $sql = "SELECT * FROM user";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['id'];
          //Then we get their profile image information from the database
          $sqlImg = "SELECT * FROM profileimg WHERE userid='$id'";
          $resultImg = mysqli_query($conn, $sqlImg);
          while ($rowImg = mysqli_fetch_assoc($resultImg)) {
            //We then display the user and their profile image
            echo "<div>";
              //If the user has uploaded a profile image, then we show it here
              if ($rowImg['status'] == 0) {
                //Here I copied some of the code from the delete script to make sure we have the correct file type further down on line 36
                $fileName = "uploads/profile".$id.".*";
                $fileInfo = glob($fileName);
                $getFileExt = explode(".", $fileInfo[0]);
                $fileExt = $getFileExt[1];
                //Here I added a random string behind the image name, to make sure that the image gets a different name each time the
                //browser loads it on the page. This is to help the image change when we delete/upload a new one.
                echo "<img src='uploads/profile".$id.".".$fileExt."?".mt_rand()."'>";
              }
              //If the user has not uploaded a profile image, then we show a default placeholder image
              //The placeholder image we should place in the uploads folder
              else {
                echo "<img src='uploads/profiledefault.jpg'>";
              }
              //We also display their username
              echo "<p>".$row['username']."</p>";
            echo "</div>";
          }
        }
      }
      else {
        echo "There are no users!";
      }

      //Here we check if the user is logged in
      if (isset($_SESSION['id'])) {
        echo "You are logged in!";
        //If the user is logged in, we allow the user to upload a profile image
        echo '<form action="includes/upload.inc.php" method="post" enctype="multipart/form-data">
          <input type="file" name="file">
          <button type="submit" name="submit">UPLOAD FILE</button>
        </form>';
        //Here we delete the profile image we uploaded
        echo '<form action="includes/delete.inc.php" method="post">
          <button type="submit" name="submit">Delete profile image</button>
        </form>';
      }
      else {
        echo "You are not logged in!";

      }
    ?>

    <!--Here we allow users to sign up-->
    <form action="signup.inc.php" method="post">
      <input type="text" name="first" placeholder="First name">
      <input type="text" name="last" placeholder="Last name">
      <input type="text" name="uid" placeholder="Username">
      <input type="password" name="pwd" placeholder="Password">
      <button type="submit" name="submit">Signup</button>
    </form>

    <!--Here we allow users to log in-->
    <p>Login as user!</p>
    <form action="login.inc.php" method="post">
      <button type="submit" name="submit">Login</button>
    </form>

    <!--Here we allow users to log out-->
    <p>Logout as user!</p>
    <form action="logout.inc.php" method="post">
      <button type="submit" name="submit">Logout</button>
    </form>
  </body>
</html>
