<?php

$random = mt_rand(1,20);
if ($random % 2 === 0){
    echo "Le nombre est pair : " . $random;
} else {
    echo "Le nombre est impair : " . $random;
}


?>