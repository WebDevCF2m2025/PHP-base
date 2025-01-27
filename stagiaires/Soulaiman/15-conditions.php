<?php
$note = rand(0, 10);
if ($note >= 0 && $note <= 3) {
    echo "${note} : Nul, étudie la prochaine fois";
} elseif ($note >= 4 && $note <= 5) {
    echo "${note} : Peut mieux faire";
 } elseif ($note >= 6 && $note <= 7) {
        echo "${note} :  Bien";
    }else {
    echo " ${note} : Très bien";
}
