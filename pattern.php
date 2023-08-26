<?php


for($i=1;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
        echo"$j";
       
    }
    echo "$i";
    echo "<br>";
}

for($i=1;$i<=5-1;$i++){
    for($j=1;$j<=5-$i;$j++){
        echo "$j";
    }
    echo (5-$i);
    echo "<br>";


}



    for($i=0;$i<6;$i++){
        for ($j=0; $j <=$i; $j++) { 
            echo "*";
           
        }
        echo "<br>";
    }
echo "<br>";
    
for ($i=0; $i < 6; $i++) { 
	for($j=5-$i;$j>=0;$j--){
		echo "*";

	}
	echo "<br>";
}

echo "<br>";

for($i=0;$i<5;$i++){
	for ($j=1; $j <5 ; $j++) { 
		echo "*";
	}
	echo "<br>";
}

echo "<br>"; 

$size = 5;
for($i=1;$i<=$size;$i++){
    for($j=1;$j<=$size-$i;$j++){
        echo "&nbsp;&nbsp;";
    }
    for($k=1;$k<=$i;$k++){
                echo "*&nbsp;&nbsp;";
    }
echo "<br />";
}





















// for($i=1;$i<=5;$i++){
//     for($j=0;$j<=$i;$j++){
//         echo"$i";
       
//     }
//     echo "<br>";
// }

// for($i=4;$i>=1;$i--){
//     for($j=0;$j<=$i;$j++){
//         echo "$i";
//     }
//     echo "<br>";
// }



// echo "<br>";



// for($i=0;$i<6;$i++){
//     for($j=0;$j<6;$j++){
//         echo "*";
//     }
//     echo "<br>";
// }

// echo "<br>";


// $size = 5;
// for($i=1;$i<=$size;$i++){
//     for($j=1;$j<=$size-$i;$j++){
//         echo "&nbsp;&nbsp;";
//     }
//     for($k=1;$k<=$i;$k++){
//                 echo "*&nbsp;&nbsp;";
//     }
// echo "<br />";
// }

// echo "<br>";





?>