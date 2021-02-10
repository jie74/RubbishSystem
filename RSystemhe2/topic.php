<?php 
	error_reporting(0);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="static/css/bar.css" rel="stylesheet" type="text/css" />
<link href="static/css/table.css" rel="stylesheet" type="text/css" />
<link href="static/css/construction.css" rel="stylesheet" type="text/css" />
<title>专题学习</title>
</head>

<body>

<?php
require_once "header.php";
?>

<div class="bar">
  <ul>
    <li><a href="knowledge.php">知识什锦</a></li>
    <li><a href="topic.php">专题学习</a></li>
  </ul>
</div>


<br>
<br>
<?php
require_once 'controller/topicCont.php';//引入控制器文件
$topic = $_GET['act'];
$show=new topicControl();
$show->showleftcontrol($topic);//调用控制器方法
//?>
</body>
</html>