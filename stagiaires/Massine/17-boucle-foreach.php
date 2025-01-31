<?php
include "array.php";
?>

<!-- exe1 -->
<?php

$tab = ["a ", "b ", "c ", "d ", "e ", "f ", "g ", "h ", "i ", "j "];

foreach ($tab as $tab) {
    echo "$tab";
}
?>
<br>

<!-- exe2 -->
<?php
$tab = [0 => "a", 1 => "b", 2 => "c", 3 => "d", 4 => "e", 5 => "f", 6 => "g", 7 => "h", 8 => "i", 9 => "j"];

foreach ($tab as $K => $V) {
    echo "$K => $V | ";
}
?>
<br>

<!-- exe3 -->
<?php
$tab = [1 => "lundi", 2 => "mardi", 3 => "mercredi", 4 => "jeudi", 5 => "vendredi", 6 => "samedi", 7 => "dimanche"];

foreach ($tab as $clef => $value) {
    echo "$clef => $value | ";
}
?>
<br>
<!-- exe4 -->
<?php
$semaineFr = date("N");

echo "$tab[$semaineFr]";
?>
<br>
<!-- exe5 -->
<?php
$classe = ["Anne", "Eric", "Marie", "Julie", "Luc", "Pierre", "Paul", "Jacques", "Hélène", "Anne"];

foreach ($classe as $classe) {
    echo "$classe ";
}
?>
<br>
<!-- exe6 -->
<?php
foreach ($classe18 as $key => $eleves) {
    echo "nom : {$eleves["nom"]}  | age: {$eleves["age"]}  | note: {$eleves["note"]}<br>";

    # code...
}
?>
<br>
<!-- exe7 -->
<?php
foreach ($countryCode as $value) {
    foreach ($value as $k) {
        echo "$k" . " | ";
    }
    echo "<br>";
}
    # code...
