<?php   


class person{
    public $name;
    public $age;

function __construct($name,$age){
    $this->name=$name;
    $this->age=$age;
}

function show(){
    return $this->name;
    
}
function mess(){
    
    return $this->age;
}

function __destruct(){
    echo "The Name Is {$this->name} and The Age is {$this->age}";
}


}

$obj=new person("Vishal",20);
echo $obj->show();
echo "<br>";
echo $obj->mess();





?>