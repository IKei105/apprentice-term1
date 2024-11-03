<?php

//こんにちは！の出力を100回繰り返す処理を記述
function times100hello(): void
{
    for ($i = 1; $i <= 100; $i++) {
        echo 'こんにちは！';
    }
}