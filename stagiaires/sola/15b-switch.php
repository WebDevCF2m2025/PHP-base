<?php

$num = mt_rand(0, 10);

switch($num) {
    case 0;
    case 1;
    case 2;
    case 3:
        echo "$num : Nul, étudie la prochaine fois";
        break;
    case 4:
    case 5:
        echo "$num : Peut mieux faire";
        break;
    case 6:
    case 7:
        echo "$num : Bien";
    default:
        echo "$num : Très bien";
}