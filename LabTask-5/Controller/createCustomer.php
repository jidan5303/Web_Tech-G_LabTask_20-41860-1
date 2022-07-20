<?php  
require_once '../model/model.php';


if (isset($_POST['createCustomer'])) {
	$data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
	$data['username'] = $_POST['username'];
	$data['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 5]);
	$data['gender'] = $_POST['gender'];
    $data['mobile'] = $_POST['mobile'];

  if (addCustomer($data)) {
  	echo 'Successfully added!!';
    header("location:../View/showallCustomers.php");
  }
} else {
	echo 'You are not allowed to access this page.';
}

?>