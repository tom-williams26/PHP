<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Delete more than one file or image</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <form action="includes/delete.inc.php" method="post">
      <!--Here we include an input where the user can delete multiple files-->
      <input type="text" name="filenames" placeholder="Separate each file name with a coma (,)" style="width: 300px;">
      <button type="submit" name="submit">Delete file</button>
    </form>

  </body>
</html>
