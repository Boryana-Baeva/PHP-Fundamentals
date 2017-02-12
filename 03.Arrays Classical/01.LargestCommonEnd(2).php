<?php

$firstArr = explode(" ",fgets(STDIN));
$secondArr = explode(" ",fgets(STDIN));
$firstCount = count($firstArr);
$secondCount = count($secondArr);
$longer = max($firstCount, $secondCount);
$shorter = min($firstCount, $secondCount);
$left = 0;
$right = 0;

for($i = 0;$i < $shorter; $i++){
    if($firstArr[$i] != $secondArr[$i]){
        break;
    }
    $left++;
}

$firstReversed = array_reverse($firstArr);
$secondReversed = array_reverse($secondArr);

for($i = 0;$i < $shorter; $i++){
    if($firstReversed[$i] != $secondReversed[$i]){
        break;
    }
    $right++;
}

echo max($left, $right);

