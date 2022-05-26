<?php


namespace Patterns\Singleton;


class Singleton
{
    public $test=0;
    private static $instance;
    public static function getInstance()
    {
        return static::$instance??(static::$instance=new static());
    }


    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
    public function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }
}