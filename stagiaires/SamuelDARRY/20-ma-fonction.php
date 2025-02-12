<?php

function estPair($num1){
    if ($num1 % 2 === 0){
        return "$num1 est un chiffre pair";
    } else {
        return "$num1 est un chiffre impair";
    }
}

echo estPair(2) . "<br>";
echo estPair(3);
