<?php

class EventChannel implements EventChannelInterface
{
    private $topics;

    /**
     * @param $topic
     * @param SubscriberInterface $subscriber
     */
    public function subscribe($topic, SubscriberInterface $subscriber)
    {
        $this->topics[$topic][] = $subscriber;

        $message = "{$subscriber->getName()} подписан на [{$topic}]";
        echo $message;
    }

    /**
     * @param $topic
     * @param $data
     */
    public function publish($topic, $data)
    {
        if(empty($this->topics[$topic])) {
            return;
        }

        foreach ($this->topics[$topic] as $subscriber) {
            $subscriber->notify($data);
        }
    }
}