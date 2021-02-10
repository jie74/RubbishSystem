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
class manager
{
    var $db;
 
    function __construct()
    {
        include "../static/connect.php";
    }
 
    function login($mno,$password)
    {
        $manager = $this->db->get_one("select * from manager where mno=? and password =?",array($mno,$password));
        if($manager)
        {
          
            $_SESSION['mno'] = $manager['mno'];
            return true;
        }
        else
        {
            return false;
        }
    }
 
    function logout()
    {
       
        unset($_SESSION['mno']);
        session_destroy();
        return 1;
    }
	
	
	public function updateAppointment($ano,$status){
		
		$sql="update appointment set status = '".$status."' where ano = $ano";
		$result = mysqli_query($this->link,$sql);
		if($result){
		return 1;
		}
		else return 0;
		
	}
	
	public function getAppointment($mno){
   
	$sql="select * from appointment,user where mno = $mno and appointment.uno = user.uno";
	$result = mysqli_query($this->link,$sql);
 
	echo '<table border="0"><tr><td>订单号</td><td>用户号</td><td>联系方式</td><td>分区</td><td>地址</td><td>日期</td><td>状态</td><td>修改</td></tr>';
    while($row = mysqli_fetch_array($result))
    {
    echo "<tr><td>{$row['ano']}</td> "."<td>{$row['uno']}</td> "."<td>{$row['phone']} </td> "."<td>{$row['district']} </td> "."<td>{$row['addr']} </td> "."<td>{$row['date']} </td> "."<td>{$row['status']} </td> ";
	?>
	<td>
	 <form action="../controller/appointmentUpdateConf.php" method="post" name="form1" >
     <input type="hidden" name="ano" value=<?php echo $row['ano'];?>>	
      <select name="searchitem">
               <option value="预约成功">预约成功</option>
			   <option value="已完成">已完成</option>
			   <option value="已取消">已取消</option>
			   
        </select>
  
  <input type="submit" name="submit" value="提交">
  </form></td>
  
   </tr>
   <?php
     }
    echo '</table>';
	return 1;
}
	
 
}
?>
</body>
</html>
