<?php  
require_once '../model/model.php';


if (isset($_POST['submitUser'])) {
	$data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
	$data['username'] = $_POST['username'];
	$data['password'] = $_POST['password'];
	$data['gender'] = $_POST['gender'];
    $data['mobile'] = $_POST['mobile'];

  if (registerUser($data)) {
    header("location:../View/registrationSuccess.php");
  }
} else {
	echo 'You are not allowed to access this page.';
}

?>