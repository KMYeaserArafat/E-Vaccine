<?php
include '../model/myDB.php';

if(isset($_GET['VaccineCode'])){
    $VaccineCode = $_GET['VaccineCode'];


    $model = new Model();
    $conn = $model->OpenConn();

    $query = "SELECT * FROM `vaccineregistration` WHERE `VaccineCode` = '$VaccineCode'";

    $result = $conn->query($query);

    if (!$result) {
        die("Query failed: " . $conn->error);
    } else {

        $row = $result->fetch_assoc();
    }
}
?>
