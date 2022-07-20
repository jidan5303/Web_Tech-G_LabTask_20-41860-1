<?php
function readData(){
    $data = file_get_contents('../Data/registrationdata.json');  
    $data = json_decode($data, true);
    return $data;
}

function info($data){
    $all_data = readData();
    foreach($all_data as $row){
        if ($row['username']==$data) {
            $d_data = array(
                'name' => $row['name'],
                'e-mail' => $row['e-mail'],
                'username' => $row['username'],
                'pass' => $row['pass'],
                'gender' => $row['gender'],
                'number' => $row['number'],
            );
        return $d_data;
        }
    }
}

?>