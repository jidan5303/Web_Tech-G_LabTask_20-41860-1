<?php  
require_once '../controller/customerinfo.php';

$customers = fetchAllCustomer();

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
                     <table class="table table-bordered">  
                          <tr>  
                               <th>Name</th> 
                               <th>E-mail</th>  
                               <th>Username</th>  
                               <th>Password</th> 
                               <th>Gender</th>   
                               <th>Mobile</th>
                               <th colspan=2>Modify</th>   
                          </tr>  
                          <?php foreach ($customers as $i => $customer): ?>   
                               <tr>
							   <td><a href="showcustomer.php?id=<?php echo $customer['Id'] ?>"><?php echo $customer['Name'] ?></a></td>
                               <td><?php echo $customer['Email'] ?></td>
                               <td><?php echo $customer['Username'] ?></td>
                               <td><?php echo $customer['Password'] ?></td>
                               <td><?php echo $customer['Gender'] ?></td>
                               <td><?php echo $customer['Mobile'] ?></td>
                               <td><a class="edit" style="text-decoration: none;" href="../View/editCustomer.php?id=<?php echo $customer['Id'] ?>">Edit</a></td>
                               <td><a class="delete" style="text-decoration: none;" href="../Controller/deleteCustomer.php?id=<?php echo $customer['Id'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
                               </tr>
                               <?php endforeach; ?> 
                     </table> 
					 <field><legend><a class="edit" style="text-decoration: none;" href="../View/addCustomer.php ?>">ADD CUSTOMER</a></legend><br>
					 <legend><a class="edit" style="text-decoration: none;" href="../View/searchCustomer.php ?>">SEARCH CUSTOMER</a></legend><br>
					 </field><br>
                   </div>
                 </div>
        </div>
      </body>  
 </html>  