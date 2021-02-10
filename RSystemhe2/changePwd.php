<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ChangePwd</title>
    <link rel="stylesheet" href="static/css/person.css">
</head>
<body>
 <?php
     session_start();
	 ?>
    <div class="top">
                    
        <div class="nav">
               <ul>
               <li><a href="./view/person.php"><button class="btn btn3">个人信息</button></a></li>
			   <li><a href="changePerson.php"><button class="btn btn3">修改信息</button></a></li>
			   <li><a href="changePwd.php"><button class="btn btn3">修改密码</button></a></li>
			   <li><a href="./view/appointmentSelect.php"><button class="btn btn3">查看预约</button></a></li>
               <li><a href="home.php"><button class="btn btn3">返回</button></a></li>
		       </ul>
               
         </div>
    </div>
    <div class="box">
        <h2>修改密码</h2>
       
        <form method="post" name="changepwdform" action="controller/userUpdateCont.php?act=cpwd">
        <div class="inputBox">

           <input type="password" name="lpwd" required>
           <label>初始密码</label>

        </div>
            <div class="inputBox">

                <input type="password" name="npwd" required>
                <label>新密码</label>

            </div>
            <div align="center">
            
            <button class="btn btn3">Submit</button>
        </form>
      
</div>
    </div>
    
</body>
</html>