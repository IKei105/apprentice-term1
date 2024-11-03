<?php

function printName(array $names): void
{
    $number = 1;
    //名前を順番に出力する処理
    foreach($names as $key => $name) {
        echo $number . '. ' . $name . PHP_EOL;
        $number++;
    }
}

printName(['上田', '田仲', '堀田']);