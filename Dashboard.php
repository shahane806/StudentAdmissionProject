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
    <link rel="stylesheet" href="./CSS/dashboard.css">
    <title>Dashboard</title>
</head>
<body>
<div class="dashboardMain">
<div class="dashboardNavBar">
<?php
 include("./NavBar.php");
?>
</div>
<div class="dashboardMainBody">
    <div class="dashboardSideMenu">
        <h3>
            Menu
        </h3>
        <br>
        <br>
        <hr>
        <br>
        <?php
 include("./SideMenu.php");

?>
</div>
<div class="dashboardMainContent">
<?php
 include("./SideMenu.php");

?>
</div>
</div>

</div>
<div class="dashboardFooter">
<?php
 include("./Footer.php");

?>
</div>
</body>
</html>