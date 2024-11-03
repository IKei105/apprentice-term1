<?php

//Hello Worldを出力する関数
function hello(): void
{
    echo 'Hello World' . PHP_EOL;
}

//与えられた名前の挨拶メッセージを出力する関数
function greeting(string $name): void
{
    echo 'おはよう' . $name . PHP_EOL;
}

hello();
echo 'name : ';
$name = trim(fgets(STDIN));
greeting($name);