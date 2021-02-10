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
class appointment{
var $db;

 function __construct()
    {
		include "../static/connect.php";;
    }
	function addAppointment($uno,$mno,$day)
    {
	$sql="insert into appointment (uno,mno,date,status) values($uno,$mno,$day,'申请中')";
		$result = mysqli_query($this->link,$sql);
		if($result)
        {
            return 1;
        }
        else
        {
            return 0;
        }
	}
}




?>
</body>
</html>