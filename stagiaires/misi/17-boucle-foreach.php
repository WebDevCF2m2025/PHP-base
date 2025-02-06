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

foreach($tab as $i){
    echo $i;
}

echo "</p>";

/*
 * 2) Affichez chaque élément du tableau $tab avec une boucle foreach
 * en affichant aussi la clef de chaque élément
 */

echo '<p>2) Affichez les lettres de $tab avec une boucle foreach en affichant aussi la clef de chaque élément<br>';


foreach($tab as $a => $i){
    echo $a ," => ",$i," | ";
}


echo "</p>";


/*
 * 3) Affichez chaque élément du tableau $semaineFr avec une boucle foreach
 * en affichant aussi la clef de chaque élément
 */

echo '<p>3) Affichez les jours de la semaine avec une boucle foreach en affichant aussi la clef de chaque élément<br>';

$tab2 = array("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche");

foreach($tab2 as $a => $i){
    echo $a ," => ",$i," | ";
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

$classe =["Jean Eric", "Marie Julie", "Luc Pierre", "Paul Jacques", "Hélène Anne"];

foreach ($classe as $nom){
    echo "{$nom} " ;
}

echo "</p>";

/*
 * 6) Affichez la liste des 'nom', 'age' et 'note' du tableau $classe18 avec une boucle foreach
 * avec un retour à la ligne entre chaque élément
 */

echo '<p>6) Affichez la liste des \'nom\', \'age\' et \'note\' du tableau $classe18 avec une boucle foreach avec un retour à la ligne entre chaque élément<br>';

$classe19 = [
    "1" => [
        "nom" => "Élève 1",
        "âge" => "15",
        "note" => "90"        
    ],
    "2" => [
        "nom" => "Élève 2",
        "âge" => "16",
        "note" => "80"        
    ],
    "3" => [
        "nom" => "Élève 3",
        "âge" => "15",
        "note" => "100"        
    ],
    "4" => [
        "nom" => "Élève 4",
        "âge" => "17",
        "note" => "70"        
    ],
    "5" => [
        "nom" => "Élève 5",
        "âge" => "16",
        "note" => "95"        
    ],
    "6" => [
        "nom" => "Élève 6",
        "âge" => "15",
        "note" => "85"        
    ],
    "7" => [
        "nom" => "Élève 7",
        "âge" => "17",
        "note" => "75"        
    ],
    "8" => [
        "nom" => "Élève 8",
        "âge" => "16",
        "note" => "90"        
    ],
    "9" => [
        "nom" => "Élève 9",
        "âge" => "15",
        "note" => "80"        
    ],
    "10" => [
        "nom" => "Élève 10",
        "âge" => "17",
        "note" => "100"        
    ],
    "11" => [
        "nom" => "Élève 11",
        "âge" => "16",
        "note" => "70"        
    ],
    "12" => [
        "nom" => "Élève 12",
        "âge" => "15",
        "note" => "95"        
    ],
    "13" => [
        "nom" => "Élève 13",
        "âge" => "15",
        "note" => "90"        
    ],
    "14" => [
        "nom" => "Élève 14",
        "âge" => "16",
        "note" => "75"        
    ],
    "15" => [
        "nom" => "Élève 15",
        "âge" => "15",
        "note" => "90"        
    ],
    "16" => [
        "nom" => "Élève 16",
        "âge" => "17",
        "note" => "80"        
    ],
    "17" => [
        "nom" => "Élève 17",
        "âge" => "16",
        "note" => "95"        
    ],
    "18" => [
        "nom" => "Élève 18",
        "âge" => "15",
        "note" => "85"        
    ]
];

foreach ($classe19 as $i){
    echo "nom :{$i["nom"]} age : {$i["âge"]} note : {$i["note"]} | ";
}

foreach ($classe18 as $i){
    echo "nom :{$i["nom"]} age : {$i["âge"]} note : {$i["note"]} | ";
}
echo "</p>";

/*
 * 7) Avec 2 boucles foreach, affichez tous les champs la liste des pays du tableau $countryCode
 */

echo '<p>7) Avec 2 boucles foreach, affichez tous les champs la liste des pays du tableau $countryCode<br>';

$countryCode

foreach ($countryCode as $i) {
    echo $i[0] . ' | '. $i[1] . ' | '. $i[2] . ' | '. $i[3] . PHP_EOL;
  }

echo "</p>";