<?php

ini_set('display_errors', '1');

require_once 'PropertyContainerInterface.php';
require_once 'PropertyContainer.php';
require_once 'BlogPost.php';

$blog_post = new BlogPost();
$blog_post->addProperty('likes', 250);
$blog_post->setProperty('likes', 400);

print_r($blog_post->getProperty('likes'));