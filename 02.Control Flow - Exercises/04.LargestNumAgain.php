<?php

$largest = -INF;
while ($number = intval(fgets(STDIN))) {
    $largest = max($largest, $number);
}
echo "Max: {$largest}";