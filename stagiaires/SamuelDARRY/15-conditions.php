<?php

$random = mt_rand(0, 10);
    if ($random >= 0 && $random <= 3) {
        echo $random . " : Nul, étudie la prochaine fois.";
    } elseif ($random >= 4 && $random <= 5) {
        echo $random . " : Peut mieux faire.";
    } elseif ($random >= 6 && $random <= 7) {
        echo $random . " : Bien.";
    } else {
        echo $random . " : Très bien";
}

?>