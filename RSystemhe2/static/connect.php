<?php
$projectpath = $_SERVER['DOCUMENT_ROOT'].'/RSystemhe2';
require_once($projectpath.'/log4php/Logger.php');
Logger::configure($projectpath.'/log4php.xml');
date_default_timezone_set('PRC');
$log = Logger::getRootLogger();
//$log->error("测试LOG4PHP");

try{
    $db_server = "localhost";
    $db_name = "rubbishsort";
    $db_user = "root";
    $db_password = "wwp";
    $dsn = "mysql:host=$db_server;dbname=$db_name";
	$options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8';",
            //PDO::ATTR_PERSISTENT => true, //长连接方式切换数据库暂不支持
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false //禁止php的prepare拼接sql，分两部分传递，彻底杜绝sql注入。
        );
    $this->link = mysqli_connect($db_server,$db_user,$db_password);
	$this->link or die($log->error('数据库服务器连接失败！系统错误信息为：'.mysqli_connect_error()));
	mysqli_query($this->link, "SET NAMES UTF8");
	if(!mysqli_select_db($this->link, $db_name)) {
		$log->error('打开数据库失败！系统错误信息为：'.mysqli_error($this->link));
	}
	//mysqli_select_db($this->link, $db_name);
	
	$this->db = new DB($dsn, $db_user, $db_password, $options);


}catch(PDOException $e){
	$log->error('数据库连接失败！系统错误信息为：'.$e->getMessage());
    echo $e->getMessage();
	$this->db->rollBack();//执行事物的回滚操作
}
?>