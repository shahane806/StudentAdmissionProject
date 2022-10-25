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
   
     if(isset($_POST['C']))
     {
         $_SESSION['C'] = $_POST['C'];
     }
     if(isset($_POST['CPP']))
     {
         $_SESSION['CPP'] = $_POST['CPP'];
     }
     if(isset($_POST['Java']))
     {
         $_SESSION['Java'] = $_POST['Java'];
     }
     if(isset($_POST['Python']))
     {
         $_SESSION['Python'] = $_POST['Python'];
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
   
     if(!isset($_POST['C']))
     {
         $_SESSION['C'] = "NOTENTER";
     }
     if(!isset($_POST['CPP']))
     {
         $_SESSION['CPP'] = "NOTENTER";
     }
     if(!isset($_POST['Java']))
     {
         $_SESSION['Java'] = "NOTENTER";
     }
     if(!isset($_POST['Python']))
     {
         $_SESSION['Python'] = "NOTENTER";
     }
   
   
     
     $conn = new mysqli("localhost","root","",$_COOKIE['UserName']);
     if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      $FullName = "FullName";
      $Mobile = "Mobile";
      $C = "C";
      $CPP = "CPP";
      $Java = "Java";
      $Python = "Python";
      $ExamFormFilled="ExamFormFilled";
      $Email = "Email";
     
try {
  
 
    $sql = "SELECT ExamFormFilled FROM $_COOKIE[$UserName]examform ";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
       // output data of each row
       setcookie("ExamFormFilled",$row[$ExamFormFilled], time() + (86400 * 30), "/"); // 86400 = 1 day
       header("Location:/SLP/Dashboard.php");
     } 
throw 'e';
} catch (\Throwable $e) {
   $sql = "CREATE TABLE $_COOKIE[$UserName]examform (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      FullName VARCHAR(30) NOT NULL,
      Mobile VARCHAR(30) NOT NULL,
      C VARCHAR(50),
      CPP VARCHAR(50),
      Java VARCHAR(50),
      Python VARCHAR(50),
      Email VARCHAR(50) NOT NULL,
      ExamFormFilled VARCHAR(20) NOT NULL,
      reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
      )";
      $c=$conn->query($sql);
      $sql = "INSERT INTO $_COOKIE[$UserName]examform (FullName, Mobile, C,CPP,Java,Python,Email,ExamFormFilled)
      VALUES ('$_SESSION[$FullName]','$_SESSION[$Mobile]', '$_SESSION[$C]', '$_SESSION[$CPP]','$_SESSION[$Java]','$_SESSION[$Python]','$_SESSION[$Email]','Submited')";
      
      if ($conn->query($sql) === TRUE) {
         echo '<script>alert("Form Submitted!")</script>';
         sleep(5);
         header("Location:/SLP/Dashboard.php");
     } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
     }
   
}
        
     
     
       
?>