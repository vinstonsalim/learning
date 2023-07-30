<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Inspekturapink\PhpMvc\App\Router;
use Inspekturapink\PhpMvc\Controller\HomeController;

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello');
Router::add('GET', '/world', HomeController::class, 'world');
Router::add('GET', '/about', HomeController::class, 'about');

Router::run();