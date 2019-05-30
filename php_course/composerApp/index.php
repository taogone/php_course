<?php
// require_once __DIR__.'/monolog/monolog/monolog/src/Monolog/logger.php';
// require_once __DIR__.'/monolog/monolog/monolog/src/Monolog/Handler/StreamHandler.php';
require_once __DIR__.'/vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('taogone');
$log->pushHandler(new StreamHandler(__DIR__.'/taogone.log', Logger::WARNING));

// add records to the log
$log->warning('TAO');
$log->error('GONE');
?>