
<?php


session_start();
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
    <link rel="stylesheet" href="./CSS/index.css">
    <title>SLP</title>
</head>
<body>
<div class="mainContainer">
    <div class="mainHeading">
        <h1>
        Student Login
</h1>
</div>
<div class="buttonDiv">
    <div class="loginBtn">
        
        <a href="./Login.php">
            <button>Login</button>
        </a>
    </div>
    <div class="signupBtn">
        <a href="./Signup.php">
            <button>Signup</button>
        </a>
</div>
</div>
</div>
</body>
</html>