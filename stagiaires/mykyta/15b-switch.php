<?php
$note = rand(0, 10);

switch($note) {
        case "0":
        case "1":
        case "2":
        case "3":
            echo "$note : Nul, étudie la prochaine fois";
            break;
    
        case "4":
        case "5":
        case "6":
             echo "$note : Peut mieux faire";
             break;

        case "6":
        case "7":
            echo "$note :  Bien";
             break;

        default: 
             " $note : Très bien";
}