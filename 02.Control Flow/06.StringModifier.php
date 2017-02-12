<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>String Modifier</title>
</head>
<style>
    .modifiers {
        margin: 5px;
        padding: 5px;
    }
</style>
<body>

<form>
    <input type="text" name="input" required>
    <span class="modifiers">
    <input type="radio" name="modify" value="Check Palindrome" checked>Check Palindrome
    <input type="radio" name="modify" value="Reverse String">Reverse String
    <input type="radio" name="modify" value="Split">Split
    <input type="radio" name="modify" value="Hash String">Hash String
    <input type="radio" name="modify" value="Shuffle String">Shuffle String
    </span>
    <input type="submit" value="Submit" name="button">
</form>

<?php
if (isset($_GET['input']) && isset($_GET['modify'])) {
    $input = $_GET['input'];
    $modification = $_GET['modify'];

    switch ($modification) {
        case "Check Palindrome":
            is_palindrome($input);
            break;
        case "Reverse String":
            echo strrev($input);
            break;
        case "Split":
            $splitArr = str_split($input);
            echo implode(" ", $splitArr);
            break;
        case "Hash String":
            echo password_hash($input, PASSWORD_DEFAULT);
            break;
        case "Shuffle String":
            $splitArr = str_split($input);
            shuffle($splitArr);
            foreach ($splitArr as $char){
                echo $char;
            }
            break;
    }
}

function is_palindrome($str)
{
    $reversed = strrev(strtolower($str));
    $reversedArr = str_split($reversed);
    $palindrome = '';

    foreach ($reversedArr as $char) {
        $palindrome .= $char;
    }

    if ($palindrome == strtolower($str)) {
        echo "{$str} is a palindrome!";
    } else {
        echo "{$str} is not a palindrome!";
    }
}
?>
</body>
</html>

