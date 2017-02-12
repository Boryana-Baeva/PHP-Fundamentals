<?php

$text = trim(fgets(STDIN));
$word = trim(fgets(STDIN));

preg_match_all("/([^.?!]*\\b" . $word . "\\b[^.?!]*[.?!])/", $text, $result);
$sentences = array_map('trim',$result[0]);
echo implode("\n", $sentences);



/*$text = preg_split("/[.!?]/", $text);

/*foreach ($text as $sentence) {
    if (preg_match("/(\\b" . $word . "\\b)/", $sentence)) {
        echo "yes\n";
    } else {
        echo "no\n";
    }
}
*/
