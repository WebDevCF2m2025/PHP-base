<?php
/*
for(

    $i=10;

    $i>=0;

    $i--
){
    echo "$i ";
}
*/


/*
for(
    $i=0;

    $i<=20;

    $i += 2
){
    echo "$i ";
}
*/




/*
for ($i = 0; $i <= 20; $i++) {
    echo "$i ";
}
echo "\n";


$sum = 0;
for ($i = 1; $i <= 20; $i++) {
    $sum += $i;
}
echo "La somme est : " . $sum;
*/


/*
$sum = 0;


for ($i = 1; $i <= 20; $i++) {
    echo $i;
    if ($i % 2 == 0) {
        echo " - Paire";
    } else {
        echo " - Impaire";
    }
    echo "\n"; 
   
    $sum += $i;
}


echo "La somme est : " . $sum;

*/




/*
$sum = 0;


for ($i = 1; $i <= 20; $i++) {
  
    $sum += $i;

   
    echo "La somme " . $i . " est : " . $sum;

    if ($sum % 2 == 0) {
        echo " - Paire\n";
    } else {
        echo " - Impaire\n";
    }
}

*/



for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        $result = $i * $j;
        echo $i . " x " . $j . " = " . $result . "\n";
    }
    echo "\n"; 
}






?>
