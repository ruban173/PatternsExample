<?php


namespace Patterns\StaticFactory;
use Patterns\StaticFactory\Sms;
use Patterns\StaticFactory\Email;

class StaticFactory implements MessangerStaticFactoryInterface
{
        public static function build($name){
            $result=null;
            switch ($name){
                case 'email':
                    $result=new Email();
                    break;
                case 'sms':
                    $result=new Sms();
                    break;
                default: throw new \Exception('Нет класса!');

            }
            return $result;

        }
}