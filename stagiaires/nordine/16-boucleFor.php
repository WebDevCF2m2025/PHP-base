
<?php
//1.affichez les nombres de 10 à 1 en utilisant une boucle for 10,9,8,7,6,5,4,3,2,1                                                                                                                                                                                                                                                                                                                                                                                           
for ($compteur = 10; $compteur >= 1; $compteur--) {
    echo $compteur;
    if ($compteur > 1) {
    echo ",";
}
} 
echo "<br><br>";
//2. affichez les nombres pairs de 0 à 20 avec une boucle for
for ($index = 0; $index <= 20; $index += 2) {
    echo $index;
    if ($index < 20) {
        echo ",";
    }
}
echo "<br><br>";
// 3. affichez les nombres de 1 à 20 avec une boucle for en calculant la somme de ces nombres
//-la somme des nombres de 1 à 20 est 210.
$somme = 0;
for ($i = 1; $i <= 20; $i++)  {
    echo $i;
    if ($i < 20) {
        echo ".";
    }
    $somme += $i;
}
echo " la somme des nombres de 1 à 20 est $somme.";
echo "<br><br>";
// 4. affichez les nombres de 1 à 20 avec une boucle for en calculant la somme de ces nombres et 
// en affichant la somme à chaque tour de boucle si le nombre est pair ou impair.
$chiffre = 0;
for ($a = 1; $a <= 20; $a++) {
    echo $a;
    if ($a < 20) {
        echo " tour: ";
    }
    $chiffre += $a;
    if ( $a % 2 === 0) {
        echo " somme: $chiffre, Le nombre de tour est pair.  ";
    } else {
        echo " somme: $somme, Le nombre de tour est impair.  ";
    }     
}
echo "<br><br>";
// 5) Affichez la somme des nombres de 1 à 20 à chaque tour avec une boucle for
// et en affichant à chaque tour si la somme est pair ou impair
$somme1 = 0;
for ($e = 1; $e <= 20; $e++) {
$somme1 += $e;

if ($somme1 % 2 === 0) {
    echo "La somme est pair : $somme1 | ";
} else {
    echo "La somme est impair : $somme1 | ";
    }
}
echo "<br><br>";
// 6) Utilisez deux boucles for imbriquées pour afficher une table de multiplication de 1 à 5.
for ($b = 1; $b <= 5; $b++) {
    for ($m = 1; $m <= 5; $m++) {
        echo $b . " x " . $m . "  = " . ($b * $m);
        if ($m < 5) {
            echo   " ......"; 
        }
    }
    echo "<br><br>"; 
}
?>

