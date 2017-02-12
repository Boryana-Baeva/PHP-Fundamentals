<?php

$input = array_map('trim', explode(' ', fgets(STDIN)));
$n = count($input);
$longest = 0;
$start = -1;

for ($i = 0; $i < $n; $i++) {
    $length = 1;
    for ($j = $i + 1; $j < $n; $j++) {
        if ($input[$j] == $input[$i]) {
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

echo implode(' ', array_fill(0, $longest, $input[$start]));