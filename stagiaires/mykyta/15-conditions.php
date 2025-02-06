<?php
$note = rand(0, 10);
if ($note <= 3){
    echo "$note : Nul, étudie la prochaine fois";
}elseif ($note <= 5){
    echo "$note : Peut mieux faire";
}elseif ($note <= 7){
    echo "$note : Bien";
}else {
    echo " $note : Très bien";
}