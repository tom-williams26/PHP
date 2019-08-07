<?php
  //First we set the path and file name, of the file we want to delete
  $fileName = "uploads/profile".$sessionId.".*";
  //Then we delete the file using the unlink() function!
  if (!unlink($file)) {
    header("Location: ../index.php?deleteerror");
  }
  else {
    header("Location: ../index.php?deletecomplete");
  }
