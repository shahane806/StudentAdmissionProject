<?php
if(!isset($_COOKIE['UserName']))
{
    header("Location:../index.php");
}
include("./mysql.php");

$UserName = 'UserName';
$Password  = 'Password';
$_SESSION[$UserName] = $_POST['UserName'];
$_SESSION[$Password]  = $_POST['Password'];
$cookie_name = "UserName";
$cookie_value = "$_SESSION[$UserName]";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

$conn = new mysqli($servername, $username, $password, $_SESSION[$UserName] );
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT UserName,Password FROM $_SESSION[$UserName]logindetails where UserName = '$_SESSION[$UserName]' && Password = '$_SESSION[$Password]'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
   header("Location:../Dashboard.php");
  } else {
    header("Location: ../Login.php");
  }

?>