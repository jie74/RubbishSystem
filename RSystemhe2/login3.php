<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="static/css/style.css">
</head>
<body>
 <a href="index.php" class="jelly">Return</a>
    <div class="box">
        <h2>Login</h2>
       
        <form method="post" name="login2form" action="controller/managerLoginCont.php?act=login">
        <div class="inputBox">

           <input type="text" name="mno" required>
           <label>Mno</label>

        </div>
            <div class="inputBox">

                <input type="password" name="password" required>
                <label>password</label>

            </div>
            <div align="center">
            
            <button class="btn btn1">Login</button>
        </form>
     
</div>
    </div>
     
</body>
</html>