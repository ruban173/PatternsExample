<?php

namespace Patterns\AbstractFactory;

use Patterns\AbstractFactory\ThemeInterface;
use Patterns\AbstractFactory\BlackMenu;
use Patterns\AbstractFactory\BlackLogo;
use Patterns\AbstractFactory\MenuInterface;
use Patterns\AbstractFactory\LogoInterface;

class BlackTheme implements ThemeInterface
{

    public function menu(): MenuInterface
    {
        return new BlackMenu();
    }

    public function logo(): LogoInterface
    {
        return new BlackLogo();
    }
}