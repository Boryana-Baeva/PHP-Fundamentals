<?php

$input = [4, 4, 4, 4];
$n = count($input);
$start = 0;
$len = 1;
$startArr = [];
$lenArr = [];
$bestStart = 0;
$bestLen = 0;

for($p = 1; $p < $n; $p++){
    if($input[$p] == $input[$p - 1]){
        $len++;
        if($p == $n - 1){
            $startArr[] = $start;
            $lenArr[] = $len;
        }
    } else {
        $startArr[] = $start;
        $lenArr[] = $len;
        $start = $p;
        $len = 1;
    }
}

for($i = 1; $i < count($lenArr); $i++){
    if($lenArr[$i] > $lenArr[$i - 1]){
        $bestStart = $startArr[$i];
        $bestLen = $lenArr[$i];
    } else if($lenArr[$i] == $lenArr[$i - 1]){
        break;
    }
}

print_r($lenArr);
print_r($startArr);
echo $bestLen;
echo $bestStart;
$sequence = array_splice($input, $bestStart, $bestLen);
echo implode(" ", $sequence);


