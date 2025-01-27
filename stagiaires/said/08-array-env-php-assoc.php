<?php
/*
PHP utilise les tableaux pour les variables d' environnement 
comme les variables get($_GET[])
on va obsever la variable $_GET grace à var_dump()
*/
var_dump($_GET);
?>
<a href =" ?p=1"> accueil</a>
<a href =" ?p=7"> variable get p vaut 1</a>
<a href =" ?p=1&search=coucou"> variable get p vaut 1 et search vaut coucou</a>
<p> Par defaut les variables d'environnement sont dans les tableaux associatif en PHP !</p>
