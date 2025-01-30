<?php
$randomNumber = rand(0, 10);
$result;
if ($randomNumber >= 0 && $randomNumber <= 3) {
  $result = 'nul, étudie la prochaine fois !! ';
} elseif ($randomNumber >= 4 && $randomNumber <= 5) {
  $result = 'peut mieux faire..';
} elseif ($randomNumber >= 6 && $randomNumber <= 7) {
  $result = 'Bien.';
} else {
  $result = 'trés bien !';
}
echo $randomNumber . '/10' . " : " . $result;
