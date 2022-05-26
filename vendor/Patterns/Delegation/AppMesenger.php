<?php


namespace Patterns\Delegation;

use Patterns\Delegation\MessengerInterface;
use Patterns\Delegation\SmsMessanger;
use Patterns\Delegation\EmailMessanger;


class AppMesenger implements MessengerInterface
{
    private $messanger;

    public function __construct()
    {

        $this->toEmail();
    }

    public function setSender($value): MessengerInterface
    {
        $this->messanger->setSender($value);
        return $this->messanger;
    }

    public function setRecipient($value): MessengerInterface
    {
        $this->messanger->setRecipient($value);
        return $this->messanger;
    }

    public function setMessage($value): MessengerInterface
    {
        $this->messanger->setMessage($value);
        return $this->messanger;
    }

    public function toEmail()
    {
        $this->messanger = new EmailMessanger();
        return $this;
    }

    public function toSms()
    {
        $this->messanger = new SmsMessanger();
        return $this;
    }

    public function send(): bool
    {
        return $this->messanger->send();

    }
}