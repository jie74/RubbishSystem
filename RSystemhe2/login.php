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
 <a href="index.php" class="jelly">Return</a>
    <div class="box">
        <h2>Login</h2>
       
        <form method="post" name="loginform" action="controller/userLoginRegisterCont.php?act=login">
        <div class="inputBox">

           <input type="text" name="uno" required>
           <label>uno</label>

        </div>
            <div class="inputBox">

                <input type="password" name="password" required>
                <label>password</label>

            </div>
            <div align="center">
            
            <button class="btn btn1">Login</button>
        </form>
     
            <button class="btn btn2" onClick="javascrtpt:window.location.href='register.php'">Register</button>
</div>
    </div>
     
</body>
</html>