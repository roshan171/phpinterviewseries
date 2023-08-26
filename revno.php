<?php

$n=123456;
$revnum=0;

while($n>1){
    $rem=$n%10;
    $revnum=($revnum*10)+$rem;
    $n=($n/10);
}
echo "Reverse no is:".$revnum;

echo "<br>";



// function reverse($number){
//     $num= (string)$number;

//     $revstr=strrev($num);

//     $rev=(int)$revstr;
//     return $rev;
// }

// echo reverse(12345);
?>