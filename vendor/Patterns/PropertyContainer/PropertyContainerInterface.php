<?php

namespace Patterns\PropertyContainer;

interface PropertyContainerInterface
{
    function addProperty($name,$value);
    function deleteProperty($name);
    function getProperty($name);
    function setProperty($name,$value);

}