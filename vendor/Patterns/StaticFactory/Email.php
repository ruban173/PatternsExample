<?php


namespace Patterns\StaticFactory;

use \Patterns\StaticFactory\SendingInterface;

class Email implements SendingInterface
{
    public function __construct()
    {
        echo __CLASS__.PHP_EOL;
    }
    public function send()
    {
        echo "SENDING ".__CLASS__.PHP_EOL;
    }

}