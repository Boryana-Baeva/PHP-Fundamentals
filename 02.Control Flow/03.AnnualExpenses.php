<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Annual Expenses</title>
    <style>
        table {
            border: 1px solid;
            padding: 1px;
            margin-top: 30px;
        }
        th, td {
            border: 1px solid;
            padding: 3px;
            text-align: center;
        }
    </style>
</head>
<body>

<form>
    Enter number of years <input type="text" name="years" required>
    <input type="submit" value="Show costs" name="button">
</form>

<?php
if (isset($_GET['years'])) { ?>
<table>
    <tr>
        <th>Years</th>
        <?php
        for ($i = 1; $i <= 12; $i++) {
            $monthNum = $i;
            $monthName = date('F', mktime(0, 0, 0, $monthNum, 10));
            echo "<th>$monthName</th>";
        }
        ?>
        <th>Total:</th>
    </tr>

    <?php
    $years = intval($_GET['years']);
    $startYear = date("Y") - 1;
    $endYear = $startYear - $years;
    for ($i = $startYear; $i > $endYear; $i--) {?>
        <tr>
            <?php
            $randomCostsArr = range(0, 999);
            shuffle($randomCostsArr);
            $totalCost = 0;
            echo "<td>$i</td>";

            for ($j = 0; $j < 12; $j++) {
                $totalCost += $randomCostsArr[$j];
                echo "<td>$randomCostsArr[$j]</td>";
            }
            echo "<td>$totalCost</td>";
            $totalCost = 0;
            ?>
        </tr>
        <?php
    }
} ?>
</table>
</body>
</html>

