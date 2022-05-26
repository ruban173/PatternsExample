<?php

namespace Patterns\AbstractFactory;

use Patterns\AbstractFactory\LogoInterface;

class BlackLogo implements LogoInterface
{

    public function image()
    {
        return 'Изображение '.__CLASS__. PHP_EOL;
    }
}