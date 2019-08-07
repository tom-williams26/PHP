<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="This is an example of a meta description. This will often show up in search results.">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>Create a Unique String</title>
  </head>
  <body>
    <?php
      //You can use this function to see how long the script takes to run. Try with the different examples and see the difference :)
      //echo memory_get_usage() . "<br>";

      //Example 1: Generate random set of characters
      function generateKey() {
        $keyLength = 8;
        $str = 'abcdefghijklmnopqrstuvwxyz1234567890()!/$@';
        $randStr = substr(str_shuffle($str), 0, $keyLength);
        echo $randStr;
      }

      //Example 2: Generate unique characters based on time (microseconds)
      //Better for saving resources and load time
      $randStr = uniqid('prefix', false);
      echo $randStr;

      //Example 3: Generate unique numbers using uniqid()
      $randStr = uniqid('', true);
      $explodeStr = explode('.', $randStr);
      $getStrEnd = $explodeStr[1];
      echo $getStrEnd;

      //Example 4: Generate random set of characters not existing yet!
      //Worse for saving resources and load time, but you can decide character length
      $conn = mysqli_connect('localhost', 'root', '', 'php62');

      function checkKeys($conn, $randStr) {
        $sql = "SELECT keystringKey FROM keystring";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
          if ($row['keystringKey'] == $randStr) {
            $keyExists = true;
            break;
          } else {
            $keyExists = false;
          }
        }

        return $keyExists;
      }

      function generateKey($conn) {
        $str = 'abcdefg';
        $keyLength = 1;
        $randStr = substr(str_shuffle($str), 0, $keyLength);
        $checkKey = checkKeys($conn, $randStr);

        while ($checkKey == true) {
          $randStr = substr(str_shuffle($str), 0, $keyLength);
          $checkKey = checkKeys($conn, $randStr);
        }

        return $randStr;
      }

      echo generateKey($conn);

    ?>
  </body>
</html>
