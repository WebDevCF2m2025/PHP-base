<?php

$numero = mt_rand(1, 20);
$reponse = "reponse";

if ($numero %2 == 0){
    $reponse = " est un nombre pair";
    echo $numero, $reponse;
}else{
    $reponse = " est impaire";
    echo $numero, $reponse;
}

?>