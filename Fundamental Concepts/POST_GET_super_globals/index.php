<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>POST and GET SUPERGLOBALs</title>
  </head>
  <body>
    <!--The POST and GET SUPERGLOBALs are used to transfer data in the URL using HTML forms.-->

    <!--
    This is the main difference between them:

    A POST method transfer the data using the URL, but we can't see the data. POST is used to send sensitive data.

    A GET method transfer the data using the URL, and we can see the data. GET is used to send non-sensitive data.
    -->

    <!--Here is an example using a regular HTML form and a GET method. Notice that we send the input data to otherpage.php using the "action" attribute.-->
    <form action="otherpage.php" method="get">
      <!--The "name" attribute in the form input, is the name we use in the GET SUPERGLOBAL to refer to that specific inputs data-->
      <input type="text" name="fullname">
      <button type="submit">Send the data to otherpage.php</button>
    </form>

    <?php
      //In otherpage.php, we then get the data again from the URL using the GET SUPERGLOBAL.
      $fullName = $_GET['fullname'];
    ?>
  </body>
</html>
