<?php

namespace Patterns\AbstractFactory;


use Patterns\AbstractFactory\MenuInterface;


class BlackMenu implements MenuInterface
{

    public function font()
    {
        echo "black font ". __CLASS__.PHP_EOL;

    }

    public function color()
    {
        echo "black color ". __CLASS__.PHP_EOL;
    }
}