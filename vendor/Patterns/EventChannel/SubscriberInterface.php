<?php

namespace Patterns\EventChannel;

interface SubscriberInterface
{
    public function notify($data);
}