<?php
$message="";
function storeData($data){
	$current_data = file_get_contents('../Data/registrationdata.json');  
    $array_data = json_decode($current_data, true);  
     
    $array_data[] = $data;  
    $final_data = json_encode($array_data);  
    return $final_data;
}

function addData($data){
	$final_data = storeData($data);
    if(file_put_contents('../Data/registrationdata.json', $final_data))  
    {  
        header("location:../View/registrationSuccess.php");    
    }  
}

function readData(){
	$data = file_get_contents("../Data/registrationdata.json");  
	$data = json_decode($data, true); 
	return $data;
}
function regiInfo($data){

    $all_data = readData();
        foreach($all_data as $row)  {
            if ($row['username']==$data) {
                $d_data = array(
                    'username' => $row['username'],
                );
            return $d_data;
            }
        }
}
?>