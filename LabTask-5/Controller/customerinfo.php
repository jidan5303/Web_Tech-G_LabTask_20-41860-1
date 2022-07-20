<?php 

require_once ('../model/model.php');

function fetchAllCustomer(){
	return showAllCustomer();

}
function fetchCustomer($id){
	return showCustomer($id);

}
?>