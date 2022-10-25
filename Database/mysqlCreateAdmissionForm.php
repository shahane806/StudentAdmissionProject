<?php
     if(!isset($_COOKIE['UserName']))
     {
         header("Location:../index.php");
     }
     include("./mysql.php");
     $UserName = "UserName";
     $conn = new mysqli("localhost","root","",$_COOKIE[$UserName]);
     if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
    
     
      
      


   if(isset($_POST['FullName']))
     {
         $_SESSION['FullName'] = $_POST['FullName'];
     }
   
     if(isset($_POST['Mobile']))
     {
         $_SESSION['Mobile'] = $_POST['Mobile'];
     }
   
     if(isset($_POST['Email']))
     {
         $_SESSION['Email'] = $_POST['Email'];
     }
   
     if(isset($_POST['SeatNo']))
     {
         $_SESSION['SeatNo'] = $_POST['SeatNo'];
     }
     if(isset($_POST['Marks']))
     {
         $_SESSION['Marks'] = $_POST['Marks'];
     }
     if(isset($_POST['OutOf']))
     {
         $_SESSION['OutOf'] = $_POST['OutOf'];
     }
     if(isset($_POST['Percentage']))
     {
         $_SESSION['Percentage'] = $_POST['Percentage'];
     }
     if(isset($_POST['course']))
     {
         $_SESSION['course'] = $_POST['course'];
     }
   
   
   if(!isset($_POST['FullName']))
     {
         $_SESSION['FullName'] = "NOTENTER";
     }
   
     if(!isset($_POST['Mobile']))
     {
         $_SESSION['Mobile'] = "NOTENTER";
     }
   
     if(!isset($_POST['Email']))
     {
         $_SESSION['Email'] ="NOTENTER";
     }
   
     if(!isset($_POST['SeatNo']))
     {
         $_SESSION['SeatNo'] = "NOTENTER";
     }
     if(!isset($_POST['Marks']))
     {
         $_SESSION['Marks'] ="NOTENTER";
     }
     if(!isset($_POST['OutOf']))
     {
         $_SESSION['OutOf'] = "NOTENTER";
     }
     if(!isset($_POST['Percentage']))
     {
         $_SESSION['Percentage'] = "NOTENTER";
     }
     if(!isset($_POST['course']))
     {
         $_SESSION['course'] = "NOTENTER";
     }
   
   
     
     $conn = new mysqli("localhost","root","",$_COOKIE['UserName']);
     if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      $FullName = "FullName";
      $Mobile = "Mobile";
      $Email = "Email";
      $SeatNo = "SeatNo";
      $Marks = "Marks";
      $OutOf = "OutOf";
      $Percentage = "Percentage";
      $course="course";
     
try {
  
 
    $sql = "SELECT course FROM $_COOKIE[$UserName]Admission ";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
       // output data of each row
       setcookie("Admission",$row[$ExamFormFilled], time() + (86400 * 30), "/"); // 86400 = 1 day
       header("Location:/SLP/Dashboard.php");
     } 
throw 'e';
} catch (\Throwable $e) {
   $sql = "CREATE TABLE $_COOKIE[$UserName]Admission (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      FullName VARCHAR(30) NOT NULL,
      Mobile VARCHAR(30) NOT NULL,
      SeatNo VARCHAR(50),
      Marks VARCHAR(50),
      OutOf VARCHAR(50),
      Percentage VARCHAR(50),
      Email VARCHAR(50) NOT NULL,
      course VARCHAR(20) NOT NULL,
      reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
      )";
      $c=$conn->query($sql);
      $sql = "INSERT INTO $_COOKIE[$UserName]Admission (FullName, Mobile, SeatNo,Marks,OutOf,Percentage,Email,course)
      VALUES ('$_SESSION[$FullName]','$_SESSION[$Mobile]', '$_SESSION[$SeatNo]', '$_SESSION[$Marks]','$_SESSION[$OutOf]','$_SESSION[$Percentage]','$_SESSION[$Email]','$_SESSION[$course]')";
      
      if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Form Submitted!")</script>';
        sleep(5);
         header("Location:/SLP/Dashboard.php");
     } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
     }
   
}
        
     
     
       
?>