<?php 
include "../View/adminDashboard.php";

?>
<!DOCTYPE html>
<html>
<head>
<head> 
        <title>VojonBilash</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
	<style>
		table,td,th{
			border:1px solid black;
		}
		.center{
            width: 110%;
            display: flex;
            justify-content: center;
        }
	</style>
</head>
<body>
<br><br><br><br><br>
<div class="center">
        <div class="container" style="width:1100px;">
<h3>SEARCHED RESULTS:</h3>
<div class="table-responsive"> 
      <table class="table table-bordered">
		<tr>
			<th>Customer_id</th>
			<th>Customer_name</th>
			<th>Action</th>
		</tr>
		<?php foreach ($allSearchedCustomers as $i => $user): ?>
			<tr>
				<td><a href="../showCustomer.php?id=<?php echo $user['Id'] ?>"><?php echo $user['Id'] ?></a></td>
				<td><?php echo $user['Username'] ?></td>
				<td><a href="../View/editCustomer.php?id=<?php echo $user['Id'] ?>">Edit</a>&nbsp&nbsp/&nbsp<a href="../View/deleteCustomer.php?id=<?php echo $user['Id'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
</table>
		</div>
		</div>
		</div>

</body>
</html>