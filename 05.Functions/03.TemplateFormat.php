<?php

$input = explode(", ",trim(fgets(STDIN)));
$inputCount = count($input);
$xml = "<?xml version='1.0' encoding='UTF-8'?>\n<quiz>\n";
for($i = 0;$i < $inputCount; $i += 2){
    list($question,$answer) = [$input[$i],$input[$i + 1]];
    $xml .= "  <question>\n    {$question}\n" .
        "  </question>\n" .
        "  <answer>\n    {$answer}\n".
        "  </answer>\n";
}
$xml .= "</quiz>";
echo $xml;