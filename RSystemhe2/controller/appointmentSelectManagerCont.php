<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
require_once ('../model/manager.php');
if(!isset($_SESSION['mno'])) {
	echo "你还没有登录!";
	echo "<script language='javascript'>";
	echo "alert('你还没有登录！');";
	echo "window.location.href='../login3.php';";
	echo "</script>";
} else {
	  
    $manager = new manager();
	$mno = $_SESSION['mno'];
	$result = $manager->getAppointment($mno);
	
}
?>
</body>
</html>