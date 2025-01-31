<?php

for($i=10; $i>0; $i--){
    echo "$i ";
}

 echo "<br>";

for($i=0;$i<=20; $i+=2){
    echo "$i ";
}
echo "<br>";
$sum=0;
for($i=1;$i<=20; $i++){
    $sum += $i;
    echo "$i ";
    }
echo " la somme des nombre entre 1 et 20 : $sum ";

echo "<br>";

for($i=1;$i<=20; $i++){
   if($i%2==0){
       echo "$i - pair |";
   }else{
       echo "  $i - impair | ";
    }
}
echo " la somme des nombre entre 1 et 20 : $sum ";
echo "<br>";
$sum1=0;
for($i=1;$i<=20; $i++){
   
    $sum1 += $i;
    if($sum1%2==0){
        echo " la somme est : $sum1 - pair |";
    }else{
        echo " la somme est : $sum1 - impair | ";
     }
 }
 echo "<br>";
 for($i=1;$i<=5; $i++){
    for($j=1;$j<=5; $j++){
        echo "$i x $j = ".$i*$j." | ";
        }
        echo "<br>";
}
?>
