<?php

class SmsMessenger extends AbstractMessenger
{
    /**
     * @return bool
     */
    public function send(): bool
    {
        echo 'Sent by ' . __METHOD__;

        return parent::send();
    }
}