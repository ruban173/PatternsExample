<?php

namespace Patterns\Strategy;

use \Patterns\Strategy\PriceProductInterface;

class VegetableProducts implements PriceProductInterface
{
    private $ratio = 0.1;
    private $count = 0.10;

    public function getPrice(): int
    {
        return rand(0, 50) * $this->ratio;
    }

}