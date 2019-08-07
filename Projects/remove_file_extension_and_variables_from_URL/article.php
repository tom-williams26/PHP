<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="This is an example of a meta description. This will often show up in search results.">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title></title>
  </head>
  <body>

    <?php
      $articleId = $_GET['id'];
      $articleName = $_GET['name'];

      echo "Article ID is: " . $articleId;
      echo "<br>";
      echo "Article name is: " . $articleName;
    ?>

  </body>
</html>
