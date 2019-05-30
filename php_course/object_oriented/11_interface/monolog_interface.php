<?php
// require_once __DIR__.'/monolog/monolog/monolog/src/Monolog/logger.php';
// require_once __DIR__.'/monolog/monolog/monolog/src/Monolog/Handler/StreamHandler.php';
require_once 'C:\Bitnami\wampstack-7.1.29-0\apache2\htdocs\php_course\ComposerApp\vendor\autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\NativeMailerHandler;

// create a log channel
$log = new Logger('taogone');
$log->pushHandler(new StreamHandler(__DIR__.'/taogone.log', Logger::WARNING));
$log->pushHandler(new NativeMailerHandler(
    'taogone@gmail.com',
    'php_course',
    'out.system.com',
    Logger::EMERGENCY
));
// add records to the log
$log->warning('TAO');
$log->error('GONE');
$log->EMERGENCY('emergency test');
?>