<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>
<?php
require_once ('../model/appointment.php');  
$mno =@ $_POST['mno'];

$uno =$_SESSION['uno'];

$day =@ $_POST['day'];
$appointment = new appointment();

$result = $appointment->addAppointment($uno,$mno,$day);
if($result){
   echo "<script language='javascript'>";
        echo "alert('预约成功！');";
        echo "window.location.href='../view/appointmentSelect.php';";
        echo "</script>";
}
else{
 echo "<script language='javascript'>";
        echo "alert('预约失败！');";

        echo "window.location.href='../view/managesSelect.php';";
        echo "</script>";
}



?>
</body>
</html>