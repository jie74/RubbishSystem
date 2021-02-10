<?php
$projectpath = $_SERVER['DOCUMENT_ROOT'].'/RSystemhe2';
require_once($projectpath.'/log4php/Logger.php');
Logger::configure($projectpath.'/log4php.xml');
date_default_timezone_set('PRC');
$log = Logger::getRootLogger();

$servername = "localhost";
$username = "root";
$password = "wwp";
$dbname = "rubbishsort";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    $log->error('数据库连接失败：'.$conn->connect_error);
	die("连接失败: " . $conn->connect_error);
} 
$conn->set_charset('utf8');
?>