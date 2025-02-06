<?php
/*
 * Les boucles while
 */

echo "<p>1) Calculez la somme des entiers de 1 à 10 avec la boucle while<br>";

$somme = 0;
$resultat = 0;
while ($somme <= 10) {
    $resultat += $somme;
    $somme++;
}

// ligne qui doit devenir fonctionnelle :
echo "La somme des entiers de 1 à 10 est : $resultat";

echo "</p>";

echo "<p>2) Affichez une table de multiplication (de 1 à 10 au hasard) en utilisant la boucle while<br>";

$randomInt = rand(1,10);
$compteur = 0;
$result = 0;
while ($compteur < 10) {
    $compteur++;
    if ($randomInt === 1) {
        echo "il n'ya pas de table de multiplication pour le chiffre $randomInt";
        break;
    }
    $result += $randomInt;
    echo "$randomInt x $compteur = $result<br> ";
}

echo "</p>";

echo "<p>3) Affichez la factorielle d'un nombre au hasard entre 3 et 12 en utilisant la boucle while<br>
La factorielle d'un nombre entier positif n, notée n!, est le produit de tous les entiers positifs inférieurs ou égaux à n.<br><br>
Par exemple : <br>3! = 3 x 2 x 1 = 6 <br> 5! = 5 x 4 x 3 x 2 x 1 = 120 <br> 
7! = 7 x 6 x 5 x 4 x 3 x 2 x 1 = 5040
<br><br>";

$factoInt = rand(3,12);
$i = $factoInt;
$text = "$factoInt! =";
$res = 1;
while ($i > 0) {
    $res *= $i;
    $text .= ($i>1) ? " $i x " : "$i = ";
    $i--;
}
echo $text.$res;
echo "</p>";


