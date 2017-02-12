<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sums of digits</title>
    <style>
        table {
            border: 1px solid;
            padding: 1px;
            margin-top: 30px;
        }

        td {
            border: 1px solid;
            padding: 1px;
            text-align: left;
            width: auto;
        }
    </style>
</head>
<body>

<form>
    Input string: <input type="text" name="input" required>
    <input type="submit" value="Submit" name="button">
</form>
<table>
    <?php
    if (isset($_GET['input'])) {
        $input = $_GET['input'];
        $inputArr = explode(",", $input);

        foreach ($inputArr as $item) {
            if (strval($item) == strval(intval($item))) {
                $digitSum = array_sum(str_split($item));
            } else {
                $digitSum = "I cannot sum that";
            }
            echo "<tr><td>$item</td><td>$digitSum</td></tr>";
        }
    }

    ?>
</table>
</body>
</html>

