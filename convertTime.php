<?php
const HOUR = 3600;
const MINIT = 60;
const MAX_NUM = 86400;
const MIN_NUM = 0;
//入力された値を変数に格納する
$inputTime = (int)trim(fgets(STDIN));

function converTime(int $inputTime)
{
    if (MIN_NUM <= $inputTime and $inputTime < MAX_NUM) {
        $hour = floor($inputTime / HOUR);
        $minit = floor(($inputTime - $hour * HOUR) / MINIT);
        $second = floor(($inputTime - ($hour * HOUR) - ($minit * MINIT)));
        echo $hour . ':' . $minit . ':' . $second . PHP_EOL;
    }
}   

converTime($inputTime);