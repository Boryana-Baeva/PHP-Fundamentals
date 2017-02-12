<?php

$input = array_map('trim', explode(' ', fgets(STDIN)));
//$input = [0, 1, 1, 2, 2, 3, 3];
//$input = [4, 5, 1, 2, 3, 4, 5];
//$input = [3, 2, 3, 4, 2, 2, 4];
//$input = [3, 4, 5, 6];
$n = count($input);
$longest = 0;
$start = -1;

for ($i = 0; $i < $n; $i++) {
    $length = 1;
    $current = $input[$i];
    for ($k = $i + 1; $k < $n; $k++) {
        if ($input[$k] > $current) {
            $current = $input[$k];
            $length++;
        } else {
            break;
        }
    }

    if ($length > $longest) {
        $longest = $length;
        $start = $i;
    }
   /* else if($length == $longest){
        break;
    }*/

}
/*if ($longest != $n) {
    if($start != 0){
        $output = array_slice($input, $start, $start + $longest - 1);
    } else {
        $output = array_slice($input, $start, $start + $longest);
    }
    echo implode(" ", $output);
} else {
    echo implode(" ", $input);
}*/


echo implode(' ', array_slice($input, $start, $longest));