<?php

$num1 = intval(fgets(STDIN));
$num2 = intval(fgets(STDIN));
$num3 = intval(fgets(STDIN));

$largest12 = max($num1, $num2);
$largest = max($largest12, $num3);

echo "Max: {$largest}";