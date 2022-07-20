<?php 

require_once 'db_connect.php';


function showAllCustomer(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `customerdata` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

 function showCustomer($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `customerdata` where Id = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
} 

function searchCustomer($user_name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `customerdata` WHERE Username LIKE '%$user_name%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addCustomer($data){
	$conn = db_conn();
    $selectQuery = "INSERT into customerdata (Name, Email, Username, Password, Gender, Mobile)
VALUES (:name, :email, :username, :password, :gender, :mobile)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':email' => $data['email'],
        	':username' => $data['username'],
        	':password' => $data['password'],
        	':gender' => $data['gender'],
        	':mobile' => $data['mobile'],
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function updateCustomer($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE customerdata set Name = ?, Email = ?, Username = ?, Gender = ?, Mobile = ? where Id = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['email'], $data['username'], $data['gender'], $data['mobile'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteCustomer($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `customerdata` WHERE `Id` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}