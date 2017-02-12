<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Primes in range</title>
</head>
<body>

<form>
    Start: <input type="text" name="start" required>
    End: <input type="text" name="end" required>
    <input type="submit" value="Submit" name="button">
</form>

<?php
if (isset($_GET['start']) && isset($_GET['end'])) {
    $start = intval($_GET['start']);
    $end = intval($_GET['end']);
    $nums = range($start, $end);
    $result = '';

    foreach ($nums as $num) {
        if (is_prime($num)) {
            $num = "<b>$num</b>";
        }
        $result .= $num . ", ";
    }

    $result = rtrim($result, ", ");
    echo $result;
}

function is_prime($n)
{
    if ($n == 2) return true;
    if ($n % 2 != 1 || $n == 1) return false;
    $d = 3;
    $x = sqrt($n);
    while ($n % $d != 0 && $d < $x) $d += 2;
    return (($n % $d == 0 && $n != $d) * 1) == 0 ? true : false;
}

?>

</body>
</html>

