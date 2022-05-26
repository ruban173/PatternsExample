<?php

namespace Patterns\AbstractFactory;

use Patterns\AbstractFactory\LogoInterface;
use Patterns\AbstractFactory\MenuInterface;

interface ThemeInterface
{
    public function menu():MenuInterface;
    public function logo():LogoInterface;

}