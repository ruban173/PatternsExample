<?php


namespace Patterns\Delegation;

use Patterns\Delegation\AbstractMessenger;


class EmailMessanger extends AbstractMessenger
{
    public function send(): bool
    {
        echo "Email отправлен  на адрес {$this->recipient}  от {$this->sender} c сообщением {$this->message}  -->" . __CLASS__ .PHP_EOL ;
        return parent::send();
    }
}