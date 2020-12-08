<?php

ini_set('display_errors', '1');

require_once 'Interfaces/EventChannelInterface.php';
require_once 'Interfaces/PublisherInterface.php';
require_once 'Interfaces/SubscriberInterface.php';
require_once 'Classes/Publisher.php';
require_once 'Classes/Subscriber.php';
require_once 'Classes/EventChannel.php';

$newsChannel = new EventChannel();

$sport = new Publisher('sport', $newsChannel);
$music = new Publisher('music', $newsChannel);


$subscriber1 = new Subscriber('Oleg Sokolov');
$subscriber2 = new Subscriber('Artem Bobrov');
$subscriber3 = new Subscriber('Dima Orlov');


$newsChannel->subscribe('music', $subscriber1);
$newsChannel->subscribe('sport', $subscriber3);
$newsChannel->subscribe('music', $subscriber2);

$sport->publish("new sport post");
$music->publish("new music post");