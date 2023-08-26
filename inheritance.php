<?php



class person{
    public $name;
    public $age;


    function __construct($name,$age){
		$this->name=$name;
		$this->age=$age;
	}

    function intro(){
        echo  "The Name Is {$this->name} and The Age is {$this->age}";
    }

}

class harry extends person{
    function mess(){
        echo "The Name is harry or Berry?";
}
}
$obj= new harry("harry",22);
$obj->mess();
$obj->intro();




?>