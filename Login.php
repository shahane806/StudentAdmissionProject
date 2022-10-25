<?php
    
include("./Auth.php");
if(isset($_COOKIE['UserName']))
{
    setcookie("UserName","",time() - (86400 * 30), "/"); // 86400 = 1 day

}
?>
<!DOCTYPE html>
<html lang="javascriptreact">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/login.css">
    <title>Login Page</title>
</head>
<body>
<form class="form" method="post" action="./Database/mysqlLoginUser.php">
    <div class="LoginContainer">
        <div class="PersonalDetails">
            <h1>Login</h1>
            <hr>
            <br>
            <input id = "UserName" name="UserName" type="text" placeholder="UserName"/>
            <br>
            <input id = "Password" name="Password" type="password" placeholder="Password"/>
            
            
            
        </div>
        <div class="submitBtn">
            <input type=submit value="Login"/>
        </div>
    </div>
</form>
</body>
</html>