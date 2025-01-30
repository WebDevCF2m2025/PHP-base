<?php 

$nombre = mt_rand(0,10);

switch($nombre){
    case 0:
    case 1:
    case 2:
    case 3:
        echo "{$nombre} : Nul, étudie la prochaine fois";
        break;
    case 4:
    case 5:
        echo "{$nombre} : Peut mieux faire";
        break;
    case 6:
    case 7:
        echo "{$nombre} : Bien";
        break;
    default:
        echo "{$nombre} : Très bien";
        break;
}