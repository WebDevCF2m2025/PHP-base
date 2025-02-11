<?php
/*
 * Les boucles foreach
 */

include 'array.php';
/*
 * 1) Affichez chaque élément du tableau avec une boucle foreach
 */
$tab = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j");

echo '<p>1) Affichez les lettres de $tab avec une boucle foreach<br>';

foreach($tab as $k => $v) {
    echo "$v ";
}

echo "</p>";

/*
 * 2) Affichez chaque élément du tableau $tab avec une boucle foreach
 * en affichant aussi la clef de chaque élément
 */

echo '<p>2) Affichez les lettres de $tab avec une boucle foreach en affichant aussi la clef de chaque élément<br>';

foreach($tab as $k => $v) {
    echo "$k => $v | ";
}

echo "</p>";


/*
 * 3) Affichez chaque élément du tableau $semaineFr avec une boucle foreach
 * en affichant aussi la clef de chaque élément
 */

echo '<p>3) Affichez les jours de la semaine avec une boucle foreach en affichant aussi la clef de chaque élément<br>';

$semaineFr=[1 =>'lundi','mardi','mercredi','jeudi','vendredi','samedi','dimanche',];

foreach($semaineFr as $k => $v ){
    echo "$k => $v | ";
}


echo "</p>";

/*
 * 4) Affichez le jour actuel de la semaine en français avec la fonction date() et la variable $semaineFr
 */

echo '<p>4) Affichez le jour actuel de la semaine en français avec la fonction date() et la variable $semaineFr<br>';

$jour = $semaineFr[date("N")];

echo $jour;

echo "</p>";

/*
 * 5) Affichez la liste des prénoms du tableau $classe avec une boucle foreach
 */

echo '<p>5) Affichez la liste des prénoms du tableau $classe avec une boucle foreach<br>';

foreach($classe as $classe2) {
    echo "$classe2 ";
}

echo "</p>";

/*
 * 6) Affichez la liste des 'nom', 'age' et 'note' du tableau $classe18 avec une boucle foreach
 * avec un retour à la ligne entre chaque élément
 */

echo '<p>6) Affichez la liste des \'nom\', \'age\' et \'note\' du tableau $classe18 avec une boucle foreach avec un retour à la ligne entre chaque élément<br>';

$classe18 = [
    ['nom' => 'Élève 1', 'age' => 15, 'note' => 90],
    ['nom' => 'Élève 2', 'age' => 16, 'note' => 80],
    ['nom' => 'Élève 3', 'age' => 15, 'note' => 100],
    ['nom' => 'Élève 4', 'age' => 17, 'note' => 70],
    ['nom' => 'Élève 5', 'age' => 16, 'note' => 95],
    ['nom' => 'Élève 6', 'age' => 15, 'note' => 85],
    ['nom' => 'Élève 7', 'age' => 17, 'note' => 75],
    ['nom' => 'Élève 8', 'age' => 16, 'note' => 90],
    ['nom' => 'Élève 9', 'age' => 15, 'note' => 80],
    ['nom' => 'Élève 10', 'age' => 17, 'note' => 100],
    ['nom' => 'Élève 11', 'age' => 16, 'note' => 70],
    ['nom' => 'Élève 12', 'age' => 15, 'note' => 95],
    ['nom' => 'Élève 13', 'age' => 17, 'note' => 85],
    ['nom' => 'Élève 14', 'age' => 16, 'note' => 75],
    ['nom' => 'Élève 15', 'age' => 15, 'note' => 90],
    ['nom' => 'Élève 16', 'age' => 17, 'note' => 80],
    ['nom' => 'Élève 17', 'age' => 16, 'note' => 95],
    ['nom' => 'Élève 18', 'age' => 15, 'note' => 85],
];


foreach ($classe18 as $x) {
    echo "nom : " . $x['nom'] . ' || ';
    echo "âge : " . $x['age'] . ' || ';
    echo "Notes : " . $x['note'] . ' <br> ';
  }

echo "</p>";

/*
 * 7) Avec 2 boucles foreach, affichez tous les champs la liste des pays du tableau $countryCode
 */

echo '<p>7) Avec 2 boucles foreach, affichez tous les champs la liste des pays du tableau $countryCode<br>';


foreach($countryCode as $country){
    foreach($country as $values){
        echo "$values |";
    }
    echo "<br>";
}

echo "</p>";