<?php

$inputNumbers = trim(fgets(STDIN));
//$inputNumbers = "2 2 2 2 1 2 2 2";
$inputArray = explode(" ", $inputNumbers);

$arrayCount = array_count_values($inputArray);
arsort($arrayCount);
$maxValue = max($arrayCount);
echo array_keys($arrayCount)[0];
