<?php

abstract class AbstractMessenger implements MessengerInterface
{
    protected $sender;

    protected $recipient;

    protected $message;

    /**
     * @param $sender
     * @return mixed
     */
    public function setSender($sender): MessengerInterface
    {
        $this->sender = $sender;

        return $this;
    }

    /**
     * @param $recipient
     * @return mixed
     */
    public function setRecipient($recipient): MessengerInterface
    {
        $this->recipient = $recipient;

        return $this;
    }

    /**
     * @param $message
     * @return mixed
     */
    public function setMessage($message): MessengerInterface
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return bool
     */
    public function send(): bool
    {
        return true;
    }
}