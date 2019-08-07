<?php
//BEFORE READING ALL MY COMMENTS!
//You should know that I made a couple of changes that improves and decreases the amount of code we used in the video. Please take your time and read all the notes.

//First we check if the user submitted the form
if (isset($_POST['submit'])) {
  //Here we start our session and database connection
  session_start();
  include_once 'dbh.inc.php';
  //Here we get the users ID from the session
  $sessionId = $_SESSION['id'];

  //Here we set the path and the image we want to delete
  //The path we set HAS to match PERFECTLY with the path and file name, otherwise it wont work!
  //Since we don't know the file extension of the image, we use a "*" which means that ANY text after the ID is accepted

  //IMPORTANT
  //In the video I wrote the following line of code in order to get the file
  //$fileName = "uploads/profile".$sessionId."*";
  //HOWEVER
  //If we have two images named "profile1.jpg" and "profile11.jpg", then we are going to get 2 results, which we don't want!

  //Therefore, another way we can do it is to add a "." after the ID in the file name. This prevents us from getting more than one result.

  $fileName = "uploads/profile".$sessionId.".*";

  //And then afterwards we use glob(), to find all files that match the above variable with the file and path name, and insert the results into a usable array
  $fileInfo = glob($fileName);
  //Then we want to get the file extension so we know the entire file name. We do this by splitting the result by the punctuation.
  $getFileExt = explode(".", $fileInfo[0]);
  $fileExt = $getFileExt[1];
  //Then we create a new path to the file, now that we know the entire file name
  $file = "uploads/profile".$sessionId.".".$fileExt;

  //Then we delete the file using the unlink() function!
  if (!unlink($file)) {
    echo "The file was NOT deleted!";
  }
  else {
    echo "The file was deleted!";
  }

  //ANOTHER SHORTCUT WE COULD HAVE DONE!
  //In the above code I changed the first file path by adding a "." to the file name. We could essentially have used that path inside the unlink() and it would still have worked.

  //Now we need to change the profile image status in the database
  $sql = "UPDATE profileimg SET status=1 WHERE userid='$sessionId';";
  mysqli_query($conn, $sql);

  header("Location: ../index.php?deletecomplete");
}
