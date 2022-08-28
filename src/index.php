<?php

require '../vendor/autoload.php';

use Monolog\logger;
use Monolog\Handler\StreamHandler;

$logger = new Logger('nomedocanal');
$logger->pushHandler(new StreamHandler(__DIR__.'/App.log', Logger::DEBUG));

$logger->info('Esta e uma string de info...');
$logger->warning('Isto e um warning...');
$logger->error('Esta e uma mensagem de erro...');

$variable = array(1, 20, "hello", null);
var_dump($variable);