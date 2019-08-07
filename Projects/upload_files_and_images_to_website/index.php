<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Upload Files and Images to Website in PHP</title>
  </head>
  <body>
    <!--We use HTML forms when we want to upload images or files-->
    <!--The form HAS to be set as a POST method, and it needs the "enctype" attribute, which specifies that the content we are submitting using the form is a file-->
    <form action="upload.php" method="post" enctype="multipart/form-data">
      <!--The following input is used to select the file to upload-->
      <input type="file" name="file">
      <button type="submit" name="submit">UPLOAD FILE</button>
    </form>
  </body>
</html>
