<?php


namespace Patterns\FactoryMethod;


interface Transport
{
    public function load();
    public function deliver($cargoName);
    public function unload();

}