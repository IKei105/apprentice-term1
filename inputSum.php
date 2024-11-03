<?php
//xとyを入力する処理
echo 'x : ';
$number1 = (int)trim(fgets(STDIN));
while(!(1 <= $number1 and $number1 <= 100)) {
    echo '1から100の間で、数字を入力してください: ';
    $number1 = (int)trim(fgets(STDIN));
}
echo 'y : ';
$number2 = (int)trim(fgets(STDIN));
while(!(1 <= $number2 and $number2 <= 100)) {
    echo '1から100の間で、数字を入力してください: ';
    $number2 = (int)trim(fgets(STDIN));
}

//入力されたxからyまで足していく処理
function inputSum(int $number1, int $number2): void
{
    $totalNum = 0;
    for ($i = $number1; $i <= $number2; $i++) {
        $totalNum+=$i;
    }
    echo $totalNum . PHP_EOL;
}

inputSum($number1, $number2);