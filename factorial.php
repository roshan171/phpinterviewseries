<?php
// factorial no 

$num = 4;
$factorial = 1;

for ($i = 1; $i <= $num; $i++) {
    $factorial *= $i;
}

echo "Factorial of $num is: " . $factorial;
echo "<br>";

?>