<?php

require_once __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('LoggerVinston');
$log->pushHandler(new StreamHandler("application.log", Logger::INFO));

$log->info('Hello World!');
$log->warning('Foo');