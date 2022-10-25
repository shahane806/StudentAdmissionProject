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
    <link rel="stylesheet" href="./CSS/Admission.css">
    <title>AdmissionForm</title>
</head>
<body>
    <form method="post" action="./Database/mysqlCreateAdmissionForm.php">
<div class="LoginContainer">
<div class="PersonalDetails">
        <h1>Admission Form</h1>
        <hr>
        <br>
        <h3>Personal Details</h3>
        <br>
        <input name="FullName" type="text" placeholder="Full Name"/>
        <br>
        <input name="Email" type="email" placeholder="Email"/>
        
        <input name="Mobile" type="number" placeholder="Mobile"/>
        <br>
        <br>
        <h3>Last Exam Details</h3>
        <br>
        <input name="SeatNo" type="text" placeholder = "SeatNo"/>
        <br>
        <input name="Marks" type="text" placeholder = "Marks"/>
  
        <input name="OutOf" type="text" placeholder = "OutOf Marks"/>
        <br>
        <input name="Percentage" type="text" placeholder = "Percentage"/>
        <br>
        <br>
        <h3>Course</h3>
        <br>
        <input value="BCA" type="radio" name="course">BCA</input>
        <input value="BSC" type="radio" name="course">BSC</input>
        <input value="BBACA" type="radio" name="course">BBACA</input>
        <input value="BBA" type="radio" name="course">BBA</input>
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