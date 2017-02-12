<?php

$output = "";
if (isset($_GET['filter'])) {
    $delimiter = $_GET['delimiter'];
    $names = $_GET['names'];
    $ages = $_GET['ages'];
    $namesArr = explode($delimiter, $names);
    $agesArr = explode($delimiter, $ages);
}

include 'web-students-frontend.php';