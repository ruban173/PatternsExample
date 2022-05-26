<?php

namespace Patterns\EventChannel;

interface PublisherrInterface
{
    public function publish($data);
}