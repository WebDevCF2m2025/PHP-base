<?php
$classe1 = array(
    "Omer",
    "Agim",
    "Massine",
    "Loukas",
    "Soulaiman",
    "Nordine",
    "Vahagn",
    "luc" => "est pas là",
);

var_dump($classe1);

// Concaténation avec le . (, possible)
echo $classe1[0]." ".$classe1[1]."<hr>";
// concaténation avec la ,
echo $classe1[2]," ",$classe1[3],"<hr>";
echo "<hr>";
// entre double guillemets, les variables sont interprétées
echo "$classe1[4] $classe1[5]<hr>";
// entre simples guillemets, les variables ne sont pas interprétées
echo '$classe1[4] $classe1[5]<hr>';
// entre double guillemets, les variables sont interprétées quand il n'y a pas de guillemets dans les variables PHP, on les échappe avec {$var}
echo "{$classe1['luc']} ".$classe1[4]."<hr>";
echo "$classe1[luc]<hr>";
print "$classe1[5] $classe1[6]<hr>";
print '$classe1[5] $classe1[6]<hr>';

// ! Attention avec print, on ne peut concaténer qu'avec le .
print $classe1[5]." ".$classe1[6]."<hr>";
// print $classe1[5]," ",$classe1[6],"<hr>";
echo "Les enfants m'ont dit \"bonjour!\"";
echo 'Les enfants m\'ont dit "bonjour!"<br>';
echo date("Y-m-d à H\h");


