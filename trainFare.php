<?php

const INFANT = 0;
const CHILD = 6;
const ADULT = 12;

function trainFare(int $age): void
{
    if (INFANT <= $age and $age < CHILD) 
    {
        echo '0' . PHP_EOL;
    } elseif (CHILD <= $age and $age < ADULT)
    {
        echo '100' . PHP_EOL;
    } elseif (ADULT <= $age) 
    {
        echo '200' . PHP_EOL;
    }
}

trainFare(12);
trainFare(6);
trainFare(5);