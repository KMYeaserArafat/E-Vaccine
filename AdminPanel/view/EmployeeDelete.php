<?php
include '../model/myDB.php';

if(isset($_GET['serial'])){
    $serial = $_GET['serial'];

    $model = new Model();
    $conn = $model->OpenConn();

  
    $query = "DELETE FROM addemployee WHERE serial = '$serial' ";
    

    $result = $conn->query($query);

    if(!$result){
        die("Query failed: " . mysqli_error($conn));
    } else {
        header("Location: ../view/Employee.php");
        exit(); 
    }
}
?>
