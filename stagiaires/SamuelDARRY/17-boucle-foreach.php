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

foreach($tab as $tabs){ 
    echo "$tabs ";
}

echo "</p>";

/*
 * 2) Affichez chaque élément du tableau $tab avec une boucle foreach
 * en affichant aussi la clef de chaque élément
 */

echo '<p>2) Affichez les lettres de $tab avec une boucle foreach en affichant aussi la clef de chaque élément<br>';

foreach($tab as $clef => $tabs){ 
    echo " $clef => $tabs | ";
}

echo "</p>";


/*
 * 3) Affichez chaque élément du tableau $semaineFr avec une boucle foreach
 * en affichant aussi la clef de chaque élément
 */

echo '<p>3) Affichez les jours de la semaine avec une boucle foreach en affichant aussi la clef de chaque élément<br>';

foreach($semaineFr as $clef => $semaineFr){
    echo " $clef => $semaineFr | ";
}

echo "</p>";

/*
 * 4) Affichez le jour actuel de la semaine en français avec la fonction date() et la variable $semaineFr
 */

echo '<p>4) Affichez le jour actuel de la semaine en français avec la fonction date() et la variable $semaineFr<br>';

$semaine = date("l");
$semaineEntier = ["Monday", "Thuesday", "Wednesday", "Thursday", "Friday", "Saturday ", "Sunday"];
$semaineEntierFr = ["Lundi", "Mardi", "Mercedi", "Jeudi", "Vendredi", "Samedi ", "Dimanche"];

foreach($semaineEntier as $d => $i){
	if ($semaine == $i){
		echo $semaineEntierFr[$d];

	}
}

echo "</p>";

/*
 * 5) Affichez la liste des prénoms du tableau $classe avec une boucle foreach
 */

echo '<p>5) Affichez la liste des prénoms du tableau $classe avec une boucle foreach<br>';

foreach ($classe as $x){
    echo $x . " ";
}

echo "</p>";

/*
 * 6) Affichez la liste des 'nom', 'age' et 'note' du tableau $classe18 avec une boucle foreach
 * avec un retour à la ligne entre chaque élément
 */

echo '<p>6) Affichez la liste des \'nom\', \'age\' et \'note\' du tableau $classe18 avec une boucle foreach avec un retour à la ligne entre chaque élément<br>';

foreach ($classe18 as $i){
    echo "nom : " . $i['nom'] . ' | ';
    echo "âge : " . $i['age'] . ' | ';
    echo "Notes : " . $i['note'] . ' <br> ';
}

echo "</p>";

/*
 * 7) Avec 2 boucles foreach, affichez tous les champs la liste des pays du tableau $countryCode
 */

echo '<p>7) Avec 2 boucles foreach, affichez tous les champs la liste des pays du tableau $countryCode<br>';


foreach ($countryCode as $i) {
    echo $i[0] . '  ' . ' | ';
    echo $i[1] . '  ' . ' | ';
    echo $i[2] . '  ' . ' | ';
    echo $i[3] . '  ' . '<br>';
}


echo "</p>";