<?php
include '../model/myDB.php';

if(isset($_GET['VaccineCode'])){
    $VaccineCode = $_GET['VaccineCode'];

    $model = new Model();
    $conn = $model->OpenConn();

    $query = "DELETE FROM vaccineregistration WHERE VaccineCode = '$VaccineCode' ";
    

    $result = $conn->query($query);

    if(!$result){
        die("Query failed: " . mysqli_error($conn));
    } else {
        header("Location: ../view/VaccineRegPeople.php");
        exit(); 
    }
}
?>
