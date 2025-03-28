<?php
/*
 * Les boucles for
 */

/*
 * 1) Affichez les nombres de 10 à 1 avec une boucle for
 */

echo "<p>1) Affichez les nombres de 10 à 1 avec une boucle for<br>";

for (
    $i=10;$i>=1;$i--){
    echo "$i ";
}



echo "</p>";

/*
 * 2) Affichez les nombres pairs de 0 à 20 avec une boucle for
 */

echo "<p>2) Affichez les nombres pairs de 0 à 20 avec une boucle for<br> 
Ne pas utiliser les { et } ne fonctionne que sur une ligne (qui finit au ;), le ||| n'est affiché qu'après la boucle for<br>";

for ($i=0;$i<=20;$i+=2){
    echo "$i ";
}


echo "</p>";

/*
 * 3) Affichez les nombres de 1 à 20 avec une boucle for en calculant la somme de ces nombres
 */

echo "<p>3) Affichez les nombres de 1 à 20 avec une boucle for en calculant la somme de ces nombres<br>";
$sum=0;
for (
    $i=1;
    $i<=20;
    $i++
    

){
$sum+=$i;
echo "$i | ";
}
{
echo "- La somme des nombres de 1 à 20 égale $sum ";
}

/*
 * 4) Affichez les nombres de 1 à 20 avec une boucle for en calculant la somme de ces nombres
 * et en affichant à chaque tour si le nombre est pair ou impair (utilisez l'opérateur modulo %)
 */

echo "<p>4) Affichez les nombres de 1 à 20 avec une boucle for en calculant la somme de ces nombres et en affichant à chaque tour si le nombre est pair ou impair<br>";
$sum=0;

for ($i=0; $i<=20; $i++){
if($i%2===0){
    echo " $i - paire |";
}else{
    echo " $i - impaire |";  }
}



{
echo "La somme des nombres de 1 à 20 égale $sum ";
}


echo "</p>";

/*
 * 5) Affichez la somme des nombres de 1 à 20 à chaque tour avec une boucle for
 * et en affichant à chaque tour si la somme est pair ou impair
 */

echo "<p>5) Affichez la somme des nombres de 1 à 20 à chaque tour avec une boucle for et en affichant à chaque tour si la somme est pair ou impair<br>";

$sum=0;

for ($i=1; $i<=20; $i++){
    $sum += $i;
if($sum%2===0){
    echo " La somme est $sum est pair |";
}else{
    echo " La somme est $sum impaire |";  }
}



 
echo "</p>";

/*
 * 6) Utilisez deux boucles for imbriquées pour afficher une table de multiplication de 1 à 5.
 * La table doit être formatée de manière lisible, par exemple :
    // 1 x 1 = 1   1 x 2 = 2   ...   1 x 5 = 5
    // 2 x 1 = 2   2 x 2 = 4   ...   2 x 5 = 10
    // ...
    // 5 x 1 = 5   5 x 2 = 10  ...   5 x 5 = 25
 * Vous aurez besoin de concaténer des chaînes de caractères avec l'opérateur ".".
 * Vous obtiendrez 5 lignes de 5 multiplications chacune.
 */

echo "<p>6) Utilisez deux boucles for imbriquées pour afficher une table de multiplication de 1 à 5.<br>";



for ($i=1; $i<=5; $i++){
    for ($m=1; $m<=5; $m++){
        echo $i. " X " . $m ." = ".  $i*$m ."   |   ";
        
    } 
    echo "<br>";
}


 




echo "</p>";