<?php
// exercice 1
for ($i=10;$i>0;$i--){
    echo $i, " ";
}

// exercice 2
for ($i=0;$i<=20;$i+=2){
    echo $i, " ";
}

// exercice 3
$nombre=0;
for ($i=0;$i<=20;$i++){
    echo $i, " ";
    $nombre += $i;
}
echo "la somme des nombres de 1 à 20 est:", $nombre;

// exercice 4

$nombres=0;
for ($i=0;$i<=20;$i++){
    echo $i, " ";
    if($i %2 == 0){
        echo "pair |";
    }else{
        echo "impair |";
    }
    $nombres += $i;
}
echo "la somme des nombres de 1 à 20 est: ", $nombres;

// exercice 5


for ($i=0;$i<=20;$i++){
    $nombr=0;
    $nombr += $i;
    echo $nombr, " ";
    if($nombr %2 == 0){
        echo "la somme est pair |";
    }else{
        echo "la somme est impair |";
    }

}

// exercice 6

for ($i=1;$i<=5;$i++){
    for ($a=1;$a<=5;$a++){
        $reponse= $i * $a;
    echo $i, "x", $a, "=", $reponse, " | ";
    } 
}

?>