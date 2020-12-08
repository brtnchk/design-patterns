<?php

interface SubscriberInterface
{
    /**
     * @param $data
     * @return mixed
     */
    public function notify($data);
}