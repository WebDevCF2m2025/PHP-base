<?php
$monTab = ['un', 'deux', 'trois', 'quatre', 'cinq', 'six', 'sept', 'huit', 'neuf', 'dix'];

echo $monTab[0]."<hr>";
echo $monTab[1]."<hr>";
echo "$monTab[2]<hr>$monTab[3]<hr>$monTab[4]<hr>$monTab[5]<hr>";
?>
<?=$monTab[6]?><hr>
<?=$monTab[7]?><hr>
<?php
print $monTab[8]."<hr>";
print "$monTab[9]<hr>";

?>
<h2>Boucle for</h2>
<?php
// boucle for (initialisation, condition pour tourner, incrémentation)
// boucle spécialisée pour les numériques
for($i=0; $i<count($monTab); $i++){
    echo "$monTab[$i]<hr>";
}
?>
<h2>Boucle foreach</h2>
<?php
// boucle spécialisée dans les tableaux et les objets
foreach($monTab as $value){
    echo "$value<hr>";
}
?>
<h2>Boucle foreach avec clef</h2>
<?php
// boucle spécialisée dans les tableaux et les objets
foreach($monTab as $key => $value){
    echo "$key) $value<hr>";
}
?>