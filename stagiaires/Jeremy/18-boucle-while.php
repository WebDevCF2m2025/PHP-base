<?php
/*
 * Les boucles while
 */

echo "<p>1) Calculez la somme des entiers de 1 à 10 avec la boucle while<br>";

$sum = 0;
$i = 1;

while ($i <= 10) {
    $sum += $i; 
    $i++;        
}

echo "La somme des entiers de 1 à 10 est : " . $sum;



echo "</p>";

echo "<p>2) Affichez une table de multiplication (de 1 à 10 au hasard) en utilisant la boucle while<br>";
$randomNumber = mt_rand(1, 10);

$i = 1;

echo "Table de multiplication de " . $randomNumber . ":<br>";

while ($i <= 10) {
    $result = $randomNumber * $i;
    echo $randomNumber . " x " . $i . " = " . $result . "<br>";
    $i++;  
}

echo "</p>";

echo "<p>3) Affichez la factorielle d'un nombre au hasard entre 3 et 12 en utilisant la boucle while<br>
La factorielle d'un nombre entier positif n, notée n!, est le produit de tous les entiers positifs inférieurs ou égaux à n.<br><br>
Par exemple : <br>3! = 3 x 2 x 1 = 6 <br> 5! = 5 x 4 x 3 x 2 x 1 = 120 <br> 
7! = 7 x 6 x 5 x 4 x 3 x 2 x 1 = 5040
<br><br>";



echo "</p>";


