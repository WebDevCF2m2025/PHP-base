<?php 

$nombre = mt_rand(0,10);

if($nombre <= 3){
        echo "{$nombre} : Nul, étudie la prochaine fois";
}else if($nombre > 3 && $nombre < 6) {
        echo "{$nombre} : Peut mieux faire";
}else if($nombre == 6 || $nombre == 7) {
        echo "{$nombre} : Bien";
}else if($nombre > 7) {  
        echo "{$nombre} : Très bien";
}