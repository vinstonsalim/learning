<?php

require_once __DIR__ . '/vendor/autoload.php';

use PhpComposer\Data\People;

echo 'Hello World! Composer' . PHP_EOL;

$vinston = new People('Vinston');

$vinston->sayHello('Budi');