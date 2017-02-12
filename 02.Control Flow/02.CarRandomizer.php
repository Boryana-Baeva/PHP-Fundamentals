<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Car Randomizer</title>
    <style>
        table {
            border: 1px solid;
            padding: 1px;
            margin-left: 80px;
            margin-top: 30px;
        }

        th, td {
            border: 1px solid;
            padding: 3px;
            text-align: center;
        }

        #cars {
            background-color: lemonchiffon;
            width: 200px;
        }
    </style>
</head>
<body>
<form>
    Enter cars <input type="text" name="cars" id="cars" required>
    <input type="submit" value="Show result" name="button">
</form>


<?php
if (isset($_GET['cars'])) { ?>
<table>
    <tr>
        <th>Car</th>
        <th>Color</th>
        <th>Count</th>
    </tr>

    <?php $carsArr = explode(", ", $_GET['cars']);
          $colorArr = ['yellow', 'red', 'green', 'blue', 'white'];
          $countArr = range(1,5);

        foreach ($carsArr as $car) {
            $randColor = array_rand($colorArr);
            $randCount = array_rand($countArr);
            echo "<tr><td>$car</td><td>$colorArr[$randColor]</td><td>$countArr[$randCount]</td></tr>";
        }
    }
    ?>
</table>
</body>
</html>

