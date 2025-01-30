<?php

$num = mt_rand(0, 10);

if ($num <= 3) {
    echo "$num : Nul, étudie la prochaine fois";
}elseif ($num >= 4 && $num <= 5) {
    echo "$num : Peut mieux faire";
}elseif ($num == 6 || $num == 7) {
    echo "$num : Bien";
}else {
    echo "$num : Très bien";
}
?>
