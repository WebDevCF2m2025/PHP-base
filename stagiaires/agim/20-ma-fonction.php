<?php 
function estPair($nbr){
    return $nbr %2 === 0 ? "$nbr est un nombre pair" : "$nbr est un nombre impaire";
}

echo estPair(10);