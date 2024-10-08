<?php

echo '好きな数値を入力してください： ';
$input = trim(fgets(STDIN));

if (is_numeric($input)) {
    $fiveTimesValue = (int)$input*2;
    echo '2倍の数値です：' . $fiveTimesValue . PHP_EOL;
} else {
    echo '数字を入力してください。' . PHP_EOL;
}