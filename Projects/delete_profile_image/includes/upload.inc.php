<?php
  //First we check who the current user is
  session_start();
  include_once 'dbh.inc.php';
  $id = $_SESSION['id'];

  //Then we check if the form has been submitted
  if (isset($_POST['submit'])) {
    //Then we grab the file using the FILES superglobal
    //When we send a file using FILES, we also send all sorts of information regarding the file
    $file = $_FILES['file'];
    //Here we get the different information from the file, and assign it to a variable, just so we have it for later
    //If you use "print_r($file)" you can see the file info in the browser
    $fileName = $file['name'];
    $fileType = $file['type'];
    //The "tmp_name" is the temporary location the file is stored in the browser, while it waits to get uploaded
    $fileTempName = $file['tmp_name'];
    $fileError = $file['error'];
    $fileSize = $file['size'];

    //Later we are going to decide the file extensions that we allow to be uploaded
    //Here we are getting the extension of the uploaded file
    //First we split the file name into name and extension
    $fileExt = explode('.', $fileName);
    //Then we get the extention
    $fileActualExt = strtolower(end($fileExt));

    //Here we declare which extentions we want to allow to be uploaded (You can change these to any extention YOU want)
    $allowed = array("jpg", "jpeg", "png", "pdf");

    //First we check if the extention is allowed on the uploaded file
    if (in_array($fileActualExt, $allowed)) {
      //Then we check if there was an upload error
      if ($fileError === 0) {
        //Here we set a limit on the allowed file size (in this case 500mb)
        if ($fileSize < 500000) {
          //We now need to create a unique ID which we use to replace the name of the uploaded file, before inserting it into our rootfolder
          //If we don't do this, we might end up overwriting the file if we upload a file later with the same name
          //Here we use the user ID of the user to create the first part of the image name
          $fileNameNew = "profile".$id.".".$fileActualExt;
          //Here we define where we want the new file uploaded to
          $fileDestination = 'uploads/'.$fileNameNew;
          //And finally we upload the file using the following function, to send it from its temporary location to the uploads folder
          move_uploaded_file($fileTmpName, $fileDestination);
          //Here we update the status of the "profileimg" table
          //We do this to change the profile image from the default one to the new one
          $sql = "UPDATE profileimg SET status=0 WHERE userid='$id';";
          $result = mysqli_query($conn, $sql);
          //Going back to the previous page
          header("Location: ../index.php?uploadsuccess");
        }
        else {
          echo "Your file is too big!";
        }
      }
      else {
        echo "There was an error uploading your file, try again!";
      }
    }
    else {
      echo "You cannot upload files of this type!";
    }
  }
