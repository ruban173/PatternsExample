<?php

namespace Patterns\Strategy;

use \Patterns\Strategy\PriceProductInterface;
class Price
{
    private $priceProduct;

    public function __construct(PriceProductInterface $price)
    {
        $this->priceProduct = $price;
    }

    public function getPrice()
    {
        echo "  Итоговая цена  = ". $this->priceProduct->getPrice(). PHP_EOL;
    }
}