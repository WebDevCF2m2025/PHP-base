<?php
$numRandom = rand(1, 20);
$result;

if ($numRandom % 2 === 0) {
  $result = 'pair';
} else {
  $result = 'impair';
}

echo $numRandom . '<br>';
echo $result;
