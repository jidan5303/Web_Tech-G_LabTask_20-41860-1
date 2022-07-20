<?php 

require_once '../controller/customerinfo.php';
$customer = fetchCustomer($_GET['id']);

include "../View/adminDashboard.php";


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
            width: 110%;
            display: flex;
            justify-content: center;
        }
    </style> 
      <body>  
        <br><br><br><br><br><br>
        <div class="center">
        <div class="container" style="width:1100px;">              
        <div class="table-responsive">

        <form action="../controller/updateCustomer.php" method="POST" enctype="multipart/form-data">
          <label for="name">Name:</label><br>
          <input value="<?php echo $customer['Name'] ?>" type="text" id="name" name="name"><br>
          <label for="surname">Email:</label><br>
          <input value="<?php echo $customer['Email'] ?>" type="text" id="email" name="email"><br>
          <label for="username">Username:</label><br>
          <input value="<?php echo $customer['Username'] ?>" type="text" id="username" name="username"><br>
          <label for="gender">Gender:</label><br>
          <input value="<?php echo $customer['Gender'] ?>" type="text" id="gender" name="gender"><br>
          <label for="mobile">Mobile:</label><br>
          <input value="<?php echo $customer['Mobile'] ?>" type="text" id="mobile" name="mobile"><br>

          <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>"><br>
          <input type="submit" class = "edit" name = "updateCustomer" value="Update">
          <input type="reset" class = "delete"> 
        </form> 
      </div>
      </div>
      </div>

</body>
</html>

