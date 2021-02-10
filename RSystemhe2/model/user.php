<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>
<?php
//model(模型层)
require_once ('DB.php');  
session_start();
class user
{
    var $db;
 
    function __construct()
    {
		include "../static/connect.php";;
    }
 
    function login($uno,$password)
    {
        $user = $this->db->get_one("select * from user where uno=? and password =?",array($uno,$password));
        if($user)
        {
          
            $_SESSION['uno'] = $user['uno'];
            return true;
        }
        else
        {
            return false;
        }
    }
 
    function logout()
    {
       
        unset($_SESSION['uno']);
        session_destroy();
        return 1;
    }
	
  function add_user($uno,$password)
    {
        $bool = $this->db->get_col("select count(1) from user where uno=?",array($uno));
        if($bool)
        {
            return -1;
        }
        $result = $this->db->insert('user',array('uno'=>$uno,'password'=>$password));
        if($result)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
	 function cpwd($uno,$lpwd,$npwd)
    {
		
		$user = $this->db->get_one("select * from user where uno=? and password =?",array($uno,$lpwd));
        if($user)
        {
         $sql = "update user set password='$npwd' where uno='$uno'";
         $result = mysqli_query($this->link,$sql);
    
            if($result)
			return 1;
			else    
            return 0;
        }
        else
        {
            return -1;
        }
            
    }
	
	function cperson($uno,$id,$phone,$district,$addr){
	
         $sql = "update user set username='$id',phone='$phone',district='$district',addr='$addr' where uno='$uno'";
          $result = mysqli_query($this->link,$sql);
    
            if($result)
			return 1;
			else    
            return 0;
	}
public function getUno($uno){
  
	$sql="select * from user where uno = $uno";
	$result = mysqli_query($this->link,$sql);
 
	echo '<table border="0"><tr><td>id</td><td>昵称</td><td>手机号</td><td>分区</td><td>地址</td></tr>';
    while($row = mysqli_fetch_array($result))
    {
    echo "<tr><td>{$row['uno']}</td> "."<td>{$row['username']}</td> "."<td>{$row['phone']} </td> "."<td>{$row['district']} </td> "."<td>{$row['addr']} </td> "."</tr>";
     }
    echo '</table>';
	return 1;
}
 public function getAppointment($uno){
 
	$sql="select * from appointment where uno = $uno";
	$result = mysqli_query($this->link,$sql);
 
	echo '<table border="0"><tr><td>订单号</td><td>用户号</td><td>管理员号</td><td>日期</td><td>状态</td></tr>';
    while($row = mysqli_fetch_array($result))
    {
    echo "<tr><td>{$row['ano']}</td> "."<td>{$row['uno']}</td> "."<td>{$row['mno']} </td> "."<td>{$row['date']} </td> "."<td>{$row['status']} </td> "."</tr>";
     }
    echo '</table>';
	return 1;
}

public function checkInf($uno){
   
	$sql="select * from user where uno = $uno";
	$result = mysqli_query($this->link,$sql);
	while($row = mysqli_fetch_array($result))
    {
	if($row['phone']==null||$row['district']==null||$row['addr']==null)
	   return 0;
	 else 
	   return 1;
    
    }
}
}

?>
</body>
</html>
