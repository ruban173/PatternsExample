<?php

namespace Patterns\AbstractFactory;

use Patterns\AbstractFactory\MenuInterface;

class WhiteMenu implements MenuInterface
{

    public function font()
    {
        echo "white font ". __CLASS__.PHP_EOL;
    }

    public function color()
    {
        echo "white color ". __CLASS__.PHP_EOL;
    }

}