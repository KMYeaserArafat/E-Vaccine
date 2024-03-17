<?php

include '../controller/DeleteSupplyReport_Controller.php';
$sn = $_GET['sn'];

$DeleteData = $myDB->DeleteSupplyReport($conObj,"addsupplyreport",$sn);

$deleteMessage = "";

if($DeleteData==TRUE){
    $deleteMessage = "Slip No : ".$sn." Data is Deleted";
}else{
    $deleteMessage = "Data is not deleted!";
}

?>

<!DOCTYPE html>
<html>
    <body>
        <h3><?php  echo($deleteMessage);  ?></h3>
        <h3><a href="DeleteSupplyReport_View.php">Back Page..</h3>
    </body>
</html>