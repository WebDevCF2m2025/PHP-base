<?php
$a = mt_rand(0, 10);

switch(true) {
    case ($a <= 3):
        echo "$a : Nul, étudie la prochaine fois";
        break;
    case ($a <= 5):
        echo "$a : Peut mieux faire";
        break;
    default:
        echo "$a : Bien";
        break;
}