<?php
  //First we get the data from the form
  $fileNames = $_POST['filename'];
  //Now we get rid of any spaces the user might have included
  $removeSpaces = str_replace(" ", "", $fileNames);

  //IMPORTANT SECURITY STEP
  //Here I check if there is any "../" in the file name included by the user. This we CANNOT allow
  //in the file name, because the user could hack/delete other important files on our server!!!
  if (strpos($removeSpaces, "../") == true) {
    echo "Stay out of our files you dirty hacker!";
    exit();
  }
  else {
    //Now we need to separate the different file names, and insert them into an array
    $allFileNames = explode(",", $removeSpaces);
    //Now we check if one of the files does not exist, by looping them one at a time
    //To create the loop, we also need to have the count of how many file names there are in the array
    $countNames = count($allFileNames);
    for ($i=0; $i < $countNames; $i++) {
      if (file_exists("../uploads/".$allFileNames[$i]) == false) {
        header("Location: ../index.php?delete=missingfile");
        exit();
      }
    }
    //Now we delete the files one by one
    for ($i=0; $i < $countNames; $i++) {
      //Then we delete the file using the unlink() function!
      $file = "../uploads/".$allFileNames[$i];
      if (!unlink($file)) {
        header("Location: ../index.php?delete=error");
        exit();
      }
    }
    header("Location: ../index.php?delete=complete");
  }
