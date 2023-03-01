<?php
require '../vendor/autoload.php';

$log = new Monolog\Logger('name');

$handler = new Proglab\DiscordHandler(
    'https://discordapp.com/api/webhooks/xxx/yyy'
);

$handler->getConfig()->setEmbedMode();

$log->pushHandler($handler);

$log->info("Hello world");
