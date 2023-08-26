<?php


// interface
interface animal{
	public function makesound();

}
class cat implements animal{
     public function makesound(){
		echo "Meao";
	 }
}

$obj = new cat();
$obj->makesound();
echo "<br>";


?>