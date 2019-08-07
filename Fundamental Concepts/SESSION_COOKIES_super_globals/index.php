<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      //OKAY! So here is a long but great explanation!

      //The COOKIE and SESSION SUPERGLOBALS are used to temporarily store data in the browser and the server.

      //COOKIES

      //This is a cookie!
      setcookie();

      //Cookies saves data in the users browser (user side), and should NOT contain sensitive data! Cookies can be easily hacked.

      //When we create a cookie we decide how long it should exist, and they still exist after the user closes the browser.

      //The cookie function has one required parameter which is the cookie name. We set this one as a string.
      setcookie("cookieName");

      //There are other parameters which we CAN use. Here is a list of all of them:
      setcookie(name, value, expire, path, domain, secure, httponly);

      //Here is an example where we create a cookie that saves a users username for 30 days (86400 seconds * 30).
      //The "path" parameter we set to "/", which means the cookie should be available on all website pages. If we wanted the cookie only on the front page we would set it to "index.php".
      setcookie("username", "JohnTheDestroyer6000", time() + (86400 * 30), "/");

      //Once the timer reaches 0 seconds, the cookie will delete itself again.

      //To change a cookie, simply set the cookie with the same name again.
      setcookie("username", "Jane24a", time() + (86400 * 30), "/");

      //Delete existing cookies by giving them a negative time
      setcookie("username", "", time() - 3600);

      //An example of using cookies is when we want to custimize the products a user sees when entering an e-shop. Using cookies we can save data on which products the user saw last time, and then show similar products next time they visit.

      //SESSIONS

      //Sessions saves data on the server (server side), and can contain sensitive data!
      //Sessions are destroyed after we close the browser.

      //We need to start a session on our website before we can create or access sessions.

      //Here we start a session! It HAS to be at the top of our page if we want to create or access a session further down the page.
      session_start();

      //Here we create a session!
      //First we have a SESSION variable with the name "username", and then we assign it the value.
      $_SESSION['username'] = "JohnTheDestroyer6000";

      //An example of using sessions is when we want to have a person logged into our website. To do this the server needs to remember who the person is.

      //Here we delete all session variables
      session_unset();

      //Here we delete a specific session variables
      session_unset($_SESSION['username']);

      //Destroy the session we started
      session_destroy();
    ?>
  </body>
</html>
