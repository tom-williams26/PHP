<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Functions Using Regular Expressions</title>
  </head>
  <body>
    <?php
    //Here is a string
    $string = "My name is Tom, Tom is my name";

    //I would like to check if the string contains certain characters
    //To do this we use Regular Expressions!

    //We use RegExp for checking if a user typed something correctly into an input in a form, figuring out which data among a handfull of data is usable, etc...

    //We have three main functions we use with RegExp called preg_match(), preg_match_all(), and preg_replace()

    //Here I will use preg_match() to check the above string contains specific characters
    preg_match("/Tom/", $string);
    //Can also be written like this!
    preg_match("/(Tom)/", $string);

    //This will return true (1) or false (0)
    //Let's use it in an IF statement instead!
    if (preg_match("/Tom/", $string)) {
      echo "We have a match!";
    }
    else {
      echo "We have NO match!";
    }

    //If you would like to echo the match that was found, you can add a third optional parameter in the function, which inserts the result into an array
    if (preg_match("/Tom/", $string, $match)) {
      //We can echo the array data
      echo $match[0];
      //Or print_r to see the entire array
      print_r($match);
    }

    //Now preg_match() only returns one match! If we have more places in the string where our expression could have matched, we won't know using this function.

    //To find ALL matches, we can use preg_match_all()
    if (preg_match_all("/Tom/", $string, $match)) {
      print_r($match);
    }
    //Here you will notice that our print_r has found two results, and put them in an array.

    //Have you noticed that our array with results is inside another array? This is because we can
    //do multiple searches in a single expression. Each search will then appear in a separate array.

    //Here is an example:
    if (preg_match_all("/T(o)m/", $string, $match)) {
      print_r($match);
    }
    //As you may notice, the print_r outputs two arrays because we searched for "Tom" AND "o".

    //If we want to replace characters within a string, we can use preg_replace()!
    $stringNew = preg_replace("/Tom/", "John", $string);
    echo $stringNew;

    //These are all the functions we will discuss in this episode. In the next one we will learn more about regular expressions and how to make more advanced searches using them.
    ?>
  </body>
</html>
