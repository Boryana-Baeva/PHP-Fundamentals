<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Render Students</title>
    <style>
        table {
            border: 1px solid;
            padding: 1px;
            margin-top: 15px;
        }

        th, td {
            border: 1px solid;
            padding: 1px;
            width: auto;
        }
    </style>
</head>
<body>
<form method="get">
    <div>
        Delimiter:
        <select name="delimiter">
            <option value=",">,</option>
            <option value="|">|</option>
            <option value="&">&</option>
        </select>
    </div>
    <div>
        Names:
        <input type="text" name="names" required>
    </div>
    <div>
        Ages:
        <input type="text" name="ages" required>
    </div>
    <div>
        <input type="submit" name="filter" value="Filter!">
    </div>

    <?php if (isset($names) && isset($ages)): ?>
        <div>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                </tr>
                <?php foreach (array_combine($namesArr, $agesArr) as $name => $age):
                    if ($age >= 18): ?>
                        <tr>
                            <td><?= $name ?></td>
                            <td><?= $age ?></td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
            </table>
        </div>
    <?php endif; ?>
</form>
</body>
</html>
