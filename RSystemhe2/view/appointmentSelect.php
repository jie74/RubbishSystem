<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Appointment</title>
    <link rel="stylesheet" href="../static/css/person.css">
</head>
<body>
    <div class="top">
                    
        <div class="nav">
               <ul>
               <li><a href="person.php"><button class="btn btn3">个人信息</button></a></li>
			   <li><a href="../changePerson.php"><button class="btn btn3">修改信息</button></a></li>
			   <li><a href="../changePwd.php"><button class="btn btn3">修改密码</button></a></li>
			   <li><a href="appointmentSelect.php"><button class="btn btn3">查看预约</button></a></li>
		        <li><a href="../home.php"><button class="btn btn3">返回</button></a></li>
		       </ul>
         </div>
    </div>
    <div>
    <table class="imagetable">
     <?php
	 require '../controller/appointmentSelectCont.php';//引入控制器文件
	 ?>
</table>
    </div>
    
</body>
</html>