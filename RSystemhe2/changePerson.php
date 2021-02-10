<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ChangePerson</title>
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
        <h2>修改信息</h2>
       
        <form method="post" name="changepersonform" action="controller/userUpdateCont.php?act=cperson" >
        <div class="inputBox">

           <input type="text" name="id" required >
           <label>昵称</label>

        </div>
            <div class="inputBox">

                <input type="text" name="phone" required>
                <label>手机</label>

            </div>
            <div class="inputBox">

                <input type="text" name="district" required>
                <label>分区</label>

            </div>
            <div class="inputBox">

                <input type="text" name="addr" required>
                <label>地址</label>

            </div>
            <div align="center">
            
            <button class="btn btn3">Submit</button>
        </form>
      
</div>
    </div>
    
</body>
</html>