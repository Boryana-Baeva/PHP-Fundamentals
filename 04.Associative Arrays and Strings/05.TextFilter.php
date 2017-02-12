<?php

$input = trim(fgets(STDIN));
$banned = explode(", ", trim(fgets(STDIN)));

foreach ($banned as $ban) {
    $length = strlen($ban);
    $input = str_replace($ban, str_repeat("*", $length), $input);
}

echo $input;