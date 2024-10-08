<?php

//数字の入力処理
echo 'n : ';
$number = (int)trim(fgets(STDIN));
while(!(1 <= $number and $number <= 100)) {
    echo '1から100の間で、数字を入力してください: ';
    $number = (int)trim(fgets(STDIN));
}

function sheepSleep(int $number): void
{
    for ($i = 1; $i <= $number; $i++) {
        echo '羊が' . $i . '匹' . PHP_EOL;
    }
}

sheepSleep($number);
