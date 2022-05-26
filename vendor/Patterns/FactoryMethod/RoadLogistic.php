<?php


namespace Patterns\FactoryMethod;

use Patterns\FactoryMethod\Logistic;
use Patterns\FactoryMethod\Plane;

class RoadLogistic extends Logistic
{

    public function getTransport(): Transport
    {
       return new Plane();
    }
}