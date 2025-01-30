<?php

$chiffre = rand(0, 10);

switch($chiffre){
    case ($chiffre >= 0 && $chiffre <= 3): 
        echo "$chiffre : Nul, étudie la prochaine fois";
        break;
    case ($chiffre >= 4 && $chiffre <= 5): 
        echo "$chiffre : Peut mieux faire";
        break;
    case ($chiffre >= 6 && $chiffre <= 7): 
        echo "$chiffre : Bien";
        break;
    default: 
        echo "$chiffre : Très bien";
    }

    echo $chiffre;





 
    
    
    
    