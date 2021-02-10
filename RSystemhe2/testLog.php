<?php
require_once('log4php/Logger.php');
Logger::configure('log4php.xml');

date_default_timezone_set('PRC');

$pay = Logger::getRootLogger();
//$pay->info('测试LOG4PHP');
//$pay->warn("测试LOG4PHP");
$pay->debug("测试LOG4PHP");
$pay->error("测试LOG4PHP");
//$pay->fatal("测试LOG4PHP");
?>