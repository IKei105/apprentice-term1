<?php

function square(array $array): array
{   
    //arraymapを使用して2乗して返す処理
    return array_map(fn($num) => $num * $num, $array);
}

$squareNumbers = square([5, 7, 10]);
print_r($squareNumbers);