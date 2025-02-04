<?php
$rand = mt_rand (0,10);
switch ($rand){

    case 0: 
    case 1:
    case 2:
    case 3:
        echo "$rand : Nul , etudie la prochaine fois ";
        break; 

    case 4: 
    case 5: 
        echo "$rand : peut mieux faire";
        break;

    case 6:      
    case 7: 
        echo "$rand : bien ";
        break;

    default:
        echo "$rand : tres bien " ;   


}













?>