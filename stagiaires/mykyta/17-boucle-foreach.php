<?php

$tabs = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i','j'];

foreach($tabs as $tab){
    echo "$tab " ;
}
echo "<br>";
$tabs2 = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i','j'];

foreach($tabs2 as $clef =>$tab2){
 
    echo "$clef => $tab2 |";
}
echo "<br>";
$tabs3 = ["1" =>'lundi', "2" =>'mardi', "3" =>'mercredi', "4" =>'jeudi', "5" =>'vendredi', "6" =>'samedi', "7" =>'dimanche'];

foreach($tabs3 as $clef => $tab3){
 
    echo "$clef => $tab3 |";
}
echo "<br>";
$jours = [
    '1' => 'Lundi',
    '2' => 'Mardi',
    '3' => 'Mercredi',
    '4' => 'Jeudi',
    '5' => 'Vendredi',
    '6' => 'Samedi',
    '7' => 'Dimanche'
];


foreach ($jours as $numJour => $jour) {
 
    echo $jour . " - " . date("Y-m-d H:i:s") . "<br>";
}

echo "<br>";
$classes=['jean', 'Eric', 'Marie', 'Julie', 'Luc', 'pierre', 'paul','Jacques', 'Hélène', 'Anne'];
foreach($classes as $classe){
    echo "$classe ";
}
echo "<br>";


$eleves = [
    ["nom" => "Élève 1", "age" => 15, "note" => 12],
    ["nom" => "Élève 2", "age" => 16, "note" => 14],
    ["nom" => "Élève 3", "age" => 15, "note" => 9],
    ["nom" => "Élève 4", "age" => 17, "note" => 16],
    ["nom" => "Élève 5", "age" => 14, "note" => 10],
    ["nom" => "Élève 6", "age" => 16, "note" => 11],
    ["nom" => "Élève 7", "age" => 15, "note" => 15],
    ["nom" => "Élève 8", "age" => 18, "note" => 18],
    ["nom" => "Élève 9", "age" => 17, "note" => 13],
    ["nom" => "Élève 10", "age" => 16, "note" => 14],
    ["nom" => "Élève 11", "age" => 14, "note" => 10],
    ["nom" => "Élève 12", "age" => 15, "note" => 17],
    ["nom" => "Élève 13", "age" => 16, "note" => 9],
    ["nom" => "Élève 14", "age" => 17, "note" => 16],
    ["nom" => "Élève 15", "age" => 18, "note" => 19],
    ["nom" => "Élève 16", "age" => 14, "note" => 13],
    ["nom" => "Élève 17", "age" => 16, "note" => 8],
    ["nom" => "Élève 18", "age" => 17, "note" => 11],
    ["nom" => "Élève 19", "age" => 15, "note" => 20],
    ["nom" => "Élève 20", "age" => 16, "note" => 12]
];


foreach ($eleves as $eleve) {
    echo "Nom : " . $eleve['nom'] . "|";
    echo "Âge : " . $eleve['age'] . "|";
    echo "Note : " . $eleve['note'] . "<br>";
}

echo "<br>";

$countryCode = [
    ["4", "AFG", "AF", "Afghanistan"],
    ["710", "ZAF", "ZA", "Afrique du Sud"],
    ["248", "ALA", "AX", "Aland"],
    ["8", "ALB", "AL", "Albanie"],
    ["12", "DZA", "DZ", "Algérie"],
    ["276", "DEU", "DE", "Allemagne"],
    ["20", "AND", "AD", "Andorre"],
    ["24", "AGO", "AO", "Angola"],
    ["660", "AIA", "AI", "Anguilla"],
    ["10", "ATA", "AQ", "Antarctique"]
];
 
foreach ($countryCode as $country) {
    foreach ($country as $field) {
        echo $field . " | ";
    }
    echo "<br>";
}
?>