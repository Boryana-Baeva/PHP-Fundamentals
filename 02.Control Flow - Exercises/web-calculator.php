<?php
$output = "";
if (isset($_GET['calculate'])) {
    $operation = $_GET['operation'];
    $num1 = $_GET['number-one'];
    $num2 = $_GET['number-two'];

    if ($operation == "sum") {
        $output = $num1 + $num2;
    } else if ($operation == "subtract") {
        $output = $num1 - $num2;
    } else {
        $output = "Invalid operation supplied";
    }
}

include 'web-calculator-frontend.php';