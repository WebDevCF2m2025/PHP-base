<?php

//1. Affichez les lettres de $tab avec une boucle foreach
// a b c d e f g h i j   
$tab = ["a","b","c","d","e","f","g","h","i","j"];
foreach ($tab as $alphabet) {
    echo $alphabet . " ";
}
    
echo"<br><br><br>";
//2. Affichez les lettres de $tab avec une boucle foreach en affichant aussi la clef de chaque élément. 
$tab = ["a","b","c","d","e","f","g","h","i","j"];
foreach ($tab as $clefs => $lettre) {
    echo "clefs position index : $clefs , lettre  : $lettre<br><br>";
}
echo"<br>";
// 3. Affichez les jours de la semaine en français avec une boucle foreach en affichant aussi la clef de chaque élément.
$jourSemaine = ["lundi","mardi","mercredi","jeudi","vendredi","samedi","dimanche"];
foreach ($jourSemaine as $clefs => $jours) {
    echo "clef numéro  : $clefs , jour  : $jours<br><br>";
}
echo"<br>";
//4. Afichez le jour actuel de la semaine en français avec la fonction date() et la variable $semaineFr.
$semaineFr = ["dimanche","lundi","mardi","mercredi","jeudi","vendredi","samedi"];
$jourActuel = $semaineFr[date('w')];
echo "Aujourd'hui, nous sommes le  : $jourActuel<br><br>";
echo"<br>";
//5. Affichez la liste des prénoms du tableau $classe avec une boucle foreach
$classes = ["Jean", "Eric", "Marie", "Julie", "Pierre", "Paul", "Jacques", "Hélène", "Anne"];
foreach ($classes as $prenoms) {
    echo $prenoms . "  ";
}
echo"<br><br>";
//6. Affichez la liste des 18 élèves "noms" "age" et "note" du tableau $classes avec une boucle foreach avec un retour à la ligne entre chaque élément.
$classes = [
    ["nom" => "Elève 1 ", "age" => 18, "note" => 15],
    ["nom" => "Elèves 2 ", "age" => 19, "note" => 14],
    ["nom" => "Elèves 3 ", "age" => 38, "note" => 16],
    ["nom" => "Elèves 4 ", "age" => 42, "note" => 13],
    ["nom" => "Elèves 5 ", "age" => 49, "note" => 12],
    ["nom" => "Elèves 6 ", "age" => 21, "note" => 11],
    ["nom" => "Elèves 7 ", "age" => 28, "note" => 10],
    ["nom" => "Elèves 8 ", "age" => 19, "note" => 17],
    ["nom" => "Elèves 9 ", "age" => 33, "note" => 18],
    ["nom" => "Elèves 10 ", "age" => 18, "note" => 15],
    ["nom" => "Elèves 11 ", "age" => 30, "note" => 14],
    ["nom" => "Elèves 12 ", "age" => 38, "note" => 16],
    ["nom" => "Elèves 13 ", "age" => 18, "note" => 13],
    ["nom" => "Elèves 14 ", "age" => 20, "note" => 12],
    ["nom" => "Elèves 15 ", "age" => 25, "note" => 11],
    ["nom" => "Elèves 16 ", "age" => 22, "note" => 10],
    ["nom" => "Elèves 17 ", "age" => 19, "note" => 17],
    ["nom" => "Elèves 18 ", "age" => 18, "note" => 18]
];
foreach ($classes as $eleves) {
    echo "Nom : " . $eleves["nom"] . ", Age : " . $eleves["age"] . ", Note : " . $eleves["note"] . "<br>";
}
echo"<br><br>";
//7. Avec 2 boucles foreach, affichez tous les champs la liste des pays du tableau $countryCode.
$paysCode = [
    "AF" => ["Pays" => "Afghanistan", "Abréviation code" => "AFG", "Préfixe téléphonique" => "4"],
    "ZA" => ["Pays" => "Afrique du Sud", "Abréviation code" => "ZAF", "Préfixe téléphonique" => "710"],
    "AX" => ["Pays" => "Aland", "Abréviation code" => "ALA", "Préfixe téléphonique" => "248"],
    "AL" => ["Pays" => "Albanie", "Abréviation code" => "ALB", "Préfixe téléphonique" => "8"],
    "DZ" => ["Pays" => "Algérie", "Abréviation code" => "DZA", "Préfixe téléphonique" => "12"],
    "DE" => ["Pays" => "Allemagne", "Abréviation code" => "DEU", "Préfixe téléphonique" => "276"],
    "AD" => ["Pays" => "Andorre", "Abréviation code" => "AND", "Préfixe téléphonique" => "20"],
    "AO" => ["Pays" => "Angola", "Abréviation code" => "AGO", "Préfixe téléphonique" => "24"],
    "AI" => ["Pays" => "Anguilla", "Abréviation code" => "AIA", "Préfixe téléphonique" => "660"],
    "AQ" => ["Pays" => "Antarctique", "Abréviation code" => "ATA", "Préfixe téléphonique" => "10"],
];
foreach ($paysCode as $code => $pays) {
    echo "Code: $code<br>";
    foreach ($pays as $clefs => $valeur) {
        echo "$clefs: $valeur<br>";
    }
    echo "<br>";
}
?>
