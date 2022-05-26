<?php

namespace Patterns\AbstractFactory;

use Patterns\AbstractFactory\ThemeInterface;
use Patterns\AbstractFactory\WhiteMenu;
use Patterns\AbstractFactory\WhiteLogo;
use Patterns\AbstractFactory\MenuInterface;
use Patterns\AbstractFactory\LogoInterface;


class WhiteTheme implements ThemeInterface
{

    public function menu(): MenuInterface
    {
        return new WhiteMenu();
    }

    public function logo(): LogoInterface
    {
       return new WhiteLogo();
    }
}