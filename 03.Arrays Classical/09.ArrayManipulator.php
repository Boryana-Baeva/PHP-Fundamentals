<?php

$input = array_map('intval', explode(" ", fgets(STDIN)));
$commands = [];
while ($command = trim(fgets(STDIN))) {
    $commands[] = $command;
    if (strpos($command, 'print') !== false) {
        break;
    }
}

foreach ($commands as $command) {
    $command = explode(" ", $command);
    $cmd = $command[0];
    if ($cmd == "add") {
        $index = $command[1];
        $element = $command[2];
        array_splice($input, $index, 0, $element);

    } else if ($cmd == "addMany") {
        $index = $command[1];
        $added = array_slice($command, 2);
        array_splice($input, $index, 0, $added);

    } else if ($cmd == "contains") {
        $element = $command[1];
        $position = array_search($element, $input);
        if ($position !== false) {
            echo $position . "\n";
        } else {
            echo "-1\n";
        }

    } else if ($cmd == "remove") {
        $index = $command[1];
        array_splice($input, $index, 1);

    } else if ($cmd == "shift") {
        $rotations = $command[1];
        for ($i = 0; $i < $rotations; $i++) {
            $first = array_shift($input);
            $input[] = $first;
        }

    } else if ($cmd == "sumPairs") {
        $output = [];
        for ($i = 0, $j = 0; $i < count($input); $i += 2, $j++) {
            if (array_key_exists($i + 1, $input)) {
                $output[$j] = $input[$i] + $input[$i + 1];
            } else {
                $output[$j] = $input[$i];
            }
        }
        $input = $output;

    } else if ($cmd == "print") {
        $print = implode(", ", $input);
        echo "[{$print}]";

    }
}
