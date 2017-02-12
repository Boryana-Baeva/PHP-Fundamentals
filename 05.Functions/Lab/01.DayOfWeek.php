<?php

/*function dayOfWeek(string $day)
{
    if ($day == 'Monday') {
        return "1";
    } else if ($day == 'Tuesday') {
        return 2;
    } else if ($day == 'Wednesday') {
        return 3;
    } else if ($day == 'Thursday') {
        return 4;
    } else if ($day == 'Friday') {
        return 5;
    } else if ($day == 'Saturday') {
        return 6;
    } else if ($day == 'Sunday') {
        return 7;
    }
    return "error";

}

echo dayOfWeek(trim(fgets(STDIN)));*/

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
