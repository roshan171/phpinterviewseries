<?php

define('a',5);
for($i=1;$i<11;$i++){
	echo a*$i;
	echo "<br>";
}

echo "<br>";


$num=4;
$fact=1;

for($i=1;$i<=$num;$i++){
	$fact=$fact*$i;
}
echo "fact is".$fact;
echo "<br> <br>";




$numbers = [12, 45, 7, 23, 56, 78];
rsort($numbers);

echo "Second largest element: " . $numbers[1];

//  define("MINSIZE", 50);
// //  echo MINSIZE; 
//  echo constant("MINSIZE");

// $message= "var";
// echo $$message ;

// $password = crypt('Roshan');
//  print $password. "is the encrypted version of edureka"; 

echo "<br>";



// string fuction

echo strlen("hello wrold");
echo"<br>";

echo  str_word_count("hello");
echo"<br>";

echo strpos("hello wrold","w");
echo "<br>";

echo str_replace("hello wrold","el","ol");
echo "<br>";

echo strrev("hello wrold");
echo "<br>";

echo str_repeat("hello",5);
echo "<br>";  




?>