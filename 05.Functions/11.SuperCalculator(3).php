<?php

$output = [];
while (true) {
    $command = trim(fgets(STDIN));

    if ($command === "finally") {
        break;
    }

    $reflection = new ReflectionFunction($command);
    $argsCount = $reflection->getNumberOfParameters();
    $arguments = [];
    for ($i = 0; $i < $argsCount; $i++) {
        $arguments[] = intval(trim(fgets(STDIN)));
    }

    try {
        $output[] = $command(...$arguments);
    } catch (Exception $e) {
        echo "Caught exception: " . $e->getMessage() . "\n";
    }

}

while (true) {
    $command = trim(fgets(STDIN));
    $reflection = new ReflectionFunction($command);
    $argsCount = $reflection->getNumberOfParameters();
    $arguments = [];
    try{
        if($argsCount == 1){
            for($i = 0; $i < count($output); $i++){
                $output[$i] = $command($output[$i]);
            }
            break;
        }

        while(count($output) >= $argsCount){
            $arguments = array_splice($output, 0, $argsCount);
            $output[] = $command(...$arguments);
        }
    } catch (Exception $e){
        echo "Caught exception: " . $e->getMessage() . "\n";
        array_splice($output, 0, 0, $arguments);
        continue;
    }
    
    break;
    
}

echo implode(", ", $output);

function sum($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
    if ($b == 0) {
        throw new Exception("Division by zero.");
    }
    return $a / $b;
}

function factorial($a)
{
    $result = 1;
    for ($i = $a; $i > 1; $i--) {
        $result *= $i;
    }
    return $result;
}

function root($a)
{
    if ($a < 0) {
        throw new Exception("Can't take the root of a negative number");
    }
    return sqrt($a);
}

function absolute($a)
{
    return abs($a);
}

function power($a, $b)
{
    return pow($a, $b);
}

function pythagorean($a, $b)
{
    return sqrt(pow($a, 2) + pow($b, 2));
}

function triangleArea($a, $b, $c)
{
    $s = ($a + $b + $c) / 2;
    $area = sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));

    if (is_nan($area)) {
        throw new Exception("Can't take the root of a negative number");
    }
    return round($area);
}

function quadratic($a, $b, $c)
{

    if ($a == 0) {
        throw new Exception("Division by zero.");
    }

    $d = pow($b, 2) - 4 * $a * $c;
    $x = 0;

    if ($d === 0) {
        $x = (-$b / 2 * $a);
    } else if ($d > 0) {
        $x1 = (-$b + sqrt($d)) / (2 * $a);
        $x2 = (-$b - sqrt($d)) / (2 * $a);
        $x = round($x1 + $x2);
    }

    return $x;
}