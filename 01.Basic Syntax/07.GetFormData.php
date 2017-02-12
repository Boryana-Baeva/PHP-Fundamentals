<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Data</title>
    <style>
        input {
            margin: 2px;
            padding: 2px;
        }
    </style>
</head>
<body>
<form>
    <input type="text" name="name" placeholder="Name..." required><br>
    <input type="text" name="age" placeholder="Age..." required><br>
    <input type="radio" name="gender" value="male" checked> Male <br>
    <input type="radio" name="gender" value="female"> Female <br>
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_GET['name']) && isset($_GET['age']) && isset($_GET['gender'])) {
    $name = $_GET['name'];
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    echo "My name is {$name}. I am {$age} years old. I am {$gender}.";
}
?>
</body>
</html>