<?php
$a = mt_rand(0,10);
if($a <= 3){
    echo "$a : Nul, étudie la prochaine fois";
}elseif($a <= 5){
    echo "$a : Peut mieux faire";
}else{
    echo "$a : Bien";
}