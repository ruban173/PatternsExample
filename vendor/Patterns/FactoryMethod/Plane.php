<?php


namespace Patterns\FactoryMethod;


class Plane implements Transport
{

    public function load()
    {
        echo __CLASS__ . '--->' . __METHOD__ . PHP_EOL;
    }

    public function deliver($cargoName)
    {
        echo $cargoName."-->".__CLASS__. '--->'.__METHOD__. PHP_EOL;
    }

    public function unload()
    {
        echo __CLASS__. '--->'.__METHOD__. PHP_EOL;
    }
}