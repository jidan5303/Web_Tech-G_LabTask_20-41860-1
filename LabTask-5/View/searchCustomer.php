


<?php 
include "../View/adminDashboard.php";

?>
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
        <br><br><br><br><br>
        <div class="center">
        <div class="container" style="width:1100px;">              
                <div class="table-responsive">
    <!-- [SEARCH FORM] -->
    <form method="post" action="../Controller/findCustomer.php">
      <h3>SEARCH FOR CUSTOMERS</h3>
      <input type="text" name="user_name" />
      <input type="submit" name="findCustomer" value="Search"/>
    </form>
      </div>
      </div>
      </div>


 
  </body>
</html>