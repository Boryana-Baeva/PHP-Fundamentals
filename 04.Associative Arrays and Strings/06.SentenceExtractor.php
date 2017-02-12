<?php

$text = trim(fgets(STDIN));
$word = trim(fgets(STDIN));

preg_match_all("/([^.?!]*\\b" . $word . "\\b[^.?!]*[.?!])/", $text, $result);
$sentences = array_map('trim',$result[0]);
echo implode("\n", $sentences);
