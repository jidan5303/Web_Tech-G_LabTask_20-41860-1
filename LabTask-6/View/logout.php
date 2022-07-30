<?php
    session_start();

    if(isset($_POST["logout"]))  
    {
            if (isset($_SESSION['name'])) {
                session_destroy();
                header("location:login.php");
            }
            else{
                header("location:login.php");
            }
    }  
    if(isset($_POST["return"])){
        header("location:profileDashboard.php");
    }
?>
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
        margin-top: 80px;
        width: 300px;
        height: 95%;
        position: fixed;
    }

    .edit{
        font-size: 20px;
        color: #63CF3C;
    }
    .edit:hover{
        background: white;
    }
    .delete{
        font-size: 20px;
        color: #FF0000;
    }
    .delete:hover{
        background: white;
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

    .center{
        width: 110%;
        display: flex;
        justify-content: center;
    }

    .lab{
        font-size: 20px;

    }


</style>

<body style=" margin:0;">
    <div style="display:flex; justify-content: space-between; align-items: center; width: 100%; position: fixed; background: #85C429; padding: 20px 0; top: 0;">
        <span style="font-size: 40px; font-family: Sans-serif; font-weight: bold; padding-left: 50px">
            Vojon<span style="color:BF0A0A">Bilash</span>
        </span>
        <span style="font-size: 25px; font-family: Sans-serif; font-weight: bold;">
            <span style="color: black; text-decoration: none; padding: 15px; padding-right= 0px; margin-right: 0;">Logged in as,</span>
            <a href="Task_E_dashboard.php" style="color: #BF0A0A; border-right: 3px solid #C8F4BB; text-decoration: none; padding: 15px; margin-left: 0; margin-right: 0px;">
        <?php
            if(isset($_SESSION['name']))
            {
                echo $_SESSION['name'];
            }
            else
            {
                header("location:login.php");  
            }
        ?>    
        </a>
            <a href="../View/logout.php" style="color: black; text-decoration: none; padding: 15px; margin-left:0; margin-right: 10px;">Logout</a>
        </span>
    </div>

    <div class = "dashboard">
        <h1 class="account">Admin<br></h1>
        <nav>
            <a style="text-decoration: none;" href="profile.php?uname=<?php echo $_SESSION['name'] ?>">View Profile</a>
            <a style="text-decoration: none;" href="editProfile.php?uname=<?php echo $_SESSION['name'] ?>">Edit Profile</a>
            <a style="text-decoration: none;" href="ownerDetail.php">Change Password</a>
            <a style="text-decoration: none;" href="logout.php">Logout</a>
        </nav>
    </div>
    <div class="center" >
        <div class="container" style="width: 800px;"> 
            <br><br><br><br><br><br><br>
            <form action="" method="post">
                <?php
                    if(isset($error)){
                        echo $error;
                    }
                ?>
                <label class="lab">Are you sure want to logout?</label><br>

                <input type="submit" name="logout" class="delete" style="text-decoration: none;" value="Yes">

                <input type="submit" name="return" class="edit" style="text-decoration: none;" value="No">

            </form>
        </div>
    </div>

    <div style="color:white; width: 100%; position: fixed; background: black; padding: 5px 0; bottom: 0; font-family: Sans-serif; font-weight: bold;">
        <div style="display:flex; justify-content: center; align-items: center;">Copyright &copy; 2022 Vojon<span style="color:red;">Bilash</span></div>        
    </div>
</body>
</html>