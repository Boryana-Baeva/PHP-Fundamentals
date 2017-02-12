<?php

$a = 'Hello';
//$a = 15;
//$a = 1.234;
//$a = array(1,2,3);
//$a = (object)[2, 34];

if (is_numeric($a)) {
    var_dump($a);
} else {
    echo gettype($a);
}
