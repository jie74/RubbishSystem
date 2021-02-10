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
$uno =@ $_POST['uno'];
$password =@ $_POST['password'];
 
if($_GET['act'] == 'login')  //GET方式获取
{
    if($user->login($uno,$password))
    {
        echo "<script language='javascript'>";
        echo "alert('登录成功！');";
        echo "window.location.href='../home.php';";
        echo "</script>";
    }
    else
    {
        echo "登录失败!";
		 echo "<script language='javascript'>";
        echo "alert('登录失败！');";
        echo "window.location.href='../login.php';";
        echo "</script>";
    }
}
elseif($_REQUEST['act'] == 'logout')  // REQUEST方式包含GET和POST的全部数据,
{
    $user->logout();
    echo "<script language='javascript'>";
    echo "alert('注销成功！');";
        echo "window.location.href='../index.php';";
 echo "</script>";
 
}
elseif($_GET['act'] == 'add_user')
{
    $result = $user->add_user($uno,$password);
    if($result == -1)
    {
       echo "<script language='javascript'>";
        echo "alert('该用户已存在！');";
        echo "window.location.href='../register.php';";
        echo "</script>";
    }
    elseif($result == 1)
    {
          echo "<script language='javascript'>";
        echo "alert('注册成功！');";
        echo "window.location.href='../login.php';";
        echo "</script>";
    }
    else
    {
         echo "<script language='javascript'>";
        echo "alert('注册失败！');";
        echo "window.location.href='../register.php';";
        echo "</script>";
    }
}

?>
</body>
</html>
