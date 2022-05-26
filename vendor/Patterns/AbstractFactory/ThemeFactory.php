<?php

namespace Patterns\AbstractFactory;

use Patterns\AbstractFactory\BlackTheme;
use Patterns\AbstractFactory\WhiteTheme;

class ThemeFactory
{
    public static function getTheme($name)
    {
        switch (strtolower($name)){
            case  "black"  : return new BlackTheme(); breack;
            case  "white"  : return new WhiteTheme(); breack;
            default: throw new \Exception('Тема отсутствует');
        }
    }

}