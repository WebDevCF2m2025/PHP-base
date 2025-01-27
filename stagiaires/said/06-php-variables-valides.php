<?php
/*
  Déclaration de variables au nom valide non strictement typées.
  Le type de la variable est déterminé par la valeur qu'elle contient
*/

// variable valide de type string (en snake_case)
$nom_de_variable_1 = "valeur de la variable";
// variable valide de type integer (en camelCase)
$nomDeVariable2 = 123;
// variable valide de type float (en Upper CamelCase - PascalCase)
$NomDeVariable3 = 123.456;
// variable valide de type boolean
$nom_de_variable_4 = true; // ou false
// variable valide de type array (indexé)
$nom_de_variable_5 = [1, 2, 3];
// variable valide de type array (associatif)
$nomDeVariable6 = ["clef1" => "valeur1", "clef2" => "valeur2"];
// variable valide de type null
$nomDeVariable7 = null;

// affichage des variables via le débugueur var_dump()
var_dump($nom_de_variable_1, $nomDeVariable2, $NomDeVariable3, 
$nom_de_variable_4, $nom_de_variable_5, $nomDeVariable6, $nomDeVariable7);
?>