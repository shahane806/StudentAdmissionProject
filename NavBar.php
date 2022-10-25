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
    <link rel="stylesheet" href="./CSS/navbar.css">
    <title>NavBar</title>
</head>
<body>
    
    <h1><br>Welcome , <?php echo $_COOKIE['UserName'];?></h1>
   
</body>
</html>