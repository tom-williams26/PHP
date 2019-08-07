<?php
  include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>create a search field with PHP and MySQLi</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <!--Here we create the search field-->
    <form action="includes/search.inc.php" method="post">
      <input type="text" name="search" placeholder="Search...">
      <button type="submit" name="submit">Search</button>
    </form>

    <!--Here we display all existing articles on the front page-->
    <h1>Front page</h1>
    <h2>All articles:</h2>
    <div class="article-container">
      <?php
        $sql = "SELECT * FROM article";
        $result = mysqli_query($conn, $sql);
        $resultCount = mysqli_num_rows($result);

        if ($resultCount > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='article-box'>";
              echo "<h3>".$row[article_title]."</h3>";
              echo "<p>".$row[article_text]."</p>";
              echo "<p>".$row[article_date]."</p>";
              echo "<p>".$row[article_author]."</p>";
            echo "</div>";
          }
        }
      ?>
    </div>

  </body>
</html>
