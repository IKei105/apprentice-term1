<?php

//入力する処理
echo 'n : ';
$num = (int)trim(fgets(STDIN));
while(!(0 <= $num and $num <= 30)) {
    echo '1から30の間で、数字を入力してください: ';
    $num = (int)trim(fgets(STDIN));
}

//入力された数字に対してフィボナッチを出力する処理
function fibonacci(int $num): void
{   
    $totalNum = 0;
    $prevNum = 0;
    $currentNum = 1;
    for ($i = 1; $i <= $num; $i++) {
        $prevNum = $currentNum;
        $currentNum = $totalNum;
        $totalNum = $prevNum + $currentNum;
    }

    echo $totalNum . PHP_EOL;
}

fibonacci($num);