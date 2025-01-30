<?php

$eau = 10;
$reponse = "temperature";

if ($eau <= 0){
    $reponse = "solid";
    echo $reponse;
}else if($eau >= 1 && $eau <100){
    $reponse = "liquide";
    echo $reponse;
}else{
    $reponse = "gazeux";
    echo $reponse;
}
?>