<?php

//数字を入力
echo 'x : ';
$number1 = (int)trim(fgets(STDIN));
echo 'y : ';
$number2 = (int)trim(fgets(STDIN));

//入力された数字を比較する
function greater(int $number1, int $number2): void
{
    if($number1 > $number2) {
        echo 'x > y' . PHP_EOL;
    } elseif ($number1 < $number2) {
        echo 'x < y' . PHP_EOL;
    } else {
        echo 'x == y' . PHP_EOL;
    }
}

greater($number1, $number2);