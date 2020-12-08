<?php

class Publisher
{
    private $topic;
    private $eventChannel;

    /**
     * Publisher constructor.
     * @param $topic
     * @param EventChannelInterface $eventChannel
     */
    public function __construct($topic, EventChannelInterface $eventChannel)
    {
        $this->topic = $topic;
        $this->eventChannel = $eventChannel;
    }

    /**
     * @param $data
     */
    public function publish($data)
    {
        $this->eventChannel->publish($this->topic, $data);
    }
}