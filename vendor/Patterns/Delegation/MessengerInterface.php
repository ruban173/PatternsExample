<?php


namespace Patterns\Delegation;


/**
 * Interface MessengerInterface
 * @package Patterns\Delegation
 */
interface MessengerInterface
{
    public function setSender($value):MessengerInterface;
    public function setRecipient($value):MessengerInterface;
    public function setMessage($value):MessengerInterface;


}