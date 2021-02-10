<?php 
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="static/css/table.css" rel="stylesheet" type="text/css" />
<title>总分</title>
</head>
<style>
.mleft {
	margin-left:28%;
}
</style>
<body>
<?php
include "header.php";

require 'controller/scoreCont.php';//引入控制器文件
$qnoAnsArray = $_SESSION['qnoAnsArray'];
ksort($qnoAnsArray); 
/*print_r($qnoAnsArray);*/
$show=new scoreControl();
$show->showscorecontrol($qnoAnsArray);//调用控制器方法
?>
<div class="mleft">
<h3 style="color:#F60">再考一次吧</h3>
<a href='single.php?page=1'>单选题</a>
<br />
<a href='judge.php?page=1'>判断题</a>
</div>
</body>
</html>