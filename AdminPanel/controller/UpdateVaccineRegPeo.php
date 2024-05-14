<?php
include '../model/myDB.php';

if(isset($_GET['NID_Number'])){
    $NID_Number = $_GET['NID_Number'];


    $model = new Model();
    $conn = $model->OpenConn();


    $query = "SELECT * FROM `vaccine_registration_people` WHERE `NID_Number` = '$NID_Number'";

    $result = $conn->query($query);

    if (!$result) {
        die("Query failed: " . $conn->error);
    } else {
       
        $row = $result->fetch_assoc();
    }
}
?>
