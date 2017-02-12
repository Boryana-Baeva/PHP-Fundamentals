<?php
/*$input = array_map('trim', explode(' ', fgets(STDIN)));
//$input = array_intersect($input, range(0, 65535));
$occurrences = array_count_values($input);             // Некоректно поведение на array_count_values при отрицателни стойности
$mostFrequent = strval(max($occurrences));

echo array_search($mostFrequent, $occurrences);

*/


$inputNumbers = trim(fgets(STDIN));
//$inputNumbers = "2 2 2 2 1 2 2 2";
$inputArray = explode(" ", $inputNumbers);

$arrayCount = array_count_values($inputArray);
arsort($arrayCount);
$maxValue = max($arrayCount);
echo array_keys($arrayCount)[0];