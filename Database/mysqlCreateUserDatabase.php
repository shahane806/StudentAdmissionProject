<?php
if(!isset($_COOKIE['UserName']))
{
    header("Location:../index.php");
}
include("./mysql.php");

$FullName = 'FullName';
$Email = 'Email';
$UserName = 'UserName';
$Password  = 'Password';
$ConfirmPassword  = 'ConfirmPassword';

 $_SESSION[$FullName] = $_POST['FullName'];
 $_SESSION[$Email] = $_POST['Email'];
 $_SESSION[$UserName] = $_POST['UserName'];
 $_SESSION[$Password]  = $_POST['Password'];
 $_SESSION[$ConfirmPassword]  = $_POST['ConfirmPassword'];

 
//creating user database
 $sql = "CREATE DATABASE $_SESSION[$UserName]";
if ($conn->query($sql) === TRUE);

//creating userlogintable
$sql = "CREATE TABLE $_SESSION[$UserName]LoginDetails (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    FullName VARCHAR(30) NOT NULL,
    UserName VARCHAR(30) NOT NULL,
    Password VARCHAR(50),
    Email VARCHAR(50) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
 $conn= new mysqli("localhost","root","",$_SESSION['UserName']);
if ($conn->query($sql) === TRUE);
$sql = "INSERT INTO $_SESSION[$UserName]LoginDetails (FullName, UserName, Password,Email)
VALUES ('$_SESSION[$FullName]','$_SESSION[$UserName]', '$_SESSION[$Password]', '$_SESSION[$Email]')";

if ($conn->query($sql) === TRUE){
    header("Location:../index.php");
}
else
{
    header("Location:../index.php");

}
$conn->close();
?>
