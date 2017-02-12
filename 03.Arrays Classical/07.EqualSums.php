<?php

$input = array_map('trim', explode(' ', fgets(STDIN)));
$input = array_map('intval', $input);
$count = count($input);
$index = -1;

for ($i = 0; $i < $count; $i++) {
    $left = array_slice($input, 0, $i);
    $right = array_slice($input, $i + 1);

    if ($i == 0) {
        if ($count == 1) {
            $sumLeft = 0;
            $sumRight = 0;
        } else {
            $sumLeft = 0;
            $sumRight = array_sum($right);
        }
    } else if ($i == $count - 1) {
        $sumLeft = array_sum($left);
        $sumRight = 0;
    } else {
        $sumLeft = array_sum($left);
        $sumRight = array_sum($right);
    }

    if ($sumLeft == $sumRight) {
        $index = $i;
    }
}

if ($index != -1) {
    echo $index;
} else {
    echo "no";
}