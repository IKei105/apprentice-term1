<?php

function fizzBuzz(): void
{
    //数字を1から100まで順番に出力する
    for ($i = 1; $i <= 100; $i++) {
        // 3かつ5の倍数の時「FizzBuzz」と出力する
        if ($i % 3 == 0 and $i % 5 == 0) {
            echo 'FizzBuzz' . PHP_EOL;
        //3の倍数の時「Fizz」と出力する
        } elseif ($i % 3 == 0) {
            echo 'Fizz' . PHP_EOL;
        //5の倍数の時「Buzz」と出力する
        } elseif ($i % 5 == 0) {
            echo 'Bizz' . PHP_EOL;
        } else {
            echo $i . PHP_EOL;
        }
    }
}

fizzBuzz();