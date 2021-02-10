<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
require_once ('../model/user.php');  
function isPhoneAvailable($mobile) {
    if (!is_numeric($mobile)) {
        return false;
    }
    return preg_match('#^13[\d]{9}$|^14[5,7]{1}\d{8}$|^15[^4]{1}\d{8}$|^17[0,6,7,8]{1}\d{8}$|^18[\d]{9}$#', $mobile) ? true : false;
}

if(!isset($_SESSION['uno'])) {
	echo "你还没有登录!";
	echo "<script language='javascript'>";
	echo "alert('你还没有登录！');";
	echo "window.location.href='../login.php';";
	echo "</script>";
} else {
	
	$user = new user();
	
	if($_GET['act'] == 'cpwd')  //GET方式获取
	{
		$lpwd =@ $_POST['lpwd'];
		$npwd =@ $_POST['npwd'];
		$uno = $_SESSION['uno'];
		$result = $user->cpwd($uno,$lpwd,$npwd);
		if($result==1)
		{
			echo "<script language='javascript'>";
			echo "alert('修改成功！');";
			echo "window.location.href='../changePwd.php';";
			echo "</script>";
		}
		else if($result==0)
		{
				
			echo "<script language='javascript'>";
			echo "alert('修改失败！');";
			echo "window.location.href='../changePwd.php';";
			echo "</script>";
		}
		else if($result==-1)
		{	
			echo "<script language='javascript'>";
			echo "alert('密码错误！');";
			echo "window.location.href='../changePwd.php';";
			echo "</script>";
		} 
	}
	
	if($_GET['act'] == 'cperson')  //GET方式获取
	{
		$id =@ $_POST['id'];
		$phone =@ $_POST['phone'];
		if(!isPhoneAvailable($phone)) {
			echo "<script language='javascript'>";
			echo "alert('请输入正确的手机号码');";
			echo "window.location.href='../changePerson.php';";
			echo "</script>";
		} else {
			$district =@ $_POST['district'];
			$addr =@ $_POST['addr'];
			$uno = $_SESSION['uno'];
			$result = $user->cperson($uno,$id,$phone,$district,$addr);
			if($result==1)
			{
				echo "<script language='javascript'>";
				echo "alert('修改成功！');";
				echo "window.location.href='../changePerson.php';";
				echo "</script>";
			}
			else if($result==0)
			{   	
				echo "<script language='javascript'>";
				echo "alert('修改失败！');";
				echo "window.location.href='../changePerson.php';";
				echo "</script>";
			}	
		}
		
	}

}


?>
</body>
</html>