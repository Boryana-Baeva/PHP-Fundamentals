<?php

$chunks = explode(", ", trim(fgets(STDIN)));
$chunks = array_map('floatval', $chunks);
$desiredThickness = array_shift($chunks);

$cut = function(int $chunk) {
    return $chunk / 4;
};

$lap = function(int $chunk) {
    return $chunk * 0.80;
};

$grind = function (int $chunk) {
    return $chunk - 20;
};

$etch = function(int $chunk){
    return $chunk - 2;
};

$xRay = function(int $chunk) {
    return ++$chunk;
};

foreach ($chunks as $chunk){

    echo "Processing chunk {$chunk} microns\n";

    $chunk = performOperation($cut, "Cut", $chunk, $desiredThickness);
    $chunk = performOperation($lap, "Lap", $chunk, $desiredThickness);
    $chunk = performOperation($grind, "Grind", $chunk, $desiredThickness);
    $chunk = performOperation($etch, "Etch", $chunk, $desiredThickness);

    if ($chunk < $desiredThickness) {
        $chunk = $xRay($chunk);
        echo "X-ray x1\n";
    }

    echo "Finished crystal {$chunk} microns\n";

}

function performOperation($operation, $operationName, $thickness, $desiredThickness)
{
    $repetitions = 0;
    while (true) {
        $thicknessReached = $operation($thickness);
        if (floor($thicknessReached) + 1 == $desiredThickness) {
            $thickness = $thicknessReached;
            $repetitions++;
            break;
        }
        if ($thicknessReached < $desiredThickness) {
            break;
        }

        $thickness = $thicknessReached;
        $repetitions++;


    }

    if ($repetitions > 0) {
        echo "{$operationName} x{$repetitions}\n";
        echo "Transporting and washing\n";
        $thickness = floor($thickness);
    }

    return $thickness;

}
