<?php

interface EventChannelInterface
{
    /**
     * @param $topic
     * @param $data
     * @return mixed
     */
    public function publish($topic, $data);

    /**
     * @param $topic
     * @param SubscriberInterface $subscriber
     * @return mixed
     */
    public function subscribe($topic, SubscriberInterface $subscriber);
}