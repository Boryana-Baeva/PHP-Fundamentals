<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculate Two Numbers</title>
</head>
<body>
<form method="get">
    <div>
        Operation:
        <select name="operation">
            <option value="sum">Sum</option>
            <option value="subtract">Subtract</option>
        </select>
    </div>
    <div>
        Number 1:
        <input type="text" name="number-one">
    </div>
    <div>
        Number 2:
        <input type="text" name="number-two">
    </div>
    <div>
        <input type="submit" name="calculate" value="Calculate!">
    </div>
</form>

<?php
if (isset($_GET['calculate'])) {
    $operation = $_GET['operation'];
    $num1 = $_GET['number-one'];
    $num2 = $_GET['number-two'];

    echo "<ul>";
    if ($operation == "sum") {
        echo "<li style='color: red;'>" . ($num1 + $num2) . "</li>";
    } else if ($operation == "subtract") {
        echo "<li style='color: red;'>" . ($num1 - $num2) . "</li>";
    } else {
        echo "<li style='color: red;'>Invalid operation supplied</li>";
    }
    echo "</ul>";
}
?>
</body>
</html>

