<?php


namespace Patterns\Delegation;

use Patterns\Delegation\AbstractMessenger;

class SmsMessanger extends AbstractMessenger
{
    public function send(): bool
    {
        echo "SMS отправлен  на телефон {$this->recipient}  от {$this->sender} c сообщением {$this->message}  -->" . __CLASS__ .PHP_EOL;
        return parent::send();
    }
}