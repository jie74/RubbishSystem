<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="static/css/bar.css" rel="stylesheet" type="text/css" />
<link href="static/css/table.css" rel="stylesheet" type="text/css" />
<title>知识什锦</title>
</head>

<body>
<?php
include "header.php";
?>

<div class="bar">
  <ul>
    <li><a href="knowledge.php">知识什锦</a></li>
    <li><a href="topic.php">专题学习</a></li>
  </ul>
</div>

<?php
require 'controller/knowledgeCont.php';//引入控制器文件
$show=new Control();
echo "<center>";
$show->showcontrol();//调用控制器方法
echo "</center>";

?>
</body>
</html>