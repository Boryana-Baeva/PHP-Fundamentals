<?php
//$input = explode(", ", "0, 0, 2, 0, 4, 0");
$input = explode(", ", trim(fgets(STDIN)));
$input = array_map('floatval', $input);
list($x1, $y1, $x2, $y2, $x3, $y3) = [$input[0], $input[1], $input[2], $input[3], $input[4], $input[5]];

$distance12 = calculateDistance($x1, $y1, $x2, $y2);
$distance13 = calculateDistance($x1, $y1, $x3, $y3);
$distance23 = calculateDistance($x2, $y2, $x3, $y3);

if ($distance12 <= $distance13 && $distance12 <= $distance23) {
    if ($distance13 <= $distance23) {
        $a = $distance12 + $distance13;
        echo "1->2->3: {$a}";
    } else {
        $a = $distance12 + $distance23;
        echo "1->2->3: {$a}";
    }
} else if ($distance13 <= $distance12 && $distance13 <= $distance23) {
    if ($distance12 <= $distance23) {
        $b = $distance12 + $distance13;
        echo "2->1->3: {$b}";
    } else {
        $b = $distance13 + $distance23;
        echo "1->3->2: {$b}";
    }
} else {
    if ($distance12 <= $distance13) {
        $c = $distance12 + $distance23;
        echo "1->2->3: {$c}";
    } else {
        $c = $distance13 + $distance23;
        echo "1->3->2: {$c}";
    }
}

function calculateDistance($xA, $yA, $xB, $yB){
    $deltaX = $xA - $xB;
    $deltaY = $yA - $yB;
    return sqrt(pow($deltaX, 2) + pow($deltaY, 2));
}
