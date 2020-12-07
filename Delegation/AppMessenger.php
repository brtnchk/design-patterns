<?php

class AppMessenger
{
    private $messenger;

    public function __construct()
    {
        $this->toEmail();
    }

    /**
     * @return $this
     */
    public function toEmail()
    {
        $this->messenger = new EmailMessnger();

        return $this;
    }

    /**
     * @return $this
     */
    public function toSms()
    {
        $this->messenger = new SmsMessenger();

        return $this;
    }

    /**
     * @param $sender
     * @return MessengerInterface
     */
    public function setSender($sender): MessengerInterface
    {
        $this->messenger->setSender($sender);

        return $this->messenger;
    }

    /**
     * @param $recipient
     * @return MessengerInterface
     */
    public function setRecipient($recipient): MessengerInterface
    {
        $this->messenger->setRecipient($recipient);

        return $this->messenger;
    }

    /**
     * @param $message
     * @return MessengerInterface
     */
    public function setMessage($message): MessengerInterface
    {
        $this->messenger->setMessage($message);

        return $this->messenger;
    }

    /**
     * @return bool
     */
    public function send(): bool
    {
        return $this->messenger->send();
    }
}