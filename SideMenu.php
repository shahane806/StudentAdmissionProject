<?php


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
    <link rel="stylesheet" href="./CSS/sidemenu.css">
    <title>sideMenu</title>
</head>
<body>
<div class="sideMenuMain">
    <div class="sideMenuOptions">

        <div class="sideMenuOptionButtons"><a href="./ExamformDashboard.php"><button id="ExamForm" >ExamForm</button></a></div>
        <div class="sideMenuOptionButtons"><a href="./AdmissionDashboard.php"><button value = "Admission" type = "submit" id="Admission" name="Admission">Admission</button></a></div>
        <div class="sideMenuOptionButtons"><a href="./index.php"><button value = "LogOut" type = "submit" id="LogOut" name="LogOut">LogOut</button></a></div>
</div>
</div>
</body>
</html>