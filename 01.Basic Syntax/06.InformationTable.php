<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Information Table</title>
    <style>
        table {
            border-collapse: collapse;
            table-layout: fixed;
        }
        td {
            border: 1px solid saddlebrown;
            padding: 5px;
        }
        #keys{
            background: sandybrown;
        }
        #values{
            text-align: right;
        }
    </style>
</head>
<body>

<?php
$info = [];
$info['Name'] = "Yana";
$info['Phone number'] =  "0882-321-423";
$info['Age'] = 24;
$info['Address'] = "Someplace nice";
?>

<table>
    <?php foreach($info as $key => $value): ; ?>
    <tr>
        <td id = "keys"><?php echo $key;?></td>
        <td id = "values"><?php echo $value;?></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>