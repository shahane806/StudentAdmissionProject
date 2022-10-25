<?php


include("./Auth.php");
if(!isset($_COOKIE['UserName']))
{
    header("Location:./index.php");
}
?>
<!DOCTYPE html>
<html lang="javascriptreact">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/login.css">
    <title>ExamForm</title>
</head>
<body>
<form method="post" action="./Database/mysqlCreateExamForm.php">

<div class="LoginContainer">
<div class="PersonalDetails">
        <h1>Exam Form</h1>
        <hr>
        <br>
        <h3>Personal Details</h3>
        <br>
        <input id = "FullName" name = "FullName" type="text" placeholder="Full Name"/>
        <br>
        <input id = "Email" name="Email" type="email" placeholder="Email"/>
        
        <input id="Mobile" name="Mobile" type="number" placeholder="Mobile"/>
        <br>
        <br>
        <h3>Subjects</h3>
        <br>
        <input id="c" type="checkbox" name="C" value="C">C</input>
        <input id="cpp"  type="checkbox" name="CPP" value="CPP">C++</input>
        <input id="Java"  type="checkbox" name="Java" value="Java">Java</input>
        <input id="Python" type="checkbox" name="Python" value="Python">Python</input>
        <br>
        <br>
        
        <div class="submitBtn">
        <input type=submit value="Submit Form"/>
    </div>
       
       


    </div>
    </div>
</form>
</body>
</html>