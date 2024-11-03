<?php

//ブーリアン値の入力
echo 'x : ';
$bool1 = trim(fgets(STDIN));
if ($bool1 == 'true') {
    $bool1 = true;
} else {
    $bool1 = false;
}
echo 'y : ';
$bool2 = trim(fgets(STDIN));
if ($bool2 == 'true') {
    $bool2 = true;
} else {
    $bool2 = false;
}

//判定処理
function judgeXor(bool $bool1, bool $bool2): void
{
    
    if (($bool1 == true and $bool2 == true) or ($bool1 == false and $bool2 == false)) {
        echo 'false' . PHP_EOL;
    } else {
        echo 'true' . PHP_EOL;
    }
}

judgeXor($bool1, $bool2);