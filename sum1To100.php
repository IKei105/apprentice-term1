<?php

//1から100まで加算し出力する関数
function sum_1_100(): void
{
    $totalNum = 0;
    for ($i = 1; $i <= 100; $i++) {
        $totalNum+=$i;
    }
    echo $totalNum . PHP_EOL;
}

sum_1_100();