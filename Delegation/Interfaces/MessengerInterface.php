<?php

interface MessengerInterface
{
    /**
     * @param $sender
     * @return MessengerInterface
     */
    public function setSender($sender): MessengerInterface;

    /**
     * @param $recipient
     * @return MessengerInterface
     */
    public function setRecipient($recipient):MessengerInterface;

    /**
     * @param $message
     * @return MessengerInterface
     */
    public function setMessage($message): MessengerInterface;

    /**
     * @return bool
     */
    public function send():bool;
}