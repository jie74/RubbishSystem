<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../static/css/bar.css" rel="stylesheet" type="text/css" />
<link href="../static/css/table.css" rel="stylesheet" type="text/css" />
<title>无标题文档</title>
</head>

<body>
 <?php
 
	 require '../controller/appointmentSelectManagerCont.php';//引入控制器文件
	 ?>
     <form method="post" name="loginoutform" action="../controller/managerLoginCont.php?act=logout">
     <button>Logout</button>
        </form>
     
</body>
</html>