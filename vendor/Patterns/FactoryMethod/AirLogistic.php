<?php


namespace Patterns\FactoryMethod;

use Patterns\FactoryMethod\Truct;
use Patterns\FactoryMethod\Logistic;

class AirLogistic extends Logistic
{

    public function getTransport(): Transport
    {
        return new Truct();
    }
}