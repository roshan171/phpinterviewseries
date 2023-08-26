<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>
<body>
    
    <?php

/* strpos, strchar,strreplace, strrev, Chr(), strlen(), strpos(), strcmp(), strreapt()
*/

//strpos-:Find the position of the first occurrence of "php" inside the string:

echo strpos("hie i am php developer","php")."<br>";

//strchar-:Search a string for "world", and return all characters from this position to the end of the string:

echo strchr("hello world!","world")."<br>";

//strreplace-:replace the string value where roshan.

echo str_replace("roshan","vishal","hello roshan")."<br>";

//strrev-:reverse the string.

echo strrev("hello world")."<br>";

//strlen-:count the string lengh.

echo strlen("hello roshan!")."<br>";

//chr()-:Return characters from different ASCII values:

    echo chr(52) . "<br>"; 
echo chr(052) . "<br>"; 
echo chr(0x52) . "<br>";

// strcmp-:Compare two strings (case-sensitive):

    echo strcmp ("hello world","hello World")."<br>"; //false


//str_repeat-:Repeat the string "Wow" 13 times:
  
  echo str_repeat("Wow",13)."<br>";

  //str_word_count-:count the string word.

 echo  str_word_count("hello world");

 echo "<br>";


?>
</body>
</html>