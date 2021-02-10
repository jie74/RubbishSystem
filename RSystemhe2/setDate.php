<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="static/css/style.css">
</head>
<body>
 <?php
     session_start();
    
	?>
    <div class="box">';
    <h2>预约时间</h2>';
       
    <form method="post" name="setDateform" action="controller/managesAppointCont.php">';
    <div class="inputBox">';
   
		<input type="hidden" name="mno" value=<?php echo $_GET['mno'];?>>	
      <input type="text" name="day" required>
           <label>请输入预约时间(yyyymmdd)</label>

        </div>
           
            <button class="btn btn1">提交</button>
			<button class="btn btn1" onClick="javascrtpt:window.location.href='./view/managesSelect.php'">返回</button>
        </form>
     
            

    </div> 
</body>
</html>