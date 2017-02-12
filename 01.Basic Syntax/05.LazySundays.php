<?php

$timezone = new DateTimeZone('Europe/Sofia');
$beginning = new DateTime('first day of this month', $timezone);
$end = new DateTime('last day of this month', $timezone);

while ($beginning <= $end) {

    if ($beginning->format('D') == 'Sun') {
        echo $beginning->format('jS F, Y') . "<br>";
        $beginning->modify('+7 day');
    } else {
        $beginning->modify('+1 day');
    }

}