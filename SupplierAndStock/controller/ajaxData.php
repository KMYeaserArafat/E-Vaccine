<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dataBaseName = "e_vaccine";

$conn = new mysqli($serverName,$userName,$password,$dataBaseName);

if($conn->connect_error){
    die("Connection Error : ". $conn->connect_error);
}else{
    $tableName = "addsupplyreport";
    $sql = "SELECT * FROM $tableName";
    $result = $conn->query($sql);

    $rows = array();
    while($row = $result->fetch_assoc()){
        $rows[] = $row;
    }

    // Output JSON, 
    header('Content-Type: application/json');
    echo json_encode($rows);


    $conn->close();
}



?>