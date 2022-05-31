<?php


require_once __DIR__ . "/vendor/autoload.php";


// PropertyContainer Pattern
/*
use \Patterns\PropertyContainer\PropertyContainer;

$s = new PropertyContainer();
$class=new class() extends PropertyContainer{

};
$class->addProperty('one','Первое свойство');
echo $class->getProperty('one');*/

//Delegation pattern
/*use  Patterns\Delegation\AppMesenger;
$appMesanger=new AppMesenger();
 $appMesanger
    ->toEmail()
    ->setMessage("hello world!!!!")
    ->setSender("Pupkin Ivan")
    ->setRecipient('test.email.ru')
    ->send() ;

$appMesanger
    ->toSms()
    ->setMessage("hello world!!!!")
    ->setSender("Pupkin Ivan")
    ->setRecipient('8963256985')
    ->send() ;*/

//Event Channel pattern
/*
use Patterns\EventChannel\EventChannel;
use Patterns\EventChannel\Publisher;
use Patterns\EventChannel\Subscriber;

$eventChannel = new EventChannel();
$publisherNews = new Publisher('news', $eventChannel);
$publisherHistory = new Publisher('history', $eventChannel);
$publisherUpdate = new Publisher('update', $eventChannel);

$subscriberUserIvan = new Subscriber("Ivan Ivanovich Ivanov");
$subscriberUserPupkin = new Subscriber("Василий Николаевич Пупкин");
$subscriberUserSemenov = new Subscriber("Александр Петрович Семенов");

$eventChannel->subscribe('news', $subscriberUserIvan);
$eventChannel->subscribe('history', $subscriberUserPupkin);
$eventChannel->subscribe('update', $subscriberUserPupkin);
$eventChannel->subscribe('update', $subscriberUserSemenov);
$eventChannel->subscribe('news', $subscriberUserSemenov);

$publisherNews->publish("Новые новости");
$publisherHistory->publish("Свежие Истории");
$publisherUpdate->publish("Последнее обновление");*/

//AbstractFactory
/*use Patterns\AbstractFactory\ThemeFactory;
$theme=ThemeFactory::getTheme('White');
$theme->logo()->image();
$theme->menu()->font();*/

//AbstractMethod
/*use Patterns\FactoryMethod\AirLogistic;
use Patterns\FactoryMethod\RoadLogistic;
$transport=new  AirLogistic();
$transport->deliverCargo('AIRCAR');

$transport=new  RoadLogistic();
$transport->deliverCargo('RoadCAR');*/

//StaticFactory
/*use Patterns\StaticFactory\StaticFactory;

$factory= StaticFactory::build('sms')->send();
$factory=  StaticFactory::build('email')->send();*/
/*use Patterns\Singleton\Singleton;
$singleton1=Singleton::getInstance();
$singleton1->test+=5;
$singleton2=Singleton::getInstance();
$singleton1->test+=1;
$singleton3=Singleton::getInstance();
echo $singleton3->test. PHP_EOL;*/

//Strategy Pattern
use Patterns\Strategy\Price;
$price=new Price(new \Patterns\Strategy\DairyProducts());
$price2=new  Price(new \Patterns\Strategy\VegetableProducts());
$price->getPrice();
$price2->getPrice();


?>