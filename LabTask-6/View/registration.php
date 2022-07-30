<?php 
    include "../View/headerfooter.php";
?>

<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Registration</title>  
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
           <br><br><br><br><br>  
           <div class="container" style="width:500px;">  
                                
                <form action="../controller/registerUser.php" method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br /> 
                     <fieldset>
                        <legend>REGISTRATION</legend> 
                     <label>Name</label>  
                     <input type="text" name="name" class="form-control" /><br />  
                     <label>E-mail</label>
                     <input type="text" name = "email" class="form-control" /><br />
                     <label>User Name</label>
                     <input type="text" name = "username" class="form-control" /><br />
                     <label>Password</label>
                     <input type="password" name = "password" class="form-control" /><br />                   
                    <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label>                     
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label>
                    <input type="radio" id="other" name="gender" value="other">
                    <label for="other">Other</label><br>
                    </fieldset> <br>

                    <label>Mobile</label>
                     <input type="text" name = "mobile" class="form-control" /><br />
                    
                     
                    <input type="submit" name="submitUser" value="Submit" />
                    <input type="submit" name="reset" value="Reset" /><br />           
                    </fieldset>           
                    <?php  
                    if(isset($message))  
                    {  
                         echo $message;  
                    }  
                    ?>  
               </form>  
          </div>  
          <br />  
     </body>  
</html>
