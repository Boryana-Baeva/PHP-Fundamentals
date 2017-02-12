<?php

$n = 1234;

$d = $n;
$digitCount = 0;
$digitArr = array();

while ($d >= 1) {
    $digitCount++;
    $d /= 10;
}

if ($digitCount < 3) {
    echo "no";
} else {
    $limit = $n < 1000 ? $n : 1000;
    $result = '';
    for ($i = 102; $i <= $limit; $i++) {

        for ($k = 3; $k > 0; $k--) {
            $digit = floor($i % pow(10, ($k)) / pow(10, ($k - 1)));
            array_push($digitArr, $digit);

        }
        if (count(array_unique($digitArr)) == count($digitArr)) {
            $result .= $i . ", ";
        }

        $digitArr = [];
    }

    echo rtrim($result, ", ");
}

