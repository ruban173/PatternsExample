<?php

namespace Patterns\Strategy;

use \Patterns\Strategy\PriceProductInterface;

class DairyProducts implements PriceProductInterface
{
    private $ratio = 0.5;

    public function getPrice(): int
    {
        return rand(0, 50) * $this->ratio;
    }

}