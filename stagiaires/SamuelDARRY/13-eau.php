<?php

$etatEau = mt_rand(-100, 200);
    if ($etatEau <= 0) {
        echo "La température de l'eau est à : " . $etatEau . " °. L'eau est solide en dessous de 0°";
    } elseif ($etatEau>= 100) {
        echo "La température de l'eau est à : " . $etatEau . " °. L'eau est gazeuse à partir de 100°";
    } else {
        echo "La température de l'eau est à : " . $etatEau . " °. L'eau est liquide entre 1° et 99°";
    }

?>
