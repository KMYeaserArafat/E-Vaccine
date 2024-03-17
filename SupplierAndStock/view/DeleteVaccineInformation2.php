<?php

include '../controller/DeleteVaccineInformation.php';

 $VaccineCode = $_GET['rn'];
 $message = "";

$myDB = new Model();
$connObj = $myDB->OpenConn();
$result1 = $myDB->DeleteVaccineInformation($connObj,"vaccineregistration",$VaccineCode);

if($result1==TRUE){
    $message = "Data is Deleted!";
}else{
    $message = "Data isn't Deleted!";
}

?>

<!DOCTYPE html>
<html>
    <body>
        <h2><?php echo($message); ?></h2>
        <h3><a href="DeleteVaccineInformation.php">Back</h3>
    </body>
</html>