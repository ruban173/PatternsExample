<?php

namespace Patterns\PropertyContainer;

class PropertyContainer implements PropertyContainerInterface
{


    private $propertyContainer=[];

    function addProperty($name, $value)
    {
       $this->propertyContainer[$name]=$value;
    }

    function deleteProperty($name)
    {
        unset($this->propertyContainer[$name]);
    }

    function getProperty($name)
    {
        return $this->propertyContainer[$name];
    }

    function setProperty($name, $value)
    {
        if(!isset($this->propertyContainer[$name])){
            throw new \ErrorException("Свойство {$name} не найдено");
        }
        $this->propertyContainer[$name]=$value;
    }
}