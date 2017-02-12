<?php

$input = fgets(STDIN);
$letters = [];

for ($i = 0; $i < strlen($input) - 1; $i++) {
    $letter = $input[$i];
    if (!array_key_exists($letter, $letters)) {
        $letters[$letter] = 0;
    }
    $letters[$letter]++;
}

foreach ($letters as $key => $value) {
    echo "{$key} -> {$value}\n";
}