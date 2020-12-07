<?php

ini_set('display_errors', '1');

require_once 'Interfaces/MessengerInterface.php';
require_once 'Messengers/AbstractMessenger.php';
require_once 'Messengers/EmailMessnger.php';
require_once 'Messengers/SmsMessenger.php';
require_once 'AppMessenger.php';

$name = 'Delegation';
$messenger = new AppMessenger();

$messenger->setSender('sender@email.loc')
    ->setRecipient('recipient@email.loc')
    ->setMessage('Hello, world')
    ->send();

$messenger->toSms()
    ->setSender('sender@email.loc')
    ->setRecipient('recipient@email.loc')
    ->setMessage('Hello, world')
    ->send();

var_dump($messenger);