<?php
include '../model/myDB.php';

if(isset($_GET['serial'])){
    $serial = $_GET['serial'];

    $model = new Model();
    $conn = $model->OpenConn();


    $query = "SELECT * FROM `addemployee` WHERE `serial` = '$serial'";

    $result = $conn->query($query);


    if (!$result) {
        die("Query failed: " . $conn->error);
    } else {

        $row = $result->fetch_assoc();
    }
}
?>
