<?php

namespace Patterns\EventChannel;

class Subscriber implements SubscriberInterface
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function notify($data)
    {
        echo $this->getName() . " Оповещен " . $data . PHP_EOL;
    }

    public function getName()
    {
        return $this->name;
    }
}