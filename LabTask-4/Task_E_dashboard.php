<?php
include 'login header footer dashboard.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head> 
</head>
<body>
        <div class="container">
            <h1 style="display:flex; padding-top: 90px; padding-left: 400px; font-size: 90px;">Welcome 
            <?php
            if(isset($_SESSION['name']))
            {
                echo $_SESSION['name'];
            }
            else
            {
                header("location:Task_C_login.php");  
            }
            ?>    
            </h1>
        </div>
</body>
</html>