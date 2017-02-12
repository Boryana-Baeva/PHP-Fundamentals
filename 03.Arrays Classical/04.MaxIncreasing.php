<?php

$input = array_map('trim', explode(' ', fgets(STDIN)));
$n = count($input);
$longest = 0;
$start = -1;

for ($i = 0; $i < $n; $i++) {
    $length = 1;
    $current = $input[$i];
    for ($k = $i + 1; $k < $n; $k++) {
        if ($input[$k] > $current) {
            $current = $input[$k];
            $length++;
        } else {
            break;
        }
    }

    if ($length > $longest) {
        $longest = $length;
        $start = $i;
    }
}

echo implode(' ', array_slice($input, $start, $longest));
