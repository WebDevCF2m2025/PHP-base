<?php

// exe1
utilisation de la decrementation ($i--)
for ($i=10; $i>=1; $i--){
 echo "$i ";
}


 
// exe2
for ($i=0; $i<20; $i+=2)
echo "$i";


// exe3

$somme = 0;
for ( $i= 1; $i<20 ; $i++){
echo "$i";
on ajoute $i a la somme 
$somme +=$i;
}
echo la somme des nombre est deja a ".$somme"

// exe4

$somme =0;
for ( $i= 1; $i<=20 ; $i++){
echo "$i "; // on ajoute $i a la somme 
$somme+=$i;
}
echo "la somme des nombre est deja a $somme";


// ex5
$somme= 0;
for($i=1;$i<=20;$i++){
     $somme+=$i;
     if($somme %2===0){
        echo "la somme est pair: $somme|";


     }else{
        echo "la somme est impair: $somme |";
     }
    }

echo $somme % 2===0 ? "la somme est pair: $somme| " : "la somme est impair : $somme |";

//  exe5 en tenaire

    $somme= 0;
for($i=1;$i<=20;$i++){
      $somme+=$i;
}  
    $pair = $somme % 2===0 ? "pair" : "impair";
    echo"la somme est $pair : $somme |";


  
    
// exercice 6

for ($i=1;$i<=5;$i++){
    for ($b=1;$a<=5;$b++){
        $reponse= $i * $a;
    echo $i, "x", $b, "=", $reponse, " | ";
    } 
}

?>


