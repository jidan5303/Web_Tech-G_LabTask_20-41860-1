<?php 
include "../View/profileDashboard.php";

require_once ('../model/model.php');

$curpassErr = $newpassErr = $confirmpassErr = "";

if (isset($_POST['change'])) {
    if($_POST['newpass']!=$_POST['conpass']){
        $confirmpassErr="Confirm password must match with new password";
    }
    else{
    try {  
       $user = searchUser($_POST['id'],$_POST['curpass']);
       if(count($user) == 1){  
            require_once ('../model/model.php');
            $data['pass'] = $_POST['newpass'];
            updatePassword($_POST['id'], $data);
            header("location: ../View/passwordUpgradedDashboard.php");
       }  
       else{  
           $curpassErr="Invalid current Password";  
       } 

        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
}


 ?>
<!DOCTYPE html>
<html>
<head> 
        <title>VojonBilash</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    </head> 
    <style>
        .edit{
            font-size: 15px;
            color: #63CF3C;
        }
        .edit:hover{
            background: white;
        }
        .delete{
            font-size: 15px;
            color: #FF0000;
        }
        .delete:hover{
            background: white;
        }

        .center{
            width: 100%;
            display: flex;
            justify-content: center;
        }
    </style> 
      <body>  
        <br><br><br><br><br><br>
        <div class="center">
        <div class="container" style="width:700px;">              
        <div class="table-responsive">
        <h2>Change Password:-</h2>
        <form action="" method="POST" enctype="multipart/form-data">

        <label>Current Password</label>
        <input type="password" name = "curpass" class="form-control" /><br /> 
        <span class="error">* <?php echo $curpassErr;?></span> <br />

        <label>New Password</label>
        <input type="password" name = "newpass" class="form-control" /><br /> 
        <span class="error">* <?php echo $newpassErr;?></span> <br />

        <label>Confirm Password</label>
        <input type="password" name = "conpass" class="form-control" /><br />  
        <span class="error">* <?php echo $confirmpassErr;?></span> <br /> 
            
        <input type="hidden" name="id" value="<?php echo $_GET['uname'] ?>"><br>
        <input type="submit" class = "edit" name = "change" value="Update">
           
        </form> 
      </div>
      </div>
      </div>

</body>
</html>

