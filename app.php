<?php

require __DIR__ . '/vendor/autoload.php';

use DiDemo\Mailer\SmtpMailer;
use DiDemo\FriendHarvester;

$container = new Pimple();

require __DIR__.'/app/config.php';
require __DIR__.'/app/services.php';

$friendHarvester = $container['friend_harvester'];
$friendHarvester->emailFriends();
