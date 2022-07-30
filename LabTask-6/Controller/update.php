<?php  
require_once '../model/model.php';


if (isset($_POST['updateProfile'])) {
	$data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
	$data['username'] = $_POST['username'];
	$data['gender'] = $_POST['gender'];
	$data['mobile'] = $_POST['mobile'];


  if (updateProfile($_POST['id'], $data)) {
  	
  	header("location: ../View/profileUpgradedDashboard.php");
    
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>