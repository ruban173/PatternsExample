<?php

namespace Patterns\EventChannel;

class Publisher implements PublisherrInterface
{
    private $topic;
    private $eventChannel;

    public function __construct($topic, EventChannelInterface $eventChannel)
    {
        $this->topic = $topic;

        $this->eventChannel = $eventChannel;
    }


    public function publish($data)
    {
        $this->eventChannel->publish($this->topic, $data);
    }
}