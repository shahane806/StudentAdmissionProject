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
    <title>Signup Page</title>
</head>
<body>
    <form class="form" method="post" action="./Database/mysqlCreateUserDatabase.php">
        <div class="LoginContainer">
            <div class="PersonalDetails">
                <h1>Signup</h1>
                <hr>
                <br>
                <input id="FullName" name="FullName"  type="text" placeholder="Full Name"/>
                <br>
                <input id="Email" name="Email"  type="email" placeholder="Email"/>
                
                <input id="Mobile" name="Mobile"  type="number" placeholder="Mobile"/>
                <br>
                <input id="UserName" name="UserName"  type="text" placeholder="UserName"/>
                <br>
                <input id="Password" name="Password" type="password" placeholder="Password"/>
                <br>
                <input id="ConfirmPassword" name="ConfirmPassword" type="text" placeholder="Confirm Password"/>
                
                
                
                
            </div>
            <div class="submitBtn">
                <input type="submit" value="Signup"/>
            </div>
        </div>
    </form>
    </body>
    </html>