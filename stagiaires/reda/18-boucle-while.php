<?php
/*
 * Les boucles while
 */

echo "<p>1) Calculez la somme des entiers de 1 à 10 avec la boucle while<br>";

$somme = 0;
$i = 0;
while ($i <= 10) {
  $somme += $i;
  $i++;
}





// ligne qui doit devenir fonctionnelle :
echo "La somme des entiers de 1 à 10 est : $somme";

echo "</p>";

echo "<p>2) Affichez une table de multiplication (de 1 à 10 au hasard) en utilisant la boucle while<br>";
$random_table = rand(1, 10);
$i = 1;
$x = 1;
echo "la table de $random_table" . '<br>';

while ($x <= 10) {
  echo $random_table . 'x' . $x . '=' . $random_table * $x . ' || ';
  $x++;
}



echo "</p>";

echo "<p>3) Affichez la factorielle d'un nombre au hasard entre 3 et 12 en utilisant la boucle while<br>
La factorielle d'un nombre entier positif n, notée n!, est le produit de tous les entiers positifs inférieurs ou égaux à n.<br><br>
Par exemple : <br>3! = 3 x 2 x 1 = 6 <br> 5! = 5 x 4 x 3 x 2 x 1 = 120 <br> 
7! = 7 x 6 x 5 x 4 x 3 x 2 x 1 = 5040
<br><br>";

$random_facto = rand(3, 12);
$i = 1;
$sum = 1;
$result = $random_facto;
echo "Table factioriel de $random_facto <br>";

echo "$random_facto! = ";
while ($random_facto >= $i) {
  echo "$random_facto x  ";
  $sum *= $random_facto;
  $random_facto--;
}
echo "= " . $sum;


echo "</p>";
