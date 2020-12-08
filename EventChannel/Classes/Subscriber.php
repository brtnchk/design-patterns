<?php

class Subscriber implements SubscriberInterface
{
    private $name;

    /**
     * Subscriber constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @param $data
     * @return mixed|void
     */
    public function notify($data)
    {
        $msg = "{$this->getName()} оповещен(а) данными [$data]";

        echo $msg . '<br>';
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
}