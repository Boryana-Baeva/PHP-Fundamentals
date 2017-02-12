<?php

$input = floatval(trim(fgets(STDIN)));
$commands = explode(", ",trim(fgets(STDIN)));

foreach ($commands as $command) {
    echo performCommand($command, $input) ."\n";
}


function performCommand($cmd, &$num){
    if($cmd === "chop"){
        $num = $num / 2 ;
    } elseif ($cmd === "dice"){
        $num = sqrt($num);
    } elseif ($cmd === "spice"){
        $num = $num + 1;
    } elseif ($cmd === "bake"){
        $num = $num * 3;
    } elseif ($cmd === "fillet"){
        $num = $num * 0.8;
    }
    return $num;
}



/*foreach ($commands as $command){
    if($command === "chop"){
        $input = chopNum($input);
    } elseif ($command === "dice"){
        $input = dice($input);
    } elseif ($command === "spice"){
        $input = spice($input);
    } elseif ($command === "bake"){
        $input = bake($input);
    } elseif ($command === "fillet"){
        $input = fillet($input);
    }
    echo round($input, 1)."\n";
}

function chopNum(&$num){
    return $num / 2;
}

function dice(&$num){
    return sqrt($num);
}

function spice(&$num){
    return $num + 1;
}

function bake(&$num){
    return $num * 3;
}

function fillet(&$num){
    return $num * 0.8;
}*/