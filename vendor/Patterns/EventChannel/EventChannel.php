<?php

namespace Patterns\EventChannel;

class EventChannel implements EventChannelInterface
{
    private $topics = [];

    public function publish($topic, $data)
    {

        if (empty($this->topics[$topic])) {
            throw new \Exception('   Тема подписки отсутствует');
        }
        foreach ($this->topics[$topic] as $subscriber) {
            $subscriber->notify($data = $topic);
        }

    }

    public function subscribe($topic, SubscriberInterface $subscriber)
    {
        $this->topics[$topic][] = $subscriber;
        echo $subscriber->getName() . " подписан на " . $topic . PHP_EOL;
    }

}