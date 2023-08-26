<?php

class person{
	public $name;   // properties
	public $age;

	public function set_name($name){    //method
		$this->name=$name;
	}
	public function get_name(){
		return $this->name;
	}

	public function set_age($age){
		$this->age=$age;
	}
	public function get_age(){
		return $this->age;
	}
}

$obj= new person();             // object
$obj->set_name("Roshan");
$obj->set_age("21");

echo "The name is:".$obj->get_name();
echo "<br>";

echo "The Age is:".$obj->get_age();

?>




