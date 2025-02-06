<?php
function calcoule($a, $b, $c){
    echo $a, $b, $c."\n";
    if ($b == "/" && $c == 0){        
        $reponse = "Tu ne peux pas diviser par 0 !";
    }elseif ($b=="+"){
        $reponse = ($a + $c);
    }elseif ($b == "-"){
        $reponse = $a - $c;
    }elseif ($b == "*"){
        $reponse = $a * $c;
    }else{
        $reponse = $a / $c;
    }
    return $reponse;
}
$test = ["+", "-", "*", "/"];
echo calcoule(mt_rand(0,10), $test[mt_rand(0,3)], mt_rand(0,10));