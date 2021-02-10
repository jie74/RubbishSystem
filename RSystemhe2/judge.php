<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="static/css/bar.css" rel="stylesheet" type="text/css" />
<title>判断题</title>
</head>
<style>
.tiku {
	font-size:16px;
	width:600px;
	margin-left: 30%;
}
.fenye_tips {
	margin-left:20px;
	margin-top:200px;
}
</style>
<body>
<?php
include "header.php";
?>

<div class="bar">
  <ul>
    <li><a href="single.php?page=1">单选题</a></li>
    <li><a href="judge.php?page=1">判断题</a></li>
  </ul>
</div>

<?php
require 'controller/judgeCont.php';//引入控制器文件
$page = $_GET['page'];
$show=new judgeControl();
$show->showjudgecontrol($page);//调用控制器方法
?>
</body>
</html>