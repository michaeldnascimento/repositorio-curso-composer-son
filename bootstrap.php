<?php

require __DIR__ . '/vendor/autoload.php';


use MichaelDoug\CursoSON\hello;


use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('app.log', Logger::WARNING));

// add records to the log
//$log->warning('Foo');
//$log->error('Bar');

$log->warning((new hello)->say('Michael'));