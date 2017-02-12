<?php

$firstArr = explode(" ",fgets(STDIN));
$secondArr = explode(" ",fgets(STDIN));
$firstCount = count($firstArr);
$secondCount = count($secondArr);
$longer = max($firstCount, $secondCount);
$shorter = min($firstCount, $secondCount);
$diff = $longer - $shorter;
$left = 0;
$right = 0;

for($i = 0;$i < $shorter; $i++){
    if($firstArr[$i] != $secondArr[$i]){
        break;
    }
    $left++;
}

for($i = $longer - 1, $j = $shorter - 1; $i > $diff; $i--,$j--){
    if($longer == $firstCount){
        if($firstArr[$i] != $secondArr[$j]){
            break;
        }
        $right++;
    } else if($longer == $secondCount){
        if($secondArr[$i] != $firstArr[$j]){
            break;
        }
        $right++;
    }
}

echo max($left, $right);
