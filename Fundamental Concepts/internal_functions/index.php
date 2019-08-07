<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      //The term "string" is used in PHP when we talk about text
      //Bellow are examples of string functions

      //Here we get the string lenght/number of characters
      echo strlen("Hi Tom");

      //Here we get the word count of the string
      echo str_word_count("Hi Tom");

      //Here we reverse the letters in the string
      echo strrev("Hi Tom");

      //Here we get the position of a letter in the string
      //Notice that there are two parameters in this function
      //Also, in PHP we ALWAYS start counting at 0. Meaning that the position of "H" will be 0, and "T" will be 3.
      echo strpos("Hi Tom", "T");
      //We can also search for words!
      echo strpos("Hi Tom", "Tom");

      //Here we replace "Tom" with the word "John" in a string
      echo str_replace("Tom", "John", "Hi Tom");
    ?>
  </body>
</html>
