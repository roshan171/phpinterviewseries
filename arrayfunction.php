<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Function</title>
</head>
<body>
    <?php
/*
Array Function-: pre-define function. 
The array functions allow you to access and manipulate arrays.
Simple and multi-dimensional arrays are supported.


*/

// array()-:Create an indexed array named $cars, assign three elements to it, and then print a text containing the array values:

$cars=array("Volvo","BMW","Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "."."<br>";

//array_combine()-:Create an array by using the elements from one "keys" array and one "values" array:

$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");

$c=array_combine($fname,$age);
print_r($c);
echo "<br>";

//array_replace()-:Replace the values of the first array ($a1) with the values from the second array ($a2):

$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_replace($a1,$a2));
echo "<br>";

//array_search()-:Search an array for the value "red" and return its key:

$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_search("red",$a);
echo "<br>";

//array_slice()-:Start the slice from the third array element, and return the rest of the elements in the array:

$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,1));
echo "<br>";

//array_splice()-:remove elements from an array and replace it with new elements:

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"purple","b"=>"orange");
array_splice($a1,0,2,$a2);
print_r($a1);
echo "<br>";

// array_pop-:Delete the last element of an array:

$m=array("red","green","blue","pink");
array_pop($m);
print_r($m);
echo "<br>";

// array_push()-:Insert "blue" and "yellow" to the end of an array:

$a=array("red","green");
array_push($a,"blue","yellow");
print_r($a);
echo "<br>";


//array_intersect()-:Compare the values of two arrays, and return the matches:

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_intersect($a1,$a2);
print_r($result);
echo "<br>";

//array_keys-:Return an array containing the keys:

$a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
print_r(array_keys($a));
echo "<br>";

//array_merge-:Merge two arrays into one array:

$a = array("red","yellow","blue");
$a2= array("gray","purple");

$res = array_merge($a,$a2);
print_r ($res);
echo "<br>";

//array_map()-:Send each value of an array to a function, multiply each value by itself, and return an array with the new values:

function myfunction($num)
{
  return($num*$num);
}

$a=array(1,2,3,4,5);
print_r(array_map("myfunction",$a));
echo "<br>";

//array_unshift ()-:Insert the element "blue" to an array:

$a=array("a"=>"red","b"=>"green");
array_unshift($a,"blue");
print_r($a);
echo "<br>";

//array_shift()-:Remove the first element (red) from an array, and return the value of the removed element:
 $a=array("a"=>"red","b"=>"green","c"=>"gray");
 array_shift($a);
print_r($a);
 echo "<br>";

 //array_replace_recursive()-:Replace the values of the first array with the values from the second array recursively:

 $a1=array("a"=>array("red"),"b"=>array("green","blue"),);
$a2=array("a"=>array("yellow"),"b"=>array("black"));
print_r(array_replace_recursive($a1,$a2));

?>
</body>
</html>