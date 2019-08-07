<?php
  //In this example, we want to delete an image named "cat". However the problem is that we need to
  //know the full name of the file to delete it, and here we don't know the extension of the image.

  //Here we use the "*" as a wildcard, meaning that the path we set will link to any file extension as long as its name is "cat".
  $path = "uploads/cat.*";

  //We can place the "*" anywhere in our string if we don't know part of its name! For example if I
  //have a file named "blueeyedcat.jpg", but I only remember it has "cat" in its name. Then I can use the following search.
  $path = "uploads/*cat*";

  //We can then use the glob() function to find any files from the path we set, and insert them into an array! Which is awesome!
  $fileInfo = glob($path);

  //Just remember that if we have more than one file with "cat" in its name, then we will have multiple files in the array.

  //On our website we can then do all sorts of things with the information we have in the array. Such as echo the array
  //so we can see the files, or delete the file like I have shown bellow.

  if (!unlink($fileInfo[0])) {
    echo "You have an error!";
  }
  else {
    header("Location: ../index.php?delete=complete");
  }
