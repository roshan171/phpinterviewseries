<?php  
function palindrome($n){  
$number = $n;  
$sum = 0;  
while(floor($number)) {  
$rem = $number % 10;  
$sum = $sum * 10 + $rem;  
$number = $number/10;  
}  
return $sum;  
}  
$input = 1235321;  
$num = palindrome($input);  
if($input==$num){  
echo "$input is a Palindrome number";  
} else {  
echo "$input is not a Palindrome";  
}  



// Program to check if a string is a palindrome:

    $str = "madam";
    $reverse = strrev($str);
    
    if ($str == $reverse) {
        echo "Palindrome";
    } else {
        echo "Not a palindrome";
    }
    
?>