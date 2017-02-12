<?php

$input = str_split(trim(fgets(STDIN)));
$input = array_map('strtolower', $input);
$letters = array_flip(range('a', 'z'));

foreach ($input as $letter){
    echo "{$letter} -> ${letters[$letter]}\n";
}