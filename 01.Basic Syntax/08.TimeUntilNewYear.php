<?php

date_default_timezone_set("UTC");

$currentTime = strtotime(date("d-m-Y G:i:s"));
$currentYear = date("Y");
$newYear = strtotime("31-12-{$currentYear} 23:59:59");
$diff = $newYear - $currentTime;

echo 'Hours until new year : ' . number_format(floor($diff / 60 / 60), 0, '.', '') . "\n";
echo 'Minutes until new year : ' . number_format(floor($diff / 60), 0, '.', ' ') . "\n";
echo 'Seconds until new year : ' . number_format($diff, 0, '.', ' ') . "\n";

$days = floor($diff / 60 / 60 / 24);
$hours = floor($diff / 60 / 60) % $days;
$minutes = floor($diff / 60) % 60;
$seconds = $diff % 60;
echo "Days:Hours:Minutes:Seconds {$days}:{$hours}:{$minutes}:{$seconds}";