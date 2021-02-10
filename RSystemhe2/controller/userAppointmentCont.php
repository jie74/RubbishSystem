<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
require_once ('../model/user.php');  
$user = new user();


if(!isset($_SESSION['uno'])) {
	echo "你还没有登录!";
	echo "<script language='javascript'>";
	echo "alert('你还没有登录！');";
	echo "window.location.href='../login.php';";
	echo "</script>";
} else {


	$uno = $_SESSION['uno'];
	 
	if($_GET['act'] == 'appoint')  //GET方式获取
	{
		if($user->checkInf($uno))
		{
			echo "<script language='javascript'>";
			echo "window.location.href='../view/managesSelect.php';";
			echo "</script>";
		}
		else
		{
			 echo "<script language='javascript'>";
			echo "alert('请完善电话、分区、地址等信息！');";
			echo "window.location.href='../changePerson.php';";
			echo "</script>";
		}
	}

}
?>
</body>
</html>