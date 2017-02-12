<?php

function dayOfWeek(string $day){
    $week = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
    $dayNum = "error";
    for ($i = 0; $i < 7; $i++) {
        if ($day == $week[$i]) {
            $dayNum = $i + 1;
        }
    }
    return $dayNum;
}

echo dayOfWeek(trim(fgets(STDIN)));
