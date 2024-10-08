<?php

class VendingMachine
{
    public function __construct()
    {}

    public function pressButton(): string
    {
        return 'cider';
    }
}

$vendingMachine = new VendingMachine();
echo $vendingMachine->pressButton();