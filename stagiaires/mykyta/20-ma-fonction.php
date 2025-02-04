<?php
function pair($nombr){
    if ($nombr % 2 == 0){
        echo "$nombr est pair\n";
    }else{
        echo "$nombr n'est pas pair\n";
    }
 }

 pair(5);
 pair(4);
?>