<?php  
require_once '../model/model.php';


if (isset($_POST['updateCustomer'])) {
	$data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
	$data['username'] = $_POST['username'];
	$data['gender'] = $_POST['gender'];
	$data['mobile'] = $_POST['mobile'];


  if (updateCustomer($_POST['id'], $data)) {
  	echo 'Successfully updated!!';
  	header("location: ../View/showAllCustomers.php");
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>