<?php
/*
 * Les boucles while
 */

echo "<p>1) Calculez la somme des entiers de 1 à 10 avec la boucle while<br>";
$entier = 1;
$somme = 0;
while($entier <= 10){
    $entier = $entier + 1;
    $somme = $somme + $entier;
}



// ligne qui doit devenir fonctionnelle :
echo "La somme des entiers de 1 à 10 est : $somme";

echo "</p>";

echo "<p>2) Affichez une table de multiplication (de 1 à 10 au hasard) en utilisant la boucle while<br>";
    $num = mt_rand(1, 10);
    $i = 0;

    while($i <= 10){
        $i = $i + 1;
        $multi = $i * $num;
        echo "$num x $i = $multi<br>";
    }


echo "</p>";

echo "<p>3) Affichez la factorielle d'un nombre au hasard entre 3 et 12 en utilisant la boucle while<br>
La factorielle d'un nombre entier positif n, notée n!, est le produit de tous les entiers positifs inférieurs ou égaux à n.<br><br>
Par exemple : <br>3! = 3 x 2 x 1 = 6 <br> 5! = 5 x 4 x 3 x 2 x 1 = 120 <br> 
7! = 7 x 6 x 5 x 4 x 3 x 2 x 1 = 5040
<br><br>";
$number = mt_rand(3, 12);
$i = $number;
$factor = 1;

while( $i > 0){
    $factor = $factor * $i;
    $i = $i - 1;
    echo "la factorielle $number est $factor <br>";
}




echo "</p>";


