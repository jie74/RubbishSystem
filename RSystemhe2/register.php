<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="static/css/style.css">
</head>
<body>
    <div class="box">
        <h2>Register</h2>
       
        <form method="post" name="add_userform" action="controller/userLoginRegisterCont.php?act=add_user">
        <div class="inputBox">

           <input type="text" name="uno" required>
           <label>uno</label>

        </div>
        
            <div class="inputBox">

                <input type="password" name="password" required>
                <label>password</label>

            </div>
             <div align="center">
            
            <button class="btn btn1">Register</button>
        </form>
     
            <button class="btn btn2" onClick="javascrtpt:window.location.href='login.php'">Return</button>
</div>
            
        

    </div>
</body>
</html>