<?php

$input = array_map('trim', explode(' ', fgets(STDIN)));
$reversedArr = [];

foreach ($input as $element) {
    $reversedArr[] = intval(strrev($element));
}

echo array_sum($reversedArr);