<?php

include "../View/headerfooter.php";
require_once '../model/model.php';
$message = $nameErr = $passErr = "";

if (isset($_POST['login'])) {
    

     try {
    	$name = $_POST['name'];   
    	$user = searchUser($_POST['name'],$_POST['pass']);
        if(count($user) == 1){  
            session_start();			        

                $_SESSION['name'] = $name;
                header("location:../View/welcomeDashboard.php");  
        }  
        else{  
            $message="Invalid Username or Password";  
        } 

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}

?>

<html>
<head>
    <title>VojonBilash</title>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head> 
<body>  
    
    
    <br />  
    <div class="container" style="width: 500px; height: 10%;"> 
    <br><br><br><br><br><br>
    <h4><span style="color:red"><?php 
    if(isset($message)){
        echo $message;
    }
    ?></span></h5>

    <form action="" method="post">
        
    <fieldset>
        <legend>LOGIN</legend>
        <label>User Name :</label>
        <input type = "text" name = "name" class="form-control" value="<?php if(isset($_COOKIE['name'])) {echo $_COOKIE['name'];} ?>">
        <span class="error">* <?php echo $nameErr;?></span> <br />
        <label>Password  :</label>
        <input type = "password" name = "pass" class="form-control" value="<?php if(isset($_COOKIE['pass'])) {echo $_COOKIE['pass'];} ?>">
        <span class="error">* <?php echo $passErr;?></span> <br />
        <hr>
        <input type = "checkbox" name = "remember" <?php if(isset($_COOKIE['username'])) {echo "checked";} ?>>Remember Me<br><br>
        <input type = "submit" name = "login" value = "Login">

        <?php
            if (!empty($_POST['remember'])) {
                setcookie("name", $_POST['name'], time()+100);
                setcookie("pass", $_POST['pass'], time()+100);                
            }else{
                setcookie("name", "");
                setcookie("pass", "");
            }
        ?>
    </fieldset>
    </form>
</body>
</html>