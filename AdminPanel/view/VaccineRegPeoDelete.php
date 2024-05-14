<?php
include '../model/myDB.php';

if(isset($_GET['NID_Number'])){
    $NID_Number = $_GET['NID_Number'];

    $model = new Model();
    $conn = $model->OpenConn();

    $query = "DELETE FROM vaccine_registration_people WHERE NID_Number = '$NID_Number' ";
    

    $result = $conn->query($query);

    if(!$result){
        die("Query failed: " . mysqli_error($conn));
    } else {
        header("Location: ../view/VaccineRegPeople.php");
        exit(); 
    }
}
?>
