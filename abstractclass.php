<?php


//abstract class 

abstract class car{
    public $name;

    public function __construct($name){
        $this->name=$name;
    }

    abstract public function intro():string;

    
}

class audi extends car{
    public function intro():string{
        return "Choose German quality! I'm an $this->name!";
    }
}

$audi = new audi("Audi");
echo $audi->intro();

echo "<br>";









?>