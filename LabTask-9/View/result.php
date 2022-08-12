<?php
include '../Model/model.php';

if($conn->connect_error)
{
	die("Connection failed:".$conn->connect_error);
}
else
{
    $q="SELECT * from customerdata";
	$result=$conn->query($q);
 
    $a = array();


    while($row=$result->fetch_assoc()){

 
    $a[] = $row['Name'];

    }

    $q = $_REQUEST["q"];

    $hint = "";

 
    if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
        if ($hint === "") {
            $hint = $name;
        } else {
            $hint .= ", $name";
        }
        }
    }
    }
    }
    echo $hint === "" ? "no suggestion" : $hint;

?>