<?php

function isPalindrome($str){
    for ($i = 0; $i < strlen($str) / 2; $i++) {
        if ($str[$i] != $str[strlen($str) - $i - 1]) {
            return "false";
        }
    }
    return "true";
}

echo isPalindrome(trim(fgets(STDIN)));
//echo isPalindrome("abba");
//echo isPalindrome("abbahhh");