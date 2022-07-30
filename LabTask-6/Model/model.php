<?php 

require_once 'db_connect.php';


function showAllCustomer(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `registration` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

 function showProfile($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `registration` where Username = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
} 

function searchUser($username,$pass){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `registration` where Username ='{$username}' and Password ='{$pass}'";

    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function registerUser($data){
	$conn = db_conn();
    $selectQuery = "INSERT into registration (Name, Email, Username, Password, Gender, Mobile)
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


function updateProfile($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE registration set Name = ?, Email = ?, Username = ?, Gender = ?, Mobile = ? where Username = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['email'], $data['username'], $data['gender'], $data['mobile'],$id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function updatePassword($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE registration set Password = ? where Username = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['pass'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}