<?php
    session_start();
?>

<html>

<head>
        <title>VojonBilash</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head>
<style>
    span a:hover{
        background: #98DA37;
    }

    nav a:hover{
        background: #1F8A24;
        color: white;
    }

    .dashboard{
        background: #003002;
        margin-top: 100px;
        width: 300px;
        height: 95%;
        position: fixed;
    }

    .account{
        color: white;
        display:flex;
        justify-content: center;
        padding-top: 10px;
        padding-bottom: 25px;
        border-bottom: 5px outset white;
        margin-bottom: 0;
    }

    nav {
        margin:0;
    }

    nav a{
        color: white;
        font-size: 20px;
        display:flex;
        justify-content: center;
        align-items: center;
        padding-top: 25px;
        padding-bottom: 25px;
        margin: 0;
    }


</style>

<body style=" margin:0;">
    <div style="display:flex; justify-content: space-between; align-items: center; width: 100%; position: fixed; background: #85C429; padding: 20px 0; top: 0;">
        <span style="font-size: 40px; font-family: Sans-serif; font-weight: bold; padding-left: 50px">
            Vojon<span style="color:BF0A0A">Bilash</span>
        </span>
        <span style="font-size: 25px; font-family: Sans-serif; font-weight: bold;">
            <span style="color: black; text-decoration: none; padding: 15px; padding-right= 0px; margin-right: 0;">Logged in as,</span>

            <a href="../View/logout.php" style="color: black; text-decoration: none; padding: 15px; margin-left:0; margin-right: 10px;">Logout</a>
        </span>
    </div>

    <div class = "dashboard">
        <h1 class="account">Admin<br></h1>
        <nav>
            <a style="text-decoration: none;" href="showAllCustomers.php">Customer Details</a>
            <a style="text-decoration: none;" href="restaurantDetail.php">Restaurant Details</a>
            <a style="text-decoration: none;" href="ownerDetail.php">Restaurant Owner Details</a>
            <a style="text-decoration: none;" href="deliveryboyDetail.php">Delivery Boy Details</a>
            <a style="text-decoration: none;" href="report.php">Reports</a>
        </nav>
    </div>

    <div style="color:white; width: 100%; position: fixed; background: black; padding: 5px 0; bottom: 0; font-family: Sans-serif; font-weight: bold;">
        <div style="display:flex; justify-content: center; align-items: center;">Copyright &copy; 2022 Vojon<span style="color:red;">Bilash</span></div>        
    </div>
</body>
</html>