<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<style>
table {
	border-collapse: collapse;
	text-align: center;
	left: auto;
	top: 10px;
}	
table th,td {	
	border: 1px solid black;
}
body {
	background-image: url('../static/images/bg2.jpg');
	background-repeat: no-repeat;
	background-size: cover;
	font-family: Trebuchet MS;
	font-size: 17px;
	background-attachment: scroll;
}
</style>

<body>
<?php
//model(模型层)
require_once ('DB.php');  
session_start();
class manages
{
    var $db;
 
    function __construct()
    {
		include "../static/connect.php";;
    }
 
    function getManages($uno)
    {

	$sql="select * from user where uno = $uno";
	$result = mysqli_query($this->link,$sql);
	while($row = mysqli_fetch_array($result))
    {
	$a=$row['district'];
    }
	
	$sql="select * from manages,manager where district = '$a' and manages.mno = manager.mno";
	$result = mysqli_query($this->link,$sql);
	echo '<table border="3"><tr><td>管理员号</td><td>分区</td><td>管理员电话号码</td><td>点击预约</td></tr>';
	if($result){
    while($row = mysqli_fetch_array($result))
    {
		$m = $row['mno'];
    echo "<tr><td>{$row['mno']}</td> "."<td>{$row['district']}</td> "."<td>{$row['phone']}</td> "."<td><a href='../setDate.php?mno=$m'>立即预约</a></td> "."</tr>";
     }
    echo '</table>';
	
}
     else{
	 echo '无';
	 }
	 return 1;
    }
 
}


?>
</body>
</html>