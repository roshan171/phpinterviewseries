<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Global variable</title>
</head>
<body>

<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
name: <input type="text" name="fname">
<input type="submit">
</form>

<?php

/*
$_COOKIE,$_ENV,$_FILES,$_POST,$_GET,$_REQUEST,$_SERVER,$_SESSION,$GLOBALS

*/


//REQUEST

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_REQUEST['fname'];
    if(empty($name)){
        echo "name field are empty";
    }
    else{
        echo $name;
    }
}

echo "<br>";


//$global


$x=5;
$y=6;

function addition(){
    $GLOBALS["z"]=$GLOBALS["x"]+$GLOBALS["y"];
}


addition();
echo $z."<br>";



//$_server


echo $_SERVER["SERVER_NAME"];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER ['PHP_SELF'];
echo "<br>";
echo $_SERVER ['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER ['HTTP_USER_AGENT'];
echo "<br>";



?>
    
</body>
</html>