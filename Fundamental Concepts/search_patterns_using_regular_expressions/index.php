<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Search Patterns Using Regular Expressions</title>
  </head>
  <body>
    <?php
      //Here is a string
      $string = "My name is Daniel, Daniel is my name";

      //I would like to check if the string contains certain characters
      //To do this we use Regular Expressions!

      //We use RegExp for checking if a user typed something correctly into an input in a form, figuring out which data among a handfull of data is usable, etc...

      //Regular expressions can look very simple or very complicated depending on what you want to search for. Bellow I will explain different ways we can create these expressions!

      //Here I will use preg_match() to check if the above string contains specific characters
      preg_match("/Daniel/", $string);

      //GROUPS AND RANGES

      //Regular expressions are made up of different characters which has different meaning to our search terms. For example if I want to find ANY character in a string like the $string above, I can simply use the range named "." which means "any character".
      preg_match_all("/./", $string, $array);
      print_r($array);
      //This function will return the characters in the string, one by one, and insert them into an array with each character having a different index. Go ahead and run the print_r to see for yourself!

      //Other ranges we can use include the following:
      /*
      .       = Any character
      (a|b)   = a or b
      [abc]   = Match single character (a, b, or c)
      [^abc]  = Negative range (not a, b, or c)
      [a-z]   = a through z
      [A-Z]   = A through Z
      [0-9]   = 0 through 9
      */

      //QUANTIFIERS

      //We also have quantifiers in regular expressions, which is a way to check how many matches we allow.
      //Bellow are examples of these used together with the preg_match() function, so you can see what they do and how they are used. Each example will give a TRUE or FALSE result.

      //  *       = 0 or more matches of a character in a string (in this case a)
      echo preg_match("/D*/", $string);
      //This returns TRUE
      //"*" is also called a greedy quantifier, since it will take the rest of the string, after the D character, and make it part of the match. In the following example I will use the preg_match_all() function to grab the characters that comes after the first D character in the string.
      preg_match_all("/D.*/", $string, $array);
      print_r($array);
      //And here we grab all characters between the first D and the next s character.
      preg_match_all("/D.*s/", $string, $array);
      print_r($array);

      //  +       = 1 or more matches of a character in a string (in this case F)
      echo preg_match("/F+/", $string);
      //This returns FALSE

      //  ?       = 0 or 1 matches of a character in a string (in this case a)
      echo preg_match("/a?/", $string);
      //This returns FALSE
      //"?" is also called a lazy quantifier, since it will take the rest of the string until it hits another specified character, and it will continue to do this throughout the string. In the bellow example it will start and stop each time it hits a "space" in the string.
      preg_match_all("/ .*? /", $string, $array);
      print_r($array);

      //  {X}     = Exactly X matches in a row (in this example 2 matches of the character D)
      echo preg_match("/D{2}/", $string);
      //This returns FALSE

      //  {X,}     = Exactly X or more matches in a row (in this example 1 matches or more of the character e)
      echo preg_match("/e{1,}/", $string);
      //This returns TRUE

      //  {X,Y}     = Exactly X or Y matches in a row (in this example 2 or 4 matches of the character D)
      echo preg_match("/D{2,4}/", $string);
      //This returns TRUE

      //CHARACTER CLASSES

      //We can also use character classes to search for certain types of characters.
      //Here are some examples of character classes:
      /*
      \s      = White space character
      \S      = Non-white space character
      \d      = Digit character (For example a number like 4)
      \D      = Non-digit character (For example a letter like a)
      \w      = A word (For example the word "Daniel")
      \W      = A non-word (For example punctuation or spaces)
      */

      //Here is an example using a character class and the {X} quantifier, where I will check a string to see if it has 4 non-whitespace characters in it in a row.
      echo preg_match("/\S{4}/", $string);
      //This returns TRUE
      //Let's see it in action!
      preg_match_all("/\S{4}/", $string, $array);
      print_r($array);

      //ANCHORS

      //Anchors are used to specify a string that starts or ends with a specific character.
      //Here are some examples of anchors:
      /*
      ^       = First character of a string
      $       = Last character of a string
      */

      //Here are some examples:

      echo preg_match("/^M/", $string);
      //This returns TRUE
      echo preg_match("/^e/", $string);
      //This returns FALSE

      echo preg_match("/M$/", $string);
      //This returns FALSE
      echo preg_match("/e$/", $string);
      //This returns TRUE

      echo preg_match("/^M.*e$/", $string);
      //This returns TRUE

      //ESCAPE META CHARACTERS!

      //Characters used to specify a search term, must be escaped if used as a character you want to search for!
      //So let's say I want to search for any "$" in a string, then I need to escape it, otherwise it will be seen as an "anchor"! Let me show you:
      echo preg_match("/\^*/", $string);
    ?>
  </body>
</html>
