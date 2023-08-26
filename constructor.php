<?php  



// Constructor

class person{
    public $name;
    public $age;

    function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }

    public function get_name(){
        return $this->name;
    }
    public function get_age(){
        return $this->age;
    }


}

$obj= new person("Roshan",21);
echo $obj->get_name();
echo "<br>";
echo $obj->get_age();
echo "<br>";





//inheritance


// class fruit{
//     public $name;
//     public $color;

//      public function __construct($name,$color){
//         $this->name=$name;
//         $this->color=$color;
//      }

//      public function intro(){
//         echo "This is fruit {$this->name} and color is {$this->color}";
//      }

// }
//      class stawberry extends fruit{
//              public function message(){
//                 echo "Am I a fruit or a berry?";
//                }
    

// }

// $obj= new stawberry("stawberry","red");
// $obj->message();
// $obj->intro();


echo "<br>";






// Program to find the largest and smallest numbers in an array:

$numbers = array(10, 5, 8, 3, 15, 2);
$smallest = $numbers[0];
$largest = $numbers[0];

foreach ($numbers as $number) {
    if ($number < $smallest) {
        $smallest = $number;
    }

    if ($number > $largest) {
        $largest = $number;
    }
}

echo "Smallest number: " . $smallest . "<br>";
echo "Largest number: " . $largest;

echo "<br>";



// Program to count the occurrence of each word in a string:

$str = "This is a sample string. This string is used for testing.";
$words = explode(" ", $str);
$wordCount = array();

foreach ($words as $word) {
    $word = strtolower($word);

    if (array_key_exists($word, $wordCount)) {
        $wordCount[$word]++;
    } else {
        $wordCount[$word] = 1;
    }
}

foreach ($wordCount as $word => $count) {
    echo "Word '$word' occurs $count times<br>";
}

echo "<br>";






$num=4;
$fact=1;

for($i=$num;$i>=1;$i--){
    $fact=$fact*$i;
}

echo "Factorial of $num is:".$fact;


echo "<br>";


define('a',5);
for($i=1;$i<11;$i++){
    echo $i*a;
    echo "<br>";
}
echo "<br>";


function num($rows){
    for ($i=1; $i<=$rows ; $i++) { 
        for ($j=1; $j <=$i ; $j++) { 
            echo $i;
        }
        echo "<br>";
    }

}

num(5);
echo "<br>";

function halfPyramid($rows) {
    for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}

// Usage example:
halfPyramid(10);
// echo "<br>";


function invertedHalfPyramid($rows) {
    for ($i = $rows; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}

// Usage example:
invertedHalfPyramid(8);
echo "<br>";


?>