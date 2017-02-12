<?php

$input = explode(" ",fgets(STDIN));
$input = array_map('intval',$input);
$k = intval(fgets(STDIN));
$n = count($input);
$sums = array_fill(0, $n, 0);

for($r=0; $r < $k; $r++){
    rotateArray($input);
    sumArrayElements($input, $n, $sums);
}

echo implode(" ", $sums);

function rotateArray(&$arr){
    $lastElement = trim(array_pop($arr));
    array_unshift($arr, $lastElement);
}

function sumArrayElements($inputArr, $arrCount, &$sumArr){
    for($i = 0; $i < $arrCount; $i++){
        $sumArr[$i] += $inputArr[$i];
    }
}


